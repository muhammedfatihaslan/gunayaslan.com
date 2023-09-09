@extends('front.core.head')

@section('content_head')
    <!-- info section -->
    <section class="contact_section layout_padding-bottom mt-5" style="color:white">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Bize Mail Gönderin
                </h2>
            </div>
            <div class="row">
                <div class="col-md-8 col-lg-6 mx-auto">
                    <div class="form_container">
                        <form action="">
                            <div>
                                <input style="color:White" type="text" name="name" placeholder="Ad - Soyad" />
                            </div>
                            <div>
                                <input style="color:White" type="email" name="email"
                                    placeholder="Email Adresinizi Giriniz" />
                            </div>
                            <div>
                                <input style="color:White" type="text" name="tel"
                                    placeholder="Telefon Numaranızı Giriniz" />
                            </div>
                            <div>
                                <input style="color:White" type="text" name="message" class="message-box"
                                    placeholder="Mesajınız" />
                            </div>
                            <div class="btn_box ">
                                <button type="submit">
                                    Gönder
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end info section -->
@endsection
