@extends('layouts.admin.app')
@section('content')
    <div class="p-5">
        <h2>Les informations sur le CV</h2>
            <h3 class="mt-4">Ajoutez vos formations/études</h3>

            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt facere porro voluptatum, saepe blanditiis
            veritatis odit sint ab vel natus maxime exercitationem, omnis magnam dignissimos numquam ad pariatur aperiam
            tempora?</p>

                <a class="btn btn-primary" data-toggle="collapse" href="#collapseAddStudy" role="button" aria-expanded="false" aria-controls="collapseAddStudy">
                  Ajouter une formation
                </a>
              <div class="collapse" id="collapseAddStudy">
                <div class="card card-body">
                    {!! Form::open(['url' => '/create/study']) !!}
                    <div class="row">
                        <div class="col-md-6 mt-2">
                            {{ Form::label('name', 'Nom de la formation') }}
                            {{ Form::text('name', null, ['class' => 'form-control']) }}
                        </div>
                        <div class="col-md-6 mt-2">
                            {{ Form::label('school', 'École / Organisme') }}
                            {{ Form::text('school', null, ['class' => 'form-control']) }}
                        </div>
                        <div class="col-md-6 mt-2">
                            {{ Form::label('description', 'Description de ta formation') }}
                            <i class="fas fa-info-circle" data-placement="auto" data-toggle="tooltip"
                                title="Petite description de ce que ta formation a à proposer"></i>
                            {{ Form::textarea('description', null, ['class' => 'form-control']) }}
                        </div>
                        <div class="col-md-6 mt-2">
                            {{ Form::label('start_date', 'Début de la formation') }}
                            {{ Form::date('start_date', null, ['class' => 'form-control']) }}
                        </div>
                        <div class="col-md-6 mt-2">
                            {{ Form::label('end_date', 'Fin de la formation') }}
                            <i class="fas fa-info-circle" data-placement="auto" data-toggle="tooltip"
                                title="Si tu es en train de réaliser ta formation, met la date de fin théorique"></i>
                            {{ Form::date('end_date', null, ['class' => 'form-control']) }}
                        </div>
                        <div class="w-100 text-right px-3 pt-3 pb-0">
                            {{ Form::submit('Créer', ['class' => 'btn btn-primary btn-lg']) }}
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
              </div>

<div class="row">
        @foreach ($studies as $study)
        <div class="col-md-6">
            <a class="btn btn-secondary w-100 p-4 mt-3" data-toggle="collapse" href="#collapseStudy{{ $study->id }}"
                role="button" aria-expanded="false" aria-controls="collapseStudy{{ $study->id }}">
                {{ $study->name }}
            </a>
            <div class="collapse" id="collapseStudy{{ $study->id }}">
                <div class="alert alert-dark shadow-sm" role="alert">
                    {!! Form::open(['url' => '/edit/study', 'class' => 'ajax']) !!}
                    <div class="row">
                        <div class="col-md-6 mt-2">
                            {{ Form::label('name', 'Nom de la formation') }}
                            {{ Form::text('name', $study->name, ['class' => 'form-control']) }}
                        </div>
                        <div class="col-md-6 mt-2">
                            {{ Form::label('school', 'École / Organisme') }}
                            {{ Form::text('school', $study->school, ['class' => 'form-control']) }}
                        </div>
                        <div class="col-md-6 mt-2">
                            {{ Form::label('description', 'Description de ta formation') }}
                            <i class="fas fa-info-circle" data-placement="auto" data-toggle="tooltip"
                                title="Petite description de ce que ta formation a à proposer"></i>
                            {{ Form::textarea('description', $study->description, ['class' => 'form-control']) }}
                        </div>
                        <div class="col-md-6 mt-2">
                            {{ Form::label('start_date', 'Début de la formation') }}
                            {{ Form::date('start_date', $study->start_date, ['class' => 'form-control']) }}
                        </div>
                        <div class="col-md-6 mt-2">
                            {{ Form::label('end_date', 'Fin de la formation') }}
                            <i class="fas fa-info-circle" data-placement="auto" data-toggle="tooltip"
                                title="SI TU NE SAIS PAS quand se termine en théorie ta formation (c'est étrange ?) mais laisse vide"></i>
                            {{ Form::date('end_date', $study->end_date, ['class' => 'form-control']) }}
                        </div>
                        <div class="w-100 d-flex justify-content-between align-items-center px-3 pt-3 pb-0">
                            <div class="btn btn-danger" data-slug="study" data-id={{$study->id}}><i class="fas fa-trash"></i></div>
                            {{ Form::submit('Enregistrer', ['class' => 'btn btn-primary btn-lg']) }}
                        </div>
                    </div>
                    {{ Form::hidden('id', $study->id) }}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
        @endforeach
    </div>
        <h3 class="mt-5">Ajoutez vos emplois</h3>

        <a class="btn btn-primary" data-toggle="collapse" href="#collapseAddJob" role="button" aria-expanded="false" aria-controls="collapseAddJob">
            Ajouter une entreprise
          </a>
        <div class="collapse" id="collapseAddJob">
          <div class="card card-body">
            {!! Form::open(['url' => '/create/job']) !!}
            <div class="row">
                <div class="col-md-6 mt-2">
                    {{ Form::label('name', 'Intitulé du poste') }}
                    {{ Form::text('name', null, ['class' => 'form-control']) }}
                </div>
                <div class="col-md-6 mt-2">
                    {{ Form::label('company', 'Entreprise') }}
                    {{ Form::text('company', null, ['class' => 'form-control']) }}
                </div>
                <div class="col-md-6 mt-2">
                    {{ Form::label('start_date', 'Début du contrat') }}
                    {{ Form::date('start_date', null, ['class' => 'form-control']) }}
                </div>
                <div class="col-md-6 mt-2">
                    {{ Form::label('end_date', 'Fin du contrat') }}
                    <i class="fas fa-info-circle" data-placement="auto" data-toggle="tooltip"
                    title="Laisser vide si vous y travaillez actuellement"></i>
                    {{ Form::date('end_date', null, ['class' => 'form-control']) }}
                </div>
                <div class="col-12 mt-2">
                    {{ Form::label('description', 'Description de ton poste') }}
                    <i class="fas fa-info-circle" data-placement="auto" data-toggle="tooltip"
                        title="Petite description de ton rôle au sein de l'entreprise"></i>
                    {{ Form::textarea('description', null, ['class' => 'form-control']) }}
                </div>
                <div class="w-100 text-right px-3 pt-3 pb-0">
                    {{ Form::submit('Créer', ['class' => 'btn btn-primary btn-lg']) }}
                </div>
            </div>
            {!! Form::close() !!}
          </div>
        </div>
        <div class="row">
            @foreach ($jobs as $job)
            <div class="col-md-6">
                <a class="btn btn-secondary w-100 p-4 mt-3" data-toggle="collapse" href="#collapseJob{{ $job->id }}"
                    role="button" aria-expanded="false" aria-controls="collapseJob{{ $job->id }}">
                    {{$job->name}}
                    <small>
                        (
                            {{ $job->start_date->format('Y') }} -@if(null !== $job->end_date) {{$job->end_date->format('Y')}} @else Aujourd'hui @endif ({{$job->name}})
                        )
                    </small>
                </a>
                <div class="collapse" id="collapseJob{{ $job->id }}">
                    <div class="alert alert-dark shadow-sm" role="alert">
                        {!! Form::open(['url' => '/edit/job', 'class'=>'ajax']) !!}
                        <div class="row">
                            <div class="col-md-6 mt-2">
                                {{ Form::label('name', 'Intitulé du poste') }}
                                {{ Form::text('name', $job->name, ['class' => 'form-control']) }}
                            </div>
                            <div class="col-md-6 mt-2">
                                {{ Form::label('company', 'Entreprise') }}
                                {{ Form::text('company', $job->company, ['class' => 'form-control']) }}
                            </div>
                            <div class="col-md-6 mt-2">
                                {{ Form::label('start_date', 'Début du contrat') }}
                                {{ Form::date('start_date', $job->start_date, ['class' => 'form-control']) }}
                            </div>
                            <div class="col-md-6 mt-2">
                                {{ Form::label('end_date', 'Fin du contrat') }}
                                <i class="fas fa-info-circle" data-placement="auto" data-toggle="tooltip"
                                title="Laisser vide si vous y travaillez actuellement"></i>
                                {{ Form::date('end_date', $job->end_date, ['class' => 'form-control']) }}
                            </div>
                            <div class="col-12 mt-2">
                                {{ Form::label('description', 'Description de ton poste') }}
                                <i class="fas fa-info-circle" data-placement="auto" data-toggle="tooltip"
                                    title="Petite description de ton rôle au sein de l'entreprise"></i>
                                {{ Form::textarea('description', $job->description, ['class' => 'form-control']) }}
                            </div>
                            <div class="w-100 d-flex justify-content-between align-items-center px-3 pt-3 pb-0">
                                <div class="btn btn-danger" data-slug="job" data-id={{$job->id}}><i class="fas fa-trash"></i></div>
                                {{ Form::submit('Enregistrer', ['class' => 'btn btn-primary btn-lg']) }}
                            </div>
                        </div>
                        {{ Form::hidden('id', $job->id) }}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <h3 class="mt-5">Ajoutez vos compétences</h3>

        <a class="btn btn-primary" data-toggle="collapse" href="#collapseAddTechnology" role="button" aria-expanded="false" aria-controls="collapseAddTechnology">
            Ajouter une compétence
        </a>
        <div class="collapse" id="collapseAddTechnology">
          <div class="card card-body">
            {!! Form::open(['url' => '/create/technology']) !!}
            <div class="form-row">
                <div class="col-md-6 mt-2">
                    {{ Form::label('name', 'Nom de la techno') }}
                    {{ Form::text('name', null, ['class' => 'form-control']) }}
                    {{ Form::label('description', 'Description de la techno', ['class' =>'mt-2']) }}
                    {{ Form::textarea('description', null, ['class' => 'form-control']) }}
                </div>
                <div class="col-md-6 mt-2 pl-2">
                    {{ Form::label('logo_icon', 'Balise de l\'icon') }}
                    {{ Form::text('logo_icon', null, ['class' => 'form-control']) }}
                    {{ Form::label('color', 'Couleur du logo', ['class' =>'mt-2']) }}
                    {{ Form::text('color', null, ['class' => 'form-control colorpicker']) }}
                    {{ Form::label('type', 'Type de techno', ['class' =>'mt-2']) }}
                    {{ Form::select('type', ['Front-End' => 'Front-end', 'Back-end' => 'Back-End'], null,  ['class' => 'form-control']) }}
                    {{ Form::label('mastery', 'Maîtrise', ['class' =>'mt-2']) }}
                    <input name="mastery" type="range" class="form-control-range" min="0" max="100" value="1" step="10">
                    <div class="w-100 d-flex justify-content-between pt-3 pb-0">
                        <div>
                            {{ Form::label('resume_id', 'Montrer sur le CV ?', ['class' =>'mt-2']) }}
                            <div>
                                {{ Form::checkbox('resume_id', 1, 0, ['class' => 'form-control', 'data-toggle' => 'toggle', 'data-on' => 'Oui', 'data-off' => 'Non']) }}
                            </div>
                        </div>
                        <div class="w-100 text-right px-3 pt-3 pb-0">
                            {{ Form::submit('Créer', ['class' => 'btn btn-primary btn-lg']) }}
                        </div>
                    </div>
                </div>
            </div>
             
            {!! Form::close() !!}
          </div>
        </div>
        <div class="row">
            @foreach ($technologies as $technology)
            <div class="col-md-6 tec">
                <a class="banner btn w-100 p-4 mt-3 text-white" data-toggle="collapse" style="background-color:{{$technology->color}}" href="#collapseTechno{{ $technology->id }}"
                    role="button" aria-expanded="false" aria-controls="collapseTechno{{ $technology->id }}">
                    {{ $technology->name }}
                </a>
                <div class="collapse" id="collapseTechno{{$technology->id}}">
                    <div class="alert alert-dark shadow-sm" role="alert">
                        {!! Form::open(['url' => '/edit/technology', 'class'=>'ajax']) !!}
                        <div class="form-row">
                            <div class="col-md-6 mt-2">
                                {{ Form::label('name', 'Nom de la techno') }}
                                {{ Form::text('name', $technology->name, ['class' => 'form-control']) }}
                                {{ Form::label('description', 'Description de la techno', ['class' =>'mt-2']) }}
                                {{ Form::textarea('description', $technology->description, ['class' => 'form-control']) }}
                            </div>
                            <div class="col-md-6 mt-2 pl-2">
                                {{ Form::label('logo_icon', 'Balise de l\'icon') }}
                                {{ Form::text('logo_icon', $technology->logo_icon, ['class' => 'form-control']) }}
                                {{ Form::label('color', 'Couleur du logo', ['class' =>'mt-2']) }}
                                {{ Form::text('color', $technology->color, ['class' => 'form-control colorpicker']) }}
                                {{ Form::label('type', 'Type de techno', ['class' =>'mt-2']) }}
                                {{ Form::select('type', ['Front-End' => 'Front-end', 'Back-end' => 'Back-End'], $technology->type,  ['class' => 'form-control']) }}
                                {{ Form::label('mastery', 'Maîtrise', ['class' =>'mt-2']) }}
                                <input name="mastery" type="range" class="form-control-range" min="0" max="100" value="{{$technology->mastery}}" step="10">
                                <div class="pt-3 pb-0">
                                        {{ Form::label('resume_id', 'Montrer sur le CV ?', ['class' =>'mt-2 mr-2']) }}
                                            {{ Form::checkbox('resume_id', 1, $technology->resume_id, ['class' => ' form-control', 'data-toggle' => 'toggle', 'data-on' => 'Oui', 'data-off' => 'Non']) }}
                                </div>
                            </div>
                            <div class="w-100 d-flex justify-content-between align-items-center px-3 pt-3 pb-0">
                                <div class="btn btn-danger" data-slug="technology" data-id={{$technology->id}}><i class="fas fa-trash"></i></div>
                                {{ Form::submit('Enregistrer', ['class' => 'btn btn-primary btn-lg']) }}
                            </div>
                        </div>
                        {{ Form::hidden('id', $technology->id) }}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
            @endforeach
        </div>

{{-- Form::selectRange('number', 10, 20); --}}
    @endsection
@section('scripts')
    <script>
           @if (Session::has('swal'))
                swal.fire({
                    title: "Super !", 
                    icon: "success",
                    html: "{{ Session::get('swal')}}"
                });
            @endif
        </script>
@endsection
