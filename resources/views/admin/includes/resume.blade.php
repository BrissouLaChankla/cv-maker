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
                  Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
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
                    {!! Form::open(['url' => '/edit/study']) !!}
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
                                title="Si tu es en train de réaliser ta formation, met la date de fin théorique"></i>
                            {{ Form::date('end_date', $study->end_date, ['class' => 'form-control']) }}
                        </div>
                        <div class="w-100 text-right px-3 pt-3 pb-0">
                            {{ Form::submit('Enregistrer', ['class' => 'btn btn-primary btn-lg']) }}
                        </div>
                    </div>
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
            Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
          </div>
        </div>
        <div class="row">
            @foreach ($jobs as $job)
            <div class="col-md-6">
                <a class="btn btn-secondary w-100 p-4 mt-3" data-toggle="collapse" href="#collapseJob{{ $job->id }}"
                    role="button" aria-expanded="false" aria-controls="collapseJob{{ $job->id }}">
                    {{ $job->start_date->format('Y') }} -@if(null !== $job->end_date) {{$job->end_date->format('Y')}} @else Aujourd'hui @endif ({{$job->name}})
                </a>
                <div class="collapse" id="collapseJob{{ $job->id }}">
                    <div class="alert alert-dark shadow-sm" role="alert">
                        {!! Form::open(['url' => '/edit/job']) !!}
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
                            <div class="w-100 text-right px-3 pt-3 pb-0">
                                {{ Form::submit('Enregistrer', ['class' => 'btn btn-primary btn-lg']) }}
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    @endsection
