<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProjectImageSlider;

class ProjectImageSliderController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {

        $request->validate([
            'project_name'      =>'required|max:100',
            'project_adress'    =>'required|max:200',
            'project_img'       =>'required'
        ]);
        $data            = $request->all();

        if($request->hasFile('project_img')){
            $names = [];
            foreach($request->file('project_img') as $image)
            {
                $image->store('public/project_imgs');
                $path = 'storage/project_imgs/' .  $image->hashName();
                array_push($names ,  $path );
            }
            $data['project_img'] = json_encode($names);
        }

        $new_project = ProjectImageSlider::create($data);
        
        session()->flash('success', 'you created a Project successflly');
        return redirect()->back();
    }

    public function show($id)
    {
    }
    

    public function edit($id)
    {
        //
    }

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
