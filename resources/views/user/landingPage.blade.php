@extends('user.base')

@section('content')
    <div class="hero">
        <div class="mask-img" style="background-color: hsla(0, 0%, 0%, 0.6)">
            <div class="hero-content">
                <img src="/images/ao3.png" class="hero-img" alt="">
                <h1>ALLOUT apparel.</h1>
                <p>Make it easy, Make it classy. Allout apparel since 2023 present.</p>
                <button data-text="Awesome" class="button">
                    <span class="actual-text">&nbsp;start&nbsp;</span>
                    <span class="hover-text" aria-hidden="true">&nbsp;start&nbsp;</span>
                </button>
            </div>
        </div>
    </div>

    <div class="slider">
        <h2>OUR PRODUCT</h2>
        <div class="swiper mySwiper container">
            <div class="swiper-wrapper content">
                <div class="swiper-slide card">
                    <img src="/images/life3.jpg" class="card-img-top" alt="Hollywood Sign on The Hill" />
                    <div class="card-body">
                        <h5 class="card-title">Life</h5>
                        <p class="card-text">
                            Rp. 80.000
                        </p>
                    </div>
                    <div class="card-footer text-center">
                        <button class="badge button1">
                             Check Detail
                        </button>
                    </div>
                </div>
                <div class="swiper-slide card">
                    <img src="/images/life3.jpg" class="card-img-top" alt="Hollywood Sign on The Hill" />
                    <div class="card-body">
                        <h5 class="card-title">Life</h5>
                        <p class="card-text">
                            Rp. 80.000
                        </p>
                    </div>
                    <div class="card-footer text-center">
                        <button class="badge button1">
                            Check Detail
                        </button>
                    </div>
                </div>
                <div class="swiper-slide card">
                    <img src="/images/life3.jpg" class="card-img-top" alt="Hollywood Sign on The Hill" />
                    <div class="card-body">
                        <h5 class="card-title">Life</h5>
                        <p class="card-text">
                            Rp. 80.000
                        </p>
                    </div>
                    <div class="card-footer text-center">
                        <button class="badge button1">
                            Check Detail
                        </button>
                    </div>
                </div>
                <div class="swiper-slide card">
                    <img src="/images/life3.jpg" class="card-img-top" alt="Hollywood Sign on The Hill" />
                    <div class="card-body">
                        <h5 class="card-title">Life</h5>
                        <p class="card-text">
                            Rp. 80.000
                        </p>
                    </div>
                    <div class="card-footer text-center">
                        <button class="badge button1">
                           Check Detail
                        </button>
                    </div>
                </div>
                <div class="swiper-slide card">
                    <img src="/images/life3.jpg" class="card-img-top" alt="Hollywood Sign on The Hill" />
                    <div class="card-body">
                        <h5 class="card-title">Life</h5>
                        <p class="card-text">
                            Rp. 80.000
                        </p>
                    </div>
                    <div class="card-footer text-center">
                        <button class="badge button1">
                            Check Detail
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
        <div class="text-center">
            {{-- <button class="btn btn-primary mt-3 mb-3">see more</button> --}}
            <button class="learn-more mt-3 mb-3">
                <span class="circle" aria-hidden="true">
                <span class="icon arrow"></span>
                </span>
                <span class="button-text">See More</span>
            </button>
        </div>
    </div>

    <div class="contact">
        <h2>Contact us</h2>
        <div class="container">
            <div class="row g-5">
                <div class="col-md-6">
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.7857226716487!2d111.13006031620615!3d-7.812493164345082!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e79871be8d0ef29%3A0xa7092a1bab6c9213!2sTawang%20Kidul%2C%20Tawangrejo%2C%20Kec.%20Jatipurno%2C%20Kabupaten%20Wonogiri%2C%20Jawa%20Tengah%2057693!5e0!3m2!1sid!2sid!4v1674376900057!5m2!1sid!2sid" width="100%" height="340px" style="border:0; border-radius:8px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-md-6">
                     <div class="email">
                        <form>
                            <!-- Name input -->
                            <div class="form-outline mb-4">
                              <input type="text" id="form4Example1" class="form-control" />
                              <label class="form-label" for="form4Example1">Name</label>
                            </div>
                          
                            <!-- Email input -->
                            <div class="form-outline mb-4">
                              <input type="email" id="form4Example2" class="form-control" />
                              <label class="form-label" for="form4Example2">Email address</label>
                            </div>
                          
                            <!-- Message input -->
                            <div class="form-outline mb-4">
                              <textarea class="form-control" id="form4Example3" rows="4"></textarea>
                              <label class="form-label" for="form4Example3">Message</label>
                            </div>
                          
                            <!-- Checkbox -->
                            <div class="form-check d-flex justify-content-center mb-4">
                              <input class="form-check-input me-2" type="checkbox" value="" id="form4Example4" checked />
                              <label class="form-check-label" for="form4Example4">
                                Send me a copy of this message
                              </label>
                            </div>
                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block mb-4">Send</button>
                          </form>
                     </div>
                </div>
            </div>
        </div>
    </div>
@endsection
