@extends('layouts.appHotel')

@section('title', 'F3 Title')

{{-- @section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection --}}

@section('content')
<h2>3f</h2>
<a href="{{route('hotels.1')}}">1f</a><br>
<a href="{{route('hotels.2')}}">2f</a>
@endsection
