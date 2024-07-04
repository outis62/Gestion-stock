@extends('web-site.layout.public')

@section('title', 'Espace public')
@section('website-layout-content')
    <!-- start hero section -->
    <section class="section pb-0 hero-section" id="hero">
        <div class="bg-overlay bg-overlay-pattern"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-sm-10">
                    <div class="text-center mt-lg-5 pt-5">
                        <h1 class="display-6 fw-bold mb-3 lh-base">La meilleure façon de gérer votre stock, <span
                                class="text-success">Optimiza </span></h1>
                        <p class="lead text-muted lh-base">Pour tirer le meilleur parti d'Optimiza,</p>

                        <div class="d-flex gap-2 justify-content-center mt-4">
                            <a href="{{route('login')}}" class="btn btn-success">Connectez-vous <i
                                    class="ri-arrow-right-line align-middle ms-1"></i></a>
                            {{-- <a href="pages-pricing.html" class="btn btn-danger">View Plans <i
                                    class="ri-eye-line align-middle ms-1"></i></a> --}}
                        </div>
                    </div>

                    <div class="mt-4 mt-sm-5 pt-sm-5 mb-sm-n5 demo-carousel">
                        <div class="demo-img-patten-top d-none d-sm-block">
                            <img src="{{ asset('assets/images/landing/img-pattern.png') }}" class="d-block img-fluid"
                                alt="...">
                        </div>
                        <div class="demo-img-patten-bottom d-none d-sm-block">
                            <img src="{{ asset('assets/images/landing/img-pattern.png') }}" class="d-block img-fluid"
                                alt="...">
                        </div>
                        <div class="carousel slide carousel-fade" data-bs-ride="carousel">
                            <div class="carousel-inner shadow-lg p-2 bg-white rounded">
                                <div class="carousel-item active" data-bs-interval="2000">
                                    <img src="{{ asset('assets/images/demos/dashboar-web-site.PNG') }}" class="d-block w-100"
                                        alt="...">
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="{{ asset('assets/images/demos/dashboar-web-site.PNG') }}" class="d-block w-100"
                                        alt="...">
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="{{ asset('assets/images/demos/dashboard-secretaire-v1.PNG') }}" class="d-block w-100"
                                        alt="...">
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="{{ asset('assets/images/demos/dashboar-web-site.PNG') }}" class="d-block w-100"
                                        alt="...">
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="{{ asset('assets/images/demos/dashboar-web-site.PNG') }}" class="d-block w-100"
                                        alt="...">
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="{{ asset('assets/images/demos/dashboard-web-site-secretaire.PNG') }}" class="d-block w-100"
                                        alt="...">
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="{{ asset('assets/images/demos/dashboard-web-site-secretaire.PNG') }}" class="d-block w-100"
                                        alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end container -->
        <div class="position-absolute start-0 end-0 bottom-0 hero-shape-svg">
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                viewBox="0 0 1440 120">
                <g mask="url(&quot;#SvgjsMask1003&quot;)" fill="none">
                    <path d="M 0,118 C 288,98.6 1152,40.4 1440,21L1440 140L0 140z">
                    </path>
                </g>
            </svg>
        </div>

    </section>

    <section class="section" id="services">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center mb-5">
                        <h1 class="mb-3 ff-secondary fw-bold lh-base">Pourquoi choisir <span class="text-success">Optimiza</span></h1>
                        <p class="text-muted">Optimiza se distingue comme une solution de gestion de stock pour plusieurs raisons. 
                            Voici quelques avantages qui expliquent pourquoi choisir 
                            Optimiza peut être bénéfique pour votre entreprise.</p>
                    </div>
                </div>

            </div>


            <div class="row g-3">
                <div class="col-lg-4">
                    <div class="d-flex p-3">
                        <div class="flex-shrink-0 me-3">
                            <div class="avatar-sm icon-effect">
                                <div class="avatar-title bg-transparent text-success rounded-circle">
                                    <i class="ri-pencil-ruler-2-line fs-36"></i>
                                </div>
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="fs-18">Automatisation et Efficacité</h5>
                            <p class="text-muted my-3 ff-secondary">Optimiza permet d'automatiser de nombreuses tâches répétitives liées à la gestion des stocks,</p>
                            <div>
                                <a href="javascript:void(0)" class="fs-13 fw-semibold">Lire la suite <i
                                        class="ri-arrow-right-s-line align-bottom"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-4">
                    <div class="d-flex p-3">
                        <div class="flex-shrink-0 me-3">
                            <div class="avatar-sm icon-effect">
                                <div class="avatar-title bg-transparent text-success rounded-circle">
                                    <i class="ri-palette-line fs-36"></i>
                                </div>
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="fs-18">Précision et Réduction des Erreurs</h5>
                            <p class="text-muted my-3 ff-secondary">L'automatisation des processus de gestion des stocks minimise les erreurs humaines,</p>
                            <div>
                                <a href="javascript:void(0)" class="fs-13 fw-semibold">Lire la suite <i
                                        class="ri-arrow-right-s-line align-bottom"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-4">
                    <div class="d-flex p-3">
                        <div class="flex-shrink-0 me-3">
                            <div class="avatar-sm icon-effect">
                                <div class="avatar-title bg-transparent text-success rounded-circle">
                                    <i class="ri-lightbulb-flash-line fs-36"></i>
                                </div>
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="fs-18">Analyse et Prévisions Avancées</h5>
                            <p class="text-muted my-3 ff-secondary">Optimiza offre des outils d'analyse et de prévision puissants qui vous aident à anticiper la demande future, à identifier les tendances de vente,</p>
                            <div>
                                <a href="javascript:void(0)" class="fs-13 fw-semibold">Lire la suite <i
                                        class="ri-arrow-right-s-line align-bottom"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-4">
                    <div class="d-flex p-3">
                        <div class="flex-shrink-0 me-3">
                            <div class="avatar-sm icon-effect">
                                <div class="avatar-title bg-transparent text-success rounded-circle">
                                    <i class="ri-links-line fs-36"></i>
                                </div>
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="fs-18">Intégration Facile avec d'autres Systèmes</h5>
                            <p class="text-muted my-3 ff-secondary">Optimiza peut être intégré avec d'autres systèmes tels que les ERP, CRM, et plateformes de vente en ligne.</p>
                            <div>
                                <a href="javascript:void(0)" class="fs-13 fw-semibold">Lire la suite <i
                                        class="ri-arrow-right-s-line align-bottom"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-4">
                    <div class="d-flex p-3">
                        <div class="flex-shrink-0 me-3">
                            <div class="avatar-sm icon-effect">
                                <div class="avatar-title bg-transparent text-success rounded-circle">
                                    <i class="ri-stack-line fs-36"></i>
                                </div>
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="fs-18">Personnalisation et Flexibilité</h5>
                            <p class="text-muted my-3 ff-secondary">You usually get a broad range of options to play with.
                                This enables you to use a single theme across multiple.</p>
                            <div>
                                <a href="javascript:void(0)" class="fs-13 fw-semibold">Lire la suite <i
                                        class="ri-arrow-right-s-line align-bottom"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-4">
                    <div class="d-flex p-3">
                        <div class="flex-shrink-0 me-3">
                            <div class="avatar-sm icon-effect">
                                <div class="avatar-title bg-transparent text-success rounded-circle">
                                    <i class=" ri-artboard-line fs-36"></i>
                                </div>
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="fs-18">Interface Utilisateur Conviviale</h5>
                            <p class="text-muted my-3 ff-secondary">Personalise your own website, no matter what theme and
                                what customization options.</p>
                            <div>
                                <a href="javascript:void(0)" class="fs-13 fw-semibold">Lire la suite <i
                                        class="ri-arrow-right-s-line align-bottom"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->

                <div class="col-lg-4">
                    <div class="d-flex p-3">
                        <div class="flex-shrink-0 me-3">
                            <div class="avatar-sm icon-effect">
                                <div class="avatar-title bg-transparent text-success rounded-circle">
                                    <i class="ri-slideshow-line fs-36"></i>
                                </div>
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="fs-18">Réduction des Coûts et Amélioration de la Rentabilité</h5>
                            <p class="text-muted my-3 ff-secondary">Responsive design is a graphic user interface (GUI)
                                design approach used to create content.</p>
                            <div>
                                <a href="javascript:void(0)" class="fs-13 fw-semibold">Lire la suite <i
                                        class="ri-arrow-right-s-line align-bottom"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-4">
                    <div class="d-flex p-3">
                        <div class="flex-shrink-0 me-3">
                            <div class="avatar-sm icon-effect">
                                <div class="avatar-title bg-transparent text-success rounded-circle">
                                    <i class="ri-customer-service-line fs-36"></i>
                                </div>
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="fs-18">Support Client et Mise à Jour Continue</h5>
                            <p class="text-muted my-3 ff-secondary">Google Fonts is a collection of 915 fonts, all
                                available
                                to use for free on your website.</p>
                            <div>
                                <a href="javascript:void(0)" class="fs-13 fw-semibold">Lire la suite <i
                                        class="ri-arrow-right-s-line align-bottom"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-4">
                    <div class="d-flex p-3">
                        <div class="flex-shrink-0 me-3">
                            <div class="avatar-sm icon-effect">
                                <div class="avatar-title bg-transparent text-success rounded-circle">
                                    <i class="ri-briefcase-5-line fs-36"></i>
                                </div>
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="fs-18">Top Industry Specialists</h5>
                            <p class="text-muted my-3 ff-secondary">An industrial specialist works with industrial
                                operations to ensure that manufacturing facilities work.</p>
                            <div>
                                <a href="#" class="fs-13 fw-semibold">Learn More <i
                                        class="ri-arrow-right-s-line align-bottom"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end services -->

    <!-- start features -->
    <section class="section bg-light py-5" id="features">
        <div class="container">
            <div class="row align-items-center gy-4">
                <div class="col-lg-6 col-sm-7 mx-auto">
                    <div>
                        <img src="{{ asset('assets/images/landing/features/img-1.png') }}" alt=""
                            class="img-fluid mx-auto">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="text-muted">
                        <div class="avatar-sm icon-effect mb-4">
                            <div class="avatar-title bg-transparent rounded-circle text-success h1">
                                <i class="ri-collage-line fs-36"></i>
                            </div>
                        </div>
                        <h3 class="mb-3 fs-20">A propos d'<span class="text-success">Optimiza</span></h3>
                        <p class="mb-4 ff-secondary fs-16">Collection widgets specialize in displaying many
                            elements of the
                            same type, such as a collection of pictures from a collection of articles from a
                            news app or a
                            collection of messages from a communication app.</p>

                        <div class="row pt-3">
                            <div class="col-3">
                                <div class="text-center">
                                    <h4>5</h4>
                                    <p>Dashboards</p>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="text-center">
                                    <h4>150+</h4>
                                    <p>Pages</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="text-center">
                                    <h4>7+</h4>
                                    <p>Functional Apps</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>

    <!-- start features -->
    <section class="section">
        <div class="container">
            <div class="row align-items-center gy-4">
                <div class="col-lg-6 order-2 order-lg-1">
                    <div class="text-muted">
                        <h5 class="fs-12 text-uppercase text-success">Caractéristiques</h5>
                        <h4 class="mb-3">Garder le control peu import le support</h4>
                        <p class="mb-4 ff-secondary">Quality Dashboards (QD) is a condition-specific,
                            actionable web-based
                            application for quality reporting and population management that is
                            integrated into the
                            Electronic Health Record (EHR).</p>

                        <div class="row">
                            <div class="col-sm-5">
                                <div class="vstack gap-2">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 me-2">
                                            <div class="avatar-xs icon-effect">
                                                <div class="avatar-title bg-transparent text-success rounded-circle h2">
                                                    <i class="ri-check-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h5 class="fs-14 mb-0">Ecommerce</h5>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 me-2">
                                            <div class="avatar-xs icon-effect">
                                                <div class="avatar-title bg-transparent text-success rounded-circle h2">
                                                    <i class="ri-check-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h5 class="fs-14 mb-0">Analytics</h5>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 me-2">
                                            <div class="avatar-xs icon-effect">
                                                <div class="avatar-title bg-transparent text-success rounded-circle h2">
                                                    <i class="ri-check-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h5 class="fs-14 mb-0">CRM</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="vstack gap-2">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 me-2">
                                            <div class="avatar-xs icon-effect">
                                                <div class="avatar-title bg-transparent text-success rounded-circle h2">
                                                    <i class="ri-check-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h5 class="fs-14 mb-0">Crypto</h5>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 me-2">
                                            <div class="avatar-xs icon-effect">
                                                <div class="avatar-title bg-transparent text-success rounded-circle h2">
                                                    <i class="ri-check-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h5 class="fs-14 mb-0">Projects</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4">
                            <a href="index.html" class="btn btn-primary">Learn More <i
                                    class="ri-arrow-right-line align-middle ms-1"></i></a>
                        </div>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-6 col-sm-7 col-10 ms-auto order-1 order-lg-2">
                    <div>
                        <img src="{{ asset('assets/images/landing/features/img-2.png') }}" alt=""
                            class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
        <!-- end container -->
    </section>
    <!-- start Work Process -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center mb-5">
                        <h3 class="mb-3 fw-bold">Our Work Process</h3>
                        <p class="text-muted mb-4 ff-secondary">In an ideal world this website wouldn’t
                            exist, a client
                            would acknowledge the importance of having web copy before the Proin vitae
                            ipsum vel ex finibus
                            semper design starts.</p>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row text-center">
                <div class="col-lg-4">
                    <div class="process-card mt-4">
                        <div class="process-arrow-img d-none d-lg-block">
                            <img src="{{ asset('assets/images/landing/process-arrow-img.png') }}" alt=""
                                class="img-fluid">
                        </div>
                        <div class="avatar-sm icon-effect mx-auto mb-4">
                            <div class="avatar-title bg-transparent text-success rounded-circle h1">
                                <i class="ri-quill-pen-line"></i>
                            </div>
                        </div>

                        <h5>Tell us what you need</h5>
                        <p class="text-muted ff-secondary">The profession and the employer and your
                            desire to make your
                            mark.</p>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-4">
                    <div class="process-card mt-4">
                        <div class="process-arrow-img d-none d-lg-block">
                            <img src="{{ asset('assets/images/landing/process-arrow-img.png') }}" alt=""
                                class="img-fluid">
                        </div>
                        <div class="avatar-sm icon-effect mx-auto mb-4">
                            <div class="avatar-title bg-transparent text-success rounded-circle h1">
                                <i class="ri-user-follow-line"></i>
                            </div>
                        </div>

                        <h5>Get free quotes</h5>
                        <p class="text-muted ff-secondary">The most important aspect of beauty was,
                            therefore, an inherent
                            part.</p>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-4">
                    <div class="process-card mt-4">
                        <div class="avatar-sm icon-effect mx-auto mb-4">
                            <div class="avatar-title bg-transparent text-success rounded-circle h1">
                                <i class="ri-book-mark-line"></i>
                            </div>
                        </div>

                        <h5>Deliver high quality product</h5>
                        <p class="text-muted ff-secondary">We quickly learn to fear and thus
                            automatically avoid
                            potentially.</p>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>

    <!-- start contact -->
    <section class="section" id="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center mb-5">
                        <h3 class="mb-3 fw-bold">Contactez-nous</h3>
                        <p class="text-muted mb-4 ff-secondary">We thrive when coming up with innovative
                            ideas but also
                            understand that a smart concept should be supported with faucibus sapien
                            odio measurable
                            results.</p>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row gy-4">
                <div class="col-lg-4">
                    <div>
                        <div class="mt-4">
                            <h5 class="fs-13 text-muted text-uppercase">Office Address 1:</h5>
                            <div class="ff-secondary fw-semibold">4461 Cedar Street Moro, <br />AR 72368
                            </div>
                        </div>
                        <div class="mt-4">
                            <h5 class="fs-13 text-muted text-uppercase">Office Address 2:</h5>
                            <div class="ff-secondary fw-semibold">2467 Swick Hill Street <br />New
                                Orleans, LA</div>
                        </div>
                        <div class="mt-4">
                            <h5 class="fs-13 text-muted text-uppercase">Working Hours:</h5>
                            <div class="ff-secondary fw-semibold">9:00am to 6:00pm</div>
                        </div>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-8">
                    <div>
                        <form>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-4">
                                        <label for="name" class="form-label fs-13">Name</label>
                                        <input name="name" id="name" type="text"
                                            class="form-control bg-light border-light" placeholder="Your name*">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-4">
                                        <label for="email" class="form-label fs-13">Email</label>
                                        <input name="email" id="email" type="email"
                                            class="form-control bg-light border-light" placeholder="Your email*">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mb-4">
                                        <label for="subject" class="form-label fs-13">Subject</label>
                                        <input type="text" class="form-control bg-light border-light" id="subject"
                                            name="subject" placeholder="Your Subject.." />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label for="comments" class="form-label fs-13">Message</label>
                                        <textarea name="comments" id="comments" rows="3" class="form-control bg-light border-light"
                                            placeholder="Your message..."></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 text-end">
                                    <input type="submit" id="submit" name="send"
                                        class="submitBnt btn btn-primary" value="Send Message">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
