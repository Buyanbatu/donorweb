<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Tsusanbuteegdehuuntailan;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Lang;
use Sentinel;

class TsusanbuteegdehuuntailansController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$tsusanbuteegdehuuntailans = Tsusanbuteegdehuuntailan::latest()->get();

		foreach($tsusanbuteegdehuuntailans as $t){


		// 1. buhel tsusnii medeelel
				//$buheltsus = $request->get('buheltsus');
				//$buheltsus = $tsusanbuteegdehuuntailans->talbar1;
				$buheltsus = unserialize($t['talbar1']);
		// 2. buhel tsusnii medeelel
				//$ulaanesutguruuleg = $request->get('ulaanesutguruuleg');
				$ulaanesutguruuleg = unserialize($t['talbar2']);
		// 3. ulaan esiin utguruuleg medeelel
				//$darshilsanulaanes = $request->get('darshilsanulaanes');
				$darshilsanulaanes = unserialize($t['talbar3']);
		// 4. buhel tsusnii medeelel
				//$ugaasanulaanes = $request->get('ugaasanulaanes');
				$ugaasanulaanes = unserialize($t['talbar4']);
		// 5. buhel tsusnii medeelel
				//$tsagaanesguibuheltsus = $request->get('tsagaanesguibuheltsus');
				$tsagaanesguibuheltsus = unserialize($t['talbar5']);
		// 6. buhel tsusnii medeelel
				//$tsagaanesguidarshilsanulaanes = $request->get('tsagaanesguidarshilsanulaanes');
				$tsagaanesguidarshilsanulaanes = unserialize($t['talbar6']);
		// 7. buhel tsusnii medeelel
				//$tsagaanesguiulaanesutguruuleg = $request->get('tsagaanesguiulaanesutguruuleg');
				$tsagaanesguiulaanesutguruuleg = unserialize($t['talbar7']);
		// 8. buhel tsusnii medeelel
				//$hulduusunshinesiiven = $request->get('hulduusunshinesiiven');
				$hulduusunshinesiiven = unserialize($t['talbar8']);
		// 9. buhel tsusnii medeelel
				//$shingensiiven = $request->get('shingensiiven');
				$shingensiiven = unserialize($t['talbar9']);
		// 10. buhel tsusnii medeelel
				//$buheltsusnaasawsanYAEU = $request->get('buheltsusnaasawsanYAEU');
				$buheltsusnaasawsanYAEU = unserialize($t['talbar10']);
		// 11. buhel tsusnii medeelel
				//$tsitoferezeerbeltgesenYAEU = $request->get('tsitoferezeerbeltgesenYAEU');
				$tsitoferezeerbeltgesenYAEU = unserialize($t['talbar11']);
		// 12. buhel tsusnii medeelel
				//$kriopretsipitat = $request->get('kriopretsipitat');
				$kriopretsipitat = unserialize($t['talbar12']);
		// 13. buhel tsusnii medeelel
				//$k_siiven = $request->get('k-siiven');
				$k_siiven = unserialize($t['talbar13']);
		// 14. buhel tsusnii medeelel
				//$tuyagaarsharsanulaanes = $request->get('tuyagaarsharsanulaanes');
				$tuyagaarsharsanulaanes = unserialize($t['talbar14']);
		// 15. buhel tsusnii medeelel
				//$hulduujugaasanulaanes = $request->get('hulduujugaasanulaanes');
				$hulduujugaasanulaanes = unserialize($t['talbar15']);
		// 16. buhel tsusnii medeelel
				//$tuyagaarsharsansiiven = $request->get('tuyagaarsharsansiiven');
				$tuyagaarsharsansiiven = unserialize($t['talbar16']);
		// 17. buhel tsusnii medeelel
				//$tuyagaarsharsanYAEU = $request->get('tuyagaarsharsanYAEU');
				$tuyagaarsharsanYAEU = unserialize($t['talbar17']);
		// 18. buhel tsusnii medeelel
				//$busad = $request->get('busad');
				$busad = unserialize($t['talbar18']);

			//	return dd($tsusanbuteegdehuuntailans);
				//return dd($buheltsus);

				// dump($t['talbar2']);
		}
		return view('admin.tsusanbuteegdehuuntailans.index', compact('buheltsus', 'ulaanesutguruuleg', 'darshilsanulaanes', 'ugaasanulaanes', 'tsagaanesguibuheltsus', 'tsagaanesguidarshilsanulaanes', 'tsagaanesguiulaanesutguruuleg', 'hulduusunshinesiiven', 'shingensiiven', 'buheltsusnaasawsanYAEU', 'tsitoferezeerbeltgesenYAEU',  'kriopretsipitat',  'k_siiven',  'tuyagaarsharsanulaanes',  'hulduujugaasanulaanes',  'tuyagaarsharsansiiven',  'tuyagaarsharsanYAEU',  'busad'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.tsusanbuteegdehuuntailans.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		
		
		//$quantities = Input::get('qty');
		// 1. buhel tsusnii medeelel
				$buheltsus = $request->get('buheltsus');
				$buheltsus = serialize($buheltsus);
		// 2. buhel tsusnii medeelel
				$ulaanesutguruuleg = $request->get('ulaanesutguruuleg');
				$ulaanesutguruuleg = serialize($ulaanesutguruuleg);
		// 3. ulaan esiin utguruuleg medeelel
				$darshilsanulaanes = $request->get('darshilsanulaanes');
				$darshilsanulaanes = serialize($darshilsanulaanes);
		// 4. buhel tsusnii medeelel
				$ugaasanulaanes = $request->get('ugaasanulaanes');
				$ugaasanulaanes = serialize($ugaasanulaanes);
		// 5. buhel tsusnii medeelel
				$tsagaanesguibuheltsus = $request->get('tsagaanesguibuheltsus');
				$tsagaanesguibuheltsus = serialize($tsagaanesguibuheltsus);
		// 6. buhel tsusnii medeelel
				$tsagaanesguidarshilsanulaanes = $request->get('tsagaanesguidarshilsanulaanes');
				$tsagaanesguidarshilsanulaanes = serialize($tsagaanesguidarshilsanulaanes);
		// 7. buhel tsusnii medeelel
				$tsagaanesguiulaanesutguruuleg = $request->get('tsagaanesguiulaanesutguruuleg');
				$tsagaanesguiulaanesutguruuleg = serialize($tsagaanesguiulaanesutguruuleg);
		// 8. buhel tsusnii medeelel
				$hulduusunshinesiiven = $request->get('hulduusunshinesiiven');
				$hulduusunshinesiiven = serialize($hulduusunshinesiiven);
		// 9. buhel tsusnii medeelel
				$shingensiiven = $request->get('shingensiiven');
				$shingensiiven = serialize($shingensiiven);
		// 10. buhel tsusnii medeelel
				$buheltsusnaasawsanYAEU = $request->get('buheltsusnaasawsanYAEU');
				$buheltsusnaasawsanYAEU = serialize($buheltsusnaasawsanYAEU);
		// 11. buhel tsusnii medeelel
				$tsitoferezeerbeltgesenYAEU = $request->get('tsitoferezeerbeltgesenYAEU');
				$tsitoferezeerbeltgesenYAEU = serialize($tsitoferezeerbeltgesenYAEU);
		// 12. buhel tsusnii medeelel
				$kriopretsipitat = $request->get('kriopretsipitat');
				$kriopretsipitat = serialize($kriopretsipitat);
		// 13. buhel tsusnii medeelel
				$k_siiven = $request->get('k-siiven');
				$k_siiven = serialize($k_siiven);
		// 14. buhel tsusnii medeelel
				$tuyagaarsharsanulaanes = $request->get('tuyagaarsharsanulaanes');
				$tuyagaarsharsanulaanes = serialize($tuyagaarsharsanulaanes);
		// 15. buhel tsusnii medeelel
				$hulduujugaasanulaanes = $request->get('hulduujugaasanulaanes');
				$hulduujugaasanulaanes = serialize($hulduujugaasanulaanes);
		// 16. buhel tsusnii medeelel
				$tuyagaarsharsansiiven = $request->get('tuyagaarsharsansiiven');
				$tuyagaarsharsansiiven = serialize($tuyagaarsharsansiiven);
		// 17. buhel tsusnii medeelel
				$tuyagaarsharsanYAEU = $request->get('tuyagaarsharsanYAEU');
				$tuyagaarsharsanYAEU = serialize($tuyagaarsharsanYAEU);
		// 18. buhel tsusnii medeelel
				$busad = $request->get('busad');
				$busad = serialize($busad);


		$request->merge(['user_id' => Sentinel::getUser()->id]);
		$request->merge(['talbar1' => $buheltsus, 
						 'talbar2' => $ulaanesutguruuleg, 
						 'talbar3' => $darshilsanulaanes, 
						 'talbar4' => $ugaasanulaanes, 
						 'talbar5' => $tsagaanesguibuheltsus, 
						 'talbar6' => $tsagaanesguidarshilsanulaanes, 
						 'talbar7' => $tsagaanesguiulaanesutguruuleg, 
						 'talbar8' => $hulduusunshinesiiven, 
						 'talbar9' => $shingensiiven, 
						 'talbar10' => $buheltsusnaasawsanYAEU, 
						 'talbar11' => $tsitoferezeerbeltgesenYAEU, 
						 'talbar12' => $kriopretsipitat, 
						 'talbar13' => $k_siiven, 
						 'talbar14' => $tuyagaarsharsanulaanes, 
						 'talbar15' => $hulduujugaasanulaanes, 
						 'talbar16' => $tuyagaarsharsansiiven, 
						 'talbar17' => $tuyagaarsharsanYAEU, 
						 'talbar18' => $busad
						 ]);

		//return dd($request->except('buheltsus',
		//						   'ulaanesutguruuleg',
		//						   'darshilsanulaanes',
		//						   'ugaasanulaanes',
		//						   'tsagaanesguibuheltsus',
		//						   'tsagaanesguidarshilsanulaanes',
		//						   'tsagaanesguiulaanesutguruuleg',
		//						   'hulduusunshinesiiven',
		//						   'shingensiiven',
		//						   'buheltsusnaasawsanYAEU',
		//						   'tsitoferezeerbeltgesenYAEU',
		//						   'kriopretsipitat',
		//						   'k-siiven',
		//						   'tuyagaarsharsanulaanes',
		//						   'hulduujugaasanulaanes',
		//						   'tuyagaarsharsansiiven',
		//						   'tuyagaarsharsanYAEU',
		//						   'busad',
		//						   '_token'));

		$result = new Tsusanbuteegdehuuntailan($request->except('buheltsus',
								   'ulaanesutguruuleg',
								   'darshilsanulaanes',
								   'ugaasanulaanes',
								   'tsagaanesguibuheltsus',
								   'tsagaanesguidarshilsanulaanes',
								   'tsagaanesguiulaanesutguruuleg',
								   'hulduusunshinesiiven',
								   'shingensiiven',
								   'buheltsusnaasawsanYAEU',
								   'tsitoferezeerbeltgesenYAEU',
								   'kriopretsipitat',
								   'k-siiven',
								   'tuyagaarsharsanulaanes',
								   'hulduujugaasanulaanes',
								   'tuyagaarsharsansiiven',
								   'tuyagaarsharsanYAEU',
								   'busad',
								   '_token'));
		$result->save();

		//tstsbvalue::create($request->all());
		return redirect('admin/tsusanbuteegdehuuntailans')->with('success', Lang::get('message.success.create'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$tsusanbuteegdehuuntailan = Tsusanbuteegdehuuntailan::findOrFail($id);
		return view('admin.tsusanbuteegdehuuntailans.show', compact('tsusanbuteegdehuuntailan'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$tsusanbuteegdehuuntailan = Tsusanbuteegdehuuntailan::findOrFail($id);
		return view('admin.tsusanbuteegdehuuntailans.edit', compact('tsusanbuteegdehuuntailan'));
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
		$tsusanbuteegdehuuntailan = Tsusanbuteegdehuuntailan::findOrFail($id);
		$tsusanbuteegdehuuntailan->update($request->all());
		return redirect('admin/tsusanbuteegdehuuntailans')->with('success', Lang::get('message.success.update'));
	}

	/**
    	 * Delete confirmation for the given Tsusanbuteegdehuuntailan.
    	 *
    	 * @param  int      $id
    	 * @return View
    	 */
    	public function getModalDelete($id = null)
    	{
            $error = '';
            $model = '';
            $confirm_route =  route('admin.tsusanbuteegdehuuntailans.delete',['id'=>$id]);
            return View('admin/layouts/modal_confirmation', compact('error','model', 'confirm_route'));

    	}

    	/**
    	 * Delete the given Tsusanbuteegdehuuntailan.
    	 *
    	 * @param  int      $id
    	 * @return Redirect
    	 */
    	public function getDelete($id = null)
    	{
    		$tsusanbuteegdehuuntailan = Tsusanbuteegdehuuntailan::destroy($id);

            // Redirect to the group management page
            return redirect('admin/tsusanbuteegdehuuntailans')->with('success', Lang::get('message.success.delete'));

    	}

}