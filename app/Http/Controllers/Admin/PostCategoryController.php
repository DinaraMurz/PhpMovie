<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\PostCategory;
use Illuminate\Http\Request;

class PostCategoryController extends Controller
{
    protected function handleForm(Request $request, PostCategory $category){
        $request->validate($category->rules);

        $category->fill($request->all());
        $category->save();
        return redirect()->route('admin.category.index');
    }

    public function index()
    {
        return view('admin.pages.category.index',[
            'categories' => PostCategory::all()
        ]);
    }

    public function create()
    {
        return view('admin.pages.category.form');
    }

    public function store(Request $request)
    {
        return $this->handleForm($request, new PostCategory());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PostCategory  $category
     * @return \Illuminate\Http\Response
     */

    public function edit(PostCategory $category)
    {
        return view('admin.pages.category.form',
            [
                'category' =>$category,
                'update' => true
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PostCategory  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PostCategory $category)
    {
        return $this->handleForm($request, $category);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PostCategory  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(PostCategory $category)
    {
        $category->delete();
        return redirect()->route('admin.category.index');
    }
}
