@extends('backend.layouts.app')
@section('title', 'Ajouter un Coupon')

@push('styles')
<!-- Pick date -->
<link rel="stylesheet" href="{{asset('vendor/pickadate/themes/default.css')}}">
<link rel="stylesheet" href="{{asset('vendor/pickadate/themes/default.date.css')}}">
@endpush

@section('content')

<!--**********************************
            Début du contenu
 ***********************************-->
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">

        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Ajouter un Coupon</h4>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Accueil</a></li>
                    <li class="breadcrumb-item active"><a href="{{route('coupon.index')}}">Coupons</a></li>
                    <li class="breadcrumb-item active"><a href="{{route('coupon.create')}}">Ajouter un Coupon</a>
                    </li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12 col-xxl-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Informations du Coupon</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{route('coupon.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Code du Coupon</label>
                                        <input type="text" class="form-control" name="code"
                                            value="{{old('code')}}">
                                    </div>
                                    @if($errors->has('code'))
                                    <span class="text-danger"> {{$errors->first('code')}}</span>
                                    @endif
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Réduction</label>
                                        <input type="text" class="form-control" name="discount"
                                            value="{{old('discount')}}">
                                    </div>
                                    @if($errors->has('discount'))
                                    <span class="text-danger"> {{$errors->first('discount')}}</span>
                                    @endif
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Valable à partir de</label>
                                        <input type="date" class="form-control" name="valid_from"
                                            value="{{old('valid_from')}}">
                                    </div>
                                    @if($errors->has('valid_from'))
                                    <span class="text-danger"> {{$errors->first('valid_from')}}</span>
                                    @endif
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Valable jusqu'à</label>
                                        <input type="date" class="form-control" name="valid_until"
                                            value="{{old('valid_until')}}">
                                    </div>
                                    @if($errors->has('valid_until'))
                                    <span class="text-danger"> {{$errors->first('valid_until')}}</span>
                                    @endif
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <button type="submit" class="btn btn-primary">Soumettre</button>
                                    <button type="submit" class="btn btn-light">Annuler</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!--**********************************
            Fin du contenu
***********************************-->

@endsection

@push('scripts')
<!-- pickdate -->
<script src="{{asset('vendor/pickadate/picker.js')}}"></script>
<script src="{{asset('vendor/pickadate/picker.time.js')}}"></script>
<script src="{{asset('vendor/pickadate/picker.date.js')}}"></script>

<!-- Pickdate -->
<script src="{{asset('js/plugins-init/pickadate-init.js')}}"></script>
@endpush
