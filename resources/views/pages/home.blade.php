@extends('layouts.site')
@section('title', "RvCred")
@section('home', "active")
@section("content")

    <!-- links -->
    <link rel="stylesheet" href="{{ URL::to('public/css/home.css') }}">
    <!-- end links -->

    <!-- banner area-->
    <section>
        <div class="banner-area">
            <div class="content">
                <div class="left">
                    <h2 ><span class="typed"></span></h2>
                    <p>O Empréstimo que já nasce pago*</p>
                    <p>O dinheiro que já é seu por direito, na sua conta bancária mais rápido e sem burocracia!</p>
                    <div class="btn-area">
                        <button>Simule grátis</button>
                    </div>
                </div>
                <div class="right"></div>
            </div>
        </div>
    </section>
    <!-- end banner area-->

    <!-- about fgts area -->
    <section id="about">
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
    <section id="benefits">
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
    <section id="process-area">
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
    <section id="simulation">
        <div class="simulation-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="content">
                            <div class="text-area">
                                <p>Faça sua simulação agora e <span>solicite seu empréstimo</span> com garantia do saque aniversário do FGTS.</p>
                            </div>
                            <div class="btn-area">
                                <a href="#">Simule grátis</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="img-area">
                            <img src="{{ URL::to("public/img/home/rvcred/simulation-area.png") }}" alt="{{ $info->empresa }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end simulation area -->

@endsection
