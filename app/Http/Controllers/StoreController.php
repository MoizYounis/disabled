<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Laracasts\Flash\Flash;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    /**
     * Display a listing of the Zone.
     *
     * @param ZoneDataTable $zoneDataTable
     * @return Response
     */
    public function index()
    {
        $stores = Store::all();
        return view('store.index', compact('stores'));
    }

    /**
     * Show the form for creating a new Zone.
     *
     * @return Response
     */
    public function create()
    {
        return view('store.create');
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
           'image' => 'required|file',
           'description' => 'required'
       ]);

       if($request->hasFile('image')) {
           $image = $request->file('image')->store('images', 'public');
       }

       $user = auth()->user();
        /** @var Store $store */
        $store = Store::create([
            'user_id' => $user->id,
            'name' => $request->name,
            'image' => $image ?? null,
            'description' => $request->description
        ]);

        Flash::success('Product saved successfully.');

        return redirect(route('store.index'));
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
        /** @var Store $store */
        $store = Store::find($id);

        if (empty($store)) {
            Flash::error('Product not found');

            return redirect(route('store.index'));
        }

        return view('store.show', compact('store'));
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
        /** @var Store $store */
        $store = Store::find($id);

        if (empty($store)) {
            Flash::error('Product not found');

            return redirect(route('store.index'));
        }

        return view('store.edit', compact('store'));
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
        /** @var Store $store */
        $store = Store::find($id);

        if (empty($store)) {
            Flash::error('Product not found');

            return redirect(route('store.index'));
        }

        if($request->hasFile('image')) {
            $store->image = $request->file('image')->store('images', 'public');
            $store->save();
        }

        $user = auth()->user();
         /** @var Store $store */
         $store->update([
             'user_id' => $user->id,
             'name' => $request->name,
             'description' => $request->description
         ]);

        Flash::success('Store updated successfully.');

        return redirect(route('store.index'));
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
        /** @var Store $blog */
        $store = Store::find($id);

        if (empty($store)) {
            Flash::error('Product not found');

            return redirect(route('store.index'));
        }

        $store->delete();

        Flash::success('Product deleted successfully.');

        return redirect(route('store.index'));
    }
}
