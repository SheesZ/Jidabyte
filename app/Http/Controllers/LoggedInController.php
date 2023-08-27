<?php

namespace App\Http\Controllers;

use Hash;
use Illuminate\Http\Request;
use App\inquiry;
use App\newsletter;
use App\Program;
use App\imagetable;
use App\Banner;
use App\vendorproduct;
use DB;
use View;
use File;
use App\orders_products;
use App\orders;
use Auth;
use Session;
use Image;
use App\Http\Traits\HelperTrait;



class LoggedInController extends Controller
{
	use HelperTrait;
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	// use Helper;

	public function __construct()
	{

		// $this->middleware('guest');
		$this->middleware('auth');
		$logo = imagetable::
			select('img_path')
			->where('table_name', '=', 'logo')
			->first();

		$favicon = imagetable::
			select('img_path')
			->where('table_name', '=', 'favicon')
			->first();

		View()->share('logo', $logo);
		View()->share('favicon', $favicon);
		//View()->share('config',$config);
	}


	public function orders()
	{

		$orders = orders::where('orders.user_id', Auth::user()->id)
			->orderBy('orders.id', 'desc')
			->get();
		return view('account.orders', ['ORDERS' => $orders]);

	}


	public function account()
	{

		$orders = orders::where('orders.user_id', Auth::user()->id)
			->orderBy('orders.id', 'desc')
			->get();
		return view('account.index', ['ORDERS' => $orders]);

	}
    
    	public function AddProduct()
	{
	//	$items = Vendorcategory::pluck('name', 'id');
		
		return view('account.product.addproduct',['items'=>$items]);
	}

	public function update_profile(Request $request)
	{

		$user = DB::table('profiles')->where('id', Auth::user()->id)->first();

		$validateArr = array();
		$messageArr = array();
		$insertArr = array();
		$validateArr = [

			'name' => 'required',
			'email' => array(),

		];

		if ($user->email != $_POST['email']) {
			$validateArr['email'] = 'required|unique:users,email,NULL,id';
		}

		if (trim($_POST['password']) != "") {

			$validateArr['password'] = 'required|min:6|confirmed';
			$validateArr['password_confirmation'] = 'required|min:6';
		}

		$this->validate($request, $validateArr, $messageArr);

		$insertArr['name'] = $_POST['name'];
		$insertArr['email'] = $_POST['email'];

		if (trim($_POST['password']) != "") {
			$insertArr['password'] = Hash::make($_POST['password']);
		}

		DB::table('users')
			->where('id', Auth::user()->id)
			->update(
				$insertArr
			);


		Session::flash('message', 'Your Profile Settings has been changed');
		Session::flash('alert-class', 'alert-success');
		return back();

	}


	public function uploadPicture(Request $request)
	{

		$user = DB::table('profiles')->where('id', Auth::user()->id)->first();

		if ($file = $request->file('pic')) {
			$extension = $file->extension() ?: 'jpg|png';
			$destinationPath = public_path() . '/storage/uploads/users/';
			$safeName = str_random(10) . '.' . $extension;
			$file->move($destinationPath, $safeName);
			if (File::exists($destinationPath . $user->pic)) {
				File::delete($destinationPath . $user->pic);
			}
	
		}

		$insertArr['pic'] = $safeName;

		DB::table('profiles')
			->where('id', Auth::user()->id)
			->update(
				$insertArr
			);

		Session::flash('message', 'Your Profile has been changed');
		Session::flash('alert-class', 'alert-success');
		return back();

	}
	public function updateAccount(Request $request)
	{
        //dd($request);
		$user = DB::table('users')->where('id', Auth::user()->id)->first();

		$insertArr['name'] = $_POST['name'];
		$insertArr['email'] = $_POST['email'];
	

		$password = $_POST['password'];
		$confirmpass = $_POST['password_confirmation'];
		if ($password == $confirmpass) {
			if (trim($_POST['password']) != "") {
				$insertArr['password'] = Hash::make($_POST['password']);
			}
			DB::table('users')
				->where('id', Auth::user()->id)
				->update(
					$insertArr
				);

			Session::flash('message', 'Your password settings has been changed');
			Session::flash('alert-class', 'alert-success');
			return back();
		} else {
			Session::flash('flash_message', 'Password do not match');
			Session::flash('alert-class', 'alert-danger');
			return back();

		}

	}



	protected function accountDetail()
	{
		$orders = orders::where('orders.user_id', Auth::user()->id)
			->orderBy('orders.id', 'desc')
			->get();

		return view('account.account', ['ORDERS' => $orders]);

	}

	protected function invoice($id)
	{
		$order_id = $id;
		$order = orders::where('id', $order_id)->first();
		$order_products = orders_products::where('orders_id', $order_id)->get();

		return view('account.invoice')
							->with('title', 'Invoice #' . $order_id)
							->with(compact('order', 'order_products'))
							->with('order_id', $order_id);
	}


	protected function friends()
	{
		return view('account.friends');

	}


	protected function upload()
	{
		return view('account.upload');

	}

	protected function password()
	{
		return view('account.password');

	}

	public function Listproduct(Request $request)
	{
		$keyword = $request->get('search');
		$perPage = 10;
		$listproduct = DB::table('vendorproducts')->where('user_id',Auth::user()->id)->where('deleted_at',NULL)->paginate($perPage);
       // dd($listproduct);
		return view('account.product.listproduct',['listproduct' => $listproduct]);
	}
	
		public function ViewProducts(Request $request)
	{
		//$keyword = $request->get('search');
		//$perPage = 10;
		$listproduct = DB::table('vendorproducts')->where('deleted_at',NULL)->get();
       // dd($listproduct);
		return view('account.product.ViewProducts',compact('listproduct'));
	}

    
    
    public function BusinessPartner(Request $request)
	{
		$keyword = $request->get('search');
		$perPage = 10;
		$BusinessPartner = DB::table('users')->where('role','Business Partner')->where('deleted_at',NULL)->paginate($perPage);
		return view('account.BusinessPartner',['BusinessPartner' => $BusinessPartner]);
	}
    
	public function submitproduct(Request $request)
	{
            //dd($request);
        	// insert product
        	$vendorproduct = new vendorproduct($request->all());
			$vendorproduct->user_id = $request->input('user_id');

			if ($request->hasFile('image')) {
				$file = $request->file('image');
	                
	            //make sure yo have image folder inside your public
	            $vendorproduct_path = 'uploads/vendorproducts/';
	            $fileName = $file->getClientOriginalName();
	            $profileImage = date("Ymd").$fileName.".".$file->getClientOriginalExtension();
	            Image::make($file)->save(public_path($vendorproduct_path) . DIRECTORY_SEPARATOR. $profileImage);
	            $vendorproduct->image = $vendorproduct_path.$profileImage;
	        }
           // dd($vendorproduct);
	        $vendorproduct->save();


	        

			Session::flash('message', 'Product added successfully!'); 
			Session::flash('alert-class', 'alert-success'); 
			return redirect('list-products');
        }
        



		


	
}