<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function home()
  {
    $projects = DB::table('project')->get();
    return view('project.viewprojects', compact('projects'));
  }

public function show($id)
{
  $project=DB::table('project')->find($id);
  return view('project.showdetails', compact('project'));
}
public function index()
{
  return view('project.addproject');
}
public function storeproject(Request $request)
{

  return $request->all();
}
}
