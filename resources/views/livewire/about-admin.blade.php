<div>
    <div class="section-title mb-4">
        <h2>A propos</h2>
        <div class="mb-5">
            <div id="editor-description">
        
            </div>
        </div>
        <div style="text-align: center">
            <button wire:click="increment">+</button>
            <h1>{{ $count }}</h1>
        </div>
    </div>
    {!! Form::open(['url' => route('edit-about')]) !!}
        <div class="row">
            <div class="col-md-4">
                <img src="{{asset('img/profile.jpg')}}" class="img-fluid" alt="photo-moi">
            </div>
            <div class="col-md-8 mt-md-0 mt-3">
                <div class="row">
                    <h3>{{$lastJob->name}}</h3>
                    <div class="col-12 mb-5">
                        <div id="editor-details">
        
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="d-flex align-items-center">
                            <strong class="px-3 text-nowrap">Date de naissance :</strong>
                            {!! Form::date('birthday', $about->birthday, ['class' => 'form-control'])!!}
                        </div>
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
    {!! Form::close() !!}
    <script>
    
    var quill_description = new Quill('#editor-description', {
      modules: {
        toolbar: [
          [{ header: [1, 2, false] }],
          ['bold', 'italic', 'underline'],
        ]
      },
      scrollingContainer: '#editor-description' ,
      placeholder: "Raconte nous qui tu es!",
      theme: 'snow' 
    });
    
    //Set le quill avec le text
    quill_description.root.innerHTML = "{!! $about->description !!}"
    
    
    var quill_details = new Quill('#editor-details', {
      modules: {
        toolbar: [
          [{ header: [1, 2, false] }],
          ['bold', 'italic', 'underline'],
        ]
      },
      scrollingContainer: '#editor-details',
      placeholder: "Raconte ici à quoi consiste ton métier !",
      theme: 'snow' 
    });
    
    //Set le quill avec le text
    quill_details.root.innerHTML = "{!! $about->details !!}"
    
    </script>
</div>