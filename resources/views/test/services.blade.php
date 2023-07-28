@extends('test.layout')
@section('amany')
<div id="banner-area" class="banner-area" style="background-image:url(images/banner/banner1.jpg)">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">Service</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item"><a href="#">Services</a></li>
                      <li class="breadcrumb-item active" aria-current="page">All Services</li>
                    </ol>
                </nav>
              </div>
          </div>
        </div>
    </div>
  </div>
</div>

<section id="main-container" class="main-container pb-2">
  <div class="container">
    <div class="row">

      <div class="col-lg-4 col-md-6 mb-5">
        <div class="ts-service-box">
            <div class="ts-service-image-wrapper">
              <img loading="lazy" class="w-100" src="images/services/service1.jpg" alt="service-image">
            </div>
            <div class="d-flex">
              <div class="ts-service-box-img">
                  <img loading="lazy" src="images/icon-image/service-icon1.png" alt="service-icon">
              </div>
              <div class="ts-service-info">
                  <h3 class="service-box-title"><a href={{ route('service_single') }}>Zero Harm Everyday</a></h3>
                  <p>You have ideas, goals, and dreams. We have a culturally diverse, forward thinking team looking for talent like. Lorem ipsum dolor suscipit.</p>
                  <a class="learn-more d-inline-block" href={{ route('service_single') }} aria-label="service-details"><i class="fa fa-caret-right"></i> Learn more</a>
                  <a class="learn-more d-inline-block" href={{ route('service_single') }} aria-label="service-details"><i class="fa fa-caret-right"></i> Learn more</a>
              </div>
            </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 mb-5">
        <div class="ts-service-box">
            <div class="ts-service-image-wrapper">
              <img loading="lazy" class="w-100" src="images/services/service2.jpg" alt="service-image">
            </div>
            <div class="d-flex">
              <div class="ts-service-box-img">
                  <img loading="lazy" src="images/icon-image/service-icon2.png" alt="service-icon">
              </div>
              <div class="ts-service-info">
                  <h3 class="service-box-title"><a href={{ route('service_single') }}>Virtual Construction</a></h3>
                  <p>You have ideas, goals, and dreams. We have a culturally diverse, forward thinking team looking for talent like. Lorem ipsum dolor suscipit.</p>
                  <a class="learn-more d-inline-block" href={{ route('service_single') }} aria-label="service-details"><i class="fa fa-caret-right"></i> Learn more</a>
              </div>
            </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 mb-5">
        <div class="ts-service-box">
            <div class="ts-service-image-wrapper">
              <img loading="lazy" class="w-100" src="images/services/service3.jpg" alt="service-image">
            </div>
            <div class="d-flex">
              <div class="ts-service-box-img">
                  <img loading="lazy" src="images/icon-image/service-icon3.png" alt="service-icon">
              </div>
              <div class="ts-service-info">
                  <h3 class="service-box-title"><a href={{ route('service_single') }}>Build To Last</a></h3>
                  <p>You have ideas, goals, and dreams. We have a culturally diverse, forward thinking team looking for talent like. Lorem ipsum dolor suscipit.</p>
                  <a class="learn-more d-inline-block" href={{ route('service_single') }} aria-label="service-details"><i class="fa fa-caret-right"></i> Learn more</a>
              </div>
            </div>
        </div><!-- Service3 end -->
      </div><!-- Col 3 end -->

      <div class="col-lg-4 col-md-6 mb-5">
        <div class="ts-service-box">
            <div class="ts-service-image-wrapper">
              <img loading="lazy" class="w-100" src="images/services/service4.jpg" alt="service-image">
            </div>
            <div class="d-flex">
              <div class="ts-service-box-img">
                  <img loading="lazy" src="images/icon-image/service-icon4.png" alt="service-icon">
              </div>
              <div class="ts-service-info">
                  <h3 class="service-box-title"><a href={{ route('service_single') }}>EXTERIOR DESIGN</a></h3>
                  <p>You have ideas, goals, and dreams. We have a culturally diverse, forward thinking team looking for talent like. Lorem ipsum dolor suscipit.</p>
                  <a class="learn-more d-inline-block" href={{ route('service_single') }} aria-label="service-details"><i class="fa fa-caret-right"></i> Learn more</a>
              </div>
            </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 mb-5">
        <div class="ts-service-box">
            <div class="ts-service-image-wrapper">
              <img loading="lazy" class="w-100" src="images/services/service5.jpg" alt="service-image">
            </div>
            <div class="d-flex">
              <div class="ts-service-box-img">
                  <img loading="lazy" src="images/icon-image/service-icon5.png" alt="service-icon">
              </div>
              <div class="ts-service-info">
                  <h3 class="service-box-title"><a href={{ route('service_single') }}>RENOVATION</a></h3>
                  <p>You have ideas, goals, and dreams. We have a culturally diverse, forward thinking team looking for talent like. Lorem ipsum dolor suscipit.</p>
                  <a class="learn-more d-inline-block" href={{ route('service_single') }} aria-label="service-details"><i class="fa fa-caret-right"></i> Learn more</a>
              </div>
            </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 mb-5">
        <div class="ts-service-box">
            <div class="ts-service-image-wrapper">
              <img loading="lazy" class="w-100" src="images/services/service6.jpg" alt="service-image">
            </div>
            <div class="d-flex">
              <div class="ts-service-box-img">
                  <img loading="lazy" src="images/icon-image/service-icon6.png" alt="service-icon">
              </div>
              <div class="ts-service-info">
                  <h3 class="service-box-title"><a href={{ route('service_single') }}>SAFETY MANAGEMENT</a></h3>
                  <p>You have ideas, goals, and dreams. We have a culturally diverse, forward thinking team looking for talent like. Lorem ipsum dolor suscipit.</p>
                  <a class="learn-more d-inline-block" href={{ route('service_single') }} aria-label="service-details"><i class="fa fa-caret-right"></i> Learn more</a>
              </div>
            </div>
        </div>
      </div>

    </div>
  </div>
</section>
@endsection
