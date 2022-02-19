<div class="section-title mb-4">
    <h2>Curriculum Vitae</h2>
    <p>{!! nl2br(e($resume->description)) !!}</p>
</div>

<div class="row">
    <div class="col-lg-6 d-flex flex-column">
        <h3 class="my-3">Parcours Pro.</h3>
            @foreach ($jobs as $job)
                <div class="item-cv {{($loop->last) ? "flex-grow-1" : ""}} {{($loop->first) ? "pulsed" : ""}}">
                    <h4><strong>{{$job->name}}</strong> | {{$job->company}}</h4>
                    <div class="date text-muted">{{$job->start_date_month}} <i class="fas fa-long-arrow-alt-right mx-1"></i> @if(null !== $job->end_date) {{$job->end_date_month}} @else Aujourd'hui @endif </div> <small><i class="far fa-clock mx-1"></i> @if($job->start_date->format('m Y') == now()->format('m Y')) 1 mois @else {{$job->time_passed}} @endif</small>
                    <p>{!! nl2br(e($job->description)) !!}</p>
                </div>
            @endforeach
    </div>
    <div class="col-lg-6">
        <h3 class="my-3">Études et diplômes</h3>
        @foreach ($studies as $study)
            <div class="item-cv {{($loop->first) ? "pulsed" : ""}}">
                <h4><strong>{{$study->name}}</strong> | {{$study->school}}</h4>
                <div class="date text-muted"> {{$study->start_date->format('Y')}} <i class="fas fa-long-arrow-alt-right mx-1"></i>  @if(null !== $study->end_date) {{$study->end_date->format('Y')}} @else En cours @endif </div> @if (null !== $study->job) <small><i class="fas fa-briefcase mx-1"></i> En alternance chez {{$study->job->company}}</small> @endif
                <p>{!! nl2br(e($study->description)) !!}</p>
            </div>
        @endforeach
        <div class="pointer modal-competences" data-toggle="modal" data-target="#lgModal">
            <h3 class="my-3">Compétences <small><i class="fas fa-exclamation-triangle text-primary"></i></small></h3>
        </div>
        <div class="d-flex flex-wrap">
                @foreach ($resume->technologies as $competence)
                    <div class="skill w-50 @if($loop->even) pl-3 @else pr-3 @endif py-2">
                        <a href="#" class="open-modal-techno" data-id="{{$competence->id}}">
                            <h6 class="text-uppercase">{{$competence->name}}</h6>
                        </a>
                        <div class="progress">
                            <div class="progress-bar wow fadeInLeft" role="progressbar" style="width: {{$competence->mastery}}%" aria-valuenow="{{$competence->mastery}}" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                @endforeach
                @include('includes.modal-techno')
            </div>
    </div>
</div>

@section('scripts')
    <script>
        $('.modal-competences').on('click', function() {
            $.ajax({
                url : '/infos/competences',
                type : 'GET',
                success : function(data){
                    $('.modal-title').text('Des barres sur un CV, ça vous énerve ? 😇')
                    $('.modal-body').html(data);
                },
                error : function(){
                    console.log('err ajax')
                }

            });
        });      
        
        $(function(){
            $('[data-toggle="tooltip"]').tooltip();   
            
        });
    </script>
@endsection

