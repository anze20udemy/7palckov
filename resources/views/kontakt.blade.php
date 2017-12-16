
@extends('layouts.app')
@section('styles')


@endsection
@section('content')
    <div class="container">

        <div class="bg-faded p-4 my-4">
            <hr class="divider">
            <h2 class="text-center text-lg text-uppercase my-0">
                <strong>Kje nas najdete</strong>
            </h2>
            <hr class="divider">
            <div class="row">
                <div class="col-lg-8">
                    <div class="embed-responsive embed-responsive-16by9 map-container mb-4 mb-lg-0">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2765.182137006982!2d14.474144216154007!3d46.12720167911426!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477acc9a365a134f%3A0xf0ffb727c0009e37!2s7+Pal%C4%8Dkov%2C+varstvo+otrok+na+domu%2C+Sonja+Levani%C4%87+s.p.!5e0!3m2!1ssl!2ssi!4v1512238352102" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-lg-4">
                    <h3>Kontaktni podatki:</h3>
                    <h5 class="mb-0">Telefonska številka:</h5>
                    <div class="mb-4">051 624 961</div>
                    <h5 class="mb-0">Elektronski naslov:</h5>
                    <div class="mb-4">
                        <a href="mailto:sonja@7palckov.si">sonja@7palckov.si</a>
                    </div>
                    <h5 class="mb-0">Naslov:</h5>
                    <div class="mb-4">
                        Spodnje Gameljne 29b
                        <br>
                        1211 Ljubljana - Šmartno
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-faded p-4 my-4">
            <hr class="divider">
            <h2 class="text-center text-lg text-uppercase my-0">Prijavni
                <strong>obrazec</strong>
            </h2>
            <hr class="divider">
            <form action="{{url('/kontakt')}}" method="POST">
                {{ csrf_field() }}
                <div class="row">
                    <div class="form-group col-lg-4">
                        <label name="name" class="text-heading">Ime in priimek</label>
                        <input id="name" name="name" type="text" class="form-control">
                    </div>
                    <div class="form-group col-lg-4">
                        <label name="email" class="text-heading">Elektronski naslov</label>
                        <input id="email" name="email" type="email" class="form-control">
                    </div>

                    <div class="form-group col-lg-4">
                        <label name="phone" class="text-heading">Telefon (neobvezno)</label>
                        <input id="phone" name="phone" type="text" class="form-control">
                    </div>

                    <div class="clearfix"></div>
                    <div class="form-group col-lg-12">
                        <label name="message" class="text-heading">Sporočilo</label>
                        <textarea id="message" name="message" class="form-control" rows="6"></textarea>
                    </div>
                    <div class="form-group col-lg-12">
                        <button type="submit" class="btn btn-secondary">Pošlji</button>
                    </div>
                </div>
            </form>
        </div>

    </div>
@endsection

@section('scripts')

@endsection