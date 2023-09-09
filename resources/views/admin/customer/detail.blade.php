@extends('admin.core.head')
@section('content')
    <div class="row container">
        <div class="col-lg-12 col-md-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-5 ">MÜŞTERİ BİLGİLERİNİ GÖRÜNTÜLE</h6>
                    </div>
                </div>
                <div class="row container">
                    <div class="col-lg-12 mx-3 ">


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
                            <div class="col-md-3">
                                <div class="input-group input-group-static  my-3">
                                    <label>Mükellef Ad-Soyad</label>
                                    <input type="text" name="name" disabled value="{{ $customer[0]['name'] }}"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="input-group input-group-static  my-3">
                                    <button class="btn btn-success"><a href="tel:{{ $customer[0]['telephone'] }}"
                                            class="text-light fw-bold"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="16" height="16" fill="currentColor"
                                                class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                            </svg></a></button>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group input-group-static  my-3">
                                    <label>T.C. Kimlik Numarası</label>
                                    <input type="text" name="tcid" disabled value="{{ $customer[0]['tcid'] }}"
                                        class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group input-group-static   my-3">
                                    <label>Vergi Numarası</label>
                                    <input type="text" disabled name="taxid" value="{{ $customer[0]['taxid'] }}"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group input-group-static  my-3">
                                    <label>Faaliyet Kodu</label>
                                    <input type="text" disabled name="activitycode"
                                        value="{{ $customer[0]['activitycode'] }}" class="form-control">
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            @if (!empty($sgk[0]['cuscode']))
                                <div class="col-md-6">
                                    <div class="input-group input-group-static  my-3">
                                        <label>SGK Şifresi <a href="{{ route('admin.sgk', [$customer[0]['id']]) }}"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                    <path
                                                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                    <path fill-rule="evenodd"
                                                        d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                </svg></a> </label>
                                        <input type="text" disabled value="{{ $sgk[0]['workplacecode'] }}"
                                            class="form-control">
                                    </div>
                                    <div class="input-group input-group-static  my-3">
                                        <label></label>
                                        <input type="text" disabled value="{{ $sgk[0]['cuscode'] }}"
                                            class="form-control">
                                    </div>
                                    <div class="input-group input-group-static  my-3">
                                        <label></label>
                                        <input type="text" disabled value="{{ $sgk[0]['password'] }}"
                                            class="form-control">
                                    </div>
                                </div>
                            @else
                                <div class="col-md-6">
                                    <div class="input-group input-group-static  my-3">
                                        <label>SGK Şifresi <a href="{{ route('admin.sgk', [$customer[0]['id']]) }}"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                    <path
                                                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                    <path fill-rule="evenodd"
                                                        d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                </svg></a> </label>
                                        <input type="text" disabled value="-" name="telephone" class="form-control">
                                    </div>
                                    <div class="input-group input-group-static  my-3">
                                        <label></label>
                                        <input type="text" disabled value="-" class="form-control">
                                    </div>
                                    <div class="input-group input-group-static  my-3">
                                        <label></label>
                                        <input type="text" disabled value="-" class="form-control">
                                    </div>
                                </div>
                            @endif
                            @if (!empty($gib[0]['cuscode']))
                                <div class="col-md-6">
                                    <div class="input-group input-group-static  my-3">
                                        <label>GİB <a href="{{ route('admin.gib', [$customer[0]['id']]) }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                    <path
                                                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                    <path fill-rule="evenodd"
                                                        d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                </svg></a></label>
                                        <input type="text" disabled value="{{ $gib[0]['cuscode'] }}"
                                            class="form-control">
                                    </div>
                                    <div class="input-group input-group-static  my-3">
                                        <label></label>
                                        <input type="email" disabled value="{{ $gib[0]['password'] }}"
                                            class="form-control">
                                    </div>

                                </div>
                            @else
                                <div class="col-md-6">
                                    <div class="input-group input-group-static  my-3">
                                        <label>GİB <a href="{{ route('admin.gib', [$customer[0]['id']]) }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                    <path
                                                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                    <path fill-rule="evenodd"
                                                        d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                </svg></a></label>
                                        <input type="text" disabled value="-" name="text"
                                            class="form-control">
                                    </div>
                                    <div class="input-group input-group-static  my-3">
                                        <label></label>
                                        <input type="email" disabled value="-" name="email"
                                            class="form-control">
                                    </div>

                                </div>
                            @endif
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group input-group-static  my-3">
                                    <label>Telefon Numarası</label>
                                    <input type="text" disabled value="{{ $customer[0]['telephone'] }}"
                                        name="telephone" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group input-group-static  my-3">
                                    <label>E-Mail Adresi</label>
                                    <input type="email" disabled value="{{ $customer[0]['email'] }}" name="email"
                                        class="form-control">
                                </div>
                            </div>
                        </div>
                        @if (!empty($price[0]['priceofmonth']))
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-group input-group-static  my-3">
                                        <label>Aylık Ücret</label>
                                        <input type="text" disabled value="{{ $price[0]['priceofmonth'] }} TL"
                                            name="telephone" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group input-group-static  my-3">
                                        <label>Toplam Borç Miktarı</label>
                                        <input type="text" disabled
                                            value="{{ App\Models\price::getField('cusid', $customer[0]['id'], 'result') }} TL"
                                            name="telephone" class="form-control">
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-group input-group-static  my-3">
                                        <label>Aylık Ücret</label>
                                        <input type="text" disabled value="Ücret Girilmedi" name="telephone"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group input-group-static  my-3">
                                        <label>Toplam Borç Miktarı</label>
                                        <input type="text" disabled value="Ücret Hesaplanamadı" name="telephone"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                        @endif


                        <button class="my-3"><a href="{{ route('admin.customer') }}">Geri Dön</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
