@extends('layout')

@section('content')

  <div class="row">
    <div class="col-md-10">
      <h1><u>ADD NEW PROJECT</u></h1>
    </div>
    <div class="col-md-2" style="padding-top: 1em;">
      <a href="/projects"><button class="btn btn-primary btn-lg " style="font-weight: bold;">View all projects</button></a>
    </div>
  </div>

  <br><br>

  <div class="row">
    <div class="col-md-12">

      <form method="POST" action="{{URL::to('/')}}/newproject">

        <input type="hidden" name="_method" value="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="form-group">
          <label for="project_title">Project Title</label>
          <input type="text" class="form-control" name="project_title" placeholder="Enter title">
        </div>

        <div class="form-group">
          <label for="project_details">Project Details</label>
          <textarea name="project_details" class="form-control" placeholder="Enter details" rows="3"></textarea>
        </div>

        <div class="form-group">
          <label for="project_duration">Project Duration</label>
          <input type="text" class="form-control" name="project_duration" placeholder="Enter duration of the project">
        </div>

        <div class="form-group">
          <label for="project_cost">Project Cost</label>
          <input type="text" class="form-control" name="project_cost" placeholder="Enter cost of the project">
        </div>

        <button class="btn btn-primary btn-lg btn-block" type="submit" style="font-weight: bold;">SUBMIT</button>

     </form>
   </div>
 </div>

@stop
