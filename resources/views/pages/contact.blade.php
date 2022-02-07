@extends('layouts.site')
@section('title', "RvCred")
@section('contact', "active")
@section("content")

    <!-- links -->
    <link rel="stylesheet" href="{{ URL::to("public/css/contact.css") }}">
    <!-- end links -->

    <!-- banner area -->
    <div class="banner">
        <div class="text">
            <h3>Entre em contato</h3>
        </div>
    </div>
    <!-- end banner area -->

    <!-- contact area -->
    <section class="contact">
        <div class="container">
            <div class="title-area">
                <h3>Entre em contato conosco</h3>
            </div>
            <div class="text-area">
                <p></p>
            </div>
            <div class="form-area">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <input type="text" name="name" id="name" class="form-control" placeholder="Digite seu nome completo">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <input type="text" name="cpf" id="cpf" class="form-control" placeholder="Digite seu cpf" onkeypress="$(this).mask('000.000.000-00')">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <input type="text" name="phone" id="phone" class="form-control" placeholder="Digite seu celular" onkeypress="$(this).mask('(00)00000-0000')">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="form-control" placeholder="Digite seu email">
                                    </div>
                                </div>
                                <div class="col-12">
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
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea name="text" id="text" rows="5" placeholder="Mensagem" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="map-area">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.804112682255!2d-46.526583585494016!3d-23.467529364017935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cef52c77bf4393%3A0xf6facbdade1ef031!2sRvCred!5e0!3m2!1spt-BR!2sbr!4v1644250794366!5m2!1spt-BR!2sbr" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end contact area -->


@endsection
