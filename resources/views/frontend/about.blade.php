@extends('frontend.layouts.app')

@section('content')
    <!-- À propos -->
    <div class="about">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="titlepage">
                        <h2>À propos de nous</h2>
                        <p>Il est bien établi qu'un lecteur sera distrait par le contenu lisible d'une page lorsqu'il regarde sa mise en page.</p>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="about_box">
                        <div class="row d_flex">
                            <div class="col-md-5">
                                <div class="about_box_text">
                                    <h3>Meilleur design d'intérieur</h3>
                                    <p>Il existe de nombreuses variations de passages de Lorem Ipsum disponibles, mais la majorité ont subi une altération sous une forme ou une autre, par de l'humour injecté.</p>
                                    <a class="read_more" href="Javascript:void(0)">Lire la suite</a>
                                </div>
                            </div>
                            <div class="col-md-7 pppp">
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
    <!-- Fin de À propos -->
@endsection
