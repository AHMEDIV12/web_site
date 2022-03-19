<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProjectImageSlider;

class ProjectImageSliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'project_name'      =>'required|max:100',
            'project_adress'    =>'required|max:200',
            'project_img'=>'required'
        ]);
        
        $data            = $request->all();
        
        if ($request->file('project_img') != null) {
            $request->file('project_img')->store('public/project_imgs');
            $data['project_img']  = 'storage/project_imgs/' . $request->file('project_img')->hashName();
        }
        $new_project = ProjectImageSlider::create($data);
        
        session()->flash('success', 'you created a Project successflly');
        return redirect(route('main'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $request->validate([
            'project_name'      =>'required|max:100',
            'project_adress'    =>'required|max:200',
            'project_img'=>'required'
        ]);
        
        $target_mainview = ProjectImageSlider::find($id);
        
        $data            = $request->all();
        if ($request->file('project_img') != null) {
            $request->file('project_img')->store('public/project_imgs');
            $data['project_img']  = 'storage/project_imgs/' . $request->file('project_img')->hashName();
        }

        $target_mainview->update($data);
        
        session()->flash('success', 'you updated a Project successflly');
        return redirect(route('main'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $target_object  = ProjectImageSlider::find($id);
        $target_object->delete();
        return redirect()->back();
    }
}
