<div class="section-title mb-4">
    <h2>Mes réalisations</h2>
    <p>{!! nl2br(e($portfolio->description)) !!}</p>
</div>


<div class="container">
    <div class="row">
        @foreach ($realisations as $realisation)
            <div class="col-sm-4 p-3">
                     <div class="content text-center text-white rounded shadow bg-rea d-flex justify-content-center overflow-hidden px-3" style="background: linear-gradient(rgba(0, 0, 0, 0.3) 35%, rgba(0, 0, 0, 1)), url('{{asset('img/realisations/small/'.$realisation->background_path_small)}}')">
                    <div class="shortdesc-rea d-flex align-items-center justify-content-center">
                        <img src="{{asset('img/realisations/logo/'.$realisation->logo_path)}}" height="150" alt="Logo {{$realisation->name}}">
                         <p>{!! nl2br(e($realisation->description)) !!}</p>
                        <a href="{{route('project', $realisation->slug)}}" class="btn btn-dark mx-2">En savoir +</a>
                        <a target="_blank" href="{{$realisation->link}}" class="btn btn-dark mx-2">Visiter</a> 
                    </div>
                </div>
                <h5 class="text-center font-weight-bold text-uppercase my-3">{{$realisation->name}}</h5>
            </div>
        @endforeach
    </div>
</div>



                {{-- <x-card-rea :realisation="$realisation"/> --}}
  