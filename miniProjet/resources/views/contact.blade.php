 <!-- /contact-section -->
 @extends('layouts.app')

 @section('content')

 <section class="w3l-contact-2 py-5" id="contact">
    <div class="container py-lg-5 py-md-4 py-2">
      <div class="title-content text-center">
      @if(session('success'))
        <p class="alert alert-success" role="alert">{{ session('success') }}</p>
        @endif
        <h6 class="title-subhny text-center">Contact Us</h6>
        <h3 class="title-w3l mb-sm-5 mb-4 pb-sm-o pb-2 text-center">Send a Message</h3>
      </div>
      <div class="contact-grids d-grid">
        <div class="contact-left-img">
          <div class="cont-details">
            <div class="cont-top margin-up">
              <div class="cont-left text-center">
                <span class="fa fa-map-marker"></span>
              </div>
              <div class="cont-right">
                <h6>Visit Us</h6>
                <p>123, Avenue des Palmiers,
                    Quartier Malabata,
                    90000 Tanger, Maroc</p>
              </div>
            </div>
            <div class="cont-top margin-up">
              <div class="cont-left text-center">
                <span class="fa fa-phone"></span>
              </div>
              <div class="cont-right">
                <h6>Call Us</h6>
                <p><a href="tel:+1(21) 234 4567">+1(212) 660 000 000</a></p>
                <p><a href="tel:+1(21) 234 4567">+1(212) 560 000 000</a></p>
                
              </div>
            </div>
            <div class="cont-top margin-up">
              <div class="cont-left text-center">
                <span class="fa fa-envelope-o"></span>
              </div>
 
            </div>
          </div>
        </div>
        <div class="contact-right">
          <form action="{{ url('/contact')}}" method="POST" class="signin-form">
            @csrf
            <div class="input-grids">

              <input type="text" name="name" id="w3lName" placeholder="Your Name*" class="contact-input"
                required="" />
              <input type="email" name="email" id="w3lSender" placeholder="Your Email*" class="contact-input"
                required="" />
              <input type="text" name="subject" id="w3lSubect" placeholder="Subject*" class="contact-input"
                required="" />

            </div>
            <div class="form-input">
              <textarea name="msg" id="w3lMessage" placeholder="Type your message here*" required=""></textarea>
            </div>
            <div class="form-buttonhny text-lg-right">
              <button type="submit" class="btn btn-style btn-primary">Send Message</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  
  @endsection

  