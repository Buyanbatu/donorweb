<?php

namespace App\Http\Controllers;

use App\News;
use App\NewsCategory;
use App\NewsComment;
use App\Http\Requests;
use App\Http\Requests\NewsCommentRequest;
use App\Http\Requests\NewsRequest;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Response;
use Sentinel;


class NewsController extends JoshController
{


    private $tags;

    public function __construct()
    {
        parent::__construct();
        $this->tags = News::tagArray();
    }

    /**
     * @return \Illuminate\View\View
     */
    public function getIndexFrontend()
    {
        // Grab all the news
        $news = News::latest()->simplePaginate(5);
        $latest = News::latest()->simplePaginate(5);

        $featured = News::where('featured', '=', '1')->get();
        $news->setPath('news');
        $tags = $this->tags;
        // Show the page
        return View('news', compact('news', 'tags', 'featured', 'latest'));
    }

    /**
     * @param string $slug
     * @return \Illuminate\View\View
     */
    public function getNewsFrontend($slug = '')
    {   

        $latest = News::latest()->simplePaginate(5);
        if ($slug == '') {
            $news = News::first();
        }
        try {
            $news = News::findBySlugOrIdOrFail($slug);
            $news->increment('views');
        } catch (ModelNotFoundException $e) {
            return Response::view('404', array(), 404);
        }
        // Show the page
        return View('news_item', compact('news', 'latest'));

    }

    /**
     * @param $tag
     * @return \Illuminate\View\View
     */
    public function getNewsTagFrontend($tag)
    {
        $news = News::withAnyTags($tag)->simplePaginate(5);
        $news->setPath('news/' . $tag . '/tag');
        $tags = $this->tags;
        return View('news', compact('news', 'tags'));
    }

    /**
     * @param BlogCommentRequest $request
     * @param Blog $blog
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function storeCommentFrontend(NewsCommentRequest $request, News $news)
    {
        $newscomment = new NewsComment($request->all());
        $newscomment->news_id = $news->id;
        $newscomment->save();

        return redirect('news_item/' . $news->slug);
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        // Grab all the blogs
        $news = News::all();
        // Show the page
        return View('admin.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $newscategory = NewsCategory::lists('title', 'id');
        return view('admin.news.create', compact('newscategory'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(NewsRequest $request)
    {
        $news = new News($request->except('image', 'tags'));

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension() ?: 'png';
            $folderName = '/uploads/news/';
            $picture = str_random(10) . '.' . $extension;
            $news->image = $picture;
        }
        $news->user_id = Sentinel::getUser()->id;
        $news->save();

        if ($request->hasFile('image')) {
            $destinationPath = public_path() . $folderName;
            $request->file('image')->move($destinationPath, $picture);
        }

        $news->tag($request->tags);

        if ($news->id) {
            return redirect('admin/news')->with('success', trans('news/message.success.create'));
        } else {
            return Redirect::route('admin/news')->withInput()->with('error', trans('news/message.error.create'));
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  Blog $blog
     * @return view
     */
    public function show(News $news)
    {
        $comments = NewsComment::all();
        return view('admin.news.show', compact('news', 'comments', 'tags'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Blog $blog
     * @return view
     */
    public function edit(News $news)
    {
        $newscategory = NewsCategory::lists('title', 'id');
        return view('admin.news.edit', compact('news', 'newscategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update(NewsRequest $request, News $news)
    {
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension() ?: 'png';
            $folderName = '/uploads/news/';
            $picture = str_random(10) . '.' . $extension;
            $news->image = $picture;
        }

        if ($request->hasFile('image')) {
            $destinationPath = public_path() . $folderName;
            $request->file('image')->move($destinationPath, $picture);
        }
        $news->retag($request['tags']);

        if ($news->update($request->except('image', '_method', 'tags'))) {
            return redirect('admin/news')->with('success', trans('news/message.success.update'));
        } else {
            return Redirect::route('admin/news')->withInput()->with('error', trans('news/message.error.update'));
        }
    }

    /**
     * Remove blog.
     *
     * @param $website
     * @return Response
     */
    public function getModalDelete(News $news)
    {
        $model = 'news';
        $confirm_route = $error = null;
        try {
            $confirm_route = route('delete/news', ['id' => $news->id]);
            return View('admin/layouts/modal_confirmation', compact('error', 'model', 'confirm_route'));
        } catch (GroupNotFoundException $e) {

            $error = trans('news/message.error.delete', compact('id'));
            return View('admin/layouts/modal_confirmation', compact('error', 'model', 'confirm_route'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy(News $news)
    {

        if ($news->delete()) {
            return redirect('admin/news')->with('success', trans('news/message.success.delete'));
        } else {
            return Redirect::route('admin/news')->withInput()->with('error', trans('news/message.error.delete'));
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function storecomment(NewsCommentRequest $request, News $news)
    {
        $newscomment = new NewsComment($request->all());
        $newscomment->news_id = $news->id;
        $newscomment->save();

        return redirect('admin/news/' . $news->id . '/show');
    }
}
