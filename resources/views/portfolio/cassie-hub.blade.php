@extends('layouts.site')
@section('title')
{{ __('website/portfolio_cassie-hub.page_title') }}
@endsection
@section('body')
    <div class="pattern-square"></div>
    <!--Pageheader start-->
    <section class="py-5 py-lg-8">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 offset-lg-2 col-md-12 col-12">
                    <h1 class="mb-3">{{ __('website/portfolio_cassie-hub.heading') }}</h1>
                    <p class="mb-0 lead" style="text-align: justify;">
                        {{ __('website/portfolio_cassie-hub.description') }}
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!--Pageheader end-->

    <!--Portfolio single start-->

    <section>
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                    <figure class="mb-lg-9 mb-md-7 mb-5 text-center">
                        <img src="{{ asset('assets/images/portfolio/cassie-hub.png') }}" alt="portfolio Cassie Hub"
                            class="img-fluid rounded-3" />
                    </figure>
                </div>
                <div class="col-xl-8 offset-xl-2 col-lg-12 col-md-12 col-12">
                    <div class="row g-5 mb-lg-9 mb-md-7 mb-5">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-6">
                            <div class="mb-4 mb-lg-0">
                                <span>{{ __('website/portfolio_cassie-hub.client') }}</span>
                                <div class="d-flex align-items-center mt-2">
                                    <img src="{{ asset('assets/images/portfolio/cassie-hub.png') }}" alt="Avatar Cassie Hub"
                                        class="avatar avatar-xs rounded-circle" />
                                    <div class="ms-2">
                                        <a href="#" class="text-reset">
                                            <span class="text-dark fs-6">Cassie Hub</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-6">
                            <div class="mb-4 mb-lg-0">
                                <span>{{ __('website/portfolio_cassie-hub.year') }}</span>
                                <div class="mt-2 text-dark fs-6">2023</div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-3 col-8">
                            <span>{{ __('website/portfolio_cassie-hub.services') }}</span>
                            <div class="mt-2 text-primary fs-6 text-capitalize">{{ __('website/portfolio_cassie-hub.services_list') }}</div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-3 col-4">
                            <span>{{ __('website/portfolio_cassie-hub.share') }}</span>
                            <div class="mt-2">
                                <a href="#!" class="mt-2 text-reset">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                        fill="currentColor" class="bi bi-share" viewBox="0 0 16 16">
                                        <path
                                            d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5zm-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-lg-9 mb-md-7 mb-5">
                        <div class="col-lg-4 col-md-4 col-12">
                            <h4 class="mb-3 mb-md-0 text-black-50">{{ __('website/portfolio_cassie-hub.challenge') }}</h4>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <h2 class="mb-3">{{ __('website/portfolio_cassie-hub.challenge_title') }}</h2>
                            <p class="mb-3" style="text-align: justify;">
                                {!! __('website/portfolio_cassie-hub.challenge_desc') !!}
                            </p>
                        </div>
                    </div>
                    <div class="row mb-lg-9 mb-md-7 mb-5 g-4">
                        <div class="col-lg-6 col-md-6 col-12">
                            <figure>
                                <img src="{{ asset('assets/images/portfolio/portfolio-imgs/cassie-hub-1.png') }}" alt="Cassie Hub Portfolio Image 1"
                                    class="img-fluid rounded-3" />
                            </figure>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <figure>
                                <img src="{{ asset('assets/images/portfolio/portfolio-imgs/cassie-hub-2.png') }}" alt="Cassie Hub Portfolio Image 2"
                                    class="img-fluid rounded-3" />
                            </figure>
                        </div>
                    </div>
                    <div class="row mb-lg-9 mb-md-7 mb-5">
                        <div class="col-lg-4 col-md-4 col-12">
                            <h4 class="mb-3 mb-md-0 text-black-50">{{ __('website/portfolio_cassie-hub.solutions') }}</h4>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <h3 class="mb-3">{{ __('website/portfolio_cassie-hub.solutions_title') }}</h3>
                            <p class="mb-3" >
                            <ol style="text-align: justify;">
                                <li>{{ __('website/portfolio_cassie-hub.solutions_point1') }}</li> <br>

                                <li>{{ __('website/portfolio_cassie-hub.solutions_point2') }}</li><br>

                                <li>{{ __('website/portfolio_cassie-hub.solutions_point3') }}
                                </li> <br>

                                <li>{{ __('website/portfolio_cassie-hub.solutions_point4') }}</li>
                            </ol>
                            </p>
                        </div>
                    </div>
                    <div class="row mb-lg-9 mb-md-7 mb-5">
                        <div class="col-lg-4 col-md-4 col-12">
                            <h4 class="mb-3 mb-md-0 text-black-50">{{ __('website/portfolio_cassie-hub.tech_stack') }}</h4>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <div class="row">
                                <h3 class="mb-3">{{ __('website/portfolio_cassie-hub.tech_stack_title') }}</h3>
                                <div class="col-lg-3 col-md-3 col-6">
                                    <figure class="py-3">
                                        <img src="{{ asset('assets/images/brand-logo/laravel.svg')  }}" alt="Laravel Logo"
                                            class="mw-100" />
                                    </figure>
                                </div>
                                <div class="col-lg-3 col-md-3 col-6">
                                    <figure class="py-3">
                                        <img src="{{ asset('assets/images/brand-logo/streamlit.svg') }}" alt="Bootstrap logo"
                                            class="mw-100" />
                                    </figure>
                                </div>
                                <div class="col-lg-3 col-md-3 col-6">
                                    <figure class="py-3">
                                        <img src="{{ asset('assets/images/brand-logo/postgresql.svg') }}" alt="PostgreSQL logo"
                                            class="mw-100" />
                                    </figure>
                                </div>
                                <div class="col-lg-3 col-md-3 col-6">
                                    <figure class="py-3">
                                        <img src="{{ asset('assets/images/brand-logo/seaborn.svg') }}" alt="Chartjs logo"
                                            class="mw-100" />
                                    </figure>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-6">
                                    <figure class="py-3">
                                        <img src="{{ asset('assets/images/brand-logo/spring.svg')  }}" alt="Spring Logo"
                                            class="mw-100" />
                                    </figure>
                                </div>
                                <div class="col-lg-3 col-md-3 col-6">
                                    <figure class="py-3">
                                        <img src="{{ asset('assets/images/brand-logo/amazon-s3.svg') }}" alt="Amazon-s3 logo"
                                            class="mw-100" />
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-lg-9 mb-md-7 mb-5">
                        <div class="col-lg-4 col-md-4 col-12">
                            <h4 class="fw-semibold mb-3 mb-md-0 text-black-50">{{ __('website/portfolio_cassie-hub.the_result') }}</h4>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <div class="mb-7">
                                <p class="mb-0">
                                    {{ __('website/portfolio_cassie-hub.the_result_title') }}
                                </p>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-4">
                                    <h4>80%</h4>
                                    <span>{{ __('website/portfolio_cassie-hub.the_result_point1') }}</span>
                                </div>
                                <div class="col-md-4 col-4">
                                    <h4>5 000</h4>
                                    <span>{{ __('website/portfolio_cassie-hub.the_result_point2') }}</span>
                                </div>
                                <div class="col-md-4 col-4">
                                    <h4>3 000</h4>
                                    <span>{{ __('website/portfolio_cassie-hub.the_result_point3') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-lg-9 mb-md-7 mb-5">
                        <div class="col-lg-4 col-md-4 col-12">
                            <h4 class="mb-3 mb-lg-0 text-black-50">{{ __('website/portfolio_cassie-hub.services_we_provided') }}</h4>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item px-0 py-2">{{ __('website/portfolio_cassie-hub.services_we_provided_point1') }}</li>
                                <li class="list-group-item px-0 py-2">{{ __('website/portfolio_cassie-hub.services_we_provided_point2') }}</li>
                                <li class="list-group-item px-0 py-2">{{ __('website/portfolio_cassie-hub.services_we_provided_point3') }}</li>
                                <li class="list-group-item px-0 py-2">{{ __('website/portfolio_cassie-hub.services_we_provided_point4') }}</li>
                                <li class="list-group-item px-0 py-2">{{ __('website/portfolio_cassie-hub.services_we_provided_point5') }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="offset-xl-1 col-xl-10 col-lg-12 col-md-12 col-12">
                    <div class="text-center mx-xl-7 my-5">
                        <div class="mb-5">
                            <img src="{{ asset('assets/images/avatar/cassie-hub.png') }}" alt="Avatar Cassie Hub"
                                class="avatar avatar-xxl rounded-circle" />
                        </div>
                        <p class="lead mb-4">
                            “{{ __('website/portfolio_cassie-hub.testimony') }}”
                        </p>
                        <div class="d-md-flex align-items-center justify-content-center">
                            <h4 class="mb-0">{{ __('website/portfolio_cassie-hub.testimony_person_name') }}</h4>
                            <small class="ms-2">{{ __('website/portfolio_cassie-hub.testimony_person_role') }}</small>
                        </div>
                        <a href="https://www.cassiehub.com/" target="_blank" class="btn btn-outline-dark mt-5">
                            {{ __('website/portfolio_cassie-hub.visit_website') }}
                            <span class="ms-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-arrow-up-right-circle-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M0 8a8 8 0 1 0 16 0A8 8 0 0 0 0 8zm5.904 2.803a.5.5 0 1 1-.707-.707L9.293 6H6.525a.5.5 0 1 1 0-1H10.5a.5.5 0 0 1 .5.5v3.975a.5.5 0 0 1-1 0V6.707l-4.096 4.096z" />
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Portfolio single end-->
    <!--Call to action start-->
    <section>
        <div class="container py-7">
            <div class="row bg-pattern bg-primary-gradient rounded-3 py-7 g-0">
                <div class="col-md-8 offset-md-2">
                    <div class="text-center position-relative z-1 py-5">
                        <h2 class="text-white-stable mb-5">{{ __('website/portfolio_cassie-hub.cta_heading') }}</h2>
                        <a href="{{ route('contact_us')}}" class="btn btn-dark">{{ __('website/portfolio_cassie-hub.cta_button') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Call to action end-->
@endsection
