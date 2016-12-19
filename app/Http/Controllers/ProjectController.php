<?php

namespace App\Http\Controllers;
use DB;
use App\Project;
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
//  return $request->all();
  $project=new project;
  $project->project_title= $request->project_title;
  $project->project_details= $request->project_details;
  $project->project_cost= $request->project_cost;
  $project->project_duration= $request->project_duration;
  $project->save();

  $projects = DB::table('project')->get();
  return view('project.viewprojects', compact('projects'));

}
}
