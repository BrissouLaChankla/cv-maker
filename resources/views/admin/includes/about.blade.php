<h2>Vos informations personnelles</h2>
    <div class="alert alert-dark shadow-sm" role="alert">
        {!! Form::open(['url' => '/edit/about']) !!}
            <div class="row">
                <div class="col-md-6 mt-2">
                    {{ Form::label('firstname', 'Prénom') }}
                    {{ Form::text('firstname', $about->firstname, ['class' =>'form-control'])}}
                </div>
                <div class="col-md-6 mt-2">
                    {{ Form::label('lastname', 'Nom') }}
                    {{ Form::text('lastname', $about->lastname, ['class' =>'form-control'])}}
                </div>
                <div class="col-md-6 mt-2">
                    {{ Form::label('description', 'Description de ta personne') }} 
                    <i class="fas fa-info-circle" data-placement="auto" data-toggle="tooltip" title="Première phrase sur ta personne qui apparaîtra sur le site, résume toi brièvement, qui tu es etc.."></i>
                    {{ Form::textarea('description', $about->description, ['class' =>'form-control'])}}
                </div>
                <div class="col-md-6 mt-2">
                    {{ Form::label('details', 'Détails de ton poste') }}
                    <i class="fas fa-info-circle" data-placement="auto" data-toggle="tooltip" title="Parle nous de ton poste, en quoi consiste ton métier ?"></i>
                    {{ Form::textarea('details', $about->details, ['class' =>'form-control'])}}
                </div>
                <div class="col-md-6 mt-2">
                    {{ Form::label('birthday', 'Date anniversaire') }}
                    {{ Form::date('birthday', $about->birthday, ['class' =>'form-control'])}}
                </div>
                <div class="col-md-6 mt-2">
                    {{ Form::label('diploma', 'Diplomes') }}
                    {{ Form::text('diploma', $about->diploma, ['class' =>'form-control'])}}
                </div>
                <div class="col-md-6 mt-2">
                    {{ Form::label('phone', 'N° de téléphone') }}
                    {{ Form::text('phone', $about->phone, ['class' =>'form-control'])}}
                </div>
                <div class="col-md-6 mt-2">
                    {{ Form::label('email', 'Email') }}
                    {{ Form::email ('email', $about->email, ['class' =>'form-control'])}}
                </div>
                <div class="col-md-6 mt-2">
                    {{ Form::label('location', 'Ville') }}
                    {{ Form::text('location', $about->location, ['class' =>'form-control'])}}
                </div>
                <div class="col-md-6 mt-2">
                    {{ Form::label('status', 'Status') }}
                    {{ Form::text('status', $about->status, ['class' =>'form-control'])}}
                </div>
                <div class="col-md-6 mt-2">
                    {{ Form::label('hobbies', 'Hobbies') }}
                    {{ Form::text('hobbies', $about->hobbies, ['class' =>'form-control','placeholder' => 'Sport / Jeux-vidéos / Programmation'])}}
                </div> 
                <div class="w-100 text-right p-3">
                    {{ Form::submit('Enregistrer', ['class' => 'btn btn-primary btn-lg'])}}
                </div>
            </div>
        {!! Form::close() !!}
      </div>