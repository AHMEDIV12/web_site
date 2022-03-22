<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MainView;
use App\Fields_Of_Work;
use App\ProjectImageSlider;
use App\WhyUs;
use App\Sponser;
use App\Review;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_reviews    = Review::all();
        $all_sponsers   = Sponser::all();
        $all_whyus      = WhyUs::all();
        $all_projects   = ProjectImageSlider::all();
        $all_views      = MainView::all();
        $all_fields     = Fields_Of_Work::all();
        return view('home_vertical_slide',
        compact('all_views', 'all_fields','all_projects','all_whyus','all_sponsers','all_reviews'));
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
        //
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
        //
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
