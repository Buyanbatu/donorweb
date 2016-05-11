<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Hun_huchnii_tailan;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Lang;

class Hun_huchnii_tailansController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$hun_huchnii_tailans = Hun_huchnii_tailan::latest()->get();
		return view('admin.hun_huchnii_tailans.index', compact('hun_huchnii_tailans'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.hun_huchnii_tailans.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		hun_huchnii_tailan::create($request->all());
		return redirect('admin/hun_huchnii_tailans')->with('success', Lang::get('message.success.create'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$hun_huchnii_tailan = Hun_huchnii_tailan::findOrFail($id);
		return view('admin.hun_huchnii_tailans.show', compact('hun_huchnii_tailan'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$hun_huchnii_tailan = Hun_huchnii_tailan::findOrFail($id);
		return view('admin.hun_huchnii_tailans.edit', compact('hun_huchnii_tailan'));
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
		$hun_huchnii_tailan = Hun_huchnii_tailan::findOrFail($id);
		$hun_huchnii_tailan->update($request->all());
		return redirect('admin/hun_huchnii_tailans')->with('success', Lang::get('message.success.update'));
	}

	/**
    	 * Delete confirmation for the given Hun_huchnii_tailan.
    	 *
    	 * @param  int      $id
    	 * @return View
    	 */
    	public function getModalDelete($id = null)
    	{
            $error = '';
            $model = '';
            $confirm_route =  route('admin.hun_huchnii_tailans.delete',['id'=>$id]);
            return View('admin/layouts/modal_confirmation', compact('error','model', 'confirm_route'));

    	}

    	/**
    	 * Delete the given Hun_huchnii_tailan.
    	 *
    	 * @param  int      $id
    	 * @return Redirect
    	 */
    	public function getDelete($id = null)
    	{
    		$hun_huchnii_tailan = Hun_huchnii_tailan::destroy($id);

            // Redirect to the group management page
            return redirect('admin/hun_huchnii_tailans')->with('success', Lang::get('message.success.delete'));

    	}

}