@extends('layout.app')

@section('title', 'clients')

@section('h1Title', 'Gestionnaire clients - factures')
@section('content')
    <h2>Mes factures</h2>
    <p>Dans cette section, vous pouvez voir la liste de vos factures clients</p>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Réf</th>
                <th>Titre</th>
                <th>Price</th>
                <th>TVA</th>
                <th>TOTAL</th>
                <th>Client</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
        </thead>
        <tbody>
            @foreach($factures as $facture)
            <tr>
                <td>{{$facture->id}}</td>
                <td>{{$facture->ref}}</td>
                <td>{{$facture->title}}</td>
                <td>{{$facture->price}}</td>
                <td>{{$facture->tva}}</td>
                <td>{{$facture->total}}</td>
                <td>{{$facture->client}}</td>
                <td><a href="/facture/edit/{{$facture->id}}">Modifier</a></td>
                <td>
                    <form action="/facture/delete/{{$facture->id}}" method="post">
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