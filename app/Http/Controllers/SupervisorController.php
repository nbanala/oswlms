<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\supervisor;
use App\Http\Requests;

class SupervisorController extends Controller
{
    public function index()
    {
        
        $supervisors=Supervisor::all();
        return view('addsupervisor.index',compact('supervisors'));
    }  
  
  public function show($id)
    {
        $supervisor = Supervisor::findOrFail($id);
        return view('addsupervisor.show',compact('supervisor'));
    }

   public function create()
    {
        return view('addsupervisor.create');
    }

   public function store(Request $request)
    {
        $supervisor= new Supervisor($request->all());
        $supervisor->save();
        return redirect('/addsupervisor');
    }

  public function edit($id)
    {
        $supervisor=Supervisor::find($id);
        return view('addsupervisor.edit',compact('supervisor'));
    }
 
  public function update($id,Request $request)
    {
        //
        $supervisor= new Supervisor($request->all());
        $supervisor=Supervisor::find($id);
        $supervisor->update($request->all());
        return redirect('/addsupervisor');
    }

public function destroy($id)
    {
        Supervisor::find($id)->delete();
        return redirect('/addsupervisor');
    }
}
