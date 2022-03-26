<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\About;

class AboutController extends Controller
{
    public function index()
    {
        $header      = About::where('section_key' , 'header')    ->first();
        $about_us    = About::where('section_key' , 'about_us')  ->first();
        $all_services= About::where('section_key' , 'service')   ->orderBy('id', 'desc')->get();
        $all_clients = About::where('section_key' , 'client')    ->get();
        $client_bg   = About::where('section_key' , 'client_img')->first();
        $all_teams   = About::where('section_key' , 'team')      ->get();
        return view('about_page.index',
        compact('header','about_us','all_services', 'all_clients','client_bg','all_teams'));
    }


// HEADER SECTION METHODs
    public function header_store(Request $request) {
        $request->validate([
            'title'       =>'required|max:200',
            'sub_title'   =>'required|max:200',
            'img'         =>'image',
        ]);
        $request->file('img')->store('public/about_mainView_imgs');
        $path = 'storage/about_mainView_imgs/' . $request->file('img')->hashName();
        
        About::where('section_key' , 'header')->delete();
        
        $data = [
            'section_key' => 'header',
            'meta'        => json_encode($request->except('_token','img')),
            'img'         => $path,
        ];

        $new_header = About::create($data);
        session()->flash('success', ' HEADER has been created successfly');
        return redirect(route('about.index'));
    }

    public function header_update(Request $request, $id) {
    
        $data               = $request->all();
        $target_review      = About::find($id);
        $request->validate([
                'title'     =>'required|max:200',
                'sub_title' =>'required|max:200',
                'img'       =>'image',
        ]);

        if ($request->file('img') != null) {
            $request->file('img')->store('public/about_mainView_imgs');
            $data['img']    = 'storage/about_mainView_imgs/' . $request->file('img')->hashName();
        }

        $target_review->update($data);
        session()->flash('success', 'you updated HEADER successflly');
        return redirect(route('about.index'));
    }
//end HEADER SECTION METHODs


// About US section METHODs
    public function about_us_store(Request $request) {
        $request->validate([
            'disc_1'     =>'required|max:2000',
            'disc_2'     =>'required|max:2000',
            'num_1'      =>'required|numeric',
            'disc_num_1' =>'required|max:2000',
            'num_2'      =>'required|numeric',
            'disc_num_2' =>'required|max:2000',
            'num_3'      =>'required|numeric',
            'disc_num_3' =>'required|max:2000',
            'num_4'      =>'required|numeric',
            'disc_num_4' =>'required|max:2000',
        ]);
        
        $data = [
            'section_key'=> 'about_us',
            'meta'       => json_encode($request->except('_token')),
            'img'        =>'no img', 
        ];
        About::where('section_key' , 'about_us')->delete();
        $new_header      = About::create($data);
        // dd($new_header);
        session()->flash('success', 'About US has been created successfly');
        return redirect(route('about.index'));        
    }
//end About US METHODs


// SERVICE section METHODs
    public function service_store(Request $request) {
        // dd($request);
        $request->validate([
            'service_name'     =>'required| ',
            'service_disc'     =>'required|max:2000',
        ]);

        $request->file('img')->store('public/service_imgs');
        $path = 'storage/service_imgs/' . $request->file('img')->hashName();
        
        $data = [
            'section_key'=> 'service',
            'meta'       => json_encode($request->except('_token','img')),
            'img'        =>$path,
        ];
        $new_service      = About::create($data);
        session()->flash('success', 'Service has been created successfly');
        return redirect(route('about.index'));        
    }

    public function service_update(Request $request, $id) {
        $request->validate([
            'service_name'     =>'required|max:200 ',
            'service_disc'     =>'required|max:200',
        ]);

        $target_object      = About::find($id);
        $request->file('img')->store('public/service_imgs');
        $path = 'storage/service_imgs/' . $request->file('img')->hashName();
        $data = [
            'section_key'=> 'service',
            'meta'       => json_encode($request->except('_token','img')),
            'img'        =>$path, 
        ];
        $target_object->update($data);
        session()->flash('success', 'Service has been updated successfly');
        return redirect(route('about.index'));        
    }

    public function service_delete(Request $request, $id) {

        $target_object      = About::find($id);
        $target_object->delete();
        session()->flash('success', 'Service has been created successfly');
        return redirect()->back();

    }
//end SERVICE METHODs


// CLIENT METHODs
    public function client_store(Request $request) {
        // dd($request);
        $request->validate([
            'img'     =>'image',
        ]);

        $request->file('img')->store('public/client_imgs');
        $path = 'storage/client_imgs/' . $request->file('img')->hashName();
        
        $data = [
            'section_key'=> 'client',
            'meta'       => 'this ?client? has no meta',
            'img'        =>$path, 
        ];
        $new_client      = About::create($data);
        session()->flash('success', 'Client has been created successfly');
        return redirect(route('about.index'));        
    }

    public function client_bg_store(Request $request) {
        
        About::where('section_key' , 'client_img')->delete();
        
        if($request->file('img')){
            $request->validate([
                'img'     =>'image',
            ]);
            $request->file('img')->store('public/client_bg_imgs');
            $path = 'storage/client_bg_imgs/' . $request->file('img')->hashName();
            
            $data = [
                'section_key'=> 'client_img',
                'meta'       => 'this ?section? has no meta',
                'img'        =>$path, 
            ];
        }else{
            $data = [
                'section_key'=> 'client_img',
                'meta'       => 'this ?section? has no meta',
                'img'        => null, 
            ];
        }  // end if

        $new_client_bg      = About::create($data);
        session()->flash('success', 'Clients Background has been created successfly');
        return redirect(route('about.index'));        
    }

    public function client_update(Request $request, $id) {
        // dd($request);
        $request->validate([
            'img'     =>'image ',
        ]);

        $target_object      = About::where('id', $id)->delete();

        $request->file('img')->store('public/client_imgs');
        $path = 'storage/client_imgs/' . $request->file('img')->hashName();
        
        $data = [
            'section_key'=> 'client',
            'meta'       => 'this ?client? has no meta',
            'img'        =>$path, 
        ];
        $new_client      = About::create($data);
        $new_client->id  = $id ;
        session()->flash('success', 'Client has been updated successfly');
        return redirect(route('about.index'));        
    }

    public function client_delete(Request $request, $id) {

        $target_object      = About::find($id);
        $target_object->delete();
        return redirect()->back();

    }
//end CLIENT METHODs


// TEAM METHODs
    public function team_store(Request $request) {
        $request->validate([
            'member_name'     =>'required|max:200',
            'member_position'     =>'required|max:200',
        ]);

        $request->file('img')->store('public/member_imgs');
        $path = 'storage/member_imgs/' . $request->file('img')->hashName();
        
        $data = [
            'section_key'=> 'team',
            'meta'       => json_encode($request->except('_token','img')),
            'img'        =>$path, 
        ];
        $new_member      = About::create($data);
        session()->flash('success', 'Member has been created successfly');
        return redirect(route('about.index'));        
    }

    public function team_update(Request $request, $id) {
        // dd($request);
        $request->validate([
            'member_name'     =>'required|max:200 ',
            'member_position'     =>'required|max:200',
        ]);

        $target_object      = About::find($id);
        $request->file('img')->store('public/member_imgs');
        $path = 'storage/member_imgs/' . $request->file('img')->hashName();
        $data = [
            'section_key'=> 'service',
            'meta'       => json_encode($request->except('_token','img')),
            'img'        =>$path, 
        ];
        $target_object->update($data);
        session()->flash('success', 'Member has been updated successfly');
        return redirect(route('about.index'));        
    }

    public function team_delete(Request $request, $id) {

        $target_object      = About::find($id);
        $target_object->delete();
        return redirect()->back();

    }
//end TEAM METHODs

    public function destroy($id)
    {
        //
    }
}
