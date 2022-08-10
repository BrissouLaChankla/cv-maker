@extends('layouts.app')

@section('content')

<div class="bandeau d-flex align-items-center position-relative" style="background:linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('{{ url('storage/realisations/'.$realisation->slug.'/background.webp') }}')">
    <a class="text-white return-home" href="/#portfolio">
        <i class="fas fa-arrow-left"></i>
    </a>
    <div class="position-relative rea-name">
        <h1 class="pl-5 ml-md-5 text-white">{{$realisation->name}}</h1>
        <span data-placement="bottom" data-toggle="tooltip" title="📅 Date de réalisation" class="badge badge-secondary">{{$realisation->date->format('m/Y')}}</span>
    </div>
</div>
<div class="infos p-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5 d-flex flex-column justify-content-between">
                <div>
                    <h2>{{$realisation->name}}, qu'est-ce que c'est ?</h2>
                    {!! nl2br(e($realisation->description)) !!}
                    <h3 class="mt-5 lil-h3 text-center">Technologies utilisées :</h2>
                        <div class="d-flex justify-content-center my-3">
                            @foreach ($realisation->technologies as $technology)
                                <a data-placement="bottom" href="#" data-id="{{$technology->id}}" data-toggle="tooltip" title="{{$technology->name}}" style="background-color:{{$technology->color}}" class="hvr-grow logo-techno open-modal-techno rounded text-white d-flex align-items-center justify-content-center mr-3 text-decoration-none">
                                    {!! $technology->logo_icon !!}
                                </a>
                            @endforeach
                            @include('includes.modal-techno')
                        </div>
                    </div>
                <div>
                    <a href="{{$realisation->link}}" target="_blank" class="btn btn-primary w-100">Visiter le site</a>
                </div>
            </div>
            <div class="col-lg-7">
                <div>
                    <img src="{{ url('storage/realisations/'.$realisation->slug.'/background.webp') }}" class="img-fluid rounded shadow" alt="">
                </div>
                <div class="row">
                    @foreach ($pictures as $picture)
                        <div class="col-6">
                            <img src="{{asset('storage/uploads/realisations/pictures/'.$picture->picture_path)}}" class="img-fluid rounded shadow-sm mt-3 " alt="Photo {{$picture->id}} de {{$realisation->name}}">                            
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

    @include('includes.modal-lg')
@endsection
