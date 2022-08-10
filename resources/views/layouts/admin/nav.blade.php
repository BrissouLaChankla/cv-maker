<header class="vh-100 bg-grey px-3 px-xl-5 py-3 d-none d-lg-flex flex-column justify-content-between" style="z-index:100000">
    <div>
        <div class="profile text-center mb-2">
             {!! Form::open(['method' => 'post', 'route' => 'edit-avatar', 'class' => 'change-image-dynamic', 'files' => 'true']) !!}
                {!! Form::file('image', ['class'=>'d-none']) !!}    
                <div class="position-relative m-auto avatar rounded-circle pointer change-pic">
                    <img src="{{ url('storage/common/avatar.webp') }}"
                      class="fit-cover img-fluid rounded-circle">
                    <span class="text-white icon-hover">
                        <i class="fas fa-camera-retro"></i>
                    </span>
                </div>
            {!! Form::close() !!}
            <h2 class="text-white my-2">{{$about->firstname}} {{$about->lastname}}</h2>
        </div>
        <nav class="d-flex flex-column">
            @foreach ($navigations as $navigation)
                @if(!$loop->last)
                    <a data-no-swup href="{{route('admin')}}/{{$navigation->anchor}}" class="text-grey text-decoration-none py-3 med-size text-center text-xl-left @if($navigation->anchor == last(request()->segments())) onit @endif">
                        {!! $navigation->icon !!}
                        <span class="ml-2">{{$navigation->name}}</span>
                    </a>
                @endif
            @endforeach
        </nav>
    </div>
</header>


<header class="bg-grey px-2 px-sm-3 d-lg-none w-100" style="z-index:100000">
    {!! Form::open(['method' => 'post', 'route' => 'edit-avatar', 'files' => 'true']) !!}
                {!! Form::file('image', ['class'=>'d-none', 'id' => 'change-nav-pic']) !!}
                <div class="position-relative m-auto avatar rounded-circle pointer change-pic">
                    <img src="{{ url('storage/common/avatar.webp') }}"
                        class="img-fluid fit-cover rounded-circle">
                    <span class="text-white icon-hover">
                        <i class="fas fa-camera-retro"></i>
                    </span>
                </div>

            {!! Form::close() !!}
    <h2 class="text-white text-center mt-2 mb-0">{{$about->firstname}} {{$about->lastname}}</h2>
    <nav class=" d-flex align-items-center justify-content-between justify-content-sm-around ">
        @foreach ($navigations as $navigation)
            @if(!$loop->last)
                <a data-no-swup href="{{route('admin')}}/{{$navigation->anchor}}" class="text-grey text-decoration-none py-3 text-center text-xl-left @if($navigation->anchor == last(request()->segments())) onit @endif">
                    {!! $navigation->icon !!} <br>
                    <span class="navname">{{$navigation->name}}</span>
                </a>
            @endif
        @endforeach
    </nav>
</header>

