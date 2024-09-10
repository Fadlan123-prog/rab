@extends('layout.index')

@section('content')

  <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                  <div class="col-lg-12">
                    <h6>Rafting Adventure Bogor</h6>
                    <h2>Taklukkan Derasnya Arus, Ciptakan Kenangan yang Abadi!</h2>
                    <p>Bergabunglah dengan kami untuk merasakan adrenalin melintasi sungai-sungai terbaik. Nikmati serunya mengarungi jeram bersama teman dan keluarga, ditemani pemandu berpengalaman yang siap membawa Anda ke petualangan yang seru dan aman. Jadikan setiap momen di sungai sebagai cerita yang tak terlupakan.</p>
                  </div>
                  <div class="col-lg-12">
                    <div class="border-first-button scroll-to-section">
                      <a href="https://wa.me/6289618727898?text=Hallo%20Rafting%20Adventure%20Bogor">Reservasi Sekarang</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="{{asset('assets/images/boat-1.png')}}" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="about" class="about section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6">
              <div class="about-left-image  wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="{{asset('assets/images/rafting.jpg')}}" alt="">
              </div>
            </div>
            <div class="col-lg-6 align-self-center  wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
              <div class="about-right-content">
                <div class="section-heading">
                  <h6>About Us</h6>
                  <h4>Siapa Rafting Adventure Bogor</h4>
                  <div class="line-dec"></div>
                </div>
                <p>Kami adalah Rafting Adventure Bogor penyedia paket liburan di alam Bogor. Dengan banyak paket liburan yang kami sediakan untuk anda, Dengan harga murah dan di jamin membuat liburan anda semakin seru bersama teman ataupun keluarga.</p>
                <div class="row">
                  <div class="col-lg-4 col-sm-4">
                    <div class="skill-item first-skill-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                      <div class="progress" data-percentage="100">
                        <span class="progress-left">
                          <span class="progress-bar"></span>
                        </span>
                        <span class="progress-right">
                          <span class="progress-bar"></span>
                        </span>
                        <div class="progress-value">
                          <div>
                            100%<br>
                            <span>Aman</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-4">
                    <div class="skill-item second-skill-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                      <div class="progress" data-percentage="100">
                        <span class="progress-left">
                          <span class="progress-bar"></span>
                        </span>
                        <span class="progress-right">
                          <span class="progress-bar"></span>
                        </span>
                        <div class="progress-value">
                          <div>
                            100%<br>
                            <span>Bahagia</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-4">
                    <div class="skill-item third-skill-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                      <div class="progress" data-percentage="100">
                        <span class="progress-left">
                          <span class="progress-bar"></span>
                        </span>
                        <span class="progress-right">
                          <span class="progress-bar"></span>
                        </span>
                        <div class="progress-value">
                          <div>
                            100%<br>
                            <span>Terjangkau</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="services" class="services section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
            <h6>Our Services</h6>
            <h4>Kami <em>Menyediakan</em></h4>
            <div class="line-dec"></div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="naccs">
            <div class="grid">
              <div class="row">
                <div class="col-lg-12">
                  <div class="menu">
                    <div class="first-thumb active">
                      <div class="thumb">
                        <span class="icon"><img src="assets/images/service-icon-01.png" alt=""></span>
                        Rafting
                      </div>
                    </div>
                    <div>
                      <div class="thumb">
                        <span class="icon"><img src="assets/images/service-icon-02.png" alt=""></span>
                        Outbound
                      </div>
                    </div>
                    <div>
                      <div class="thumb">
                        <span class="icon"><img src="assets/images/service-icon-03.png" alt=""></span>
                        Paintball
                      </div>
                    </div>
                    <div>
                      <div class="thumb">
                        <span class="icon"><img src="assets/images/service-icon-04.png" alt=""></span>
                        Offroad
                      </div>
                    </div>
                    <div class="last-thumb">
                      <div class="thumb">
                        <span class="icon"><img src="assets/images/service-icon-01.png" alt=""></span>
                        Penginapan
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <ul class="nacc">
                    <li class="active">
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-6 align-self-center">
                              <div class="left-text">
                                <h4>Fasilitas &amp; Program</h4>
                                <p>Kamu akan di ajak mengarungi sungai cisadane sepanjang 11 Km panjangnya dengan waktu tempuh -+ 2 Jam perjalanan. Dan di akhir perjalanan nanti kamu akan di antarkan kembali menuju lokasi Meeting point menggunakan Mobil Pickup, selama perjalanan kamu akan menikmati sensasi sebagai petualang</p>
                                <div class="ticks-list"><span><i class="fa fa-check"></i>Peralatan Rafting</span> <span><i class="fa fa-check"></i> Boat</span> <span><i class="fa fa-check"></i> Pelampung</span>
                                  <span><i class="fa fa-check"></i> Helm</span> <span><i class="fa fa-check"></i> Dayung</span> <span><i class="fa fa-check"></i> P3K</span><span><i class="fa fa-check"></i> Pemandu</span><span><i class="fa fa-check"></i> Tim Rescue</span><span><i class="fa fa-check"></i> Lesehan/Gazebo</span><span><i class="fa fa-check"></i> Kamar Bilas</span><span><i class="fa fa-check"></i> 1x kelapa Muda</span><span><i class="fa fa-check"></i> 1x Snack Tradisional</span></div>
                                  <div class="border-first-button scroll-to-section">
                                    <a href="https://wa.me/6289618727898?text=Hallo%20Rafting%20Adventure%20Bogor">Reservasi Sekarang</a>
                                  </div>
                              </div>
                            </div>
                            <div class="col-lg-6 align-self-center">
                              <div class="right-image">
                                <img src="{{asset('assets/images/rafting-2.jpg')}}" alt="">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-6 align-self-center">
                              <div class="left-text">
                                <h4>Fasilitas &amp; Program</h4>
                                <p>Pernahkah teman – teman bermain berlibur sambil memecahkan 1 Games atau mungkin lebih, dengan kelompok entah itu teman keluarga atau rekan kerja, tetapi Games ini dipandu oleh Master Games yang sudah profesional sehingga Games yang teman – teman mainkan bersama kelompok itu memiliki manfaat karena setiap Games yang dimainkan memiliki tujuan tertentu.</p>
                                <div class="ticks-list"><span><i class="fa fa-check"></i> Fasilitator</span> <span><i class="fa fa-check"></i> Game Master</span> <span><i class="fa fa-check"></i> Outbound Equipment</span>
                                  <span><i class="fa fa-check"></i> Sound System</span> <span><i class="fa fa-check"></i> P3K</span> <span><i class="fa fa-check"></i> Air Mineral</span><span><i class="fa fa-check"></i> Games Activity</span><span><i class="fa fa-check"></i> Rotasi game</span><span><i class="fa fa-check"></i> The Best Team</span><span><i class="fa fa-check"></i> Final Project</span></div>
                                  <div class="border-first-button scroll-to-section">
                                    <a href="https://wa.me/6289618727898?text=Hallo%20Rafting%20Adventure%20Bogor">Reservasi Sekarang</a>
                                  </div>
                              </div>
                            </div>
                            <div class="col-lg-6 align-self-center">
                              <div class="right-image">
                                <img src="{{asset('assets/images/outbound.jpg')}}" alt="">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-6 align-self-center">
                              <div class="left-text">
                                <h4>Fasilitas &amp; Program</h4>
                                <p>Kamu akan merasakan sensasi seperti di medan peperangan melawan musuh, yang nantinya musuh tersebut adalah keluargamu atau temanmu sendiri dan tiap regu beranggotakan maksimal 6 orang. Misi kamu Adalah siapa yang bisa mengambil bendera lawan sebelum Amunisi kamu habis.</p>
                                <div class="ticks-list"><span><i class="fa fa-check"></i> Peralatan Paintball</span> <span><i class="fa fa-check"></i> Baju Army</span> <span><i class="fa fa-check"></i> Body Protector</span>
                                  <span><i class="fa fa-check"></i> Senjata Tip-Man semi otomatis</span> <span><i class="fa fa-check"></i> P3k</span> <span><i class="fa fa-check"></i> 30 Butir peluru</span> <span><i class="fa fa-check"></i> Instruktur</span> <span><i class="fa fa-check"></i> Wasit</span> <span><i class="fa fa-check"></i> Team Leader</span> <span><i class="fa fa-check"></i> Lapangan</span> <span><i class="fa fa-check"></i> Sound System</span></div>
                                  <div class="border-first-button scroll-to-section">
                                    <a href="https://wa.me/6289618727898?text=Hallo%20Rafting%20Adventure%20Bogor">Reservasi Sekarang</a>
                                  </div>
                              </div>
                            </div>
                            <div class="col-lg-6 align-self-center">
                              <div class="right-image">
                                <img src="{{asset('assets/images/paintball.jpg')}}" alt="">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-6 align-self-center">
                              <div class="left-text">
                                <h4>Fasilitas &amp; Program</h4>
                                <p>Kamu akan Di ajak Menyusuri perbukitan di gunung pangrango, dengan jalur yang memacu adrenalin kamu akan dibuat berteriak dan melepaskan penat</p>
                                <div class="ticks-list"><span><i class="fa fa-check"></i> Mobil Land Rover</span> <span><i class="fa fa-check"></i> Driver</span> <span><i class="fa fa-check"></i> BBM</span>
                                  <span><i class="fa fa-check"></i> HTM Track Offroad</span> <span><i class="fa fa-check"></i> P3K</span> <span><i class="fa fa-check"></i> Air Mineral</span><span><i class="fa fa-check"></i> Cemilan</span></div>
                                  <div class="border-first-button scroll-to-section">
                                    <a href="#contact">Reservasi Sekarang</a>
                                  </div>
                              </div>
                            </div>
                            <div class="col-lg-6 align-self-center">
                              <div class="right-image">
                                <img src="{{asset('assets/images/offroad.jpg')}}" alt="">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-6 align-self-center">
                              <div class="left-text">
                                <h4>Enjoy &amp; Travel</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt ut labore et dolore kengan darwin doerski token.
                                  dover lipsum lorem and the others.</p>
                                <div class="ticks-list"><span><i class="fa fa-check"></i> Optimized Template</span> <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span>
                                  <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span> <span><i class="fa fa-check"></i> Optimized Template</span></div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt.</p>
                              </div>
                            </div>
                            <div class="col-lg-6 align-self-center">
                              <div class="right-image">
                                <img src="assets/images/services-image.jpg" alt="">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div id="client" class="free-quote">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 offset-lg-4">
          <div class="section-heading  wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
            <h6>Our Client</h6>
            <h4>Meet Our Happy Clients</h4>
            <div class="line-dec"></div>
          </div>
        </div>
        <div class="col-lg-8 offset-lg-2  wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
            <div class="slider">
                <div class="logos">
                    @foreach ($clientLogos as $logo)
                     <img src="{{$logo->logo_url}}" alt="{{$logo->name}}">
                    @endforeach
                </div>
              </div>
        </div>
      </div>
    </div>
  </div>


  <div id="portfolio" class="our-portfolio section">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="section-heading wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
            <h6>Our Review</h6>
            <h4>See Our Happy <em>Client</em> Review</h4>
            <div class="line-dec"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
      <div class="row">
        <div class="col-lg-12">
            <div class="owl-carousel owl-theme loop">
                <!-- Testimonial Item 1 -->
                @foreach ($reviews as $review)
                <div class="testimonial-item">
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="testimonial-content">"{{$review->review}}"</p>
                </div>
                @endforeach
            </div>
        </div>
      </div>
    </div>
  </div>

  <div id="blog" class="blog">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 offset-lg-4  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="section-heading">
            <h6>Our Gallery</h6>
            <h4>Make <em>Memories</em> with us</h4>
            <div class="line-dec"></div>
          </div>
        </div>
        <div class="col-lg-12 show-up wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
            <div class="row">
                <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                    <div id="carousel1" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('assets/images/gallery/rafting/IMG_5510.JPG') }}"
                                    class="d-block w-100 shadow-1-strong rounded mb-4 carousel-image"
                                    alt="Boat on Calm Water" />
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('assets/images/gallery/offroad/DSC_0211.JPG') }}"
                                    class="d-block w-100 shadow-1-strong rounded mb-4 carousel-image"
                                    alt="Wintry Mountain Landscape" />
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('assets/images/gallery/outbound/IMG_6950.JPG') }}"
                                    class="d-block w-100 shadow-1-strong rounded mb-4 carousel-image"
                                    alt="Mountains in the Clouds" />
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('assets/images/gallery/paintball/DSC05505.JPG') }}"
                                    class="d-block w-100 shadow-1-strong rounded mb-4 carousel-image"
                                    alt="Waves at Sea" />
                            </div>
                        </div>
                    </div>

                    <div id="carousel2" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('assets/images/gallery/offroad/DSC_0017.JPG') }}"
                                    class="d-block w-100 shadow-1-strong rounded mb-4 carousel-image"
                                    alt="Yosemite National Park" />
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('assets/images/gallery/outbound/DSC00040.JPG') }}"
                                    class="d-block w-100 shadow-1-strong rounded mb-4 carousel-image"
                                    alt="Wintry Mountain Landscape" />
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('assets/images/gallery/paintball/DSC05520.JPG') }}"
                                    class="d-block w-100 shadow-1-strong rounded mb-4 carousel-image"
                                    alt="Mountains in the Clouds" />
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('assets/images/gallery/rafting/IMG_5516.JPG') }}"
                                    class="d-block w-100 shadow-1-strong rounded mb-4 carousel-image"
                                    alt="Boat on Calm Water" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div id="carousel3" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('assets/images/gallery/offroad/DSC_0028.JPG') }}"
                                    class="d-block w-100 shadow-1-strong rounded mb-4 carousel-image"
                                    alt="Mountains in the Clouds" />
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('assets/images/gallery/outbound/DSC00061.JPG') }}"
                                    class="d-block w-100 shadow-1-strong rounded mb-4 carousel-image"
                                    alt="Wintry Mountain Landscape" />
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('assets/images/gallery/paintball/DSC05531.JPG') }}"
                                    class="d-block w-100 shadow-1-strong rounded mb-4 carousel-image"
                                    alt="Boat on Calm Water" />
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('assets/images/gallery/rafting/IMG_5525.JPG') }}"
                                    class="d-block w-100 shadow-1-strong rounded mb-4 carousel-image"
                                    alt="Waves at Sea" />
                            </div>
                        </div>
                    </div>

                    <div id="carousel4" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('assets/images/gallery/offroad/DSC_0076.JPG') }}"
                                    class="d-block w-100 shadow-1-strong rounded mb-4 carousel-image"
                                    alt="Boat on Calm Water" />
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('assets/images/gallery/outbound/DSC00215.JPG') }}"
                                    class="d-block w-100 shadow-1-strong rounded mb-4 carousel-image"
                                    alt="Wintry Mountain Landscape" />
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('assets/images/gallery/paintball/DSC05541.JPG') }}"
                                    class="d-block w-100 shadow-1-strong rounded mb-4 carousel-image"
                                    alt="Mountains in the Clouds" />
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('assets/images/gallery/rafting/IMG_5555.JPG') }}"
                                    class="d-block w-100 shadow-1-strong rounded mb-4 carousel-image"
                                    alt="Waves at Sea" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div id="carousel5" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('assets/images/gallery/offroad/DSC_0062.JPG') }}"
                                    class="d-block w-100 shadow-1-strong rounded mb-4 carousel-image"
                                    alt="Waves at Sea" />
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('assets/images/gallery/outbound/DSC00083.JPG') }}"
                                    class="d-block w-100 shadow-1-strong rounded mb-4 carousel-image"
                                    alt="Wintry Mountain Landscape" />
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('assets/images/gallery/paintball/DSC05601.JPG') }}"
                                    class="d-block w-100 shadow-1-strong rounded mb-4 carousel-image"
                                    alt="Mountains in the Clouds" />
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('assets/images/gallery/rafting/IMG_5711.JPG') }}"
                                    class="d-block w-100 shadow-1-strong rounded mb-4 carousel-image"
                                    alt="Boat on Calm Water" />
                            </div>
                        </div>
                    </div>

                    <div id="carousel6" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('assets/images/gallery/rafting/IMG_5753.JPG') }}"
                                    class="d-block w-100 shadow-1-strong rounded mb-4 carousel-image"
                                    alt="Yosemite National Park" />
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('assets/images/gallery/paintball/DSC05548.JPG') }}"
                                    class="d-block w-100 shadow-1-strong rounded mb-4 carousel-image"
                                    alt="Wintry Mountain Landscape" />
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('assets/images/gallery/outbound/DSC00101.JPG') }}"
                                    class="d-block w-100 shadow-1-strong rounded mb-4 carousel-image"
                                    alt="Mountains in the Clouds" />
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('assets/images/gallery/offroad/DSC_0116.JPG') }}"
                                    class="d-block w-100 shadow-1-strong rounded mb-4 carousel-image"
                                    alt="Waves at Sea" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="col-lg-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">

        </div> --}}
      </div>
    </div>
  </div>

  <div id="contact" class="contact-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
            <h6>Contact Us</h6>
            <h4>Segera <em>Hubungi</em> Kami</h4>
            <div class="line-dec"></div>
          </div>
        </div>
        <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
            <form id="contact" action="{{ route('message.send') }}" method="post">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-lg-12">
                        <div class="contact-dec">
                            <img src="assets/images/contact-dec-v3.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div id="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d32150.596391340914!2d106.78732201950376!3d-6.732616675626175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69cd0019eff997%3A0xd9cdb301260e21af!2srafting%20adventure%20bogor%20(RAB)!5e0!3m2!1sid!2sid!4v1725033639473!5m2!1sid!2sid" width="100%" height="636px" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="fill-form">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="info-post">
                                        <div class="icon">
                                            <img src="assets/images/phone-icon.png" alt="">
                                            <a href="#">0896-1872-7898</a>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="col-lg-4">
                                    <div class="info-post">
                                        <div class="icon">
                                            <img src="assets/images/email-icon.png" alt="">
                                            <a href="#">bogoraftingadventure@gmail.com</a>
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="col-lg-4">
                                    <div class="info-post">
                                        <div class="icon">
                                            <img src="assets/images/location-icon.png" alt="">
                                            <a href="#">Caringin, Bogor</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <fieldset>
                                        <input type="text" name="name" id="name" placeholder="Name" autocomplete="on" required>
                                    </fieldset>
                                    <fieldset>
                                        <input type="email" name="email" id="email" placeholder="Your Email" required>
                                    </fieldset>
                                    <fieldset>
                                        <input type="text" name="subject" id="subject" placeholder="Subject" autocomplete="on">
                                    </fieldset>
                                </div>
                                <div class="col-lg-6">
                                    <fieldset>
                                        <textarea name="message" id="message" placeholder="Message" required></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" class="main-button">Send Message Now</button>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © 2024 Rafting Adventure Bogor, Ltd. All Rights Reserved.
        </div>
      </div>
    </div>
  </footer>

  <div class="social-buttons">
    <a href="https://wa.me/6289618727898?text=Hallo%20Rafting%20Adventure%20Bogor" class="social-button whatsapp-button" target="_blank">
      <i class="fab fa-whatsapp"></i>
    </a>
    <a href="https://instagram.com/rafting_adventure_bogor_" class="social-button instagram-button" target="_blank">
      <i class="fab fa-instagram"></i>
    </a>
    <a href="https://tiktok.com/@rafting_adventure_bogor" class="social-button tiktok-button" target="_blank">
      <i class="fab fa-tiktok"></i>
    </a>
  </div>

  @if (session('success'))

  <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="successModalLabel">Pesan Terkirim</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{ session('success') }}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
  @endif


<!-- Error Modal -->
<div class="modal fade" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="errorModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="errorModalLabel">Terjadi Kesalahan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{ session('error') }}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    $(document).ready(function() {
            @if (session('success'))
                $('#successModal').modal('show');
            @elseif (session('error'))
                $('#errorModal').modal('show');
            @endif
        });
</script>
@endsection
