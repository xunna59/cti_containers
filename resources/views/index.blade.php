@extends('layouts.home')




@section('content')
    <div class="section-bg-image parallax-window white ken-burn-center" data-natural-height="1080" data-natural-width="1920"
        data-parallax="scroll" data-image-src="../images/hd-4.jpg">
        <div class="container content">
            <hr class="space" />
            <hr class="space" />
            <hr class="space l" />
            <div class="row vertical-row">
                <div class="col-md-6">
                    <div class="flexslider slider" data-options="controlNav:false,directionNav:false,slideshowSpeed:3000">
                        <ul class="slides">
                            <li>
                                <h1 class="text-uppercase text-left-xs">The best constructions company since 1895</h1>
                            </li>
                            <li>
                                <h1 class="text-uppercase text-left-xs">Our mission is to develop the strongest
                                    buildings</h1>
                            </li>
                            <li>
                                <h1 class="text-uppercase text-left-xs">Worldwide leader of counstruction industry</h1>
                            </li>
                        </ul>
                    </div>
                    <hr class="space m" />
                    <p class="text-left-xs">
                        Each of us is carving a stone, erecting a column, or cutting a piece of stained glass in the
                        construction of something much bigger than ourselves.
                    </p>
                </div>
                <div class="col-md-6 text-center text-left-xs">
                    <hr class="space visible-xs" />
                    <a href="https://www.youtube.com/watch?v=j_-2dUvlEdY" data-lightbox-anima="fade-right"
                        class="btn btn-lg btn-play text-color lightbox mfp-iframe">Watch video <i></i></a>
                </div>
            </div>
            <hr class="space" />
        </div>
    </div>
    <div class="section-empty bg-white">
        <div class="container content">
            <div class="row" data-anima="fade-bottom" data-timeline="asc" data-timeline-time="300">
                <div class="col-md-3 anima">
                    <div class="icon-box">
                        <div class="icon-box-cell">
                            <i class="im-drill text-xl"></i>
                        </div>
                        <div class="icon-box-cell">
                            <label class="text-m">Manufacturing</label>
                            <p class="text-s">Speed, flexibility</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 anima">
                    <div class="icon-box">
                        <div class="icon-box-cell">
                            <i class="im-crane text-xl"></i>
                        </div>
                        <div class="icon-box-cell">
                            <label class="text-m">Construction</label>
                            <p class="text-s">Speed, flexibility</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 anima">
                    <div class="icon-box">
                        <div class="icon-box-cell">
                            <i class="im-pencil-ruler text-xl"></i>
                        </div>
                        <div class="icon-box-cell">
                            <label class="text-m">Engineering</label>
                            <p class="text-s">Complex customer works</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 anima">
                    <div class="icon-box">
                        <div class="icon-box-cell">
                            <i class="im-solar text-xl"></i>
                        </div>
                        <div class="icon-box-cell">
                            <label class="text-m">Energy</label>
                            <p class="text-s">Sun, oil and gas</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-empty">
        <div class="container content">
            <div class="row">
                <div class="col-md-6">
                    <h2>
                        Sustainability goals
                    </h2>
                    <p>
                        At CTI Containers, we are committed to sustainable building practices and environmental
                        responsibility.
                        Our team of experts in architecture, engineering, management, and construction is dedicated to
                        providing you with the insight and advice needed to achieve your sustainability objectives.


                    </p>
                    <ul class="fa-ul text-s ul-dots">
                        <li><strong>Eco-Friendly Materials</strong>
                            <p>Utilizing recycled and sustainable materials to reduce waste and environmental impact.</p>
                        </li>
                        <li><strong>Community Support</strong>
                            <p>Partnering with organizations to support underprivileged communities
                                through charitable initiatives.</p>
                        </li>
                        <li><strong>Renewable Resources</strong>
                            <p> Implementing renewable resources and energy-efficient technologies from the ground up.</p>
                        </li>
                    </ul>
                    <hr class="space l" />
                    <a href="{{ route('about.about-us') }}" class="btn btn-sm">About our sustainability</a>
                    <hr class="space visible-xs" />
                </div>
                <div class="col-md-3">
                    <a class="img-box thumbnail lightbox row-12" data-lightbox-anima="fade-left"
                        href="../images/green-1.html">
                        <span><img src="../images/gallery/image-6.jpg" alt=""></span>
                    </a>
                </div>
                <div class="col-md-3 hidden-sm">
                    <a class="img-box thumbnail lightbox row-12" data-lightbox-anima="fade-left"
                        href="../images/green-2.html">
                        <span><img src="../images/gallery/image-7.jpg" alt=""></span>
                    </a>
                </div>
            </div>
            <hr class="space" />
            <hr class="space m" />
            <div class="row">
                <div class="col-md-3">
                    <a class="img-box thumbnail lightbox row-12" data-lightbox-anima="fade-left"
                        href="../images/gallery/image-5.jpg">
                        <span><img src="../images/gallery/image-5.jpg" alt=""></span>
                    </a>
                </div>
                <div class="col-md-3">
                    <h2>
                        Certified
                    </h2>
                    <p>At CTI Containers, we adhere to the highest standards of quality and safety. Our team ensures that
                        every project meets rigorous certification requirements, ensuring peace of mind for our clients.</p>
                    <ul class="fa-ul text-s ul-dots">
                        <li>Rigorous Inspections</li>
                        <li>Expert Team</li>
                        <li>Industry Standards</li>
                    </ul>
                    <hr class="space l" />
                    <a href="{{ route('about.about-us') }}" class="btn btn-sm">Get more informations</a>
                </div>
                <div class="col-md-6 col-sm-12">
                    <hr class="space visible-sm" />
                    <h2>
                        Guaranted quality
                    </h2>
                    <p>
                        Our commitment to quality is unwavering. At CTI Containers, we ensure that every project meets the
                        highest standards of craftsmanship and durability.
                    </p>
                    <ul class="fa-ul text-s ul-dots">
                        <li>Regular Assessments</li>
                        <li>Advanced Techniques</li>
                        <li>Top-Quality Materials</li>
                        <li>Employee Safety</li>
                        <li>Community Impact</li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="section-bg-image parallax-window white" data-natural-height="1080" data-natural-width="1920"
        data-parallax="scroll" data-image-src="../images/hd-5.jpg">
        <div class="container content">
            <div class="row vertical-row">
                <div class="col-md-6 text-left-xs">
                    <h2 class="text-color">Let build together</h2>
                    <p>
                        we believe in the power of collaboration. Join us in transforming shipping containers into
                        beautiful, sustainable living spaces.
                        Whether you’re an experienced professional or just starting your career, there’s a place for you on
                        our team.
                    </p>
                    <hr class="space" />
                    <div class="row">
                        <div class="col-md-6">
                            <div class="icon-box icon-box-top-bottom counter-box-icon text-left">
                                <div class="icon-box-cell">
                                    <i class="im-structure text-xl"></i>
                                </div>
                                <div class="icon-box-cell">
                                    <b><label class="counter text-l  text-color" data-speed="20000"
                                            data-to="850034"></label></b>
                                    <p class="text-s">SQUARE METERS BUILT</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="icon-box icon-box-top-bottom counter-box-icon text-left">
                                <div class="icon-box-cell">
                                    <i class="im-engineering text-xl"></i>
                                </div>
                                <div class="icon-box-cell">
                                    <b><label class="counter text-l text-color" data-speed="20000"
                                            data-to="125000"></label></b>
                                    <p class="text-s">WORKED WITH US</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 text-center text-left-xs">
                    <a href="{{ route('about.careers') }}" class="btn btn-border btn-lg">Join our team</a>
                </div>
            </div>
        </div>
    </div>
    <div class="section-empty">
        <div class="container content">
            <h2 class="text-center text-left-xs">We believe in making it easier for organisations to work and grow on
                an international scale</h2>
            <hr class="space" />
            <div class="row">
                <div class="col-md-4">
                    <div class="advs-box advs-box-side-icon extra-content-cnt boxed" data-href="">
                        <div class="icon-box">
                            <i class="im-conference icon"></i>
                        </div>
                        <div class="caption-box">
                            <h3>Leadership</h3>
                            <span class="extra-content"> Our team of experienced professionals is dedicated to guiding CTI
                                Containers towards new heights. </span>
                            <p>

                                We foster a culture of innovation, integrity, and excellence, ensuring that we lead by
                                example in everything we do.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="advs-box advs-box-side-icon extra-content-cnt boxed" data-href="">
                        <div class="icon-box">
                            <i class="im-medal icon"></i>
                        </div>
                        <div class="caption-box">
                            <h3>Vision</h3>
                            <span class="extra-content">We envision a future where sustainable and affordable housing
                                solutions are accessible to everyone. </span>
                            <p>

                                By revolutionizing the construction industry with shipping container homes, we aim to create
                                a positive impact on communities and the environment globally.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="advs-box advs-box-side-icon extra-content-cnt boxed" data-href="">
                        <div class="icon-box">
                            <i class="im-flash icon"></i>
                        </div>
                        <div class="caption-box">
                            <h3>Core values</h3>
                            <span class="extra-content"> Our core values are the foundation of our success.
                                We are
                                committed to quality, sustainability,
                            </span>
                            <p> and customer satisfaction.
                                Every project we undertake is a testament to our dedication to these principles, driving us
                                to deliver exceptional results.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="space" />
            <div class="row">
                <div class="col-md-4">
                    <h2>Build your dream<br />home now!</h2>
                </div>
                <div class="col-md-8">
                    <p>
                        Join us in creating innovative and sustainable living spaces. Our team of professionals is dedicated
                        to making the construction process seamless and enjoyable for you
                    </p>
                </div>
            </div>
            <hr class="space" />

        </div>
    </div>

    <div class="section-bg-image parallax-window white" data-natural-height="929" data-natural-width="1920"
        data-parallax="scroll" data-image-src="../images/hd-13.jpg">
        <div class="container content">
            <div class="row vertical-row">
                <div class="col-md-6 text-center text-left-xs">
                    <a href="{{ route('get-quote') }}" class="btn btn-border btn-lg">Get in touch now</a>
                </div>
                <div class="col-md-6 text-left-xs">
                    <h2 class="text-color">Let build something together</h2>
                    <p>
                        Partner with CTI Containers to create your dream container home. Our team is ready to turn your
                        vision into reality with expertise, quality, and dedication.
                    </p>
                    <hr class="space" />
                    <div class="row">
                        <div class="col-md-6 text-left-xs">
                            <div class="icon-box">
                                <div class="icon-box-cell">
                                    <i class="im-money-2 text-xl"></i>
                                </div>
                                <div class="icon-box-cell">
                                    <label class="text-m">Free quote</label>
                                    <p class="text-s">Get a detailed estimate for your project without any obligation.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="icon-box">
                                <div class="icon-box-cell">
                                    <i class="im-coins text-xl"></i>
                                </div>
                                <div class="icon-box-cell">
                                    <label class="text-m">Easy payments</label>
                                    <p class="text-s">Flexible payment options to suit your financial needs.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
