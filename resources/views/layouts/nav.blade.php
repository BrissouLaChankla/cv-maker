<header class="vh-100 bg-grey px-5 py-3 d-none d-xl-block">
    <div class="profile text-center mb-2">
        <img src="{{asset('img/profile.jpg')}}" class="avatar img-fluid rounded-circle" alt="Avatar">
        <h2 class="text-white my-2">{{$about->firstname}} {{$about->lastname}}</h2>
        <div class="d-flex justify-content-center">
            @foreach ($socials as $social)
                <a href="{{$social->link}}" class="rounded-circle btn btn-primary m-1" target="_blank">
                    {!! $social->icon !!}
                </a>
            @endforeach
        </div>
    </div>
    <nav class="d-flex flex-column">
        @foreach ($navigations as $navigation)
            <a href="#{{$navigation->anchor}}" class="text-grey text-decoration-none py-3 med-size @if($loop->first) onit @endif">
                {!! $navigation->icon !!}
                <span class="ml-2">{{$navigation->name}}</span>
            </a>
        @endforeach
    </nav>
</header>