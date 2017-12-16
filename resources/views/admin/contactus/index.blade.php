@extends('layouts.admin')

@section('content')

    <div id="page-wrapper">

        <div class="container-fluid">



            <h1>Sporočila</h1>

            <table class="table">
                <thead>
                <tr>
                    <th>Ime</th>
                    <th>Email</th>
                    <th>Telefonska številka</th>
                    <th>Sporočilo</th>
                    <th>Poslano</th>

                </tr>
                </thead>
                <tbody>

                @if($contacts)

                    @foreach($contacts as $contact)

                        <tr>
                            <td>{{$contact->name}}</td>
                            <td>{{$contact->email}}</td>
                            <td>{{$contact->phone}}</td>
                            <td>{{$contact->bodyMessage}}</td>
                            <td>{{$contact->created_at->format('d:m:Y h:m')}}</td>

                        </tr>

                    @endforeach

                @endif

                </tbody>
            </table>

        </div>
    </div>


@endsection