@extends('test.layout')
@section('amany')
<div id="banner-area" class="banner-area" style="background-image:url(images/banner/banner1.jpg)">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">Pricing</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item"><a href="#">company</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Pricing</li>
                    </ol>
                </nav>
              </div>
          </div>
        </div>
    </div>
  </div>
</div>

<section id="main-container" class="main-container">
  <div class="container">
    <div class="row text-center">
      <div class="col-12">
        <h2 class="section-title">Grab the Packages</h2>
        <h3 class="section-sub-title">Pricing</h3>
      </div>
    </div>

    <div class="row">

      <div class="col-lg-4 col-md-6">
        <div class="ts-pricing-box">
          <div class="ts-pricing-header">
            <h2 class="ts-pricing-name">Building Remodels</h2>
            <h2 class="ts-pricing-price">
              <span class="currency">$</span><strong>89.9</strong><small>/Month</small>
            </h2>
          </div>
          <div class="ts-pricing-features">
            <ul class="list-unstyled">
              <li>Project Management for Owners</li>
              <li>Pre-construction feasibility</li>
              <li>On-site representation</li>
              <li>Quality control inspections</li>
              <li>Schedule claim preparation/defense</li>
              <li>Project phasing development</li>
            </ul>
          </div>
          <div class="plan-action">
            <a href="#" class="btn btn-dark">Order Now</a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="ts-pricing-box ts-pricing-featured">
          <div class="ts-pricing-header">
            <h2 class="ts-pricing-name">Renovation</h2>
            <h2 class="ts-pricing-price">
              <span class="currency">$</span><strong>179.9</strong><small>/Month</small>
            </h2>
          </div>
          <div class="ts-pricing-features">
            <ul class="list-unstyled">
              <li>Project Management for Owners</li>
              <li>Pre-construction feasibility</li>
              <li>On-site representation</li>
              <li>Quality control inspections</li>
              <li>Schedule claim preparation/defense</li>
              <li>Project phasing development</li>
            </ul>
          </div>
          <div class="plan-action">
            <a href="#" class="btn btn-primary">Order Now</a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="ts-pricing-box">
          <div class="ts-pricing-header">
            <h2 class="ts-pricing-name">Home Construction</h2>
            <h2 class="ts-pricing-price">
              <span class="currency">$</span><strong>279.9</strong><small>/Month</small>
            </h2>
          </div>
          <div class="ts-pricing-features">
            <ul class="list-unstyled">
              <li>Project Management for Owners</li>
              <li>Pre-construction feasibility</li>
              <li>On-site representation</li>
              <li>Quality control inspections</li>
              <li>Schedule claim preparation/defense</li>
              <li>Project phasing development</li>
            </ul>
          </div>
          <div class="plan-action">
            <a href="#" class="btn btn-dark">Order Now</a>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>
@endsection
