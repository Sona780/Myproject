@extends('layout')

@section('content')

      <div class="row" >
        <div class="col-md-10">
          <h1><u>ALL PROJECTS</u></h1>
        </div>
        <div class="col-md-2" style="padding-top: 1em;">
          <a href="/createproject"><button class="btn btn-primary btn-lg " style="font-weight: bold;">Add new project</button></a>
        </div>
      </div>

      <br>

      <div class="row">
        <div class="col-md-12">
            @foreach($projects as $project)
                <div style="border-top: solid #e0e0e0 2px; min-height: 25px; padding-top: 1em; padding-bottom: 1em;"">
                  <a href="/project/{{$project->id}}" style="color: black; font-weight: bold;">{{$project->id}} - {{ $project->project_title}}</a>
                </div>
            @endforeach
        </div>
      </div>

      <div class="row">
        <div class="col-md-12 col-md-offset-10">
        <a href="/createproject"><button class="btn btn-primary btn-lg" style="font-weight: bold;">Add new project</button></a>
      </div>
      </div>

@stop
