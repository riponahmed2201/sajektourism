<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tags = Tag::latest()->get();

        return view('backend.tags.index', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.tags.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255|unique:tags',
            'details' => 'required|string',
            'status' => 'nullable'
        ]);

        $input = [
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'details' => $request->details,
            'status' => $request->filled('status') ? Tag::STATUS_ACTIVE : Tag::STATUS_DEACTIVE,
            'created_by' => Auth::user()->id,
            'created_at' => Carbon::now(),
        ];

        try {
            Tag::create($input);
            notify()->success("Tag created successfully", "Success");
            return to_route('tags.index');
        } catch (Exception $exception) {
            notify()->success("Something error found! Please try again", "Error");
            return back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Tag $tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tag $tag)
    {
        return view('backend.tags.form', compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tag $tag)
    {
        $request->validate([
            'title' => 'required|string|max:255|unique:tags,title,' . $tag->id,
            'details' => 'required|string',
            'status' => 'nullable'
        ]);

        $input = [
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'details' => $request->details,
            'status' => $request->filled('status') ? Tag::STATUS_ACTIVE : Tag::STATUS_DEACTIVE,
            'created_by' => Auth::user()->id,
            'created_at' => Carbon::now(),
        ];

        try {

            $tag->update($input);

            notify()->success("Tag updated successfully", "Success");

            return to_route('tags.index');
        } catch (Exception $exception) {
            notify()->success("Something error found! Please try again", "Error");
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tag $tag)
    {
        //
    }
}
