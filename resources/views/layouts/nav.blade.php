<header class="vh-100 bg-grey px-5 py-3 d-none d-xl-block">
    <div class="profile text-center mb-2">
        <img src="{{asset('img/profile.jpg')}}" class="avatar img-fluid rounded-circle" alt="Avatar">
        <h2 class="text-white my-2">{{$about->firstname}} {{$about->lastname}}</h2>
        <div class="d-flex justify-content-center">
            <a href="https://www.linkedin.com/in/brice-eliasse-585977115" class="rounded-circle btn btn-primary m-1" target="_blank">
                <i class="fab fa-linkedin-in"></i>
            </a>
            <a href="https://www.facebook.com/brice.eliasse.77/" class="rounded-circle btn btn-primary m-1" target="_blank">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="https://www.instagram.com/brice_eliasse/" class="rounded-circle btn btn-primary m-1" target="_blank">
                <i class="fab fa-instagram"></i>
            </a>
        </div>
    </div>
    <nav class="d-flex flex-column">
        <a href="#hero" class="text-grey text-decoration-none py-3 med-size onit">
            <i class="fas fa-home"></i>
            <span class="ml-2">Accueil</span>
        </a>
        <a href="#about" class="text-grey text-decoration-none py-3 med-size">
            <i class="fas fa-user-alt"></i>
            <span class="ml-2">A propos</span>
        </a>
        <a href="#resume" class="text-grey text-decoration-none py-3 med-size">
            <i class="fas fa-id-card"></i>
            <span class="ml-2">CV</span>
        </a>
        <a href="#portfolio" class="text-grey text-decoration-none py-3 med-size">
            <i class="fas fa-paint-brush"></i>
            <span class="ml-2">Réalisations</span>
        </a>
        <a href="#contact" class="text-grey text-decoration-none py-3 med-size">
            <i class="fas fa-envelope"></i>
            <span class="ml-2">Contact</span>
        </a>
    </nav>
</header>