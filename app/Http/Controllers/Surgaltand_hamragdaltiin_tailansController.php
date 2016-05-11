<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Surgaltand_hamragdaltiin_tailan;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Lang;

class Surgaltand_hamragdaltiin_tailansController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$surgaltand_hamragdaltiin_tailans = Surgaltand_hamragdaltiin_tailan::latest()->get();
		return view('admin.surgaltand_hamragdaltiin_tailans.index', compact('surgaltand_hamragdaltiin_tailans'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.surgaltand_hamragdaltiin_tailans.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		surgaltand_hamragdaltiin_tailan::create($request->all());
		return redirect('admin/surgaltand_hamragdaltiin_tailans')->with('success', Lang::get('message.success.create'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$surgaltand_hamragdaltiin_tailan = Surgaltand_hamragdaltiin_tailan::findOrFail($id);
		return view('admin.surgaltand_hamragdaltiin_tailans.show', compact('surgaltand_hamragdaltiin_tailan'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$surgaltand_hamragdaltiin_tailan = Surgaltand_hamragdaltiin_tailan::findOrFail($id);
		return view('admin.surgaltand_hamragdaltiin_tailans.edit', compact('surgaltand_hamragdaltiin_tailan'));
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
		$surgaltand_hamragdaltiin_tailan = Surgaltand_hamragdaltiin_tailan::findOrFail($id);
		$surgaltand_hamragdaltiin_tailan->update($request->all());
		return redirect('admin/surgaltand_hamragdaltiin_tailans')->with('success', Lang::get('message.success.update'));
	}

	/**
    	 * Delete confirmation for the given Surgaltand_hamragdaltiin_tailan.
    	 *
    	 * @param  int      $id
    	 * @return View
    	 */
    	public function getModalDelete($id = null)
    	{
            $error = '';
            $model = '';
            $confirm_route =  route('admin.surgaltand_hamragdaltiin_tailans.delete',['id'=>$id]);
            return View('admin/layouts/modal_confirmation', compact('error','model', 'confirm_route'));

    	}

    	/**
    	 * Delete the given Surgaltand_hamragdaltiin_tailan.
    	 *
    	 * @param  int      $id
    	 * @return Redirect
    	 */
    	public function getDelete($id = null)
    	{
    		$surgaltand_hamragdaltiin_tailan = Surgaltand_hamragdaltiin_tailan::destroy($id);

            // Redirect to the group management page
            return redirect('admin/surgaltand_hamragdaltiin_tailans')->with('success', Lang::get('message.success.delete'));

    	}

}