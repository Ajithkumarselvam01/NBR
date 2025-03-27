@extends('website-layout')

@section('css')

<style>
  .Main-form-div .mfp-content {
    width: 100% !important;
    margin: auto;
    background: none;
    padding: 0;
    color: black;
}
.Main-form-div .white-popup {
    padding: 20px;
}
    .seopage-banner-text-wrapper p {
        font-size: 16px;
        margin-top: 40px;
    }

    .breadcrumb-wrapper ol li::after {
        content: "/";
        position: absolute;
        font-size: 19px;
        right: -11px;
        bottom: -2px;
    }

    .breadcrumb-wrapper ol li {
        margin-right: 15px;
    }

    .breadcrumb-wrapper ol li:last-child::after {
        content: none;
    }

    h1,
    h3 {
        font-family: "Scheherazade New", serif;
        color: #274992;
        font-size: 40px;
        font-weight: 400;
        font-style: normal;
        margin-top: 0;
    }
    .floorplan-slider .owl-nav {
        margin-bottom: 20px;
    }

    @media only screen and (max-width: 479px) {

        h1,
        h3 {
            font-size: 24px;
        }
    }
    @media (min-width: 1400px) {
.seopage-banner-content {
    top: 50px;
}
}
</style>
<title>{!! $data->seo_title !!}</title>
<meta name="description" content="{!! $data->seo_description !!}" />
<meta name="keywords" content="{!! $data->seo_keywords !!}">
@if (!empty($data) && isset($data['seo_google_indexing']) && $data['seo_google_indexing'] == 'YES' && 
    !Request::is('seo-old/*') && !Request::is('seopage/*'))
    <meta name="robots" content="INDEX, FOLLOW">
@else
    <meta name="robots" content="NOINDEX, NOFOLLOW">
@endif
@endsection

@section('main')
<div class="seo-body-font content">
    <section class="seopage mb-mt-110">
        <div class="seopage-banner">
        @if (!empty($data->desktop_banner) && !empty($data->mobile_banner))
    <picture>
        <source media="(min-width: 768px)" srcset="/{{$data->desktop_banner}}" class="banner-img">
        <source media="(max-width: 768px)" srcset="/{{$data->mobile_banner}}">
        <img src="/{{$data->desktop_banner}}" style="opacity: 1;width: 100%;height: 100%">
    </picture>
@else
    <picture>
        <source media="(min-width: 768px)" srcset="{{ asset('assets/new-website/images/seo-desktop-banner.webp') }}" alt="NBR Luxury Apartment" class="banner-img">
        <source media="(max-width: 768px)" srcset="{{ asset('assets/new-website/images/seo-mobile-banner.webp') }}" alt="NBR Luxury Apartment">
        <img src="{{ asset('assets/new-website/images/seo-desktop-banner.webp') }}" alt="NBR Luxury Apartment" style="opacity: 1;width: 100%;height: 100%">
    </picture>
@endif

            @if (!empty($data ->banner_text))
            <div class="seopage-banner-content">
                <div class="seopage-banner-text-wrapper">
                    {!! $data->banner_text !!}
                    <div class="banner-enquiry-btn">
                        <a href="javascript:void(0)" data-magpopup="#enquiryForm" class="open-popup-link-new">Click to Know</a>
                    </div>
                    <div class="form-sec" style="display: none;">
                    <form action="https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8&orgId=00DKj000008PAOr" id="enquiryForm" method="post" class="form form_pop">
                        <input type=hidden name="oid" value="00DKj000008PAOr">
                        <input type=hidden name="retURL" value="http://www.nbrgroup.in/thank-you">
                        <input type="hidden" id="lead_source" name="lead_source" value="Website" />

                        <div class="input-box-1">
                            <input type="text" name="last_name" id="last_name" placeholder="Name:" required="">
                        </div>
                        <div class="input-box-1">
                            <input type="text" name="phone" id="phone" placeholder="Phone:" required="">
                        </div>
                        <div class="input-box-1">
                            <input type="email" name="email" id="email" placeholder="Email:" required="">
                        </div>
                        <div class="btn-group-1 contact-btn-1">
                            <button type="submit" id="button" class="_animate">SUBMIT</button>
                            <div class="loading"></div>
                        </div>
                        <input type="hidden" name="form_name" value="Enquiry Form">
                        <input id="00NKj00000rOVGr" placeholder=" Website URL" maxlength="255" name="00NKj00000rOVGr" size="20" type="hidden" value="{{ url()->current() }}" />
                    </form>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </section>


    @if (!empty($data ->breadcrumb))
    <section>
        <div class="breadcrumb-wrapper">
            <nav aria-label="breadcrumb">
                {!! $data ->breadcrumb !!}
            </nav>
        </div>
    </section>
    @endif
    @if (!empty($data->seo_h1_title))
    <section>
        <div class="luxury-apartment-wrapper">
            {!! $data->seo_h1_title !!}
        </div>
    </section>
    @endif
    @if (!empty($data->about_project))
    <section>
        <div class="highrise-wrapper">
            <div class="row row-0 ">
                <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-sm-12 col-0 pd-rt">
                    <div class="highrise-content">
                        {!!$data->about_project!!}
                        <a href="/customer-enquiry/">
                            <div class="discover-btn title-font">
                                <button>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="20" viewBox="0 0 24 25" fill="none">
                                            <path d="M16.175 13.5H4V11.5H16.175L10.575 5.9L12 4.5L20 12.5L12 20.5L10.575 19.1L16.175 13.5Z" fill="white" />
                                        </svg>
                                    </span>
                                    <p>KNOW MORE</p>
                                </button>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7 col-sm-12 col-0 pd-lt">
                    <div class="highrise-apartment-img">
                        <img src="{{ asset('assets') }}/new-website/images/highrise-apartment-new.webp" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif

    <!-- Why Choose Section -->

    @php
    $whyChoose = json_decode($data->why_choose_project, true);
    
    @endphp
    @if (!empty($whyChoose))

    <section>
        <div class="why-choose-nbr-seo-wrapper">
            <div class="row row-0">
                <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-sm-12 col-0 pd-rt">
                    <div class="why-choose-nbr-seo-img-wrapper">
                    <h3 class="title-font title-color mobile-title">{!!$data->why_choose_proj_title!!}</h3>
                        <!-- @foreach ($whyChoose as $index => $item)
                        @php
                        $targetImgClass = ($index + 1) . '-img';
                        @endphp
                        <div class="why-choose-nbr-seo-img {{$targetImgClass}} {{ $index == 0 ? 'active' : '' }}">
                            <img src=" /{{$item['image']}}" alt="">
                        </div>
                        @endforeach -->
                        <div class="why-choose-nbr-seo-img 1-img active">
                            <img src="{{ asset('assets') }}/new-website/images/why-choose-nbr-seo-1.webp" alt="Why Choose NBR Group for Apartments in Sarjapur Road?">
                        </div>
                        <div class="why-choose-nbr-seo-img 2-img">
                            <img src="{{ asset('assets') }}/new-website/images/why-choose-nbr-seo-2.webp" alt=" Green Spaces and Open Areas">
                        </div>
                        <div class="why-choose-nbr-seo-img 3-img">
                            <img src="{{ asset('assets') }}/new-website/images/why-choose-nbr-seo-3.webp" alt="Modern Designs and Smart Homes ">
                        </div>
                        <div class="why-choose-nbr-seo-img 4-img">
                            <img src="{{ asset('assets') }}/new-website/images/why-choose-nbr-seo-4.webp" alt="Wide Range of Lifetime Amenities ">
                        </div>
                        <div class="why-choose-nbr-seo-img 5-img">
                            <img src="{{ asset('assets') }}/new-website/images/why-choose-nbr-seo-5.webp" alt="Breathtaking Views From Expansive Balconies">
                        </div>
                    </div>
                </div>
                <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7 col-sm-12 col-0 pd-lt">
                    <div class="why-choose-nbr-accordion">
                        <div class="accordion-wrapper">
                            <div class="accordion faq-accordion" id="accordionExample">
                                <h3 class="title-font title-color">{!!$data->why_choose_proj_title!!}</h3>
                                @foreach ($whyChoose as $index => $item)
                                @php
                                $headingId ='heading' . ($index + 1);
                                $targetImgClass = '.'.($index + 1) . '-img';
                                $collapseId = 'collapse' . ($index+1);
                                @endphp
                                <div class="accordion-item">
                                    <h2 class="accordion-header active" id="{{ $headingId }}" data-why-choose-nbr="{{$targetImgClass}}">
                                        <button class="accordion-button accordion-btn  {{ $index == 0 ? '' : 'collapsed' }}" type="button" data-bs-toggle="collapse" data-bs-target="#{{$collapseId}}" aria-expanded="true" aria-controls="collapseOne">{{$item['title']}}</button>
                                    </h2>
                                    <div id="{{$collapseId}}" class="accordion-collapse collapse {{ $index == 0 ? 'show' : '' }}" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">{{$item['content']}}</div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif
    <!-- Why Choose Section -->
    <!-- Specification Section -->
    <section>
        <div class="specification-wrapper container">
            <h3 class="title-font title-color ">Specifications</h3>
            <div class="row">
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-6">
                    <div class="specification-content">
                        <div class="specification-img">
                            <img src="{{ asset('assets') }}/new-website/images/specification-icon-1.png" alt="STRUCTURE">
                        </div>
                        <h4><b>STRUCTURE</b></h4>
                        <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> -->
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-6">
                    <div class="specification-content">
                        <div class="specification-img">
                            <img src="{{ asset('assets') }}/new-website/images/specification-icon-2.png" alt="PLASTERING & PAINTING">
                        </div>
                        <h4><b>PLASTERING & PAINTING</b></h4>
                        <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> -->
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-6">
                    <div class="specification-content">
                        <div class="specification-img">
                            <img src="{{ asset('assets') }}/new-website/images/specification-icon-3.png" alt="POWER BACKUP">
                        </div>
                        <h4><b>POWER BACKUP</b></h4>
                        <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> -->
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-6">
                    <div class="specification-content">
                        <div class="specification-img">
                            <img src="{{ asset('assets') }}/new-website/images/specification-icon-4.png" alt="ELEVATORS">
                        </div>
                        <h4><b>ELEVATORS</b></h4>
                        <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Specification Section -->
    <!-- Amenities Section -->
    <section>
        <div class="luxury-feature-wrapper">
            <div class="row row-0 row-sm-reverse">
                <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-12 col-0 pd-rt">
                    <div class="luxury-feature-slider-wrapper">
                        <h3 class="title-font title-color ">Luxury Features For <br>
                            The Luxury Life!</h3>
                        <div class=" luxury-feature-slider">
                            <div class="item">
                                <p class="luxury-feature-para">Creating Spaces For Laughter, Love, And Lasting Memories</p>
                                <div class="row">
                                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                        <div class="luxury-feature-content">
                                            <div class="luxury-feature-icon b-l-none">
                                                <img src="{{ asset('assets') }}/new-website/images/luxury-feature-icon-1.png" alt="Yoga Lawn">
                                            </div>
                                            <p>Yoga Lawn</p>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                        <div class="luxury-feature-content">
                                            <div class="luxury-feature-icon">
                                                <img src="{{ asset('assets') }}/new-website/images/luxury-feature-icon-2.png" alt="Urban Farming">
                                            </div>
                                            <p>Urban Farming</p>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                        <div class="luxury-feature-content">
                                            <div class="luxury-feature-icon">
                                                <img src="{{ asset('assets') }}/new-website/images/luxury-feature-icon-3.png" alt="Swimming Pool">
                                            </div>
                                            <p>Swimming Pool</p>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                        <div class="luxury-feature-content">
                                            <div class="luxury-feature-icon">
                                                <img src="{{ asset('assets') }}/new-website/images/luxury-feature-icon-4.png" alt="Kids' Play Area">
                                            </div>
                                            <p>Kids' Play Area</p>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                        <div class="luxury-feature-content">
                                            <div class="luxury-feature-icon b-l-none">
                                                <img src="{{ asset('assets') }}/new-website/images/luxury-feature-icon-5.png" alt="Garden">
                                            </div>
                                            <p>Garden</p>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                        <div class="luxury-feature-content">
                                            <div class="luxury-feature-icon ">
                                                <img src="{{ asset('assets') }}/new-website/images/luxury-feature-icon-6.png" alt="Event Area">
                                            </div>
                                            <p>Event Area</p>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                        <div class="luxury-feature-content">
                                            <div class="luxury-feature-icon">
                                                <img src="{{ asset('assets') }}/new-website/images/luxury-feature-icon-7.png" alt="Pet Park">
                                            </div>
                                            <p>Pet Park</p>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                        <div class="luxury-feature-content">
                                            <div class="luxury-feature-icon">
                                                <img src="{{ asset('assets') }}/new-website/images/luxury-feature-icon-8.png" alt="Golf Play Court">
                                            </div>
                                            <p>Golf Play Court</p>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                        <div class="luxury-feature-content">
                                            <div class="luxury-feature-icon b-l-none">
                                                <img src="{{ asset('assets') }}/new-website/images/luxury-feature-icon-9.png" alt="Walking Trail">
                                            </div>
                                            <p>Walking Trail</p>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                        <div class="luxury-feature-content">
                                            <div class="luxury-feature-icon">
                                                <img src="{{ asset('assets') }}/new-website/images/luxury-feature-icon-10.png" alt="Outdoor Gym">
                                            </div>
                                            <p>Outdoor Gym</p>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                        <div class="luxury-feature-content">
                                            <div class="luxury-feature-icon">
                                                <img src="{{ asset('assets') }}/new-website/images/luxury-feature-icon-11.png" alt="Stage">
                                            </div>
                                            <p>Stage</p>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                        <div class="luxury-feature-content">
                                            <div class="luxury-feature-icon">
                                                <img src="{{ asset('assets') }}/new-website/images/luxury-feature-icon-12.png" alt="Indoor Games">
                                            </div>
                                            <p>Indoor Games</p>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                        <div class="luxury-feature-content">
                                            <div class="luxury-feature-icon b-l-none">
                                                <img src="{{ asset('assets') }}/new-website/images/amphitheatre.png" alt="Amphitheatre">
                                            </div>
                                            <p>Amphitheatre</p>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                        <div class="luxury-feature-content">
                                            <div class="luxury-feature-icon">
                                                <img src="{{ asset('assets') }}/new-website/images/Senior-Citizen-Park.png" alt="Senior Citizen Pavilion">
                                            </div>
                                            <p>Senior Citizen Pavilion</p>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                        <div class="luxury-feature-content">
                                            <div class="luxury-feature-icon">
                                                <img src="{{ asset('assets') }}/new-website/images/Meditation-Lawn.png" alt="Meditation Lawn">
                                            </div>
                                            <p>Meditation Lawn</p>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                        <div class="luxury-feature-content">
                                            <div class="luxury-feature-icon">
                                                <img src="{{ asset('assets') }}/new-website/images/Fitness-Court.png" alt="Picketball Court">
                                            </div>
                                            <p>Picketball Court</p>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                        <div class="luxury-feature-content">
                                            <div class="luxury-feature-icon b-l-none">
                                                <img src="{{ asset('assets') }}/new-website/images/Skating-Rink.png" alt="Skating Rink">
                                            </div>
                                            <p>Skating Rink</p>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                        <div class="luxury-feature-content">
                                            <div class="luxury-feature-icon">
                                                <img src="{{ asset('assets') }}/new-website/images/Fitness-Court.png" alt="Fitness Court">
                                            </div>
                                            <p>Fitness Court</p>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                        <div class="luxury-feature-content">
                                            <div class="luxury-feature-icon">
                                                <img src="{{ asset('assets') }}/new-website/images/Reflexology-Path.png" alt="Reflexology PathReflexology Path">
                                            </div>
                                            <p>Reflexology Path</p>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                        <div class="luxury-feature-content">
                                            <div class="luxury-feature-icon">
                                                <img src="{{ asset('assets') }}/new-website/images/Party-Deck.png" alt="Party Deck">
                                            </div>
                                            <p>Party Deck</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-0 pd-lt">
                    <div class="luxury-feature-img">
                        <img src="{{ asset('assets') }}/new-website/images/luxury-features.webp" alt="NBR Apartment with Luxury Amenities ">
                    </div>
                </div>
            </div>
        </div>
</section>

    <!-- Amenities Section -->
    <!-- Location Hightlights Section -->
    @php
    $location = json_decode($data->location, true); // Decode JSON to array
    @endphp
    @if (!empty($location))
    <section class="" id="">
        <div class="location-seo-wrapper container">
            <div class="row">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="location-slider-wrapper">
                        <div class="location-tab">
                            @foreach ($location as $index => $item)
                            <p data-location=".{{str_replace(' ', '_', $item['title'])}}" class="{{ $index == 0 ? 'active' : '' }}">
                                <img src="/{{$item['icon']}}" alt=""><br>{{$item['title']}}
                            </p>
                            @endforeach
                        </div>
                        <div class=" location-slider">
                            @foreach ($location as $index => $item)
                            <div class="locations {{str_replace(' ', '_', $item['title'])}} {{ $index == 0 ? 'active' : '' }}" data-img=".{{str_replace(' ', '_', $item['title'])}}">
                                <div class="location-slider-content">
                                    <table class="table">
                                        @if(isset($item['location_nearby']) && is_array($item['location_nearby']))
                                        @foreach($item['location_nearby'] as $index => $nearby)
                                        <tr>
                                            <td>{{$nearby['location_name']}}</td>
                                            <td>{{$nearby['location_distance']}}</td>
                                        </tr>
                                        @endforeach
                                        @endif
                                    </table>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="location-seo-img-wrapper">
                    @foreach ($location as $index => $item)
                    <img class="{{str_replace(' ', '_', $item['title'])}} {{ $index == 0 ? 'active' : '' }} location-seo-img" src="/{{$item['image']}}" alt="">
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif
    <!-- Location Hightlights Section  -->
    @php
    $plan = json_decode($data->plan, true); // Decode JSON to array
    @endphp

    @if (!empty($plan))
    <section class="" id="">
        <div class="luxury-redefined-wrapper">
            <div class="luxury-exclusive-title">
                <div class="row row-0">
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-0">
                        <h3 class="title-font title-color ">Luxury Redefined, Exclusively Yours!</h3>
                    </div>
                    <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-12 col-0">
                            {!!$data->plan_content!!}
                    </div>
                </div>
            </div>
            <div class="luxury-enquiry-wrapper">
                <div class="owl-carousel owl-theme floorplan-slider">
                @php
    $planDetails = json_decode($data->plan_details, true) ?? [];
@endphp
                    @foreach($plan as $index => $item)
                    <div class="item">
                        <div class="luxury-enquiry-content">
                            <div class="luxury-exclusive-img">
                                <img src="/{{$item['image']}}" alt="">
                                <div class="enquiry-btn">
                                    <a href="javascript:void(0)" data-magpopup="#floorplanForm" class="open-popup-link-new">Enquire Now</a>

                                </div>
                            </div>
                            <!-- <p>3 BHK | 1953 Sq. Ft.</p> -->

                            <!-- Properly Display Plan Details -->
                            @if(!empty($planDetails) && isset($planDetails[$index]))
                                <p>{{ $planDetails[$index] }}</p>
                            @endif
                            </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    @endif

    @if (!empty($data->seo_about_content_1))

    <section class="" id="">
        <div class="luxury-apatment-wrapper">
            <div class="luxury-apatment-content-wrapper">
                <div class="row row-0 row-sm-reverse">
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-0">
                        <div class="luxury-apatment-content">
                            {!!$data->seo_about_content_1!!}
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-0 pd-lt">
                        <div class="luxury-apatment-img">
                            <img src="{{ asset('assets') }}/new-website/images/luxury-apatment-1.webp" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="luxury-apatment-content-2-wrapper">
                <div class="row row-0 ">
                    <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-sm-12 col-0 pd-rt">
                        <div class="luxury-apatment-img luxury-apatment-img-2">
                            <img src="{{ asset('assets') }}/new-website/images/luxury-apatment-2.webp" alt="">
                        </div>
                    </div>
                    <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7 col-sm-12 col-0">
                        <div class="luxury-apatment-content-2">
                            {!!$data->seo_about_content_2!!}
                        </div>
                    </div>
                </div>
            </div>

            <div class="luxury-apatment-content-3-wrapper">
            <div class="row row-0 row-sm-reverse">
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-0">
                    <div class="luxury-apatment-content-3">
                    {!!$data->seo_about_content_3!!}
                    </div>
                </div>
            </div>
            </div>

        </div>
</div>
</section>
@endif
@if (!empty($data ->why_choose_project_2))
<section class="why-choose-nbr-sarjapur">
    <div class="why-choose-nbr-sarjapur-wrapper">
        <div class="why-choose-nbr-sarjapur-content">
            {!!$data->why_choose_project_2!!}
        </div>
    </div>
</section>
@endif
@if (!empty($data ->booking_process))
<section>
    <div class="booking-wrapper">
        <div class="booking-title">
            <h3>PROCESS FOR BOOKING YOUR APARTMENT</h3>
        </div>
        <div class="container">
            <div class="booking-content">
                {!!$data->booking_process!!}
            </div>
            <div class="book-now-btn">
                <a href="javascript:void(0)" data-magpopup="#bookForm" class="open-popup-link-new">BOOK NOW</a>
            </div>
        </div>
    </div>
</section>
@endif

<!-- FAQ Section -->

@php
$seo_faq = json_decode($data->seo_faq, true); // Decode JSON to array
@endphp
@if (!empty($seo_faq))
<section id="acccordion" class="seo-accordion">
    <div class="container">
        <h3 class="title-font-2 text-center">FAQs</h3>
        <div class="accordion-wrapper" itemscope itemtype="https://schema.org/FAQPage">
            <div class="accordion faq-accordion" id="accordionExample">
                @foreach ($seo_faq as $index => $item)
                @php
                $faqCollapseId = 'collapse_'. ($index + 1);
                $faqHeadingId = 'heading_'. ($index + 1);
                @endphp
                <div class="accordion-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <h2 class="accordion-header" id="{{ $faqHeadingId }}">
                        <button class="accordion-button accordion-btn {{ $index == 0 ? '' : 'collapsed' }}" type="button" data-bs-toggle="collapse" data-bs-target="#{{ $faqCollapseId }}" aria-expanded="true" aria-controls="collapse_1" itemprop="name">{{$item['title']}}</button>
                    </h2>
                    <div id="{{ $faqCollapseId }}" class="accordion-collapse collapse {{ $index == 0 ? 'show' : '' }}" aria-labelledby="heading_1" data-bs-parent="#accordionExample">
                        <div class="accordion-body" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                            <div itemprop="text">{{$item['description']}}</div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endif
<!-- FAQ Section -->
<section>
    <div class="container">
        <div class="sitevisitForm " autocomplete="off" id="">
            <h3 class="title-font-2 text-center">Schedule A Site Visit</h3>
            <form action="https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8&orgId=00DKj000008PAOr" id="sitevisitForm" method="post" class="form">
                <input type=hidden name="oid" value="00DKj000008PAOr">
                <input type=hidden name="retURL" value="http://www.nbrgroup.in/thank-you">
                <input type="hidden" id="lead_source" name="lead_source" value="Website" />
                <div class="row">
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                        <div class="input-box">
                            <input type="text" name="last_name" id="last_name" placeholder="Name" required="" class="requiredfield">
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                        <div class="input-box">
                            <input type="text" name="phone" id="phone" placeholder="Phone" required="" class="requiredfield">
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                        <div class="input-box">
                            <input type="email" name="email" id="email" placeholder="Email" required="" class="requiredfield">
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-6 pd-rt-0">
                        <div class="input-box date-input">
                            <input type="date" name="00NKj00000k7oXl" id="date" placeholder="Date" required="" class="requiredfield">
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-6 col-xs-6 pd-lt-0">
                        <div class="input-box time-input">
                            <input type="time" name="time" id="time" placeholder="Time" required="" class="requiredfield">
                        </div>
                    </div>
                </div>
                <div class="check-box">
                    <input type="checkbox" id="terms_conditions" name="terms_conditions" required checked>
                    <label for="checkbox">I hereby authorize NBR to send notifications on SMS/ Messages/ Promotional/ Informational Messages</label>
                </div>

                <div class="btn-group sitevisit-btn">
                    <button type="submit" id="button" class="_animate">SUBMIT</button>
                    <div class="loading"></div>
                </div>
                <input type="hidden" name="form_name" value="Site Visit Form">
                <input id="00NKj00000rOVGr" placeholder=" Website URL" maxlength="255" name="00NKj00000rOVGr" size="20" type="hidden" value="{{ url()->current() }}" />
        </div>
        </form>
    </div>
    </div>
</section>
<div class="enquiryForm mfp-hide" autocomplete="off" id="popup-form">
    <form action="https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8&orgId=00DKj000008PAOr" id="enquiryForm" method="post" class="form popupform">
        <h3 class="text-center">Enquiry Form</h3>

        <input type=hidden name="oid" value="00DKj000008PAOr">
        <input type=hidden name="retURL" value="http://www.nbrgroup.in/thank-you">
        <input type="hidden" id="lead_source" name="lead_source" value="Website" />

        <div class="input-box">
            <input type="text" name="last_name" id="last_name" placeholder="Name:" required="">
        </div>
        <div class="input-box">
            <input type="text" name="phone" id="phone" placeholder="Phone:" required="">
        </div>
        <div class="input-box">
            <input type="email" name="email" id="email" placeholder="Email:" required="">
        </div>
        <div class="btn-group contact-btn">
            <button type="submit" id="button" class="_animate">SUBMIT</button>
            <div class="loading"></div>
        </div>
        <input type="hidden" name="form_name" value="Enquiry Form">
        <input id="00NKj00000rOVGr" placeholder=" Website URL" maxlength="255" name="00NKj00000rOVGr" size="20" type="hidden" value="{{ url()->current() }}" />
    </form>
</div>
<div class="floorplanForm mfp-hide" autocomplete="off" id="popup-form">
    <form action="https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8&orgId=00DKj000008PAOr" id="floorplanForm" method="post" class="form popupform">
        <h3 class="text-center">Download Floor Plan</h3>
        <input type=hidden name="oid" value="00DKj000008PAOr">
        <input type=hidden name="retURL" value="http://www.nbrgroup.in/thank-you">
        <input type="hidden" id="lead_source" name="lead_source" value="Website" />
        <div class="input-box">
            <input type="text" name="last_name" id="last_name" placeholder="Name:" required="">
        </div>
        <div class="input-box">
            <input type="text" name="phone" id="phone" placeholder="Phone:" required="">
        </div>
        <div class="input-box">
            <input type="email" name="email" id="email" placeholder="Email:" required="">
        </div>
        <div class="btn-group contact-btn">
            <button type="submit" id="button" class="_animate">SUBMIT</button>
            <div class="loading"></div>
        </div>
        <input type="hidden" name="form_name" value="Plan Form">
        <input id="00NKj00000rOVGr" placeholder=" Website URL" maxlength="255" name="00NKj00000rOVGr" size="20" type="hidden" value="{{ url()->current() }}" />
    </form>
</div>
<div class="bookForm mfp-hide" autocomplete="off" id="popup-form">
    <form action="https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8&orgId=00DKj000008PAOr" id="bookForm" method="post" class="form popupform">
        <h3 class="text-center">Book Now</h3>
        <input type=hidden name="oid" value="00DKj000008PAOr">
        <input type=hidden name="retURL" value="http://www.nbrgroup.in/thank-you">
        <input type="hidden" id="lead_source" name="lead_source" value="Website" />
        <div class="input-box">
            <input type="text" name="last_name" id="last_name" placeholder="Name:" required="">
        </div>
        <div class="input-box">
            <input type="text" name="phone" id="phone" placeholder="Phone:" required="">
        </div>
        <div class="input-box">
            <input type="email" name="email" id="email" placeholder="Email:" required="">
        </div>
        <div class="btn-group contact-btn">
            <button type="submit" id="button" class="_animate">SUBMIT</button>
            <div class="loading"></div>
        </div>
        <input type="hidden" name="form_name" value="Book Form">
        <input id="00NKj00000rOVGr" placeholder=" Website URL" maxlength="255" name="00NKj00000rOVGr" size="20" type="hidden" value="{{ url()->current() }}" />
    </form>
    </div>
    <div id="ohsnap"></div>

    <div class="Main-form-div">
		<div id="project-popup-form" class="white-popup mfp-hide popup-container-1">
			<button class="close-popup mfp-close">&times;</button>
			    <div class="form-section-1">
                    <div class="nbr-logo" style="margin-bottom: 10px;">
                    <a href="https://www.nbrgroup.in"><img src="https://www.nbrgroup.in/assets/new-website/images/NBR-logo-new.gif" alt="logo"></a>
                </div>
				<p>Discover Insights Into High-rise Apartments On Off Sarjapur Road, Tailored Just For You.</p>
				<form action="https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8&orgId=00DKj000008PAOr" class="nbrsalce myform"  method="POST">
					<input type=hidden name="oid" value="00DKj000008PAOr">
					<input type=hidden name="retURL" value="http://www.nbrgroup.in/thank-you">
					<input type="hidden" id="lead_source" name="lead_source" value="Website"/>
					<input type="text" name="last_name" id="last_name" size="20" type="text" placeholder="Full Name" required/>
					<input  id="email" maxlength="80" name="email" size="20" type="email" placeholder="Email" required/>
					<input  id="phone" maxlength="40" name="phone" size="20" type="tel" placeholder="Phone Number" required/>
                    <input id="00NUf000009GcIf" name="00NUf000009GcIf" size="20" type="hidden" value="{{ $data->project_category_id }}" />


					<div class="col-md-12" style="display: none;">
						<input type="text" id="honeypot" name="honeypot">
					</div>

					<div class="col-md-12 mt-3">
						<input type="submit" class="subit-btn-1" name="submit" value="Send Message">
					</div>
				</form>
			</div>
			<div class="info-section-1">
				<div class="info-box-1">
					<img src="https://www.nbrgroup.in/assets/images/building.png" class="star-icon" alt="Building Icon">
					<p>Premium High Rise Apartments </p>
				</div>
				<div class="info-box-1">
					<img src="https://www.nbrgroup.in/assets/images/land.png" class="star-icon" alt="Land Icon">
					<p>10 Acres</p>
				</div>
				<div class="info-box-1">
					<img src="https://www.nbrgroup.in/assets/images/skyline.png" class="star-icon" alt="Skyline Icon">
					<p>5 Min From RGA Tech Park & WIPRO SEZ</p>
				</div>
			</div>
		</div>
	</div>



</div>

@endsection

@section('js')

<script>
$(document).ready(function() {
  // Function to sync heights for a specific section
  function syncHeights(contentSelector, imgSelector) {
    // Get the content div and image container
    var $contentDiv = $(contentSelector);
    var $imgContainer = $(imgSelector);
    
    // Only proceed if both elements exist
    if ($contentDiv.length && $imgContainer.length) {
      // Get the image element
      var $img = $imgContainer.find('img');
      
      // Only proceed if the image exists
      if ($img.length) {
        // Get the content height
        var contentHeight = $contentDiv.outerHeight();
        
        // Set the image container height to match content height
        $imgContainer.height(contentHeight);
        
        // Make the image fill the container while maintaining aspect ratio
        $img.css({
          'height': '100%',
          'object-fit': 'cover'
        });
        
        // Log success for debugging
        console.log('Synced heights for ' + contentSelector + ' and ' + imgSelector);
      } else {
        console.warn('Image not found in ' + imgSelector);
      }
    } else {
      // Log which element is missing for debugging
      if (!$contentDiv.length) console.warn('Content element not found: ' + contentSelector);
      if (!$imgContainer.length) console.warn('Image container not found: ' + imgSelector);
    }
  }
  
  // Function to sync heights for all sections
  function syncAllHeights() {
    // Try to sync each section, but don't stop if one fails
    try {
      syncHeights('.luxury-apatment-content', '.luxury-apatment-img ');
    } catch (e) {
      console.error('Error syncing first luxury apartment section:', e);
    }
    
    try {
      syncHeights('.luxury-apatment-content-2', '.luxury-apatment-img-2');
    } catch (e) {
      console.error('Error syncing second luxury apartment section:', e);
    }
    
    try {
      syncHeights('.luxury-feature-slider-wrapper', '.luxury-feature-img');
    } catch (e) {
      console.error('Error syncing luxury feature section:', e);
    }
    
    try {
      syncHeights('.highrise-content', '.highrise-apartment-img');
    } catch (e) {
      console.error('Error syncing highrise apartment section:', e);
    }
  }
  
  if($(window).innerWidth() > 996){
      // Run on page load
      syncAllHeights();

      // Run when images are loaded (for more accuracy)
      $(window).on('load', syncAllHeights);

      // Additional attempt after a slight delay to handle any delayed rendering
      setTimeout(syncAllHeights, 500);
  }
  
  // Also run on window resize
  $(window).on('resize', syncAllHeights);
  
  
});
</script>
<script>
    (function() {
        'use strict';

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $("#sitevisitForm-Deprecated").submit(function(e) {
            //$(document).on("submit","#sitevisitForm", function(e){

            e.preventDefault();

            var flag = true;
            var formData = new FormData(this);
            var url = "{{route('add-freesitevisit-form-data')}}";

            $('#sitevisitForm .requiredfield').each(function() {
                //console.log($(this).val());
                if ($(this).val() == "" || $(this).val() == null) {
                    $(this).addClass('error-border');
                    flag = false;
                }
            });

            if (flag == true) {
                $.ajax({
                    type: 'POST',
                    url: url,
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: (data) => {

                        $("#sitevisitForm")[0].reset();

                        $('#sitevisitForm .btn-submit').prop('disabled', false);
                        $('#sitevisitForm .btn-submit').text('Submit');

                        $('#sitevisitForm #success_message').fadeIn().css("display", "block").html("Submitted Successfully");

                        setTimeout(function() {
                            $('#sitevisitForm #success_message').fadeOut("slow");
                            window.location.replace("https://www.nbrgroup.in/thank-you");
                        }, 2000);

                    },
                    error: function(error) {

                        var err = JSON.parse(error.responseText)['message'];

                        $("#sitevisitForm #error_message").fadeIn().css("display", "block").html("Field(s) required");

                        $('#sitevisitForm .btn-submit').prop('disabled', false);
                        $('#sitevisitForm .btn-submit').text('Submit');
                    }
                });
            }
            setTimeout(function() {
                $('#sitevisitForm .alert-new').fadeOut('slow');
            }, 2000);

        });
    })();
    $(document).ready(function(){
        $('.open-popup-link-new').on('click', function(){
           var magpopup = $(this).data('magpopup');
            $.magnificPopup.open({
                items: {
                    src: magpopup
                },
                type: 'inline',
                midClick: true
            });
        });
    })
   
</script>
<script>
	$(document).ready(function() {
		if(!sessionStorage.getItem('popupShown')) {
			setTimeout(function() {
				$.magnificPopup.open({
					items: {
						src: '#project-popup-form',
						type: 'inline'
					},
					closeOnBgClick: true
				});
				sessionStorage.setItem('popupShown', 'true');
			}, 5000);
		}
	});
	</script>
@endsection






