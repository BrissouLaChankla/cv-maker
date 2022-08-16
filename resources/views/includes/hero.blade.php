<div class="d-flex p-md-5 p-3 justify-content-center flex-column h-100">
  <h1 class="ml6">
      <span class="text-wrapper">
        <span class="letters text-white">{{$herotexts->welcome}}</span>
      </span>
  </h1>
  <div class="text-white size-12 ">
    <p class="m-0 wow fadeIn" data-wow-delay=".6s">{{$herotexts->first_phrase}}</p>
    <p class="m-0 wow fadeIn" data-wow-delay="1s">{{$herotexts->second_phrase}}</p>
  </div>
  <div class="mt-5">
    <a target="_blank" data-no-swup href="{{asset('CV.pdf')}}" class="btn btn-light px-3 rounded-big size-11 wow fadeInUp" data-wow-delay="1.2s">Télécharger mon CV</a>
    <a data-no-swup href="#about" class="btn btn-outline-light px-3 rounded-big size-11 ml-3 wow fadeInUp" data-wow-delay="1.4s">Découvrir <i class="fas fa-sort-down"></i></a>
  </div>
</div>
