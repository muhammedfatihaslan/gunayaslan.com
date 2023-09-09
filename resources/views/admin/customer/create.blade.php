@extends('admin.core.head')
@section('content')
    <div class="row container">
        <div class="col-lg-12 col-md-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-5 ">MÜŞTERİ LİSTESİ</h6>
                    </div>
                </div>
                <div class="row container">
                    <div class="col-lg-12 mx-3 ">
                        <form method="POST" action="{{ route('admin.customer.store') }}">
                            {{ @csrf_field() }}
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <div class="input-group input-group-static mb-4">
                                        <label for="exampleFormControlSelect1" class="ms-0">Example select</label>
                                        <select class="form-control" name="level" id="exampleFormControlSelect1">
                                            <option value="1">Şirket</option>
                                            <option selected value="2">İşletme Defteri</option>
                                            <option value="3">Basit Usul</option>
                                            <option value="4">Serbest Meslek</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-group input-group-outline my-3">
                                        <label class="form-label">Mükellef Ad-Soyad</label>
                                        <input type="text" name="name" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group input-group-outline my-3">
                                        <label class="form-label">T.C. Kimlik Numarası</label>
                                        <input type="text" name="tcid" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-group input-group-outline  my-3">
                                        <label class="form-label">Vergi Numarası</label>
                                        <input type="text" name="taxid" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group input-group-outline my-3">
                                        <label class="form-label">Faaliyet Kodu</label>
                                        <input type="text" name="activitycode" class="form-control">
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-group input-group-outline my-3">
                                        <label class="form-label">Telefon Numarası</label>
                                        <input type="text" name="telephone" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group input-group-outline my-3">
                                        <label class="form-label">E-Mail Adresi</label>
                                        <input type="email" name="email" class="form-control">
                                    </div>
                                </div>

                            </div>
                            <button type="submit" class="my-3">Müşteri Ekle</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
