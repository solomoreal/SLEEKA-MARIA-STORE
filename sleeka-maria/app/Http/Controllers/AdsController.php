<?php

namespace App\Http\Controllers;

use App\Ads;
use Illuminate\Http\Request;

class AdsController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
     
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(auth()->user()->role == 'Admin'){
        $ads = Ads::latest()->paginate(5);
        return view('admin.ads',compact('ads'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(auth()->user()->role == 'Admin'){
            return view('admin.create_ads');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(auth()->user()->role == 'Admin'){
            $this->validate($request,[
                'ads_name' => 'string|nullable',
                'image' => 'image|required',
            ]);

            if($request->hasFile('image')){
                //get file name with extension
                $fileNameWithExt = $request->file('image')->getClientOriginalName();
                //get just file name
                $filename = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
                //get just extension
                $extension = $request->file('image')->getClientOriginalExtension();
                $title = $request->ads_name;
                //file name to store
                $image_url = $title.'_'.time().'.'.$extension;
                //upload image
                $path = $request->file('image')->storeAs('public/ads', $image_url);
            }else{
                $image_url = 'noimage.jpg';
            }

            $ads = new Ads();
            $ads->ads_name = $request->ads_name;
            $ads->image_url = $image_url;
            $ads->save();
            return redirect(route('ads.index'))->with('success','new adverts created');

    

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ads  $ads
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ads = Ads::findOrFail($id);
        return view('admin.view_ad',compact('ads'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ads  $ads
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ads = Ads::findOrFail($id);
        return view('admin.edit_ads',compact('ads'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ads  $ads
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ads $ads)
    {
        if(auth()->user()->role == 'Admin'){
            $this->validate($request,[
                'ads_name' => 'string|nullable',
                'image' => 'image|nullable',
            ]);

            if($request->hasFile('image')){
                //get file name with extension
                $fileNameWithExt = $request->file('image')->getClientOriginalName();
                //get just file name
                $filename = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
                //get just extension
                $extension = $request->file('image')->getClientOriginalExtension();
                $title = $request->ads_name;
                //file name to store
                $image_url = $title.'_'.time().'.'.$extension;
                //upload image
                $path = $request->file('image')->storeAs('public/ads', $image_url);
            }
            if($request->file('image')){
                if($ads->image_url != 'noimage.jpg'){
                    Storage::delete('public/ads/'.$ads->image_url);
                    $ads->image_url = $image_url;
                }
            }
            $ads->ads_name = $request->ads_name;
            $ads->update();
            return redirect(route('ads.index'))->with('success','adverts updated');

    

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ads  $ads
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ads = Ads::find($id);
       if(auth()->user()->role == 'Admin'){
            if($ads->image_url != 'noimage.jpg'){
                Storage::delete('public/ads/'.$ads->image_url);
            }
        
       } 
    }
}
