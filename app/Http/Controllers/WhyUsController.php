<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WhyUs;

class WhyUsController extends Controller
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
            'title'        =>'required|max:100',
            'disc'         =>'required|max:2000',
            'img'           =>'required',
            'sub_t_1'      =>'required|max:100',
            'sub_t_2'      =>'required|max:100',
            'sub_t_3'      =>'required|max:100',
            'sub_t_4'      =>'required|max:100',
        ]);

        $data            = $request->all();
        
        if ($request->file('img') != null) {
            $request->file('img')->store('public/WhyUs_imgs');
            $data['img']  = 'storage/WhyUs_imgs/' . $request->file('img')->hashName();
        }
        $new_WhyUs = WhyUs::create($data);
        
        session()->flash('success', 'you created a Why Us successflly');
        return redirect()->back();
        
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
            'title'        =>'required|max:100',
            'disc'         =>'required|max:200',
            'img'          =>'required',
            'sub_t_1'      =>'required|max:100',
            'sub_t_2'      =>'required|max:100',
            'sub_t_3'      =>'required|max:100',
            'sub_t_4'      =>'required|max:100',
        ]);
        $target_WhyUs       = WhyUs::find($id);
        
        $data               = $request->all();
        if ($request->file('img') != null) {
            $request->file('img')->store('public/WhyUs_imgs');
            $data['img']  = 'storage/WhyUs_imgs/' . $request->file('img')->hashName();
        }
        
        $target_WhyUs->update($data);

        session()->flash('success', 'you updated a why us successflly');
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
        //
    }
}
