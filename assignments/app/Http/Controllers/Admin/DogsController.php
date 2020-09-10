<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Dog;
use \App\Category;

class DogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Manage Dogs";
        $dogs = Dog::with('category')->orderBy('category_id', 'ASC')->get();
        return view('admin/dogs/index', compact('title', 'dogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Add a new Record";
        $categories = Category::all();
        return view('/admin/dogs/create', compact('title', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $post information from the form input validation
        $valid = $request->validate([
            'name' => 'required|string|max:255',
            'age'  => 'required|integer',
            'image' => 'nullable|image',
            'sex' => 'required|string|max:255',
            'breed' => 'nullable|string|max:255',
            'size' => 'required|string|max:255',
            'intact' => 'required|string',
            'abstract' => 'required|string|max:500',
            'description' => 'required|string',
            'category_id' => 'nullable|integer'
        ]);

        // image upload, make sure it is valid if added
        if(!empty($valid['image'])) {
            // get the uploaded file
            $file = $request->file('image');
            // get the original file name 
            $image = time() . '_' . $file->getClientOriginalName();
            // save the image
            $path = $file->storeAs('images', $image);
        }

        // if all validates ok, then create the record
        Dog::create([
            'name' => $valid['name'],
            'age'  => $valid['age'],
            'image' => $image ?? '',
            'sex' => $valid['sex'],
            'breed' => $valid['breed'] ?? '',
            'size' => $valid['size'],
            'intact' => $valid['intact'] ?? 'no',
            'abstract' => $valid['abstract'],
            'description' => $valid['description'],
            'category_id' => $valid['category_id'] ?? 1
        ]);

        return redirect('/admin/dogs')->with('success', 'Your record was added successfully!');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = "Edit Record";
        $dog = Dog::find($id);
        $categories = Category::all();
        return view('/admin/dogs/edit', compact('title', 'dog', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // $post information from the form input validation
        $valid = $request->validate([
            'id' => 'required|integer',
            'name' => 'required|string|max:255',
            'age'  => 'required|integer',
            'image' => 'nullable|image',
            'sex' => 'required|string|max:255',
            'breed' => 'nullable|string|max:255',
            'size' => 'required|string|max:255',
            'intact' => 'required|string',
            'abstract' => 'required|string|max:500',
            'description' => 'required|string',
            'category_id' => 'nullable|integer'
        ]);

        // image upload, make sure it is valid if added
        if(!empty($valid['image'])) {
            // get the uploaded file
            $file = $request->file('image');
            // get the original file name 
            $image = time() . '_' . $file->getClientOriginalName();
            // save the image
            $path = $file->storeAs('images', $image);
        }

        $dog = Dog::find($valid['id']);
        $dog->name = $valid['name'];
        $dog->age = $valid['age'];
        if(!empty($image)){
            $dog->image = $image;
        }
        $dog->sex = $valid['sex'];
        $dog->breed = $valid['breed'] ?? '';
        $dog->size = $valid['size'];
        $dog->intact = $valid['intact'] ?? 'no';
        $dog->abstract = $valid['abstract'];
        $dog->description = $valid['description'];
        $dog->category_id = $valid['category_id'] ?? 1;

        if( $dog->save() ) {
            return redirect('/admin/dogs')->with('success', 'The record has been updated successfully');
        }

        return redirect('admin/dogs')->with('error', 'The record could not be updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        // validate that ID is passed in the request
        $valid = $request->validate([
            'id' => 'required|integer'
        ]);

        // when post is deleted, if found send user back to the index view wwith a flash message
        if( Dog::find($valid['id'])->delete() ) {
            return back()->with('success', 'The record has been successfully deleted');
        }
        return back()->with('error', 'The record could not be deleted.');
    }
}
