@extends('layouts.site')
@section('title')
    Contact Us
@endsection
@section('body')
    <div class="pattern-square"></div>
    <!--Pageheader start-->
    <section class="bg-info bg-opacity-10 pt-xl-9 pb-xl-0 py-5">
        <div class="container">
            <div class="row g-xl-7 gy-5">
                <div class="col-lg-6 col-12">
                    <div class="me-xl-7">
                        <div class="mb-5">
                            <h1 class="mb-3">Contact Us</h1>
                            <p>Connect with us today to learn more about how omirai can help you grow your business.</p>
                        </div>
                        <div class="mb-5">
                            <ul class="list-unstyled">
                                <li class="mb-2 d-flex">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                            <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                        </svg>
                                    </span>
                                    <span class="ms-2">Have a project or just curious? Let's talk</span>
                                </li>
                                <li class="mb-2 d-flex">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                            <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                        </svg>
                                    </span>
                                    <span class="ms-2">Got questions about our enterprise offerings?</span>
                                </li>
                                <li class="mb-2 d-flex">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                            <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                        </svg>
                                    </span>
                                    <span class="ms-2">Want to share feedback on an existing feature or suggest a new one?.</span>
                                </li>
                                <li class="mb-5 d-flex">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                            <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                        </svg>
                                    </span>
                                    <span class="ms-2">Need advice on the next steps? Discover the perfect personalized plan for your needs.</span>
                                </li>
                            </ul>

                            <p class="mb-0">
                                Impacting Today Changing Tommorow
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-4">
                                <img src="{{ asset('assets/images/brand-logo/omirai.svg') }}" alt="omirai Logo" class="mw-100" />
                            </div>
                            <div class="col-lg-3 col-md-4 col-4">
                                <img src="{{ asset('assets/images/brand-logo/ohsa.svg') }}" alt="OHSA Logo" class="mw-100" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 mb-lg-n9">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <form class="row g-3 needs-validation" novalidate>
                                <div class="col-md-6">
                                    <label for="contactFirstNameInput" class="form-label">
                                        First Name
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control" id="contactFirstNameInput" required />
                                    <div class="invalid-feedback">Please enter firstname.</div>
                                </div>
                                <div class="col-md-6">
                                    <label for="contactLastNameInput" class="form-label">
                                        Last Name
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control" id="contactLastNameInput" required />
                                    <div class="invalid-feedback">Please enter lastname.</div>
                                </div>
                                <div class="col-md-12">
                                    <label for="contactEmailInput" class="form-label">
                                        Email
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="email" class="form-control" id="contactEmailInput" required />
                                    <div class="invalid-feedback">Please enter email.</div>
                                </div>
                                <div class="col-md-12">
                                    <label for="contactPhoneInput" class="form-label">Phone
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="tel" class="form-control" id="contactPhoneInput" required />
                                    <div class="invalid-feedback">Please enter phone.</div>
                                </div>
                                <div class="col-md-12">
                                    <label for="contactCompanyNameInput" class="form-label">Company Name</label>
                                    <input type="text" class="form-control" id="contactCompanyNameInput" required />
                                    <div class="invalid-feedback">Please enter company name.</div>
                                </div>
                                <div class="col-md-12">
                                    <label for="contactActivitySectorInput" class="form-label">Sector Of Activity</label>
                                    <input type="text" class="form-control" id="contactActivitySectorInput" required />
                                    <div class="invalid-feedback">Please enter the sector of activity.</div>
                                </div>
                                
                                <div class="col-md-12">
                                    <label for="contactTextarea" class="form-label">Message</label>
                                    <textarea class="form-control" id="contactTextarea" rows="4" placeholder="Write to us" required></textarea>
                                    <div class="invalid-feedback">Please enter a message.</div>
                                </div>
                                <div class="d-grid">
                                    <button class="btn btn-primary" type="submit">Send</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Pageheader end-->
    <!--Community resource start-->
    <section class="py-lg-10 py-5">
    </section>
    <!--Community resource end-->
@endsection
