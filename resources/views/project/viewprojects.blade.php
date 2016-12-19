@extends('layout')

@section('content')
<center>
    <h1><u>ALL PROJECTS</u></h1>
       <div>
           @foreach($projects as $project)
                 <a href="/project/{{$project->id}}">{{$project->id}} - {{ $project->project_title}}</a>
                 <br>
          @endforeach

          
                 <a href="/createproject"><button>add new project</button></a>
       </div>
</center>
@stop
