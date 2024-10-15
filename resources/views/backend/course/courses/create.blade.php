@extends('backend.layouts.app')
@section('title', 'Add Course')

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
                    <h4>Ajouter Cours</h4>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Accueil</a></li>
                    <li class="breadcrumb-item active"><a href="{{route('course.index')}}">Cours</a></li>
                    <li class="breadcrumb-item active"><a href="{{route('course.create')}}">Ajouter Cours</a></li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12 col-xxl-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Information sur le cours</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{route('course.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Titre</label>
                                        <input type="text" class="form-control" name="courseTitle_en"
                                            value="{{old('courseTitle_en')}}">
                                    </div>
                                    @if($errors->has('courseTitle_en'))
                                    <span class="text-danger"> {{ $errors->first('courseTitle_en') }}</span>
                                    @endif
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Titre en anglais</label>
                                        <input type="text" class="form-control" name="courseTitle_bn"
                                            value="{{old('courseTitle_bn')}}">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Description</label>
                                        <textarea class="form-control" name="courseDescription_en">{{old('courseDescription_en')}}</textarea>
                                    </div>
                                    @if($errors->has('courseDescription_en'))
                                    <span class="text-danger"> {{ $errors->first('courseDescription_en') }}</span>
                                    @endif
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Description en anglais</label>
                                        <textarea class="form-control" name="courseDescription_bn"
                                            value="{{old('courseDescription_bn')}}"></textarea>
                                    </div>
                                    @if($errors->has('courseDescription_bn'))
                                    <span class="text-danger"> {{ $errors->first('courseDescription_bn') }}</span>
                                    @endif
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Categorie</label>
                                        <select class="form-control" name="categoryId">
                                            @forelse ($courseCategory as $c)
                                            <option value="{{$c->id}}" {{old('categoryId')==$c->id?'selected':''}}>
                                                {{$c->category_name}}</option>
                                            @empty
                                            <option value="">Categorie pas trouvé</option>
                                            @endforelse
                                        </select>
                                    </div>
                                    @if($errors->has('categoryId'))
                                    <span class="text-danger"> {{ $errors->first('categoryId') }}</span>
                                    @endif
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Instructeur</label>
                                        <select class="form-control" name="instructorId">
                                            @forelse ($instructor as $i)
                                            <option value="{{$i->id}}" {{old('instructorId')==$i->id?'selected':''}}>
                                                {{$i->name_en}}</option>
                                            @empty
                                            <option value="">Instructeur pas trouvé</option>
                                            @endforelse
                                        </select>
                                    </div>
                                    @if($errors->has('instructorId'))
                                    <span class="text-danger"> {{ $errors->first('instructorId') }}</span>
                                    @endif
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Type</label>
                                        <select class="form-control" name="courseType">
                                            <option value="free" @if(old('courseType')=='free' ) selected @endif>Free
                                            </option>
                                            <option value="paid" @if(old('courseType')=='paid' ) selected @endif>Paid
                                            </option>
                                            <option value="subscription" @if(old('courseType')=='subscription' )
                                                selected @endif>Subscription-based</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Niveau</label>
                                        <select class="form-control" name="courseDifficulty">
                                            <option value="beginner" @if(old('courseDifficulty')=='beginner' ) selected
                                                @endif>Débutant</option>
                                            <option value="intermediate" @if(old('courseDifficulty')=='intermediate' )
                                                selected @endif>Intermédiere
                                            </option>
                                            <option value="advanced" @if(old('courseDifficulty')=='advanced' ) selected
                                                @endif>Advancé
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Prix</label>
                                        <input type="number" class="form-control" name="coursePrice"
                                            value="{{old('coursePrice')}}">
                                    </div>
                                    @if($errors->has('coursePrice'))
                                    <span class="text-danger"> {{ $errors->first('coursePrice') }}</span>
                                    @endif
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Ancien prix</label>
                                        <input type="number" class="form-control" name="courseOldPrice"
                                            value="{{old('courseOldPrice')}}">
                                    </div>
                                    @if($errors->has('courseOldPrice'))
                                    <span class="text-danger"> {{ $errors->first('courseOldPrice') }}</span>
                                    @endif
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Prix ​​d'abonnement</label>
                                        <input type="number" class="form-control" name="subscription_price"
                                            value="{{old('subscription_price')}}">
                                    </div>
                                    @if($errors->has('subscription_price'))
                                    <span class="text-danger"> {{ $errors->first('subscription_price') }}</span>
                                    @endif
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Commence à partir de</label>
                                        <input type="date" class="form-control" name="start_from"
                                            value="{{old('start_from')}}">
                                    </div>
                                    @if($errors->has('start_from'))
                                    <span class="text-danger"> {{ $errors->first('start_from') }}</span>
                                    @endif
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Durré</label>
                                        <input type="number" class="form-control" name="duration"
                                            value="{{old('duration')}}">
                                    </div>
                                    @if($errors->has('duration'))
                                    <span class="text-danger"> {{ $errors->first('duration') }}</span>
                                    @endif
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Nombre de lecon</label>
                                        <input type="number" class="form-control" name="lesson"
                                            value="{{old('lesson')}}">
                                    </div>
                                    @if($errors->has('lesson'))
                                    <span class="text-danger"> {{ $errors->first('lesson') }}</span>
                                    @endif
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Prerequis</label>
                                        <textarea class="form-control" name="prerequisites_en"
                                            value="{{old('prerequisites_en')}}"></textarea>
                                    </div>
                                    @if($errors->has('prerequisites_en'))
                                    <span class="text-danger"> {{ $errors->first('prerequisites_en') }}</span>
                                    @endif
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Prerequis en anglais</label>
                                        <textarea class="form-control" name="prerequisites_bn"
                                            value="{{old('prerequisites_bn')}}"></textarea>
                                    </div>
                                    @if($errors->has('prerequisites_bn'))
                                    <span class="text-danger"> {{ $errors->first('prerequisites_bn') }}</span>
                                    @endif
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Code du Cours</label>
                                        <input type="text" class="form-control" name="course_code"
                                            value="{{old('course_code')}}">
                                    </div>
                                    @if($errors->has('course_code'))
                                    <span class="text-danger"> {{ $errors->first('course_code') }}</span>
                                    @endif
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">URL de la vidéo miniature</label>
                                        <input type="text" class="form-control" name="thumbnail_video" value="{{old('thumbnail_video')}}">
                                    </div>
                                    @if($errors->has('thumbnail_video'))
                                    <span class="text-danger"> {{ $errors->first('thumbnail_video') }}</span>
                                    @endif
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Tag du Cours</label>
                                        <select class="form-control" name="tag">
                                            <option value="popular" @if(old('tag')=='popular' ) selected @endif>Populaire</option>
                                            <option value="featured" @if(old('tag')=='featured' ) selected @endif>Featuré
                                            </option>
                                            <option value="upcoming" @if(old('tag')=='upcoming' ) selected @endif>Prochaine
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                {{-- <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Status</label> 
                                        <select class="form-control" name="status">
                                            <option value="1" @if(old('status')==1) selected @endif>Active</option>
                                            <option value="0" @if(old('status')==0) selected @endif>Inactive</option>
                                        </select>
                                    </div>
                                </div> --}}
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label class="form-label">Image</label>
                                    <div class="form-group fallback w-100">
                                        <input type="file" class="dropify" data-default-file="" name="image">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label class="form-label">Image miniature</label>
                                    <div class="form-group fallback w-100">
                                        <input type="file" class="dropify" data-default-file="" name="thumbnail_image">
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

@endsection

@push('scripts')
<!-- pickdate -->
<script src="{{asset('vendor/pickadate/picker.js')}}"></script>
<script src="{{asset('vendor/pickadate/picker.time.js')}}"></script>
<script src="{{asset('vendor/pickadate/picker.date.js')}}"></script>

<!-- Pickdate -->
<script src="{{asset('js/plugins-init/pickadate-init.js')}}"></script>
@endpush