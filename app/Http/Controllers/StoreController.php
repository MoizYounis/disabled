<?php

namespace App\Http\Controllers;

use App\Models\Store;
use App\Utils\Constant;
use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use App\Models\ProductRequest;
use Illuminate\Support\Facades\Session;

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
        $user = auth()->user();
        if ($user->role == Constant::ADMIN) {
            $stores = Store::with('store')->latest()->get();
        } else {
            $stores = Store::with('store')->where('user_id', $user->id)->latest()->get();
        }
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
         /** @var Store $store */
         $store->update([
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
    public function productRequest($id) {
        if(Session::has('user_auth')) {
            $product = Store::find($id);
            return view('store.product_request', compact('product'));
        } else {
            return redirect(route('userLoginView'));
        }
    }

    public function addProductRequest(Request $request) {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'message' => 'required'
        ]);

        ProductRequest::create([
            "product_id" => $request->product_id,
            "user_id" => session('user_auth')['id'],
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'message' => $request->message,
            'owner_id' => $request->owner_id
        ]);
        return back()->with('success', 'Your Request For Product Has Been Saved, We Will Contact You Soon!');
    }

    public function allProductsRequest() {
        $products = ProductRequest::with('user', 'product')->where('owner_id', auth()->user()->id)->orderBy('id', 'DESC')->get();
        return view('products_request.index', compact('products'));
    }
}
