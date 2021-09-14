@extends('layouts.app')

@section('content')

<div class="bandeau d-flex align-items-center position-relative" style="background:linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('/img/realisations/{{$realisation->background_path}}')">
    <a class="text-white return-home" href="/#portfolio">
        <i class="fas fa-arrow-left"></i>
    </a>
    <h1 class="pl-5 ml-md-5 text-white">{{$realisation->name}}</h1>
</div>
<div class="infos p-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5">
                <h2>{{$realisation->name}}, qu'est-ce que c'est ?</h2>
                {!! nl2br(e($realisation->description)) !!}
                <h3 class="mt-5 lil-h3">Technologies utilisées :</h2>
                <div class="d-flex justify-content-center">
                    @foreach ($realisation->technologies as $technology)
                        <div style="background-color:{{$technology->color}}" class="logo-techno rounded text-white d-flex align-items-center justify-content-center mr-3">
                            {!! $technology->logo_icon !!}
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-7">
                <div>
                    <img src="{{asset('img/realisations/'.$realisation->background_path)}}" class="img-fluid rounded shadow" alt="">
                </div>
                <div class="row">
                    @foreach ($pictures as $picture)
                        <div class="col-6">
                            <img src="{{asset('storage/uploads/realisations/pictures/'.$picture->picture_path)}}" alt="Photo {{$picture->id}} du projet {{$realisation->name}}">                            
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

    @include('includes.modal-lg')
@endsection

