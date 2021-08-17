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
                    <p>Régulièrement entre les Alpes-Martimes(06) et le Var(83)</p>
                </div>
            </div>
            <div class="d-flex align-items-start my-4">
                <a href="mailto:contact@brice-eliasse.com" class="rounded-circle btn btn-primary mr-3">
                    <i class="far fa-paper-plane"></i>
                </a>
                <div>
                    <h5>Email</h5>
                    <a href="mailto:contact@brice-eliasse.com">contact@brice-eliasse.com</a>
                </div>
            </div>
            <div class="d-flex align-items-start my-4">
                <a href="tel:+0619630877" class="rounded-circle btn btn-primary mr-3">
                    <i class="fas fa-phone"></i>
                </a>
                <div>
                    <h5>Téléphone</h5>
                    <a href="tel:+0619630877">0619630877</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-7">
        {!! Form::open(['url' => '', 'class' => 'bg-white shadow-sm p-4']) !!}
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    {!! Form::label('name', 'Nom')!!}<sup class="text-danger">*</sup>
                    {!! Form::text('name', null, ['class' => 'form-control', 'required']) !!}
                  </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    {!! Form::label('mail', 'E-mail')!!}<sup class="text-danger">*</sup>
                    {!! Form::email('mail', null, ['class' => 'form-control', 'required']) !!}
                  </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    {!! Form::label('subject', 'Sujet')!!}<sup class="text-danger">*</sup>
                    {!! Form::select('subject', ['emploi' => 'Proposition d\'emploi', 'mission' => 'Proposition de mission', 'question' => 'Question(s)',  'autre' => 'Autre'], null, ['class'=>'form-control', 'required']) !!}
                  </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    {!! Form::label('message', 'Message')!!}<sup class="text-danger">*</sup>
                    {!! Form::textarea('message', null, ['class' => 'form-control', 'required']) !!}
                  </div>
            </div>
            <div class="col-12 text-right">
                {!! Form::submit('Envoyer', ['class' => 'btn btn-primary']) !!}
            </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>