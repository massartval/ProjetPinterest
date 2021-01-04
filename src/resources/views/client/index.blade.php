@extends('layout.app')

@section('title', 'clients')

@section('h1Title', 'Gestionnaire clients - factures')
@section('content')

    <h2>Mes clients</h2>
    <p>Dans cette section, vous pouvez voir la liste de vos clients</p>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Société</th>
                <th>Téléphone</th>
                <th>Email</th>
                <th>Adresse</th>
                <th>TVA</th>
                <th>Factures</th>
                <th>Opérations</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($clients as $client)
            <tr>
                <td>{{$client->id}}</td>
                <td>{{$client->company}}</td>
                <td>{{$client->phone}}</td>
                <td>{{$client->email}}</td>
                <td>{{$client->address}}</td>
                <td>{{$client->tva}}</td>
                <td>{{$client->facture}}</td>
                <td><a href="/client/edit/{{$client->id}}">Modifier</a></td>
                <td>
                    <form action="/client/delete/{{$client->id}}" method="post">
                        <input class="btn" type="submit" value="Delete" />
                        @method('delete')
                        @csrf
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
