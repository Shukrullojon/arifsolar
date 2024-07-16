@extends('layouts.app')

@section('content')

    <main>
        @if(!empty($about))
            <section class="about">
                <div class="container about-container">
                    <div class="about-title-box">
                        <span class="about-title-line"></span>
                        <h3 class="about-title">@lang('front.about')</h3>
                    </div>
                    <div class="about-desc">
                        <div class="about-video">
                            <video class="about-video" id="aboutVideo">
                                <source src="{{ asset("public/files/".$about->video)}}" type="video/mp4">
                            </video>
                            <button class="about-video-btn" id="aboutVideoBtn">
                                <img src="{{ asset("public/files/".$about->image)}}" alt="play" width="100"
                                     height="100">
                            </button>
                        </div>
                        <p class="about-box-desc">
                            <span class="about-box-desc-span">{{ $about->title }}</span>
                            <br> {{ $about->description }}</p>
                    </div>
                </div>
            </section>
        @endif

        @if(count($works))
            <section class="work">
                <div class="container work-container">
                    <div class="work-title-box">
                        <span class="about-title-line"></span>
                        <h3 class="work-title">@lang('front.work_1') <span
                                class="work-title-span">@lang('front.work_2')</span></h3>
                    </div>
                    <ul class="work-list">
                        @foreach($works as $work)
                            <li class="work-item">
                                <h4 class="work-item-title">{{ $work->title }}</h4>
                                <p class="work-item-desc">{{ $work->description }}</p>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </section>
        @endif


        @if(count($jobs))
            <section class="our-jobs">
                <div class="container">
                    <div
                        style=" margin: 0px; margin-bottom: 64px; display: flex; align-items: center; justify-content: space-between;">
                        <div class="work-title-box our-jobs-title-box">
                            <span class="about-title-line"></span>
                            <h3 class="work-title">@lang('front.job')</h3>
                        </div>
                    </div>
                    <ul class="our-jobs-list">
                        @foreach($jobs as $job)
                            <li class="our-jobs-item" id="ourJobsItem1">
                                <img style="margin-bottom: 26px;" src="{{ asset("public/files/".$job->image) }}" alt="icon" width="{{ $job->width }}" height="{{ $job->height }}">
                                <h3 class="our-jobs-item-title">{{ $job->title }}</h3>
                                <p class="our-jobs-item-desc">{{ $job->address }}</p>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </section>
        @endif

        @if(count($reviews))
            <section class="about-customer">
                <div class="container">
                    <div
                        style="display: flex; align-items: center; justify-content: space-between;  margin-bottom: 48px;">
                        <div class="work-title-box about-customer-title-box">
                            <span class="about-title-line"></span>
                            <h3 class="work-title">@lang('front.review_title') <span class="work-title-span">@lang("front.review_des") </span></h3>
                        </div>
                        <div style="display: flex; align-items: center; gap: 1.25rem;">
                            <div class="arrow" id="prev"><i class="fa-solid fa-chevron-left"></i></div>
                            <div class="arrow" id="next"><i class="fa-solid fa-chevron-right"></i></div>
                        </div>
                    </div>
                    <section>
                        <div id="cCarousel">
                            <div id="carousel-vp">
                                <div id="cCarousel-inner">
                                    @foreach($reviews as $review)
                                        <article class="cCarousel-item">
                                            <video style="object-fit: cover;" id="aboutCustomerVideo1">
                                                <source src="{{ asset("public/files/".$review->video)}}"
                                                        type="video/mp4">
                                            </video>
                                            <button class="about-customr-video-play" id="aboutCustomerVideoBtn1">
                                                <svg class="about-customr-video-play-img" width="72" height="72"
                                                     viewBox="0 0 72 72"
                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M28.5 46.752V25.248C28.5004 24.9789 28.5733 24.715 28.7108 24.4837C28.8483 24.2525 29.0455 24.0625 29.2817 23.9336C29.5179 23.8048 29.7844 23.7419 30.0533 23.7514C30.3222 23.761 30.5835 23.8427 30.81 23.988L47.538 34.737C47.7498 34.8727 47.9241 35.0595 48.0448 35.2802C48.1655 35.5009 48.2288 35.7484 48.2288 36C48.2288 36.2516 48.1655 36.4991 48.0448 36.7198C47.9241 36.9405 47.7498 37.1273 47.538 37.263L30.81 48.015C30.5835 48.1603 30.3222 48.242 30.0533 48.2515C29.7844 48.2611 29.5179 48.1982 29.2817 48.0693C29.0455 47.9405 28.8483 47.7505 28.7108 47.5193C28.5733 47.288 28.5004 47.024 28.5 46.755V46.752Z"
                                                        fill="white"/>
                                                    <path
                                                        d="M3 36C3 17.775 17.775 3 36 3C54.225 3 69 17.775 69 36C69 54.225 54.225 69 36 69C17.775 69 3 54.225 3 36ZM36 7.5C28.4413 7.5 21.1922 10.5027 15.8475 15.8475C10.5027 21.1922 7.5 28.4413 7.5 36C7.5 43.5587 10.5027 50.8078 15.8475 56.1525C21.1922 61.4973 28.4413 64.5 36 64.5C43.5587 64.5 50.8078 61.4973 56.1525 56.1525C61.4973 50.8078 64.5 43.5587 64.5 36C64.5 28.4413 61.4973 21.1922 56.1525 15.8475C50.8078 10.5027 43.5587 7.5 36 7.5Z"
                                                        fill="white"/>
                                                </svg>
                                            </button>
                                            <h4 class="about-customer-video-title">{{ $review->name }}</h4>
                                        </article>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </section>
        @endif

        @if(count($comments))
            <section class="customer-opinion about-customer">
                <div class="container">
                    <div style="display: flex; align-items: center; justify-content: space-between;  margin-bottom: 48px;">
                        <div class="work-title-box about-customer-title-box">
                            <span class="about-title-line"></span>
                            <h3 class="work-title">@lang('front.comment_title') <span class="work-title-span"> @lang('front.comment_des')  </span></h3>
                        </div>
                        <div style="display: flex; align-items: center; gap: 1.25rem;">
                            <div class="arrow" id="prev2"><i class="fa-solid fa-chevron-left"></i></div>
                            <div class="arrow" id="next2"><i class="fa-solid fa-chevron-right"></i></div>
                        </div>
                    </div>
                    <section>
                        <div id="cCarousel">
                            <div id="carousel-vp2">
                                <div id="cCarousel-inner2">
                                    @foreach($comments as $comment)
                                        <article class="cCarousel-item2">
                                            <p class="customer-opinion-item-desc">
                                                {{ $comment->comment }}
                                            </p>
                                            <a class="customer-opinion-item-link"></a>
                                            <span class="customer-opinion-item-line"></span>
                                            <div class="customer-opinion-item-box" style="display: flex; align-items: center; gap: 8px; margin-top: 23px;">
                                                <img src="{{ asset("arifsolar/images/vector-person.svg")}}" alt="vector">
                                                <h5 class="customer-opinion-box-title">{{ $comment->fio }} <br> <span style="margin: 0;
                                    padding: 0; font-size: 10px; line-height: 14px; color: #00A0A8;">{{ $comment->company }}</span>
                                                </h5>
                                            </div>
                                        </article>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </section>
        @endif

        @if(count($news))
            <section class="news about-customer">
                <div class="container">
                    <div style="display: flex; align-items: center; justify-content: space-between;  margin-bottom: 48px;">
                        <div class="work-title-box about-customer-title-box">
                            <span class="about-title-line"></span>
                            <h3 class="work-title">@lang('front.news')</h3>
                        </div>
                        <div style="display: flex; align-items: center; gap: 1.25rem;">
                            <div class="arrow" id="prev3"><i class="fa-solid fa-chevron-left"></i></div>
                            <div class="arrow" id="next3"><i class="fa-solid fa-chevron-right"></i></div>
                        </div>
                    </div>
                    <section>
                        <div id="cCarousel">
                            <div id="carousel-vp3">
                                <div id="cCarousel-inner3">
                                    @foreach($news as $new)
                                        <article class="cCarousel-item3">
                                            <img class="news-item-img" src="{{ asset("public/files/".$new->image)}}" alt="img" width="386" height="220" style="margin-bottom: 28px;">
                                            <h4 class="news-item-title">{{ $new->title }}</h4>
                                            <p class="news-item-desc">{{ $new->description }}</p>
                                            <div style="display: flex; align-items: center; justify-content: space-between; margin: 0 16px;">
                                                <p class="news-item-box-date">{{ date("d-M, Y", strtotime($new->created_at)) }}</p>
                                                <a class="news-item-box-link" id="newsItemBoxLink1">Batafsil</a>
                                            </div>

                                        </article>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </section>
        @endif

        @if(count($consultations))
            <section class="free-tial-section about-customer">
                <div class="container">
                    <div style="  margin-bottom: 64px;">
                        <div class="work-title-box about-customer-title-box">
                            <span class="about-title-line"></span>
                            <h3 class="work-title">@lang("front.consul_title") <span class="work-title-span"> @lang("front.consul_title_1")  </span></h3>
                        </div>
                    </div>
                    <div class="free-tial-box">
                        <div class="free-tial-carousel-box">
                            <div class="center">
                                <div class="wrapper">
                                    <div class="inner">
                                        @foreach($consultations as $consultation)
                                            <div class="card">
                                                <div class="content">
                                                    <h1 class="free-tial-item-title">{{ $consultation->title }}</h1>
                                                    <p class="free-tial-item-desc">{!! $consultation->description !!}</p>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="map">
                                <button class="active first"></button>
                                <button class="second"></button>
                                <button class="third"></button>
                            </div>
                        </div>
                        <div class="free-tial-contact">
                            <h3 class="free-tial-contact-title">@lang("front.consul_title") @lang("front.consul_title_1")</h3>
                            <p class="free-tial-contact-desc">@lang("front.consult_info")</p>
                            <form id="freeTialContactForm" action="mailto:arial.uz@gmail.com" method="post" enctype="text/plain" autocomplete="off">
                                <input class="hero-name-input free-tial-contact-input" type="text" name="Name" placeholder="@lang("front.name")">
                                <input class="hero-tel-input free-tial-contact-input" id="free-tial-tell" style="margin-bottom: 58px;" type="tel" name="Phone number" placeholder="+998 99 -000-00-00" required value="+998">
                                <button class="free-tial-contact-btn">@lang("front.send_request")</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        @endif

        @if(count($partners))
            <section class="partners about-customer">
                <div class="container">
                    <div style="  margin-bottom: 64px;">
                        <div class="work-title-box about-customer-title-box">
                            <span class="about-title-line"></span>
                            <h3 class="work-title">@lang("front.partner_title") <span class="work-title-span">@lang("front.partner")</span></h3>
                        </div>
                    </div>
                    <div class="slider">
                        <div class="slide-track">
                            @foreach($partners as $partner)
                                <div class="slide">
                                    <img src="{{ $partner->link }}" height="100" width="250" alt=""/>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
        @endif

        <section class="address about-customer">
            <div class="container">
                <div style="  margin-bottom: 64px;">
                    <div class="work-title-box about-customer-title-box">
                        <span class="about-title-line"></span>
                        <h3 class="work-title">@lang("front.address.title") <span class="work-title-span">@lang("front.address.desc") </span></h3>
                    </div>
                </div>
                <div class="address-box">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d749.703328547317!2d69.19133099999999!3d41.269400499999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae890022cdc6f7%3A0x62b20f450b1bb224!2sHome%20life%20Climate!5e0!3m2!1sru!2s!4v1718018388958!5m2!1sru!2s"
                        width="600" height="400" style="border:0; border-radius: 16px;" allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <ul class="address-list">
                        <li class="address-item">
                            <img src="{{ asset("arifsolar/images/phone-icon.svg")}}" alt="phone" width="64" height="64">
                            <p class="address-item-desc">
                                @lang("front.phone"): <br>
                                <span>+998 (99) 563 52 35</span>
                            </p>
                        </li>
                        <li class="address-item">
                            <img src="{{ asset("arifsolar/images/location-icon.svg")}}" alt="phone" width="64" height="64">
                            <p class="address-item-desc">
                                @lang("front.add"): <br>
                                <span>Islom, Karimov 55-A uy, Qarshi</span>
                            </p>
                        </li>
                        <li class="address-item">
                            <img src="{{ asset("arifsolar/images/mail-icon.svg")}}" alt="mail" width="64" height="64">
                            <p class="address-item-desc">
                                @lang("front.email"): <br>
                                <span>arial.uz@gmail.com</span>
                            </p>
                        </li>
                        <li class="address-item">
                            <img src="{{ asset("arifsolar/images/clock-icon.svg")}}" alt="clock" width="64" height="64">
                            <p class="address-item-desc">
                                @lang("front.time"):<br>
                                <span>@lang("front.time_info")</span>
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        @if(count($questions))
            <section class="questions about-customer">
                <div class="container">
                    <div style="  margin-bottom: 64px;">
                        <div class="work-title-box about-customer-title-box">
                            <span class="about-title-line"></span>
                            <h3 class="work-title">@lang("front.question_title") <span class="work-title-span"> @lang("front.question_title_1")   </span></h3>
                        </div>
                    </div>
                    <div class="questions-list">

                        @foreach($questions as $question)
                            <div class="questions-item" id="questionsItem1">
                                <div class="questions-item-box">
                                    <h5 class="questions-item-title">{{ $question->title }}</h5>
                                    <button class="questions-item-btn"></button>
                                </div>
                                <p class="questions-item-desc">{{ $question->description }}</p>
                            </div>
                        @endforeach
                        </ul>
                    </div>
            </section>
        @endif

    </main>

@endsection
