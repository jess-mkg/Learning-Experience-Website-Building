@extends('layouts.app')

@section('content')
<title>Home</title>
<link type="text/css" rel="stylesheet" href="/css/style.css">
<div class="container">
    <div>
        <div class="row justify-content-center">
            <img src="/svg/logo12.png" class="tree-logo">
        </div>
        <div class="row justify-content-center" style="padding: 10px">
            <div class="card col home-cards border-green round-border">
                <p>Indicates whether your child displays characteristics of
                    <span class="">giftedness</span> such as
                    <span class="spanred">memory</span>,
                    <span class="spanblue">perceptual ability</span>,
                    <span class="spanyellow">leadership</span> and
                    <span class="spangreen">intuitive</span>.
                </p>
            </div>

            <div class="card col home-cards border-yellow round-border" style="font-size: 175%;">
                Set Up Your Profile Today<br><a class="mya" href="{{ route('register') }}"><span class="boldspan">Click Here</span></a>
            </div>

            <div class="card col home-cards border-red round-border">
                <p>This assessment will provide an overarching picture of children’s
                    <span class="spanred">physical</span>,
                    <span class="spanblue">cognitive</span>,
                    <span class="spanyellow">social-emotional</span> and
                    <span class="spangreen">spiritual</span> gifts and strengths</span>.
                </p>
            </div>
        </div>
    </div>
    @endsection
