@extends('layouts.app')

@section('title', 'What We Do')

@section('content')
    <div class="header-title ken-burn-out white" data-parallax="scroll" data-natural-height="800" data-natural-width="1920"
        data-image-src="../images/wide-2.jpg">
        <div class="container">
            <div class="title-base">
                <hr class="anima" />
                <h1>Our Services</h1>
                <p>Transforming Shipping Containers into Dream Homes</p>
            </div>
        </div>
    </div>
    <div class="section-empty">
        <div class="container content">
            <div class="row">
                <div class="col-md-3  col-sm-4">
                    <h2>What We Do</h2>
                    <hr class="space m" />
                    <aside class="sidebar mi-menu">
                        <nav class="sidebar-nav">
                            <ul class="side-menu">
                                <li class="active">
                                    <a href="{{ route('services.container-homes') }}">Custom Container Homes</a>
                                </li>
                                <li>
                                    <a href="{{ route('services.container-sales') }}">Shipping Container Sales</a>
                                </li>
                                <li>
                                    <a href="{{ route('services.consultation') }}">Consultation and Design</a>
                                </li>


                            </ul>
                        </nav>
                    </aside>
                    <hr class="space m" />
                    <div class="row">
                        <div class="col-md-12 boxed white">
                            <h4 class="text-color">Container Homes</h4>
                            <hr class="space m" />
                            <p class="text-s">
                                Crafting Your Dream Home from Containers
                            </p>
                        </div>


                    </div>
                </div>


                <div class="col-md-9 col-sm-8">
                    <hr class="space visible-xs" />
                    <h2>We build the perfect home for you</h2>
                    <p>
                        At CTI Containers, we specialize in transforming shipping containers into beautiful, functional
                        living spaces. Our custom container homes are designed to meet your unique needs and preferences,
                        combining modern aesthetics with sustainability.
                        Whether you desire a compact urban dwelling or a spacious family home, our team of architects and
                        builders will bring your vision to life with precision and creativity.
                    </p>
                    <hr class="space m" />
                    <div class="grid-item col-md-12 col-sm-12">
                        <a class="img-box inner" href="../images/gallery/image-17.jpg">
                            <span><img src="../images/gallery/image-17.jpg" alt=""></span>

                        </a>
                    </div>
                    <hr class="space m" />
                    <div class="row">
                        <div class="col-md-4">
                            <h4 class="text-black">Tailored Design</h4>
                            <hr class="space s" />
                            <p>
                                We work closely with you to create a home that reflects your personal style and functional
                                requirements.
                                From floor plans to interior finishes, every aspect of your home is customized to your
                                specifications.
                            </p>
                        </div>
                        <div class="col-md-4">
                            <h4 class="text-black">Eco-Friendly Solutions</h4>
                            <hr class="space s" />
                            <p>
                                Our homes are built with sustainability in mind, using eco-friendly materials and
                                energy-efficient systems to minimize environmental impact.
                            </p>
                        </div>

                        <div class="col-md-4">
                            <h4 class="text-black">Quality Craftsmanship</h4>
                            <hr class="space s" />
                            <p>
                                Our experienced builders ensure that every detail of your home is constructed to the highest
                                standards, providing a durable and comfortable living space.
                            </p>
                        </div>
                    </div>
                    <hr class="space m" />
                    <div class="grid-item col-md-12 col-sm-12">
                        <a class="img-box inner" href="../images/gallery/image-h1.jpg">
                            <span><img src="../images/gallery/image-h1.jpg" alt=""></span>

                        </a>
                    </div>

                    <hr class="space m" />
                    <center>
                        <a href="{{ route('get-quote') }}" class="btn btn-sm">Get Quote</a>
                    </center>

                </div>
            </div>
        </div>
    </div>
@endsection
