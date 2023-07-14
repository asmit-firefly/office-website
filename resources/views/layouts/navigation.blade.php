<div class="header">
    <nav class="navbar navbar-expand-sm custom-nav">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}"
            ><img src="./images/logo.png" alt=""
                /></a>
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapsibleNavbar"
            >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link hvr-underline-from-center" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link hvr-underline-from-center" href="{{ route('about') }}">About Company</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link hvr-underline-from-center" href="{{ route('service') }}">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link hvr-underline-from-center" href="{{ route('career') }}">Careers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link hvr-underline-from-center" href="{{ route('contact') }}">Contact Us</a>
                    </li>
                </ul>
{{--                <a href="" class="btn btn-light btn-sm btn-rounded"--}}
{{--                >Get Started <i class="icon ml-3" data-feather="arrow-right"></i></a>--}}
            </div>
        </div>
    </nav>
</div>
