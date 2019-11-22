@extends('app')

@section('content')

@if (Session::has('flash_message'))
    <script> 
    M.toast({html: ' Hello ', displayLegth: 1000, timeRemaining: 2000})">Toast!</a>
    </script> 

@else
    
@endif


@endsection