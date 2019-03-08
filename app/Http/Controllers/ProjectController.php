<?php

namespace App\Http\Controllers;

use App\Project;
use Storage;
use Image;
use App\Icon;
use App\Http\Requests\StoreProject;
use App\Services\Intervention;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();
        $icons = Icon::all();
         return view('project.projet_index',compact('projects','icons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
          return view('project.projet_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProject $request, Intervention $intervention)
    {
        $newproject = new Project;
        $newproject->titre = $request ->titre;
        $newproject->texte = $request ->texte;
        $newproject->image = $request->image->store('','image');

        // $lien = storage::disk('image')->path($newarticle->image);
        // $img = Image::make($lien)->resize(500,500);
        $img = $intervention->imageResize('image','100','100',$newproject->image);
        $img->save();
        $newproject->image = $request ->image;
        // dd($newservice);
        $newproject->save();
        $projects = Project::all();
        
        return view('project.projet_index',compact('projects'));
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $test = Project::where('id', $id)->first();
        return view('project.projet_edit',compact('test'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(StoreProject $request,$id)
    {
        $project = Project::where('id', $id)->first();
        $project->titre = $request->titre;
        $project->texte = $request->texte;
        $project->image = $request->image;
        $project->save();
        $projects = Project::all();
       
        
        return view('project.projet_index',compact('projects'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::where('id',$id)->first();
        $project->delete();
        $projects = Project::all();
        
        return view('project.projet_index',compact('projects'));
    }
}
