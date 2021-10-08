<header class="vh-100 bg-grey px-3 px-xl-5 py-3 d-none d-lg-flex flex-column justify-content-between" style="z-index:100000">
    <div>
        <div class="profile text-center mb-2">
             {!! Form::open(['method' => 'post', 'route' => 'edit-about', 'files' => 'true', 'class' =>'edit-picture']) !!}
                {!! Form::file('image', ['class'=>'d-none', 'id' => 'change-nav-pic']) !!}    
                <img src="{{asset('storage/uploads/abouts/'.$about->nav_picture_path)}}" class="avatar img-fluid rounded-circle pointer change-pic" alt="Avatar">
                <span class="text-white icon-hover">
                    <i class="fas fa-camera-retro"></i>
                </span>
            {!! Form::close() !!}
            <h2 class="text-white my-2">{{$about->firstname}} {{$about->lastname}}</h2>
        </div>
        <nav class="d-flex flex-column">
            @foreach ($navigations as $navigation)
                <a data-no-swup href="{{route('admin')}}/{{$navigation->anchor}}" class="text-grey text-decoration-none py-3 med-size text-center text-xl-left @if($navigation->anchor == last(request()->segments())) onit @endif">
                    {!! $navigation->icon !!}
                    <span class="ml-2">{{$navigation->name}}</span>
                </a>
            @endforeach
        </nav>
    </div>
</header>