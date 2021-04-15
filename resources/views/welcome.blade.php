@extends('layouts.app')

@section('content')
    <div id="hero" class="vh-100">
        
    </div>
    <div id="about" class="p-5 bg-light-grey">
        <div class="section-title mb-4">
            <h2>A propos</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci inventore culpa quae ex iure tempora totam, excepturi consequuntur quidem officia, accusamus architecto quisquam eum cumque veritatis! Exercitationem fuga officia in.</p>
        </div>
        @include('includes.about')
    </div>
    <div id="cv" class="p-5">
        <div class="section-title mb-4">
            <h2>Curriculum Vitae</h2>
            <p>‍Développeur web en formation Master à SUPDEWEB je suis quelqu'un de créatif et polyvalent j'adore réaliser toutes sortes de projets web qu'il soit pour une entreprise, un proche ou pour moi même.
            </p>
            <p>
                Mes connaissances sont plus axées sur le développement Front-end mais je sais me servir de la suite Adobe pour l'UX/UI de mes projets. Je maîtrises le côté marketing et communication grâce aux compétences acquises lors de mes formations et de mes expériences (Création d'agence de com. ~ BDE ~ Dropshipping...).
            </p>
        </div>
        @include('includes.cv')
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

