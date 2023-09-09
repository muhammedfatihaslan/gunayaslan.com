@extends('admin.core.head')
@section('content')
    <div class="row container">
        <div class="col-lg-12 col-md-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-5 ">{{ Str::upper($customer[0]['name']) }}</h6>

                    </div>
                </div>
                <div class="row container">
                    <div class="col-lg-12 mx-3 ">
                        <form method="POST" action="{{ route('admin.notebook.update') }}">
                            {{ @csrf_field() }}
                            <input type="hidden" name="cusid" value="{{ $customer[0]['id'] }}">
                            <div class="row mt-5">
                                <div class="col-md-10">
                                    <textarea name="note" id="" cols="50" rows="10">{{ App\Models\Notebook::getField('cusid', $customer[0]['id'], 'note') }}</textarea>
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
