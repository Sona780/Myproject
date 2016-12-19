@extends('layout')

@section('content')
@foreach($cards as $card)
   <div>
         {{ $card->get()}}
   </div>
@endforeach

@stop
