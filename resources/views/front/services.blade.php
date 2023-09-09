@extends('front.core.head')

@section('content_head')
    <!-- about section -->

    <section class="about_section layout_padding">
        <div class="container" style="color:white">
            <div class="row">
                <div class="col-md-6  col-lg-8">
                    <div class="detail-box">
                        <div class="heading_container ">
                            <h2 class="mb-5 ms-2 border-bottom">
                                Mali Müşavir Ne İş Yapar ?
                            </h2>
                        </div>
                        <ul style="font-size: 18px">
                            <li class="mb-2 ">
                                Gerçek veya tüzel kişilere ait işletmelerin aylık veya özel hesap dönemi var ise buna uygun
                                olarak gelir ve giderlerini, resmi evraklarını mevzuata uygun şekilde resmi defterlerine
                                kayıt
                                eder.
                            </li>
                            <li class="mb-2">
                                Gerçek veya tüzel kişilere ait işletmelerin muhasebesel sistemlerini kurar ve işletme
                                ihtiyaçları doğrultusunda geliştirmeler yapılmasını sağlar.
                            </li>
                            <li class="mb-2">
                                Hizmet verdikleri işletmelerin aylık olarak bordrolarını hazırlayarak gönderir ve ilgili
                                mutabakat işlemlerini yapar.Bilanço, gelir tablosu ve benzeri mali tabloları düzenler.
                            </li>
                            <li class="mb-2">
                                Gerçek veya tüzel kişilere ait vergi beyannamelerini hazırlar, ilgili beyannameleri
                                elektronik
                                ortamda onaylayıp tahakkuk fişlerini alır.
                            </li>
                            <li class="mb-2">
                                Tahakkuk fişlerini mükelleflere göndererek verginin ödenmesini sağlar.
                            </li>
                            <li class="mb-2">
                                İşletme personellerinin işe giriş ve çıkışlarını, aylık hizmet bildirgesi gibi SGK
                                bildirgelerini hazırlar ve elektronik ortamda onaylar.
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="">
                        <img style="width:530px;height:300px" src="{{ asset('front/images/imageus.jpeg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="detail-box">
                        <ul style="font-size: 18px">
                            <li class="mb-2">
                                Hizmet verdiği gerçek veya tüzel kişilere ait işletmelerin sahiplerine muhasebe ve vergi
                                konularında danışmanlık yapar.
                            </li>
                            <li class="mb-2">
                                Devir, tasfiye, birleşme, bölünme, adres ve faaliyet değişikliği gibi konularda hizmet
                                verdiği
                                işletmelere yardımcı olur.
                            </li>
                            <li class="mb-2">
                                İşletmelerin mali kayıtlarını şeffaf hale getirerek, gizlilik çerçevesinde iç kontrolleri ve
                                finansal güvenliği sağlarlar.
                            </li>
                            <li class="mb-2">
                                Fon, vergi, gecikme faizi ve ceza işlemlerindeki tutarsızlıkları çözümler.
                            </li>
                            <li class="mb-2">
                                KDV iadesi, sermaye artırımı gibi özel amaçlı raporları oluşturur.
                            </li>
                        </ul>
                        <a class="mt-5" href="{{ route('front.contact') }}">
                            Daha Fazlası İçin İletişime Geçiniz
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end about section -->



    <!-- end info section -->
@endsection
