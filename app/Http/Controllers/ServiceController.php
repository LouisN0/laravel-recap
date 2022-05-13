<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view("/back/services/all",compact("services"));
    }
    public function create()
    {
        if(! Gate::allows('create-service')){
            abort(403, 'Sorry, not allowed');
        }
        $services = Service::all();
        return view("/back/services/create",compact("services"));
    }
    public function store(Request $request)
    {
        $this->authorize('create', Service::class);
        
        $service = new Service;
        $request->validate([
            'icone'=> 'required',
            'titre'=> 'required',
            'description'=> 'required',
            'lien'=> 'required',
        ]); // store_validated_anchor;
        $service->icone = $request->icone;
        $service->titre = $request->titre;
        $service->description = $request->description;
        $service->lien = $request->lien;
        $service->save(); // store_anchor
        return redirect()->route("service.index")->with("message", "Successful storage !");
    }
    public function show($id)
    {
        $service = Service::find($id);
        return view("/back/services/show",compact("service"));
    }
    public function edit($id)
    {
        if(! Gate::allows('edit-service')){
            abort(403, 'Sorry, not allowed');
        }
        $services = Service::all();
        $service = Service::find($id);
        return view("/back/services/edit",compact("service", "services"));
    }
    public function update($id, Request $request)
    {
        $service = Service::find($id);

        $this->authorize('update', $service);

        $request->validate([
            'icone'=> 'required',
            'titre'=> 'required',
            'description'=> 'required',
            'lien'=> 'required',
        ]); // update_validated_anchor;
        $service->icone = $request->icone;
        $service->titre = $request->titre;
        $service->description = $request->description;
        $service->lien = $request->lien;
        
        $service->save(); // update_anchor
        return redirect()->route("service.index")->with("message", "Successful update !");
    }
    public function destroy($id, Request $request)
    {
        if(decrypt($request->id) == $id){

            $service = Service::find($id);
            $this->authorize('delete', $service);
            $service->delete();
            return redirect()->back()->with("message", "Successful delete !");
        }
        else{
            return redirect()->back()->with("message", "Error delete !");
        }
        
    }
}
