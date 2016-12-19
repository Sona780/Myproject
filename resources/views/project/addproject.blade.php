@extends('layout')

@section('content')
<center>
    <h1><u>ADD NEW PROJECT</u></h1>
    <form method="POST" action="/newproject">
       <div>
            <table> <tr><td>Project Title</td><td><input type="text" placeholder="Enter title"></td></tr>
                    <tr><td>Project details</td><td><input type="textarea" placeholder="Enter details"></td></tr>
                    <tr><td>Project Duration</td><td><input type="text" placeholder="Enter duration of the project"></td></tr>
                    <tr><td>Project cost</td><td><input type="text" placeholder="Enter cost of the project"></td></tr>
                    <tr><td colspan="2"><center><button>Submit</button></td></tr>
            </table>
       </div>
     </form>

</center>
@stop
