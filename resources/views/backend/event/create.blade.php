@extends('backend.layouts.app')
@section('title', 'Ajouter un Événement')

@push('styles')
<!-- Choisir la date -->
<link rel="stylesheet" href="{{asset('vendor/pickadate/themes/default.css')}}">
<link rel="stylesheet" href="{{asset('vendor/pickadate/themes/default.date.css')}}">
@endpush

@section('content')

<!--**********************************
            Corps du contenu début
 ***********************************-->
<div class="content-body">
    <!-- rangée -->
    <div class="container-fluid">

        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Ajouter un Événement</h4>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Accueil</a></li>
                    <li class="breadcrumb-item active"><a href="{{route('event.index')}}">Événements</a></li>
                    <li class="breadcrumb-item active"><a href="{{route('event.create')}}">Ajouter un Événement</a>
                    </li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12 col-xxl-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Informations sur l'Événement</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{route('event.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Titre de l'Événement</label>
                                        <input type="text" class="form-control" name="title" value="{{old('title')}}">
                                    </div>
                                    @if($errors->has('title'))
                                    <span class="text-danger"> {{$errors->first('title')}}</span>
                                    @endif
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Type de Lieu</label>
                                        <input type="text" class="form-control" name="location"
                                            value="{{old('location')}}">
                                    </div>
                                    @if($errors->has('location'))
                                    <span class="text-danger"> {{$errors->first('location')}}</span>
                                    @endif
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Sujet</label>
                                        <input type="text" class="form-control" name="topic" value="{{old('topic')}}">
                                    </div>
                                    @if($errors->has('topic'))
                                    <span class="text-danger"> {{$errors->first('topic')}}</span>
                                    @endif
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Organisé par</label>
                                        <input type="text" class="form-control" name="hosted_by" value="{{old('hosted_by')}}">
                                    </div>
                                    @if($errors->has('hosted_by'))
                                    <span class="text-danger"> {{$errors->first('hosted_by')}}</span>
                                    @endif
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Description</label>
                                        <textarea name="description" class="form-control">{{old('description')}}</textarea>
                                    </div>
                                    @if($errors->has('description'))
                                    <span class="text-danger"> {{$errors->first('description')}}</span>
                                    @endif
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Objectif de l'Événement</label>
                                        <textarea name="goal" class="form-control">{{old('goal')}}</textarea>
                                    </div>
                                    @if($errors->has('goal'))
                                    <span class="text-danger"> {{$errors->first('goal')}}</span>
                                    @endif
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Date</label>
                                        <input type="date" class="form-control" name="date" value="{{old('date')}}">
                                    </div>
                                    @if($errors->has('date'))
                                    <span class="text-danger"> {{$errors->first('date')}}</span>
                                    @endif
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Image</label>
                                        <input type="file" class="form-control" name="image">
                                    </div>
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
            Corps du contenu fin
***********************************-->

@endsection

@push('scripts')
<!-- choisir date -->
<script src="{{asset('vendor/pickadate/picker.js')}}"></script>
<script src="{{asset('vendor/pickadate/picker.time.js')}}"></script>
<script src="{{asset('vendor/pickadate/picker.date.js')}}"></script>

<!-- Choisir date -->
<script src="{{asset('js/plugins-init/pickadate-init.js')}}"></script>
@endpush
