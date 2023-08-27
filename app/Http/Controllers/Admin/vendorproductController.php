<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\vendorproduct;
use Illuminate\Http\Request;
use Image;
use File;

class vendorproductController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */

    public function index(Request $request)
    {
        $model = str_slug('vendorproduct','-');
        if(auth()->user()->permissions()->where('name','=','view-'.$model)->first()!= null) {
            $keyword = $request->get('search');
            $perPage = 25;

            if (!empty($keyword)) {
                $vendorproduct = vendorproduct::where('name', 'LIKE', "%$keyword%")
                ->orWhere('user_id', 'LIKE', "%$keyword%")
                ->orWhere('short_detail', 'LIKE', "%$keyword%")
                ->orWhere('image', 'LIKE', "%$keyword%")
                ->paginate($perPage);
            } else {
                $vendorproduct = vendorproduct::paginate($perPage);
            }

            return view('admin.vendorproduct.index', compact('vendorproduct'));
        }
        return response(view('403'), 403);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $model = str_slug('vendorproduct','-');
        if(auth()->user()->permissions()->where('name','=','add-'.$model)->first()!= null) {
            return view('admin.vendorproduct.create');
        }
        return response(view('403'), 403);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $model = str_slug('vendorproduct','-');
        if(auth()->user()->permissions()->where('name','=','add-'.$model)->first()!= null) {
            

            $vendorproduct = new vendorproduct($request->all());

            if ($request->hasFile('image')) {

                $file = $request->file('image');
                
                //make sure yo have image folder inside your public
                $vendorproduct_path = 'uploads/vendorproducts/';
                $fileName = $file->getClientOriginalName();
                $profileImage = date("Ymd").$fileName.".".$file->getClientOriginalExtension();

                Image::make($file)->save(public_path($vendorproduct_path) . DIRECTORY_SEPARATOR. $profileImage);

                $vendorproduct->image = $vendorproduct_path.$profileImage;
            }
            
            $vendorproduct->save();

            return redirect('admin/vendorproduct')->with('flash_message', 'vendorproduct added!');
        }
        return response(view('403'), 403);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $model = str_slug('vendorproduct','-');
        if(auth()->user()->permissions()->where('name','=','view-'.$model)->first()!= null) {
            $vendorproduct = vendorproduct::findOrFail($id);
            return view('admin.vendorproduct.show', compact('vendorproduct'));
        }
        return response(view('403'), 403);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $model = str_slug('vendorproduct','-');
        if(auth()->user()->permissions()->where('name','=','edit-'.$model)->first()!= null) {
            $vendorproduct = vendorproduct::findOrFail($id);
            return view('admin.vendorproduct.edit', compact('vendorproduct'));
        }
        return response(view('403'), 403);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $model = str_slug('vendorproduct','-');
        if(auth()->user()->permissions()->where('name','=','edit-'.$model)->first()!= null) {
            
            $requestData = $request->all();
            

        if ($request->hasFile('image')) {
            
            $vendorproduct = vendorproduct::where('id', $id)->first();
            $image_path = public_path($vendorproduct->image); 
            
            if(File::exists($image_path)) {
                File::delete($image_path);
            }

            $file = $request->file('image');
            $fileNameExt = $request->file('image')->getClientOriginalName();
            $fileNameForm = str_replace(' ', '_', $fileNameExt);
            $fileName = pathinfo($fileNameForm, PATHINFO_FILENAME);
            $fileExt = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $fileName.'_'.time().'.'.$fileExt;
            $pathToStore = public_path('uploads/vendorproducts/');
            Image::make($file)->save($pathToStore . DIRECTORY_SEPARATOR. $fileNameToStore);

             $requestData['image'] = 'uploads/vendorproducts/'.$fileNameToStore;               
        }


            $vendorproduct = vendorproduct::findOrFail($id);
             $vendorproduct->update($requestData);

             return redirect('admin/vendorproduct')->with('flash_message', 'vendorproduct updated!');
        }
        return response(view('403'), 403);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        $model = str_slug('vendorproduct','-');
        if(auth()->user()->permissions()->where('name','=','delete-'.$model)->first()!= null) {
            vendorproduct::destroy($id);

            return redirect('admin/vendorproduct')->with('flash_message', 'vendorproduct deleted!');
        }
        return response(view('403'), 403);

    }
}
