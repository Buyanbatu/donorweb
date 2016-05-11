<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Page;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Lang;


class PagesController extends JoshController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$pages = Page::latest()->get();
		return view('admin.pages.index', compact('pages'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.pages.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		page::create($request->all());
		return redirect('admin/pages')->with('success', Lang::get('message.success.create'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$page = Page::findOrFail($id);
		return view('admin.pages.show', compact('page'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$page = Page::findOrFail($id);
		return view('admin.pages.edit', compact('page'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		//$this->validate($request, ['name' => 'required']); // Uncomment and modify if needed.
		$page = Page::findOrFail($id);
		$page->update($request->all());
		return redirect('admin/pages')->with('success', Lang::get('message.success.update'));
	}

	/**
    	 * Delete confirmation for the given Page.
    	 *
    	 * @param  int      $id
    	 * @return View
    	 */
    	public function getModalDelete($id = null)
    	{
            $error = '';
            $model = '';
            $confirm_route =  route('admin.pages.delete',['id'=>$id]);
            return View('admin/layouts/modal_confirmation', compact('error','model', 'confirm_route'));

    	}

    	/**
    	 * Delete the given Page.
    	 *
    	 * @param  int      $id
    	 * @return Redirect
    	 */
    	public function getDelete($id = null)
    	{
    		$page = Page::destroy($id);

            // Redirect to the group management page
            return redirect('admin/pages')->with('success', Lang::get('message.success.delete'));

    	}

 public function getIndexFrontend()
    {
        // Grab all the blogs
        $blogs = Page::latest()->simplePaginate(5);
        $blogs->setPath('blog');
        $tags = $this->tags;
        // Show the page
        return View('blog', compact('blogs', 'tags'));
    }

    /**
     * @param string $slug
     * @return \Illuminate\View\View
     */
    public function getPageFrontend($slug)
    {
        if ($slug == '') {
                   return Response::view('404', array(), 404);
        }
        // Show the page
        return View('pageitem', compact('page'));

    }


}