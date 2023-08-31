<?php

namespace App\Http\Controllers;



use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        return view('categories.index', [
            'categories'=>Category::paginate()
        ]);
    }


    public function store(Request $request){
        $data = $request->validate([
            'name'=>'required|max:255',
            'description'=>'required|max:255',
        ]);

        Category::create($data);

        return back()->with('message', 'category created');
    }

    public function update(Category $category, Request $request){
        $data = $request->validate([
            'name'=>'required|max:255',
            'description'=>'required|max:255',
        ]);

        $category->update($data);

        return back()->with('message', 'category updated.');
    }

    public function  destroy(Category $category){
        $category->delete();

        return back()->with('message', 'category deleted.');
    }



}
