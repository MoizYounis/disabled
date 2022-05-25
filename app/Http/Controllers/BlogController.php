<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Laracasts\Flash\Flash;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the Zone.
     *
     * @param ZoneDataTable $zoneDataTable
     * @return Response
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new Zone.
     *
     * @return Response
     */
    public function create()
    {
        return view('blogs.create');
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
           'blog' => 'required'
       ]);

       $user = auth()->user();
        /** @var Blog $blog */
        $blog = Blog::create([
            'user_id' => $user->id,
            'blog' => $request->blog,
            'heading' => $request->heading
        ]);

        Flash::success('Blog saved successfully.');

        return redirect(route('blogs.index'));
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
        /** @var Blog $zone */
        $blog = Blog::find($id);

        if (empty($blog)) {
            Flash::error('Blog not found');

            return redirect(route('blogs.index'));
        }

        return view('blogs.show', compact('blog'));
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
        /** @var Blog $zone */
        $blog = Blog::find($id);

        if (empty($blog)) {
            Flash::error('Zone not found');

            return redirect(route('blogs.index'));
        }

        return view('blogs.edit', compact('blog'));
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
            'blog' => 'required'
        ]);
        /** @var Blog $zone */
        $blog = Blog::find($id);

        if (empty($blog)) {
            Flash::error('Blog not found');

            return redirect(route('blogs.index'));
        }

        $blog->fill($request->all());
        $blog->save();

        Flash::success('Blog updated successfully.');

        return redirect(route('blogs.index'));
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
        /** @var Blog $blog */
        $blog = Blog::find($id);

        if (empty($blog)) {
            Flash::error('Blog not found');

            return redirect(route('blogs.index'));
        }

        $blog->delete();

        Flash::success('Blog deleted successfully.');

        return redirect(route('blogs.index'));
    }
}
