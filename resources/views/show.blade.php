@extends('template.main')
@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">#id</th>
        <th scope="col">Nom</th>
        <th scope="col">Adresse</th>
        <th scope="col">Mail</th>
        <th scope="col">Contact</th>
        <th scope="col">Contactfirstname</th>
        <th scope="col">image</th>
      </tr>
    </thead>
    <tbody>
            <tr>
                <th scope="row">{{$show->id}}</th>
                <td>{{$show->nom}}</td>
                <td>{{$show->adresse}}</td>
                <td>{{$show->mail}}</td>
                <td>{{$show->contactname}}</td>
                <td>{{$show->contactfirstname}}</td>
                <td><img src="{{$show->image}}" alt=""></td>
            </tr>
    </tbody>
  </table>
@endsection