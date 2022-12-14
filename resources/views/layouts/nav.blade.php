<header class="vh-100 bg-grey px-3 px-xl-5 py-3 d-none d-lg-flex flex-column justify-content-between" style="z-index:100000">
    <div>
        <div class="profile text-center mb-2">
            <a href="/">
                <img src="{{ url('storage/common/avatar.webp') }}" class="avatar img-fluid fit-cover rounded-circle" alt="Avatar">
                {{-- <img src="{{asset('storage/uploads/abouts/'.$about->nav_picture_path)}}" class="avatar img-fluid rounded-circle" alt="Avatar"> --}}
            </a>
            <h2 class="text-white my-2">{{$about->firstname}} {{$about->lastname}}</h2>
            <div class="d-flex justify-content-center">
                @if($about->email)
                    <a href="mailto:{{$about->email}}" class="rounded-circle btn btn-primary m-1" target="_blank">
                        <i class="fas fa-envelope"></i>
                    </a>
                @endif
                @if($about->linkedin)
                    <a href="{{$about->linkedin}}" class="rounded-circle btn btn-primary m-1" target="_blank">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                @endif
                @if($about->github)
                    <a href="{{$about->github}}" class="rounded-circle btn btn-primary m-1" target="_blank">
                        <i class="fab fa-github"></i>
                    </a>
                @endif
                @if($about->website)
                <a href="{{$about->website}}" class="rounded-circle btn btn-primary m-1" target="_blank">
                    <i class="fas fa-mouse-pointer"></i>
                </a>
            @endif

               
            </div>
        </div>
        <nav class="d-flex flex-column">
            @foreach ($navigations as $navigation)
                <a data-no-swup href="/#{{$navigation->anchor}}" class="text-grey text-decoration-none py-3 med-size text-center text-xl-left @if($loop->first) onit @endif">
                    {!! $navigation->icon !!}
                    <span class="ml-2">{{$navigation->name}}</span>
                </a>
            @endforeach
        </nav>
    </div>
    <a target="_blank" data-no-swup href="{{asset('CV.pdf')}}" class="btn btn-light cv-side rounded-big w-100">T??l??charger mon CV</a>
</header>