<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index()
    {
        $banners = Banner::all();
        return view("/back/banners/all",compact("banners"));
    }
    public function edit($id)
    {
        $banner = Banner::find($id);
        return view("/back/banners/edit",compact("banner"));
    }
    public function update($id, Request $request)
    {
        $banner = Banner::find($id);
        $request->validate([
            'titre'=> 'required',
            'sstitre'=> 'required',
            'appleTitre'=> 'required',
            'applelien'=> 'required',
            'androidTitre'=> 'required',
            'androidlien'=> 'required',
        ]); // update_validated_anchor;
        $banner->titre = $request->titre;
        $banner->sstitre = $request->sstitre;
        $banner->appleTitre = $request->appleTitre;
        $banner->applelien = $request->applelien;
        $banner->androidTitre = $request->androidTitre;
        $banner->androidlien = $request->androidlien;
        $banner->img = 'images/' . $request->file('image')->hashName();
        $banner->save(); // update_anchor
        return redirect()->route("banner.index")->with("message", "Banner has been updated !");
    }
}
