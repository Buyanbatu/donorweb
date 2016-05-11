<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\SazutailanRequest;
//use Illuminate\Support\Facades\Request;
use App\Sazutailanmayagt;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Lang;
use Sentinel;
use URL;


use File;

class SazutailanmayagtsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$sazutailanmayagts = Sazutailanmayagt::latest()->get();
		return view('admin.sazutailanmayagts.index', compact('sazutailanmayagts'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.sazutailanmayagts.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(SazutailanRequest $request)
	{	
		$userfolder = Sentinel::getUser()->id;
		$request->merge(['author' => Sentinel::getUser()->id]);
				 // is new image uploaded?
            if ($file = $request->file('gurav1')) {
            $fileName = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension() ?: 'pdf';
            $folderName = '/uploads/sazutailan/' . $userfolder . '/';
            $destinationPath = public_path() . $folderName;
            $safeName = str_random(10) . '.' . $extension;
            $file->move($destinationPath, $safeName);
            $request['gurav1'] = $safeName;

           // $request->merge(['gurav1' => $safeName]);
           // $request['gurav1'] = $safeName;

			//dd($safeName);

            //
        }
        //dd($safeName);
       // dd($file);
        dd($request->all());
       // sazutailanmayagt::create($request->all());
		return redirect('admin/sazutailanmayagts')->with('success', Lang::get('message.success.create'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$sazutailanmayagt = Sazutailanmayagt::findOrFail($id);
		return view('admin.sazutailanmayagts.show', compact('sazutailanmayagt'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$sazutailanmayagt = Sazutailanmayagt::findOrFail($id);
		return view('admin.sazutailanmayagts.edit', compact('sazutailanmayagt'));
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
		$sazutailanmayagt = Sazutailanmayagt::findOrFail($id);
		$sazutailanmayagt->update($request->all());
		return redirect('admin/sazutailanmayagts')->with('success', Lang::get('message.success.update'));
	}

	/**
    	 * Delete confirmation for the given Sazutailanmayagt.
    	 *
    	 * @param  int      $id
    	 * @return View
    	 */
    	public function getModalDelete($id = null)
    	{
            $error = '';
            $model = '';
            $confirm_route =  route('admin.sazutailanmayagts.delete',['id'=>$id]);
            return View('admin/layouts/modal_confirmation', compact('error','model', 'confirm_route'));

    	}

    	/**
    	 * Delete the given Sazutailanmayagt.
    	 *
    	 * @param  int      $id
    	 * @return Redirect
    	 */
    	public function getDelete($id = null)
    	{
    		$sazutailanmayagt = Sazutailanmayagt::destroy($id);

            // Redirect to the group management page
            return redirect('admin/sazutailanmayagts')->with('success', Lang::get('message.success.delete'));

    	}

}