@extends('layouts.site')
@section('title')
{{ __('website/about.page_title') }}
@endsection
@section('body')
    <div class="pattern-square"></div>
     <!--Who we are start-->
     <section class="mb-7 py-xl-9 py-5">
        <div class="container pb-xl-9 pb-5">
           <div class="row align-items-center g-4">
              <div class="col-lg-6 col-md-12">
                 <div class="me-xl-8">
                    <h1 class="mb-3">{{ __('website/about.heading') }}</h1>
                    <p class="lead mb-4">{{ __('website/about.subheading') }}</p>
                    <p class="mb-6 me-xl-6" style="text-align: justify;">
                     {{ __('website/about.description') }}
                    </p> 
                    <div class="row g-lg-3">
                       <div class="col-md-6">
                          <ul class="list-unstyled mb-3">
                             <li class="d-flex mb-3">
                                <span>
                                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill text-primary opacity-75" viewBox="0 0 16 16">
                                      <path
                                         d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                   </svg>
                                </span>
                                <span class="ms-2">{{ __('website/about.description_point1') }}</span>
                             </li>
                             <li class="d-flex">
                                <span>
                                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill text-primary opacity-75" viewBox="0 0 16 16">
                                      <path
                                         d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                   </svg>
                                </span>
                                <span class="ms-2">{{ __('website/about.description_point2') }}</span>
                             </li>
                          </ul>
                       </div>
                       <div class="col-md-6">
                          <ul class="list-unstyled mb-0">
                             <li class="d-flex mb-3">
                                <span>
                                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill text-primary opacity-75" viewBox="0 0 16 16">
                                      <path
                                         d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                   </svg>
                                </span>
                                <span class="ms-2">{{ __('website/about.description_point3') }}</span>
                             </li>
                             <li class="d-flex">
                                <span>
                                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill text-primary opacity-75" viewBox="0 0 16 16">
                                      <path
                                         d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                   </svg>
                                </span>
                                <span class="ms-2">{{ __('website/about.description_point4') }}</span>
                             </li>
                          </ul>
                       </div>
                    </div>
                 </div>
              </div>
              <div class="col-lg-6 col-md-12">
                 <figure>
                    <img src="{{ asset('assets/images/about-img/about-hero-img.png') }}" alt="omirai logo" class="img-fluid rounded-3" />
                 </figure>
              </div>
           </div>
        </div>
        <div class="container">
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
                            <img src="{{ asset('assets/images/brand-logo/cassie-hub.svg') }}" alt="Cassie Hub Logo " />
                        </figure>
                    </div>
                    <div class="col" data-cue="slideInDown">
                        <figure class="text-center mb-0">
                            <img src="{{ asset('assets/images/brand-logo/copressa.svg') }}" alt="COPRESSA Logo " />
                        </figure>
                    </div>
                    <div class="col" data-cue="slideInDown">
                        <figure class="text-center mb-0">
                            <img src="{{ asset('assets/images/brand-logo/saurellenyoma.svg') }}" alt="Saurelle Nyoma Logo " />
                        </figure>
                    </div>
                    <div class="col" data-cue="slideInDown">
                        <figure class="text-center mb-0">
                            <img src="{{ asset('assets/images/brand-logo/djasportsacademy.svg') }}" alt="Dja Sports Academy Logo " />
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
                            <img src="{{ asset('assets/images/brand-logo/sophistique-by-us.svg') }}" alt="Sophistiqué By Us Logo " />
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
     <!--Who we are end-->

     <!--Forword together start-->
     <section class="my-lg-9 my-5">
        <div class="container">
           <div class="row">
              <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                 <div class="text-center mb-xl-7 mb-5">
                    <h2 class="mb-0">{{ __('website/about.our_principles') }}</h2>
                 </div>
              </div>
           </div>
           <div class="row g-lg-7 gy-5">
              <div class="col-lg-4 col-md-4">
                 <div class="mb-5">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-rocket-takeoff text-primary" viewBox="0 0 16 16">
                       <path d="M9.752 6.193c.599.6 1.73.437 2.528-.362.798-.799.96-1.932.362-2.531-.599-.6-1.73-.438-2.528.361-.798.8-.96 1.933-.362 2.532Z" />
                       <path
                          d="M15.811 3.312c-.363 1.534-1.334 3.626-3.64 6.218l-.24 2.408a2.56 2.56 0 0 1-.732 1.526L8.817 15.85a.51.51 0 0 1-.867-.434l.27-1.899c.04-.28-.013-.593-.131-.956a9.42 9.42 0 0 0-.249-.657l-.082-.202c-.815-.197-1.578-.662-2.191-1.277-.614-.615-1.079-1.379-1.275-2.195l-.203-.083a9.556 9.556 0 0 0-.655-.248c-.363-.119-.675-.172-.955-.132l-1.896.27A.51.51 0 0 1 .15 7.17l2.382-2.386c.41-.41.947-.67 1.524-.734h.006l2.4-.238C9.005 1.55 11.087.582 12.623.208c.89-.217 1.59-.232 2.08-.188.244.023.435.06.57.093.067.017.12.033.16.045.184.06.279.13.351.295l.029.073a3.475 3.475 0 0 1 .157.721c.055.485.051 1.178-.159 2.065Zm-4.828 7.475.04-.04-.107 1.081a1.536 1.536 0 0 1-.44.913l-1.298 1.3.054-.38c.072-.506-.034-.993-.172-1.418a8.548 8.548 0 0 0-.164-.45c.738-.065 1.462-.38 2.087-1.006ZM5.205 5c-.625.626-.94 1.351-1.004 2.09a8.497 8.497 0 0 0-.45-.164c-.424-.138-.91-.244-1.416-.172l-.38.054 1.3-1.3c.245-.246.566-.401.91-.44l1.08-.107-.04.039Zm9.406-3.961c-.38-.034-.967-.027-1.746.163-1.558.38-3.917 1.496-6.937 4.521-.62.62-.799 1.34-.687 2.051.107.676.483 1.362 1.048 1.928.564.565 1.25.941 1.924 1.049.71.112 1.429-.067 2.048-.688 3.079-3.083 4.192-5.444 4.556-6.987.183-.771.18-1.345.138-1.713a2.835 2.835 0 0 0-.045-.283 3.078 3.078 0 0 0-.3-.041Z" />
                       <path d="M7.009 12.139a7.632 7.632 0 0 1-1.804-1.352A7.568 7.568 0 0 1 3.794 8.86c-1.102.992-1.965 5.054-1.839 5.18.125.126 3.936-.896 5.054-1.902Z" />
                    </svg>
                 </div>

                 <h4>{{ __('website/about.our_mission') }}</h4>
                 <p class="mb-0">{{ __('website/about.our_mission_description') }}</p>
              </div>
              <div class="col-lg-4 col-md-4">
                 <div class="mb-5">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-gem text-primary" viewBox="0 0 16 16">
                       <path
                          d="M3.1.7a.5.5 0 0 1 .4-.2h9a.5.5 0 0 1 .4.2l2.976 3.974c.149.185.156.45.01.644L8.4 15.3a.5.5 0 0 1-.8 0L.1 5.3a.5.5 0 0 1 0-.6l3-4zm11.386 3.785-1.806-2.41-.776 2.413 2.582-.003zm-3.633.004.961-2.989H4.186l.963 2.995 5.704-.006zM5.47 5.495 8 13.366l2.532-7.876-5.062.005zm-1.371-.999-.78-2.422-1.818 2.425 2.598-.003zM1.499 5.5l5.113 6.817-2.192-6.82L1.5 5.5zm7.889 6.817 5.123-6.83-2.928.002-2.195 6.828z" />
                    </svg>
                 </div>

                 <h4>{{ __('website/about.our_vision') }}</h4>
                 <p class="mb-0">{{ __('website/about.our_vision_description') }}</p>
              </div>
              <div class="col-lg-4 col-md-4">
                 <div class="mb-5">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-bullseye text-primary" viewBox="0 0 16 16">
                       <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                       <path d="M8 13A5 5 0 1 1 8 3a5 5 0 0 1 0 10zm0 1A6 6 0 1 0 8 2a6 6 0 0 0 0 12z" />
                       <path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8z" />
                       <path d="M9.5 8a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                    </svg>
                 </div>

                 <h4>{{ __('website/about.our_purpose') }}</h4>
                 <p class="mb-0">{!! __('website/about.our_purpose_description') !!}
                 </p>
              </div>
           </div>
        </div>
     </section>
     <!--Forword together end-->

     <!--Team member start-->
     <section class="py-lg-9 py-5 bg-primary">
        <div class="container">
           <div class="row g-5">
              <div class="col-md-4 col-6">
                 <div class="text-center">
                    <h2 class="text-white-stable">2022</h2>
                    <h5 class="text-white-stable mb-0">{{ __('website/about.founded') }}</h5>
                 </div>
              </div>
              <div class="col-md-4 col-6">
                 <div class="text-center">
                    <h2 class="text-white-stable">15+</h2>
                    <h5 class="text-white-stable mb-0">{{ __('website/about.projects_shipped') }}</h5>
                 </div>
              </div>
              <div class="col-md-4 col-6">
                 <div class="text-center">
                    <h2 class="text-white-stable">10+</h2>
                    <h5 class="text-white-stable mb-0">{{ __('website/about.team_members') }}</h5>
                 </div>
              </div>
           </div>
        </div>
     </section>
     <!--Team member end-->

     <!--Success stories-->
     <section class="py-xl-9 py-5 bg-light">
        <div class="container">
           <div class="row">
              <div class="col-xl-8 offset-xl-2 col-md-8 offset-md-2">
                 <div class="text-center mx-xl-7 mb-5">
                    <h2 class="mb-3">{{ __('website/about.success_story_title') }}</h2>
                    
                 </div>
              </div>
           </div>
           <div class="table-responsive-lg">
              <div class="row flex-nowrap pb-5 me-5 me-lg-0">
                 <div class="col-lg-4 col-md-6">
                    <div class="card shadow-sm h-100">
                       <div class="card-body p-lg-5">
                          <figure class="mb-5">
                             <img src="{{ asset('assets/images/client-logo/coden.svg') }}" alt="CODEN Logo" />
                          </figure>
                          <p class="mb-0" style="text-align: justify;">
                             “{{ __('website/about.success_story1') }}”
                          </p>
                          <div class="mt-4">
                             <h5 class="mb-0">{{ __('website/about.success_story1_person_name') }}</h5>
                             <small>{{ __('website/about.success_story1_person_role') }}</small>
                          </div>
                       </div>
                    </div>
                 </div>
                 <div class="col-lg-4 col-md-6">
                    <div class="card shadow-sm h-100">
                       <div class="card-body p-lg-5">
                          <figure class="mb-5">
                             <img src="{{ asset('assets/images/client-logo/cassie-hub.svg') }}" alt="Cassie Hub Logo" />
                          </figure>
                          <p class="mb-0" style="text-align: justify;">
                             “{{ __('website/about.success_story2') }}”
                          </p>
                          <div class="mt-4">
                             <h5 class="mb-0">{{ __('website/about.success_story2_person_name') }}</h5>
                             <small>{{ __('website/about.success_story2_person_role') }}</small>
                          </div>
                       </div>
                    </div>
                 </div>
                 <div class="col-lg-4 col-md-6">
                    <div class="card shadow-sm h-100">
                       <div class="card-body p-lg-5">
                          <figure class="mb-5">
                             <img src="{{ asset('assets/images/client-logo/snicom.svg') }}" alt="Snicom Logo" />
                          </figure>
                          <p class="mb-0" style="text-align: justify;">“{{ __('website/about.success_story3') }}”</p>
                          <div class="mt-4">
                             <h5 class="mb-0">{{ __('website/about.success_story3_person_name') }}</h5>
                             <small>{{ __('website/about.success_story3_person_role') }}</small>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </section>
     <!--Success stories-->
      <!--Speak with expert start-->
      <section class="my-9">
        <div class="container">
           <div class="row line-pattern bg-primary-gradient rounded-3 p-7 g-0">
              <div class="col-lg-8 offset-lg-2 z-1">
                 <div class="text-center py-md-7">
                    <h2 class="h1 text-white-stable">{{ __('website/about.cta_heading') }}</h2>
                    <p class="text-white-50 px-lg-7 mb-5">
                     {{ __('website/about.cta_text') }}
                    </p>
                    <a href="http://wa.me/+237694113593" class="btn btn-dark">{{ __('website/about.cta_button') }}</a>
                 </div>
              </div>
           </div>
        </div>
     </section>
     <!--Speak with expert end-->
@endsection