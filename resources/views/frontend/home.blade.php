@extends('frontend.layouts.apps')

@section('title', 'Accueil')

@section('content')

    <!-- start slider section -->
    <div class="banner_main">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="carousel-caption relative">
                            <div class="bg_white">
                                <h1>Bienvenue Chez <span class="yello">Web tic Côte d'Ivoire</span></h1>
                                <p>Il est établi de longue date qu'un lecteur sera distrait par le contenu lisible d'une page lorsqu'il regardera sa mise en page. L'intérêt d'utiliser Lorem Ipsum est qu'il a une distribution plus ou moins normale des lettres.</p>
                            </div>
                            <a class="read_more ban_btn" href="Javascript:void(0)">Lire la suite</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="carousel-caption relative">
                            <div class="bg_white">
                                <h1>Bienvenue dans notre <span class="yello">Design d'Intérieur</span></h1>
                                <p>Il est établi de longue date qu'un lecteur sera distrait par le contenu lisible d'une page lorsqu'il regardera sa mise en page. L'intérêt d'utiliser Lorem Ipsum est qu'il a une distribution plus ou moins normale des lettres.</p>
                            </div>
                            <a class="read_more ban_btn" href="Javascript:void(0)">Lire la suite</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="carousel-caption relative">
                            <div class="bg_white">
                                <h1>Bienvenue dans notre <span class="yello">Design d'Intérieur</span></h1>
                                <p>Il est établi de longue date qu'un lecteur sera distrait par le contenu lisible d'une page lorsqu'il regardera sa mise en page. L'intérêt d'utiliser Lorem Ipsum est qu'il a une distribution plus ou moins normale des lettres.</p>
                            </div>
                            <a class="read_more ban_btn" href="Javascript:void(0)">Lire la suite</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Précédent</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Suivant</span>
            </a>
        </div>
    </div>
    <!-- end slider section -->

    <!-- À propos de nous -->
    <div id="about" class="about top_layer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="titlepage">
                        <h2>À propos de nous</h2>
                        <p>Il est établi de longue date qu'un lecteur sera distrait par le contenu lisible d'une page lorsqu'il regardera sa mise en page.</p>
                    </div>
                </div>
                <div class=" col-sm-12">
                    <div class="about_box">
                        <div class="row d_flex">
                            <div class="col-md-5">
                                <div class="about_box_text">
                                    <h3>Meilleur Design d'Intérieur</h3>
                                    <p>Il existe de nombreuses variations de passages de Lorem Ipsum disponibles, mais la majorité ont subi une altération sous une forme ou une autre, par de l'humour injecté.</p>
                                    <a class="read_more" href="#">Lire la suite</a>
                                </div>
                            </div>
                            <div class=" col-md-7  pppp">
                                <div class="about_box_img">
                                    <figure><img src="{{ asset('images/about_img.png') }}" alt="#" /></figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end À propos de nous -->
    <!-- Début de la section présentation -->
    <div class="building">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>SI UN BÂTIMENT <br><span class="yello">DEVIENT DE L'ARCHITECTURE <br></span> ALORS C'EST DE L'ART</h2>
                        <p>Il est établi de longue date qu'un lecteur sera distrait par le contenu lisible d'une page lorsqu'il regardera sa mise en page. L'intérêt d'utiliser Lorem Ipsum est qu'il a une distribution plus ou moins normale des lettres.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin de la section présentation -->
    <!-- Début de la section services -->
    <div class="services_main">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Services</h2>
                        <span>Il est bien établi qu'un lecteur sera distrait par le contenu lisible.</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <ul class="nav nav-tabs md-tabs border_none" id="myTabMD" role="tablist">
                        <li class="nav-item lisertab">
                            <a class="nav-link servi_tab active" id="home-tab-md" data-toggle="tab" href="#home-md" role="tab" aria-controls="home-md" aria-selected="true">RÉSIDENTIEL</a>
                        </li>
                        <li class="nav-item lisertab">
                            <a class="nav-link servi_tab" id="profile-tab-md" data-toggle="tab" href="#profile-md" role="tab" aria-controls="profile-md" aria-selected="false">DESIGN DE DÉTAIL</a>
                        </li>
                        <li class="nav-item lisertab">
                            <a class="nav-link servi_tab" id="contact-tab-md" data-toggle="tab" href="#contact-md" role="tab" aria-controls="contact-md" aria-selected="false">ADAPTATION D'ESPACE</a>
                        </li>
                    </ul>
                    <div class="tab-content card back_bg" id="myTabContentMD">
                        <!-- Onglet RÉSIDENTIEL -->
                        <div class="tab-pane fade show active" id="home-md" role="tabpanel" aria-labelledby="home-tab-md">
                            <div class="row">
                                <!-- Contenu pour le service résidentiel -->
                                <!-- Colonne 1 -->
                                <div class="col-md-4 col-sm-6 padding_0 margin_right20">
                                    <div class="services">
                                        <div class="services_img">
                                            <figure><img src="{{ asset('images/service_img1.png') }}" alt="#" /></figure>
                                            <div class="ho_dist">
                                                <span>Le lecteur sera distrait</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Colonne 2 -->
                                <!-- Ajoutez ici d'autres services résidentiels -->
                                <div class="col-md-4 col-sm-6 padding_0 margin_top70p margin_right20 margin_left20">
                                    <div class="services">
                                       <div class="services_img">
                                          <figure><img src="images/service_img2.png" alt="#" />  </figure>
                                          <div class="ho_dist">
                                             <span>Reader will be distracted</span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                <!-- Colonne 3 -->
                                <!-- Ajoutez ici d'autres services résidentiels -->
                                <div class="col-md-4 col-sm-6 padding_0 margin_left20">
                                    <div class="services">
                                       <div class="services_img">
                                          <figure><img src="images/service_img3.png" alt="#" />  </figure>
                                          <div class="ho_dist">
                                             <span>Reader will be distracted</span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                <!-- Colonne 4 -->
                                <!-- Ajoutez ici d'autres services résidentiels -->
                                <div class="col-md-4 offset-md-8 col-sm-6 padding_0 margin_top170">
                                    <div class="services margin_left60">
                                        <div class="services_img">
                                            <figure><img src="{{ asset('images/service_img4.png') }}" alt="#" /></figure>
                                            <div class="ho_dist">
                                                <span>Le lecteur sera distrait</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 <!-- Bouton "Lire la suite" -->
                                <div class="col-sm-6 margin_top40">
                                    <a class="read_more" href="#">Lire la suite</a>
                                </div>
                            </div>
                        </div>
                        <!-- Onglet DESIGN DE DÉTAIL -->
                        <!-- Ajoutez ici le contenu pour le design de détail -->
                        <div class="tab-pane fade" id="profile-md" role="tabpanel" aria-labelledby="profile-tab-md">
                            <div class="row">
                                <div class="col-md-4 col-sm-6 padding_0 margin_right20">
                                    <div class="services">
                                        <div class="services_img">
                                            <figure><img src="{{ asset('images/service_img3.png') }}" alt="#" /></figure>
                                            <div class="ho_dist">
                                                <span>Le lecteur sera distrait</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 padding_0 margin_top70p margin_right20 margin_left20">
                                    <div class="services">
                                        <div class="services_img">
                                            <figure><img src="{{ asset('images/service_img2.png') }}" alt="#" /></figure>
                                            <div class="ho_dist">
                                                <span>Le lecteur sera distrait</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 padding_0 margin_left20">
                                    <div class="services">
                                        <div class="services_img">
                                            <figure><img src="{{ asset('images/service_img4.png') }}" alt="#" /></figure>
                                            <div class="ho_dist">
                                                <span>Le lecteur sera distrait</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 offset-md-8 col-sm-6 padding_0 margin_top170">
                                    <div class="services margin_left60">
                                        <div class="services_img">
                                            <figure><img src="{{ asset('images/service_img1.png') }}" alt="#" /></figure>
                                            <div class="ho_dist">
                                                <span>Le lecteur sera distrait</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 margin_top40">
                                    <a class="read_more " href="Javascript:void(0)">Lire plus</a>
                                </div>
                            </div>
                        </div>
                        <!-- Onglet ADAPTATION D'ESPACE -->
                        <!-- Ajoutez ici le contenu pour l'adaptation d'espace -->
                        <div class="tab-pane fade" id="contact-md" role="tabpanel" aria-labelledby="contact-tab-md">
                            <div class="row">
                                <div class="col-md-4 col-sm-6 padding_0 margin_right20">
                                    <div class="services">
                                        <div class="services_img">
                                            <figure><img src="{{ asset('images/service_img4.png') }}" alt="#" /></figure>
                                            <div class="ho_dist">
                                                <span>Le lecteur sera distrait</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 padding_0 margin_top70p margin_right20 margin_left20">
                                    <div class="services">
                                        <div class="services_img">
                                            <figure><img src="{{ asset('images/service_img2.png') }}" alt="#" /></figure>
                                            <div class="ho_dist">
                                                <span>Le lecteur sera distrait</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 padding_0 margin_left20">
                                    <div class="services">
                                        <div class="services_img">
                                            <figure><img src="{{ asset('images/service_img1.png') }}" alt="#" /></figure>
                                            <div class="ho_dist">
                                                <span>Le lecteur sera distrait</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 offset-md-8 col-sm-6 padding_0 margin_top170">
                                    <div class="services margin_left60">
                                        <div class="services_img">
                                            <figure><img src="{{ asset('images/service_img3.png') }}" alt="#" /></figure>
                                            <div class="ho_dist">
                                                <span>Le lecteur sera distrait</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 margin_top40">
                                    <a class="read_more" href="Javascript:void(0)">Lire Plus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin de la section services -->
    <!-- instant -->
    <div class="instant">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="titlepage text_align_left">
                        <h2>Obtenez une estimation instantanée</h2>
                        <p>Il est de fait établi depuis longtemps qu'un lecteur sera distrait par le contenu lisible d'une page lorsqu'il regarde sa mise en page. L'intérêt d'utiliser Lorem Ipsum est qu'il a une distribution plus ou moins normale des lettres,</p>
                        <a class="read_more" href="Javascript:void(0)">Obtenir un devis</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="instant_img">
                        <figure><img src="{{ asset('images/pc.png') }}" alt="#"/></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end instant -->

@endsection
