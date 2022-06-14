@extends('layout')
@section('title')Отель @endsection
@section('content')
    


 <!-- ======= Breadcrumbs ======= -->
 <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Связь с нами</h2>
        <ol>
          <li><a href="/">Home</a></li>
          <li>Связь с нами</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->

  <!-- ======= Contact Section ======= -->


  <section id="contact" class="contact">
    <div class="container">

      <div class="map-section">
        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aad2989ae4bca6e56d4f2f5fd875a4926dddbe645a66f26bc87105afda69d2dc4&amp;&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
      </div>
      <div class="row justify-content-center" data-aos="fade-up">

        <div class="col-lg-10 mt-3">

          <div class="info-wrap">
            <div class="row">
              <div class="col-lg-4 info">
                <i class="bi bi-geo-alt"></i>
                <h4>Мы находимся:</h4>
                <p>{{$contact->address}}</p>
              </div>

              <div class="col-lg-4 info mt-4 mt-lg-0">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>{{$contact->email}}</p>
              </div>

              <div class="col-lg-4 info mt-4 mt-lg-0">
                <i class="bi bi-phone"></i>
                <h4>Телефон:</h4>
                <a href="tel:{{$contact->tel}}">
                <p>{{$contact->tel}}</p></a>
              </div>
            </div>
          </div>

        </div>

      </div>

      {{-- <div class="row mt-5 justify-content-center" data-aos="fade-up">
        <div class="col-lg-10">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div> --}}

    </div>
  </section><!-- End Contact Section -->


@endsection