@extends('layouts.app')

@section('content')
    <div id="hero" class="vh-100" style="background: linear-gradient(rgba(0, 0, 0, 0.6) 35%, rgba(0, 0, 0, 0.6)), url('/img/background.webp');">
        @include('includes.hero')
    </div>
    <div id="about" class="px-3 py-4 p-md-5 bg-light-grey overflow-hidden">
        @include('includes.about')
    </div>
    
    <div id="resume" class="px-3 py-4 p-md-5">
        @include('includes.resume')
    </div>

    <div id="portfolio" class="px-3 py-4 p-md-5 bg-light-grey">
        @include('includes.portfolio')
    </div>

    <div id="contact" class="px-3 py-4 p-md-5">
        @include('includes.contact')
    </div>

    @include('includes.modal-lg')
@endsection

