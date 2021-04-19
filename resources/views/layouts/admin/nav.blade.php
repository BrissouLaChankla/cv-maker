<header class="vh-100 bg-grey px-5 py-3 d-none d-xl-block">
    <div class="profile text-center mb-2">
        <img src="{{asset('img/profile.jpg')}}" class="avatar img-fluid rounded-circle" alt="Avatar">
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