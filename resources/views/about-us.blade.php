@extends('layouts.app')

@section('title', 'Who We Are')

@section('content')
    <div class="header-title ken-burn-out white" data-parallax="scroll" data-natural-height="800" data-natural-width="1920"
        data-image-src="../images/wide-1.jpg">
        <div class="container">
            <div class="title-base">
                <hr class="anima" />
                <h1>About us</h1>
                <p>Innovative, Sustainable, Affordable</p>
            </div>
        </div>
    </div>
    <div class="section-empty no-padding-bottom">
        <div class="container content">
            <div class="row">

                <div class="col-md-12 col-sm-12">
                    <h2> At CTI Containers, we transform the way you think about modern living. </h2>
                    <hr class="space m" />
                    <p style="text-align: justify">
                        Specializing in the sale and
                        construction of innovative homes built from shipping containers, we provide sustainable,
                        cost-effective, and
                        stylish housing solutions. Whether you’re looking to purchase high-quality shipping containers or
                        commission a custom-built container home, CTI Containers has you covered.

                        <br>

                        Founded on a passion for innovation and sustainability, CTI Containers is at the forefront of the
                        shipping container housing revolution.
                        Our team of skilled designers, engineers, and builders work together to create unique living spaces
                        that combine functionality, style, and eco-consciousness.
                    </p>
                    <p style="text-align: justify">
                        <strong> Our Mission</strong><br>

                        Our mission is to deliver exceptional quality, sustainability, and affordability in every project.
                        We believe in the potential of shipping containers to revolutionize modern housing, providing
                        versatile and eco-friendly solutions that meet the needs of contemporary lifestyles.

                        <br>

                        <strong> Our Vision</strong><br>

                        To lead the market in providing innovative housing solutions that are not only affordable but also
                        environmentally sustainable.
                        We aim to redefine modern living with our cutting-edge designs and exceptional craftsmanship.
                        <br>
                    </p>
                </div>


            </div>
        </div>
    </div>
    {{-- <div class="section-empty bg-white">
        <div class="container content">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <h4>Team members</h4>
                    <div class="counter-box-simple text-color "><span class="counter text-xl" data-to="3000"
                            data-separator="">3000</span><span class="text-s"> %</span></div>
                    <hr class="space xs" />
                    <p class="text-xs text-uppercase">Increase from middle 2010.</p>
                </div>
                <div class="col-md-3 col-sm-6">
                    <h4>Growing scale</h4>
                    <div class="counter-box-simple text-color  "><span class="counter text-xl"
                            data-to="300">120</span><span class="text-s"> %</span></div>
                    <hr class="space xs" />
                    <p class="text-xs text-uppercase">Business daily growth</p>
                </div>
                <div class="col-md-3 col-sm-6">
                    <h4>Clients</h4>
                    <div class="counter-box-simple text-color "><span class="counter text-xl" data-to="950">950</span><span
                            class="text-s"></span></div>
                    <hr class="space xs" />
                    <p class="text-xs text-uppercase">N° of clients we helped.</p>
                </div>
                <div class="col-md-3 col-sm-6">
                    <h4>Projects</h4>
                    <div class="counter-box-simple text-color"><span class="counter text-xl" data-to="2500"
                            data-separator="">2500</span><span class="text-s"></span></div>
                    <hr class="space xs" />
                    <p class="text-xs text-uppercase">Number of projects.</p>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="section-empty">
        <div class="container content">
            <div class="row proporzional-row proporzional-row-sm">
                <div class="col-md-8 boxed white">
                    <h2 class="text-color">History</h2>
                    <p>
                        Born 60 years ago, the company has become a global leader in less than 3 years by building some
                        of the first prefabs houses in the world.
                    </p>
                    <a href="{{ route('about.our-history') }}" class="btn-text text-color">Learn more</a>
                </div>
                <div class="col-md-4">
                    <a class="img-box lightbox" data-lightbox-anima="fade-top" href="../images/gallery/image-8.jpg">
                        <img src="../images/gallery/image-8.jpg" alt="">
                    </a>
                </div>

            </div>
            <hr class="space l" />
            <div class="row proporzional-row proporzional-row-sm">
                <div class="col-md-4">
                    <a class="img-box lightbox" data-lightbox-anima="fade-top" href="../images/gallery/image-11.jpg">
                        <img src="../images/gallery/image-11.jpg" alt="">
                    </a>
                </div>
                <div class="col-md-8 boxed white">
                    <h2 class="text-color">Careers</h2>
                    <p>
                        Raising the finance to build new factories or plants in global key areas and moving operations
                        into more and more countries in the future years.
                    </p>
                    <a href="#" class="btn-text text-color">Learn more</a>
                </div>

            </div>
        </div>
    </div>
@endsection
