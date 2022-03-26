<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProjectImageSlider;
use App\Project;

class ProjectController extends Controller
{
    
    public function index()
    {
        $all_projects = Project::where('section_key' ,'project')->get();
        $header       = Project::where('section_key' ,'header')->first();
        return view('projects_page.index',compact('all_projects','header'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'project_name'      =>'required|max:100',
            'project_adress'    =>'required|max:2000',
            'client_name'       =>'required|max:100',
            'project_status'    =>'required|max:200',
            'cover_img'         =>'required|image',
        ]);

        $request->file('cover_img')->store('public/project_imgs');
        $cover_img_path = 'storage/project_imgs/' .  $request->file('cover_img')->hashName();

        $names = [$cover_img_path];
        foreach($request->file('img') as $image)
        {
            $image->store('public/project_imgs');
            $path = 'storage/project_imgs/' .  $image->hashName();
            array_push($names ,  $path );
        }

        $data = [
            'section_key' =>'project',
            'meta' => json_encode($request->except('_token', 'img')),
            'img'  => json_encode($names),
        ];

        $new_project = Project::create($data);
        session()->flash('success', 'you created a Project successflly');
        return redirect()->back();
    }

    public function header_store(Request $request){
        $request->validate([
            'title'      =>'required|max:100',
            'sub_title'  =>'required|max:2000',
        ]);

        Project::where('section_key' , 'header')->delete();

        $data = [
                'section_key' =>'header',
                'meta' => json_encode($request->except('_token')),
                'img' => 'no img',
            ];
        Project::create($data);
        return redirect()->back();

    }

    public function show($id)
    {
        $target_project = Project::find($id);
        return view('projects_page.show', compact('target_project'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'project_name'      =>'required|max:100',
            'project_adress'    =>'required|max:2000',
            'client_name'       =>'required|max:100',
            'project_status'    =>'required|max:200',
        ]);
        $data            = $request->all();


        $target_project      = Project::find($id);

        if($request->hasFile('img')){
            $names = [];
            foreach($request->file('img') as $image)
            {
                $image->store('public/project_imgs');
                $path = 'storage/project_imgs/' .  $image->hashName();
                array_push($names ,  $path );
            }
            $data = [
                'meta' => json_encode($request->except('_token', 'img')),
                'img' => json_encode($names),
            ];
        }else{
            $data = [
                'meta' => json_encode($request->except('_token', 'img')),
                'img' => $target_project->img,
            ];
        } ;


        $target_project->update($data);
        $target_project->save();
        
        session()->flash('success', 'project has been updated successfly');
        return redirect(route('all_projects.index'));        
    }

    public function destroy($id)
    {
        $target_object      = Project::find($id);
        $target_object->delete();
        return redirect()->back();
    }
}
