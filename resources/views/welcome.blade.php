@extends('layouts.app')

@section('content')
    <div id="hero" class="vh-100">
        
    </div>
    <div id="about" class="p-5 bg-light-grey">
        @include('includes.about')
    </div>
    
    <div id="resume" class="p-5">
        @include('includes.resume')
    </div>

    <div id="portfolio" class="p-5 bg-light-grey">
        @include('includes.portfolio')
    </div>

    <div id="contact" class="p-5">
        @include('includes.contact')
    </div>

    @include('includes.modal-lg')
@endsection

