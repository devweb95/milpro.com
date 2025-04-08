
@extends('layouts.app')
@section('content')

<body class="inner">
    <!-- header area start -->

    <!-- rts banner area strart -->
    <div class="rts-banner-area rts-section-gap rts-breadcrumb-area  position-relative contact-bd">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-area-inner">
                        <span class="water-text">Contact</span>
                        <h1 class="title">
                        Contact
                        </h1>
                        <div class="nav-area-navigation">
                            <a href="{{route('index')}}">Accueil</a>
                            <a class="current" href="#">Nous contacter</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts banner area end -->


    <!-- rta contact area stsart -->
    <div class="rts-contact-area-page rts-section-gap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 pr--60 pr_sm--0 mb_sm--30 pr_md--10 pb_md--25 pb_sm--25">
                    <div class="contact-main-wrapper-left">
                        <span>Prendre contact</span>
                        <h3 class="title-main">
                        Nous sommes toujours prêts à vous aider <br>et à répondre à vos questions
                        </h3>
                        <p class="disc">
                            Pacific hake false trevally queen parrotfish black prickleback mosshead warbonnet sweeper!
                            Greenling sleeper.
                        </p>
                        <div class="row g-24">
                            <div class="col-lg-6">
                                <div class="quick-contact-page-1">
                                    <div class="icon">
                                        <img src="assets/images/contact/01.svg" alt="contact">
                                    </div>
                                    <h5 class="title">Centre d'appel</h5>
                                    <p>
                                        800 100 975 20 34 <br>1800-234-5678
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="quick-contact-page-1">
                                    <div class="icon">
                                        <img src="assets/images/contact/02.svg" alt="contact">
                                    </div>
                                    <h5 class="title">Notre bureau</h5>
                                    <p>
                                        USA, New York – 1060 <br>Str. First Avenue 1
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div id="form-messages"></div>
                    <form id="contact-form" action="mailer.php" class="contact-form-area-wrapper">
                        <h4 class="title">Let’s Get in Touch</h4>
                        <div class="half-inpur-wrapper">
                            <div class="single">
                                <input type="text" name="name" placeholder="Votre nom">
                            </div>
                            <div class="single">
                                <input type="text" name="email" placeholder="Numéro" required>
                            </div>
                        </div>
                        <div class="single">
                            <input name="subject" type="text" placeholder="Adresse électronique...">
                        </div>
                        <textarea name="message" id="" placeholder="Tapez votre message"></textarea>
                        <button type="submit" class="rts-btn btn-primary">Envoyer un message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- rta contact area end -->

    <div class="rts-map-area rts-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="rts-map-main-wrapper">
                        <div id="map-contact" class="map-contact" data-map-zoom="16" data-map-scroll="true"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection



</body>

</html>