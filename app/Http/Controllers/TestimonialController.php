<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::all();
        return view("/back/testimonials/all",compact("testimonials"));
    }
    public function create()
    {
        return view("/back/testimonials/create");
    }
    public function store(Request $request)
    {
        // $this->authorize('create', Testimonial::class);
        
        $testimonial = new Testimonial;
        $request->validate([
            'nom'=> 'required',
            'date'=> 'required',
            'categorie'=> 'required',
            'taff'=> 'required',
            'rating'=> 'required',
            'commentaire'=> 'required',
        ]); // store_validated_anchor;
        $testimonial->nom = $request->nom;
        $testimonial->date = $request->date;
        $testimonial->categorie = $request->categorie;
        $testimonial->taff = $request->taff;
        $testimonial->rating = $request->rating;
        $testimonial->commentaire = $request->commentaire;
        $testimonial->image = $request->file("image")->storePublicly('images',"public");
        
        $testimonial->save(); // store_anchor
        return redirect()->route("testimonial.index")->with("message", "Successful storage !");
    }
    public function show($id)
    {
        $testimonial = Testimonial::find($id);
        return view("/back/testimonials/show",compact("testimonial"));
    }
    public function edit($id)
    {
        $testimonial = Testimonial::find($id);
        return view("/back/testimonials/edit",compact("testimonial"));
    }
    public function update($id, Request $request)
    {
        $testimonial = Testimonial::find($id);

        // $this->authorize('update', $testimonial);

        $request->validate([
            'nom'=> 'required',
            'date'=> 'required',
            'categorie'=> 'required',
            'taff'=> 'required',
            'rating'=> 'required',
            'commentaire'=> 'required',
              
        ]); // update_validated_anchor;
        $testimonial->nom = $request->nom;
        $testimonial->date = $request->date;
        $testimonial->categorie = $request->categorie;
        $testimonial->taff = $request->taff;
        $testimonial->rating = $request->rating;
        $testimonial->commentaire = $request->commentaire;
        $testimonial->image = $request->file("image")->storePublicly('images',"public");
        $testimonial->save(); // update_anchor
        return redirect()->route("testimonial.index")->with("message", "Successful update !");
    }
    public function destroy($id)
    {
        $testimonial = Testimonial::find($id);

        // $this->authorize('delete', $testimonial);
        $destination = "images/" . $testimonial->image;
        if(File::exists($destination)){
            File::delete($destination);
        }
        

        $testimonial->delete();
        return redirect()->back()->with("message", "Successful delete !");
    }
    // public function publish($id)
    // {
    //     $testimonial = Testimonial::find($id);
    //     $testimonial->status = 1;
    //     $testimonial->save();
    //     return redirect()->back()->with("message", "Successful publish !");
    // }
    // public function unpublish($id)
    // {
    //     $testimonial = Testimonial::find($id);
    //     $testimonial->status = 0;
    //     $testimonial->save();
    //     return redirect()->back()->with("message", "Successful unpublish !");
    // }
}
