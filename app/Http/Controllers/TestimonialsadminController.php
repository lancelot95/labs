<?php

namespace App\Http\Controllers;


use App\Acceuil;
use App\Carousel;
use App\Service;
use App\Testimonial;
use Illuminate\Http\Request;

class TestimonialsadminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $testimonials = Testimonial::all();

        return view('testimonials.testimonial_index',compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('testimonials.testimonial_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newtestimonial = new Testimonial;
        $newtestimonial->texte = $request->texte;
        $newtestimonial->photo = $request->photo;
        $newtestimonial->nom = $request->nom;
        $newtestimonial->fonction = $request->fonction;
        // dd($newservice);
        $newtestimonial->save();
        $testimonials = Testimonial::all();
        
        return view('testimonials.testimonial_index',compact('testimonials'));
        
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
        $test = Testimonial::where('id', $id)->first();
        
        return view('testimonials.testimonial_edit',compact('test'));
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
        $testimonial = Testimonial::where('id', $id)->first();
        $testimonial->texte = $request->texte;
        $testimonial->photo = $request->photo;
        $testimonial->nom = $request->nom;
        $testimonial->fonction = $request->fonction;
        $testimonial->save();

        

        // $acceuils = Acceuil::all();
        $testimonials = Testimonial::all();
        // $projects = Project::all();
        // $worlds = World::take(3)->get();
        // $worldrights = Worldright::take(3)->get();
        
        return view('testimonials.testimonial_index',compact('testimonials'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testimonial = Testimonial::where('id',$id)->first();
        $testimonial->delete();
        $testimonials = Testimonial::all();
        
        return view('testimonials.testimonial_index',compact('testimonials'));
    }
}
