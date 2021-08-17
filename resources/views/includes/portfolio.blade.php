<div class="section-title mb-4">
    <h2>Mes réalisations</h2>
    <p>{!! nl2br(e($portfolio->description)) !!}</p>
</div>

{{-- <div class="d-flex justify-content-center my-3">
    <div class="d-flex bg-light portfolio-sort px-2 bg-primary">
        <span data-sort="all" class="pointer sort text-uppercase py-2 px-3">ALL</span>
        <span data-sort="app" class="pointer sort text-uppercase py-2 px-3">App</span>
        <span data-sort="test" class="pointer sort text-uppercase py-2 px-3">test</span>
        <span data-sort="web" class="pointer sort text-uppercase py-2 px-3">WEB</span>
    </div>
</div> --}}
<div class="container">
    <div class="row">
        @foreach ($realisations as $realisation)
            <div class="col-sm-4 my-3 p-3">
                <div class="content text-center text-white rounded shadow bg-rea d-flex justify-content-center overflow-hidden px-3" style="background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75)), url('https://i.pinimg.com/736x/6d/6d/a1/6d6da1386014c5a3d5877a14488eeb5d.jpg')">
                    <div class="mt-auto mb-3 shortdesc-rea">
                        <h5 class="text-white">{{$realisation->name}}</h5>
                        <p>{!! nl2br(e($realisation->description)) !!}</p>
                        <a href="{{route('project', $realisation->slug)}}" class="btn btn-dark">En savoir +</a>
                        <a target="_blank" href="{{$realisation->link}}" class="btn btn-dark">Visiter</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
{{-- 
<div class="text-right">
    <a href="{{route('allProjects')}}" class="btn btn-primary">Voir tous les projets <i class="fas fa-arrow-right ml-1"></i></a>
</div> --}}
