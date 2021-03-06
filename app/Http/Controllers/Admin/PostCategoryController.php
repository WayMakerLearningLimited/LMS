<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\PostCategory;
use App\Http\Controllers\Controller;



class PostCategoryController extends Controller
{

     public function index()
	{
        $categories = PostCategory::all();

		return view('postcategory.index', compact('categories'));
	}

    public function create()
    {
       $categories = PostCategory::all();

    	return view('postcategory.new', compact('categories'));
    }

     public function store(Request $request)
    {
    	$this->validate($request, [ 
         'title'=> 'required|min:3',
      
       ]);

        $category = new PostCategory;

    	$category->title = $request->title;
        $category->save();

      return redirect()->back()->with('success', 'New category has been created succesfully');
  }
    
     public function destroy($id)
    {

      $category = PostCategory::find($id);
      
      $category->posts()->detach();

      $category->delete();

      return redirect()->back()->with('success', 'Category has been deleted successfully');

    }
}
