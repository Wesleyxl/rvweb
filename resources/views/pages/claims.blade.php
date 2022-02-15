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
@endsection
