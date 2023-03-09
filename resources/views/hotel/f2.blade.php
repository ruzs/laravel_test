@extends('layouts.appHotel')

@section('title', 'F2 Title')

{{-- @section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection --}}

@section('content')
<h2>2f</h2>
<a href="{{route('hotels.1')}}">1f</a><br>
<a href="{{route('hotels.3')}}">3f</a>
@endsection
