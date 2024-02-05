<!-- Navbar -->
<header>
    <nav class="navbar navbar-expand-lg transparent navbar-transparent navbar-dark">
        <div class="container px-3">
            <a class="navbar-brand" href="index-2.html"><img src="assets/images/logo/logo.svg" alt /></a>
            <button class="navbar-toggler offcanvas-nav-btn" type="button">
                <i class="bi bi-list"></i>
            </button>
            <div class="offcanvas offcanvas-start offcanvas-nav" style="width: 20rem">
                <div class="offcanvas-header">
                    <a href="index-2.html" class="text-inverse"><img src="assets/images/logo/logo.svg" alt /></a>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body pt-0 align-items-center">
                    <ul class="navbar-nav mx-auto align-items-lg-center">
                        {{-- Home :: START --}}
                        <a class="nav-link " href="{{route('welcome')}}" role="button"
                                 aria-expanded="false">Home</a>
                        {{-- Home :: END --}}

                        {{-- Services :: START --}}
                        <a class="nav-link" href="{{route('services')}}" role="button"
                                aria-expanded="false">Services</a>
                        {{-- Services :: END --}}

                        {{-- Portfolio :: START --}}
                        <a class="nav-link" href="{{route('portfolio')}}" role="button"
                                 aria-expanded="false">Portfolio</a>
                        {{-- Portfolio :: END --}}

                        {{-- Solutions :: START --}}
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">Solutions</a>
                            <div class="dropdown-menu dropdown-menu-md" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item mb-3 text-body" href="{{route('solutions')}}">
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-file-text fs-4 text-primary"></i>
                                        <div class="ms-3 lh-1">
                                            <h5 class="mb-1">AI Solutions</h5>
                                            <p class="mb-0 fs-6 text-capitalize">Utility assistants for your daily use </p>
                                        </div>
                                    </div>
                                </a>

                                <a class="dropdown-item text-body" href="{{url('/solutions#health')}}">
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-hospital fs-4 text-primary"></i>
                                        <div class="ms-3 lh-1">
                                            <h5 class="mb-1">
                                                Healthcare
                                                <span class="text-primary ms-1" id="changelog"></span>
                                            </h5>
                                            <p class="mb-0 fs-6">See what's new</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </li>
                        {{-- Solutions :: END --}}

                        {{-- About :: START --}}
                        <a class="nav-link" href="{{route('about')}}" role="button"
                                 aria-expanded="false">About</a>
                        {{-- About :: END --}}

                        {{-- Contact :: START --}}
                        <a class="nav-link" href="{{route('contact_us')}}"
                                role="button" aria-haspopup="true"
                                aria-expanded="false">Contact</a>
                        {{-- Contact :: END --}}
                    </ul>
                    {{-- Auth & Language Switcher :: START --}}
                    <div class="mt-3 mt-lg-0 d-flex align-items-center">
                        <div class="dropdown ms-3">
                            <a class="dropdown-toggle   text-primary-hover" href="#" role="button"
                                id="dropdownLanguage" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false"> <img class="fa-fw me-2" src="{{asset('assets/images/flags/fr.svg')}}" alt="">
                                Français </a>
                            <div class="dropdown-menu mt-2 shadow" aria-labelledby="dropdownLanguage">
                                <span class="dropdown-item-text">Select language</span>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><img class="fa-fw me-2"
                                        src="{{asset('assets/images/flags/uk.svg')}}" alt=""> English</a>
                            </div>
                        </div>
                        <a href="signin.html" class="btn btn-light mx-2">Login</a>
                        <a href="signup.html" class="btn btn-primary">Create account</a>
                    </div>
                    {{-- Auth & Language Switcher  :: END --}}
                </div>
            </div>
        </div>
    </nav>
</header>