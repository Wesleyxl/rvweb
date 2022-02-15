@extends('layouts.site')
@section('title', "RvCred - FGTS")
@section('fgts', "active")
@section("content")

    <!-- links -->
    <link rel="stylesheet" href="{{ URL::to("/public/css/fgts.css") }}">
    <!-- end links -->

    <!-- banner area -->
    <div class="banner">
        <div class="text">
            <h3>Simule seu FGTS</h3>
        </div>
    </div>
    <!-- end banner area -->

    <!-- simulation area -->
    <section class="simulation">
        <div class="container">
            <div class="title">
                <h3>Saldo de FGTS</h3>
            </div>
            <div class="form">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form group">
                            <label for="valueContract">Valor de contrato</label>
                            <input class="form-control" name="valueContract" type="text" id="valueContract" placeholder="R$ 10 000" >
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form group">
                            <label for="iof">IOF</label>
                            <input class="form-control" name="iof" type="text" id="iof" value="1,90">
                        </div>
                    </div>
                </div>
            <div class="table-area">
                <div class="row">
                    <div class="col-md-6">
                        <div class="list-area">
                            <div class="title">
                                <h3>Saldo FGTS</h3>
                            </div>
                            <div class="list">
                                <ul>
                                    <li>2023: R$ 2.000,00</li>
                                    <li>2024: R$ 1.250,00</li>
                                    <li>2025: R$ 725,00</li>
                                    <li>2026: R$ 385,00</li>
                                    <li>2027: R$ 192,00</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="table-area">
                            <div class="title">
                                <h3>Saque aniversário</h3>
                            </div>
                            <table class="table table-striped">
                                <thead>
                                  <tr>
                                    <th scope="col">Alíquota</th>
                                    <th scope="col">Parcela Fixa</th>
                                    <th scope="col">Total</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>R$ 600,00</td>
                                        <td>R$ 150,00</td>
                                        <td>R$ 750,00</td>
                                    </tr>
                                    <tr>
                                        <td>R$ 375,00</td>
                                        <td>R$ 150,00</td>
                                        <td>R$ 525,00</td>
                                    </tr>
                                    <tr>
                                        <td>R$ 290,00</td>
                                        <td>R$ 50,00</td>
                                        <td>R$ 340,00</td>
                                    </tr>
                                    <tr>
                                        <td>R$ 192,50</td>
                                        <td>R$ 0,00</td>
                                        <td>R$ 192,50</td>
                                    </tr>
                                    <tr>
                                        <td>R$ 96,25</td>
                                        <td>R$ 0,00</td>
                                        <td>R$ 96,25</td>
                                    </tr>
                                    <tr>
                                        <td>Total de Saque</td>
                                        <td colspan="2">R$ 1.903,75</td>
                                    </tr>
                                    <tr>
                                        <td>IOF</td>
                                        <td colspan="2">1,9 %</td>
                                    </tr>
                                    <tr>
                                        <td>CET</td>
                                        <td colspan="2">25,340 %</td>
                                    </tr>
                                    <tr>
                                        <td>Total Empréstimo</td>
                                        <td colspan="2">R$1.170,63 %</td>
                                    </tr>
                                </tbody>
                              </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end simulation area -->

    <!-- scripts -->
    <script>
        var currencyMask = IMask(
            document.getElementById('valueContract'),
            {
                mask: '$num',
                blocks: {
                    num: {
                        // nested masks are available!
                        mask: Number,
                        thousandsSeparator: ' '
                    }
                }
            }
        );
    </script>
    <!-- end scripts -->

@endsection
