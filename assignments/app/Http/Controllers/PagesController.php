<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Dog;

class PagesController extends Controller
{
    /**
     * Home page for visits to the site 
     * @return View homepage
     */
    public function home()
    {
        $title = 'All About Dogs';
        return view('myhome', compact('title'));
    }

    /**
     * About page 
     * @return View about page
     */
    public function about()
    {
        $title = 'About Dogs';
        return view('about', compact('title'));
    }

    /**
     * Contact page for form 
     * @return View contact page
     */
    public function contact()
    {
        $title = 'Contact us';
        return view('contact', compact('title'));
    }

    /**
     * Show list view of dogs
     * @return View 
     */     
    public function index()
    {
        $dogs = Dog::with('category')->orderBy('name', 'ASC')->get();
        $title = 'All Dogs';
        return view('dogs/index', compact('dogs', 'title'));
    }

    /**
     * Get one dog 
     * @param  dog $id dog description
     * @return View     
     */
    public function show($id)
    {
        // id is a dog
        $dog = Dog::find($id);
        $title = $dog->name;
        return view('dogs/show', compact('dog', 'title'));
    }


}

