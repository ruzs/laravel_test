@extends('layouts.appHotel')

@section('title', 'F1 Title')

{{-- @section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection --}}

@section('content')
<h2>1f</h2>
<a href="{{route('hotels.2')}}">2f</a><br>
<a href="{{route('hotels.3')}}">3f</a>
@endsection
