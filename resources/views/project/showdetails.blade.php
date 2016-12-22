@extends('layout')

@section('content')

  <div class="row">
    <div class="col-lg-10" style="font-weight:bold;">
          <h1><u>PROJECT DETAILS</u></h1>
    </div>
    <div class="col-md-2" style="padding-top: 1em;">
      <a href="/createproject"><button class="btn btn-primary btn-lg " style="font-weight: bold;">Add new project</button></a>
    </div>
  </div>

<h2 style="font-weight: bold;"> {{ $project->project_title}}</h2>

  <div class="row">
    <div class="col-md-10">
        <h3>{{ $project->project_details}}</h3>
    </div>

    <div class="col-md-2">
      <h3 style="font-weight: bold;">{{ $project->project_cost}} INR</h3>
      <h3 style="font-weight: bold;">{{ $project->project_duration}} months</h3>
    </div>

  </div>
<br>
    <div class="row">
      <div class="col-md-2 col-md-offset-10">
       <a href="/projects"><button class="btn btn-primary btn-lg btn-block" style="font-weight:bold;">View all</button></a>
     </div>
   </div>

@stop
