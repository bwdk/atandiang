@extends('layouts/master')

@section('title', 'A.T Marketing Manager')

@section('content')
@yield('content', View::make('areas.header'))
@yield('content', View::make('areas.aboutme'))
@yield('content', View::make('areas.interests'))
@yield('content', View::make('areas.technical'))
@yield('content', View::make('areas.exp'))
@yield('content', View::make('areas.realisations'))
@yield('content', View::make('areas.projects'))
@yield('content', View::make('areas.education'))
@yield('content', View::make('areas.interestwo'))
@yield('content', View::make('areas.contact'))
@endsection