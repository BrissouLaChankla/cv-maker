@extends('layouts.admin.app')

@section('content')

    <div class="px-3 py-4 p-md-5">
        <h2>Votre portfolio</h2>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt facere porro voluptatum, saepe blanditiis
            veritatis odit sint ab vel natus maxime exercitationem, omnis magnam dignissimos numquam ad pariatur aperiam
            tempora?</p>
            {!! Form::open(['url' => '/edit/portfolio', 'class' => 'ajax mb-3']) !!}
                <div class="row align-items-center">
                    <div class="col-md-10">
                        {{ Form::label('description', 'Phrase d\'introduction') }}
                        <i class="fas fa-info-circle" data-placement="auto" data-toggle="tooltip"
                            title="Petite description qui apparait pour présenter l'ensemble de tes projets"></i>
                        {{ Form::textarea('description', $portfolio->description, ['class' => 'form-control', 'rows' => 2]) }}
                    </div>
                    <div class="col-md-2 ">
                        {{ Form::submit('Mettre à jour', ['class' => 'btn btn-primary ']) }}
                    </div>
                </div>
            {!! Form::close() !!}
        <h3 class="mt-5">Ajoutez vos réalisations</h3>
        <a class="btn btn-primary" data-toggle="collapse" href="#collapseAddRea" role="button" aria-expanded="false"
            aria-controls="collapseAddRea">
            Ajouter une réalisation
        </a>
        <div class="collapse" id="collapseAddRea">
            <div class="card card-body">
                {!! Form::open(['url' => '/create/rea', 'files' => true]) !!}
                <div class="row">
                    <div class="col-md-6 mt-2">
                        {{ Form::label('name', 'Nom du projet') }}
                        {{ Form::text('name', null, ['class' => 'form-control']) }}

                        {{ Form::label('description', 'Description détaillée', ['class' => 'mt-3']) }}
                        <i class="fas fa-info-circle" data-placement="auto" data-toggle="tooltip"
                            title="Il nous faut une description de ton projet, n'hésite pas à entrer un peu dans les détails (~500 caractères)"></i>
                        {{ Form::textarea('description', null, ['class' => 'form-control']) }}

                        {{ Form::label('short_description', 'Description courte', ['class' => 'mt-3']) }}
                        <i class="fas fa-info-circle" data-placement="auto" data-toggle="tooltip"
                            title="Une description plus courte en 10 mots pour donner un aperçu depuis la page principale, tu peux laisser vide si t'as la flemme... 🤷‍♂️"></i>
                        {{ Form::textarea('short_description', null, ['class' => 'form-control', 'rows' => 2]) }}

                    </div>
                    <div class="col-md-6 mt-2">
                        <div class="row">
                            <div class="col-md-4">
                                {{ Form::label('logo_path', 'Logo du projet') }}
                                {!! Form::file('logo_path', ['class' => 'd-none']) !!}
                                <div class="position-relative change-pic change-logo-style pointer">
                                    <img src="{{ url('storage/uploads/realisations/logo/exemple.png') }}"
                                        class="img-fluid ">
                                    <span class="text-white icon-hover">
                                        <i class="fas fa-camera-retro"></i>
                                    </span>
                                </div>
                            </div>    
                                <div class="col-md-8">
                                    {{ Form::label('background_path', 'Background du projet') }}
                                    {!! Form::file('background_path', ['class' => 'd-none']) !!}
                                    <div class="position-relative change-pic change-background-style pointer">
                                        <img src="{{ url('storage/uploads/realisations/background/exemple.jpg') }}"
                                            class="img-fluid rounded">
                                        <span class="text-white icon-hover">
                                            <i class="fas fa-camera-retro"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col">
                                    {{ Form::label('date', 'Date (environ) du projet', ['class' => 'mt-3']) }}
                                    {{ Form::date('date', null, ['class' => 'form-control']) }}

                                    {{ Form::label('link', 'Lien du projet (facultatif)', ['class' => 'mt-3']) }}
                                    {{ Form::text('link', null, ['class' => 'form-control']) }}
                                </div>
                        </div> 
                    </div>

                    <div class="w-100 text-right px-3 pt-3 pb-0">
                        {{ Form::submit('Créer', ['class' => 'btn btn-primary btn-lg']) }}
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
        @foreach ($realisations as $realisation)
            <a class="btn btn-secondary w-100 p-4 mt-3" data-toggle="collapse" href="#collapseRea{{ $realisation->id }}"
                role="button" aria-expanded="false" aria-controls="collapseRea{{ $realisation->id }}">
                {{ $realisation->name }}
            </a>
            <div class="collapse" id="collapseRea{{ $realisation->id }}">
                <div class="alert alert-dark shadow-sm" role="alert">
                    {!! Form::open(['url' => '/edit/rea', 'class' => 'ajax-and-picture']) !!}
                    <div class="row">

                        <div class="col-md-6 mt-2">
                            {{ Form::label('name', 'Nom du projet') }}
                            {{ Form::text('name', $realisation->name, ['class' => 'form-control']) }}

                            {{ Form::label('description', 'Description détaillée', ['class' => 'mt-3']) }}
                            <i class="fas fa-info-circle" data-placement="auto" data-toggle="tooltip"
                                title="Il nous faut une description de ton projet, n'hésite pas à entrer un peu dans les détails (~500 caractères)"></i>
                            {{ Form::textarea('description', $realisation->description, ['class' => 'form-control']) }}

                            {{ Form::label('short_description', 'Description courte', ['class' => 'mt-3']) }}
                            <i class="fas fa-info-circle" data-placement="auto" data-toggle="tooltip"
                                title="Une description plus courte en 10 mots pour donner un aperçu depuis la page principale, tu peux laisser vide si t'as la flemme... 🤷‍♂️"></i>
                            {{ Form::textarea('short_description', $realisation->short_description, ['class' => 'form-control', 'rows' => 2]) }}

                        </div>
                        <div class="col-md-6 mt-2">
                            <div class="row">
                                <div class="col-md-4">
                                    {{ Form::label('logo_path', 'Logo du projet') }}
                                    {!! Form::file('logo_path', ['class' => 'd-none']) !!}
                                    <div class="position-relative change-pic change-logo-style pointer">
                                        <img src="{{ Storage::url('storage/uploads/realisations/logo/' . $realisation->logo_path) }}"
                                            class="img-fluid ">
                                        <span class="text-white icon-hover">
                                            <i class="fas fa-camera-retro"></i>
                                        </span>
                                    </div>
                                </div>    
                                    <div class="col-md-8">
                                        {{ Form::label('background_path', 'Background du projet') }}
                                        {!! Form::file('background_path', ['class' => 'd-none']) !!}
                                        <div class="position-relative change-pic change-background-style pointer">
                                            <img src="{{ Storage::url('storage/uploads/realisations/background/' . $realisation->background_path_small) }}"
                                                class="img-fluid rounded">
                                            <span class="text-white icon-hover">
                                                <i class="fas fa-camera-retro"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col">
                                        {{ Form::label('date', 'Date (environ) du projet', ['class' => 'mt-3']) }}
                                        {{ Form::date('date', $realisation->date, ['class' => 'form-control']) }}

                                        {{ Form::label('link', 'Lien du projet (facultatif)', ['class' => 'mt-3']) }}
                                        {{ Form::text('link', $realisation->link, ['class' => 'form-control']) }}
                                    </div>
                            </div> 
                        </div>
                    
                        <div class="w-100 d-flex justify-content-between align-items-center px-3 pt-3 pb-0">
                            <div class="btn btn-danger" data-slug="rea" data-id={{$realisation->id}}><i class="fas fa-trash"></i></div>
                            {{ Form::submit('Mettre à jour', ['class' => 'btn btn-primary btn-lg']) }}
                        </div>

                    </div>
                    {{ Form::hidden('id', $realisation->id) }}
                    {!! Form::close() !!}
                        <div class="alert-primary rounded p-3 mt-4">
                            <h5 class="text-primary">Lier des compétences à ce projet</h5>
                            <p>Parmis ces compétences, lesquelles as-tu utilisé au cours de ce projet ?</p>
                            {{$realisation->name}} :
                                {!! Form::open(['url' => '/edit/reatechnology', 'class' => 'ajax row']) !!}
                                @foreach ($technologies as $technology)
                                    <div class="col-md-6 col-xl-4 mt-3">
                                        @if($technology->isUsed($realisation->id))
                                            {{ Form::checkbox($technology->id, 1, 1, ['class' => 'form-control', 'data-toggle' => 'toggle', 'data-on' => 'Utilise', 'data-off' => 'N\'utilise pas', 'data-width' => 120]) }}
                                        <span style="background-color:{{$technology->color}}" class="text-white text-center py-1 px-2 mx-2 rounded">
                                            {!! $technology->logo_icon !!}
                                        </span>
                                            {{$technology->name}} 
                                        @else
                                            {{ Form::checkbox($technology->id, 1, 0, ['class' => 'form-control', 'data-toggle' => 'toggle', 'data-on' => 'Utilise', 'data-off' => 'N\'utilise pas', 'data-width' => 120]) }}
                                            <span style="background-color:{{$technology->color}}" class="text-white text-center py-1 px-2 mx-2 rounded">
                                                {!! $technology->logo_icon !!}
                                            </span>
                                            {{$technology->name}}
                                        @endif
                                    </div>
                                @endforeach
                                <div class="text-right w-100 px-3">
                                    {{ Form::hidden('realisation_id', $realisation->id)}} 
                                    {{ Form::submit('Mettre à jour', ['class' => 'btn btn-primary']) }}
                                </div>
                                {!! Form::close() !!}
                        </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection
