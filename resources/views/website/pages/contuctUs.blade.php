@extends('website.layouts.master')

@section('title', __('contact.contact_us'))

@section('main-content')
{{-- ContactUs page  --}}

<div class="site-wrap">
    <div class="bg-light py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-0">
                    <a href="index.html">{{ __('home.home') }}</a>
                    <span class="mx-2 mb-0">/</span>
                    <strong class="text-black">{{ __('contact.contact_us') }}</strong>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="h3 mb-3 text-black">{{ __('contact.get_in_touch') }}</h2>
                </div>
                <div class="col-md-7">
                    <form action="#" method="post">
                        @csrf
                        <div class="p-3 p-lg-5 border">
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="c_fname" class="text-black">{{ __('contact.first_name') }} <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="c_fname" name="c_fname">
                                </div>
                                <div class="col-md-6">
                                    <label for="c_lname" class="text-black">{{ __('contact.last_name') }} <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="c_lname" name="c_lname">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="c_email" class="text-black">{{ __('contact.email') }} <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="c_email" name="c_email" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="c_subject" class="text-black">{{ __('contact.subject') }}</label>
                                    <input type="text" class="form-control" id="c_subject" name="c_subject">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="c_message" class="text-black">{{ __('contact.message') }}</label>
                                    <textarea name="c_message" id="c_message" cols="30" rows="7" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-12">
                                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="{{ __('contact.send_message') }}">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-5 ml-auto">
                    <div class="p-4 border mb-3">
                        <span class="d-block text-primary h6 text-uppercase">{{ __('contact.address.new_york') }}</span>
                        <p class="mb-0">{{ __('contact.address_detail') }}</p>
                    </div>
                    <div class="p-4 border mb-3">
                        <span class="d-block text-primary h6 text-uppercase">{{ __('contact.address.london') }}</span>
                        <p class="mb-0">{{ __('contact.address_detail') }}</p>
                    </div>
                    <div class="p-4 border mb-3">
                        <span class="d-block text-primary h6 text-uppercase">{{ __('contact.address.canada') }}</span>
                        <p class="mb-0">{{ __('contact.address_detail') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
