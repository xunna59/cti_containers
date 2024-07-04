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
                                <li>
                                    <a href="{{ route('services.container-homes') }}">Custom Container Homes</a>
                                </li>
                                <li class="active">
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
                            <h4 class="text-color">Shipping Container Sales</h4>
                            <hr class="space m" />
                            <p class="text-s">
                                Durable Containers, Endless Possibilities
                            </p>
                        </div>


                    </div>
                </div>


                <div class="col-md-9 col-sm-8">
                    <hr class="space visible-xs" />
                    <h2>Quality Containers for Every Need</h2>
                    <p>
                        In addition to creating custom homes, we offer high-quality shipping containers for sale. Our
                        containers are durable, versatile, and perfect for a variety of uses. Whether you're looking to use
                        them for storage, transport, or as the foundation for your own construction project,
                        we have a wide selection of containers to choose from, each inspected and maintained to ensure the
                        highest standards of quality.
                    </p>
                    <hr class="space m" />
                    {{-- <div class="grid-item col-md-12 col-sm-12">
                        <a class="img-box inner" href="../images/gallery/image-17.jpg">
                            <span><img src="../images/gallery/image-17.jpg" alt=""></span>

                        </a>
                    </div>
                    <hr class="space m" /> --}}
                    <div class="row">
                        <div class="col-md-4">
                            <h4 class="text-black">Wide Selection</h4>
                            <hr class="space s" />
                            <p>
                                We offer a range of container sizes and types, including standard, high cube, and
                                refrigerated containers, to suit your specific needs.
                            </p>
                        </div>
                        <div class="col-md-4">
                            <h4 class="text-black">Competitive Pricing</h4>
                            <hr class="space s" />
                            <p>
                                Our containers are priced competitively, offering great value for their quality and
                                durability.

                            </p>
                        </div>

                        <div class="col-md-4">
                            <h4 class="text-black">Delivery and Setup</h4>
                            <hr class="space s" />
                            <p>
                                We provide delivery and setup services to ensure that your container is placed and ready for
                                use, wherever you need it.
                            </p>
                        </div>
                    </div>
                    <hr class="space m" />
                    <div class="grid-item col-md-12 col-sm-12">
                        <a class="img-box inner" href="../images/gallery/container.jpg">
                            <span><img src="../images/gallery/container.jpg" alt=""></span>

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
