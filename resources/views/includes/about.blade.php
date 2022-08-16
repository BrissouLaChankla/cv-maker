<div class="section-title mb-4">
    <h2>À propos</h2>
    <p>{!! nl2br(e($about->description)) !!}</p>
</div>

<div class="row align-items-center">
    <div class="col-lg-4">
        <div class="h-100 d-flex align-items-center d-md-block">
            <img src="{{ url('storage/common/profile.webp') }}" class="img-fluid rounded profile-cv" alt="Brice Eliasse">
        </div>
    </div>
    <div class="col-lg-8 mt-lg-0 mt-3 p-5">
        <h3>{{$lastJob->name}}</h3>
        <p>{!! nl2br(e($about->details))!!}</p>
        <div class="row">
            <div class="col-md-6 p-0">
                <p class="arrowed">
                    <strong class="text-nowrap">Date de naissance : </strong>
                    <span class="birthday"> 
                        {{ $about->birthday->format('d/m/Y') }}
                    </span>
                </p>
            </div>
            <div class="col-md-6 p-0">
                <p class="arrowed">
                    <strong class="text-nowrap ">Age : </strong>
                    <span class="age">
                        {{ $about->birthday->age }} ans
                    </span>
                </p>
            </div>
            <div class="col-md-6 p-0">
                <p class="arrowed">
                    <span>
                        <strong class="text-nowrap ">Téléphone : </strong>
                        <a href="tel:+{{$about->phone}}">{{$about->phone}}</a>
                    </span>
                </p>
            </div>
            <div class="col-md-6 p-0">
                <p class="arrowed">
                    <strong class="text-nowrap ">E-mail : </strong>
                    <a href="mailto:{{$about->email}}">{{$about->email}}</a>
                </p>
            </div>
            <div class="col-md-6 p-0">
                <p class="arrowed">
                    <strong class="text-nowrap ">Lieu : </strong>
                    {{$about->location}}
                </p>
            </div>
            <div class="col-md-6 p-0">
                <p class="arrowed">
                    <strong class="text-nowrap ">Diplôme :</strong>
                    {{ $about->diploma }}
                </p>
            </div>
            <div class="col-md-6 p-0">
                <p class="arrowed">
                    <strong class="text-nowrap ">Hobbies :</strong>
                    {{ $about->hobbies }}
                </p>
            </div>
            <div class="col-md-6 p-0">
                <p class="arrowed">
                    <strong class="text-nowrap ">Statut :</strong>
                    {{$about->status}} 
                </p>
            </div>
        </div>
    </div>
</div>

