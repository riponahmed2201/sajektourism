<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Youtube;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class YoutubeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $youtubes = Youtube::all();
        return view('backend.youtubes.index', compact('youtubes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.youtubes.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255|unique:youtubes',
            'link' => 'required|string',
            'status' => 'required'
        ]);

        $input = [
            'title' => $request->title,
            'title' => Str::slug($request->title),
            'link' => $request->link,
            'status' => $request->filled('status') ? Youtube::STATUS_ACTIVE : Youtube::STATUS_DEACTIVE,
            'created_by' => Auth::user()->id,
            'created_at' => Carbon::now(),
        ];

        try {
            Youtube::create($input);
            notify()->success("Youtube link created successfully", "Success");
            return to_route('youtubes.index');
        } catch (Exception $exception) {
            notify()->success("Something error found! Please try again", "Error");
            return back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Youtube $youtube)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Youtube $youtube)
    {
        return view('backend.youtubes.form', compact('youtube'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Youtube $youtube)
    {
        $request->validate([
            'title' => 'required|string|max:255|unique:youtubes,title,' . $youtube->id,
            'link' => 'required|string',
            'status' => 'required'
        ]);

        $input = [
            'title' => $request->title,
            'title' => Str::slug($request->title),
            'link' => $request->link,
            'status' => $request->filled('status') ? Youtube::STATUS_ACTIVE : Youtube::STATUS_DEACTIVE,
            'updated_by' => Auth::user()->id,
            'updated_at' => Carbon::now(),
        ];

        try {
            $youtube->update($input);
            notify()->success("Youtube link updated successfully", "Success");
            return to_route('youtubes.index');
        } catch (Exception $exception) {
            notify()->success("Something error found! Please try again", "Error");
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Youtube $youtube)
    {
        //
    }
}
