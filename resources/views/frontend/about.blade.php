@extends('frontend.layouts.app')
@section('title', 'About')
@section('header-attr') class="nav-shadow" @endsection

@section('content')
<!-- Breadcrumb Starts Here -->
<div class="py-0">
    <div class="container">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.html" class="fs-6 text-secondary">Accueil</a>
                </li>
                <li class="breadcrumb-item active">
                    <a href="about.html" class="fs-6 text-secondary">A propos</a>
                </li>
            </ol>
        </nav>
    </div>
</div>
<!-- Breadcrumb Ends Here -->

<!-- About Intro Starts Here -->
<section class="about-intro section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 position-relative mt-4 mt-lg-0" style="z-index: 0;">
                <div class="about-intro__img-wrapper">
                    <img src="{{asset('frontend/dist/images/about/intro.jpg')}}" alt="Intro Image"
                        class="img-fluid rounded-2 ms-lg-5 position-relative intro-image" />
                </div>
                <div class="intro-shape">
                    <img src="{{asset('frontend/dist/images/shape/rec04.png')}}" alt="Shape"
                        class="img-fluid shape-01" />
                    <img src="{{asset('frontend/dist/images/shape/dots/dots-img-09.png')}}" alt="Shape"
                        class="img-fluid shape-02" />
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-intro__textContent">
                    <h2 class="font-title--md mb-3">Un Lieu Propice à Votre Épanouissement</h2>
                    <p class="mt-2 mt-lg-1 mb-2 mb-lg-4 text-secondary">
                        Découvrez un environnement idéal pour développer vos compétences. Que vous soyez débutant ou expert, notre plateforme vous offre toutes les ressources nécessaires pour réussir. Apprenez à votre rythme et devenez la meilleure version de vous-même.
                    </p>
                    <p class="text-secondary">
                        Rejoignez une communauté dynamique, où l'entraide et l'innovation sont au cœur de chaque projet.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Intro Ends Here -->

<!-- About Feature Starts Here -->
<section class="section aboutFeature pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-feature dark-feature">
                    <h5 class="text-white font-title--sm">Qui Nous Sommes</h5>
                    <p class="text-lowblack">
                        Nous sommes une équipe passionnée dédiée à fournir des solutions innovantes pour aider chacun à atteindre ses objectifs. Avec une expertise solide et une approche centrée sur l'utilisateur, nous créons des expériences uniques et adaptées aux besoins de nos clients.
                    </p>
                </div>
            </div>
            <div class="col-lg-6 mt-4 mt-lg-0">
                <div class="about-feature">
                    <h5 class="font-title--sm">Notre Mission</h5>
                    <p class="text-secondary">
                        Notre mission est de révolutionner la manière dont les individus et les entreprises interagissent avec la technologie. Nous cherchons à offrir des solutions efficaces et accessibles, tout en favorisant la croissance et l'innovation. À travers nos projets, nous visons à créer un impact positif et durable.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Feature Ends Here -->

<!-- Brands Starts Here -->
<section class="section overflow-hidden brands pb-lg-0">
    <div class="bg-secondary py-80">
        <div class="container">
            <div class="row mb-40">
                <div class="col-lg-6 mx-auto text-center">
                    <div class="brands__titleContent">
                        <h5 class="mb-2 dark-text font-title--sm">
                            Plus de 30 000 écoles et universités apprennent avec nous.
                        </h5>
                        <p class="font-para--lg">
                            Nous sommes fiers de collaborer avec des établissements éducatifs du monde entier pour offrir des solutions d'apprentissage de qualité. Rejoignez-nous pour une expérience enrichissante et innovante.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="brand-area">
                        <div class="brand-area-image">
                            <img src="{{asset('frontend/dist/images/versity/1.png')}}" alt="Brand"
                                class="img-fluid" />
                        </div>
                        <div class="brand-area-image">
                            <img src="{{asset('frontend/dist/images/versity/2.png')}}" alt="Brand"
                                class="img-fluid" />
                        </div>
                        <div class="brand-area-image">
                            <img src="{{asset('frontend/dist/images/versity/3.png')}}" alt="Brand"
                                class="img-fluid" />
                        </div>
                        <div class="brand-area-image">
                            <img src="{{asset('frontend/dist/images/versity/4.png')}}" alt="Brand"
                                class="img-fluid" />
                        </div>
                        <div class="brand-area-image">
                            <img src="{{asset('frontend/dist/images/versity/2.png')}}" alt="Brand"
                                class="img-fluid" />
                        </div>
                        <div class="brand-area-image">
                            <img src="{{asset('frontend/dist/images/versity/5.png')}}" alt="Brand"
                                class="img-fluid" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Brands Ends Here -->

<!-- Best Instructors Starts Here -->
<section class="section best-instructor-featured overflow-hidden main-instructor-featured">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 position-relative">
                <h2 class="text-center mb-40 font-title--md">Un de nos meilleurs Instructeurs</h2>
                <div class="ourinstructor__wrapper mt-lg-5 mt-0">
                    <div class="ourinstructor-active">
                        <div class="mentor">
                            <div class="mentor__img">
                                <img src="{{asset('frontend/dist/images/instructor/03.jpg')}}"
                                    alt="Mentor image" />

                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a href="#" tabindex="0">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" tabindex="0">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" tabindex="0">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" tabindex="0">
                                            <i class="fab fa-youtube"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" tabindex="0">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="mentor__title">
                                <h6>
                                    <a href="instructor-profile.html" tabindex="0">Abram Philips</a>
                                </h6>
                                <p>Adobe Instructeur</p>
                            </div>
                        </div>
                        <div class="mentor">
                            <div class="mentor__img">
                                <img src="{{asset('frontend/dist/images/instructor/02.jpg')}}"
                                    alt="Mentor image" />

                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a href="#" tabindex="0">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" tabindex="0">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" tabindex="0">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" tabindex="0">
                                            <i class="fab fa-youtube"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" tabindex="0">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="mentor__title">
                                <h6>
                                    <a href="instructor-profile.html" tabindex="0">Abram Philips</a>
                                </h6>
                                <p>Adobe Instructeur</p>
                            </div>
                        </div>
                        <div class="mentor">
                            <div class="mentor__img">
                                <img src="{{asset('frontend/dist/images/instructor/3.jpg')}}"
                                    alt="Mentor image" />

                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a href="#" tabindex="0">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" tabindex="0">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" tabindex="0">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" tabindex="0">
                                            <i class="fab fa-youtube"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" tabindex="0">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="mentor__title">
                                <h6>
                                    <a href="instructor-profile.html" tabindex="0">Sheikh Rashed</a>
                                </h6>
                                <p>Adobe Instructeur</p>
                            </div>
                        </div>
                        <div class="mentor">
                            <div class="mentor__img">
                                <img src="{{asset('frontend/dist/images/instructor/04.jpg')}}"
                                    alt="Mentor image" />

                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a href="#" tabindex="0">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" tabindex="0">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" tabindex="0">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" tabindex="0">
                                            <i class="fab fa-youtube"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" tabindex="0">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="mentor__title">
                                <h6>
                                    <a href="instructor-profile.html" tabindex="0">Abram Philips</a>
                                </h6>
                                <p>Adobe Instructeur</p>
                            </div>
                        </div>
                        <div class="mentor">
                            <div class="mentor__img">
                                <img src="{{asset('frontend/dist/images/instructor/1.png')}}"
                                    alt="Mentor image" />

                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a href="#" tabindex="0">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" tabindex="0">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" tabindex="0">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" tabindex="0">
                                            <i class="fab fa-youtube"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" tabindex="0">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="mentor__title">
                                <h6><a href="instructor-profile.html" tabindex="0">Dev Taher</a></h6>
                                <p>Adobe Instructeur</p>
                            </div>
                        </div>
                        <div class="mentor">
                            <div class="mentor__img">
                                <img src="{{asset('frontend/dist/images/instructor/2.png')}}"
                                    alt="Mentor image" />

                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a href="#" tabindex="0">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" tabindex="0">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" tabindex="0">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" tabindex="0">
                                            <i class="fab fa-youtube"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" tabindex="0">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="mentor__title">
                                <h6>
                                    <a href="instructor-profile.html" tabindex="0">Zakir Hossain</a>
                                </h6>
                                <p>Adobe Instructeur</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-instructor-featured-shape">
        <img src="{{asset('frontend/dist/images/shape/dots/dots-img-14.png')}}" alt="shape"
            class="img-fluid shape01" />
        <img src="{{asset('frontend/dist/images/shape/triangel2.png')}}" alt="shape" class="img-fluid shape02" />
    </div>
</section>
@endsection

@push('scripts')
@endpush
