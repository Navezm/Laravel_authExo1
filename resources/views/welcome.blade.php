@extends('layouts.app')

@section('content')
    <div class="container my-5">
        @if (Auth::check())
        <h1 class="text-center my-5">Log in Person</h1>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Check</th>
                    <th scope="col">Pseudo</th>
                    <th scope="col">Name</th>
                    <th scope="col">Surname</th>
                    <th scope="col">Age</th>
                    <th scope="col">Email</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{Auth::id()}}</td>
                        <td>{{Auth::check() ? 'Il y a un user' : ''}}</td>
                        <td>{{$users->pseudo}}</td>
                        <td>{{$users->profils->name}}</td>
                        <td>{{$users->profils->surname}}</td>
                        <td>{{$users->profils->age}}</td>
                        <td>{{$users->email}}</td>
                    </tr>
                </tbody>
            </table>
        @else
            <h1 class="text-center my-5">Register to see your informations</h1>
        @endif
        <h1 class="text-center my-5">All members</h1>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Pseudo</th>
                <th scope="col">Name</th>
                <th scope="col">Surname</th>
                <th scope="col">Age</th>
                <th scope="col">Email</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($usersAll as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->pseudo}}</td>
                        <td>{{$item->profils->name}}</td>
                        <td>{{$item->profils->surname}}</td>
                        <td>{{$item->profils->age}}</td>
                        <td>{{$item->email}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
