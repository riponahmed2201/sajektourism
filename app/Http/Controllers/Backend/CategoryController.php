<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::latest()->get();

        return view('backend.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.categories.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255|unique:categories',
            'details' => 'required|string',
            'status' => 'nullable'
        ]);

        $input = [
            'title' => $request->title,
            'title' => Str::slug($request->title),
            'details' => $request->details,
            'status' => $request->filled('status') ? Category::STATUS_ACTIVE : Category::STATUS_DEACTIVE,
            'created_by' => Auth::user()->id,
            'created_at' => Carbon::now(),
        ];

        try {

            Category::create($input);

            notify()->success("Category created successfully", "Success");

            return to_route('categories.index');
        } catch (Exception $exception) {
            notify()->success("Something error found! Please try again", "Error");
            return back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('backend.categories.form', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'title' => 'required|string|max:255|unique:categories,title,' . $category->id,
            'details' => 'required|string',
            'status' => 'nullable'
        ]);

        $input = [
            'title' => $request->title,
            'title' => Str::slug($request->title),
            'details' => $request->details,
            'status' => $request->filled('status') ? Category::STATUS_ACTIVE : Category::STATUS_DEACTIVE,
            'created_by' => Auth::user()->id,
            'created_at' => Carbon::now(),
        ];

        try {

            $category->update($input);

            notify()->success("Category updated successfully", "Success");

            return to_route('categories.index');
        } catch (Exception $exception) {
            notify()->success("Something error found! Please try again", "Error");
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $Category)
    {
        //
    }
}
