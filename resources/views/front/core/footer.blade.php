 <!-- info section -->

 <section class="info_section layout_padding2">
     <div class="container">
         <div class="row">
             <div class="col-md-6">
                 <div class="info_contact">
                     <h4>
                         Adres
                     </h4>
                     <div class="contact_link_box">
                         <a href="">
                             <i class="fa fa-map-marker" aria-hidden="true"></i>
                             <span>
                                 Malatya / Türkiye
                             </span>
                         </a>
                         <a href="tel:05373879384">
                             <i class="fa fa-phone" aria-hidden="true"></i>
                             <span>
                                 0537 387 93 84
                             </span>
                         </a>
                         <a href="">
                             <i class="fa fa-envelope" aria-hidden="true"></i>
                             <span>
                                 gunayaslan44@hotmail.com
                             </span>
                         </a>
                     </div>
                 </div>
             </div>
             <div class="col-md-6">
                 <div class="info_link_box">
                     <h4>
                         Sayfalar
                     </h4>
                     <div class="info_links">
                         <a class="" href="{{ route('front.index') }}">
                             Anasayfa
                         </a>
                         <a class="" href="{{ route('front.services') }}">
                             Hizmetlerimiz
                         </a>
                         <a class="" href="{{ route('front.contact') }}">
                             İletişim
                         </a>
                     </div>
                 </div>
             </div>

             <?php
             //  <div class="col-md-6 mb-0">
             // <h4>
             //      Subscribe
             //  </h4>
             //  <form action="#">
             //      <input type="text" placeholder="Enter email" />
             //      <button type="submit">
             //          Mail Gönderin
             //      </button>
             //  </form>
             // </div>
             ?>
         </div>
     </div>
 </section>
 <!-- info section -->
 <!-- footer section -->
 <footer class="footer_section">
     <div class="container">
         <p>
             &copy; <span id="displayYear"></span> Tüm Hakları saklıdır.</a>
         </p>
     </div>
 </footer>
 <!-- footer section -->
 <!-- jQery -->
 <script src="{{ asset('front/js/jquery-3.4.1.min.js') }}"></script>
 <!-- bootstrap js -->
 <script src="{{ asset('front/js/bootstrap.js') }}"></script>
 <script src="{{ asset('front/js/bootstrap.bundle.min.js') }}"
     integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
 </script>
 <!-- custom js -->
 <script src="{{ asset('front/js/custom.js') }}"></script>
 </body>

 </html>
