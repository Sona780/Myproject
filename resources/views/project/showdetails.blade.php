@extends('layout')

@section('content')
<center>
    <h1><u>PROJECT DETAIL - {{$project->project_title}}</u></h1>
       <div>
              {{ $project->project_title}}
         <br>{{ $project->project_cost}}
         <br>{{ $project->project_details}}
         <br>{{ $project->project_duration}}
       </div>
       <a href="/projects">View all</a>
</center>
@stop
