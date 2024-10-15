@extends('backend.layouts.app')
@section('title', 'Modifier le quiz')

@push('styles')
<!-- Pick date -->
<link rel="stylesheet" href="{{asset('vendor/pickadate/themes/default.css')}}">
<link rel="stylesheet" href="{{asset('vendor/pickadate/themes/default.date.css')}}">
@endpush

@section('content')

<div class="content-body">
    <!-- row -->
    <div class="container-fluid">

        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Modifier le quiz</h4>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Accueil</a></li>
                    <li class="breadcrumb-item active"><a href="{{route('quiz.index')}}">Quiz</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0);">Modifier le quiz</a></li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12 col-xxl-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Info Basique</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{route('quiz.update',encryptor('encrypt', $quiz->id))}}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <input type="hidden" name="uptoken" value="{{encryptor('encrypt',$quiz->id)}}">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Title</label>
                                        <input type="text" class="form-control" name="quizTitle"
                                            value="{{old('quizTitle',$quiz->title)}}">
                                    </div>
                                    @if($errors->has('quizTitle'))
                                    <span class="text-danger"> {{ $errors->first('quizTitle') }}</span>
                                    @endif
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Cours</label>
                                        <select class="form-control" name="courseId">
                                            @forelse ($course as $c)
                                            <option value="{{$c->id}}" {{old('courseId', $quiz->course_id) ==
                                                $c->id?'selected':''}}>
                                                {{$c->title_en}}</option>
                                            @empty
                                            <option value="">Quiz non trouvé</option>
                                            @endforelse
                                        </select>
                                    </div>
                                    @if($errors->has('courseId'))
                                    <span class="text-danger"> {{ $errors->first('courseId') }}</span>
                                    @endif
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <button type="submit" class="btn btn-primary">Submit</button>
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

@endsection

@push('scripts')
<!-- pickdate -->
<script src="{{asset('vendor/pickadate/picker.js')}}"></script>
<script src="{{asset('vendor/pickadate/picker.time.js')}}"></script>
<script src="{{asset('vendor/pickadate/picker.date.js')}}"></script>

<!-- Pickdate -->
<script src="{{asset('js/plugins-init/pickadate-init.js')}}"></script>
@endpush
