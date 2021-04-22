@extends('layouts.app')

@section('content')

<div class="bandeau d-flex align-items-center" style="background-image:url('{{$realisation->background_path}}')">
    <h1 class="pl-5 text-white">{{$realisation->name}}</h1>
</div>
<div class="infos p-5">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <h2>{{$realisation->name}}, qu'est-ce que c'est ?</h2>
                {!! nl2br(e($realisation->description)) !!}
                <h3 class="mt-5">Technologies utilisées :</h2>
                <ul>
                    @foreach ($realisation->technologies as $technology)
                        <li>{{$technology->name}}</li>
                    @endforeach
                </ul>
            </div>
            <div class="col-lg-5">
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

