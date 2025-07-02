
@extends('layouts.app')
@section('content')
<body class="inner">
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box; /* Conserve box-sizing de l'original, plus courant */
}

html {
    font-size: 10px; /* Base pour les unités rem */
    overflow-x: hidden; /* Empêche le défilement horizontal */
    overflow-y: auto; /* Permet le défilement vertical si nécessaire */
    scroll-behavior: auto !important; /* Maintient le défilement instantané, comme dans le 2ème extrait */
}

body {
    font-size: var(--font-size-b1);
    line-height: var(--line-height-b1);
    -webkit-font-smoothing: antialiased; /* Lissage des polices pour Webkit */
    -moz-osx-font-smoothing: grayscale; /* Lissage des polices pour Firefox */
    font-family: var(--font-secondary); /* Utilise la variable pour plus de cohérence */
    color: var(--color-body);
    font-weight: var(--p-regular); /* Utilise la variable de poids de police */
    position: relative;
    overflow-x: hidden; /* Déjà sur html, mais ici pour redondance si nécessaire */
    margin: 0;
    background: #EFEBE7; /* Couleur de fond du body du 2ème extrait */
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

/* Header */
.header {
    background: linear-gradient(135deg, var(--color-primary) 0%, #6B4423 100%);
    color: var(--color-white);
    padding: 80px 0;
    text-align: center;
    position: relative;
    overflow: hidden;
}

.header::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="10" cy="10" r="1" fill="rgba(255,255,255,0.03)"/><circle cx="50" cy="30" r="1" fill="rgba(255,255,255,0.02)"/><circle cx="80" cy="60" r="1" fill="rgba(255,255,255,0.03)"/><circle cx="20" cy="80" r="1" fill="rgba(255,255,255,0.02)"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
}

.header-content {
    position: relative;
    z-index: 2;
}

.header h1 {
    font-family: var(--font-primary);
    font-size: var(--h1);
    font-weight: 700;
    margin-bottom: 20px;
    background: linear-gradient(45deg, var(--color-white), var(--color-secondary));
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.header p {
    font-size: var(--font-size-b3);
    opacity: 0.9;
    max-width: 600px;
    margin: 0 auto;
}

/* Navigation */
.nav-tabs {
    background: var(--color-white);
    box-shadow: 0 2px 20px rgba(0,0,0,0.1);
    position: sticky;
    top: 0;
    z-index: 100;
}

.nav-tabs .container {
    display: flex;
    justify-content: center;
    gap: 0;
}

.nav-tab {
    background: none;
    border: none;
    padding: 20px 40px;
    font-family: var(--font-primary);
    font-size: 16px;
    font-weight: 600;
    color: var(--color-body);
    cursor: pointer;
    transition: all var(--transition);
    position: relative;
    border-bottom: 3px solid transparent;
}

.nav-tab:hover {
    color: var(--color-primary);
    background: rgba(84, 45, 17, 0.05);
}

.nav-tab.active {
    color: var(--color-primary);
    border-bottom-color: var(--color-secondary);
    background: rgba(84, 45, 17, 0.05);
}

/* Content Sections */
.content-section {
    display: none;
    padding: 80px 0;
}

.content-section.active {
    display: block;
}

.section-intro {
    text-align: center;
    max-width: 800px;
    margin: 0 auto 60px;
}

.section-intro h2 {
    font-family: var(--font-primary);
    font-size: var(--h2);
    color: var(--color-heading-dark);
    margin-bottom: 20px;
    position: relative;
}

.section-intro h2::after {
    content: '';
    position: absolute;
    bottom: -10px;
    left: 50%;
    transform: translateX(-50%);
    width: 60px;
    height: 3px;
    background: linear-gradient(45deg, var(--color-primary), var(--color-secondary));
    border-radius: 2px;
}

.section-intro p {
    font-size: var(--font-size-b2);
    line-height: var(--line-height-b2);
    color: var(--color-body);
}

/* Service Cards */
.services-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
    margin-top: 40px;
}

.service-card {
    background: var(--color-white);
    border-radius: var(--radius);
    padding: 40px 30px;
    box-shadow: 0 5px 30px rgba(0,0,0,0.08);
    transition: all var(--transition);
    position: relative;
    overflow: hidden;
    border: 1px solid rgba(84, 45, 17, 0.1);
}

.service-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 4px;
    background: linear-gradient(45deg, var(--color-primary), var(--color-secondary));
}

.service-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 50px rgba(84, 45, 17, 0.15);
}

.service-icon {
    width: 70px;
    height: 70px;
    background: linear-gradient(45deg, var(--color-primary), #6B4423);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 25px;
    position: relative;
}

.service-icon i {
    font-size: 30px;
    color: var(--color-white);
}

.service-card h3 {
    font-family: var(--font-primary);
    font-size: var(--h4);
    color: var(--color-heading-dark);
    margin-bottom: 15px;
    font-weight: 600;
}

.service-card p {
    color: var(--color-body);
    line-height: var(--line-height-b1);
    font-size: var(--font-size-b1);
}

/* Product Categories */
.products-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 40px;
    margin-top: 40px;
}

.product-category {
    background: linear-gradient(135deg, #f8f9fa 0%, #fff 100%);
    border-radius: var(--radius);
    overflow: hidden;
    box-shadow: 0 5px 25px rgba(0,0,0,0.08);
    transition: all var(--transition);
    border: 1px solid rgba(84, 45, 17, 0.1);
}

.product-category:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 40px rgba(84, 45, 17, 0.12);
}

.product-header {
    background: linear-gradient(135deg, var(--color-primary) 0%, #6B4423 100%);
    padding: 30px;
    color: var(--color-white);
    position: relative;
}

.product-header::before {
    content: '';
    position: absolute;
    top: 0;
    right: 0;
    width: 100px;
    height: 100%;
    background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><path d="M0,0 L100,0 L80,100 L0,100 Z" fill="rgba(255,215,0,0.1)"/></svg>');
}

.product-header h3 {
    font-family: var(--font-primary);
    font-size: var(--h4);
    margin-bottom: 10px;
    position: relative;
    z-index: 2;
}

.product-header .icon {
    font-size: 24px;
    color: var(--color-secondary);
    margin-bottom: 15px;
    position: relative;
    z-index: 2;
}

.product-content {
    padding: 30px;
}

.product-content p {
    color: var(--color-body);
    line-height: var(--line-height-b1);
    font-size: var(--font-size-b1);
}

/* CTA Section */
.cta-section {
    background: linear-gradient(135deg, var(--bg-dark-1) 0%, var(--color-primary) 100%);
    color: var(--color-white);
    padding: 80px 0;
    text-align: center;
    margin-top: 80px;
    position: relative;
    overflow: hidden;
}

.cta-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="hexagon" width="20" height="20" patternUnits="userSpaceOnUse"><polygon points="10,2 18,7 18,13 10,18 2,13 2,7" fill="none" stroke="rgba(255,215,0,0.1)" stroke-width="0.5"/></pattern></defs><rect width="100" height="100" fill="url(%23hexagon)"/></svg>');
}

.cta-content {
    position: relative;
    z-index: 2;
}

.cta-section h2 {
    font-family: var(--font-primary);
    font-size: var(--h2);
    margin-bottom: 20px;
}

.cta-section p {
    font-size: var(--font-size-b2);
    margin-bottom: 30px;
    opacity: 0.9;
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
}

.cta-button {
    display: inline-block;
    background: linear-gradient(45deg, var(--color-secondary), #FFE55C);
    color: var(--color-primary);
    padding: 15px 40px;
    border-radius: 50px;
    text-decoration: none;
    font-weight: 600;
    font-family: var(--font-primary);
    transition: all var(--transition);
    box-shadow: 0 5px 20px rgba(255, 215, 0, 0.3);
}

.cta-button:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 30px rgba(255, 215, 0, 0.4);
}

/* Responsive */
@media (max-width: 768px) {
    .header h1 {
        font-size: 40px;
    }
    
    .nav-tab {
        padding: 15px 20px;
        font-size: 14px;
    }
    
    .services-grid {
        grid-template-columns: 1fr;
    }
    
    .products-grid {
        grid-template-columns: 1fr;
    }
    
    .service-card {
        padding: 30px 20px;
    }
}

@media (max-width: 480px) {
    .nav-tabs .container {
        flex-direction: column;
    }
    
    .nav-tab {
        width: 100%;
        text-align: center;
    }
}
    </style>
    
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

    <!-- New integrated -->
     <!-- Header -->
    

    <!-- Navigation Tabs -->
    <nav class="nav-tabs">
        <div class="container">
            <button class="nav-tab active" onclick="showSection('services')">
                <i class="fas fa-tools"></i> Nos Services
            </button>
            <button class="nav-tab" onclick="showSection('products')">
                <i class="fas fa-boxes"></i> Nos Produits
            </button>
        </div>
    </nav>

    <!-- Services Section -->
    <section id="services" class="content-section active">
        <div class="container">
            <div class="section-intro">
                <h2>Nos Services</h2>
                <p>Mill Pro propose un ensemble de services techniques et logistiques dédiés aux acteurs des secteurs industriel et minier. Grâce à une équipe qualifiée et à un réseau de partenaires spécialisés, nous accompagnons nos clients dans la continuité et l'optimisation de leurs opérations.</p>
            </div>

            <div class="products-grid">
                <div class="product-category">
                    <div style="background-image: url('{{ asset('assets/images/new/maint.jpg') }}');background-position: center center; background-size: cover;background-repeat: no-repeat" class="product-header relative w-full h-[150px] md:h-[150px] lg:h-[200px] overflow-hidden">
                        <div class="icon">
                            <i class="fas fa-wrench"></i>
                        </div>
                        <h3>Maintenance industrielle et minière</h3>
                    </div>
                    <div class="product-content">
                        <p class="text-justify text-justify-last">Nous intervenons sur divers équipements critiques pour garantir leur performance et leur disponibilité. Notre expertise couvre l'entretien préventif, les réparations, ainsi que les interventions techniques sur site.</p>
                    </div>
                </div>

                <div class="product-category">
                    <div style="background-image: url('{{ asset('assets/images/new/solucon.jpg') }}');background-position: center center; background-size: cover;background-repeat: no-repeat" class="product-header relative w-full h-[150px] md:h-[150px] lg:h-[200px] overflow-hidden">
                        <div class="icon">
                            <i class="fas fa-conveyor-belt"></i>
                        </div>
                        <h3>Solutions de convoyage</h3>
                    </div>
                    <div class="product-content">
                        <p class="text-justify text-justify-last">Nous assurons l'installation, l'entretien et l'optimisation des systèmes de convoyage pour les lignes de production et d'extraction. Nos solutions sont conçues pour s'adapter aux environnements exigeants et aux volumes intensifs.</p>
                    </div>
                </div>

                <div class="product-category">
                    <div style="background-image: url('{{ asset('assets/images/new/logitech.jpg') }}');background-position: center center; background-size: cover;background-repeat: no-repeat" class="product-header relative w-full h-[150px] md:h-[150px] lg:h-[200px] overflow-hidden">
                        <div class="icon">
                            <i class="fas fa-truck"></i>
                        </div>
                        <h3>Logistique technique et approvisionnement</h3>
                    </div>
                    <div class="product-content">
                        <p class="text-justify text-justify-last">Mill Pro facilite l'approvisionnement en pièces, consommables et équipements industriels avec un service logistique intégré, réactif et fiable. Nous connectons les besoins des sites miniers aux meilleures solutions du marché.</p>
                    </div>
                </div>
                <div class="product-category">
                    <div style="background-image: url('{{ asset('assets/images/new/location.jpg') }}');background-position: center center; background-size: cover;background-repeat: no-repeat" class="product-header relative w-full h-[150px] md:h-[150px] lg:h-[200px] overflow-hidden">
                        <div class="icon">
                             <i class="fas fa-tools"></i>
                        </div>
                        <h3>Location d'équipements</h3>
                    </div>
                    <div class="product-content">
                        <p class="text-justify text-justify-last">Pour répondre aux besoins ponctuels ou aux projets spécifiques, nous proposons des solutions de location d'équipements industriels adaptés aux conditions du terrain et aux normes de sécurité.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section id="products" class="content-section">
        <div class="container">
            <div class="section-intro">
                <h2>Nos Produits</h2>
                <p>Nous fournissons une large gamme de produits destinés à soutenir les activités industrielles et minières, allant de la production à la maintenance.</p>
            </div>

            <div class="products-grid">
                <div class="product-category">
                    <div style="background-image: url('{{ asset('assets/images/new/fourn.jpg') }}');background-position: center center; background-size: cover;background-repeat: no-repeat" class="product-header relative w-full h-[150px] md:h-[150px] lg:h-[200px] overflow-hidden ">
                        <div class="icon">🔧</div>
                        <h3>Fournitures pour systèmes mécaniques et de production</h3>
                    </div>
                    <div class="product-content">
                        <p class="text-justify text-justify-last">Nous mettons à disposition des composants essentiels pour les équipements de production, de traitement, de concassage ou de convoyage, adaptés aux standards les plus exigeants du secteur.</p>
                    </div>
                </div>

                <div class="product-category">
                    <div style="background-image: url('{{ asset('assets/images/new/prodcom.jpg') }}');background-position: center center; background-size: cover;background-repeat: no-repeat" class="product-header relative w-full h-[150px] md:h-[150px] lg:h-[200px] overflow-hidden">
                        <div class="icon">🛠️</div>
                        <h3>Produits de consommation et maintenance</h3>
                    </div>
                    <div class="product-content">
                        <p class="text-justify text-justify-last">Mill Pro propose des lubrifiants, produits chimiques, consommables techniques et accessoires divers indispensables au bon fonctionnement des installations industrielles.</p>
                    </div>
                </div>

                <div class="product-category">
                    <div style="background-image: url('{{ asset('assets/images/new/tuyau.jpg') }}');background-position: center center; background-size: cover;background-repeat: no-repeat" class="product-header relative w-full h-[150px] md:h-[150px] lg:h-[200px] overflow-hidden">
                        <div class="icon">🔩</div>
                        <h3>Tuyauterie, raccords et équipements de fluides</h3>
                    </div>
                    <div class="product-content">
                        <p class="text-justify text-justify-last">Notre catalogue inclut une sélection de produits pour les circuits de fluide, de la tuyauterie aux vannes, répondant aux exigences de robustesse et de performance.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- service details area start -->
    <div class="service-details-area rts-section-gapTop pb--60">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="service-details-main-wrapper-thumbnail">
                        <img style="" src="{{ asset('assets/images/new/teammining.jpg') }}" class="shadow-lg rounded-lg" alt="service">
                    </div>
                    <div class="service-details-inner-area-wrapper">
                        <h4 class="title">Votre partenaire stratégique pour l’approvisionnement et les services miniers de haute performance</h4>
                        <p class="disc text-justify text-justify-last">
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
                        <!--<div class="service-main-wrapper-tabs">
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
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab"
                                        data-bs-target="#contact" type="button" role="tab" aria-controls="contact"
                                        aria-selected="false">Customized Solutions</button>
                                </li>
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
                                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">

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
                                </div>
                            </div>
                        </div>-->
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
    <script>
        function showSection(sectionId) {
            // Hide all sections
            const sections = document.querySelectorAll('.content-section');
            sections.forEach(section => section.classList.remove('active'));
            
            // Remove active class from all tabs
            const tabs = document.querySelectorAll('.nav-tab');
            tabs.forEach(tab => tab.classList.remove('active'));
            
            // Show selected section
            document.getElementById(sectionId).classList.add('active');
            
            // Add active class to clicked tab
            event.target.classList.add('active');
        }

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Add scroll animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe service cards and product categories
        document.addEventListener('DOMContentLoaded', () => {
            const animatedElements = document.querySelectorAll('.service-card, .product-category');
            animatedElements.forEach(el => {
                el.style.opacity = '0';
                el.style.transform = 'translateY(30px)';
                el.style.transition = 'all 0.6s ease';
                observer.observe(el);
            });
        });
    </script>
</body>

</html>