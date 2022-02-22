@extends('layouts.site')
@section('title', "RvCred")
@section("content")

    <!-- links -->
    <link rel="stylesheet" href="{{ URL::to('public/css/home.css') }}">
    <!-- end links -->

    <!-- banner area-->
    <section id="sectionHome">
        <div class="banner-area">
            <div class="content">
                <div class="left">
                    <h2 ><span class="typed"></span></h2>
                    <p>O Empréstimo que já nasce pago*</p>
                    <p>O dinheiro que já é seu por direito, na sua conta bancária mais rápido e sem burocracia!</p>
                    <div class="btn-area">
                        <a href="{{ url("/simulacao") }}">Simule grátis</a>
                    </div>
                </div>
                <div class="right"></div>
            </div>
        </div>
    </section>
    <!-- end banner area-->

    <!-- about fgts area -->
    <section id="sectionAbout">
        <div class="about-fgts">
            <div class="container">
                <div class="content">
                    <div class="title-area">
                        <div class="logo-area">
                            <img src="{{ URL::to('/public/img/site/rvcred/logo.png') }}" alt="{{ $info->empresaName }}">
                        </div>
                        <h3 class="typed">Realizar seus sonhos nunca foi tão fácil!.</h3>
                        <p>Uma nova modalidade de empréstimo para pessoa física</p>
                    </div>
                </div>
                <div class="description-area">
                    <div class="left">
                        <div class="title-area">
                            <p>Por que fazer Empréstimo com Garantia de Saque do FGTS?</p>
                        </div>
                        <div class="text-area">
                            <p>O empréstimo com garantia de saque do FGTS é o único que não compromete o seu orçamento mensal e todos que tem o FGTS ativo e inativo tem esse direto, inclusive negativados!</p>
                        </div>
                        <div class="title-area">
                            <p>Todo mundo está aproveitando... só falta você!</p>
                        </div>
                    </div>
                    <div class="right">
                        <div class="img-area">
                            <img src="{{ URL::to("public/img/home/rvcred/ftgs-area.png") }}" alt="{{ $info->empresa }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end about fgts area -->

    <!-- benefits -->
    <section id="sectionProduct">
        <div class="benefits-area">
            <div class="container">
                <div class="title-area">
                    <h3>Vantagens Exclusivas</h3>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card-area">
                            <div class="card-logo">
                                <i class="fas fa-search-dollar"></i>
                            </div>
                            <div class="card-title">
                                <h2>Crédito</h2>
                            </div>
                            <div class="text-area">
                                <p>Sem consulta ao SPC e SERASA</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-area">
                            <div class="card-logo">
                                <i class="fas fa-percent"></i>
                            </div>
                            <div class="card-title">
                                <h2>Juros</h2>
                            </div>
                            <div class="text-area">
                                <p>Taxas de juros competitivas</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-area">
                            <div class="card-logo">
                                <i class="fas fa-wallet"></i>
                            </div>
                            <div class="card-title">
                                <h2>Orçamento</h2>
                            </div>
                            <div class="text-area">
                                <p>Não compromete o orçamento mensal</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-area">
                            <div class="card-logo">
                                <i class="far fa-credit-card"></i>
                            </div>
                            <div class="card-title">
                                <h2>Linhas de crédito</h2>
                            </div>
                            <div class="text-area">
                                <p>Não impacta na contratação de outras linhas de crédito</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-area">
                            <div class="card-logo">
                                <i class="fas fa-coins"></i>
                            </div>
                            <div class="card-title">
                                <h2>Parcelas</h2>
                            </div>
                            <div class="text-area">
                                <p>Até cinco parcelas anuais do saque aniversário</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-area">
                            <div class="card-logo">
                                <i class="far fa-handshake"></i>
                            </div>
                            <div class="card-title">
                                <h2>Pagamento</h2>
                            </div>
                            <div class="text-area">
                                <p>Anual e mediante o débito direto na(s) conta(s) do FGTS</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end benefits -->

    <!-- process area -->
    <section id="sectionProcess">
        <div class="process">
            <div class="container">
                <div class="title-area">
                    <h2>Faça o Empréstimo com Garantia fr FGTS e organize sua vida financeira</h2>
                    <p>São apenas 3 passos</p>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="card-area">
                            <div class="circle-area">
                                <p>1</p>
                            </div>
                            <div class="text-area">
                                <p>Optar pelo Saque de Aniversário</p>
                            </div>
                            <div class="direction">
                                <i class="fa fa-chevron-right" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card-area">
                            <div class="circle-area">
                                <p>2</p>
                            </div>
                            <div class="text-area">
                                <p>Autorizar o banco a acessar seus dados e valores do FGTS.</p>
                            </div>
                            <div class="direction">
                                <i class="fa fa-chevron-right" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card-area">
                            <div class="circle-area">
                                <p>3</p>
                            </div>
                            <div class="text-area">
                                <p>Aprovação da simulação</p>
                            </div>
                            <div class="direction">
                                <i class="fa fa-chevron-right" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card-area">
                            <div class="circle-area">
                                <p><i class="fas fa-trophy"></i></p>
                            </div>
                            <div class="text-area">
                                <p>Dinheiro na conta</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end process area -->

    <!-- simulation area -->
    <section id="sectionSimulation">
        <div class="simulation-area">
            <div class="title-area">
                <h3>Faça sua simulação agora e solicite seu empréstimo com garantia do saque aniversário do FGTS.</h3>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="img-area">
                            <img src="{{ URL::to("public/img/home/rvcred/simulation-area.png") }}" alt="{{ $info->empresa }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="content">
                            <div class="box">
                                <div class="text">
                                    <p>Qual seu saldo FGTS?</p>
                                </div>
                                <div class="simulation">
                                    <p>Simule o valor liberado para saque</p>
                                    <div>
                                        <div class="input">
                                            <input type="text" name="fgts" id="fgts-simulation" placeholder="R$ 0.000,00" onkeypress="$(this).mask('R$ 000.000,00')">
                                            <button id="fgts-simulation-button" class="bg-success"><i class="fa fa-check" aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="result" id="result">
                                    <p>...</p>
                                </div>
                                <div class="bottom">
                                    <p>Não sabe seu saldo disponível? <a href="" target="_blank" alt="app fgts">Acesse o APP do FGTS</a></p>
                                    <div class="btn-area bg-success">
                                        <a href=""><i class="fa-brands fa-whatsapp"></i>  Contratar no whatsapp</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end simulation area -->

    <!-- testimonial area -->
    <section class="testimonial">
        <div class="content">
            <div class="box">
                <div class="icon"><i class="fa-solid fa-quote-right"></i></div>
                <div class="text">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos suscipit nisi iure saepe in voluptas impedit assumenda excepturi quisquam! Numquam sapiente porro tenetur sed quibusdam necessitatibus obcaecati nesciunt excepturi vel!</p>
                </div>
                <div class="name">
                    <p>Maria Lucia</p>
                    <p>Recife - PE</p>
                </div>
            </div>
        </div>
        <div class="counters-area">
            <div class="data">
                <div class="line">
                    <div class="item">
                        <div class="counter" data-target="12">0</div>
                        <p>Milhões vendido em 2019</p>
                    </div>
                    <div class="item">
                        <div class="counter" data-target="25">0</div>
                        <p>Milhões refinanciados em uma menor taxa</p>
                    </div>
                </div>
                <div class="line">
                    <div class="item">
                        <div class="counter" data-target="6000">0</div>
                        <p>Clientes</p>
                    </div>
                    <div class="item">
                        <div class="counter" data-target="315">0</div>
                        <p>Colaboradores</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end testimonial area -->

    <!-- contact area -->
    <section id="sectionContact" class="contact">
        <div class="container">
            <div class="title-area">
                <h3>Entre em contato conosco</h3>
            </div>
            <div class="text-area">
                <p>A {{ $info->empresaName }} coloca à disposição de seus parceiros e clientes o Canal contato, onde interessados podem enviar elogios, denúncias, sugestões e reclamações de forma anônima ou não.</p>
            </div>
            <div class="form-area">
                <div class="row">
                    <div class="col-md-6">
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
                                            <input type="text" name="cpf" id="cpf" class="form-control" placeholder="Digite seu cpf" onkeypress="$(this).mask('000.000.000-00')">
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
                            <div class="btn-area">
                                <button type="submit">Enviar</button>
                            </div>
                        </form>
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

    <script>
        var timeout = null;
        $('body').on('click', '#fgts-simulation-button', function(e){

            var fgts = $('#fgts-simulation').val();

            clearTimeout(timeout);
            timeout = setTimeout(function() {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: "POST",
                    url: "{{ url('/simulation-fgts') }}",
                    data: {data: fgts},
                    success: function(retorno){
                        $('#result').html(retorno);
                    }
                });
            }, 800)
        });

        const counters = document.querySelectorAll('.counter');

        for(let n of counters) {
            const updateCount = () => {
                const target = + n.getAttribute('data-target');
                const count = + n.innerText;
                const speed = 5000;

                const inc = target / (target / 2);

                if(count < target) {
                    n.innerText = Math.ceil(count + inc);
                    setTimeout(updateCount, 1);
                } else {
                    n.innerText = target;
                }
            }

            updateCount();
        }


    </script>
@endsection
