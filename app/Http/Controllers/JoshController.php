<?php namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\MessageBag;
use Sentinel;
use View;

class JoshController extends Controller {

	
    protected $provinces = array(
			""   => "Аймаг/Хот сонгох",
			"ulaanbaatar"   => "Улаанбаатар хот",
			"arkhangai" => "Архангай аймаг",
			"bayankhongor" => "Баянхонгор аймаг",
			"bayan-ulgii" => "Баян-Өлгий аймаг",
			"bulgan" => "Булган аймаг",
			"darkhan" => "Дархан Уул аймаг",
			"dornod" => "Дорнод аймаг",
			"dornogovi" => "Дорноговь аймаг",
			"dundgovi" => "Дундговь аймаг",
			"govi-altai" => "Говь-Алтай аймаг",
			"khentii" => "Хэнтий аймаг",
			"khovd" => "Ховд аймаг",
			"khuvsgul" => "Хөвсгөл аймаг",
			"orkhon" => "Орхон аймаг",
			"selenge" => "Сэлэнгэ аймаг",
			"sukhbaatar" => "Сүхбаатар аймаг",
			"tuv" => "Төв аймаг",
			"umnugovi" => "Өмнөговь аймаг",
			"uvurkhangai" => "Өвөрхангай аймаг",
			"uvs" => "Увс аймаг",
			"zavkhan" => "Завхан аймаг"
				
	);

	protected $districts = array(
			""   => "Дүүрэг сонгох",
			"baganuur"   => "Багануур дүүрэг",
			"bagakhangai" => "Багахангай дүүрэг",
			"bayangol" => "Баянгол дүүрэг",
			"bayanzurkh" => "Баянзүрх дүүрэг",
			"nalaikh" => "Налайх дүүрэг",
			"songinokhairkhan" => "Сонгинохайрхан дүүрэг",
			"sukhbaatar" => "Сүхбаатар дүүрэг",
			"khan-uul" => "Хан-Уул дүүрэг",
			"chingeltei" => "Чингэлтэй дүүрэг"
				
	);
	/**
	 * Message bag.
	 *
	 * @var Illuminate\Support\MessageBag
	 */
	protected $messageBag = null;

	/**
	 * Initializer.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->messageBag = new MessageBag;

	}

	/**
	* Crop Demo
	*/
	public function crop_demo()
	{
		if ($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			$targ_w = $targ_h = 150;
			$jpeg_quality = 99;

			$src = base_path().'/public/assets/img/cropping-image.jpg';
		//dd($src);
			$img_r = imagecreatefromjpeg($src);

			$dst_r = ImageCreateTrueColor( $targ_w, $targ_h );

			imagecopyresampled($dst_r,$img_r,0,0,intval($_POST['x']),intval($_POST['y']), $targ_w,$targ_h, intval($_POST['w']),intval($_POST['h']));

			header('Content-type: image/jpeg');
			imagejpeg($dst_r,null,$jpeg_quality);

			exit;
		}
	}

    public function showHome()
    {
    	if(Sentinel::check())
			return View('admin/index');
		else
			return Redirect::to('admin/signin')->with('Алдаа', 'Та нэвтрэх хэрэгтэй!');
    }

    public function showView($name=null)
    {

    	if(View::exists('admin/'.$name))
		{
			if(Sentinel::check())
				return View('admin/'.$name);
			else
				return Redirect::to('admin/signin')->with('Алдаа', 'Та нэвтрэх хэрэгтэй!');
		}
		else
		{
			return View('admin/404');
		}
    }

    public function showFrontEndView($name=null)
    {

        if(View::exists($name))
        {
            return View($name);
        }
        else
        {
            return View('admin/404');
        }
    }

    public function showManagerHome()
    {
    	if(Sentinel::check())
			return View('manager/index');
		else
			return Redirect::to('manager/signin')->with('Алдаа', 'Та нэвтрэх хэрэгтэй!');
    }


}