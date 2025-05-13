@extends('layouts.frontend')

@section('content')
<!--==================== HOME ====================-->
<section>
    <div class="swiper-container section__home">
        <div>
            <!--========== ISLANDS 1 ==========-->
            <section class="islands">
                {{-- <img
                    src="{{ asset('frontend/assets/img/bg-home.png') }}"
                    alt=""
                    class="islands__bg"
                /> --}}
                <div class="bg__home">
                    <div class="islands__container container">
                        <div
                            class="islands__data"
                            style="z-index: 99; position: relative"
                        >
                            <h2 class="islands__subtitle">
                                <div>
                                    <button class="button annountment">New <span>We prideourselveson 24/7 customer care <i class='bx bx-right-arrow-alt' ></i></span></button>
                                </div>
                            </h2>
                            <h1 class="islands__title">
                                Welcome!! 24/7
                            </h1>
                            <p class="islands__description">
                                We are committed to providing quality service around the clock. We are ready and waiting to assist you. 
                                We pride ourselves on 24/7 customer service.
                            </p>
                            <div class="home__card">
                                <div class="home__card-box">
                                <h2 class="choice__services">
                                    Choice Services
                                </h2>
                                <!--==================== Services ====================-->
                                <section class="services" id="services">
                                    <div class="value__container container grid">
                                        <div>
                                            <a href="{{ route('calcuator-digital') }}">
                                                <div class="contact__card-box">
                                                    <div class="contact__card-info">
                                                      <i class='bx bxl-google-cloud'></i>
                                                      <div>
                                                        <h3 class="home__card-title">CLOUD SOLUTIONS</h3>
                                                        <p class="home__card-description">Here are the biggest enterprise
                                                            technology acquisitions of 2021 so far, in reverse chronological order.</p>
                                                      </div>
                                                    </div>
                                    
                                                    <button class="button contact__card-button">Choice</button>
                                                </div>
                                            </a>
                                        </div>
                                        <div>
                                            <a href="">
                                                <div class="contact__card-box">
                                                    <div class="contact__card-info">
                                                      <i class='bx bx-desktop' ></i>
                                                      <div>
                                                        <h3 class="home__card-title">IT HELPDESK</h3>
                                                        <p class="home__card-description">Here are the biggest enterprise
                                                            technology acquisitions of 2021 so far, in reverse chronological order.</p>
                                                      </div>
                                                    </div>
                                    
                                                    <button class="button contact__card-button">Choice</button>
                                                </div>
                                            </a>
                                        </div>
                                        
                                        
                                        {{-- <div class="value__images">
                                            <div class="value__orbe"></div>

                                            <div class="value__img">
                                                <img src="{{ asset('frontend/assets/img/team.jpg') }}" alt="" />
                                            </div>
                                        </div>

                                        <div class="value__content">
                                            <div class="value__data">
                                                <span class="section__subtitle">Why Choose Us</span>
                                                <h2 class="section__title">
                                                    Experience That We Promise To You
                                                </h2>
                                                <p class="value__description">
                                                    We have an unbreakable commitment to our brand values. They are our fundamental beliefs. They guide our actions and the way we serve our clients and engage with our communities.
                                                </p>
                                            </div>

                                            <div class="value__accordion">
                                                <div class="value__accordion-item">
                                                    <header class="value__accordion-header">
                                                        <i
                                                            class="bx bxs-shield-x value-accordion-icon"
                                                        ></i>
                                                        <h3 class="value__accordion-title">
                                                            COLLABURATION
                                                        </h3>
                                                        <div class="value__accordion-arrow">
                                                            <i class="bx bxs-down-arrow"></i>
                                                        </div>
                                                    </header>

                                                    <div class="value__accordion-content">
                                                        <p class="value__accordion-description">
                                                            Collaboration is an essential part of teamwork and helps a successful team function most effectively
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="value__accordion-item">
                                                    <header class="value__accordion-header">
                                                        <i
                                                            class="bx bxs-x-square value-accordion-icon"
                                                        ></i>
                                                        <h3 class="value__accordion-title">
                                                            ACCELERATION
                                                        </h3>
                                                        <div class="value__accordion-arrow">
                                                            <i class="bx bxs-down-arrow"></i>
                                                        </div>
                                                    </header>

                                                    <div class="value__accordion-content">
                                                        <p class="value__accordion-description">
                                                            Combines agility, automation, and insights to help businesses delivery.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="value__accordion-item">
                                                    <header class="value__accordion-header">
                                                        <i
                                                            class="bx bxs-bar-chart-square value-accordion-icon"
                                                        ></i>
                                                        <h3 class="value__accordion-title">
                                                            LISTEN
                                                        </h3>
                                                        <div class="value__accordion-arrow">
                                                            <i class="bx bxs-down-arrow"></i>
                                                        </div>
                                                    </header>

                                                    <div class="value__accordion-content">
                                                        <p class="value__accordion-description">
                                                            Connecting to clients is the based for us in making the best decisions.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="value__accordion-item">
                                                    <header class="value__accordion-header">
                                                        <i
                                                            class="bx bxs-check-square value-accordion-icon"
                                                        ></i>
                                                        <h3 class="value__accordion-title">
                                                            MODIFICATION
                                                        </h3>
                                                        <div class="value__accordion-arrow">
                                                            <i class="bx bxs-down-arrow"></i>
                                                        </div>
                                                    </header>

                                                    <div class="value__accordion-content">
                                                        <p class="value__accordion-description">
                                                            Altering, adjusting, and improving an existing thing to enhance its performance, functionality, reliability, or usability.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="value__accordion-item">
                                                    <header class="value__accordion-header">
                                                        <i
                                                            class="bx bxs-check-square value-accordion-icon"
                                                        ></i>
                                                        <h3 class="value__accordion-title">
                                                            SCALABILITY
                                                        </h3>
                                                        <div class="value__accordion-arrow">
                                                            <i class="bx bxs-down-arrow"></i>
                                                        </div>
                                                    </header>

                                                    <div class="value__accordion-content">
                                                        <p class="value__accordion-description">
                                                            New digital technologies allow businesses to scale up without significant interruptions or complex transitions.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>

<!--==================== LOGOS ====================-->
<section class="logos">
    <span class="section__subtitle" style="text-align: center"
    >Client</span
    >
    <h2 class="section__title" style="text-align: center">
        Our Partners
    </h2>
    <div class="logos__container container grid">
        <div class="logos__img">
            <img src="{{ asset('frontend/assets/img/logo-derotirat.png') }}" alt="" />
        </div>
        <div class="logos__img">
            <img src="{{ asset('frontend/assets/img/logo-bpjsks.png') }}" alt="" />
        </div>
        <div class="logos__img">
            <img src="{{ asset('frontend/assets/img/booking.png') }}" alt="" />
        </div>
        <div class="logos__img">
            <img src="{{ asset('frontend/assets/img/logo-kbbukopin.png') }}" alt="" />
        </div>
        <div class="logos__img">
            <img src="{{ asset('frontend/assets/img/rs-fatmawati.png') }}" alt="" />
        </div>
        <div class="logos__img">
            <img src="{{ asset('frontend/assets/img/logo-bpr-universal.png') }}" alt="" />
        </div>
        <div class="logos__img">
            <img src="{{ asset('frontend/assets/img/logo-mib.png') }}" alt="" />
        </div>
        <div class="logos__img">
            <img src="{{ asset('frontend/assets/img/logo-hamzah.png') }}" alt="" />
        </div>
        <div class="logos__img">
            <img src="{{ asset('frontend/assets/img/amoro.png') }}" alt="" />
        </div>
        <div class="logos__img">
            <img src="{{ asset('frontend/assets/img/logo-dtq.png') }}" alt="" />
        </div>
        <div class="logos__img">
            <img src="{{ asset('frontend/assets/img/logo-loh-jinawi.png') }}" alt="" />
        </div>
        <div class="logos__img">
            <img src="{{ asset('frontend/assets/img/logo-smu.png') }}" alt="" />
        </div>
    </div>
</section>

<!--==================== POPULAR ====================-->
<section class="section" id="popular">
    <div class="container">
        <span class="section__subtitle" style="text-align: center"
            >Best Choice</span
        >
        <h2 class="section__title" style="text-align: center">
            Popular Places
        </h2>

        <div class="popular__container swiper">
            <div class="swiper-wrapper">
                @foreach($travel_packages as $travel_package)
                    <article class="popular__card swiper-slide">
                        <a href="{{ route('travel_package.show', $travel_package->slug) }}">
                            <img
                                src="{{ Storage::url($travel_package->galleries->first()->images) }}"
                                alt=""
                                class="popular__img"
                            />
                            <div class="popular__data">
                                <h2 class="popular__price">
                                    <span>$</span>{{ number_format($travel_package->price,2) }}
                                </h2>
                                <h3 class="popular__title">
                                    {{ $travel_package->location}}
                                </h3>
                                <p class="popular__description">{{ $travel_package->type }}</p>
                            </div>
                        </a>
                    </article>
                @endforeach
            </div>

            <div class="swiper-button-next">
                <i class="bx bx-chevron-right"></i>
            </div>
            <div class="swiper-button-prev">
                <i class="bx bx-chevron-left"></i>
            </div>
        </div>
    </div>
</section>

<!--==================== Background ====================-->
<section class="section" id="bg-content">
    <div class="container">
        <img src="{{ asset('frontend/assets/img/bg-content-2.png') }}" alt="" />
    </div>
</section>

<!--==================== VALUE ====================-->
<section class="value section" id="value">
    <div class="value__container container grid">
        <div class="value__images">
            <div class="value__orbe"></div>

            <div class="value__img">
                <img src="{{ asset('frontend/assets/img/team.jpg') }}" alt="" />
            </div>
        </div>

        <div class="value__content">
            <div class="value__data">
                <span class="section__subtitle">Why Choose Us</span>
                <h2 class="section__title">
                    Experience That We Promise To You
                </h2>
                <p class="value__description">
                    We have an unbreakable commitment to our brand values. They are our fundamental beliefs. They guide our actions and the way we serve our clients and engage with our communities.
                </p>
            </div>

            <div class="value__accordion">
                <div class="value__accordion-item">
                    <header class="value__accordion-header">
                        <i
                            class="bx bxs-shield-x value-accordion-icon"
                        ></i>
                        <h3 class="value__accordion-title">
                            COLLABURATION
                        </h3>
                        <div class="value__accordion-arrow">
                            <i class="bx bxs-down-arrow"></i>
                        </div>
                    </header>

                    <div class="value__accordion-content">
                        <p class="value__accordion-description">
                            Collaboration is an essential part of teamwork and helps a successful team function most effectively
                        </p>
                    </div>
                </div>
                <div class="value__accordion-item">
                    <header class="value__accordion-header">
                        <i
                            class="bx bxs-x-square value-accordion-icon"
                        ></i>
                        <h3 class="value__accordion-title">
                            ACCELERATION
                        </h3>
                        <div class="value__accordion-arrow">
                            <i class="bx bxs-down-arrow"></i>
                        </div>
                    </header>

                    <div class="value__accordion-content">
                        <p class="value__accordion-description">
                            Combines agility, automation, and insights to help businesses delivery.
                        </p>
                    </div>
                </div>
                <div class="value__accordion-item">
                    <header class="value__accordion-header">
                        <i
                            class="bx bxs-bar-chart-square value-accordion-icon"
                        ></i>
                        <h3 class="value__accordion-title">
                            LISTEN
                        </h3>
                        <div class="value__accordion-arrow">
                            <i class="bx bxs-down-arrow"></i>
                        </div>
                    </header>

                    <div class="value__accordion-content">
                        <p class="value__accordion-description">
                            Connecting to clients is the based for us in making the best decisions.
                        </p>
                    </div>
                </div>
                <div class="value__accordion-item">
                    <header class="value__accordion-header">
                        <i
                            class="bx bxs-check-square value-accordion-icon"
                        ></i>
                        <h3 class="value__accordion-title">
                            MODIFICATION
                        </h3>
                        <div class="value__accordion-arrow">
                            <i class="bx bxs-down-arrow"></i>
                        </div>
                    </header>

                    <div class="value__accordion-content">
                        <p class="value__accordion-description">
                            Altering, adjusting, and improving an existing thing to enhance its performance, functionality, reliability, or usability.
                        </p>
                    </div>
                </div>
                <div class="value__accordion-item">
                    <header class="value__accordion-header">
                        <i
                            class="bx bxs-check-square value-accordion-icon"
                        ></i>
                        <h3 class="value__accordion-title">
                            SCALABILITY
                        </h3>
                        <div class="value__accordion-arrow">
                            <i class="bx bxs-down-arrow"></i>
                        </div>
                    </header>

                    <div class="value__accordion-content">
                        <p class="value__accordion-description">
                            New digital technologies allow businesses to scale up without significant interruptions or complex transitions.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- blog -->
<section class="blog section" id="blog">
    <div class="blog__container container">
        <span class="section__subtitle" style="text-align: center"
            >Our Blog</span
        >
        <h2 class="section__title" style="text-align: center">
            Blog posts about solutions for the digital era
        </h2>

        <div class="blog__content grid">
            @foreach($blogs as $blog)
                <article class="blog__card">
                    <div class="blog__image">
                        <img
                            src="{{ Storage::url($blog->image) }}"
                            alt=""
                            class="blog__img"
                        />
                        <a href="{{ route('blog.show', $blog->slug) }}" class="blog__button">
                            <i class="bx bx-right-arrow-alt"></i>
                        </a>
                    </div>

                    <div class="blog__data">
                        <h2 class="blog__title">
                            {{ $blog->title }}
                        </h2>
                        <p class="blog__description">
                            {{ $blog->excerpt }}
                        </p>

                        <div class="blog__footer">
                            <div class="blog__reaction">
                                {{ date('d M Y', strtotime($blog->created_at)) }}
                            </div>
                            <div class="blog__reaction">
                                <i class="bx bx-show"></i>
                                <span>{{ $blog->reads }}</span>
                            </div>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>
@endsection