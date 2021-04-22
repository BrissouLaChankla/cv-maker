@extends('layouts.admin.app')
@section('content')
<div class="p-5">
    <h1>Modification de la section {{$section}}</h1>
    
    
    @include("admin.includes.".$section)
</div>

@endsection