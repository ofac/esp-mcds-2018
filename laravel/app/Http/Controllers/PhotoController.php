<?php

namespace App\Http\Controllers;
use App\Http\Requests\PhotoRequest;
use App\Photo;
use Auth;
use Intervention\Image\ImageManagerStatic as Image;

use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function create() {
    	return view('photos.create');
    }

    public function save(PhotoRequest $request) {
    	//dd($request);
    	$photo = new Photo;
    	if($request->hasFile('photo')) {
    		$nphoto    = time().'.'.$request->photo->extension();
	        $directory = public_path('/imgs/');
	        $url       = $directory.$nphoto;
	        $img = Image::make($request->file('photo'));
            $img->resize(500, 500)->insert(public_path('/imgs/watermark.png'), 'top-left', 20, 20)->save($url);
    	}
    	$photo->url = '/imgs/'.$nphoto;
    	$photo->user_id = Auth::user()->id;
    	$photo->description = $request->get('description');

    	if ($photo->save()) {
    		return redirect('home')->with('status', 'La Foto se adiciono con exito!');
    	}

    }
}
