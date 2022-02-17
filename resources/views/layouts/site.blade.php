<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script type="text/javascript" src="google/gtag.js"></script>

    <!-- links -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css" integrity="sha512-T584yQ/tdRR5QwOpfvDfVQUidzfgc2339Lc8uBDtcp/wYu80d7jwBgAxbyMh0a9YM9F8N3tdErpFI8iaGx6x5g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ URL::to("/public/css/site.css") }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/imask"></script>
    <!-- end links -->

    <title>@yield('title')</title>

</head>
<body>

    <!-- header -->
    <Header>
        <div class="desktop">
            <nav>
                <div class="logo">
                    <img src="{{ URL::to('/public/img/site/rvcred/logo.png') }}" alt="{{ $info->empresaName }}">
                </div>
                <ul>
                    <li>
                        <a id="linkHome" class="" href="{{ url("/") }}">Início</a>
                    </li>
                    <li>
                        <a id="linkAbout" class="" href="{{ url("/#sobre") }}">Sobre</a>
                    </li>
                    <li>
                        <a id="linkProduct" class="" href="{{ url("/#produtos") }}">Produtos</a>
                    </li>
                    <li>
                        <a id="linkTips" class="" href="{{ url("/#dicas") }}">Dicas</a>
                    </li>
                    <li>
                        <a class="@yield("fgts")" href="{{ url("/simulacao") }}">FGTS</a>
                    </li>
                    <li>
                        <a class="@yield("speak")" href="{{ url("/sua-voz") }}">Sua voz</a>
                    </li>
                    <li>
                        <a id="linkContact" class="" href="{{ url("/#contact") }}">Contato</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="mobile">
            <div class="menu">
                <div class="logo-area">
                    <img src="{{ URL::to('/public/img/site/rvcred/logo.png') }}" alt="{{ $info->empresaName }}">
                </div>
                <div class="btn-area">
                    <button onclick="handleMobileMenu()"><i class="fas fa-bars"></i></button>
                </div>
            </div>
            <div id="mobile-menu-content" class="content hide">
                <nav>
                    <ul>
                        <li>
                            <a class="scroll" href="#home">Início</a>
                        </li>
                        <li>
                            <a class="scroll" href="#sobre">Sobre</a>
                        </li>
                        <li>
                            <a class="scroll" href="#produtos">Produtos</a>
                        </li>
                        <li>
                            <a class="scroll" href="#dicas">Dicas</a>
                        </li>
                        <li>
                            <a class="scroll" href="#fgts">FGTS</a>
                        </li>
                        <li>
                            <a class="scroll" href="{{ url("/sua-voz") }}">Sua voz</a>
                        </li>
                        <li>
                            <a class="scroll" href="{{ url('/contato') }}">Contato</a>
                        </li>
                    </ul>
                </nav>
                <div class="footer">
                    <ul>
                        <li>
                            <a href="{{ $info->links['facebook'] }}"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li>
                            <a href="{{ $info->links['instagram'] }}"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href="{{ $info->links['linkedin'] }}"><i class="fab fa-linkedin-in"></i></a>
                        </li>
                        <li>
                            <a href="{{ $info->links['email'] }}"><i class="far fa-envelope"></i></a>
                        </li>
                    </ul>
                    <p>2022 <i class="fa fa-copyright" aria-hidden="true"></i> Copyright RvCred. Todos os direitos reservados.</p>
                </div>
            </div>
        </div>
    </Header>
    <!-- end header -->

    <main>
        @yield("content")
    </main>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="box-area">
                        <div class="title-area">
                            <p>Quer falar com a gente</p>
                        </div>
                        <div class="content">
                            <ul>
                                <li>
                                    <a href="{{ $info->links['address'] }}">{{ $info->address }}</a>
                                </li>
                                <li>
                                    <a href="{{ url('/') }}">{{ $info->cnpj }}</a>
                                </li>
                                <li>
                                    <a href="{{ $info->links['phone'] }}"><i class="fa fa-phone" aria-hidden="true"></i> {{ $info->phone }}</a>
                                </li>
                                <li>
                                    <a href="{{ $info->links['email'] }}"><i class="fa fa-envelope-o" aria-hidden="true"></i> {{ $info->email }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box-area rede-area">
                        <div class="title-area">
                            <p>Nossas redes sociais</p>
                        </div>
                        <div class="space">
                            <div class="rede-text">
                                <p>Fique por dentro das dicas de sua agência pessoal de serviços financeiros</p>
                            </div>
                            <div class="icons-area">
                                <ul>
                                    <li>
                                        <a href="{{ $info->links['facebook'] }}"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="{{ $info->links['instagram'] }}"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="{{ $info->links['linkedin'] }}"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                    <li>
                                        <a href="{{ $info->links['email'] }}"><i class="far fa-envelope"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box-area rede-area">
                        <div class="title-area">
                            <p>Garantia extra?</p>
                        </div>
                        <div class="rede-text">
                            <p>Precisando de uma graninha extra? Faça agora uma solicitação. É rápido, prático e seguro!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copy-area">
                <p>2022 © Copyright {{ $info->empresaName }}. Todos direitos reservados.</p>
            </div>
        </div>
    </footer>
    <!--Footer End-->

    <!-- scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js" integrity="sha512-3J8teBiHrSyaaRBajZyIEtpDsXdPq1gsznKWIVb5CnorQuFhjWGhWe54z8YNnHHr7MZuExb9m5kvf964HiT1Sw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/js/bootstrap.min.js" integrity="sha512-UR25UO94eTnCVwjbXozyeVd6ZqpaAE9naiEUBK/A+QDbfSTQFhPGj5lOR6d8tsgbBk84Ggb5A3EkjsOgPRPcKA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ URL::to('public/js/site.js') }}"></script>
    <script>

        function handleMobileMenu() {

           if ($("#mobile-menu-content").hasClass("hide")) {
               $("#mobile-menu-content").removeClass("hide");
               $("#mobile-menu-content").addClass("show");
           } else {
               $("#mobile-menu-content").addClass("hide");
               $("#mobile-menu-content").removeClass("show");
            }

       }

       var typed = new Typed('.typed', {
           strings: ["Liberação antecipada do FGTS", "A RvCred agora é digital.", "Parcelas que cabem no seu bolso!", "Fujas das burocracias"],
           typeSpeed: 60,
           backSpeed: 30,
           loop: true,
       });
   </script>
    <!-- end scripts -->

</body>
</html>
