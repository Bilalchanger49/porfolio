<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bilal Portfolio</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

        <link rel="shortcut icon" type="image/x-icon"  href="{{asset('assets/bilal_pic.png')}}">

        <link href="{{ asset('assets/common/lib/mdi-icon/css/materialdesignicons.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/common/lib/fontawesome/css/all.min.css') }}" rel="stylesheet" />
        {{-- <link href="{{ asset('assets/common/lib/boxicons/css/boxicons.min.css') }}" rel="stylesheet"/> --}}
        {{-- <link href="{{ asset('assets/common/lib/iziToast/css/iziToast.min.css') }}" rel="stylesheet" /> --}}
        <link href="{{ asset('assets/common/lib/aos/aos.css') }}" rel="stylesheet">
        <!-- Template Main CSS File -->
        <link href="{{ asset('assets/themes/procyon/css/styles.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/themes/procyon/css/custom.css') }}" rel="stylesheet">

        {{-- <!-- Styles -->
        <style>
            :root {
              --z-accent-color: {{$accentColor}};
            }
            .bg-primary, {
                background-color: {{$accentColor.' !important'}};
            }

            a {
                color: {{$accentColor}};
            }

            a:hover {
                color: rgba({{$accentColorRGB}}, .7);
            }

            .form-control:focus {
                border-color: rgba({{$accentColorRGB}}, .5) !important;
                box-shadow: none;
            }

            .border-primary {
                border-color: var(--z-accent-color) !important;
            }

            .text-primary {
                color: {{$accentColor.' !important'}};
            }
        </style> --}}

    </head>

    <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

        {{-- @include('common.preloader2') --}}
        <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
            <div class="container">
                <a class="navbar-brand" href="#"><span>Bi</span>lal Ahmed</a>
                <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="oi oi-menu"></span> Menu
                </button>
                <div class="collapse navbar-collapse" id="ftco-nav">
                    <ul class="navbar-nav nav ml-auto">
                        <li class="nav-item"><a href="#home-section" class="nav-link"><span>Home</span></a></li>
                        {{-- @if ($portfolioConfig['visibility']['about']) --}}
                            <li class="nav-item"><a href="#about-section" class="nav-link"><span>About</span></a></li>
                        {{-- @endif --}}
                        {{-- @if ($portfolioConfig['visibility']['experiences'] || $portfolioConfig['visibility']['education'] || $portfolioConfig['visibility']['skills']) --}}
                            <li class="nav-item"><a href="#resume-section" class="nav-link"><span>Resume</span></a></li>
                        {{-- @endif --}}
                        {{-- @if ($portfolioConfig['visibility']['services']) --}}
                            <li class="nav-item"><a href="#services-section" class="nav-link"><span>Services</span></a></li>
                        {{-- @endif --}}
                        {{-- @if ($portfolioConfig['visibility']['projects']) --}}
                            <li class="nav-item"><a href="#projects-section" class="nav-link"><span>Projects</span></a></li>
                        {{-- @endif --}}
                        {{-- @if ($portfolioConfig['visibility']['contact']) --}}
                            <li class="nav-item"><a href="#contact-section" class="nav-link"><span>Contact</span></a></li>
                        {{-- @endif --}}
                    </ul>
                </div>
            </div>
        </nav>
        {{-- <section class="hero-wrap js-fullheight" id="hero" style="background-image: url('{{asset($about->cover)}}');"> --}}
            <section class="hero-wrap js-fullheight" id="hero"  style="background-image: url('{{asset('assets/cover.png')}}');">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text js-fullheight justify-content-center align-items-center">
                    <div class="col-lg-8 col-md-6 d-flex align-items-center" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                        <div class="text text-center">
                            <h1>Bilal Ahmed</h1>
                            <h2>
                                <span id="typed-strings"></span>
                                {{-- <span
                                class="txt-rotate"
                                data-period="2000"
                                data-rotate='{!! json_encode(json_decode($about->taglines)) !!}'>
                                </span> --}}
                            </h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mouse d-lg-block d-none">
                <a href="#" class="mouse-icon">
                    <div class="mouse-wheel"><span class="bx bxs-chevrons-down"></span></div>
                </a>
            </div>

        </section>

        {{-- @if ($portfolioConfig['visibility']['about']) --}}
        <section class="ftco-about img ftco-section ftco-no-pt ftco-no-pb goto-here" id="about-section">
            <div class="container">
                <div class="row d-flex no-gutters">
                    <div class="col-md-6 col-lg-6 d-flex mt-5 mt-lg-0">
                        <div class="img-about img d-flex align-items-stretch">
                            <div class="overlay"></div>
                            <img class="img d-flex align-self-stretch align-items-center mx-auto my-auto lazy rounded-circle" src="{{asset('assets/bilal_pic.png')}}"/>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 pl-md-5 py-5">
                        <div class="row justify-content-start pb-3">
                            <div class="col-md-12 heading-section">
                                <h2 class="mb-4">About Me</h2>
                                <p>I am a Software Enginner</p>
                                <ul class="about-info mt-4 px-md-0 px-2">
                                    <li class="d-flex"><span>Name:</span> <span>Bilal Ahmed</span></li>
                                    {{-- @if ($about->email && $about->email !== '') --}}
                                    <li class="d-flex"><span>Email:</span> <span>bilalchnager49@gmail.com</span></li>
                                    {{-- @endif --}}
                                    {{-- @if ($about->phone && $about->phone !== '') --}}
                                    <li class="d-flex"><span>Phone:</span> <span>03495101379</span></li>
                                    {{-- @endif --}}
                                    {{-- @if ($about->address && $about->address !== '') --}}
                                    <li class="d-flex"><span>Address:</span> <span>G 14-4 Islamabad</span></li>
                                    {{-- @endif --}}
                                </ul>
                            </div>
                        </div>
                        {{-- @if ($portfolioConfig['visibility']['cv']) --}}
                        <div class="counter-wrap d-flex mt-md-3" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                            <div class="text">
                                <p><a href="" class="btn btn-primary py-3 px-3" download>Download CV</a></p>
                            </div>
                        </div>
                        {{-- @endif --}}
                    </div>
                </div>
            </div>
        </section>

        <section class="contact-section ftco-no-pb social-icon-block">
            <div class="container">
                <div class="row d-flex">
                    {{-- @if ($about->social_links) --}}
                        {{-- @foreach (json_decode($about->social_links) as $social) --}}
                            <div class="col-6 col-md-4 col-lg-2 mb-lg-4" data-aos="zoom-in">
                                <div class="align-self-stretch box text-center p-3 shadow">
                                    <a href="#" target="_blank">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                           <img src="{{asset('assets/linkedin_icon.png')}}" alt="">
                                        </div>
                                        <div>
                                            <p class="mb-0">Linkedin</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-2 mb-lg-4" data-aos="zoom-in">
                                <div class="align-self-stretch box text-center p-3 shadow">
                                    <a href="#" target="_blank">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                           <img src="{{asset('assets/github.png')}}" alt="">
                                        </div>
                                        <div>
                                            <p class="mb-0">Git Hub</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-2 mb-lg-4" data-aos="zoom-in">
                                <div class="align-self-stretch box text-center p-3 shadow">
                                    <a href="#" target="_blank">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                           <img src="{{asset('assets/mail.png')}}" alt="">
                                        </div>
                                        <div>
                                            <p class="mb-0">Mail</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        {{-- @endforeach --}}
                    {{-- @endif --}}
                </div>
            </div>
        </section>
        {{-- @endif --}}

        {{-- @if ($portfolioConfig['visibility']['experiences'] || $portfolioConfig['visibility']['education'] || $portfolioConfig['visibility']['skills']) --}}
        <section class="ftco-section ftco-no-pb" id="resume-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <nav id="navi">
                            <ul>
                                {{-- @if ($portfolioConfig['visibility']['education']) --}}
                                <li><a href="#page-1">Education</a></li>
                                {{-- @endif --}}
                                {{-- @if ($portfolioConfig['visibility']['experiences']) --}}
                                <li><a href="#page-2">Experience</a></li>
                                {{-- @endif --}}
                                {{-- @if ($portfolioConfig['visibility']['skills']) --}}
                                <li><a href="#page-3">Skills</a></li>
                                {{-- @endif --}}
                            </ul>
                        </nav>
                    </div>
                    <div class="col-md-9">
                        {{-- @if ($portfolioConfig['visibility']['education']) --}}
                        <div id="page-1" class= "page one">
                            <h2 class="heading">Education</h2>
                            {{-- @if ($education) --}}
                                {{-- @foreach ($education as $value) --}}
                                    <div class="resume-wrap d-flex" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fas fa-book-open"></span>
                                        </div>
                                        <div class="text pl-3">
                                            <span class="date">2017 - 2019</span>
                                            <h2>Matric</h2>
                                            <span class="position">Army Public School and Collage</span>
                                            {{-- <p class="mb-0">CGPA : 2.8 outof 4.0</p> --}}
                                            {{-- <p>{{$value->thesis && $value->thesis !== '' ? 'Thesis: '.$value->thesis : '' }}</p> --}}
                                        </div>
                                    </div>
                                    <div class="resume-wrap d-flex" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fas fa-book-open"></span>
                                        </div>
                                        <div class="text pl-3">
                                            <span class="date">2019 - 2021</span>
                                            <h2>Pre Enginnering</h2>
                                            <span class="position">Islamabad Model Collage F10-4</span>
                                            {{-- <p class="mb-0">CGPA : 2.8 outof 4.0</p> --}}
                                            {{-- <p>{{$value->thesis && $value->thesis !== '' ? 'Thesis: '.$value->thesis : '' }}</p> --}}
                                        </div>
                                    </div>
                                    <div class="resume-wrap d-flex" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fas fa-book-open"></span>
                                        </div>
                                        <div class="text pl-3">
                                            <span class="date">2021 - Present</span>
                                            <h2>BS Software Engineering</h2>
                                            <span class="position">Riphah International University</span>
                                            <p class="mb-0">CGPA : 2.8 outof 4.0</p>
                                            {{-- <p>{{$value->thesis && $value->thesis !== '' ? 'Thesis: '.$value->thesis : '' }}</p> --}}
                                        </div>
                                    </div>
                                {{-- @endforeach --}}
                            {{-- @endif --}}
                        </div>
                        {{-- @endif --}}
                        {{-- @if ($portfolioConfig['visibility']['experiences']) --}}
                        <div id="page-2" class= "page two">
                            <h2 class="heading">Experience</h2>
                            {{-- @if ($experiences) --}}
                                {{-- @foreach ($experiences as $experience) --}}
                                <div class="resume-wrap d-flex" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fas fa-briefcase"></span>
                                    </div>
                                    <div class="text pl-3">
                                        <span class="date">May 2022 - August 2022</span>
                                        <h2>Front End Developer (intern)</h2>
                                        <span class="position">EziLine (Pvt) Limited </span>
                                        <p>I was an intern as front end Developer</p>
                                    </div>
                                </div>
                                    <div class="resume-wrap d-flex" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fas fa-briefcase"></span>
                                        </div>
                                        <div class="text pl-3">
                                            <span class="date">january 2024</span>
                                            <h2>Laravel intern</h2>
                                            <span class="position">Soft Tech Media (Pvt) Limited </span>
                                            <p>I am an intern as laravel Developer and curently working their</p>
                                        </div>
                                    </div>
                                {{-- @endforeach --}}
                            {{-- @endif --}}
                        </div>
                        {{-- @endif --}}
                        {{-- @if ($portfolioConfig['visibility']['skills']) --}}
                        <div id="page-3" class= "page three">
                            <h2 class="heading">Skills</h2>
                            {{-- @if ((int)$portfolioConfig['visibility']['skillProficiency']) --}}
                                {{-- @if (!empty($skills)) --}}
                                    <div class="row progress-circle mb-5">
                                        {{-- @foreach ($skills as $key => $skill) --}}
                                            {{-- @if ($key < 3) --}}
                                                <div class="col-lg-4 mb-4" data-aos="zoom-in">
                                                    <div class="bg-white rounded-lg shadow p-4 z-hover">
                                                        <h2 class="h5 font-weight-bold text-center mb-4">Laravel</h2>
                                                        <div class="progress mx-auto mb-4" data-value='80'>
                                                            <span class="progress-left">
                                                                <span class="progress-bar border-primary"></span>
                                                            </span>
                                                            <span class="progress-right">
                                                                <span class="progress-bar border-primary"></span>
                                                            </span>
                                                            <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                                                                <div class="h2 font-weight-bold">80<sup class="small">%</sup></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 mb-4" data-aos="zoom-in">
                                                    <div class="bg-white rounded-lg shadow p-4 z-hover">
                                                        <h2 class="h5 font-weight-bold text-center mb-4">php</h2>
                                                        <div class="progress mx-auto mb-4" data-value='80'>
                                                            <span class="progress-left">
                                                                <span class="progress-bar border-primary"></span>
                                                            </span>
                                                            <span class="progress-right">
                                                                <span class="progress-bar border-primary"></span>
                                                            </span>
                                                            <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                                                                <div class="h2 font-weight-bold">80<sup class="small">%</sup></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 mb-4" data-aos="zoom-in">
                                                    <div class="bg-white rounded-lg shadow p-4 z-hover">
                                                        <h2 class="h5 font-weight-bold text-center mb-4">React js</h2>
                                                        <div class="progress mx-auto mb-4" data-value='70'>
                                                            <span class="progress-left">
                                                                <span class="progress-bar border-primary"></span>
                                                            </span>
                                                            <span class="progress-right">
                                                                <span class="progress-bar border-primary"></span>
                                                            </span>
                                                            <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                                                                <div class="h2 font-weight-bold">70<sup class="small">%</sup></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            {{-- @endif --}}
                                        {{-- @endforeach --}}
                                    </div>
                                {{-- @endif --}}
                                {{-- @if (!empty($skills)) --}}
                                <div class="row">
                                    {{-- @foreach ($skills as $key => $skill) --}}
                                        {{-- @if ($key >= 3) --}}
                                        <div class="col-md-6">
                                            <div class="progress-wrap" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                                                <h3>Html</h3>
                                                <div class="progress">
                                                    <div class="progress-bar color-1" role="progressbar" aria-valuenow="100"
                                                    aria-valuemin="0" aria-valuemax="100" style="width:100%">
                                                    <span>100%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="progress-wrap" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                                                <h3>CSS</h3>
                                                <div class="progress">
                                                    <div class="progress-bar color-1" role="progressbar" aria-valuenow="100"
                                                    aria-valuemin="0" aria-valuemax="100" style="width:100%">
                                                    <span>100%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="progress-wrap" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                                                <h3>Javascript</h3>
                                                <div class="progress">
                                                    <div class="progress-bar color-1" role="progressbar" aria-valuenow="100"
                                                    aria-valuemin="0" aria-valuemax="100" style="width:90%">
                                                    <span>90%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="progress-wrap" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                                                <h3>MySql</h3>
                                                <div class="progress">
                                                    <div class="progress-bar color-1" role="progressbar" aria-valuenow="100"
                                                    aria-valuemin="0" aria-valuemax="100" style="width:80%">
                                                    <span>80%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="progress-wrap" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                                                <h3>Bootstrap</h3>
                                                <div class="progress">
                                                    <div class="progress-bar color-1" role="progressbar" aria-valuenow="100"
                                                    aria-valuemin="0" aria-valuemax="100" style="width:90%">
                                                    <span>90%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="progress-wrap" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                                                <h3>Livewire</h3>
                                                <div class="progress">
                                                    <div class="progress-bar color-1" role="progressbar" aria-valuenow="100"
                                                    aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                                    <span>70%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- @endif --}}
                                    {{-- @endforeach --}}
                                </div>
                                {{-- @endif --}}
                            {{-- @else --}}
                                {{-- <div class="row progress-circle mb-5">
                                    @foreach ($skills as $key => $skill)
                                        <div class="col-lg-4 col-md-6 mb-4" data-aos="zoom-in">
                                            <div class="bg-white rounded-lg shadow p-4 z-hover">
                                                <h2 class="h5 font-weight-bold text-center">javascript</h2>
                                            </div>
                                        </div>
                                     @endforeach
                                </div> --}}
                            {{-- @endif --}}
                        </div>
                        {{-- @endif --}}
                    </div>
                </div>
            </div>
        </section>
        {{--
        @endif


        @if ($portfolioConfig['visibility']['services']) --}}
        <section class="ftco-section" id="services-section">
            <div class="container-fluid px-md-5">
                <div class="row justify-content-center py-5 mt-5">
                    <div class="col-md-12 heading-section text-center">
                        <h2 class="mb-4">Services</h2>
                    </div>
                </div>
                <div class="row">
                    {{-- @if (!empty($services)) --}}
                        {{-- @foreach ($services as $service) --}}
                            <div class="col-md-4 text-center d-flex" data-aos="zoom-in">
                                <div class="services-1 shadow z-hover">
                                    <span class="icon">
                                        <img class="w-50 d-inline-block" src="{{asset('assets/website_development.png')}}" alt=""></img>
                                    </span>
                                    <div class="desc">
                                        <h3 class="mb-5">Web development</h3>
                                        <p>I will create a fully functional laravel website from scratch </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 text-center d-flex" data-aos="zoom-in">
                                <div class="services-1 shadow z-hover">
                                    <span class="icon">
                                        <img class="w-50 d-inline-block" src="{{asset('assets/bug_fixing.png')}}" alt=""></img>
                                    </span>
                                    <div class="desc">
                                        <h3 class="mb-5">Bug Fixing</h3>
                                        <p>I will Fix bugs in your HTML CSS javascript php laravel and React js code</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 text-center d-flex" data-aos="zoom-in">
                                <div class="services-1 shadow z-hover">
                                    <span class="icon">
                                        <img class="w-50 d-inline-block" src="{{asset('assets/new_feature.png')}}" alt=""></img>
                                    </span>
                                    <div class="desc">
                                        <h3 class="mb-5">New Feature</h3>
                                        <p>I will add a new feature in your existing website created in HTML CSS javascript php laravel and React js </p>
                                    </div>
                                </div>
                            </div>
                        {{-- @endforeach --}}
                    {{-- @endif --}}
                </div>
            </div>
        </section>
        {{-- @endif --}}

        {{-- @if ($portfolioConfig['visibility']['projects']) --}}
        <section class="ftco-section ftco-project" id="projects-section">
            <div class="container-fluid px-md-0">
                <div class="row no-gutters justify-content-center pb-5">
                    <div class="col-md-12 heading-section text-center">
                        <h2 class="mb-4">Projects</h2>
                    </div>
                </div>
                {{-- <div id="react-project-root" data-accentcolor="{{$accentColor}}"  data-demomode="{{$demoMode}}"/> --}}
                <div class="d-flex">
                    <div class="col-md-4 text-center d-flex container" data-aos="zoom-in">
                        <div class="services-1 shadow z-hover">
                                <div class="w-100 mb-5"><img class="w-100" src="{{asset('assets/Arman Exchange.JPG')}}" alt=""></div>
                            <div class="desc">
                                <h3 class="mb-5">Arman Exchange</h3>
                                <p>Created With laravel</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 text-center d-flex container" data-aos="zoom-in">
                        <div class="services-1 shadow z-hover">
                                <div class="w-100 mb-5"><img class="w-100" src="{{asset('assets/school management system.JPG')}}" alt=""></div>
                            <div class="desc">
                                <h3 class="mb-5">Student Management System</h3>
                                <p>Created With laravel</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 text-center d-flex container" data-aos="zoom-in">
                        <div class="services-1 shadow z-hover">
                                <div class="w-100 mb-5"><img class="w-100" src="{{asset('assets/bilal_cunstruction.JPG')}}" alt=""></div>
                            <div class="desc">
                                <h3 class="mb-5">Bilal Cunstruction</h3>
                                <p>Created Html Css Javascript</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="col-md-4 text-center d-flex container" data-aos="zoom-in">
                        <div class="services-1 shadow z-hover">
                                <div class="w-100 mb-5"><img class="w-100" src="{{asset('assets/NewsApp.JPG')}}" alt=""></div>
                            <div class="desc">
                                <h3 class="mb-5">NewsApp</h3>
                                <p>Created With React js</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 text-center d-flex container" data-aos="zoom-in">
                        <div class="services-1 shadow z-hover">
                                <div class="w-100 mb-5"><img class="w-100" src="{{asset('assets/TextPlayer.JPG')}}" alt=""></div>
                            <div class="desc">
                                <h3 class="mb-5">TextPlayer</h3>
                                <p>Created With React js</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        {{--
        @endif

        @if ($portfolioConfig['visibility']['contact']) --}}
        <section class="ftco-section contact-section ftco-no-pb" id="contact-section" data-aos="zoom-in">
            <div class="container">
                <div class="row justify-content-center mb-5 pb-3">
                    <div class="col-md-7 heading-section text-center">
                        <h2 class="mb-4">Contact Me</h2>
                    </div>
                </div>

                <div class="row no-gutters block-9">
                    <div class="col-md-6 order-md-last d-flex">
                        <form action="#" method="POST" id="contact-me-form" class="bg-light p-4 p-md-5 contact-form" >
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Your Name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="email" name="email" placeholder="Your Email">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
                            </div>
                            <div class="form-group">
                                <textarea id="body" name="body" cols="30" rows="7" class="form-control" placeholder="Body"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                            </div>
                        </form>
                    </div>
                  <div class="col-md-6 d-flex">
                        <div class="align-self-stretch box text-center p-4">
                            <div class="card-body">
                                {{-- @if ($about->address) --}}
                                    <p class="mb-0"><strong>Address</strong></p>
                                    <p class="pb-2 text-muted">G14 Islamabad</p>
                                {{-- @endif --}}
                                {{-- @if ($about->email) --}}
                                    <p class="mb-0"><strong>Email</strong></p>
                                    <p class="pb-2 text-muted">bilalchanger49@gmail.com</p>
                                {{-- @endif --}}
                                {{-- @if ($about->phone) --}}
                                    <p class="mb-0"><strong>Phone</strong></p>
                                    <p class="pb-2 text-muted">03495101379</p>
                                {{-- @endif --}}
                                {{-- @if ($portfolioConfig['visibility']['cv']) --}}
                                    {{-- <p class="mb-0"><strong>CV</strong></p>
                                    <div>
                                        <a href="{{$about->cv}}" class="text-muted" download>
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" version="1.1" viewBox="0 0 16 16" height="1.5rem" width="1.5rem" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M13.156 9.211c-0.213-0.21-0.686-0.321-1.406-0.331-0.487-0.005-1.073 0.038-1.69 0.124-0.276-0.159-0.561-0.333-0.784-0.542-0.601-0.561-1.103-1.34-1.415-2.197 0.020-0.080 0.038-0.15 0.054-0.222 0 0 0.339-1.923 0.249-2.573-0.012-0.089-0.020-0.115-0.044-0.184l-0.029-0.076c-0.092-0.212-0.273-0.437-0.556-0.425l-0.171-0.005c-0.316 0-0.573 0.161-0.64 0.403-0.205 0.757 0.007 1.889 0.39 3.355l-0.098 0.239c-0.275 0.67-0.619 1.345-0.923 1.94l-0.040 0.077c-0.32 0.626-0.61 1.157-0.873 1.607l-0.271 0.144c-0.020 0.010-0.485 0.257-0.594 0.323-0.926 0.553-1.539 1.18-1.641 1.678-0.032 0.159-0.008 0.362 0.156 0.456l0.263 0.132c0.114 0.057 0.234 0.086 0.357 0.086 0.659 0 1.425-0.821 2.48-2.662 1.218-0.396 2.604-0.726 3.819-0.908 0.926 0.521 2.065 0.883 2.783 0.883 0.128 0 0.238-0.012 0.327-0.036 0.138-0.037 0.254-0.115 0.325-0.222 0.139-0.21 0.168-0.499 0.13-0.795-0.011-0.088-0.081-0.196-0.157-0.271zM3.307 12.72c0.12-0.329 0.596-0.979 1.3-1.556 0.044-0.036 0.153-0.138 0.253-0.233-0.736 1.174-1.229 1.642-1.553 1.788zM7.476 3.12c0.212 0 0.333 0.534 0.343 1.035s-0.107 0.853-0.252 1.113c-0.12-0.385-0.179-0.992-0.179-1.389 0 0-0.009-0.759 0.088-0.759v0zM6.232 9.961c0.148-0.264 0.301-0.543 0.458-0.839 0.383-0.724 0.624-1.29 0.804-1.755 0.358 0.651 0.804 1.205 1.328 1.649 0.065 0.055 0.135 0.111 0.207 0.166-1.066 0.211-1.987 0.467-2.798 0.779v0zM12.952 9.901c-0.065 0.041-0.251 0.064-0.37 0.064-0.386 0-0.864-0.176-1.533-0.464 0.257-0.019 0.493-0.029 0.705-0.029 0.387 0 0.502-0.002 0.88 0.095s0.383 0.293 0.318 0.333v0z">
                                                </path>
                                                <path
                                                    d="M14.341 3.579c-0.347-0.473-0.831-1.027-1.362-1.558s-1.085-1.015-1.558-1.362c-0.806-0.591-1.197-0.659-1.421-0.659h-7.75c-0.689 0-1.25 0.561-1.25 1.25v13.5c0 0.689 0.561 1.25 1.25 1.25h11.5c0.689 0 1.25-0.561 1.25-1.25v-9.75c0-0.224-0.068-0.615-0.659-1.421v0zM12.271 2.729c0.48 0.48 0.856 0.912 1.134 1.271h-2.406v-2.405c0.359 0.278 0.792 0.654 1.271 1.134v0zM14 14.75c0 0.136-0.114 0.25-0.25 0.25h-11.5c-0.135 0-0.25-0.114-0.25-0.25v-13.5c0-0.135 0.115-0.25 0.25-0.25 0 0 7.749-0 7.75 0v3.5c0 0.276 0.224 0.5 0.5 0.5h3.5v9.75z">
                                                </path>
                                            </svg>
                                        </a>
                                    </div> --}}
                                {{-- @endif --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{--@endif

        @if ($portfolioConfig['visibility']['footer']) --}}
        <footer class="footer">
            <div class="h4 title text-center text-muted">Bilal Ahmed</div>
            <div class="text-center text-muted"><p>Full Stack Developer</p></div>
            <div class="text-center text-muted"><p>©2024  All rights reserved.</p></div>

        </footer>



        <script src="{{ asset('assets/common/lib/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/common/lib/jquery-migrate/jquery-migrate.min.js') }}"></script>
        <script src="{{ asset('assets/common/lib/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/common/lib/jquery.easing/jquery.easing.min.js') }}"></script>
        <script src="{{ asset('assets/common/lib/typed/typed.js') }}"></script>
        <script src="{{ asset('assets/common/lib/iziToast/js/iziToast.min.js') }}"></script>
        <script src="{{ asset('assets/common/lib/jquery-validation/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('assets/common/lib/waypoints/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('assets/common/lib/jquery.stellar/jquery.stellar.min.js') }}"></script>
        <script src="{{ asset('assets/common/lib/aos/aos.js') }}"></script>
        <script src="{{ asset('assets/common/lib/scrollax/scrollax.min.js') }}"></script>
        <script src="{{ asset('assets/common/lib/jquery.lazy/jquery.lazy.min.js') }}"></script>
        <script src="{{ asset('assets/themes/procyon/js/main.js') }}"></script>
        <script src="{{ asset('js/client/frontend/roots/projects.js') }}"></script>
        <script>
                        var typedStrings = new Typed('#typed-strings', {
                            strings: ["I am a Full Stack Developer"],
                            typeSpeed: 70,
                            backSpeed: 40,
                            smartBackspace: true,
                            loop: true
                        });
        </script>
        {{-- <script>
            $(function() {
                $('.lazy').lazy();

                if ($('#szn-preloader').length) {
                    $('#szn-preloader').delay(100).fadeOut('slow', function() {
                        $(this).remove();
                    });
                }

                if ($('#typed-strings').length) {
                    @if($about->taglines)
                        var typedStrings = new Typed('#typed-strings', {
                            strings: {!! json_encode(json_decode($about->taglines)) !!},
                            typeSpeed: 70,
                            backSpeed: 40,
                            smartBackspace: true,
                            loop: true
                        });
                    @endif
                }

                $('#contact-me-form').validate({
                    rules: {
                        name: {
                            required: true
                        },
                        email: {
                            required: true,
                            email: true,
                        },
                        subject: {
                            required: true
                        },
                        body: {
                            required: true
                        }
                    },
                    submitHandler: function(form, event)
                    {
                        const button = $('#contact-me-form #submit');

                        button.attr('disabled', true);
                        button.html(`<span class="content">
                            Sending <i class="fas fa-spinner fa-spin"></i>
                        </span>`);

                        $.ajax({
                            url: '{!! route('contact-me') !!}',
                            dataType: 'json',
                            data: $('#contact-me-form').serialize(),
                            type:'post',
                            success: function(response) {
                                if (response.status === 400) {
                                    var errorArray = response.payload;
                                    $.each( errorArray, function( key, errors ) {
                                        $.each( errors, function( key2, errorMessage ) {
                                            showNotification( errorMessage, 'error', false);
                                        });
                                    });
                                } else if (response.status !== 200) {
                                    showNotification(response.message, 'error', false);
                                } else if (response.status === 200) {
                                    showNotification(response.message, 'success', false);
                                    $('#contact-me-form').trigger('reset');
                                }
                            },
                            error: function (jqXHR, exception) {
                                console.log(jqXHR);
                            },
                            complete: function(data) {
                                button.attr('disabled', false);
                                button.html(`<span class="content">
                                    Send <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M476 3.2L12.5 270.6c-18.1 10.4-15.8 35.6 2.2 43.2L121 358.4l287.3-253.2c5.5-4.9 13.3 2.6 8.6 8.3L176 407v80.5c0 23.6 28.5 32.9 42.5 15.8L282 426l124.6 52.2c14.2 6 30.4-2.9 33-18.2l72-432C515 7.8 493.3-6.8 476 3.2z">
                                        </path>
                                    </svg>
                                </span>`);
                            }
                        });
                    }
                });

                function showNotification(message = 'Something went wrong', type = 'error', sticky = false) {
                    iziToast.show({
                        title: '',
                        message: message,
                        messageSize: 12,
                        position: 'topRight',
                        theme: 'dark',
                        pauseOnHover: true,
                        timeout: sticky === false ? 5000 : false,
                        progressBarColor: type === 'success' ? '#00ffb8' : '#ffafb4',
                        color: type === 'success' ? '#565c70' : '#565c70',
                        messageColor: type === 'success' ? '#00ffb8' : '#ffafb4',
                        icon: type === 'success' ? 'fas fa-check' : 'fas fa-times-circle'
                    });
                }
            });
        </script>
        @if (!empty($portfolioConfig['script']['footer']) && $portfolioConfig['script']['footer'] != '')
            <script>
                {!!$portfolioConfig['script']['footer']!!}
            </script>
        @endif
        @include('common.pixelTracking') --}}
    </body>
</html>
