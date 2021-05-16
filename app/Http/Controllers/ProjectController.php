<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Image;
use App\Models\Project;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ArticleRequest;

class ProjectController extends Controller
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
        $categories = Category::all();
        $tags = Tag::all();
        return view('project.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request)
    {
        $project = Project::create([
            'title' => $request->input('title'),
            'slug' => $request->input('slug'),
            'body' => $request->input('body'),
            'category_id' => $request->input('category_id'),
            'tag_id' => $request->input('tag_id'),
            'user_id' => Auth::id()
        ]);
        $images = $request->file('img');
         if($images != null) {
             foreach($images as $image) {
                 $i = new Image(); 
                 $i->url = $image->store("public/projects/$project->id"); 
                 $i->project_id = $project->id;
                 $i->save(); 
             } 
         }

            $tags = collect($request->input('tags'));
            $tags->each(function($tag) use ($project){
                $project->tags()->attach($tag);
            });

        return redirect( route('project.show', compact('project', 'images', 'tags'))); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
         //ordina gli articoli e poi prendili
         $correlati=Project::orderby('id','desc')->get();

         //l'id della categoria degli articoli deve essere uguale al'id della categoria della funzione con cui stiamo filtrando la variabile correlati che contiene gli articoli 
         $related=$correlati->filter(function($correlato) use ($project){
             return $correlato->category_id==$project->category_id;
         });
         //mostra gli articoli correlati tranne il primo articolo 
         $relatedLessFirst=$related->filter(function($relate) use ($project){
             return $relate != $project;
         });
         //restituise 4 articoli correlatti 
         $lenghtReletedLessFirst = $relatedLessFirst->count();
         $relatedLast4 = $relatedLessFirst->slice($lenghtReletedLessFirst - 4);
         // ritona la vista mostra articolo 
         
        return view('project.show', compact('project', 'relatedLast4')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        $tags = Tag::all();
        $categories = Category::all();
        return view('project.edit',compact('project','categories','tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        $project->update($request->all());
        return redirect(route('admin.profile'))->with('message',"L'articolo $project->title è stato modificata corretamente.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $tags = $project->tags; 

        foreach ($tags as $tag) {
            $project->tags()->detach($tag->id); 
        }

        $project->delete();
        return redirect()->back()->with('message',"L'articolo $project->title è stato cancellato con successo");
    }
}
