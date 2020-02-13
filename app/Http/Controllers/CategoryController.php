<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showNewCategoryForm()
    {

        return view('ads.pages.add_category');
    }

    public function storeCategory(Request $request)
    {

        $validatedData = $request->validate([
            'title' => 'required'
        ]);
        $category = Category::create([
            'category_name' => request('title')
        ]);

        return redirect('/category-mgmt');
    }

    public function showCategories()
    {

        $categories = Category::all();

        return view('ads.pages.categories_mgmt', compact('categories'));
    }

    public function destroy(Category $category)
    {

        $category->delete();

        return redirect('/category-mgmt');
    }
}
