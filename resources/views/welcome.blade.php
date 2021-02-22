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
        <th scope="col">show</th>
        <th scope="col">edit</th> 
      </tr>
    </thead>
    <tbody>
        @foreach ($compagnie as $item)
            <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->nom}}</td>
                <td>{{$item->adresse}}</td>
                <td>{{$item->mail}}</td>
                <td>{{$item->contactname}}</td>
                <td>{{$item->contactfirstname}}</td>
                <td><img src="{{$item->image}}" alt=""></td>
                <td><a class="btn btn-info" href="/show/{{$item->id}}">show</a></td>
                <td><a class="btn btn-success" href="/edit/{{$item->id}}">edit</a></td> 
            </tr>
        @endforeach
     
    </tbody>
  </table>
@endsection