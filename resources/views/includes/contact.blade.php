<div class="section-title mb-4">
    <h2>Contact</h2>
    <p>{!! nl2br(e($contact->description)) !!}</p>
</div>

<div class="row">
    <div class="col-md-5">
        <div class="bg-white p-4 shadow-sm h-100">
            <div class="d-flex align-items-start my-4">
                <span class="rounded-circle btn btn-primary mr-3 cursor">
                    <i class="fas fa-map-marker-alt"></i>
                </span>
                <div>
                    <h5>Emplacement</h5>
                    <p>{{$about->location}}</p>
                </div>
            </div>
            <div class="d-flex align-items-start my-4">
                <a href="mailto:{{$about->email}}" class="rounded-circle btn btn-primary mr-3">
                    <i class="far fa-paper-plane"></i>
                </a>
                <div>
                    <h5>Email</h5>
                    <a href="mailto:{{$about->email}}">{{$about->email}}</a>
                </div>
            </div>
            <div class="d-flex align-items-start my-4">
                <a href="tel:+0619630877" class="rounded-circle btn btn-primary mr-3">
                    <i class="fas fa-phone"></i>
                </a>
                <div>
                    <h5>Téléphone</h5>
                    <a href="tel:{{$about->phone}}">{{$about->phone}}</a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-md-7">
        {!! Form::open([ 'method'=> 'post', 'action' => 'ContactController@store', 'class' => 'bg-white shadow-sm p-4', 'id' => 'contact-form']) !!}
        @csrf
        @honeypot
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    {!! Form::label('name', 'Nom / Société')!!}<sup class="text-danger">*</sup>
                    {!! Form::text('name', null, ['class' => 'form-control', 'required']) !!}
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    {!! Form::label('mail', 'E-mail')!!}<sup class="text-danger">*</sup>
                    {!! Form::email('mail', null, ['class' => 'form-control', 'required']) !!}
                    @error('mail')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    {!! Form::label('subject', 'Sujet')!!}<sup class="text-danger">*</sup>
                    {!! Form::select('subject', ['emploi' => 'Proposition d\'emploi', 'mission' => 'Proposition de mission', 'question' => 'Question(s)',  'autre' => 'Autre'], null, ['class'=>'form-control', 'required']) !!}
                    @error('subject')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    {!! Form::label('message', 'Message')!!}<sup class="text-danger">*</sup>
                    {!! Form::textarea('message', null, ['class' => 'form-control', 'required']) !!}
                  </div>
                  @error('message')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
           
            <div class="col-12 text-right">
                {!! Form::submit('Envoyer', ['class' => 'btn btn-primary']) !!}
            </div>
        </div>
        {!! Form::close() !!}
        
    </div>
</div>
@if(Session::has('contact-success'))
<script>
    window.addEventListener('load', function () {
        const Toast = swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 4000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                      toast.addEventListener('mouseenter', swal.stopTimer)
                      toast.addEventListener('mouseleave', swal.resumeTimer)
                    }
                  })
    
            Toast.fire({
                icon: 'success',
                title: 'Super, j\'ai bien reçu votre mail ! 🤗'
            });
})
     
</script>
@endif
