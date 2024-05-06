@extends('layouts.site')
@section('title')
Portfolio
@endsection
@section('body')
<div class="pattern-square"></div>
<!--Pageheader start-->
<section class="py-5 py-lg-8">
   <div class="container">
      <div class="row">
         <div class="col-lg-6 col-md-12 col-12">
            <h1 class="mb-3">We take digital experiences to the next level</h1>
            <p class="mb-0 lead">
               Our dedicated services are developed to fulfill the whole product cycle. They range from discovery, branding, design over to development and continuous improvements in order to
               achieve the best outcome.‍
            </p>
         </div>
      </div>
   </div>
</section>
<!--Pageheader end-->

<!--Portfolio grid start-->
<section class="gallery mb-xl-9 my-4">
   <div class="container">
      <div class="row">
         <div class="mb-4">
            <ul class="nav nav-lb-tab gallery-filter">
               <li class="nav-item">
                  <a class="nav-link active filter-item" data-filter="all" aria-current="page" href="#">All Projects</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link filter-item" href="#" data-filter="businessDev&Con">Business Development & Consultancy</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link filter-item" href="#" data-filter="eCommerceDevelopment">eCommerce Development</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link filter-item" href="#" data-filter="webDevelopment">Web Development</a>
               </li>
            </ul>
         </div>
      </div>
      <div class="row">
         <div class="gallery-item webDevelopment all">
            <figure class="lift position-relative btn-arrow mb-5">
               <a href="//djasportsacademy.omiraitech.com/" target="_blank" class="gallery-item-inner">
                  <img src="{{ asset('assets/images/portfolio/djasportsacademy.png') }}" alt="logo Dja Sports Academy" class="img-fluid rounded-3" />
                  <div class="icon-shape icon-lg bg-white rounded-circle icon-arrow shadow-lg">
                     <i class="bi bi-arrow-up-right"></i>
                  </div>
               </a>
            </figure>

            <div class="mb-5">
               <h2 class="lh-base h4">
                  <a href="//djasportsacademy.omiraitech.com/" target="_blank" class="text-reset">Dja Sports Academy Meyomessala</a>
               </h2>
               <p class="mb-0">Discover the sports academy that makes the commune of Meyomessala proud</p>
            </div>

            <a href="//djasportsacademy.omiraitech.com/" target="_blank" class="btn btn-outline-dark">
               View Project
               <span class="ms-1">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right-circle-fill" viewBox="0 0 16 16">
                     <path
                        d="M0 8a8 8 0 1 0 16 0A8 8 0 0 0 0 8zm5.904 2.803a.5.5 0 1 1-.707-.707L9.293 6H6.525a.5.5 0 1 1 0-1H10.5a.5.5 0 0 1 .5.5v3.975a.5.5 0 0 1-1 0V6.707l-4.096 4.096z" />
                  </svg>
               </span>
            </a>
         </div>
         <!-- gallery item start -->
         <div class="mt-md-5 gallery-item eCommerceDevelopment businessDev&Con all ">
            <figure class="lift position-relative btn-arrow mb-5">
               <a href="/portfolio/cassie-hub" class="gallery-item-inner">
                  <img src="{{ asset('assets/images/portfolio/cassie-hub.png') }}" alt="logo cassie-hub" class="img-fluid rounded-3" />
                  <div class="icon-shape icon-lg bg-white rounded-circle icon-arrow shadow-lg">
                     <i class="bi bi-arrow-up-right"></i>
                  </div>
               </a>
            </figure>

            <div class="mb-5">
               <h2 class="lh-base h4">
                  <a href="/portfolio/cassie-hub" class="text-reset">Cassie Hub</a>
               </h2>
               <p class="mb-0">Shop on the e-commerce platform that promotes health, beauty and beyond</p>
            </div>
            <a href="/portfolio/cassie-hub" class="btn btn-outline-dark">
               View Project
               <span class="ms-1">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right-circle-fill" viewBox="0 0 16 16">
                     <path
                        d="M0 8a8 8 0 1 0 16 0A8 8 0 0 0 0 8zm5.904 2.803a.5.5 0 1 1-.707-.707L9.293 6H6.525a.5.5 0 1 1 0-1H10.5a.5.5 0 0 1 .5.5v3.975a.5.5 0 0 1-1 0V6.707l-4.096 4.096z" />
                  </svg>
               </span>
            </a>
         </div>
         <!-- gallery item end -->
         <!-- gallery item start -->
         <div class="gallery-item design webDevelopment all businessDev&Con">
            <figure class="lift position-relative btn-arrow mb-5">
               <a href="/portfolio/coden"  class="gallery-item-inner">
                  <img src="{{ asset('assets/images/portfolio/coden.png') }}" alt="logo coden" class="img-fluid rounded-3" />
                  <div class="icon-shape icon-lg bg-white rounded-circle icon-arrow shadow-lg">
                     <i class="bi bi-arrow-up-right"></i>
                  </div>
               </a>
            </figure>

            <div class="mb-5">
               <h2 class="lh-base h4">
                  <a href="/portfolio/coden" class="text-reset">CODEN</a>
               </h2>
               <p class="mb-0">Immerse yourself with the Ndjola Sustainable Development Committee that promotes the multidimensional development of Ndjola </p>
            </div>

            <a href="/portfolio/coden" class="btn btn-outline-dark">
               View Project
               <span class="ms-1">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right-circle-fill" viewBox="0 0 16 16">
                     <path
                        d="M0 8a8 8 0 1 0 16 0A8 8 0 0 0 0 8zm5.904 2.803a.5.5 0 1 1-.707-.707L9.293 6H6.525a.5.5 0 1 1 0-1H10.5a.5.5 0 0 1 .5.5v3.975a.5.5 0 0 1-1 0V6.707l-4.096 4.096z" />
                  </svg>
               </span>
            </a>
         </div>
         <!-- gallery item end -->
         <!-- gallery item start -->
         <div class="mt-md-5 gallery-item all webDevelopment ">
            <figure class="lift position-relative btn-arrow mb-5">
               <a href="//copressa.omiraitech.com" target="_blank" class="gallery-item-inner">
                  <img src="{{ asset('assets/images/portfolio/copressa.png') }}" alt="Logo COPRESSA" class="img-fluid rounded-3" />
                  <div class="icon-shape icon-lg bg-white rounded-circle icon-arrow shadow-lg">
                     <i class="bi bi-arrow-up-right"></i>
                  </div>
               </a>
            </figure>

            <div class="mb-5">
               <h2 class="lh-base h4">
                  <a href="//copressa.omiraitech.com" target="_blank" class="text-reset">COPRESSA</a>
               </h2>
               <p class="mb-0">Check out the NGO that raises awareness, informs and trains the most disadvantaged groups</p>
            </div>
            <a href="//copressa.omiraitech.com" target="_blank" class="btn btn-outline-dark">
               View Project
               <span class="ms-1">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right-circle-fill" viewBox="0 0 16 16">
                     <path
                        d="M0 8a8 8 0 1 0 16 0A8 8 0 0 0 0 8zm5.904 2.803a.5.5 0 1 1-.707-.707L9.293 6H6.525a.5.5 0 1 1 0-1H10.5a.5.5 0 0 1 .5.5v3.975a.5.5 0 0 1-1 0V6.707l-4.096 4.096z" />
                  </svg>
               </span>
            </a>
         </div>
      </div>
   </div>
</section>
<!--Portfolio grid end-->
@endsection
@push('js')
<script src="{{ asset('assets/js/vendors/filter-gallery.js') }}"></script>
@endpush
