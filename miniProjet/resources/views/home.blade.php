@extends('layouts.app')

@section('content')
  <section class="w3l-banner py-5" id="banner">
    <div class="midd-w3 py-lg-5 py-md-4">
      <div class="container py-lg-2">
        <div class="row">
          <div class="col-lg-6 banner-content align-self pr-lg-5">
            <h5 class="title-subhny mb-2">A Higher Quality of Living</h5>
            <h3 class="">The ideal space to balance life, work and play.</h3>
          <p class="mt-3">Welcome to Estates, your trusted partner in finding the perfect home or investment in Morocco. Whether you are looking for a modern apartment, a traditional riad, or a coastal villa, we offer a wide selection of properties to suit your needs.</p>
            <a href="#btn" class="btn btn-style btn-primary mt-lg-5 mt-4 mr-2">Get Started <span
                class="fa fa-arrow-right  ml-3"></a>
            <a href="#btn" class="btn btn-style btn-outline-dark mt-lg-5 mt-4">Contact Us <span
                class="fa fa-arrow-right  ml-3"></a>
          </div>
          <div class="col-lg-6 text-center mt-lg-0 mt-md-5 mt-4">
            <div class="image-block position-relative">
              <img src="assets/images/1.png" alt="" class="img-fluid mt-lg-0 mt-4">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /bottom-grids-->
  <section class="w3l-bottom-grids-6 py-5" id="services">
    <div class="container py-lg-5 py-md-4 py-2">
      <div class="title-content text-center">
        <h6 class="title-subhny text-center">Our Services</h6>
        <h3 class="title-w3l mb-sm-5 mb-4 pb-sm-o pb-2 text-center">We provide great services</h3>
      </div>
      <div class="grids-area-hny main-cont-wthree-fea row">
        <div class="col-lg-6 col-md-6 grids-feature">
          <div class="area-box icon-blue">
            <span class="fa fa-rebel"></span>
            <h4><a href="#feature" class="title-head">Rent</a></h4>
            <p>Looking for rent? we offer a wide range of rental properties to suit your lifestyle, whether you're seeking a cozy apartment in the heart of Casablanca, a luxurious villa in Marrakech, or a serene beachfront home in Agadir.</p>

          </div>
        </div>
        <div class="col-lg-6 col-md-6 grids-feature mt-md-0 mt-4">
          <div class="area-box icon-pink">
            <span class="fa fa-line-chart"></span>
            <h4><a href="#feature" class="title-head">Buy</a></h4>
            <p>Looking to buy a property in Morocco? Our experts will guide you every step of the way, from property visits to signing the final contract. Selling? Let us handle everything from valuation to closing the deal.</p>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- //bottom-grids-->
  <!--/w3l-agents-block-->
  <div class="w3l-agent-block py-5" id="why">
    <div class="container py-lg-4">
      <div class="row align-items-center mt-5">
        <div class="col-lg-6">
          <div class="agent-block-image px-lg-5">
            <img src="assets/images/3.png" class="img-fluid" alt="">
          </div>
        </div>
        <div class="col-lg-6 mt-lg-0 mt-5 pl-lg-5">
          <h6 class="title-subhny">Explore</h6>
          <h3 class="title-w3l">
            Explore
            by Property Type</h3>
          <p class="my-3"> Vestibulum ante ipsum primis in faucibus orci luctus
            turpis sodales quis. Integer sit amet mattis quam.Vivamus a ligula quam tesque et libero ut justo ultrices
            in.</p>

          <div class="subscribe-cat">
            <div class="subscribe-cat-gd">
              <a href="#" class="subscribe-cat-link">Office</a>
              <p class="mt-2">Modern office spaces in prime locations, perfect for startups and established businesses. Flexible lease options available.</p>
            </div>
            <div class="subscribe-cat-gd">
              <a href="#" class="subscribe-cat-link">House</a>
              <p class="mt-2">Cozy homes in quiet neighborhoods, ideal for families or those seeking privacy with easy access to local amenities.</p>
            </div>
            <div class="subscribe-cat-gd">
              <a href="#" class="subscribe-cat-link">Villa</a>
              <p class="mt-2">Luxury villas with spacious layouts, private gardens, and pools. Perfect for long-term stays or holiday retreats.</p>
            </div>
            <div class="subscribe-cat-gd">
              <a href="#" class="subscribe-cat-link">Apportment</a>
              <p class="mt-2">Stylish apartments in vibrant city centers, offering convenience and modern living close to shops, restaurants, and entertainment.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--//w3l-agents-block-->
  <section class="w3l-grids-4 py-5">
    <div class="container  py-md-5 py-2">
      <div id="grids4-block" class="">
        <div class="title-content text-center">
          <h6 class="title-subhny text-center">Available </h6>
          <h3 class="title-w3l mb-sm-5 mb-4 pb-sm-o pb-2 text-center">Properties for rent</h3>
        </div>
        <div class="owl-carousel owl-theme" id="owl-demo1">
          <div class="item">
            <div class="grids4-info">
              <a href="#"><img class="img-fluid" src="assets/images/casablanca.png" alt="" /></a>
              <div class="info-bg">
                <h5><a href="#">Casablanca Oceanfront Apartment</a></h5>
                <span class="price">4,500 MAD/month</span>
                <p>Enjoy stunning views of the Atlantic Ocean from this modern apartment located in the heart of Casablanca’s coastal district. Open-plan living with large windows and a private balcony.</p>
                <ul>
                  <li><span class="fa fa-bed"></span> 2</li>
                  <li><span class="fa fa-bath"></span> 2</li>
                  <li><span class="fa fa-share-square-o"></span>93 m²</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="grids4-info">
              <a href="#"><img class="img-fluid" src="assets/images/Marrakech.png" alt="" /></a>
              <div class="info-bg">
                <h5><a href="#">Marrakech Medina Riad Apartment</a></h5>
                <span class="price">6,000 MAD/month</span>
                <p>Live in the historic heart of Marrakech with this traditional-style apartment in the Medina. Features Moroccan tilework, a private courtyard, and easy access to souks and landmarks.</p>
                <ul>
                  <li><span class="fa fa-bed"></span> 3</li>
                  <li><span class="fa fa-bath"></span> 2</li>
                  <li><span class="fa fa-share-square-o"></span>120 m²</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="grids4-info">
              <a href="#"><img class="img-fluid" src="assets/images/Rabat.png" alt="" /></a>
              <div class="info-bg">
                <h5><a href="#">Rabat City Center Apartment</a></h5>
                <span class="price">5,000 MAD/month</span>
                <p>Modern and stylish apartment in the center of Rabat, close to embassies, restaurants, and shopping. Spacious layout with a large living room and city views.</p>
                <ul>
                  <li><span class="fa fa-bed"></span> 2</li>
                  <li><span class="fa fa-bath"></span> 2</li>
                  <li><span class="fa fa-share-square-o"></span>102 m²</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="grids4-info">
              <a href="#"><img class="img-fluid" src="assets/images/Tanger.png" alt="" /></a>
              <div class="info-bg">
                <h5><a href="#">Tangier Bay Apartment</a></h5>
                <span class="price">5,800 MAD/month</span>
                <p>Overlooking the stunning Tangier Bay, this contemporary apartment offers panoramic views, a modern kitchen, and a large terrace to enjoy the Mediterranean climate.</p>
                <ul>
                  <li><span class="fa fa-bed"></span> 2</li>
                  <li><span class="fa fa-bath"></span> 2</li>
                  <li><span class="fa fa-share-square-o"></span>111 m²</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="grids4-info">
              <a href="#"><img class="img-fluid" src="assets/images/Agadir.png" alt="" /></a>
              <div class="info-bg">
                <h5><a href="#">Agadir Beachside Apartment</a></h5>
                <span class="price">4,200 MAD/month</span>
                <p>Located just a short walk from Agadir's famous beach, this apartment offers a bright, open living space with a balcony perfect for enjoying sea breezes.</p>
                <ul>
                  <li><span class="fa fa-bed"></span> 1</li>
                  <li><span class="fa fa-bath"></span> 1</li>
                  <li><span class="fa fa-share-square-o"></span>79 m²</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="grids4-info">
              <a href="#"><img class="img-fluid" src="assets/images/Fes.png" alt="" /></a>
              <div class="info-bg">
                <h5><a href="#">Fes Traditional Riad Apartment</a></h5>
                <span class="price">3,500 MAD/month</span>
                <p>Experience Moroccan heritage in this charming riad apartment in the Fes Medina. Features include a central courtyard, traditional decor, and proximity to cultural attractions.</p>
                <ul>
                  <li><span class="fa fa-bed"></span> 3</li>
                  <li><span class="fa fa-bath"></span> 2</li>
                  <li><span class="fa fa-share-square-o"></span>102 m²</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="grids4-info">
              <a href="#"><img class="img-fluid" src="assets/images/Ouarzazate.png" alt="" /></a>
              <div class="info-bg">
                <h5><a href="#">Ouarzazate Desert View Apartment</a></h5>
                <span class="price">3,800 MAD/month</span>
                <p>Spacious apartment with breathtaking views of the desert, perfect for a serene lifestyle. Features a large terrace, modern amenities, and quick access to the town center.</p>
                <ul>
                  <li><span class="fa fa-bed"></span> 2</li>
                  <li><span class="fa fa-bath"></span> 1</li>
                  <li><span class="fa fa-share-square-o"></span>93 m²</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="grids4-info">
              <a href="#"><img class="img-fluid" src="assets/images/Essaouira.png" alt="" /></a>
              <div class="info-bg">
                <h5><a href="#">Essaouira Old Town Apartment</a></h5>
                <span class="price">4,000 MAD/month</span>
                <p>Located in the heart of Essaouira's historic district, this apartment combines modern comforts with traditional charm. Steps away from the port, beaches, and artisan shops.</p>
                <ul>
                  <li><span class="fa fa-bed"></span> 2</li>
                  <li><span class="fa fa-bath"></span> 1</li>
                  <li><span class="fa fa-share-square-o"></span>88 m²</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="grids4-info">
              <a href="#"><img class="img-fluid" src="assets/images/Chefchaouen.png" alt="" /></a>
              <div class="info-bg">
                <h5><a href="#">Chefchaouen Blue City Apartment</a></h5>
                <span class="price">3,200 MAD/month</span>
                <p>Nestled in the picturesque Blue City of Chefchaouen, this cozy apartment offers mountain views and a private balcony. Ideal for those seeking tranquility in a unique setting.</p>
                <ul>
                  <li><span class="fa fa-bed"></span> 1</li>
                  <li><span class="fa fa-bath"></span> 1</li>
                  <li><span class="fa fa-share-square-o"></span>70 m²</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- grids block 4 -->
  <div class="fact-section" id="stats">
    <div class="container">
      <div class="justify-content-center row">
        <div class="col-lg-3 col-6 mt-lg-0 mt-4">
          <div class="single-fact">
            <h3 class="counter-text">3450+</h3>
            <p class="mb-0">Total Properties</p>
          </div>
        </div>
        <div class="col-lg-3 col-6 mt-lg-0 mt-4">
          <div class="single-fact">
            <h3 class="counter-text">
              1700+
            </h3>
            <p class="mb-0">Trusted Agencies

            </p>
          </div>
        </div>
        <div class="col-lg-3 col-6 mt-lg-0 mt-4">
          <div class="single-fact">
            <h3 class="counter-text">
              2200+
            </h3>
            <p class="mb-0">Happy Buyers</p>
          </div>
        </div>
        <div class="col-lg-3 col-6 mt-lg-0 mt-4">
          <div class="single-fact">
            <h3 class="counter-text">
              3270+
            </h3>
            <p class="mb-0">Total Agents</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- deleted section -->

  <section class="w3l-content-4 py-5" id="features">
    <div class="content-4-main py-lg-5 py-md-4">
      <div class="container">
        <div class="title-content text-center">
          <h3 class="title-subhny"> Why choose us</h3>
          <h3 class="title-w3l">We have the most listings <br>& constant updates.</h3>
        </div>
        <div class="content-info-in row pt-lg-5">
          <div class="content-left col-lg-4 mt-lg-0 mt-md-5 mt-3">
            <div class="content-4-main-gd">
              <div class="row content4-right-grids">
                <div class="col-sm-3 content4-right-icon">
                  <div class="content4-icon icon-clr1">
                    <span class="fa fa-briefcase"></span>
                  </div>
                </div>
                <div class="col-sm-9 content4-right-info pl-4">
                  <h6><a href="#url">Buy a new home</a></h6>
                  <p>Discover your perfect home, from city apartments to coastal villas. Let us guide you to the best options.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="content-left col-lg-4 mt-lg-0 mt-md-5 mt-3">
            <div class="content-4-main-gd">
              <div class="row content4-right-grids">
                <div class="col-sm-3 content4-right-icon">
                  <div class="content4-icon icon-clr2">
                    <span class="fa fa-eye"></span>
                  </div>
                </div>
                <div class="col-sm-9 content4-right-info pl-4">
                  <h6><a href="#url">See a home</a></h6>
                  <p>Schedule a visit easily, with in-person or virtual tours of properties that meet your needs.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="content-left col-lg-4 mt-lg-0 mt-md-5mt-3">
            <div class="content-4-main-gd">
              <div class="row content4-right-grids">
                <div class="col-sm-3 content4-right-icon">
                  <div class="content4-icon icon-clr3">
                    <span class="fa fa-renren"></span>
                  </div>
                </div>
                <div class="col-sm-9 content4-right-info pl-4">
                  <h6><a href="#url">Rent a home</a></h6>
                  <p>Find your ideal rental, from short-term stays to long-term leases, in top locations across Morocco.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--//w3l-content-4-->
  <!--/w3l-faq-block-->
  <div class="w3l-faq-block py-5" id="faq">
    <div class="container py-lg-4">
      <div class="row mt-5">
        <div class="col-lg-6">
          <div class="faq-image">
            <img src="assets/images/9.png" class="img-fluid" alt="">
          </div>
        </div>
        <div class="col-lg-6 mt-lg-0 mt-5 pl-lg-5">
          <h6 class="title-subhny">FaQs</h6>
          <h3 class="title-w3l">
            Experts with experience </h3>
          <p class="my-3">Our team consists of knowledgeable professionals with years of experience in the Moroccan real estate market. We are here to provide you with expert advice and personalized support throughout your property journey.</p>
          <section class="w3l-faq mt-5" id="faq">
            <div class="faq-page">
              <ul>
                <li>
                  <input type="checkbox" checked>
                  <i></i>
                  <h4>1. How can I rent a property in Morocco?</h4>
                  <p>To rent a property in Morocco, you can start by browsing listings on our website. Once you find a property you're interested in, contact us to schedule a viewing. You will need to provide identification and proof of income to finalize the rental agreement.</p>
                </li>
                <li>
                  <input type="checkbox" checked>
                  <i></i>
                  <h4>2. What documents do I need to buy a property in Morocco?</h4>
                  <p>To purchase a property in Morocco, you'll typically need the following documents: a valid passport, proof of income, and a tax identification number. Additionally, if you're a foreign buyer, it's advisable to consult a local lawyer for guidance on specific requirements</p>
                </li>
                <li>
                  <input type="checkbox" checked>
                  <i></i>
                  <h4>3. Are there any fees associated with buying property in Morocco?</h4>
                  <p>Yes, there are various fees when purchasing property in Morocco, including notary fees (around 1-2% of the property price), registration fees (around 1%), and real estate agent fees (typically around 2-5%). It's essential to budget for these additional costs.</p>
                </li>
              </ul>
            </div>
          </section>
        </div>
      </div>
    </div>

  </div>
  <!--//w3l-faq-block-->
  <!-- testimonials section -->
  <section class="w3l-clients w3l-agency-test" id="testimonials">
    <div class="midd-w3 py-5">
      <div class="container py-lg-5 py-md-3">
        <div id="owl-agency" class="owl-carousel owl-theme py-2 mb-4 text-center">
          <div class="item">
            <div class="testimonial-content">
              <div class="testimonial">
                <a class="comment-img" href="#url"><img src="assets/images/team1.jpg" class="img-responsive"
                    alt="placeholder image"></a>
                <blockquote>
                  <q>OMG! I cannot believe. It's Awesome</q>
                </blockquote>
                <p>My new site is so much faster and easier to work with than my old site. They are here to
                  help the customers to get their success. Nemo sit eos, quod minus eius illo labore.
                  Pellen tesque libero ut justo, ultrices in ligula.</p>
                <div class="text-center mt-4">
                  <div class="people-info align-self">
                    <h3>Johnson william</h3>
                    <p class="indentity text-center">Web Developer</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimonial-content">
              <div class="testimonial">
                <a class="comment-img" href="#url"><img src="assets/images/team2.jpg" class="img-responsive"
                    alt="placeholder image"></a>
                <blockquote>
                  <q>Simply the best. Better than all the rest.</q>
                </blockquote>
                <p>My new site is so much faster and easier to work with than my old site. They are here to
                  help the customers to get their success. Nemo sit eos, quod minus eius illo labore.
                  Pellen tesque libero ut justo, ultrices in ligula.</p>
                <div class="text-center mt-4">
                  <div class="people-info align-self">
                    <h3>Alexander sakura</h3>
                    <p class="indentity text-center">Digital Marketer</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimonial-content">
              <div class="testimonial">
                <a class="comment-img" href="#url"><img src="assets/images/team3.jpg" class="img-responsive"
                    alt="placeholder image"></a>
                <blockquote>
                  <q>OMG! I cannot believe. It's Awesome</q>
                </blockquote>
                <p>My new site is so much faster and easier to work with than my old site. They are here to
                  help the customers to get their success. Nemo sit eos, quod minus eius illo labore.
                  Pellen tesque libero ut justo, ultrices in ligula.</p>
                <div class="text-center mt-4">
                  <div class="people-info align-self">
                    <h3>John wilson</h3>
                    <p class="indentity text-center">Web Developer</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimonial-content">
              <div class="testimonial">
                <a class="comment-img" href="#url"><img src="assets/images/team4.jpg" class="img-responsive"
                    alt="placeholder image"></a>
                <blockquote>
                  <q>OMG! I cannot believe. It's Awesome</q>
                </blockquote>
                <p>My new site is so much faster and easier to work with than my old site. They are here to
                  help the customers to get their success. Nemo sit eos, quod minus eius illo labore.
                  Pellen tesque libero ut justo, ultrices in ligula.</p>
                <div class="text-center mt-4">
                  <div class="people-info align-self">
                    <h3>Julia sakura</h3>
                    <p class="indentity text-center">Digital Marketer</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  @endsection 
 