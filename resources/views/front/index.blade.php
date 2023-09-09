@extends('front.core.head')
@section('content_head')
    <div class="container ">
        <div class="row mb-5">
            <div class="col-lg-12">
                <div class="border-bottom border-white">
                    <p class="text-center text-white " style="font-size:50px">DUYURULAR</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="col-lg-12">
                    <h5 class="mb-2" style="color:#e6474e">
                        <img class="mb-3" style="width:35px" src="{{ asset('front/images/gib.jpeg') }}" alt="">
                        Gelir İdaresi Başkanlığı Duyuruları
                    </h5>
                </div>
                <div class="col-lg-12 mb-4">
                    <ul class="list-group " style="list-style:none;">
                        <?php foreach (App\Helper\curl::gib() as $key => $value): ?>
                        <li class="list-group-item border border-bottom border-dark" style="height:75px">
                            <?php echo $value; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="col-lg-12">
                    <h5 style="color:#e6474e">
                        <img class="mb-3" style="width:35px;height:35px" src="{{ asset('front/images/sgk.jpeg') }}"
                            alt="">
                        SGK Duyuruları
                    </h5>
                </div>
                <div class="col-lg-12 mb-4">

                    <ul class="list-group" style="list-style: none">
                        <?php foreach (App\Helper\curl::sgk() as $key => $value): ?>
                        <li class="list-group-item border border-bottom border-dark" style="height:75px"><?php echo $value; ?>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('content')
    <!-- service section -->

    <section class="service_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">

            </div>
        </div>
        <div class="container ">
            <div class="row">
                <div class="col-lg-12 text-center ">
                    <a target="_blank" class="text-danger" href="https://resmigazete.gov.tr"><img class="mb-3"
                            style="width:35px" src="{{ asset('front/images/res.png') }}" alt="">
                        <h4>Resmi Gazete</h4>
                    </a>
                </div>
            </div>
            <div class="col-lg-12">
                <ul class="list-group text-center " style="list-style: none;">
                    <?php for($i = 0 ; $i < 6 ; $i ++){ ?>
                    <li class="list-group-item p-2 border border-bottom border-dark"><a target="_blank" class="text-dark"
                            href="https://resmigazete.gov.tr/<?php echo App\Helper\curl::resmi()[1][$i]; ?>"><?php echo App\Helper\curl::resmi()[0][$i]; ?></a></li>
                    <?php }; ?>
                </ul>
            </div>
        </div>
    </section>

    <!-- end service section -->
    <?php
    // <!-- about section -->
    
    // <section class="about_section layout_padding-bottom">
    //     <div class="container  ">
    //         <div class="row">
    //             <div class="col-md-6">
    //                 <div class="detail-box">
    //                     <div class="heading_container">
    //                         <h2>
    //                             About Us
    //                         </h2>
    //                     </div>
    //                     <p>
    //                         Words which don't look even slightly believable. If you are going to use a passage of Lorem
    //                         Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.
    //                         All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks </p>
    //                     <a href="">
    //                         Read More
    //                     </a>
    //                 </div>
    //             </div>
    //             <div class="col-md-6 ">
    //                 <div class="img-box">
    //                     <img src="images/about-img.png" alt="">
    //                 </div>
    //             </div>
    
    //         </div>
    //     </div>
    // </section>
    
    // <!-- end about section -->
    
    // <!-- server section -->
    
    // <section class="server_section">
    //     <div class="container ">
    //         <div class="row">
    //             <div class="col-md-6">
    //                 <div class="img-box">
    //                     <img src="images/server-img.jpg" alt="">
    //                     <div class="play_btn">
    //                         <button>
    //                             <i class="fa fa-play" aria-hidden="true"></i>
    //                         </button>
    //                     </div>
    //                 </div>
    //             </div>
    //             <div class="col-md-6">
    //                 <div class="detail-box">
    //                     <div class="heading_container">
    //                         <h2>
    //                             Let us manage your server
    //                         </h2>
    //                         <p>
    //                             Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model
    //                             sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem
    //                             Ipsum is therefore
    //                         </p>
    //                     </div>
    //                     <a href="">
    //                         Read More
    //                     </a>
    //                 </div>
    //             </div>
    //         </div>
    //     </div>
    // </section>
    
    // <!-- end server section -->
    
    // <!-- price section -->
    
    // <section class="price_section layout_padding">
    //     <div class="container">
    //         <div class="heading_container heading_center">
    //             <h2>
    //                 Our Pricing
    //             </h2>
    //         </div>
    //         <div class="price_container ">
    //             <div class="box">
    //                 <div class="detail-box">
    //                     <h2>$ <span>49</span></h2>
    //                     <h6>
    //                         Startup
    //                     </h6>
    //                     <ul class="price_features">
    //                         <li>
    //                             2GB RAM
    //                         </li>
    //                         <li>
    //                             20GB SSD Cloud Storage
    //                         </li>
    //                         <li>
    //                             Weekly Backups
    //                         </li>
    //                         <li>
    //                             DDoS Protection
    //                         </li>
    //                         <li>
    //                             Full Root Access
    //                         </li>
    //                         <li>
    //                             24/7/365 Tech Support
    //                         </li>
    //                     </ul>
    //                 </div>
    //                 <div class="btn-box">
    //                     <a href="">
    //                         See Detail
    //                     </a>
    //                 </div>
    //             </div>
    //             <div class="box">
    //                 <div class="detail-box">
    //                     <h2>$ <span>99</span></h2>
    //                     <h6>
    //                         Standard
    //                     </h6>
    //                     <ul class="price_features">
    //                         <li>
    //                             4GB RAM
    //                         </li>
    //                         <li>
    //                             50GB SSD Cloud Storage
    //                         </li>
    //                         <li>
    //                             Weekly Backups
    //                         </li>
    //                         <li>
    //                             DDoS Protection
    //                         </li>
    //                         <li>
    //                             Full Root Access
    //                         </li>
    //                         <li>
    //                             24/7/365 Tech Support
    //                         </li>
    //                     </ul>
    //                 </div>
    //                 <div class="btn-box">
    //                     <a href="">
    //                         See Detail
    //                     </a>
    //                 </div>
    //             </div>
    //             <div class="box">
    //                 <div class="detail-box">
    //                     <h2>$ <span>149</span></h2>
    //                     <h6>
    //                         Business
    //                     </h6>
    //                     <ul class="price_features">
    //                         <li>
    //                             8GB RAM
    //                         </li>
    //                         <li>
    //                             100GB SSD Cloud Storage
    //                         </li>
    //                         <li>
    //                             Weekly Backups
    //                         </li>
    //                         <li>
    //                             DDoS Protection
    //                         </li>
    //                         <li>
    //                             Full Root Access
    //                         </li>
    //                         <li>
    //                             24/7/365 Tech Support
    //                         </li>
    //                     </ul>
    //                 </div>
    //                 <div class="btn-box">
    //                     <a href="">
    //                         See Detail
    //                     </a>
    //                 </div>
    //             </div>
    //         </div>
    //     </div>
    // </section>
    
    // <!-- price section -->
    
    // <!-- client section -->
    // <section class="client_section ">
    //     <div class="container">
    //         <div class="heading_container heading_center">
    //             <h2>
    //                 Testimonial
    //             </h2>
    //             <p>
    //                 Even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to
    //             </p>
    //         </div>
    //     </div>
    //     <div class="container px-0">
    //         <div id="customCarousel2" class="carousel  slide" data-ride="carousel">
    //             <div class="carousel-inner">
    //                 <div class="carousel-item active">
    //                     <div class="container">
    //                         <div class="row">
    //                             <div class="col-md-10 mx-auto">
    //                                 <div class="box">
    //                                     <div class="img-box">
    //                                         <img src="images/client.jpg" alt="">
    //                                     </div>
    //                                     <div class="detail-box">
    //                                         <div class="client_info">
    //                                             <div class="client_name">
    //                                                 <h5>
    //                                                     Morojink
    //                                                 </h5>
    //                                                 <h6>
    //                                                     Customer
    //                                                 </h6>
    //                                             </div>
    //                                             <i class="fa fa-quote-left" aria-hidden="true"></i>
    //                                         </div>
    //                                         <p>
    //                                             Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
    //                                             tempor incididunt ut
    //                                             labore
    //                                             et
    //                                             dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
    //                                             ullamco laboris nisi ut
    //                                             aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
    //                                             in voluptate velit esse
    //                                             cillum
    //                                             dolore eu fugia
    //                                         </p>
    //                                     </div>
    //                                 </div>
    //                             </div>
    //                         </div>
    //                     </div>
    //                 </div>
    //                 <div class="carousel-item">
    //                     <div class="container">
    //                         <div class="row">
    //                             <div class="col-md-10 mx-auto">
    //                                 <div class="box">
    //                                     <div class="img-box">
    //                                         <img src="images/client.jpg" alt="">
    //                                     </div>
    //                                     <div class="detail-box">
    //                                         <div class="client_info">
    //                                             <div class="client_name">
    //                                                 <h5>
    //                                                     Morojink
    //                                                 </h5>
    //                                                 <h6>
    //                                                     Customer
    //                                                 </h6>
    //                                             </div>
    //                                             <i class="fa fa-quote-left" aria-hidden="true"></i>
    //                                         </div>
    //                                         <p>
    //                                             Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
    //                                             tempor incididunt ut
    //                                             labore
    //                                             et
    //                                             dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
    //                                             ullamco laboris nisi ut
    //                                             aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
    //                                             in voluptate velit esse
    //                                             cillum
    //                                             dolore eu fugia
    //                                         </p>
    //                                     </div>
    //                                 </div>
    //                             </div>
    //                         </div>
    //                     </div>
    //                 </div>
    //                 <div class="carousel-item">
    //                     <div class="container">
    //                         <div class="row">
    //                             <div class="col-md-10 mx-auto">
    //                                 <div class="box">
    //                                     <div class="img-box">
    //                                         <img src="images/client.jpg" alt="">
    //                                     </div>
    //                                     <div class="detail-box">
    //                                         <div class="client_info">
    //                                             <div class="client_name">
    //                                                 <h5>
    //                                                     Morojink
    //                                                 </h5>
    //                                                 <h6>
    //                                                     Customer
    //                                                 </h6>
    //                                             </div>
    //                                             <i class="fa fa-quote-left" aria-hidden="true"></i>
    //                                         </div>
    //                                         <p>
    //                                             Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
    //                                             tempor incididunt ut
    //                                             labore
    //                                             et
    //                                             dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
    //                                             ullamco laboris nisi ut
    //                                             aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
    //                                             in voluptate velit esse
    //                                             cillum
    //                                             dolore eu fugia
    //                                         </p>
    //                                     </div>
    //                                 </div>
    //                             </div>
    //                         </div>
    //                     </div>
    //                 </div>
    //             </div>
    //             <div class="carousel_btn-box">
    //                 <a class="carousel-control-prev" href="#customCarousel2" role="button" data-slide="prev">
    //                     <i class="fa fa-angle-left" aria-hidden="true"></i>
    //                     <span class="sr-only">Previous</span>
    //                 </a>
    //                 <a class="carousel-control-next" href="#customCarousel2" role="button" data-slide="next">
    //                     <i class="fa fa-angle-right" aria-hidden="true"></i>
    //                     <span class="sr-only">Next</span>
    //                 </a>
    //             </div>
    //         </div>
    //     </div>
    // </section>
    // <!-- end client section -->
    ?>
    <!-- contact section -->

    <!-- end contact section -->
@endsection
