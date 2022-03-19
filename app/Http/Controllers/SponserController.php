<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sponser;

class SponserController extends Controller
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
            'img'=>'required'
        ]);
        
        $data            = $request->all();

        if ($request->file('img') != null) {
            $request->file('img')->store('public/sponsers_imgs');
            $data['img']  = 'storage/sponsers_imgs/' . $request->file('img')->hashName();
        }
        $new_sponser = Sponser::create($data);

        session()->flash('success', 'you created a Sponser successflly');
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
            'img'=>'required'
        ]);

        $target_sponser = Sponser::find($id);

        $data            = $request->all();
        if ($request->file('img') != null) {
            $request->file('img')->store('public/sponsers_imgs');
            $data['img']  = 'storage/sponsers_imgs/' . $request->file('img')->hashName();
        }

        $target_sponser->update($data);

        session()->flash('success', 'you updated a Sponser successflly');

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
        $target_object  = Sponser::find($id);
        $target_object->delete();
        return redirect()->back();
    }
}
