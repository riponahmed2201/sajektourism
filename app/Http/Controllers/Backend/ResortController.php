<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Resort;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ResortController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $resorts = Resort::all();

        return view('backend.resorts.index', compact('resorts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.resorts.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255|unique:resorts',
            'short_description' => 'required|string|max:255',
            'thumbnail' => 'required',
            'album' => 'required',
            'details' => 'required|string',
            'status' => 'required'
        ]);

        $input = [
            'title' => $request->title,
            'short_description' => $request->short_description,
            'details' => $request->details,
            'status' => $request->filled('status'),
            'created_by' => Auth::user()->id,
            'created_at' => Carbon::now(),
        ];

        $album = $request->file('album');
        $thumbnail = $request->file('thumbnail');

        if ($thumbnail) {
            $thumbnailName = md5(Str::random(30) . time() . '_' . $request->file('thumbnail')) . '.' . $request->file('thumbnail')->getClientOriginalExtension();
            $request->file('thumbnail')->move('uploads/resorts/', $thumbnailName);
            $input['thumbnail'] = $thumbnailName;
        }

        try {

            Resort::create($input);

            notify()->success("Resort created successfully", "Success");

            return to_route('resorts.index');
        } catch (Exception $exception) {
            notify()->success("Something error found! Please try again", "Error");
            return back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Resort $resort)
    {
        return view('backend.resorts.show', compact('resort'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Resort $resort)
    {
        return view('backend.resorts.form', compact('resort'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Resort $resort)
    {
        $request->validate([
            'title' => 'required|string|max:255|unique:resorts',
            'short_description' => 'required|string|max:255',
            'thumbnail' => 'required',
            'album' => 'required',
            'details' => 'required|string',
            'status' => 'required'
        ]);

        $input = [
            'title' => $request->title,
            'short_description' => $request->short_description,
            'details' => $request->details,
            'status' => $request->filled('status'),
            'updated_by' => Auth::user()->id,
            'updated_at' => Carbon::now(),
        ];

        $album = $request->file('album');
        $thumbnail = $request->file('thumbnail');

        if ($thumbnail) {
            $thumbnailName = md5(Str::random(30) . time() . '_' . $request->file('thumbnail')) . '.' . $request->file('thumbnail')->getClientOriginalExtension();
            $request->file('thumbnail')->move('uploads/resorts/', $thumbnailName);

            if (file_exists('uploads/resorts/' . $resort->thumbnail) && !empty($resort->thumbnail)) {
                unlink('uploads/resorts/' . $resort->thumbnail);
            }

            $input['thumbnail'] = $thumbnailName;
        }

        try {

            $resort->update($input);

            notify()->success("Resort updated successfully", "Success");

            return to_route('resorts.index');
        } catch (Exception $exception) {
            notify()->success("Something error found! Please try again", "Error");
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Resort $resort)
    {
        //
    }
}
