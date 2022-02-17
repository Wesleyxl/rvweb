@extends('layouts.site')
@section('title', "RvCred")
@section("speak", "active")
@section("content")

    <!-- links -->
    <link rel="stylesheet" href="{{ URL::to("/public/css/claims.css") }}">
    <!-- end links -->

    <!-- banner area -->
    <div class="banner">
        <div class="text">
            <h3>Sua voz</h3>
        </div>
    </div>
    <!-- end banner area -->

    <!-- claims -->
    <section class="claims">
        <div class="container">
            <div class="content">
                <div class="title-area">
                    <div class="logo-area">
                        <img src="{{ URL::to('/public/img/site/rvcred/logo.png') }}" alt="{{ $info->empresaName }}">
                    </div>
                    <h3>Realizar seus sonhos nunca foi tão fácil!.</h3>
                    <p>A {{ $info->empresaName }} coloca à disposição de seus parceiros e clientes o Canal Sua Voz, onde interessados podem enviar elogios, denúncias, sugestões e reclamações de forma anônima ou não.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- end claims -->

@endsection
