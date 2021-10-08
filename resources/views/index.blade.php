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
            <div class="card col home-cards">
                <p>Indicates whether your child displays characteristics of
                    <span class="otherspan">giftedness</span> such as
                    <span class="myspan">memory</span>,
                    <span class="myspan">creativity</span>,
                    <span class="myspan">humour</span>,
                    <span class="myspan">vocabulary</span> and
                    <span class="myspan">imagination</span>.
                </p>
            </div>

            <div class="card col home-cards" style="font-size: 175%;">
                Set Up Your Profile Today<br><a class="mya" href="{{ route('register') }}"><span class="boldspan">Click Here</span></a>
            </div>

            <div class="card col home-cards">
                <p>This checklist will provide an overarching picture of children’s
                    <span class="myspan">physical</span>,
                    <span class="myspan">cognitive</span> and
                    <span class="myspan">social-emotional</span>
                    <span class="otherspan">gifts</span> and
                    <span class="otherspan">strengths</span>.
                </p>
            </div>
        </div>
    </div>
    @endsection
