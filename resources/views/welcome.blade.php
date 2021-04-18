@extends('layouts.app')

@section('content')
    <div id="hero" class="vh-100">
        
    </div>
    <div id="about" class="p-5 bg-light-grey">
        <div class="section-title mb-4">
            <h2>A propos</h2>
            <p>{!! nl2br(e($about->description)) !!}</p>
        </div>
        @include('includes.about')
    </div>
    <div id="resume" class="p-5">
        <div class="section-title mb-4">
            <h2>Curriculum Vitae</h2>
            <p>{!! nl2br(e($resume->description)) !!}</p>
        </div>
        @include('includes.resume')
    </div>
    <div id="portfolio" class="p-5 bg-light-grey">
        <div class="section-title mb-4">
            <h2>Mes réalisations</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci inventore culpa quae ex iure tempora totam, excepturi consequuntur quidem officia, accusamus architecto quisquam eum cumque veritatis! Exercitationem fuga officia in.</p>
        </div>
        @include('includes.portfolio')
    </div>

    <div id="contact" class="p-5">
        <div class="section-title mb-4">
            <h2>Contact</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci inventore culpa quae ex iure tempora totam, excepturi consequuntur quidem officia, accusamus architecto quisquam eum cumque veritatis! Exercitationem fuga officia in.</p>
        </div>
        @include('includes.contact')
    </div>

    @include('includes.modal-lg')
@endsection

