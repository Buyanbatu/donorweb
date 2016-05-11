<?php

namespace App\Http\Controllers;

use App\NewsCategory;
use App\Http\Requests;
use App\Http\Requests\NewsCategoryRequest;

class NewsCategoryController extends JoshController
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        // Grab all the blog category
        $newscategories = NewsCategory::all();
        // Show the page
        return View('admin.newscategory.index', compact('newscategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.newscategory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(NewsCategoryRequest $request)
    {
        $newscategory = new NewsCategory($request->all());

        if ($newscategory->save()) {
            return redirect('admin/newscategory')->with('success', trans('newscategory/message.success.create'));
        } else {
            return Redirect::route('admin/newscategory')->withInput()->with('error', trans('newscategory/message.error.create'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit(NewsCategory $newscategory)
    {
        return view('admin.newscategory.edit', compact('newscategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update(NewsCategoryRequest $request, NewsCategory $newscategory)
    {
        if ($newscategory->update($request->all())) {
            return redirect('admin/newscategory')->with('success', trans('newscategory/message.success.update'));
        } else {
            return Redirect::route('admin/newscategory')->withInput()->with('error', trans('newscategory/message.error.update'));
        }
    }

    /**
     * Remove blog.
     *
     * @param $website
     * @return Response
     */
    public function getModalDelete(NewsCategory $newscategory)
    {
        $model = 'newscategory';
        $confirm_route = $error = null;
        try {
            $confirm_route = route('delete/newscategory', ['id' => $newscategory->id]);
            return View('admin/layouts/modal_confirmation', compact('error', 'model', 'confirm_route'));
        } catch (GroupNotFoundException $e) {

            $error = trans('newscategory/message.error.delete', compact('id'));
            return View('admin/layouts/modal_confirmation', compact('error', 'model', 'confirm_route'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy(NewsCategory $newscategory)
    {
        if ($newscategory->delete()) {
            return redirect('admin/newscategory')->with('success', trans('newscategory/message.success.delete'));
        } else {
            return Redirect::route('admin/newscategory')->withInput()->with('error', trans('newscategory/message.error.delete'));
        }
    }

}
