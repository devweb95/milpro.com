
@extends('layouts.app')
@section('content')

<body class="inner">
   
    <!-- rts banner area strart -->
    <div class="rts-banner-area rts-section-gap rts-breadcrumb-area  position-relative">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-area-inner">
                        <span class="water-text">A propos</span>
                        <h1 class="title">
                        A propos
                        </h1>
                        <div class="nav-area-navigation">
                            <a href="{{route('index')}}">Accueil</a>
                            <a class="current" href="#">A propos de nous</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts banner area end -->


    <!-- about us area start -->
    <div class="about-us-area-five rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="about-wrapper-area-five">
                        <div class="about-left-wrapper">
                            <span class="pre">Qui sommes-nous ?</span>
                            <h2 class="title">MILLPRO</h2>
                            <p class="disc">
                                Millpro est une entreprise burkinabè spécialisée dans la fourniture de produits, équipements et services destinés aux mines industrielles.
                                Implantée à Ouagadougou, Millpro accompagne ses clients à chaque étape de leur chaîne d’approvisionnement en leur proposant 
                                des solutions techniques fiables, durables et adaptées à leurs besoins spécifiques.
                                Grâce à un réseau de partenaires internationaux, un stock local disponible et une équipe d’experts engagés, 
                                nous contribuons à la performance et à la compétitivité des sites miniers au Burkina Faso et dans la sous-région.
                                nous plaçons la qualité, la réactivité et le respect des engagements au cœur de notre démarche.
                            </p>
                            <a href="blog-details.html" class="rts-btn btn-primary">Nous contacter ?
                                <img src="assets/images/icons/arrow-up-right.svg" alt="">
                            </a>
                        </div>
                        <div class="right-thumbnail">
                            <img src="assets/images/about/10.webp" alt="about">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about us area end -->
    <!-- vision start-->
     
 <div class="service-abot-area rts-section-gap service-about-bg bg_image">
        <div class="container-120">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-12  plr-sm">
                    <div class="thumbnail-service-about">
                        <img src="assets/images/service/13.jpg" alt="service-image">
                        <div class="vedio-icone">
                            <a id="play-video" class="video-play-button" href="#">
                                <span></span>
                            </a>
                            <div id="video-overlay" class="video-overlay">
                                <a class="video-overlay-close">×</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12 pading-controler">
                    <div class="service-about-wrapper">
                        <div class="title-three-left">
                            <span class="pre-title" data-sal="slide-up" data-sal-delay="100" data-sal-duration="800"
                                style="display: block;color: white;">
                                Caractéristiques principales
                            </span>
                            <h3 class="title" data-sal="slide-up" data-sal-delay="100" data-sal-duration="800">
                                Pourquoi nous choisir ?
                            </h3>
                        </div>
                        <div class="row mt--15 g-24">
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-service-sm">
                                    <div class="icon">
                                        <img src="assets/images/service/15.svg" alt="">
                                    </div>
                                    <p>Equipe d'expert</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-service-sm">
                                    <div class="icon">
                                        <img src="assets/images/service/16.svg" alt="">
                                    </div>
                                    <p>Livraison dans les délais</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-service-sm">
                                    <div class="icon">
                                        <img src="assets/images/service/17.svg" alt="">
                                    </div>
                                    <p>24/7 Support</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-service-sm">
                                    <div class="icon">
                                        <img src="assets/images/service/18.svg" alt="">
                                    </div>
                                    <p>Meilleur équipement</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-service-sm">
                                    <div class="icon">
                                        <img src="assets/images/service/19.svg" alt="">
                                    </div>
                                    <p>Sécurité & conformité</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-service-sm">
                                    <div class="icon">
                                        <img src="assets/images/service/20.svg" alt="">
                                    </div>
                                    <p>Large réseau de fournisseurs </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--vision end-->
    <!-- why choose me start-->
   <div class="rts-offer-provide-section rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-mid-wrapper-home-two" data-sal="slide-up" data-sal-delay="150"
                        data-sal-duration="800">
                        <span class="pre">Nos Services</span>
                        <h2 class="title">Qu'est ce que nous offrons ?</h2>
                    </div>
                </div>
            </div>
            <div class="row mt--15 g-24">
                <div class="col-lg-4">
                    <!-- single offer area sart -->
                    <div class="rts-single-offer">
                        <a href="service-details.html" class="thumbnail">
                            <img src="assets/images/service/07.jpg" alt="service">
                        </a>
                        <div class="content-wrapper">
                            <a href="service-details.html">
                                <h5 class="title">
                                    Approvisionnement sur mesure
                                </h5>
                            </a>
                            <p class="disc">
                                Recherche et fourniture de produits spécifiques
                            </p>
                            <a href="service-single.html" class="rts-btn btn-primary">Voir services</a>
                        </div>
                    </div>
                    <!-- single offer area end -->
                </div>
                <div class="col-lg-4">
                    <!-- single offer area sart -->
                    <div class="rts-single-offer">
                        <a href="service-details.html" class="thumbnail">
                            <img src="assets/images/service/08.jpg" alt="service">
                        </a>
                        <div class="content-wrapper">
                            <a href="service-details.html">
                                <h5 class="title">
                                    Logistique & Livraison
                                </h5>
                            </a>
                            <p class="disc">
                                Gestion complète du transport jusqu’au site
                            </p>
                            <a href="service-single.html" class="rts-btn btn-primary">Voir services</a>
                        </div>
                    </div>
                    <!-- single offer area end -->
                </div>
                <div class="col-lg-4">
                    <!-- single offer area sart -->
                    <div class="rts-single-offer">
                        <a href="service-details.html" class="thumbnail">
                            <img src="assets/images/service/07.jpg" alt="service">
                        </a>
                        <div class="content-wrapper">
                            <a href="service-details.html">
                                <h5 class="title">
                                    Assistance technique
                                </h5>
                            </a>
                            <p class="disc">
                                Conseils sur les équipements et leur utilisation
                            </p>
                            <a href="service-single.html" class="rts-btn btn-primary">Voir services</a>
                        </div>
                    </div>
                    <!-- single offer area end -->
                </div>
                <div class="col-lg-4">
                    <!-- single offer area sart -->
                    <div class="rts-single-offer">
                        <a href="service-details.html" class="thumbnail">
                            <img src="assets/images/service/07.jpg" alt="service">
                        </a>
                        <div class="content-wrapper">
                            <a href="service-details.html">
                                <h5 class="title">
                                    Réponse aux appels d’offres
                                </h5>
                            </a>
                            <p class="disc">
                                Préparation et soumission de devis compétitifs
                            </p>
                            <a href="service-single.html" class="rts-btn btn-primary">Voir services</a>
                        </div>
                    </div>
                    <!-- single offer area end -->
                </div>
            </div>
        </div>
    </div>

    <!-- why choose me end-->
    <!-- rts team area start -->
     <!--
    <div class="team-area-start rts-section-gap rts-portfolio-area-case  bg-color-gradient-2 bg_image">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-style-two-center">
                        <h2 class="title">Meet Our Valuable Person</h2>
                        <p class="disc">
                            Quis nulla blandit vulputate morbi adipiscing sem vestibulum. Nulla turpis integer dui sed
                            posuere sem. Id molestie mi arcu gravida lorem potenti.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row mt--70">
                <div class="col-lg-12">
                    <div class="team-area-swiper-wrapper-5">
                        <div class="swiper mySwiper-team-5" dir="ltr">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="single-team-style-five">
                                        <a href="team-single.html" class="thumbnail">
                                            <img src="assets/images/team/08.webp" alt="team">
                                            <div class="shape-social">
                                                <img src="assets/images/team/01.png" alt="team">
                                            </div>
                                        </a>
                                        <div class="share-btn">
                                            <i class="fa-sharp fa-light fa-share-nodes"></i>
                                        </div>
                                        <div class="socail-area-wrapper-team">
                                            <ul>
                                                <li><a href="#"><i class="fa-brands fa-behance"></i></a></li>
                                                <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="inner-content-team">
                                            <a href="team-single.html">
                                                <h5 class="title">Samuel Daniel</h5>
                                            </a>
                                            <span class="desig">Designer</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="single-team-style-five">
                                        <a href="team-single.html" class="thumbnail">
                                            <img src="assets/images/team/09.webp" alt="team">
                                            <div class="shape-social">
                                                <img src="assets/images/team/01.png" alt="team">
                                            </div>
                                        </a>
                                        <div class="share-btn">
                                            <i class="fa-sharp fa-light fa-share-nodes"></i>
                                        </div>
                                        <div class="socail-area-wrapper-team">
                                            <ul>
                                                <li><a href="#"><i class="fa-brands fa-behance"></i></a></li>
                                                <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="inner-content-team">
                                            <a href="team-single.html">
                                                <h5 class="title">Mekail Shen</h5>
                                            </a>
                                            <span class="desig">Designer</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="single-team-style-five">
                                        <a href="team-single.html" class="thumbnail">
                                            <img src="assets/images/team/10.webp" alt="team">
                                            <div class="shape-social">
                                                <img src="assets/images/team/01.png" alt="team">
                                            </div>
                                        </a>
                                        <div class="share-btn">
                                            <i class="fa-sharp fa-light fa-share-nodes"></i>
                                        </div>
                                        <div class="socail-area-wrapper-team">
                                            <ul>
                                                <li><a href="#"><i class="fa-brands fa-behance"></i></a></li>
                                                <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="inner-content-team">
                                            <a href="team-single.html">
                                                <h5 class="title">William Daniel</h5>
                                            </a>
                                            <span class="desig">Developer</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="single-team-style-five">
                                        <a href="team-single.html" class="thumbnail">
                                            <img src="assets/images/team/11.webp" alt="team">
                                            <div class="shape-social">
                                                <img src="assets/images/team/01.png" alt="team">
                                            </div>
                                        </a>
                                        <div class="share-btn">
                                            <i class="fa-sharp fa-light fa-share-nodes"></i>
                                        </div>
                                        <div class="socail-area-wrapper-team">
                                            <ul>
                                                <li><a href="#"><i class="fa-brands fa-behance"></i></a></li>
                                                <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="inner-content-team">
                                            <a href="team-single.html">
                                                <h5 class="title">Nicholas Arthur</h5>
                                            </a>
                                            <span class="desig">UI/UX Designer</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="single-team-style-five">
                                        <a href="team-single.html" class="thumbnail">
                                            <img src="assets/images/team/09.webp" alt="team">
                                            <div class="shape-social">
                                                <img src="assets/images/team/01.png" alt="team">
                                            </div>
                                        </a>
                                        <div class="share-btn">
                                            <i class="fa-sharp fa-light fa-share-nodes"></i>
                                        </div>
                                        <div class="socail-area-wrapper-team">
                                            <ul>
                                                <li><a href="#"><i class="fa-brands fa-behance"></i></a></li>
                                                <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="inner-content-team">
                                            <a href="team-single.html">
                                                <h5 class="title">Edward Thomas</h5>
                                            </a>
                                            <span class="desig">Designer</span>
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
    -->
    <!-- rts team area end -->
     <style>
        .single-funfacts-about p.disc {
        color: white;
        }
     </style>
     <!-- rts fun facts area starts -->
    <div class="rts-about-fun-facts rts-section-gap bg_about-f">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="about-fun-facts-wrapper">
                        <!-- single -fun facts area start -->
                        <div class="single-funfacts-about">
                            <div class="top">
                                <div class="icon">
                                    <img src="assets/images/fun-facts/icon/06.svg" alt="fun-facts">
                                </div>
                                <!-- <h3 class="counter title"><span class="odometer" data-count="26">00</span>+
                                </h3> -->
                            </div>
                            <p class="disc">
                                Fiabilité
                            </p>
                        </div>
                        <!-- single -fun facts area end -->
                        <!-- single -fun facts area start -->
                        <div class="single-funfacts-about">
                            <div class="top">
                                <div class="icon">
                                    <img src="assets/images/fun-facts/icon/08.svg" alt="fun-facts">
                                </div>
                               <!-- <h3 class="counter title"><span class="odometer" data-count="26">00</span>+
                                </h3> -->
                            </div>
                            <p class="disc">
                                Réactivité
                            </p>
                        </div>
                        <!-- single -fun facts area end -->
                        <!-- single -fun facts area start -->
                        <div class="single-funfacts-about">
                            <div class="top">
                                <div class="icon">
                                    <img src="assets/images/fun-facts/icon/09.svg" alt="fun-facts">
                                </div>
                                <!-- <h3 class="counter title"><span class="odometer" data-count="26">00</span>+
                                </h3> -->
                            </div>
                            <p class="disc">
                                Intégrité
                            </p>
                        </div>
                        <!-- single -fun facts area end -->
                        <!-- single -fun facts area start -->
                        <div class="single-funfacts-about">
                            <div class="top">
                                <div class="icon">
                                    <img src="assets/images/fun-facts/icon/07.svg" alt="fun-facts">
                                </div>
                                <!-- <h3 class="counter title"><span class="odometer" data-count="26">00</span>+
                                </h3> -->
                            </div>
                            <p class="disc">
                                Respect des engagements
                            </p>
                        </div>
                        <!-- single -fun facts area end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts fun facts area end -->
    <!-- large vbdeo area start -->
     <!--
    <div class="large-video-area rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-style-two-center inner">
                        <span class="pre">Watch Video</span>
                        <h2 class="title">We help our clients realize their business <br>
                            ideas and achieve great results</h2>
                    </div>
                </div>
            </div>
            <div class="row pt--60">
                <div class="col-lg-12">
                    <div class="large-video-area-inner bg_image">
                        <div class="vedio-icone">
                            <a class="video-play-button play-video" href="#">
                                <span></span>
                            </a>
                            <div class="video-overlay">
                                <a class="video-overlay-close">×</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->

    <!-- large vbdeo area end -->


    <!-- why choose us area start -->
    <div class="why-choose-us-area rts-section-gap in-about-page">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-12 pr--60 pr_md--0 pr_sm--0">
                    <div class="reveal-item overflow-hidden aos-init">
                        <div class="reveal-animation reveal-end reveal-primary aos aos-init" data-aos="reveal-end">
                        </div>
                        <img src="assets/images/service/01.webp" alt="journey-area">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12 pt_md--30 pt_sm--50">
                    <div class="how-we-works-wrappers">
                        <div class="title-wrapper-left mb--50">
                            <span class="pre" style="color: white;">Comment nous travaillons</span>
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
    <!-- why choose us area end -->




    <!-- rts blog area start -->
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
    
    @endsection



</body>

