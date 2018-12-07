@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Operatorzy</div>

                <div class="card-body">
                <p>Użytkownicy</p>

                <a href="{{ route('adduser') }}">Dodaj użytkownika</a>


                    <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">Lp</th>
                        <th scope="col">Login</th>
                        <th scope="col">Imię</th>
                        <th scope="col">Nazwisko</th>
                        <th scope="col">Typ</th>
                        <th scope="col">Edytuj</th>
                        <th scope="col">Usuń</th>
                        </tr>
                    </thead>
                    <tbody> <?php $i=0; ?>
                        @foreach ($users as $key => $user)
                            <tr>
                            <th scope="row">{{$key + 1}}, <?php $i++; echo $i; ?></th>
                            <td>{{$user->login}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->surname}}</td>
                            <!-- <td>{{$user->user_type['name']}}</td> -->
                            <!-- <?php var_dump($user->user_type->name) ?> -->
                            <td>{{$user->user_type->name}}</td>
                            <td>
                            <a class="btn btn-primary" href="{{ route('edituser', $user->id) }}">Edytuj</a>                            
                            </td>
                            <td>
                            <form action="{{ route('deleteuser', $user->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Usuń</button>
                            </form>
                            
                            </td>
                            </tr>
                        @endforeach
                    </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
