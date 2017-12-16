@extends('layouts.app')
@section('content')


<div  class="container">



    <div  class="bg-faded p-4 my-4">
        <hr class="divider">
        <h2 class="text-center text-lg text-uppercase my-0"><strong>Lepo pozdravljeni na naši spletni strani.</strong>

        </h2>
        <hr class="divider">
        {{--<img class="img-fluid float-left mr-4 d-none d-lg-block" src="images/crke.jpg" alt="">--}}
        <p>Zasebno varstvo otrok 7 palčkov že več kot 15 let v svoje prostore sprejema male nadebudneže in male navihanke.</p>
        <p>V upanju, da bomo v našo sredino morda sprejeli tudi vašega malčka oz.malčico, vas vabimo, da si ogledate našo spletno stran,
         kjer boste zagotovo našli vse informacijo v zvezi z varstvom pri nas.</p>
        <p>Lepo vas pozdravlja kolektiv 7 palčkov</p>
    </div>

<div class="eupopup eupopup-bottomright"></div>
</div>
<!-- /.container -->

@endsection

@section('scripts')
    <script src="js/jquery-2.1.3.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/jquery-eu-cookie-law-popup.css"/>
    <script src="js/jquery-eu-cookie-law-popup.js"></script>
@endsection


