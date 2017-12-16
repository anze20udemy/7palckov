@extends('layouts.admin')

@section('content')

    <div id="page-wrapper">

        <div class="container-fluid">

    @if(Session::has('deleted_user'))


        <p class="bg-danger">{{session('deleted_user')}}</p> {{--to je shranjeno pod AdminUsersControl - Destroy--}}

    @endif

    <h1>Uporabniki</h1>

    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Slika</th>
            <th>Ime</th>
            <th>Email</th>
            <th>Tip</th>
            <th>Ustvarjen</th>
            <th>Posodobljen</th>
        </tr>
        </thead>
        <tbody>

        @if($users)

            @foreach($users as $user)

                <tr>
                    <td>{{$user->id}}</td>
                    <td><img height="62" src="{{$user->photo ? $user->photo->file : 'https://placeimg.com/62/62/people'}}" alt=""></td> {{--skrajšan if statement--}}
                    <td><a href="{{route('admin.users.edit', $user->id)}}">{{$user->name}}</a></td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->role->name}}</td>
                    <td>{{$user->created_at->diffForHumans()}}</td>
                    <td>{{$user->updated_at->diffForHumans()}}</td>
                </tr>

            @endforeach

        @endif

        </tbody>
    </table>

            </div>
        </div>


@endsection