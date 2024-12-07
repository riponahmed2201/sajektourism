<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::latest()->get();

        return view('backend.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.services.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255|unique:services',
            'image' => 'required',
            'details' => 'required|string',
            'status' => 'required'
        ]);

        $input = [
            'title' => $request->title,
            'details' => $request->details,
            'status' => $request->filled('status'),
            'created_by' => Auth::user()->id,
            'updated_by' => Auth::user()->id,
            'created_at' => Carbon::now(),
        ];

        $image = $request->file('image');

        if ($image) {
            $imageName = md5(Str::random(30) . time() . '_' . $request->file('image')) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move('uploads/services/', $imageName);
            $input['image'] = $imageName;
        }

        try {

            Service::create($input);

            notify()->success("Service created successfully", "Success");

            return to_route('services.index');
        } catch (Exception $exception) {
            notify()->success("Something error found! Please try again", "Error");
            return back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        return view('backend.services.form', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        $request->validate([
            'title' => 'required|string|max:255|unique:services',
            'image' => 'required',
            'details' => 'required|string',
            'status' => 'required'
        ]);

        $input = [
            'title' => $request->title,
            'details' => $request->details,
            'status' => $request->filled('status'),
            'created_by' => Auth::user()->id,
            'updated_by' => Auth::user()->id,
            'created_at' => Carbon::now(),
        ];

        $image = $request->file('image');

        if ($image) {
            $imageName = md5(Str::random(30) . time() . '_' . $request->file('image')) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move('uploads/services/', $imageName);

            if (file_exists('uploads/services/' . $service->image) && !empty($service->image)) {
                unlink('uploads/services/' . $service->image);
            }

            $input['image'] = $imageName;
        }

        try {

            $service->update($input);

            notify()->success("Service updated successfully", "Success");

            return to_route('services.index');
        } catch (Exception $exception) {
            notify()->success("Something error found! Please try again", "Error");
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        //
    }
}
