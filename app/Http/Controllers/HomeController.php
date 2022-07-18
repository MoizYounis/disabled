<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use App\Models\Store;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('user');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = auth()->user();
        return view('home', compact('user'));
    }
    public function blogs()
    {
        $blogs = Blog::with('user')->paginate(6);
        return view('blogs', compact('blogs'));
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
    public function stores()
    {
        $stores = Store::pluck('user_id')->toArray();
        $stores_unq = array_unique($stores);

        $stores_arr = [];
        foreach ($stores_unq as $key => $store_unq) {
            $stores_arr[] = User::withCount('products')->where('id', $store_unq)->paginate(1);
        }
        return view('store', compact('stores_arr'));
    }
    public function allProducts($id) {
        $products = Store::where('user_id', $id)->with('user')->paginate(6);
        if($products == null){
        Flash::error('Store not found');
        return redirect(route('stores'));
        }
        return view('products', compact('products'));
    }
    public function ngoDetail(){
        return view('ngo-detail');
    }

    public function schoolDetail(){
        return view('school-detail');
    }
    public function hospitalDetail(){
        return view('hospital-detail');
    }
    public function storeDetail(){
        return view('store-detail');
    }
    public function sdgsDetail(){
        return view('sdgs-detail');
    }
    public function organization() {
        $role = request()->input('name');
        $organizations = User::where('role', $role)->latest()->get();
        $name = User::where('role', $role)->latest()->first();
        return view('organization.organization', compact('organizations', 'name'));
    }
}
