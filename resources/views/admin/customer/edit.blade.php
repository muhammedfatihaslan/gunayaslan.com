@extends('admin.core.head')
@section('content')
    <div class="row container">
        <div class="col-lg-12 col-md-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-5 ">MÜŞTERİ BİLGİLERİNİ DÜZENLE</h6>
                    </div>
                </div>
                <div class="row container">
                    <div class="col-lg-12 mx-3 ">
                        <form method="POST" action="{{ route('admin.customer.update', ['id' => $customer[0]['id']]) }}">
                            {{ @csrf_field() }}
                            {{-- <div class="row mt-3"> --}}
                            {{-- <div class="col-md-6">
                                    <div class="input-group input-group-static mb-4">
                                        <label for="exampleFormControlSelect1" class="ms-0">Defter Türünü Seçiniz</label>
                                        <select class="form-control" name="level" id="exampleFormControlSelect1">
                                            <option value="1">Şirket</option>
                                            <option selected value="2">İşletme Defteri</option>
                                            <option value="3">Basit Usul</option>
                                            <option value="4">Serbest Meslek</option>
                                        </select>
                                    </div>
                                </div> --}}
                            {{-- </div> --}}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-group input-group-static  my-3">
                                        <label>Mükellef Ad-Soyad</label>
                                        <input type="text" name="name" value="{{ $customer[0]['name'] }}"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group input-group-static  my-3">
                                        <label>T.C. Kimlik Numarası</label>
                                        <input type="text" name="tcid" value="{{ $customer[0]['tcid'] }}"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-group input-group-static   my-3">
                                        <label>Vergi Numarası</label>
                                        <input type="text" name="taxid" value="{{ $customer[0]['taxid'] }}"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group input-group-static  my-3">
                                        <label>Faaliyet Kodu</label>
                                        <input type="text" name="activitycode" value="{{ $customer[0]['activitycode'] }}"
                                            class="form-control">
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-group input-group-static  my-3">
                                        <label>Telefon Numarası</label>
                                        <input type="text" value="{{ $customer[0]['telephone'] }}" name="telephone"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group input-group-static  my-3">
                                        <label>E-Mail Adresi</label>
                                        <input type="email" value="{{ $customer[0]['email'] }}" name="email"
                                            class="form-control">
                                    </div>
                                </div>

                            </div>
                            <button type="submit" class="my-3">Güncelle</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
