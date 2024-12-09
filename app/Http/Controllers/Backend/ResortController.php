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
            'thumbnail' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'details' => 'required|string',
            'status' => 'required'
        ]);

        $input = [
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'short_description' => $request->short_description,
            'details' => $request->details,
            'status' => $request->filled('status') ? Resort::STATUS_ACTIVE : Resort::STATUS_DEACTIVE,
            'created_by' => Auth::user()->id,
            'created_at' => Carbon::now(),
        ];

        $thumbnail = $request->file('thumbnail');
        if ($thumbnail) {
            $thumbnailName = md5(Str::random(30) . time() . '_' . $request->file('thumbnail')) . '.' . $request->file('thumbnail')->getClientOriginalExtension();
            $request->file('thumbnail')->move('uploads/resorts/', $thumbnailName);
            $input['thumbnail'] = $thumbnailName;
        }

        if ($request->hasFile('images')) {
            $uploadedImages = [];
            foreach ($request->file('images') as $image) {
                $imageName = md5(Str::random(5) . time() . '_' . $image) . '.' . $image->getClientOriginalExtension();
                $image->move('uploads/resorts/', $imageName);
                $uploadedImages[] = $imageName;
            }
        }

        if (!empty($uploadedImages)) {
            $input['images'] = json_encode($uploadedImages);
        }

        try {
            Resort::create($input);
            notify()->success("Resort created successfully", "Success");
            return to_route('resorts.index');
        } catch (Exception $exception) {

            // Delete a single file if it exists
            if (!empty($input) && file_exists(public_path('uploads/resorts/' . $input['thumbnail']))) {
                unlink(public_path('uploads/resorts/' . $input['thumbnail']));
            }

            // Delete multiple files in the uploadedImages array if they exist
            foreach ($uploadedImages as $uploadedImage) {
                if (!empty($uploadedImage) && file_exists(public_path('uploads/resorts/' . $uploadedImage))) {
                    unlink(public_path('uploads/resorts/' . $uploadedImage));
                }
            }

            dd($exception);
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
            'images' => 'required',
            'details' => 'required|string',
            'status' => 'required'
        ]);

        $input = [
            'title' => $request->title,
            'title' => Str::slug($request->title),
            'short_description' => $request->short_description,
            'details' => $request->details,
            'status' => $request->filled('status'),
            'updated_by' => Auth::user()->id,
            'updated_at' => Carbon::now(),
        ];

        $images = $request->file('images');
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
