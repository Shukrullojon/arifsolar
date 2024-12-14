<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset("front/css/carousel.css")}}">
    <link rel="stylesheet" href="{{ asset("front/css/main.css")}}">
    <link rel="stylesheet" href="{{ asset("front/css/responsive.css")}}">
    <link rel="stylesheet" href="{{ asset("front/css/new.css")}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <title>Arif Solar</title>
</head>
<body>

@if(!empty($header))
    <section class="header-top" id="header-top">
        <div class="container" style="display: flex; align-items: center; justify-content: space-between;">
            <div style="display: flex">
                <h1 class="header-top-title">{!! $header->title !!}</h1>
                <a class="header_button" style="margin-left: 5px"
                   href="#{{ $header->section_id }}">{{ $header->button_title }}</a>
            </div>
            <div>
                <button class="header-top-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                        <rect width="32" height="32" rx="16" fill="white" fill-opacity="0.4"/>
                        <path
                            d="M21.8242 20.9752C21.8799 21.031 21.9241 21.0971 21.9543 21.17C21.9845 21.2428 22 21.3209 22 21.3997C22 21.4785 21.9845 21.5566 21.9543 21.6294C21.9241 21.7023 21.8799 21.7684 21.8242 21.8242C21.7684 21.8799 21.7023 21.9241 21.6294 21.9543C21.5566 21.9845 21.4785 22 21.3997 22C21.3209 22 21.2428 21.9845 21.17 21.9543C21.0971 21.9241 21.031 21.8799 20.9752 21.8242L16 16.8482L11.0248 21.8242C10.9122 21.9368 10.7595 22 10.6003 22C10.4411 22 10.2884 21.9368 10.1758 21.8242C10.0632 21.7116 10 21.5589 10 21.3997C10 21.2405 10.0632 21.0878 10.1758 20.9752L15.1518 16L10.1758 11.0248C10.0632 10.9122 10 10.7595 10 10.6003C10 10.4411 10.0632 10.2884 10.1758 10.1758C10.2884 10.0632 10.4411 10 10.6003 10C10.7595 10 10.9122 10.0632 11.0248 10.1758L16 15.1518L20.9752 10.1758C21.0878 10.0632 21.2405 10 21.3997 10C21.5589 10 21.7116 10.0632 21.8242 10.1758C21.9368 10.2884 22 10.4411 22 10.6003C22 10.7595 21.9368 10.9122 21.8242 11.0248L16.8482 16L21.8242 20.9752Z"
                            fill="white"/>
                    </svg>
                </button>
            </div>
        </div>
    </section>
@endif


<section class="header-hero-section">
    <header>
        <div class="container header-container">
            <a href="" class="header-left-box">
                <img src="{{ asset("front/images/Logo-1.svg")}}" alt="logo" width="305" height="58">
                <span class="header-left-line"></span>
                <h3 class="header-left-title">@lang('front.logo_1') <br>@lang('front.logo_2')</h3>
            </a>
            <div class="header-rigt-box">
                <a href="tel:712030056" class="header-tell">
                    <img class="header-tell-img" src="{{ asset("front/images/phone-vector.svg")}}" alt="phone"
                         width="24"
                         height="24">
                    71 203 00 56
                </a>
                <span class="header-left-line"></span>
                <a class="header-telegram-icon" href="https://t.me/arifsolar">
                    <img src="{{ asset("front/images/telegram-icon.svg")}}" alt="telegram" width="44" height="44">
                </a>
                <span class="header-left-line"></span>
                @php
                    $lang = App::getLocale('locale') == "uz" ? "ru" : "uz";
                    $img = App::getLocale('locale') == "uz" ? "lang-icon2.svg.svg" : "lang_icon_uz.svg";
                @endphp
                <a href="{{ route("language",$lang) }}">
                    <button class="header-lang-icon">
                        <img src="{{ asset("front/images/$img") }}" alt="telegram" width="44" height="44">
                    </button>
                </a>
            </div>
            <button class="hamburger-btn"></button>
        </div>
    </header>

    <div class="container hero">
        <div class="hero-box">
            <h3 class="hero-title">
                @lang('front.hero_title')
            </h3>
            <p class="hero-desc">
                @lang('front.hero_desc')
            </p>
            <form class="hero-form" id="hero-form" action="{{ route("notification") }}" method="POST">
                @csrf
                <input class="hero-name-input" name="name" type="text" placeholder="@lang('front.name')" required>
                <input class="hero-tel-input" name="phone" type="tel" value="+998" placeholder="+998 99 -000-00-00"
                       required>
                <button class="hero-btn" name="submit_form" type="submit" id="hero-btn">@lang('front.button_submit')
                    <span class="hero-btn-icon"></span></button>
            </form>
        </div>
    </div>
</section>

<main>

    @if(!empty($about))
        <section class="about" id="about_section">
            <div class="container about-container">
                <div class="about-title-box">
                    <span class="about-title-line"></span>
                    <h3 class="about-title">@lang('front.about')</h3>
                </div>
                <div class="about-desc">
                    <div class="about-video" id="about_video">
                        <video class="about-video" id="aboutVideoNew">
                            <source src="{{ asset("public/files/".$about->video)}}" type="video/mp4">
                            <source src="{{ asset("public/files/".$about->video)}}" type="video/mp4">
                        </video>
                        <button class="about-video-btn" id="aboutVideoBtnNew">
                            <img src="{{ asset("public/files/".$about->image)}}" alt="play" width="100" height="100">
                        </button>
                    </div>
                    <p class="about-box-desc">
                        <span class="about-box-desc-span">{{ $about->title }}</span>
                        <br> {!! $about->description !!}
                    </p>
                </div>
            </div>
        </section>
    @endif

    @if(count($works))
        <section class="work" id="work_section">
            <div class="container work-container">
                <div class="work-title-box">
                    <span class="about-title-line"></span>
                    <h3 class="work-title">@lang('front.work_1') <span
                            class="work-title-span">@lang('front.work_2')</span></h3>
                </div>
                <ul class="work-list">
                    @foreach($works as $work)
                        <li class="work-item"
                            style="background-image: url('{{ asset('public/files/'.$work->image) }}');"
                            data-hover-image="{{ asset('public/files/'.$work->image) }}">
                            <h4 class="work-item-title">{{ $work->title }}</h4>
                            <p class="work-item-desc">{{ $work->description }}</p>
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>
    @endif

    @if(count($jobs))
        <section class="our-jobs" id="job_section">
            <div class="container">
                <div
                    style=" margin: 0px; margin-bottom: 64px; display: flex; align-items: center; justify-content: space-between;">
                    <div class="work-title-box our-jobs-title-box">
                        <span class="about-title-line"></span>
                        <h3 class="work-title">@lang('front.job')</h3>
                    </div>
                </div>
                <ul class="our-jobs-list" id="job_content">
                    @foreach($jobs as $job)
                        <li class="our-jobs-item newOurJob"
                            style="background-image: url('{{ asset('public/files/'.$job->image) }}');"
                            data-job-id="{{ $job->id }}">
                            <img style="margin-bottom: 26px;" src="{{ asset("public/files/".$job->image_logo) }}"
                                 alt="{{ $job->img_alt }}" width="{{ $job->width }}" height="{{ $job->height }}">
                            <h3 class="our-jobs-item-title">{{ $job->title }}</h3>
                            <p class="our-jobs-item-desc">{{ $job->address }}</p>
                        </li>
                        <div class="our-work-modal hidden" id="ourWorkModal_{{ $job->id }}">
                            <div class="modal">
                                <div class="modal-box">
                                    <!-- Close Button (X) -->
                                    <button class="close-modal-btn" data-modal-id="ourWorkModal_{{ $job->id }}">X
                                    </button>
                                    <div class="modal-carousel-box">
                                        <div class="center modal-center">
                                            <div class="wrapper modal-wrapper">
                                                <div class="inner modal-inner" id="modalInner_{{ $job->id }}">
                                                    @foreach($job->files as $file)
                                                        <div class="card modal-card">
                                                            <div class="content modal-content">
                                                                <img src="{{ asset('public/files/'.$file->file) }}"
                                                                     alt="arif solar" width="562" height="480">
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        <div class="map modal-map" id="modalMap_{{ $job->id }}">
                                            @foreach ($job->files as $key => $file)
                                                <button class="{{ $loop->first ? 'active' : '' }}"
                                                        data-index="{{ $key }}"></button>
                                            @endforeach
                                        </div>
                                    </div>

                                    <p class="modal-desc">
                                        {!! $job->description !!}
                                    </p>
                                </div>
                            </div>
                            <div class="overlay" id="modalOverlay_{{ $job->id }}"></div>
                        </div>
                    @endforeach
                </ul>
                <br>
                <button class="our-jobs-item-btn">@lang("front.again")</button>
            </div>
        </section>
    @endif

    @if(count($reviews))
        <section class="about-customer" id="review_section">
            <div class="container">
                <div style="display: flex; align-items: center; justify-content: space-between;  margin-bottom: 48px;">
                    <div class="work-title-box about-customer-title-box">
                        <span class="about-title-line"></span>
                        <h3 class="work-title">@lang('front.review_title') <span
                                class="work-title-span">@lang("front.review_des") </span></h3>
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
                                @php $m =1; @endphp
                                @foreach($reviews as $review)
                                    <article class="cCarousel-item">
                                        <video style="object-fit: cover;" id="aboutCustomerVideo{{ $m }}">
                                            <source src="{{ asset("public/files/".$review->video)}}" type="video/mp4">
                                        </video>
                                        <button class="about-customr-video-play aboutCustomerVideoBtnNew"
                                                button-id="{{ $m++ }}">
                                            <svg class="about-customr-video-play-img" width="72" height="72"
                                                 viewBox="0 0 72 72" fill="none" xmlns="http://www.w3.org/2000/svg">
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
        <section class="customer-opinion about-customer" id="comment_section">
            <div class="container">
                <div style="display: flex; align-items: center; justify-content: space-between;  margin-bottom: 48px;">
                    <div class="work-title-box about-customer-title-box">
                        <span class="about-title-line"></span>
                        <h3 class="work-title">@lang('front.comment_title') <span
                                class="work-title-span">@lang('front.comment_des') </span></h3>
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
                                            {!! $comment->comment !!}
                                        </p>
                                        <a class="customer-opinion-item-link"></a>
                                        <span class="customer-opinion-item-line"></span>
                                        <div class="customer-opinion-item-box"
                                             style="display: flex; align-items: center; gap: 8px; margin-top: 23px;">
                                            <img src="{{ asset("public/files/vector-person.svg")}}" alt="vector">
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
        <section class="news about-customer" id="news_section">
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
                                        <img class="news-item-img" src="{{ asset("public/files/".$new->image)}}"
                                             alt="{{ $new->img_alt }}" width="386" height="220"
                                             style="margin-bottom: 28px;">
                                        <h4 class="news-item-title">{{ $new->title }}</h4>
                                        <p class="news-item-desc"> {!! substr($new->description,0,150) !!} ...</p>
                                        <div
                                            style="display: flex; align-items: center; justify-content: space-between; margin: 0 16px;">
                                            <p class="news-item-box-date">{{ \Carbon\Carbon::parse($new->created_at)->locale('en')->translatedFormat('d-M, Y') }}</p>
                                            <a class="news-item-box-link OurNews" id="newsItemBoxLink"
                                               data-new-id="{{ $new->id }}">Batafsil</a>
                                        </div>
                                    </article>

                                    <div class="our-news-modal hidden" id="ourNewsModal_{{ $new->id }}">
                                        <div class="modal">
                                            <div class="modal-box">
                                                <!-- Close Button (X) -->
                                                <button class="close-modal-btn"
                                                        data-modal-id="ourNewModal_{{ $new->id }}">X
                                                </button>
                                                <div class="modal-carousel-box">
                                                    <div class="center modal-center">
                                                        <div class="wrapper modal-wrapper">
                                                            <div class="inner modal-inner"
                                                                 id="modalInnerNews_{{ $new->id }}">
                                                                @foreach($new->files as $file)
                                                                    <div class="card modal-card">
                                                                        <div class="content modal-content">
                                                                            <img
                                                                                src="{{ asset('public/files/'.$file->file) }}"
                                                                                alt="img" width="562" height="480">
                                                                        </div>
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="map modal-map modal-map-news"
                                                         id="modalMapNews_{{ $new->id }}">
                                                        @foreach ($new->files as $key => $file)
                                                            <button class="{{ $loop->first ? 'active' : '' }}"
                                                                    data-index="{{ $key }}"></button>
                                                        @endforeach
                                                    </div>
                                                </div>

                                                <p class="modal-desc">
                                                    {!! $new->description !!}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="overlay" id="modalOverlay_{{ $job->id }}"></div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </section>
    @endif

    @if(count($consultations))
        <section class="free-tial-section about-customer" id="consultation_section">
            <div class="container">
                <div style="  margin-bottom: 64px;">
                    <div class="work-title-box about-customer-title-box">
                        <span class="about-title-line"></span>
                        <h3 class="work-title">@lang("front.consul_title") <span
                                class="work-title-span">@lang("front.consul_title_1")</span></h3>
                    </div>
                </div>
                <div class="free-tial-box">
                    <div class="free-tial-carousel-box">
                        <div class="center">
                            <div class="wrapper">
                                <div class="inner" id="slides">
                                    @foreach($consultations as $consultation)
                                        <div class="card" id="innerConsultation_{{ $consultation->id }}">
                                            <div class="content">
                                                <h1 class="free-tial-item-title">{{ $consultation->title }}</h1>
                                                <p class="free-tial-item-desc">{!! $consultation->description !!}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="map" id="buttonsWrapper">
                            @foreach($consultations as $key => $consultation)
                                <button class="{{ $key === 0 ? 'active' : '' }}" data-index="{{ $key }}"></button>
                            @endforeach
                        </div>
                    </div>
                    <div class="free-tial-contact">
                        <h3 class="free-tial-contact-title">@lang("front.consul_title") @lang("front.consul_title_1")</h3>
                        <p class="free-tial-contact-desc">@lang("front.consult_info")</p>
                        <form id="freeTialContactForm" action="{{ route("notification") }}" method="POST">
                            @csrf
                            <input class="hero-name-input free-tial-contact-input" type="text" name="Name"
                                   placeholder="@lang("front.name")">
                            <input class="hero-tel-input free-tial-contact-input" id="free-tial-tell"
                                   style="margin-bottom: 58px;" type="tel" name="phone" placeholder="+998 99 -000-00-00"
                                   required value="+998">
                            <button class="free-tial-contact-btn">@lang("front.send_request")</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    @endif

    @if(count($partners))
        <section class="partners about-customer" id="partner_section">
            <div class="container">
                <div style="  margin-bottom: 64px;">
                    <div class="work-title-box about-customer-title-box">
                        <span class="about-title-line"></span>
                        <h3 class="work-title">@lang("front.partner_title") <span
                                class="work-title-span">@lang("front.partner")  </span></h3>
                    </div>
                </div>
                <div class="slider">
                    <div class="slide-track">
                        @foreach($partners as $partner)
                            <div class="slide">
                                <img src="{{ asset("public/files/".$partner->image) }}" height="100" width="250"
                                     alt=""/>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    @endif

    <section class="address about-customer" id="address_section">
        <div class="container">
            <div style="margin-bottom: 64px;">
                <div class="work-title-box about-customer-title-box">
                    <span class="about-title-line"></span>
                    <h3 class="work-title">@lang("front.address.title") <span
                            class="work-title-span">@lang("front.address.desc") </span></h3>
                </div>
            </div>
            <div class="address-box">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2998.522063386615!2d69.21282591025435!3d41.27574107119456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8b97917982ad%3A0x75b13338924648ad!2sArif%20Solar%20-%20Quyosh%20panellari!5e0!3m2!1sru!2s!4v1733936264234!5m2!1sru!2s"
                    width="600" height="400" style="border:0; border-radius: 16px;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                <ul class="address-list">
                    <li class="address-item">
                        <img src="{{ asset("front/images/phone-icon.svg")}}" alt="phone" width="64" height="64">
                        <p class="address-item-desc">
                            @lang("front.phone"): <br>
                            <span>+998 (71) 203 00 56</span>
                        </p>
                    </li>
                    <li class="address-item">
                        <img src="{{ asset("front/images/location-icon.svg")}}" alt="phone" width="64" height="64">
                        <p class="address-item-desc">
                            @lang("front.add"): <br>
                            <span>@lang("front.address_tr")</span>
                        </p>
                    </li>
                    <li class="address-item">
                        <img src="{{ asset("front/images/mail-icon.svg")}}" alt="mail" width="64" height="64">
                        <p class="address-item-desc">
                            @lang("front.email"): <br>
                            <span>salesuzexim@gmail.com</span><br>
                            <span>ceo@arif.uz</span>
                        </p>
                    </li>
                    <li class="address-item">
                        <img src="{{ asset("front/images/clock-icon.svg")}}" alt="clock" width="64" height="64">
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
        <section class="questions about-customer" id="question_section">
            <div class="container">
                <div style="  margin-bottom: 64px;">
                    <div class="work-title-box about-customer-title-box">
                        <span class="about-title-line"></span>
                        <h3 class="work-title">@lang("front.question_title") <span
                                class="work-title-span"> @lang("front.question_title_1")   </span></h3>
                    </div>

                </div>
                <div class="questions-list">
                    @foreach($questions as $question)
                        <div class="questions-item" id="questionsItem_{{ $question->id }}">
                            <div class="questions-item-box">
                                <h5 class="questions-item-title">{{ $question->title }}</h5>
                                <button class="questions-item-btn"></button>
                            </div>
                            <p class="questions-item-desc">{{ $question->description }}</p>
                        </div>
                    @endforeach
                </div>
        </section>
    @endif

</main>

<footer>
    <div class="container">
        <h3 class="footer-title">@lang('front.reserved') © Arifsolar.uz</h3>
    </div>
</footer>

<div class="hamburger-modal hidden" style="transition: 0.3s;">
    <div class="container" style="display: flex; align-items: center; justify-content: space-between;">
        <div class="hamburger-modal-box">
            <a href="tel:712030056" class="header-tell">
                <img class="header-tell-img" src="{{ asset("front/images/phone-vector.svg") }}" alt="phone" width="24" height="24">
                71 203 00 56
            </a>
            <span class="header-left-line"></span>
            <a class="header-telegram-icon" href="https://t.me/arifsolar" >
                <img src="{{ asset("front/images/telegram-icon.svg") }}" alt="telegram" width="44" height="44">
            </a>
            <span class="header-left-line"></span>
            <a href="{{ route("language",$lang) }}">
                <button class="header-lang-icon">
                    <img src="{{ asset("front/images/$img") }}" alt="language" width="44" height="44">
                </button>
            </a>
        </div>
        <button class="close-hamburger-modal"></button>
    </div>
</div>

</body>
<script src="{{ asset("front/js/index.js")}}"></script>
<script src="{{ asset("front/js/carousel.js")}}"></script>
<script src="{{ asset("front/js/new.js")}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
@if(Session::get('success'))
    <script>
        toastr.success("Siz bilan tez orada mutaxassislarimiz bog‘lanishadi!");
    </script>
@endif
</html>
