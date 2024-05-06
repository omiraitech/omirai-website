@extends('layouts.site')

@section('css')
@endsection

@section('title')
    Services
@endsection
@section('body')
    <div class="pattern-square"></div>
    <!--Pageheader start-->
    <section class="py-5 py-lg-8">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                    <div class="text-center">
                        <small class="text-uppercase ls-md fw-bold text-primary">Services</small>
                        <h1 class="mt-4">We provide client-centric services</h1>
                        <p class="lead">Maximize your business capabilities and reach its full potential with our
                            services.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Pageheader end-->

    <!--Service start-->
    <section class="mb-xl-9 my-4">
        <div class="container">
            <div class="row g-7">
                {{-- AI Solutions and Integration --}}
                <div class="col-sm-6 col-md-6">
                    <div class>
                        <div class="position-relative mb-7">
                            <img src="{{ asset('assets/images/service/service-img-1.png') }}" alt="Service 1 Image"
                                class="rounded-3 img-fluid" />
                            <div class="position-absolute top-md-100 start-md-0 top-100 start-50 translate-middle">
                                <div
                                    class="p-3 icon-xl icon-shape rounded bg-primary border border-2 border-white ms-md-10">
                                    

                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-robot text-white-stable" viewBox="0 0 16 16">
                                        <path d="M6 12.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5M3 8.062C3 6.76 4.235 5.765 5.53 5.886a26.6 26.6 0 0 0 4.94 0C11.765 5.765 13 6.76 13 8.062v1.157a.93.93 0 0 1-.765.935c-.845.147-2.34.346-4.235.346s-3.39-.2-4.235-.346A.93.93 0 0 1 3 9.219zm4.542-.827a.25.25 0 0 0-.217.068l-.92.9a25 25 0 0 1-1.871-.183.25.25 0 0 0-.068.495c.55.076 1.232.149 2.02.193a.25.25 0 0 0 .189-.071l.754-.736.847 1.71a.25.25 0 0 0 .404.062l.932-.97a25 25 0 0 0 1.922-.188.25.25 0 0 0-.068-.495c-.538.074-1.207.145-1.98.189a.25.25 0 0 0-.166.076l-.754.785-.842-1.7a.25.25 0 0 0-.182-.135"/>
                                        <path d="M8.5 1.866a1 1 0 1 0-1 0V3h-2A4.5 4.5 0 0 0 1 7.5V8a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1v1a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-1a1 1 0 0 0 1-1V9a1 1 0 0 0-1-1v-.5A4.5 4.5 0 0 0 10.5 3h-2zM14 7.5V13a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V7.5A3.5 3.5 0 0 1 5.5 4h5A3.5 3.5 0 0 1 14 7.5"/>
                                      </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="px-lg-4">
                        <h2 class="mb-3 h3">AI Solutions and Integration</h2>
                        <p class="mb-5">
                            We understand that every business is unique. That's why we work closely with our clients to develop tailor-made AI solutions that address their specific challenges, objectives and integrates to their existing pipelines.
                        </p>
                        <div class="d-flex flex-wrap gap-2 mb-4">
                            <span class="badge bg-primary-subtle text-primary-emphasis rounded-pill p-2 px-3">Utilities</span>
                            <span class="badge bg-primary-subtle text-primary-emphasis rounded-pill p-2 px-3">Large Language Model Apps</span>
                            <span class="badge bg-primary-subtle text-primary-emphasis rounded-pill p-2 px-3">AI/ML Solutions</span>
                        </div>

                        <a href="'{{route('solutions')}}" class="icon-link icon-link-hover">
                            View Solutions
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor"
                                class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z">
                                </path>
                            </svg>
                        </a>
                    </div>
                </div>
                {{-- Web Development --}}
                <div class="col-sm-6 col-md-6">
                    <div class>
                        <div class="position-relative mb-7">
                            <img src="{{ asset('assets/images/service/service-img-2.png') }}" alt="Service Image 2"
                                class="rounded-3 img-fluid" />
                            <div class="position-absolute top-md-100 start-md-0 top-100 start-50 translate-middle">
                                <div
                                    class="p-3 icon-xl icon-shape rounded bg-success border border-2 border-white ms-md-10">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="currentColor" class="bi bi-braces-asterisk text-white-stable"
                                        viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M1.114 8.063V7.9c1.005-.102 1.497-.615 1.497-1.6V4.503c0-1.094.39-1.538 1.354-1.538h.273V2h-.376C2.25 2 1.49 2.759 1.49 4.352v1.524c0 1.094-.376 1.456-1.49 1.456v1.299c1.114 0 1.49.362 1.49 1.456v1.524c0 1.593.759 2.352 2.372 2.352h.376v-.964h-.273c-.964 0-1.354-.444-1.354-1.538V9.663c0-.984-.492-1.497-1.497-1.6ZM14.886 7.9v.164c-1.005.103-1.497.616-1.497 1.6v1.798c0 1.094-.39 1.538-1.354 1.538h-.273v.964h.376c1.613 0 2.372-.759 2.372-2.352v-1.524c0-1.094.376-1.456 1.49-1.456v-1.3c-1.114 0-1.49-.362-1.49-1.456V4.352C14.51 2.759 13.75 2 12.138 2h-.376v.964h.273c.964 0 1.354.444 1.354 1.538V6.3c0 .984.492 1.497 1.497 1.6ZM7.5 11.5V9.207l-1.621 1.621-.707-.707L6.792 8.5H4.5v-1h2.293L5.172 5.879l.707-.707L7.5 6.792V4.5h1v2.293l1.621-1.621.707.707L9.208 7.5H11.5v1H9.207l1.621 1.621-.707.707L8.5 9.208V11.5h-1Z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="px-lg-4">
                        <h2 class="mb-3 h3">Web Development</h2>

                        <p class="mb-5">
                            We build reliable, scalable solutions that deliver your vision and exceed your expectations. From websites to web apps we deliver solutions that transform businesses, industries and help in business growth.
                        </p>

                        <div class="mb-5">
                            <ul class="list-unstyled mb-5">
                                <li class="d-flex mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-check-circle-fill text-success mt-1"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                    </svg>
                                    <span class="ms-2">Website Development</span>
                                </li>
                                <li class="d-flex mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-check-circle-fill text-success mt-1"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                    </svg>
                                    <span class="ms-2">Front/Back-end Development</span>
                                </li>
                                <li class="d-flex mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-check-circle-fill text-success mt-1"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                    </svg>
                                    <span class="ms-2">Full-stack App Development</span>
                                </li>
                                <li class="d-flex mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-check-circle-fill text-success mt-1"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                    </svg>
                                    <span class="ms-2">Quality Assurance</span>
                                </li>
                            </ul>
                        </div>

                        <a href="{{route('portfolio')}}" class="icon-link icon-link-hover">
                            View Portfolio
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor"
                                class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z">
                                </path>
                            </svg>
                        </a>
                    </div>
                </div>
                {{-- eCommerce Development --}}
                <div class="col-sm-6 col-md-6">
                    <div class>
                        <div class="position-relative mb-7">
                            <img src="{{ asset('assets/images/service/service-img-3.png') }}" alt="Service Image 3"
                                class="rounded-3 img-fluid" />
                            <div class="position-absolute top-md-100 start-md-0 top-100 start-50 translate-middle">
                                <div class="p-3 icon-xl icon-shape rounded bg-info border border-2 border-white ms-md-10">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="currentColor" class="bi bi-cart-fill text-white-stable"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="px-lg-4">
                        <h2 class="mb-3 h3">eCommerce Development</h2>
                        <p class="mb-5">
                            We strive to be at the forefront of modern e-commerce development. Our AI solutions combined to our headless commerce gives an astonishing result.
                        </p>

                        <a href="#!" class="icon-link icon-link-hover mb-5">
                            View Case Study
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor"
                                class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z">
                                </path>
                            </svg>
                        </a>

                        <div class="row  rounded mx-1">
                            <div class="col-md-4 col-4">
                                <figure class="text-center py-2">
                                    <img src="{{ asset('assets/images/brand-logo/cassie-hub.svg') }}" alt="logo Cassie-Hub"
                                        class="mw-100" />
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Trainings --}}
                <div class="col-sm-6 col-md-6">
                    <div class="position-relative mb-7">
                        <img src="{{ asset('assets/images/service/service-img-4.png') }}" alt="Service Image 4"
                            class="rounded-3 img-fluid" />
                        <div class="position-absolute top-md-100 start-md-0 top-100 start-50 translate-middle">
                            <div class="p-3 icon-xl icon-shape rounded bg-warning border border-2 border-white ms-md-10">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-mortarboard text-white-stable" viewBox="0 0 16 16">
                                    <path d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917zM8 8.46 1.758 5.965 8 3.052l6.242 2.913z"/>
                                    <path d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466zm-.068 1.873.22-.748 3.496 1.311a.5.5 0 0 0 .352 0l3.496-1.311.22.748L8 12.46z"/>
                                  </svg>
                            </div>
                        </div>
                    </div>

                    <div class="mb-5">
                        <h2 class="mb-3 h3">Trainings</h2>
                        <p class="mb-5">
                            Are you ready to elevate your skills, empower your team, and drive success in your organization? Look no further! Our tailored training solutions are designed to transform individuals and businesses, providing a roadmap to success in today's dynamic landscape.
                        </p>

                        <a href="#!" class="icon-link icon-link-hover">
                            View Trainings
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor"
                                class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z">
                                </path>
                            </svg>
                        </a>
                    </div>
                </div>
                {{-- Business Development and Consultancy --}}
                <div class="col-sm-6 col-md-6">
                    <div class="position-relative mb-7">
                        <img src="{{ asset('assets/images/service/service-img-5.png') }}" alt="Service Image 5"
                            class="rounded-3 img-fluid" />
                        <div class="position-absolute top-md-100 start-md-0 top-100 start-50 translate-middle">
                            <div class="p-3 icon-xl icon-shape rounded bg-warning border border-2 border-white ms-md-10">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-graph-up-arrow text-white-stable" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M0 0h1v15h15v1H0zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5"/>
                                  </svg>
                            </div>
                        </div>
                    </div>

                    <div class="mb-5">
                        <h2 class="mb-3 h3">Business Development and Consultancy</h2>
                        <p class="mb-5">
                            We help in empowering businesses to achieve sustainable growth and success. With a team of seasoned professionals, we offer a comprehensive suite of strategic services designed to elevate your business to new heights.
                        </p>

                        <a href="#!" class="icon-link icon-link-hover">
                            Learn More
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor"
                                class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z">
                                </path>
                            </svg>
                        </a>
                    </div>
                </div>
                {{-- Data Science and Data Analysis --}}
                <div class="col-sm-6 col-md-6">
                    <div class="position-relative mb-7">
                        <img src="{{ asset('assets/images/service/service-img-6.png') }}" alt="Service Image 6"
                            class="rounded-3 img-fluid" />
                        <div class="position-absolute top-md-100 start-md-0 top-100 start-50 translate-middle">
                            <div class="p-3 icon-xl icon-shape rounded bg-primary border border-2 border-white ms-md-10">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-bar-chart-line text-white-stable" viewBox="0 0 16 16">
                                    <path d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1zm1 12h2V2h-2zm-3 0V7H7v7zm-5 0v-3H2v3z"/>
                                  </svg>
                            </div>
                        </div>
                    </div>

                    <div class="mb-5">
                        <h2 class="mb-3 h3">Data Science and Data Analysis</h2>
                        <p class="mb-5">
                           We are committed to unlocking the full potential of data to drive informed decision-making and foster innovation. With a team of skilled data scientists and analysts, we offer comprehensive data solutions that transform raw information into actionable insights for businesses across diverse industries.
                        </p>

                        <a href="#!" class="icon-link icon-link-hover">
                            Learn More
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor"
                                class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z">
                                </path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Service end-->

    <!--Project idea start-->
    <section class="py-lg-8 py-5 bg-gray-900">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-md-12">
                    <div class="row align-items-center">
                        <div class="col-lg-8 col-md-7">
                            <div class="text-center text-md-start mb-6 mb-md-0">
                                <h2 class="text-white-stable">Have a Cool Project idea?</h2>
                                <p class="mb-0 text-dark-50">Plan to building a new website or web app for startup.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-5">
                            <div class="text-center">
                                <a href="{{route('contact_us')}}" class="btn btn-primary">Start by saying Hi..</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Project idea end-->
@endsection
