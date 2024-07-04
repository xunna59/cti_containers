@extends('layouts.app')

@section('title', 'Get Quote')

@section('content')
    <div class="header-base">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="title-base text-left">
                        <h1>Contact Us</h1>
                        <p>Our policies should be to help develop user satisfaction, fast responses, complete answers and to
                            increase contacts with our clients, wordlwide.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <ol class="breadcrumb b white">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="#">Company</a></li>
                        <li class="active">Contact Us</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="section-empty">
        <div class="container content">
            <div class="row">
                <div class="col-md-4">
                    <div class="advs-box advs-box-top-icon boxed-inverse text-left">
                        <i class="im-money-bag icon circle"></i>
                        <h3>Sales Inquiry</h3>
                        <p>
                            Preliminary response from prospective customers, generally following a sales promotion campaign.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="advs-box advs-box-top-icon boxed-inverse text-left">
                        <i class="im-support icon circle"></i>
                        <h3>Customer Support</h3>
                        <p>
                            If you've got questions about constrcting with us, you can contact our support team from this
                            page or call us at (02) 111 111 000.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="advs-box advs-box-top-icon boxed-inverse text-left">
                        <i class="im-monitor-analytics icon circle"></i>
                        <h3>Request a quote</h3>
                        <p>
                            In our continued effort to make it easier for customers to do business with us, we will provide
                            the lower prices.
                        </p>
                    </div>
                </div>
            </div>
            <hr class="space l" />
            <div class="row proporzional-row">
                <div class="col-md-6 boxed-inverse">
                    <h2>Contact us here</h2>
                    <hr class="space m" />
                    @if (@session()->has('success'))
                        <div class="success-box">
                            <div class="alert alert-success"> {{ session('success') }}</div>
                        </div>
                    @endif



                    @if (@session()->has('error'))
                        <div class="error-box">
                            <div class="alert alert-warning">{{ session('success') }}</div>
                        </div>
                    @endif
                    <br><br>
                    <form action="{{ route('contact.quote') }}" class="form-box" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <p>Your name</p>
                                <input id="name" name="name" placeholder="" type="text"
                                    class="form-control form-value" value="{{ old('name') }}">
                                @error('name')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <p>Email</p>
                                <input id="email" name="email" placeholder="" type="email"
                                    class="form-control form-value" value="{{ old('email') }}">
                                @error('email')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <p>Phone number</p>
                                <input id="phone" name="phone" placeholder="" type="text"
                                    class="form-control form-value" value="{{ old('phone') }}">
                                @error('phone')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <hr class="space xs" />
                        <p>Select Service</p>
                        <select class="form-control form-value" name="service">
                            <option value="Container homes">Container Homes</option>
                            <option value="Container Sales">Shipping Container Sales</option>
                            <option value="Consultation">Consultation & Design</option>

                        </select>
                        @error('service')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror

                        <hr class="space xs" />
                        <p>Your message</p>
                        <textarea id="messagge" name="message" placeholder="" class="form-control form-value">{{ old('message') }}</textarea>
                        @error('message')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror

                        <div class="g-recaptcha mt-4" data-sitekey={{ config('services.recaptcha.key') }}></div>
                        <hr class="space s" />
                        <button class="btn-xs btn" type="submit">Send messagge</button>




                    </form>




                </div>
                <div class="col-md-6 boxed-inverse no-paddings">
                    <div class="google-map x" data-marker-pos-top="25" data-zoom="12" data-coords="40.741895,-73.989308"
                        data-skin="gray" data-marker="../images/marker-map-4.html"></div>

                </div>
            </div>
        </div>
    </div>
@endsection
