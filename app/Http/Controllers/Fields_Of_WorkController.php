<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fields_Of_Work;

class Fields_Of_WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
            'title'      =>'required|max:100',
            'disc'    =>'required|max:200',
            'img'=>'required'
        ]);
        
        $data         = $request->all();
        if ($request->file('img') != null) {
            $request->file('img')->store('public/fields_imgs');
            $data['img']  = 'storage/fields_imgs/' . $request->file('img')->hashName();
        }
        
        $new_field = Fields_Of_Work::create($data);
        
        session()->flash('success', 'you created a field successflly');
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
            'title'      =>'required|max:100',
            'disc'    =>'required|max:200',
            'img'=>'required'
        ]);
        
        $target_mainview = Fields_Of_Work::find($id);
        
        $data         = $request->all();
        if ($request->file('img') != null) {
            $request->file('img')->store('public/fields_imgs');
            $data['img']  = 'storage/fields_imgs/' . $request->file('img')->hashName();
        }
        
        $target_mainview->update($data);
        
        session()->flash('success', 'you updated a field successflly');
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
        $target_object  = Fields_Of_Work::find($id);
        $target_object->delete();
        return redirect()->back();
    }
}
