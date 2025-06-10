
@extends('layouts.app')
@section('content')
<body>

    <!-- header two area start -->

    <!-- header two area end -->
   
    <div class="banner-two-swiper-main-wrapper engineering-banner">
        <!-- SLIDER -->

        <div class="swiper mySwiper-banner2 mySwiper-banner-factrory" dir="ltr">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <!-- banner area start -->
                    <div class="banner-area-start bg_banner-bg-area rts-section-gap bg_image">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="banner-two-inner">
                                        <span>Des solutions industrielles au service de vos ambitions.</span>
                                        <h1 class="title">
                                            Maintenance &  <br>
                                            Fourniture Industrielle <br>
                                        </h1>
                                        <p class="disc">
                                            Nous sommes une entreprise burkinabè spécialisée dans les services de 
                                            maintenance industrielle et la fourniture d’équipements pour les secteurs miniers, 
                                            industriels et logistiques. Nos solutions sur mesure garantissent performance, sécurité 
                                            et durabilité à vos installations.
                                           
                                        </p>
                                        <div class="button-wrapper">
                                            <a href="project-card.html" class="rts-btn btn-primary">Nos Services</a>
                                            <!-- <a href="service.html" class="rts-btn btn-white"></a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- banner area end -->
                </div>
                
                
            </div>
        </div>
        <div class="swiper-button-next"><i class="fa-sharp-duotone fa-light fa-arrow-right"></i>
        </div>
        <div class="swiper-button-prev"><i class="fa-sharp-duotone fa-light fa-arrow-left"></i>
        </div>
        <div class="swiper-pagination"></div>
    </div>


    <!-- about area start -->
    <div class="about-three-area rts-section-gap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 pr--90 pr_md--0 pr_sm--0">
                    <div class="thumbnail-about-three">
                        <div class="reveal-item overflow-hidden aos-init">
                            <div class="reveal-animation reveal-end reveal-primary aos aos-init" data-aos="reveal-end">
                            </div>
                            <img src="assets/images/about/03.webp" alt="journey-area">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 mt_md--25 mt_sm--30">
                    <div class="about-area-right-3">
                        <h2 class="title">MILLPRO</h2>
                        <p class="bold">  MILLPRO est une société dynamique et innovante, spécialisée dans les services de maintenance industrielle, 
                        les fournitures techniques et les solutions adaptées aux secteurs miniers, industriels et logistiques, au Burkina Faso et à l’étranger.
                        Forte d’une expertise multidisciplinaire, MILLPRO propose des services de qualité et des produits adaptés aux besoins spécifiques des 
                        industries extractives.
                        MILLPRO accompagne les entreprises des secteurs miniers et industriels dans leur 
                        fonctionnement quotidien grâce à des services de maintenance performants et des équipements fiables.</p>
                      <!--  <p class="disc"> 
                           
                        MILLPRO est une société dynamique et innovante, spécialisée dans les services de maintenance industrielle, 
                        les fournitures techniques et les solutions adaptées aux secteurs miniers, industriels et logistiques, au Burkina Faso et à l’étranger.
                        Forte d’une expertise multidisciplinaire, MILLPRO propose des services de qualité et des produits adaptés aux besoins spécifiques des 
                        industries extractives.
                        MILLPRO accompagne les entreprises des secteurs miniers et industriels dans leur 
                        fonctionnement quotidien grâce à des services de maintenance performants et des équipements fiables.
                        </p> -->
                        <!-- <div class="call-area-wrapper">
                            <div class="call-area">
                                <img src="assets/images/about/04.webp" alt="about">
                                <div class="info">
                                    <h5 class="title">Markus Danile</h5>
                                    <span>Architect Studio</span>
                                </div>
                            </div>
                            <img src="assets/images/about/05.webp" alt="sig">
                        </div> -->
                        <div class="tab-area-about">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                        data-bs-target="#home" type="button" role="tab" aria-controls="home"
                                        aria-selected="true">Nos Missions</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#profile" type="button" role="tab" aria-controls="profile"
                                        aria-selected="false">Nos Visions</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel"
                                    aria-labelledby="home-tab">
                                    Fournir aux acteurs des secteurs miniers, industriels et logistiques des solutions 
                                    techniques fiables, innovantes et durables en matière de maintenance et de fourniture 
                                    industrielle, afin d’optimiser leurs performances opérationnelles et réduire les interruptions
                                     d’activité.
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    Devenir un leader de référence en Afrique de l’Ouest dans le domaine de la maintenance 
                                    industrielle et de la fourniture d’équipements techniques, reconnu pour son expertise, 
                                    sa réactivité et son engagement envers la qualité.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about area end -->

    <!-- portfolio team area start -->
    <div class="portfolio-team-area-bg rts-section-gap bg_image bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-center-style-one">
                        <span class="pre">Services</span>
                        <h2 class="title">Nos differents services</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt--40">
            <div class="col-lg-12">
                <div class="swiper-wrapper-project">
                    <div class="swiper mySwiper-project-1" dir="ltr">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <!-- single project area start -->
                                <div class="project-area-start-1">
                                    <a href="project-details.html" class="thumbnail">
                                        <img src="assets/images/portfolio/02.webp" alt="">
                                    </a>
                                    <div class="inner-content-project">
                                        <a href="project-details.html">
                                            <h2 class="title">maintenance des moulins</h2>
                                        </a>
                                        <p class="location">Services </p>
                                        <!-- <a href="#" class="location"><i class="fa-sharp fa-regular fa-location-dot"></i>
                                            Dubai Marina</a> -->
                                        <!-- <div class="thumb-wrapper">
                                            <div class="single">
                                                <span>Price:</span>
                                                <p>From $290k</p>
                                            </div>
                                            <div class="single">
                                                <span>Client:</span>
                                                <p>RC Builders</p>
                                            </div>
                                            <div class="single">
                                                <span>Project Year:</span>
                                                <p>15 Oct 2019</p>
                                            </div>
                                            <div class="single">
                                                <span>Duration:</span>
                                                <p>5Y, 3M</p>
                                            </div>
                                        </div>-->
                                    </div>
                                    <a href="appoinment.html" class="rts-btn btn-primary">Découvrez nos services<img
                                src="assets/images/icons/arrow-up-right.svg" alt=""></a>
                                </div>
                                <!-- single project area end -->
                            </div>
                            <div class="swiper-slide">
                                <!-- single project area start -->
                                <div class="project-area-start-1">
                                    <a href="project-details.html" class="thumbnail">
                                        <img src="assets/images/portfolio/03.webp" alt="">
                                    </a>
                                    <div class="inner-content-project">
                                        <a href="project-details.html">
                                            <h2 class="title">collages des bandes convoyeuses</h2>
                                        </a>
                                        <p class="location">Services</p>
                                        <!-- <a href="#" class="location"><i class="fa-sharp fa-regular fa-location-dot"></i>
                                            Dubai Marina</a> -->
                                        <!-- <div class="thumb-wrapper">
                                            <div class="single">
                                                <span>Price:</span>
                                                <p>From $290k</p>
                                            </div>
                                            <div class="single">
                                                <span>Client:</span>
                                                <p>RC Builders</p>
                                            </div>
                                            <div class="single">
                                                <span>Project Year:</span>
                                                <p>15 Oct 2019</p>
                                            </div>
                                            <div class="single">
                                                <span>Duration:</span>
                                                <p>5Y, 3M</p>
                                            </div>
                                        </div> -->
                                    </div>
                                    <a href="appoinment.html" class="rts-btn btn-primary">Découvrez nos services<img
                                src="assets/images/icons/arrow-up-right.svg" alt=""></a>
                                </div>
                                <!-- single project area end -->
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- team area start -->
       <!--  <div class="rts-team-area-start rts-section-gapTop">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title-center-style-one">
                            <span class="pre">Expert Team Members</span>
                            <h2 class="title">Meet The Awesome Team</h2>
                        </div>
                    </div>
                </div>
                <div class="row g-24 mt--20">
                    <div class="col-xl-6">
                        <div class="single-team-single-area">
                            <a href="team-details.html" class="thumbnail">
                                <img src="assets/images/team/01.webp" alt="team">
                            </a>
                            <div class="inner-content-area">
                                <a href="team-details.html">
                                    <h3 class="title">Henry George</h3>
                                </a>
                                <span class="desig">Safety Officer</span>
                                <p class="disc">
                                    Highly skilled and experienced construction expert, known for his deep expertise in
                                    managing large-scale construction projects
                                </p>
                                <div class="social-area-wrapper">
                                    <ul>
                                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-discord"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-whatsapp"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="single-team-single-area list">
                            <a href="team-details.html" class="thumbnail">
                                <img src="assets/images/team/02.webp" alt="team">
                            </a>
                            <div class="inner-content-area">
                                <a href="team-details.html">
                                    <h3 class="title">Thomas Bryant</h3>
                                </a>
                                <span class="desig">Civil Engineer</span>
                                <p class="disc">
                                    Highly skilled and experienced construction expert, known for his deep expertise in
                                    managing large-scale construction projects
                                </p>
                                <div class="social-area-wrapper">
                                    <ul>
                                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-discord"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-whatsapp"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single-team-single-area list">
                            <a href="team-details.html" class="thumbnail">
                                <img src="assets/images/team/03.webp" alt="team">
                            </a>
                            <div class="inner-content-area">
                                <a href="team-details.html">
                                    <h3 class="title">Benjamin Clarke</h3>
                                </a>
                                <span class="desig"> Project Coordinator</span>
                                <p class="disc">
                                    Highly skilled and experienced construction expert, known for his deep expertise in
                                    managing large-scale construction projects
                                </p>
                                <div class="social-area-wrapper">
                                    <ul>
                                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-discord"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-whatsapp"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
    
    </div> 
    <!-- portfolio team area ends -->

    <!-- demanding service area start -->
    <div class="demanding-service-area rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-area-wrapper-main-two">
                        <div class="title-style-two-left">
                            <h2 class="title">Fournitures et pièces détachées</h2>
                            <p class="disc">
                                Fournitures d’articles de Convoyeur et de pièces détachées de concasseurs et broyeurs.
                            </p>
                        </div>
                        <a href="appoinment.html" class="rts-btn btn-primary">Consultez notre catalogue <img
                                src="assets/images/icons/arrow-up-right.svg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-1730 mt--70">
            <div class="row">
                <div class="col-lg-12">
                    <div class="service-bg_image-3 bg_image"></div>
                </div>
            </div>
        </div>
        <div class="container mt-dec--130">
            <div class="row g-24 justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="single-service-area-3">
                        <div class="icon">
                            <img src="assets/images/service/icons/04.svg" alt="service">
                        </div>
                        <a href="service-single.html">
                            <h4 class="title">convoyeurs</h4>
                        </a>
                        <span class="number">01</span>
                        <p class="disc">
                            Once planning is complete, site preparation begins. This phase involves clearing the land,
                            grading, and excavating the site to ensure it is ready.
                        </p>
                        <a href="service-single.html" class="read-more-btn">Lire plus<i
                                class="fa-sharp fa-regular fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="single-service-area-3">
                        <div class="icon">
                            <img src="assets/images/service/icons/04.svg" alt="service">
                        </div>
                        <a href="service-single.html">
                            <h4 class="title">Produits chimiques</h4>
                        </a>
                        <span class="number">02</span>
                        <p class="disc">
                            Once planning is complete, site preparation begins. This phase involves clearing the land,
                            grading, and excavating the site to ensure it is ready.
                        </p>
                        <a href="service-single.html" class="read-more-btn">Lire plus<i
                                class="fa-sharp fa-regular fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="single-service-area-3">
                        <div class="icon">
                            <img src="assets/images/service/icons/04.svg" alt="service">
                        </div>
                        <a href="service-single.html">
                            <h4 class="title">Huilerie</h4>
                        </a>
                        <span class="number">03</span>
                        <p class="disc">
                            Once planning is complete, site preparation begins. This phase involves clearing the land,
                            grading, and excavating the site to ensure it is ready.
                        </p>
                        <a href="service-single.html" class="read-more-btn">Lire plus<i
                                class="fa-sharp fa-regular fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="single-service-area-3">
                        <div class="icon">
                            <img src="assets/images/service/icons/04.svg" alt="service">
                        </div>
                        <a href="service-single.html">
                            <h4 class="title">Equipement de concasseur</h4>
                        </a>
                        <span class="number">04</span>
                        <p class="disc">
                            Once planning is complete, site preparation begins. This phase involves clearing the land,
                            grading, and excavating the site to ensure it is ready.
                        </p>
                        <a href="service-single.html" class="read-more-btn">Lire plus<i
                                class="fa-sharp fa-regular fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="single-service-area-3">
                        <div class="icon">
                            <img src="assets/images/service/icons/04.svg" alt="service">
                        </div>
                        <a href="service-single.html">
                            <h4 class="title">Equipement de tuyauterie</h4>
                        </a>
                        <span class="number">05</span>
                        <p class="disc">
                            Once planning is complete, site preparation begins. This phase involves clearing the land,
                            grading, and excavating the site to ensure it is ready.
                        </p>
                        <a href="service-single.html" class="read-more-btn">Lire plus<i
                                class="fa-sharp fa-regular fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="single-service-area-3">
                        <div class="icon">
                            <img src="assets/images/service/icons/04.svg" alt="service">
                        </div>
                        <a href="service-single.html">
                            <h4 class="title">Equipement de concasseur</h4>
                        </a>
                        <span class="number">06</span>
                        <p class="disc">
                            Once planning is complete, site preparation begins. This phase involves clearing the land,
                            grading, and excavating the site to ensure it is ready.
                        </p>
                        <a href="service-single.html" class="read-more-btn">Lire plus
                        <i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- demanding service area end -->



    <!-- WOrking Process area start -->
    <div class="why-choose-us-area rts-section-gapBottom demo-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-12 pr--60 pr_md--0 pr_sm--0">
                    <div class="reveal-item overflow-hidden aos-init">
                        <div class="reveal-animation reveal-end reveal-primary aos aos-init" data-aos="reveal-end">
                        </div>
                        <img src="assets/images/service/01.webp" alt="journey-area">
                        <div class="vedio-icone">
                            <a class="video-play-button play-video" href="#">
                                <span> <b></b> Watch Video</span>
                            </a>
                            <div class="video-overlay">
                                <a class="video-overlay-close">×</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12 pt_md--30 pt_sm--50">
                    <div class="how-we-works-wrappers">
                        <div class="title-wrapper-left mb--50">
                            <span class="pre">Comment nous travaillons</span>
                            <h2 class="title">
                                Comment lancer votre demande de service
                            </h2>
                        </div>
                        <div class="single-choose-us-one">
                            <div class="icon">
                                <img src="assets/images/service/07.svg" alt="service">
                                <span>1</span>
                            </div>
                            <div class="info-wrapper">
                                <h5 class="title">Consulter les services et produits</h5>
                                <p class="disc">Millpro propose un accompagnement global pour les sociétés minières à travers des services adaptés à leurs besoins</p>
                            </div>
                        </div>
                        <div class="single-choose-us-one">
                            <div class="icon">
                                <img src="assets/images/service/08.svg" alt="service">
                                <span>2</span>
                            </div>
                            <div class="info-wrapper">
                                <h5 class="title">Remplir le formulaire</h5>
                                <p class="disc">Remplissez ce formulaire pour que nous puissions répondre rapidement à votre demande.</p>
                            </div>
                        </div>
                        <div class="single-choose-us-one">
                            <div class="icon">
                                <img src="assets/images/service/09.svg" alt="service">
                                <span>3</span>
                            </div>
                            <div class="info-wrapper">
                                <h5 class="title">Contactez nous</h5>
                                <p class="disc">Notre équipe est à votre écoute pour vous apporter une solution adaptée.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- WOrking Process area end -->





    <!-- rts testimonials area start -->
    <div class="rts-testimoanils-area bg_primary rts-section-gap rts-portfolio-area-case">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-between-style-five mb--35">
                        <div class="title-left-align-five">
                            <span class="pre">Commentaires</span>
                            <h2 class="title">Satisfaction de nos clients</h2>
                        </div>
                        <div class="button-net-prev-area">

                            <div class="swiper-button-prev"><i class="fa-sharp-duotone fa-light fa-arrow-left"></i>
                            </div>
                            <div class="swiper-button-next"><i class="fa-sharp-duotone fa-light fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-l-12">
                    <div class="testimonials-wrapper-five">
                        <div class="swiper mySwiper-testimonails-5" dir="ltr">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testimonials-area-single-wrapper-5">
                                        <div class="thumbnail-wrapper-left">
                                            <img src="assets/images/testimonials/06.webp" alt="testimonials">
                                            <div class="inner-thumbnail-right">
                                                <h4 class="title">Daniel Kobak</h4>
                                                <span>MARKWTO.INC</span>
                                            </div>
                                        </div>
                                        <div class="quote">
                                            <img src="assets/images/testimonials/brand/03.webp" alt="quote">
                                        </div>
                                        <p class="disc">
                                            “The innovative designs presented by exceeded our expectations. Their
                                            creative approach and
                                            attention to detail were evident in every aspect of the project. Aesthetics
                                            showcased their
                                            commitment”
                                        </p>
                                        <div class="brand">
                                            <img src="assets/images/testimonials/brand/01.webp" alt="brand">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonials-area-single-wrapper-5">
                                        <div class="thumbnail-wrapper-left">
                                            <img src="assets/images/testimonials/07.webp" alt="testimonials">
                                            <div class="inner-thumbnail-right">
                                                <h4 class="title">Michael Thompson</h4>
                                                <span>MARKWTO.INC</span>
                                            </div>
                                        </div>
                                        <div class="quote">
                                            <img src="assets/images/testimonials/brand/03.webp" alt="quote">
                                        </div>
                                        <p class="disc">
                                            “The innovative designs presented by exceeded our expectations. Their
                                            creative approach and
                                            attention to detail were evident in every aspect of the project. Aesthetics
                                            showcased their
                                            commitment”
                                        </p>
                                        <div class="brand">
                                            <img src="assets/images/testimonials/brand/02.webp" alt="brand">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonials-area-single-wrapper-5">
                                        <div class="thumbnail-wrapper-left">
                                            <img src="assets/images/testimonials/06.webp" alt="testimonials">
                                            <div class="inner-thumbnail-right">
                                                <h4 class="title">Daniel Kobak</h4>
                                                <span>MARKWTO.INC</span>
                                            </div>
                                        </div>
                                        <div class="quote">
                                            <img src="assets/images/testimonials/brand/03.webp" alt="quote">
                                        </div>
                                        <p class="disc">
                                            “The innovative designs presented by exceeded our expectations. Their
                                            creative approach and
                                            attention to detail were evident in every aspect of the project. Aesthetics
                                            showcased their
                                            commitment”
                                        </p>
                                        <div class="brand">
                                            <img src="assets/images/testimonials/brand/01.webp" alt="brand">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonials-area-single-wrapper-5">
                                        <div class="thumbnail-wrapper-left">
                                            <img src="assets/images/testimonials/07.webp" alt="testimonials">
                                            <div class="inner-thumbnail-right">
                                                <h4 class="title">Daniel Kobak</h4>
                                                <span>MARKWTO.INC</span>
                                            </div>
                                        </div>
                                        <div class="quote">
                                            <img src="assets/images/testimonials/brand/03.webp" alt="quote">
                                        </div>
                                        <p class="disc">
                                            “The innovative designs presented by exceeded our expectations. Their
                                            creative approach and
                                            attention to detail were evident in every aspect of the project. Aesthetics
                                            showcased their
                                            commitment”
                                        </p>
                                        <div class="brand">
                                            <img src="assets/images/testimonials/brand/02.webp" alt="brand">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts testimonials area end -->

    <!-- projects contact us area start -->
    <div class="projects-contact-area-3 rts-section-gap bg_image">
        <!-- rts project area  -->
        <!-- <div class="rts-project-area-three">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title-area-wrapper-main-two">
                            <div class="title-style-two-left">
                                <span class="pre">Latest Projects</span>
                                <h2 class="title">We have done amazing <br>
                                    project for client’s</h2>
                            </div>
                            <a href="appoinment.html" class="rts-btn btn-primary">Book Appointment<img
                                    src="assets/images/icons/arrow-up-right.svg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="row mt--60 align-items-center">
                    <div class="col-xl-8 pr--50">
                        <div class="project-list-area-wrapper-3">
                            <div class="single-project-3 one">
                                <div class="left-side">
                                    <span>01</span>
                                    <a href="project-details.html">
                                        <h5 class="title">Engineering Design NYC</h5>
                                    </a>
                                </div>
                                <div class="mid">
                                    <p>In addition to competition companies also face challenges related</p>
                                </div>
                                <div class="end">
                                    <a href="project-details.html">
                                        <img src="assets/images/icons/arrow-up-right.svg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="single-project-3 two">
                                <div class="left-side">
                                    <span>02</span>
                                    <a href="project-details.html">
                                        <h5 class="title">Construction Engineering</h5>
                                    </a>
                                </div>
                                <div class="mid">
                                    <p>In addition to competition companies also face challenges related</p>
                                </div>
                                <div class="end">
                                    <a href="project-details.html">
                                        <img src="assets/images/icons/arrow-up-right.svg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="single-project-3 three">
                                <div class="left-side">
                                    <span>03</span>
                                    <a href="project-details.html">
                                        <h5 class="title">Telecommunication Towers</h5>
                                    </a>
                                </div>
                                <div class="mid">
                                    <p>In addition to competition companies also face challenges related</p>
                                </div>
                                <div class="end">
                                    <a href="project-details.html">
                                        <img src="assets/images/icons/arrow-up-right.svg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="single-project-3 four">
                                <div class="left-side">
                                    <span>04</span>
                                    <a href="project-details.html">
                                        <h5 class="title">Development Projects</h5>
                                    </a>
                                </div>
                                <div class="mid">
                                    <p>In addition to competition companies also face challenges related</p>
                                </div>
                                <div class="end">
                                    <a href="project-details.html">
                                        <img src="assets/images/icons/arrow-up-right.svg" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="thumbnail-portfolio-3">
                            <img class="image-one active" src="assets/images/portfolio/10.webp" alt="portfolio">
                            <img class="image-two" src="assets/images/portfolio/11.webp" alt="portfolio">
                            <img class="image-three" src="assets/images/portfolio/10.webp" alt="portfolio">
                            <img class="image-four" src="assets/images/portfolio/11.webp" alt="portfolio">
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- rts project area end -->

        <!-- appoinment area start -->
        <div class="rts-appoinment-area-3 rts-section-gapTop">
            <div class="container-1730">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- appoinment-area three -->
                        <div class="appoinment-three-wrapper">
                            <div class="row align-items-center">
                                <div class="col-xl-6">
                                    <div class="thumbnail">
                                        <div class="reveal-item overflow-hidden aos-init">
                                            <div class="reveal-animation reveal-end reveal-primary aos aos-init"
                                                data-aos="reveal-end">
                                            </div>
                                            <img src="assets/images/appoinment/01.webp" alt="appoinment">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="appoinment-area-main-form">
                                        <h3 class="title">Contactez nous pour plus d'informations</h3>
                                        <form action="#">
                                            <div class="half-input-wrapper">
                                                <div class="single-input">
                                                    <input type="text" placeholder="Nom complet*" required>
                                                </div>
                                                <div class="single-input">
                                                    <input type="text" placeholder="Email*" required>
                                                </div>
                                            </div>
                                            <div class="half-input-wrapper">
                                                <div class="single-input">
                                                    <input type="text" placeholder="Telephone*" required>
                                                </div>
                                               <!-- <div class="single-input">
                                                    <select class="wide mb--20">
                                                        <option data-display="Select Project Option*">Select Project
                                                            Option*
                                                        </option>
                                                        <option value="1">Some option</option>
                                                        <option value="2">Another option</option>
                                                        <option value="3" disabled>A disabled option</option>
                                                        <option value="4">Potato</option>
                                                    </select>
                                                </div> -->
                                            </div>
                                            <textarea name="#" placeholder="Phone Number*" required></textarea>
                                            <button class="rts-btn btn-primary">
                                                Envoyer
                                                <img src="assets/images/icons/arrow-up-right.svg" alt="">
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- appoinment-area three -->
                    </div>
                </div>
            </div>
        </div>
        <!-- appoinment area end -->
    </div>
    <!-- projects contact us area end -->



    <!-- compoany experties area start -->
    <div class="company-experties-area rts-section-gap bg_image bg-dark-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-between-style-five mb--35">
                        <div class="title-left-align-five">
                            <span class="pre">A propos de notre entreprise</span>
                            <h2 class="title">Nous sommes le leader en matière de  <br>
                                </h2>
                        </div>
                        <a href="appoinment.html" class="rts-btn btn-primary">Make an Appointment</a>
                    </div>
                </div>
            </div>
            <div class="row mt--60">
                <div class="col-lg-12">
                    <div class="funfacts-list-wrapper-5">
                        <div class="single-fun-facts-area-5">
                            <div class="icon">
                                <img src="assets/images/facts/icon/06.svg" alt="service">
                            </div>
                            <div class="counter-wrapper">
                                <h2 class="counter title"><span class="odometer" data-count="3658">00</span>+
                                </h2>
                                <span class="bottom">Années d'expériences</span>
                            </div>
                        </div>
                        <div class="single-fun-facts-area-5 justify-content-center">
                            <div class="icon">
                                <img src="assets/images/facts/icon/07.svg" alt="service">
                            </div>
                            <div class="counter-wrapper">
                                <h2 class="counter title"><span class="odometer" data-count="658">00</span>+
                                </h2>
                                <span class="bottom">Membres experts</span>
                            </div>
                        </div>
                        <div class="single-fun-facts-area-5 justify-content-center justify-content-md-center">
                            <div class="icon">
                                <img src="assets/images/facts/icon/08.svg" alt="service">
                            </div>
                            <div class="counter-wrapper">
                                <h2 class="counter title"><span class="odometer" data-count="368">00</span>+
                                </h2>
                                <span class="bottom">Equipements modernes</span>
                            </div>
                        </div>
                        <div
                            class="single-fun-facts-area-5 justify-content-end justify-content-md-end justify-content-sm-center">
                            <div class="icon">
                                <img src="assets/images/facts/icon/09.svg" alt="service">
                            </div>
                            <div class="counter-wrapper">
                                <h2 class="counter title"><span class="odometer" data-count="153">00</span>+
                                </h2>
                                <span class="bottom"> Partenaires</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- compoany experties area end -->



    <!-- rts latest blgo area start -->
    <div class="rts-latest-blog-area rts-section-gap rts-portfolio-area-case bg-white-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-between-style-five mb--35">
                        <div class="title-left-align-five">
                            <span class="pre">Blog</span>
                            <h2 class="title">Articles </h2>
                        </div>
                        <a href="blog-grid.html" class="rts-btn btn-primary">Voir toutes les actualités
                            <img src="assets/images/icons/arrow-up-right.svg" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="row g-24">
                <!--<div class="col-lg-12">
                    <div class="single-blog-card-style-5">
                        <div class="top-area-blog">
                            <span>Through a unique combination of engineering, and construction</span>
                            <a href="blog-details.html" class="thumbnail">
                                <img src="assets/images/blog/15.webp" alt="blog-image">
                            </a>
                        </div>
                        <div class="inner-content-area">
                            <div class="author-area">
                                <img src="assets/images/blog/18.webp" alt="">
                                <div class="info">
                                    <p>by</p>
                                    <h5 class="name">Markus Smith</h5>
                                </div>
                            </div>
                            <div class="title-content-area">
                                <div class="tag-area">
                                    <span>18 December, 2024</span>
                                    <span class="intro">Interior Design</span>
                                </div>
                                <a href="blog-details.html">
                                    <h3 class="title">
                                        construction and design disciplines and expertise, Liquid delivers excellent
                                        design
                                        perspective Through
                                    </h3>
                                </a>
                                <a href="blog-details.html" class="read-more">Read Details</a>
                            </div>
                        </div>
                    </div>
                </div>-->
                <div class="col-lg-6">
                    <div class="single-blog-card-style-5 small-blog-five">
                        <div class="top-area-blog">
                            <!--<span>Through a unique combination of engineering, and construction</span>-->
                            <a href="blog-details.html" class="thumbnail">
                                <img src="assets/images/blog/16.webp" alt="blog-image">
                            </a>
                        </div>
                        <div class="inner-content-area">
                            <div class="author-area">
                                <img src="assets/images/blog/18.webp" alt="">
                                <div class="info">
                                    <p>by</p>
                                    <h5 class="name">Markus Smith</h5>
                                </div>
                            </div>
                            <div class="title-content-area">
                                <div class="tag-area">
                                    <span>18 December, 2024</span>
                                    <span class="intro">Interior Design</span>
                                </div>
                                <a href="blog-details.html">
                                    <h3 class="title">
                                        Liquid delivers excellent design perspective
                                        Through a unique combination
                                    </h3>
                                </a>
                                <a href="blog-details.html" class="read-more">Plus de détails</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-blog-card-style-5 small-blog-five">
                        <div class="top-area-blog">
                            <!--<span>Through a unique combination of engineering, and construction</span>-->
                            <a href="blog-details.html" class="thumbnail">
                                <img src="assets/images/blog/17.webp" alt="blog-image">
                            </a>
                        </div>
                        <div class="inner-content-area">
                            <div class="author-area">
                                <img src="assets/images/blog/18.webp" alt="">
                                <div class="info">
                                    <p>by</p>
                                    <h5 class="name">Markus Smith</h5>
                                </div>
                            </div>
                            <div class="title-content-area">
                                <div class="tag-area">
                                    <span>18 December, 2024</span>
                                    <span class="intro">Interior Design</span>
                                </div>
                                <a href="blog-details.html">
                                    <h3 class="title">
                                        How to Use Lighting to Create Mood, Style, and
                                        Function in Any Room
                                    </h3>
                                </a>
                                <a href="blog-details.html" class="read-more">Plus de détails</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts latest blgo area end -->


    <!-- rts brand area start -->
    <div class="rts-brand-area rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="title-brand counter">
                        <span class="odometer" data-count="156">
                            00
                        </span>+ Partenaires
                    </h3>
                </div>
            </div>
            <div class="row g-24 mt--30">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="single-brand-area-style">
                        <div class="icon">
                            <img src="assets/images/brand/07.svg" alt="brand">
                        </div>
                        <h5 class="title">Nicraft</h5>
                        <!--<p class="disc">
                            There are generally two types of AI: Narrow or Weak AI, which is designed to perform
                            specific tasks
                        </p>-->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="single-brand-area-style">
                        <div class="icon">
                            <img src="assets/images/brand/08.svg" alt="brand">
                        </div>
                        <h5 class="title">Encline</h5>
                        <!--<p class="disc">
                            There are generally two types of AI: Narrow or Weak AI, which is designed to perform
                            specific tasks
                        </p>-->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="single-brand-area-style">
                        <div class="icon">
                            <img src="assets/images/brand/09.svg" alt="brand">
                        </div>
                        <h5 class="title">Corato</h5>
                       <!--<p class="disc">
                            There are generally two types of AI: Narrow or Weak AI, which is designed to perform
                            specific tasks
                        </p>-->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="single-brand-area-style">
                        <div class="icon">
                            <img src="assets/images/brand/10.svg" alt="brand">
                        </div>
                        <h5 class="title">Campie</h5>
                       <!--<p class="disc">
                            There are generally two types of AI: Narrow or Weak AI, which is designed to perform
                            specific tasks
                        </p>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection

</body>

</html>