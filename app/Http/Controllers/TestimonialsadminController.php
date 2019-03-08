<?php

namespace App\Http\Controllers;


use App\Acceuil;
use App\Carousel;
use App\Service;
use App\Testimonial;
use App\Client;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTestimonials;

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
        $clients = Client::all();
        
        return view('testimonials.testimonial_index',compact('testimonials','clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clients = Client::all();
        $testimonials = Testimonial::all();
        return view('testimonials.testimonial_create',compact('clients','testimonials'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTestimonials $request)
    {
        $newtestimonial = new Testimonial;
        
        $newtestimonial->texte = $request->texte;
        $newtestimonial->client_id = $request->client_id;
        // $newtestimonial->fonction = $request->fonction;
        // dd($newservice);
        $newtestimonial->save();
        $testimonials = Testimonial::all();
        $clients = Client::all();
        
        return view('testimonials.testimonial_index',compact('testimonials','clients'));
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = Client::where('id', $id)->first();
        return view('testimonials.testimonial_show',compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $test = Testimonial::where('id', $id)->first();
        $client = Client::all()->first();
       
        return view('testimonials.testimonial_edit',compact('test','client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Storetestimonials $request, $id)
    {
        $testimonial = Testimonial::where('id', $id)->first();
        $testimonial->texte = $request->texte;
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
        Testimonial::where('client_id','LIKE', '%'.$id.'%')->delete();
        $testimonial = Testimonial::where('id',$id)->first();
        $testimonial->delete();
        $testimonials = Testimonial::all();
        $clients = Client::all();
        return view('testimonials.testimonial_index',compact('testimonials','clients'));
    }
}
