@extends('backend.layouts.appAuth')
@section('title', 'Registraion')

@section('content')

<div class="authincation h-100">
    <div class="container h-100">
        <div class="row justify-content-center h-100 align-items-center">
            <div class="col-md-6">
                <div class="authincation-content">
                    <div class="row no-gutters">
                        <div class="col-xl-12">
                            <div class="auth-form">
                                <h4 class="text-center mb-4">Créer votre compte</h4>
                                <form action="{{route('register.store')}}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label><strong>Nom Complet</strong></label>
                                        <input type="text" class="form-control" value="{{old('name')}}" name="name"
                                            id="name" placeholder="Entrez votre nom complet">
                                        @if($errors->has('name'))
                                        <small class="d-block text-danger">{{$errors->first('name')}}</small>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label><strong>Email</strong></label>
                                        <input type="email" class="form-control" value="{{old('email')}}" name="email"
                                            id="email" placeholder="Entrez votre adresse email">
                                        @if($errors->has('email'))
                                        <small class="d-block text-danger">{{$errors->first('email')}}</small>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label><strong>Numéro de téléphone</strong></label>
                                        <input type="text" class="form-control" value="{{old('contact_en')}}"
                                            name="contact_en" id="contact_en" placeholder="Entrez votre numéro de téléphone">
                                        @if($errors->has('contact_en'))
                                        <small class="d-block text-danger">{{$errors->first('contact_en')}}</small>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label><strong>Mot de passe</strong></label>
                                        <input type="password" class="form-control" name="password" id="password"
                                            placeholder="Entrez votre mot de passe">
                                        @if($errors->has('password'))
                                        <small class="d-block text-danger">{{$errors->first('password')}}</small>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label><strong>Confirmez le mot de passe</strong></label>
                                        <input type="password" class="form-control" name="password_confirmation"
                                            id="password_confirmation" placeholder="Confirmez votre mot de passe">
                                    </div>
                                    <div class="text-center mt-4">
                                        <button type="submit" class="btn btn-primary btn-block">Inscription</button>
                                    </div>
                                </form>
                                <div class="new-account mt-3">
                                    <p>Vous avez déjà un compte ? <a class="text-primary" href="{{route('login')}}">Connectez-vous</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
