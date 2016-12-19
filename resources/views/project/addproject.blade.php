@extends('layout')

@section('content')
<center>
    <h1><u>ADD NEW PROJECT</u></h1>
    <form method="POST" action="{{URL::to('/')}}/newproject">
      <input type="hidden" name="_method" value="POST">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">

       <div>
            <table>
                    <tr><td>Project Title</td><td><input type="text" name="project_title" placeholder="Enter title"></td></tr>
                    <tr><td>Project details</td><td><textarea name="project_details" placeholder="Enter details"></textarea></td></tr>
                    <tr><td>Project Duration</td><td><input type="text" name="project_duration" placeholder="Enter duration of the project"></td></tr>
                    <tr><td>Project cost</td><td><input type="text" name="project_cost" placeholder="Enter cost of the project"></td></tr>
                    <tr><td colspan="2"><center><button type="submit">SUBMIT</button></td></tr>
            </table>
       </div>
     </form>

</center>
@stop
