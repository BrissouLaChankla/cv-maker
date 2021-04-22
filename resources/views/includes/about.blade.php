<div class="section-title mb-4">
    <h2>A propos</h2>
    <p>{!! nl2br(e($about->description)) !!}</p>
</div>

<div class="row">
    <div class="col-md-4">
        <img src="{{asset('img/profile.jpg')}}" class="img-fluid" alt="photo-moi">
    </div>
    <div class="col-md-8 mt-md-0 mt-3">
        <div class="row">
            <h3>{{$lastJob->name}}</h3>
            <p>{!! nl2br(e($about->details))!!}</p>
            <div class="col-lg-6">
                <p class="arrowed">
                    <strong>Date de naissance :</strong>
                    <span class="birthday">
                        {{ $about->birthday->format('d-m-Y') }}
                    </span>
                </p>
            </div>
            <div class="col-lg-6">
                <p class="arrowed">
                    <strong>Age :</strong>
                    <span class="age">
                        {{ $about->birthday->age }} ans
                    </span>
                </p>
            </div>
            <div class="col-lg-6">
                <p class="arrowed">
                    <strong>Téléphone :</strong>
                    <a href="tel:+{{$about->phone}}">{{$about->phone}}</a>
                </p>
            </div>
            <div class="col-lg-6">
                <p class="arrowed">
                    <strong>E-mail :</strong>
                    <a href="mailto:{{$about->email}}">{{$about->email}}</a>
                </p>
            </div>
            <div class="col-lg-6">
                <p class="arrowed">
                    <strong>Département :</strong>
                    {{$about->location}}
                </p>
            </div>
            <div class="col-lg-6">
                <p class="arrowed">
                    <strong>Diplôme :</strong>
                    {{ $about->diploma }}
                </p>
            </div>
            <div class="col-lg-6">
                <p class="arrowed">
                    <strong>Hobbies :</strong>
                    {{ $about->hobbies }}
                </p>
            </div>
            <div class="col-lg-6">
                <p class="arrowed">
                    <strong>Statut :</strong>
                    {{$about->status}} 
                </p>
            </div>
        </div>
    </div>
</div>

