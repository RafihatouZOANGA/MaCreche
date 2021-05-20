@extends('layouts.admin_header')
@section('contenu')
    <div>
        @if(Session::has('message'))
            <p class="alert yes_inscrit {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
        @endif
    </div>
@endsection