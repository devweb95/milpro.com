
@extends('layouts.app')
@section('content')
<body class="inner">
  

    <!-- rts banner area strart -->
    <div class="rts-banner-area rts-section-gap rts-breadcrumb-area  position-relative">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-area-inner">
                        <span class="water-text">Services</span>
                        <h1 class="title">

                            Services et Fournitures

                        </h1>
                        <div class="nav-area-navigation">
                            <a href="{{route('index')}}">Accueil</a>
                            <a class="current" href="#">Détails de Service</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts banner area end -->

    <!-- service details area start -->
    <div class="service-details-area rts-section-gapTop pb--60">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="service-details-main-wrapper-thumbnail">
                        <img src="assets/images/service/17.webp" alt="service">
                    </div>
                    <div class="service-details-inner-area-wrapper">
                        <h4 class="title">Votre partenaire stratégique pour l’approvisionnement et les services miniers de haute performance</h4>
                        <p class="disc">
                            Millpro est une entreprise burkinabè spécialisée dans la fourniture de produits, équipements et services à destination 
                            des sites miniers industriels. Grâce à une expertise terrain solide, un réseau de partenaires certifiés et un engagement 
                            fort envers la qualité, nous accompagnons nos clients dans toutes les étapes de leurs opérations.

                        </p>
                        <!--<p class="disc">
                            The journey to a custom home begins with understanding. We start each project with an
                            initial consultation to learn about your goals, ideas, and preferences. During this stage,
                            we take the time to listen carefully to your vision. Are you seeking a sprawling estate with
                            traditional details, or perhaps a modern, minimalist design that emphasizes open spaces and
                            natural light? We discuss every aspect, from the overall structure to the small details that
                            make a house truly feel like home.
                        </p>-->
                        <div class="service-main-wrapper-tabs">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                        data-bs-target="#home" type="button" role="tab" aria-controls="home"
                                        aria-selected="true">Nos services couvrent</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#profile" type="button" role="tab" aria-controls="profile"
                                        aria-selected="false">Fournitures</button>
                                </li>
                                <!--<li class="nav-item" role="presentation">
                                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab"
                                        data-bs-target="#contact" type="button" role="tab" aria-controls="contact"
                                        aria-selected="false">Customized Solutions</button>
                                </li>-->
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel"
                                    aria-labelledby="home-tab">
                                    <div class="inner-wrapper-tab-service-wrapper">
                                        <div class="single">
                                            <div class="icon">
                                                <i class="fa-solid fa-check"></i>
                                            </div>
                                            <div class="inner-content">
                                                <b>Approvisionnement sur mesure :</b> Nous identifions, sélectionnons et 
                                                fournissons les produits spécifiques dont vous avez besoin, même les plus 
                                                rares ou techniques. Grâce à notre réseau de fournisseurs certifiés et à 
                                                notre maîtrise des standards du secteur minier, nous garantissons des équipements 
                                                conformes, performants et adaptés à vos contraintes opérationnelles.
                                            </div>
                                        </div>
                                        <div class="single">
                                            <div class="icon">
                                                <i class="fa-solid fa-check"></i>
                                            </div>
                                            <div class="inner-content">
                                                <b>Logistique & Livraison :</b> Nous assurons une gestion complète de la chaîne 
                                                logistique, de la commande jusqu’à la livraison finale sur site. Qu’il s’agisse 
                                                de fret local ou international, nous veillons à la conformité douanière, au respect 
                                                des délais, à la traçabilité et à l’intégrité des produits.
                                            </div>
                                        </div>
                                        <div class="single">
                                            <div class="icon">
                                                <i class="fa-solid fa-check"></i>
                                            </div>
                                            <div class="inner-content">
                                                <b>Assistance technique :</b> Nos experts vous conseillent dans le choix, 
                                                l’installation et l’utilisation optimale de vos équipements. Nous vous aidons 
                                                à identifier les bons produits selon vos contraintes (sol, conditions climatiques, 
                                                intensité d’usage), à maximiser leur durée de vie et à garantir la sécurité des utilisateurs.
                                            </div>
                                        </div>
                                         <div class="single">
                                            <div class="icon">
                                                <i class="fa-solid fa-check"></i>
                                            </div>
                                            <div class="inner-content">
                                                <b>Réponse aux appels d’offres :</b> Nous analysons vos cahiers des 
                                                charges avec précision et proposons des offres claires, compétitives 
                                                et alignées avec vos exigences techniques et budgétaires. Nous préparons 
                                                tous les éléments administratifs et techniques pour une soumission professionnelle 
                                                et dans les délais impartis.
                                            </div>
                                        </div>
                                         <div class="single">
                                            <div class="icon">
                                                <i class="fa-solid fa-check"></i>
                                            </div>
                                            <div class="inner-content">
                                                <b>Suivi après-vente :</b> Notre relation client ne s’arrête pas à la livraison. 
                                                Nous proposons un service après-vente complet incluant la garantie, le remplacement 
                                                de pièces, la fourniture de consommables, ainsi que le support technique en cas de 
                                                panne ou de doute d’utilisation.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                                    <div class="inner-wrapper-tab-service-wrapper">
                                        <div class="single">
                                            <div class="icon">
                                                <i class="fa-solid fa-check"></i>
                                            </div>
                                            <div class="inner-content">
                                                <b>Rollers (rouleaux) :</b> Les rouleaux sont des éléments cylindriques rotatifs 
                                                disposés sur les convoyeurs afin de supporter et faciliter le déplacement des matériaux 
                                                transportés. Ils réduisent la friction et assurent un mouvement fluide sur la bande transporteuse.
                                            </div>
                                        </div>
                                        <div class="single">
                                            <div class="icon">
                                                <i class="fa-solid fa-check"></i>
                                            </div>
                                            <div class="inner-content">
                                                <b>Roller's frame (châssis des rouleaux) :</b> Le châssis des rouleaux est la structure métallique 
                                                qui supporte et maintient en place les rouleaux sur un convoyeur. Il garantit la stabilité et la bonne 
                                                alignation des rouleaux pour un fonctionnement optimal.
                                            </div>
                                        </div>
                                        <div class="single">
                                            <div class="icon">
                                                <i class="fa-solid fa-check"></i>
                                            </div>
                                            <div class="inner-content">
                                                <b>Impact rollers (rouleaux d’impact) :</b> Les rouleaux d’impact sont conçus pour absorber les chocs
                                                 et les impacts lorsque les matériaux lourds ou abrasifs tombent sur le convoyeur, protégeant ainsi 
                                                 la bande transporteuse contre les dommages.
                                            </div>
                                        </div>
                                         <div class="single">
                                            <div class="icon">
                                                <i class="fa-solid fa-check"></i>
                                            </div>
                                            <div class="inner-content">
                                                <b>Produits chimiques :</b> Catégorie générale regroupant divers produits chimiques utilisés dans les 
                                                processus industriels, le traitement ou la maintenance, selon le secteur d’activité. Ces produits 
                                                peuvent inclure solvants, détergents, additifs, ou autres composés spécifiques à une industrie.
                                            </div>
                                        </div>
                                         <div class="single">
                                            <div class="icon">
                                                <i class="fa-solid fa-check"></i>
                                            </div>
                                            <div class="inner-content">
                                                <b>Huilerie :</b> Secteur ou équipements liés à la production, extraction ou raffinage d’huiles 
                                                végétales ou minérales. Cela peut inclure des machines de pressage, raffinage, filtration et stockage des huiles.
                                            </div>
                                        </div>
                                        <div class="single">
                                            <div class="icon">
                                                <i class="fa-solid fa-check"></i>
                                            </div>
                                            <div class="inner-content">
                                                <b>Indicateur :</b> Dispositif ou instrument utilisé pour mesurer, afficher ou contrôler une grandeur physique ou 
                                                chimique (pression, température, niveau, etc.) dans un processus industriel. Il permet de surveiller et d’assurer 
                                                la conformité des opérations.
                                            </div>
                                        </div>
                                        <div class="single">
                                            <div class="icon">
                                                <i class="fa-solid fa-check"></i>
                                            </div>
                                            <div class="inner-content">
                                                <b>Équipement de concasseur :</b> Ensemble des machines et composants utilisés pour le concassage des matériaux 
                                                solides (pierres, minerais, etc.). Ces équipements réduisent la taille des matériaux afin de faciliter leur transport 
                                                ou traitement ultérieur.
                                            </div>
                                        </div>
                                        <div class="single">
                                            <div class="icon">
                                                <i class="fa-solid fa-check"></i>
                                            </div>
                                            <div class="inner-content">
                                                <b>Équipement de tuyauterie :</b> Ensemble des composants et accessoires (tuyaux, raccords, vannes, brides, supports) 
                                                utilisés pour la conduite et le transport des fluides dans les installations industrielles. Ces équipements assurent 
                                                l’étanchéité, la résistance et la sécurité du système.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">

                                    <div class="inner-wrapper-tab-service-wrapper">
                                        <div class="single">
                                            <div class="icon">
                                                <i class="fa-solid fa-check"></i>
                                            </div>
                                            <div class="inner-content">
                                                <b>Personalized Design Consultation:</b> Our team of architects and
                                                designers
                                                collaborate with you to conceptualize a layout that suits your
                                                preferences,
                                                lifestyle, and budget. From layout to finishing touches, every detail is
                                                customized.
                                            </div>
                                        </div>
                                        <div class="single">
                                            <div class="icon">
                                                <i class="fa-solid fa-check"></i>
                                            </div>
                                            <div class="inner-content">
                                                <b>High-Quality Materials & Craftsmanship:</b> We prioritize quality in
                                                every aspect of your home. With carefully sourced materials and skilled
                                                professionals, we ensure that each element, from foundation to
                                                finishing, meets our high standards.
                                            </div>
                                        </div>
                                        <div class="single">
                                            <div class="icon">
                                                <i class="fa-solid fa-check"></i>
                                            </div>
                                            <div class="inner-content">
                                                <b>Project Management & Updates:</b> We take the stress out of building
                                                with a dedicated project manager, providing regular updates and
                                                transparent timelines so you’re informed at every stage.
                                            </div>
                                        </div>
                                    </div>
                                </div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service details area end -->

    <div class="rts-call-to-action rts-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="call-to-action-area-service bg_image">
                        <div class="inner">
                            <h3 class="title">Prêt à travailler ensemble</h3>
                            <p class="disc">
                                Nous sommes prêts à travailler ensemble pour construire un partenariat durable, 
                                basé sur la confiance, la performance et l’innovation.
                            </p>
                            <a href="#" class="rts-btn btn-primary">Prenez rendez-vous</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- why choose us area start -->
    <div class="why-choose-us-area rts-section-gapBottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-12 pr--60 pr_md--0 pr_sm--0">
                    <div class="reveal-item overflow-hidden aos-init">
                        <div class="reveal-animation reveal-end reveal-primary aos aos-init" data-aos="reveal-end">
                        </div>
                        <img src="assets/images/service/01.webp" alt="journey-area">
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
    <!-- why choose us area end -->

    @endsection

</body>

</html>