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
                <div class="testimonial-area">
                    <div class="img-area">
                        <img src="{{ URL::to('/public/img/home/rvcred/banner.png')}}" alt="">
                    </div>
                    <div class="text-area">
                        <div class="title">
                            <h4>Elogios</h4>
                        </div>
                        <div class="text">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto earum optio facere vel, veniam dolor, assumenda excepturi tenetur quisquam enim ducimus, aut ad. Vel corporis assumenda suscipit nostrum commodi obcaecati?</p>
                        </div>
                    </div>
                </div>
                <div class="form-area">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="{{ url("/contact") }}" method="POST">
                                @csrf
                                <div class="form">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="name" id="name" class="form-control" placeholder="Digite seu nome completo">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="phone" id="phone" class="form-control" placeholder="Digite seu celular" onkeypress="$(this).mask('(00)00000-0000')">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="email" name="email" id="email" class="form-control" placeholder="Digite seu email">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select name="reason" id="reason" class="form-control">
                                                    <option>Selecione o motivo</option>
                                                    <option value="atendimento">Atendimento</option>
                                                    <option value="elogio">Elogio</option>
                                                    <option value="reclamacao">Reclamação</option>
                                                    <option value="denuncia">Denúncia</option>
                                                    <option value="trabalhe-conosco">Trabalhe Conosco</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea name="text" id="text" rows="5" placeholder="Mensagem" class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-area">
                                    <button type="submit">Enviar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end claims -->

@endsection
