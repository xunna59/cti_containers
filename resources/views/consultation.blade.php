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
                                <li>
                                    <a href="{{ route('services.container-sales') }}">Shipping Container Sales</a>
                                </li>
                                <li class="active">
                                    <a href="{{ route('services.consultation') }}">Consultation and Design</a>
                                </li>


                            </ul>
                        </nav>
                    </aside>
                    <hr class="space m" />
                    <div class="row">
                        <div class="col-md-12 boxed white">
                            <h4 class="text-color">Consultation and Design</h4>
                            <hr class="space m" />
                            <p class="text-s">
                                From Concept to Creation, We've Got You Covered
                            </p>
                        </div>


                    </div>
                </div>


                <div class="col-md-9 col-sm-8">
                    <hr class="space visible-xs" />
                    <h2>Designing Your Vision, Building Your Future</h2>
                    <p>
                        Our expertise goes beyond construction. At CTI Containers, we provide comprehensive consultation and
                        design services to help you plan and execute your container home project. From initial concept
                        development to detailed architectural plans,
                        our team works closely with you to ensure every detail is accounted for. We offer personalized
                        guidance and innovative solutions to make your dream container home a reality.
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
                            <h4 class="text-black">Concept Development</h4>
                            <hr class="space s" />
                            <p>
                                We help you refine your ideas and create a clear vision for your project, taking into
                                account your goals, budget, and site conditions.
                            </p>
                        </div>
                        <div class="col-md-4">
                            <h4 class="text-black">Architectural Plans</h4>
                            <hr class="space s" />
                            <p>
                                Our skilled designers produce detailed architectural plans that maximize space,
                                functionality, and aesthetics.

                            </p>
                        </div>

                        <div class="col-md-4">
                            <h4 class="text-black">Project Management</h4>
                            <hr class="space s" />
                            <p>
                                We offer project management services to oversee the construction process, ensuring that your
                                project stays on schedule and within budget.
                            </p>
                        </div>
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
