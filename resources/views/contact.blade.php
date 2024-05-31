@extends('layouts.site')
@section('title')
{{ __('website/contact.page_title') }}
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
                            <h1 class="mb-3">{{ __('website/contact.heading') }}</h1>
                            <p>{{ __('website/contact.subheading') }}</p>
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
                                    <span class="ms-2">{{ __('website/contact.contact_us_point1') }}</span>
                                </li>
                                <li class="mb-2 d-flex">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                            <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                        </svg>
                                    </span>
                                    <span class="ms-2">{{ __('website/contact.contact_us_point2') }}</span>
                                </li>
                                <li class="mb-2 d-flex">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                            <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                        </svg>
                                    </span>
                                    <span class="ms-2">{{ __('website/contact.contact_us_point3') }}</span>
                                </li>
                                <li class="mb-5 d-flex">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                            <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                        </svg>
                                    </span>
                                    <span class="ms-2">{{ __('website/contact.contact_us_point4') }}</span>
                                </li>
                            </ul>

                            <p class="mb-0">
                                {{ __('website/contact.slogan') }}
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
                            
                            <form id="contactUsForm" class="row g-3 needs-validation" novalidate >
                                @csrf
                                <div class="col-md-6">
                                    <label for="contactFirstNameInput" class="form-label">
                                        {{ __('forms.first_name') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control" id="contactFirstNameInput" name="contactFirstNameInput"  required />
                                    @php $first_name = __('forms.first_name');@endphp
                                    <div class="invalid-feedback" id="contactFirstNameInputInvalidFeedback">{{ __('validation.required', ['attribute' => $first_name ]) }}</div>
                                </div>
                                <div class="col-md-6">
                                    <label for="contactLastNameInput" class="form-label">
                                        {{ __('forms.last_name') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control" id="contactLastNameInput" name="contactLastNameInput" required />
                                    @php $last_name = __('forms.last_name');@endphp 
                                    <div class="invalid-feedback" id="contactLastNameInputInvalidFeedback">{{ __('validation.required', ['attribute' => $last_name ]) }}</div>
                                </div>
                                <div class="col-md-12">
                                    <label for="contactEmailInput" class="form-label">
                                        {{ __('forms.email') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="email" class="form-control" id="contactEmailInput" name="contactEmailInput" required />
                                    @php $email = __('forms.email');@endphp
                                    <div class="invalid-feedback" id="contactEmailInputInvalidFeedback">{{ __('validation.required', ['attribute' => $email ]) }}</div>
                                    <span class="invalid-feedback" id="contactEmailInputMessage">{{ __('validation.custom.invalid_email') }}</span>
                                </div>
                                <div class="col-md-12">
                                    <label for="contactPhoneInput" class="form-label">{{ __('forms.phone') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="tel" class="form-control" id="contactPhoneInput" name="contactPhoneInput" required />
                                    @php $phone = __('forms.phone');@endphp
                                    <div class="invalid-feedback" id="contactPhoneInputInvalidFeedback">{{ __('validation.required', ['attribute' => $phone ]) }}</div>
                                </div>
                                <div class="col-md-6">
                                    <label for="contactCompanyNameInput" class="form-label">{{ __('forms.company_name') }}</label>
                                    <input type="text" class="form-control" id="contactCompanyNameInput" name="contactCompanyNameInput" />
                                    @php $company_name = __('forms.company_name');@endphp
                                    <div class="invalid-feedback" id="contactCompanyNameInputInvalidFeedback">{{ __('validation.required', ['attribute' => $company_name ]) }}</div>
                                </div>
                                <div class="col-md-6">
                                    <label for="contactSectorOfActivityInput" class="form-label">{{ __('forms.sector_of_activity') }}</label>
                                    <input type="text" class="form-control" id="contactSectorOfActivityInput" name="contactSectorOfActivityInput" />
                                    @php $sector_of_activity = __('forms.sector_of_activity');@endphp
                                    <div class="invalid-feedback" id="contactSectorOfActivityInputInvalidFeedback">{{ __('validation.required', ['attribute' => $sector_of_activity ]) }}</div>
                                </div>
                                <div class="col-md-12">
                                    <label for="contactMotiveInput" class="form-label">{{ __('forms.motive') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <select name="contactMotiveInput" class="form-control" id="contactMotiveInput" name="contactMotiveInput" required>
                                        <option value="enquiry">{{ __('website/contact.enquiry') }}</option>
                                        <option value="complain">{{ __('website/contact.complain') }}</option>
                                        <option value="partnership">{{ __('website/contact.partnership') }}</option>
                                        <option value="ai_ml_solutions">{{ __('website/contact.ai_ml_solutions') }}</option>
                                        <option value="trainings">{{ __('website/contact.trainings') }}</option>
                                        <option value="business_dev_consult">{{ __('website/contact.business_dev_consult') }}</option>
                                        <option value="datascience_dataanalysis">{{ __('website/contact.datascience_dataanalysis') }}</option>
                                        <option value="other">{{ __('website/contact.other') }}</option>
                                    </select>
                                    @php $motive = __('forms.motive');@endphp
                                    <div class="invalid-feedback" id="contactMotiveInputInvalidFeedback">{{ __('validation.required', ['attribute' => $motive ]) }}</div>
                                </div>
                                
                                <div class="col-md-12">
                                    <label for="contactMessage" class="form-label">{{ __('forms.message') }}
                                        <span class="text-danger">*</span></label>
                                    <textarea class="form-control" id="contactMessage" name="contactMessage" rows="5" placeholder="{{ __('website/home.start_your_project_form_message_placeholder') }}" required style="resize: none;"></textarea>
                                    @php $message = __('forms.message');@endphp 
                                    <div class="invalid-feedback" id="contactMessageInvalidFeedback">{{ __('validation.required', ['attribute' => $message ]) }}</div>
                                </div>
                                <div class="d-grid">
                                    <button class="btn btn-primary" type="submit" id="contactUsFormSubmitBtn"> {{ __('website/contact.send') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Pageheader end-->
        <section class="py-lg-10 py-5">
        </section>
    
@endsection

