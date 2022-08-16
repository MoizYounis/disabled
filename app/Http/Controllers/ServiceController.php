<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Utils\Constant;
use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use App\Models\ServiceRequest;
use Illuminate\Support\Facades\Session;

class ServiceController extends Controller
{
    /**
     * Display a listing of the Zone.
     *
     * @param ZoneDataTable $zoneDataTable
     * @return Response
     */
    public function index()
    {
        $user = auth()->user();
        if ($user->role == Constant::ADMIN) {
            $services = Service::with('user')->latest()->get();
        } else {
            $services = Service::with('user')->where('user_id', $user->id)->latest()->get();
        }
        return view('service.index', compact('services'));
    }

    /**
     * Show the form for creating a new Zone.
     *
     * @return Response
     */
    public function create()
    {
        return view('service.create');
    }

    /**
     * Store a newly created Zone in storage.
     *
     * @param CreateZoneRequest $request
     *
     * @return Response
     */
    public function store(Request $request)
    {
       $request->validate([
           'name' => 'required',
           'description' => 'required'
       ]);

       $user = auth()->user();
        /** @var Service $service */
        $service = Service::create([
            'user_id' => $user->id,
            'name' => $request->name,
            'description' => $request->description
        ]);

        Flash::success('Service saved successfully.');

        return redirect(route('service.index'));
    }

    /**
     * Display the specified Zone.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Service $service */
        $service = Service::find($id);

        if (empty($service)) {
            Flash::error('Service not found');

            return redirect(route('service.index'));
        }

        return view('service.show', compact('service'));
    }

    /**
     * Show the form for editing the specified Zone.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Service $service */
        $service = Service::find($id);

        if (empty($service)) {
            Flash::error('Service not found');

            return redirect(route('service.index'));
        }

        return view('service.edit', compact('service'));
    }

    /**
     * Update the specified Zone in storage.
     *
     * @param  int              $id
     * @param UpdateZoneRequest $request
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);
        /** @var Service $service */
        $service = Service::find($id);

        if (empty($service)) {
            Flash::error('Service not found');

            return redirect(route('service.index'));
        }

         /** @var Service $service */
         $service->update([
             'name' => $request->name,
             'description' => $request->description
         ]);

        Flash::success('Service updated successfully.');

        return redirect(route('service.index'));
    }

    /**
     * Remove the specified Zone from storage.
     *
     * @param  int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Service $blog */
        $service = Service::find($id);

        if (empty($service)) {
            Flash::error('Service not found');

            return redirect(route('service.index'));
        }

        $service->delete();

        Flash::success('Service deleted successfully.');

        return redirect(route('service.index'));
    }

    public function serviceRequest($id) {
        if(Session::has('user_auth')) {
            $service = Service::find($id);
            return view('service.service_request', compact('service'));
        } else {
            return redirect(route('userLoginView'));
        }
    }

    public function addServiceRequest(Request $request) {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'message' => 'required'
        ]);

        ServiceRequest::create([
            "service_id" => $request->service_id,
            "user_id" => session('user_auth')['id'],
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'message' => $request->message,
            'owner_id' => $request->owner_id
        ]);
        return back()->with('success', 'Your Request For Service Has Been Saved, We Will Contact You Soon!');
    }
}
