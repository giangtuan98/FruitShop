@extends('layouts.app')

@include('layouts.header')

@section('content')
  <section class="section section-top patern gap-up-1-top">
    <div class="container text-center">
      <h1>contacts</h1>
      <nav class="breadcrumb">
        <a class="breadcrumb-item" href="index-2.html">Home</a>
        <span class="breadcrumb-item active">Contacts</span>
      </nav>
    </div>
  </section>
  <section class="section-pre-contacts gap-down-2">
    <div class="heading">
      <div class="heading-wrap">
        <h2 class="heading-title">If you have any questions <b>contact with us</b></h2>
        <h5 class="heading-subtitle">Write to Us</h5>
      </div>
    </div>
  </section>
  <!-- SECTION CONTACTS -->
  <section class="section section-contacts section-contacts-inner patern">
    <div class="container">
      <div class="row justify-content-end">

        <div class="col-lg-7 col-md-12">
          <div class="contacts-wrap">
            <div class="row">
              <div class="col-md-5">
                <h3>Contacts</h3>
                <ul class="contacts contacts-inner">
                  <li><a href="#?"><i class="fa fa-location-arrow"></i><span>114 Sutton Ct Rd, Chiswick, London</span></a>
                  </li>
                  <li><a href="tel:413126789"><i class="fa fa-phone"></i><span>039-866-9765</span></a></li>
                  <li><a href="mailto:cruzdelsur@hotmail.com"><i
                        class="fa fa-envelope-o"></i><span>baokhanhrm74@gmail.com</span></a></li>
                </ul>
                <h3>Follow Us</h3>
                <ul class="social social-inner">
                  <li><a href="#?"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#?"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="#?"><i class="fa fa-vk"></i></a></li>
                  <li><a href="#?"><i class="fa fa-twitter"></i></a></li>
                </ul>
              </div>
              <div class="col-md-7">
                <div class="contact-form">
                  <h3>Send us a message</h3>
                  <form>
                    <div class="form-row">
                      <div class="form-group col-lg-12 ml-auto">
                        <input type="text" class="form-control contact-form-item" id="contact-name" placeholder="Name"
                          required>
                      </div>
                      <div class="form-group col-lg-12 ml-auto">
                        <input type="email" class="form-control contact-form-item" id="contact-email" placeholder="E-mail"
                          required>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-lg-12 ml-auto">
                        <textarea placeholder="Write a message" class="form-control contact-form-item" id="Message"
                          rows="8" required></textarea>
                      </div>
                    </div>
                    <div class="contact-btn">
                      <input type="submit" class="btn btn-primary btn-lg" value="Send">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="section-map-inner">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.113240922961!2d105.80123181531806!3d21.028154485998826!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab424a50fff9%3A0xbe3a7f3670c0a45f!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBHaWFvIHRow7RuZyBW4bqtbiB04bqjaSAoVVRDKQ!5e0!3m2!1svi!2s!4v1608393326220!5m2!1svi!2s"
        width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
        tabindex="0"></iframe>
    </div>
  </section>
  <!-- SECTION PARTNERS -->
  <section class="section section-partners gap-up-1">
    <div class="container">
      <div class="partners-wrap text-center">
        <div class="row justify-content-center">
          <div class=" col-lg-2 col-md-4 col-6">
            <div class="partners-img-wrap">
              <a href="#?"><img src="img/hipster.png" alt="hipster"></a>
            </div>
          </div>
          <div class=" col-lg-2 col-md-4 col-6">
            <div class="partners-img-wrap">
              <a href="#?"><img src="img/vintage.png" alt="vintage"></a>
            </div>
          </div>
          <div class=" col-lg-2 col-md-4 col-6">
            <div class="partners-img-wrap">
              <a href="#?"><img src="img/retro.png" alt="retro"></a>
            </div>
          </div>
          <div class=" col-lg-2 col-md-4 col-6">
            <div class="partners-img-wrap">
              <a href="#?"><img src="img/creatives.png" alt="creatives"></a>
            </div>
          </div>
          <div class=" col-lg-2 col-md-4 col-6">
            <div class="partners-img-wrap">
              <a href="#?"><img src="img/vintage-97.png" alt="vintage"></a>
            </div>
          </div>
          <div class=" col-lg-2 col-md-4 col-6">
            <div class="partners-img-wrap">
              <a href="#?"><img src="img/creatives-design.png" alt="creatives-design"></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
