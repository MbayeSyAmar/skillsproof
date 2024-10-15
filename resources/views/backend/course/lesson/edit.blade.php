@extends('backend.layouts.app')
@section('title', 'Modifier le Cours')

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
                    <h4>Modifier le Cours</h4>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Accueil</a></li>
                    <li class="breadcrumb-item active"><a href="{{route('lesson.index')}}">Leçons de Cours</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0);">Modifier la Leçon</a></li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12 col-xxl-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Informations de Base</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{route('lesson.update',encryptor('encrypt', $lesson->id))}}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <input type="hidden" name="uptoken" value="{{encryptor('encrypt',$lesson->id)}}">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Titre</label>
                                        <input type="text" class="form-control" name="lessonTitle"
                                            value="{{old('lessonTitle',$lesson->title)}}">
                                    </div>
                                    @if($errors->has('lessonTitle'))
                                    <span class="text-danger"> {{ $errors->first('lessonTitle') }}</span>
                                    @endif
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Cours</label>
                                        <select class="form-control" name="courseId">
                                            @forelse ($course as $c)
                                            <option value="{{$c->id}}" {{old('courseId', $lesson->course_id) ==
                                                $c->id?'selected':''}}>
                                                {{$c->title_en}}</option>
                                            @empty
                                            <option value="">Aucune leçon de cours trouvée</option>
                                            @endforelse
                                        </select>
                                    </div>
                                    @if($errors->has('courseId'))
                                    <span class="text-danger"> {{ $errors->first('courseId') }}</span>
                                    @endif
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Description de la Leçon</label>
                                        <textarea class="form-control"
                                            name="lessonDescription">{{old('lessonDescription',$lesson->description)}}</textarea>
                                    </div>
                                    @if($errors->has('lessonDescription'))
                                    <span class="text-danger"> {{ $errors->first('lessonDescription') }}</span>
                                    @endif
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Notes de la Leçon</label>
                                        <textarea class="form-control"
                                            name="lessonNotes">{{old('lessonNotes',$lesson->notes)}}</textarea>
                                    </div>
                                    @if($errors->has('lessonNotes'))
                                    <span class="text-danger"> {{ $errors->first('lessonNotes') }}</span>
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

@endsection

@push('scripts')
<!-- pickdate -->
<script src="{{asset('vendor/pickadate/picker.js')}}"></script>
<script src="{{asset('vendor/pickadate/picker.time.js')}}"></script>
<script src="{{asset('vendor/pickadate/picker.date.js')}}"></script>

<!-- Pickdate -->
<script src="{{asset('js/plugins-init/pickadate-init.js')}}"></script>
@endpush
