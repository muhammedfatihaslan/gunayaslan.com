   <!-- slider section -->
   <section class="slider_section ">
       <div id="customCarousel1" class="carousel slide" data-ride="carousel">
           <div class="carousel-inner">

               <div class="carousel-item active">
                   <div class="container ">
                       <div class="row">
                           <div class="col-md-6">
                               <div class="detail-box">
                                   <h2>
                                       <a href="http://resmigazete.gov.tr">

                                           {{-- {{ App\Helper\curl::getDate('https://www.resmigazete.gov.tr') }} --}}
                                       </a>
                                   </h2>

                                   <p>
                                       Resmi Gazetenin Bugünki Sayısı
                                   </p>
                                   <div class="btn-box">
                                       <a href="" class="btn-1">
                                           Oku
                                       </a>

                                   </div>
                               </div>
                           </div>
                           <div class="col-md-6">
                               <div class="row">
                                   <div class=" col-lg-12 mx-auto">
                                       <div class="img-box">
                                           <img style="width:530px" src="{{ asset('front/images/resmigazete.jpeg') }}"
                                               alt="">
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
               {{-- <div class="carousel-item">
                <div class="container ">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="detail-box">
                                <h1>
                                    Fast & Secure <br>
                                    Web Hosting
                                </h1>
                                <p>
                                    Anything embarrassing hidden in the middle of text. All the Lorem
                                    Ipsuanything embarrassing hidden in the middle of text. All the Lorem Ipsumm
                                </p>
                                <div class="btn-box">
                                    <a href="" class="btn-1">
                                        Read More
                                    </a>
                                    <a href="" class="btn-2">
                                        Contact Us
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class=" col-lg-10 mx-auto">
                                    <div class="img-box">
                                        <img src="images/slider-img.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
               {{-- <div class="carousel-item">
                <div class="container ">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="detail-box">
                                <h1>
                                    Fast & Secure <br>
                                    Web Hosting
                                </h1>
                                <p>
                                    Anything embarrassing hidden in the middle of text. All the Lorem
                                    Ipsuanything embarrassing hidden in the middle of text. All the Lorem Ipsumm
                                </p>
                                <div class="btn-box">
                                    <a href="" class="btn-1">
                                        Read More
                                    </a>
                                    <a href="" class="btn-2">
                                        Contact Us
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class=" col-lg-10 mx-auto">
                                    <div class="img-box">
                                        <img src="{{ asset('front/images/resmigazete.jpeg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
           </div>
           <div class="carousel_btn-box">
               <a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">
                   <i class="fa fa-angle-left" aria-hidden="true"></i>
                   <span class="sr-only">Previous</span>
               </a>
               <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
                   <i class="fa fa-angle-right" aria-hidden="true"></i>
                   <span class="sr-only">Next</span>
               </a>
           </div>
       </div>
   </section>
