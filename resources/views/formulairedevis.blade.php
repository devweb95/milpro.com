
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
                        <span class="water-text">Dévis</span>
                        <h1 class="title">
                        Dévis 
                        </h1>
                        <div class="nav-area-navigation">
                            <a href="{{route('index')}}">Accueil</a>
                            <a class="current" href="#">Formulaire de dévis</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts banner area end -->
        <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #542D11 0%, #8B4513 100%);
            min-height: 100vh;
            color: #333;
        }

        .rts-banner-area {
            background: linear-gradient(rgba(84, 45, 17, 0.8), rgba(84, 45, 17, 0.8)), url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 600"><rect fill="%23542D11" width="1200" height="600"/><circle fill="%238B4513" cx="300" cy="150" r="80" opacity="0.3"/><circle fill="%23542D11" cx="900" cy="400" r="120" opacity="0.2"/></svg>');
            background-size: cover;
            background-position: center;
            padding: 80px 0;
            position: relative;
        }

        .water-text {
            position: absolute;
            font-size: 120px;
            font-weight: 900;
            color: rgba(255,255,255,0.05);
            top: -20px;
            left: 0;
            z-index: 1;
            pointer-events: none;
        }

        .breadcrumb-area-inner {
            position: relative;
            z-index: 2;
            text-align: center;
            color: white;
        }

        .breadcrumb-area-inner h1 {
            font-size: 3.5rem;
            font-weight: 700;
            margin: 20px 0;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .nav-area-navigation {
            margin-top: 20px;
        }

        .nav-area-navigation a {
            color: rgba(255,255,255,0.8);
            text-decoration: none;
            margin: 0 5px;
            font-size: 1.1rem;
            transition: all 0.3s ease;
        }

        .nav-area-navigation a:hover,
        .nav-area-navigation a.current {
            color: #D2B48C;
        }

        .nav-area-navigation a:not(:last-child)::after {
            content: ' > ';
            margin-left: 10px;
            color: rgba(255,255,255,0.6);
        }

        .rts-contact-area-page {
            padding: 100px 0;
            background: white;
        }

        .contact-main-wrapper-left {
            padding-right: 40px;
        }

        .contact-main-wrapper-left span {
            color: #542D11;
            font-size: 1.1rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .title-main {
            font-size: 2.8rem;
            color: #2c3e50;
            margin: 20px 0;
            line-height: 1.2;
            font-weight: 700;
        }

        .disc {
            font-size: 1.1rem;
            color: #6c757d;
            margin-bottom: 40px;
            line-height: 1.6;
        }

        .quick-contact-page-1 {
            background: #f8f9fa;
            padding: 30px 25px;
            border-radius: 15px;
            text-align: center;
            transition: all 0.3s ease;
            border: 2px solid transparent;
            height: 100%;
        }

        .quick-contact-page-1:hover {
            background: #542D11;
            color: white;
            border-color: #542D11;
            transform: translateY(-5px);
        }

        .quick-contact-page-1 .icon {
            width: 70px;
            height: 70px;
            background: #542D11;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            transition: all 0.3s ease;
        }

        .quick-contact-page-1:hover .icon {
            background: white;
            color: #542D11;
        }

        .quick-contact-page-1 .icon i {
            font-size: 24px;
            color: white;
        }

        .quick-contact-page-1:hover .icon i {
            color: #542D11;
        }

        .quick-contact-page-1 h5 {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .contact-form-area-wrapper {
            background: #f8f9fa;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        .contact-form-area-wrapper h4 {
            font-size: 2rem;
            color: #2c3e50;
            margin-bottom: 30px;
            text-align: center;
            font-weight: 700;
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-group label {
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 8px;
            display: block;
        }

        .form-control {
            border: 2px solid #e9ecef;
            border-radius: 10px;
            padding: 15px 20px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background: white;
        }

        .form-control:focus {
            border-color: #542D11;
            box-shadow: 0 0 0 0.2rem rgba(84, 45, 17, 0.25);
            outline: none;
        }

        .half-input-wrapper {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .product-item {
            background: white;
            border: 2px solid #e9ecef;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 15px;
            transition: all 0.3s ease;
        }

        .product-item:hover {
            border-color: #542D11;
            box-shadow: 0 5px 15px rgba(84, 45, 17, 0.1);
        }

        .product-item .row > div {
            margin-bottom: 15px;
        }

        .btn-add-product {
            background: #28a745;
            border: none;
            color: white;
            padding: 10px 20px;
            border-radius: 8px;
            margin-bottom: 20px;
            transition: all 0.3s ease;
        }

        .btn-add-product:hover {
            background: #218838;
            transform: translateY(-2px);
        }

        .btn-remove-product {
            background: #dc3545;
            border: none;
            color: white;
            padding: 8px 12px;
            border-radius: 6px;
            font-size: 0.9rem;
            transition: all 0.3s ease;
        }

        .btn-remove-product:hover {
            background: #c82333;
        }

        .rts-btn {
            background: linear-gradient(135deg, #542D11 0%, #8B4513 100%);
            border: none;
            color: white;
            padding: 18px 40px;
            border-radius: 50px;
            font-size: 1.1rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            cursor: pointer;
            width: 100%;
            margin-top: 20px;
        }

        .rts-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(84, 45, 17, 0.3);
        }

        .urgency-selector {
            display: flex;
            gap: 15px;
            margin-top: 10px;
        }

        .urgency-option {
            flex: 1;
            text-align: center;
            padding: 15px;
            border: 2px solid #e9ecef;
            border-radius: 10px;
            cursor: pointer;
            transition: all 0.3s ease;
            background: white;
        }

        .urgency-option.selected {
            border-color: #542D11;
            background: #542D11;
            color: white;
        }

        .urgency-option:hover {
            border-color: #542D11;
        }

        .file-upload-area {
            border: 2px dashed #ccc;
            border-radius: 10px;
            padding: 40px;
            text-align: center;
            background: white;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .file-upload-area:hover {
            border-color: #542D11;
            background: #f8f9ff;
        }

        .file-upload-area.dragover {
            border-color: #542D11;
            background: #f0f4ff;
        }

        @media (max-width: 768px) {
            .title-main {
                font-size: 2rem;
            }
            
            .half-input-wrapper {
                grid-template-columns: 1fr;
            }
            
            .contact-main-wrapper-left {
                padding-right: 0;
                margin-bottom: 40px;
            }
            
            .urgency-selector {
                flex-direction: column;
            }
        }

        .success-message {
            background: #d4edda;
            color: #155724;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            border: 1px solid #c3e6cb;
            display: none;
        }
    </style>

    <!-- rta contact area stsart -->
    <div class="rts-contact-area-page">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <!-- Centered header section -->
                <div class="contact-main-wrapper-center text-center mb-5">
                    <span>Obtenir un devis</span>
                    <h3 class="title-main">
                        Solutions industrielles <br>sur mesure pour votre entreprise
                    </h3>
                    <p class="disc">
                        Demandez votre devis personnalisé pour tous vos besoins en fournitures industrielles. 
                        Notre équipe d'experts vous accompagne dans le choix des meilleures solutions.
                    </p>
                </div>
                
                <!-- Centered form -->
                <div class="contact-form-area-wrapper">
                    <h4 class="title">Formulaire de Devis</h4>
                    
                    <div class="success-message" id="successMessage">
                        <i class="fas fa-check-circle"></i> Votre demande de devis a été envoyée avec succès ! Nous vous contacterons dans les plus brefs délais.
                    </div>
                    
                    <form id="devisForm" onsubmit="submitForm(event)">
                        <!-- Rest of your form content stays exactly the same -->
                        
                        <!-- Informations entreprise -->
                        <div class="form-group">
                            <label>Informations de l'entreprise</label>
                            <div class="half-input-wrapper">
                                <input type="text" class="form-control" placeholder="Nom de l'entreprise *" required>
                                <input type="text" class="form-control" placeholder="Secteur d'activité *" required>
                            </div>
                        </div>

                        <!-- Contact -->
                        <div class="form-group">
                            <div class="half-input-wrapper">
                                <input type="text" class="form-control" placeholder="Nom du responsable *" required>
                                <input type="text" class="form-control" placeholder="Fonction">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="half-input-wrapper">
                                <input type="email" class="form-control" placeholder="Email professionnel *" required>
                                <input type="tel" class="form-control" placeholder="Téléphone *" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Adresse complète">
                        </div>

                        <!-- Produits demandés -->
                        <div class="form-group">
                            <label>Produits/Services demandés</label>
                            <button type="button" class="btn btn-add-product" onclick="addProduct()">
                                <i class="fas fa-plus"></i> Ajouter un produit
                            </button>
                            <div id="productsList">
                                <!-- Les produits seront ajoutés ici -->
                            </div>
                        </div>

                        <!-- Urgence -->
                        <div class="form-group">
                            <label>Niveau d'urgence</label>
                            <div class="urgency-selector">
                                <div class="urgency-option" onclick="selectUrgency(this, 'normal')">
                                    <i class="fas fa-clock"></i><br>
                                    <strong>Normal</strong><br>
                                    <small>2-3 jours</small>
                                </div>
                                <div class="urgency-option" onclick="selectUrgency(this, 'urgent')">
                                    <i class="fas fa-exclamation-triangle"></i><br>
                                    <strong>Urgent</strong><br>
                                    <small>24h</small>
                                </div>
                                <div class="urgency-option" onclick="selectUrgency(this, 'critique')">
                                    <i class="fas fa-fire"></i><br>
                                    <strong>Critique</strong><br>
                                    <small>Immédiat</small>
                                </div>
                            </div>
                        </div>

                        <!-- Budget -->
                        <div class="form-group">
                            <label>Budget estimé (FCFA)</label>
                            <select class="form-control">
                                <option>Moins de 500 000 FCFA</option>
                                <option>500 000 - 1 000 000 FCFA</option>
                                <option>1 000 000 - 5 000 000 FCFA</option>
                                <option>5 000 000 - 10 000 000 FCFA</option>
                                <option>Plus de 10 000 000 FCFA</option>
                                <option>À déterminer</option>
                            </select>
                        </div>

                        <!-- Fichiers -->
                        <div class="form-group">
                            <label>Documents techniques (facultatif)</label>
                            <div class="file-upload-area" onclick="document.getElementById('fileInput').click()">
                                <i class="fas fa-cloud-upload-alt fa-2x mb-3" style="color: #542D11;"></i>
                                <p><strong>Cliquez pour télécharger</strong> ou glissez-déposez vos fichiers ici</p>
                                <small>Formats acceptés: PDF, DOC, XLS, JPG, PNG (Max 10MB)</small>
                            </div>
                            <input type="file" id="fileInput" multiple accept=".pdf,.doc,.docx,.xls,.xlsx,.jpg,.jpeg,.png" style="display: none;">
                            <div id="fileList" class="mt-2"></div>
                        </div>

                        <!-- Message -->
                        <div class="form-group">
                            <label>Informations complémentaires</label>
                            <textarea class="form-control" rows="4" placeholder="Décrivez vos besoins spécifiques, contraintes techniques, délais particuliers..."></textarea>
                        </div>

                        <button type="submit" class="rts-btn btn-primary">
                            <i class="fas fa-paper-plane"></i> Envoyer la demande de devis
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- rta contact area end -->

    <!-- <div class="rts-map-area rts-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="rts-map-main-wrapper">
                        <div id="map-contact" class="map-contact" data-map-zoom="16" data-map-scroll="true"></div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        let productCount = 0;

        function addProduct() {
            productCount++;
            const productDiv = document.createElement('div');
            productDiv.className = 'product-item';
            productDiv.innerHTML = `
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h6 class="mb-0">Produit ${productCount}</h6>
                    <button type="button" class="btn-remove-product" onclick="removeProduct(this)">
                        <i class="fas fa-times"></i> Supprimer
                    </button>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Nom du produit *" required>
                    </div>
                    <div class="col-md-6">
                        <select class="form-control">
                            <option>Catégorie</option>
                            <option>Équipements lourds</option>
                            <option>Outils manuels</option>
                            <option>Pièces détachées</option>
                            <option>Matières premières</option>
                            <option>Consommables</option>
                            <option>Sécurité/EPI</option>
                            <option>Autre</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <input type="number" class="form-control" placeholder="Quantité *" min="1" required>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" placeholder="Unité (pcs, kg, m...)">
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" placeholder="Référence/Modèle">
                    </div>
                    <div class="col-12">
                        <textarea class="form-control" rows="2" placeholder="Spécifications techniques, dimensions, caractéristiques..."></textarea>
                    </div>
                </div>
            `;
            document.getElementById('productsList').appendChild(productDiv);
        }

        function removeProduct(button) {
            button.closest('.product-item').remove();
        }

        function selectUrgency(element, level) {
            document.querySelectorAll('.urgency-option').forEach(opt => opt.classList.remove('selected'));
            element.classList.add('selected');
            element.setAttribute('data-value', level);
        }

        function submitForm(event) {
            event.preventDefault();
            
            // Simulation d'envoi
            const submitBtn = event.target.querySelector('.rts-btn');
            const originalText = submitBtn.innerHTML;
            
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Envoi en cours...';
            submitBtn.disabled = true;
            
            setTimeout(() => {
                document.getElementById('successMessage').style.display = 'block';
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;
                event.target.reset();
                document.getElementById('productsList').innerHTML = '';
                productCount = 0;
                document.querySelectorAll('.urgency-option').forEach(opt => opt.classList.remove('selected'));
                
                // Scroll vers le message de succès
                document.getElementById('successMessage').scrollIntoView({ behavior: 'smooth' });
            }, 2000);
        }

        // Gestion du drag & drop pour les fichiers
        const fileUploadArea = document.querySelector('.file-upload-area');
        const fileInput = document.getElementById('fileInput');
        const fileList = document.getElementById('fileList');

        fileUploadArea.addEventListener('dragover', (e) => {
            e.preventDefault();
            fileUploadArea.classList.add('dragover');
        });

        fileUploadArea.addEventListener('dragleave', () => {
            fileUploadArea.classList.remove('dragover');
        });

        fileUploadArea.addEventListener('drop', (e) => {
            e.preventDefault();
            fileUploadArea.classList.remove('dragover');
            const files = e.dataTransfer.files;
            handleFiles(files);
        });

        fileInput.addEventListener('change', (e) => {
            handleFiles(e.target.files);
        });

        function handleFiles(files) {
            fileList.innerHTML = '';
            Array.from(files).forEach((file, index) => {
                const fileItem = document.createElement('div');
                fileItem.className = 'alert alert-info d-flex justify-content-between align-items-center mt-2';
                fileItem.innerHTML = `
                    <span><i class="fas fa-file"></i> ${file.name} (${(file.size/1024/1024).toFixed(2)} MB)</span>
                    <button type="button" class="btn btn-sm btn-outline-danger" onclick="this.parentElement.remove()">
                        <i class="fas fa-times"></i>
                    </button>
                `;
                fileList.appendChild(fileItem);
            });
        }

        // Ajouter automatiquement un premier produit
        document.addEventListener('DOMContentLoaded', function() {
            addProduct();
        });
    </script>
    @endsection



</body>

</html>