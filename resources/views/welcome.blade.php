@extends('layouts.site')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/sweetalert2@11.min.css')}}">
@endsection

@section('title')
    {{ __('website/home.page_title') }}
@endsection
@section('body')
    <!--hero start-->
    <section class="jarallax py-9 hero-agency" data-jarallax data-speed="0.4">
        <video src="{{ asset('assets/images/hero/hero-vid.mp4') }}" class="jarallax-img" muted loop autoplay></video>
        <div class="position-absolute start-0 end-0">
            <div class="container">
                <div class="row">
                    {{-- data-cue="zoomIn" --}}
                    <div class="col-xl-5 col-lg-7 col-12">
                        <div class="text-center text-lg-start">
                            <div class="mb-4 text-white-stable">
                                <small class="text-uppercase ls-lg">{{ __('website/home.header_heading') }}</small>
                                <h1 class="mb-3 mt-3 display-3 text-white-stable">{{ __('website/home.header_subheading') }}
                                </h1>
                                <p class="lead mb-0">{{ __('website/home.header_description') }}</p>
                            </div>

                            <a href="#letstalk"
                                class="btn btn-primary">{{ __('website/home.header_start_your_project') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--hero end-->

    <!--Project we done start-->
    <section class="my-xl-9 my-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="text-center mb-xl-7 mb-5" data-cue="fadeIn">
                        <small
                            class="text-uppercase ls-md fw-semibold">{{ __('website/home.projects_we_done_heading') }}</small>

                        <h2 class="my-3">{{ __('website/home.projects_we_done_featured_work') }}</h2>
                        <p class="mb-0" style="text-align: justify !important;">
                            {{ __('website/home.projects_we_done_featured_work_description') }}</p>
                    </div>
                </div>
            </div>
            <div class="table-responsive-lg">
                <div class="row flex-nowrap pb-4 pb-lg-0 me-5 me-lg-0">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div>
                            <figure class="lift position-relative btn-arrow mb-4">
                                <a href="{{ route('coden_portfolio') }}">
                                    <img src="{{ asset('assets/images/portfolio/coden.png') }}" alt="CODEN Logo"
                                        class="img-fluid rounded-3" />

                                    <div class="icon-shape icon-lg bg-white rounded-circle icon-arrow shadow-lg">
                                        <i class="bi bi-arrow-up-right"></i>
                                    </div>
                                </a>
                            </figure>

                            <h2 class="lh-base h4">
                                <a href="{{ route('coden_portfolio') }}" class="text-reset">CODEN</a>
                            </h2>
                            <p class="mb-0 text-body-tertiary fw-medium">
                                {{ __('website/home.projects_we_done_business_processes_optimization') }}</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div>
                            <figure class="lift position-relative btn-arrow mb-4">
                                <a href="{{ route('cassie-hub_portfolio') }}">
                                    <img src="{{ asset('assets/images/portfolio/cassie-hub.png') }}" alt="Cassie Hub Logo"
                                        class="img-fluid rounded-3" />
                                    <div class="icon-shape icon-lg bg-white rounded-circle icon-arrow shadow-lg">
                                        <i class="bi bi-arrow-up-right"></i>
                                    </div>
                                </a>
                            </figure>

                            <h2 class="lh-base h4">
                                <a href="{{ route('cassie-hub_portfolio') }}" class="text-reset">Cassie Hub</a>
                            </h2>
                            <p class="mb-0 text-body-tertiary fw-medium">
                                {{ __('website/home.projects_we_done_eCommerce') }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12" data-cue="fadeIn">
                    <div class="text-center my-5">
                        <a href="{{ route('portfolio') }}"
                            class="btn btn-primary">{{ __('website/home.Read case studies') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Project we done end-->

    <!--Our solutions start-->
    <section class="py-xl-9 py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-md-7" data-cue="fadeIn">
                    <div class="mb-xl-7 mb-5">
                        <small class="text-uppercase ls-md fw-semibold">{{ __('website/home.services_heading') }}</small>
                        <h2 class="h1 mb-3 mt-4">{{ __('website/home.services_subheading') }}</h2>
                        <p class="mb-0 text-body">
                            {{ __('website/home.services_description') }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="row g-4" data-cue="fadeIn">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="card card-lift h-100" data-duration="500">
                        <div class="card-body p-5">
                            <div class="d-lg-flex">
                                <div
                                    class="p-3 icon-xl icon-shape rounded bg-primary bg-opacity-10 border border-primary-subtle">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120"
                                        fill="currentColor" class="bi bi-robot text-primary" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M6 12.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5M3 8.062C3 6.76 4.235 5.765 5.53 5.886a26.6 26.6 0 0 0 4.94 0C11.765 5.765 13 6.76 13 8.062v1.157a.93.93 0 0 1-.765.935c-.845.147-2.34.346-4.235.346s-3.39-.2-4.235-.346A.93.93 0 0 1 3 9.219zm4.542-.827a.25.25 0 0 0-.217.068l-.92.9a25 25 0 0 1-1.871-.183.25.25 0 0 0-.068.495c.55.076 1.232.149 2.02.193a.25.25 0 0 0 .189-.071l.754-.736.847 1.71a.25.25 0 0 0 .404.062l.932-.97a25 25 0 0 0 1.922-.188.25.25 0 0 0-.068-.495c-.538.074-1.207.145-1.98.189a.25.25 0 0 0-.166.076l-.754.785-.842-1.7a.25.25 0 0 0-.182-.135" />
                                        <path fill-rule="evenodd"
                                            d="M8.5 1.866a1 1 0 1 0-1 0V3h-2A4.5 4.5 0 0 0 1 7.5V8a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1v1a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-1a1 1 0 0 0 1-1V9a1 1 0 0 0-1-1v-.5A4.5 4.5 0 0 0 10.5 3h-2zM14 7.5V13a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V7.5A3.5 3.5 0 0 1 5.5 4h5A3.5 3.5 0 0 1 14 7.5" />
                                    </svg>
                                </div>
                                <div class="ms-lg-5 mt-4 mt-lg-0">
                                    <div class="mb-4">
                                        <h3>{{ __('website/home.services_ai_solutions') }}</h3>
                                        <p class="mb-0">{{ __('website/home.services_ai_solutions_desc') }}</p>
                                    </div>

                                    <a href="http://wa.me/+237694113593" class="icon-link icon-link-hover">
                                        {{ __('website/home.services_learn_more') }}
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                            fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="card card-lift h-100" data-duration="800">
                        <div class="card-body p-5">
                            <div class="d-lg-flex">
                                <div
                                    class="p-3 icon-xl icon-shape rounded bg-success bg-opacity-10 border border-success-subtle">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="currentColor" class="bi bi-braces-asterisk text-success"
                                        viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M1.114 8.063V7.9c1.005-.102 1.497-.615 1.497-1.6V4.503c0-1.094.39-1.538 1.354-1.538h.273V2h-.376C2.25 2 1.49 2.759 1.49 4.352v1.524c0 1.094-.376 1.456-1.49 1.456v1.299c1.114 0 1.49.362 1.49 1.456v1.524c0 1.593.759 2.352 2.372 2.352h.376v-.964h-.273c-.964 0-1.354-.444-1.354-1.538V9.663c0-.984-.492-1.497-1.497-1.6ZM14.886 7.9v.164c-1.005.103-1.497.616-1.497 1.6v1.798c0 1.094-.39 1.538-1.354 1.538h-.273v.964h.376c1.613 0 2.372-.759 2.372-2.352v-1.524c0-1.094.376-1.456 1.49-1.456v-1.3c-1.114 0-1.49-.362-1.49-1.456V4.352C14.51 2.759 13.75 2 12.138 2h-.376v.964h.273c.964 0 1.354.444 1.354 1.538V6.3c0 .984.492 1.497 1.497 1.6ZM7.5 11.5V9.207l-1.621 1.621-.707-.707L6.792 8.5H4.5v-1h2.293L5.172 5.879l.707-.707L7.5 6.792V4.5h1v2.293l1.621-1.621.707.707L9.208 7.5H11.5v1H9.207l1.621 1.621-.707.707L8.5 9.208V11.5h-1Z" />
                                    </svg>
                                </div>
                                <div class="ms-lg-5 mt-4 mt-lg-0">
                                    <div class="mb-4">
                                        <h3>{{ __('website/home.services_mobile_web_dev') }}</h3>
                                        <p class="mb-0">
                                            {{ __('website/home.services_mobile_web_dev_desc') }}
                                        </p>
                                    </div>

                                    <a href="{{ route('portfolio') }}" class="icon-link icon-link-hover">
                                        {{ __('website/home.services_learn_more') }}
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                            fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="card card-lift h-100" data-duration="800">
                        <div class="card-body p-5">
                            <div class="d-lg-flex">
                                <div
                                    class="p-3 icon-xl icon-shape rounded bg-warning bg-opacity-10 border border-warning-subtle">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="currentColor" class="bi bi-mortarboard text-warning" viewBox="0 0 16 16">
                                        <path
                                            d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917zM8 8.46 1.758 5.965 8 3.052l6.242 2.913z" />
                                        <path
                                            d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466zm-.068 1.873.22-.748 3.496 1.311a.5.5 0 0 0 .352 0l3.496-1.311.22.748L8 12.46z" />
                                    </svg>
                                </div>
                                <div class="ms-lg-5 mt-4 mt-lg-0">
                                    <div class="mb-4">
                                        <h3> {{ __('website/home.services_trainings') }}</h3>
                                        <p class="mb-0">{{ __('website/home.services_trainings_desc') }}</p>
                                    </div>

                                    <a href="http://wa.me/+237694113593" class="icon-link icon-link-hover">
                                        {{ __('website/home.services_learn_more') }}
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                            fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="card card-lift h-100" data-duration="1000">
                        <div class="card-body p-5">
                            <div class="d-lg-flex">
                                <div
                                    class="p-3 icon-xl icon-shape rounded bg-info bg-opacity-10 border border-info-subtle">

                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="currentColor" class="bi bi-graph-up-arrow text-info" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M0 0h1v15h15v1H0zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5" />
                                    </svg>
                                </div>
                                <div class="ms-lg-5 mt-4 mt-lg-0">
                                    <div class="mb-4">
                                        <h3>{{ __('website/home.services_business_dev_consult') }}</h3>
                                        <p class="mb-0">
                                            {{ __('website/home.services_business_dev_consult_desc') }}
                                        </p>
                                    </div>

                                    <a href="http://wa.me/+237694113593" class="icon-link icon-link-hover">
                                        {{ __('website/home.services_learn_more') }}
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                            fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="card card-lift h-100" data-duration="1000">
                        <div class="card-body p-5">
                            <div class="d-lg-flex">
                                <div
                                    class="p-3 icon-xl icon-shape rounded bg-primary bg-opacity-10 border border-primary-subtle">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="currentColor" class="bi bi-bar-chart-line text-primary"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1zm1 12h2V2h-2zm-3 0V7H7v7zm-5 0v-3H2v3z" />
                                    </svg>
                                </div>
                                <div class="ms-lg-5 mt-4 mt-lg-0">
                                    <div class="mb-4">
                                        <h3>{{ __('website/home.services_datascience_dataanalytics') }}</h3>
                                        <p class="mb-0">
                                            {{ __('website/home.services_datascience_dataanalytics_desc') }}
                                        </p>
                                    </div>

                                    <a href="http://wa.me/+237694113593" class="icon-link icon-link-hover">
                                        {{ __('website/home.services_learn_more') }}
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                            fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Our solutions end-->

    <!--Modern tech start-->
    <section class="py-xl-9 py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-md-12 col-12">
                    <div class="text-center mb-xl-7 mb-5" data-cue="fadeIn">
                        <small class="text-uppercase ls-md fw-semibold">{{ __('website/home.partners_heading') }}</small>
                        <h2 class="my-3">{{ __('website/home.partners_subheading') }}</h2>
                        <p class="mb-0 text-body">
                            {{ __('website/home.partners_paragraph') }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-md-12 col-12">
                    <div class="row row-cols-lg-5 row-cols-md-4 row-cols-2 justify-content-center g-5">
                        <div class="col" data-cue="slideInDown">
                            <figure class="text-center mb-0">
                                <img src="{{ asset('assets/images/brand-logo/dinovix.svg') }}" alt="Dinovix Logo " />
                            </figure>
                        </div>
                        <div class="col" data-cue="slideInDown">
                            <figure class="text-center mb-0">
                                <img src="{{ asset('assets/images/brand-logo/coden.svg') }}" alt="CODEN Logo " />
                            </figure>
                        </div>
                        <div class="col" data-cue="slideInDown">
                            <figure class="text-center mb-0">
                                <img src="{{ asset('assets/images/brand-logo/cassie-hub.svg') }}"
                                    alt="Cassie Hub Logo " />
                            </figure>
                        </div>
                        <div class="col" data-cue="slideInDown">
                            <figure class="text-center mb-0">
                                <img src="{{ asset('assets/images/brand-logo/copressa.svg') }}" alt="COPRESSA Logo " />
                            </figure>
                        </div>
                        <div class="col" data-cue="slideInDown">
                            <figure class="text-center mb-0">
                                <img src="{{ asset('assets/images/brand-logo/saurellenyoma.svg') }}"
                                    alt="Saurelle Nyoma Logo " />
                            </figure>
                        </div>
                        <div class="col" data-cue="slideInDown">
                            <figure class="text-center mb-0">
                                <img src="{{ asset('assets/images/brand-logo/djasportsacademy.svg') }}"
                                    alt="Dja Sports Academy Logo " />
                            </figure>
                        </div>

                        <div class="col" data-cue="slideInDown">
                            <figure class="text-center mb-0">
                                <img src="{{ asset('assets/images/brand-logo/target.svg') }}" alt="Target Logo " />
                            </figure>
                        </div>
                        <div class="col" data-cue="slideInDown">
                            <figure class="text-center mb-0">
                                <img src="{{ asset('assets/images/brand-logo/snicom.svg') }}" alt="Snicom Logo " />
                            </figure>
                        </div>
                        <div class="col" data-cue="slideInDown">
                            <figure class="text-center mb-0">
                                <img src="{{ asset('assets/images/brand-logo/sophistique-by-us.svg') }}"
                                    alt="Sophistiqué By Us Logo " />
                            </figure>
                        </div>
                        <div class="col" data-cue="slideInDown">
                            <figure class="text-center mb-0">
                                <img src="{{ asset('assets/images/brand-logo/guimma.svg') }}" alt="Guimma Logo " />
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Modern tech end-->

    <!--Who we are start-->
    <section class="my-xl-9 my-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-xl-5 col-lg-6 col-12" data-cue="slideInLeft">
                    <div class="mb-4">
                        <small
                            class="text-uppercase ls-md fw-semibold">{{ __('website/home.who_we_are_heading') }}</small>
                        <h2 class="h1 mt-4 mb-3">{{ __('website/home.who_we_are_subheading') }}</h2>
                        <p class="mb-0">
                            {!! __('website/home.who_we_are_paragraph') !!}
                        </p>
                    </div>

                    <a href="{{ route('about_us') }}" class="icon-link icon-link-hover">
                        {{ __('website/home.more_about_us') }}
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor"
                            class="bi bi-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                        </svg>
                    </a>
                </div>
                <div class="col-xl-6 offset-xl-1 col-lg-6 col-12">
                    <div class="row g-4" data-delay="1000">
                        <div class="col-lg-6 col-md-6 col-12">
                            <a href="#!">
                                <div class="rounded-3 card-lift"
                                    style="background-image: url(assets/images/about-img/omirai.png); background-repeat: no-repeat; height: 386px; background-size: cover">
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <a href="#!">
                                <div class="mb-4 rounded-3 card-lift"
                                    style="background-image: url(assets/images/about-img/ohsa.png); background-repeat: no-repeat; height: 180px; background-size: cover">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Who we are end-->

    <!--Expert team start-->
    <section>
        <div class="container" data-cue="fadeIn">
            <div class="row border-top border-bottom">
                <div class="col-md-4 border-end-md border-bottom border-bottom-md-0">
                    <div class="text-center py-lg-5 p-4">
                        <div class="mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                class="bi bi-people-fill text-primary" viewBox="0 0 16 16">
                                <path
                                    d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
                            </svg>
                        </div>

                        <h4>{{ __('website/home.expert_team') }}</h4>
                        <p class="mb-0">{{ __('website/home.expert_team_desc') }}</p>
                    </div>
                </div>
                <div class="col-md-4 border-end-md border-bottom border-bottom-md-0">
                    <div class="text-center py-lg-5 p-4">
                        <div class="mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                class="bi bi-trophy-fill text-primary" viewBox="0 0 16 16">
                                <path
                                    d="M2.5.5A.5.5 0 0 1 3 0h10a.5.5 0 0 1 .5.5c0 .538-.012 1.05-.034 1.536a3 3 0 1 1-1.133 5.89c-.79 1.865-1.878 2.777-2.833 3.011v2.173l1.425.356c.194.048.377.135.537.255L13.3 15.1a.5.5 0 0 1-.3.9H3a.5.5 0 0 1-.3-.9l1.838-1.379c.16-.12.343-.207.537-.255L6.5 13.11v-2.173c-.955-.234-2.043-1.146-2.833-3.012a3 3 0 1 1-1.132-5.89A33.076 33.076 0 0 1 2.5.5zm.099 2.54a2 2 0 0 0 .72 3.935c-.333-1.05-.588-2.346-.72-3.935zm10.083 3.935a2 2 0 0 0 .72-3.935c-.133 1.59-.388 2.885-.72 3.935z" />
                            </svg>
                        </div>

                        <h4>{{ __('website/home.winning_strategies') }}</h4>
                        <p class="mb-0">{{ __('website/home.winning_strategies_desc') }}</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center py-lg-5 p-4">
                        <div class="mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                class="bi bi-headset text-primary" viewBox="0 0 16 16">
                                <path
                                    d="M8 1a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6a6 6 0 1 1 12 0v6a2.5 2.5 0 0 1-2.5 2.5H9.366a1 1 0 0 1-.866.5h-1a1 1 0 1 1 0-2h1a1 1 0 0 1 .866.5H11.5A1.5 1.5 0 0 0 13 12h-1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h1V6a5 5 0 0 0-5-5" />
                            </svg>
                        </div>

                        <h4>{{ __('website/home.customer_service') }}</h4>
                        <p class="mb-0">{{ __('website/home.customer_service_desc') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Expert team end-->



    <!--Let's Talk start-->
    <section class="pattern-square bg-info bg-opacity-10" id="letstalk">
        <div class="container position-relative z-1 py-xl-9 py-6">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-md-12">
                    <div class="row align-items-center g-5">
                        <div class="col-lg-6 col-12 order-2" data-cue="slideInLeft">
                            <div class="me-xl-7">
                                <div class="mb-5">
                                    <h2 class="h1 mb-4 text-capitalize">
                                        {{ __('website/home.start_your_project_heading') }}</h2>
                                    <p class="mb-0" style="text-align: justify !important;">
                                        {{ __('website/home.start_your_project_paragraph') }}
                                    </p>
                                </div>
                                <div class="mb-5">
                                    <ul class="list-unstyled">
                                        <li class="mb-2 d-flex">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                                <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                            </svg>
                                            <span class="ms-1">{{ __('website/home.start_your_project_point1') }}</span>
                                        </li>
                                        <li class="mb-2 d-flex">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                                <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                            </svg>
                                            <span class="ms-1">{{ __('website/home.start_your_project_point2') }}</span>
                                        </li>
                                        <li class="mb-2 d-flex">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                                <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                            </svg>
                                            <span class="ms-1">{{ __('website/home.start_your_project_point3') }}</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="d-md-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center mb-3 mb-md-0 small">
                                        <div class="d-flex align-items-center">
                                            <a class="btn btn-success" href="http://wa.me/+237694113593" role="button">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                                    <path
                                                        d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232">
                                                    </path>
                                                </svg>
                                                {{ __('website/home.start_your_project_reach_out_whatsapp') }}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12 order-lg-2" data-cue="slideInRight">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <form id="estimateCallsForm" class="row needs-validation g-3" novalidate>
                                        @csrf
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <h3 class="mb-0">
                                                    {{ __('website/home.start_your_project_form_heading') }}</h3>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <label for="scheduleFirstnameInput" class="form-label">
                                                {{ __('forms.first_name') }}
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input type="text" class="form-control" id="scheduleFirstnameInput" name="scheduleFirstnameInput"
                                                required />
                                            @php $first_name = __('forms.first_name');@endphp
                                            <div class="invalid-feedback" id="scheduleFirstnameInputInvalidFeedback">
                                                {{ __('validation.required', ['attribute' => $first_name]) }}</div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <label for="scheduleLastnameInput" class="form-label">
                                                {{ __('forms.last_name') }}
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input type="text" class="form-control" id="scheduleLastnameInput" name="scheduleLastnameInput"
                                                required />
                                            @php $last_name = __('forms.last_name');@endphp
                                            <div class="invalid-feedback" id="scheduleLastnameInputInvalidFeedback">
                                                {{ __('validation.required', ['attribute' => $last_name]) }}</div>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="scheduleEmailInput" class="form-label">
                                                {{ __('forms.email') }}
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input type="email" class="form-control" id="scheduleEmailInput" name="scheduleEmailInput"
                                                required />
                                            @php $email = __('forms.email');@endphp
                                            <div class="invalid-feedback" id="scheduleEmailInputInvalidFeedback">
                                                {{ __('validation.required', ['attribute' => $email]) }}</div>
                                            <span class="invalid-feedback" id="scheduleEmailInputMessage">{{ __('validation.custom.invalid_email') }}</span>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="scheduleMessage" class="form-label">{{ __('forms.message') }}
                                                <span class="text-danger">*</span>
                                            </label>
                                            <textarea class="form-control" id="scheduleMessage" name="scheduleMessage"
                                                placeholder="{{ __('website/home.start_your_project_form_message_placeholder') }}" rows="5" required
                                                style="resize: none;"></textarea>
                                            @php $message = __('forms.message');@endphp
                                            <div class="invalid-feedback" id="scheduleMessageInvalidFeedback">
                                                {{ __('validation.required', ['attribute' => $message]) }}</div>
                                        </div>
                                        <div class="d-grid">
                                            <button class="btn btn-primary" type="submit" id="estimateCallsSubmitBtn">
                                                {{ __('website/home.start_your_project_form_submit_button') }}</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Let's Talk end-->
@endsection
