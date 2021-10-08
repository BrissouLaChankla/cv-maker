<h2>Les informations sur le CV</h2>
    <div class="alert alert-dark shadow-sm" role="alert">
        {!! Form::open(['url' => '/edit/study']) !!}
            <div class="row">
                <div class="col-md-6 mt-2">
                    {{ Form::label('name', 'Nom de la formation') }}
                    {{ Form::text('name', $study->name, ['class' =>'form-control'])}}
                </div>
                <div class="col-md-6 mt-2">
                    {{ Form::label('school', 'École / Organisme') }}
                    {{ Form::text('school', $study->school, ['class' =>'form-control'])}}
                </div>
                <div class="col-md-6 mt-2">
                    {{ Form::label('description', 'Description de ta personne') }} 
                    <i class="fas fa-info-circle" data-placement="auto" data-toggle="tooltip" title="Première phrase sur ta personne qui apparaîtra sur le site, résume toi brièvement, qui tu es etc.."></i>
                    {{ Form::textarea('description', $study->description, ['class' =>'form-control'])}}
                </div>
                <div class="w-100 text-right p-3">
                    {{ Form::submit('Enregistrer', ['class' => 'btn btn-primary btn-lg'])}}
                </div>
            </div>
        {!! Form::close() !!}
      </div>