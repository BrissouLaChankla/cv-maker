<header class="vh-100 bg-grey px-5 py-3 d-none d-xl-block">
    <div class="profile text-center mb-2">
        {!! Form::open(['method' => 'post', 'route' => 'edit-about', 'files' => 'true', 'class' =>'edit-picture']) !!}
            {!! Form::file('image', ['class'=>'d-none', 'id' => 'change-nav-pic']) !!}    
            <img src="{{asset('storage/uploads/abouts/'.$about->nav_picture_path)}}" class="avatar img-fluid rounded-circle pointer change-pic" alt="Avatar">
            <span class="text-white icon-hover">
                <i class="fas fa-camera-retro"></i>
            </span>
        {!! Form::close() !!}
   
        {!! Form::open(['method' => 'post', 'route' => 'edit-about', 'class' => 'mt-3']) !!}
            <div class="row">
                <div class="col-6 px-1">
                    {!! Form::text('firtsname', $about->firstname, ['class' => 'form-control']) !!}
                </div>
                <div class="col-6 px-1">
                    {!! Form::text('lastname', $about->lastname, ['class' => 'form-control']) !!}
                </div>
            </div>
        {!! Form::close() !!}
    </div>
    <nav class="d-flex flex-column">
        @foreach ($navigations as $navigation)
            <a href="{{route('show-section', $navigation->anchor)}}" class="text-grey text-decoration-none py-3 med-size">
                {!! $navigation->icon !!}
                <span class="ml-2">{{$navigation->name}}</span>
            </a>
        @endforeach
    </nav>
</header>
