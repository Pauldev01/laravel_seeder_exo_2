@extends('template.main')
@section('content')
<form method="POST" action="/update/{{$edit->id}}">
    @csrf
    <div class="form-group">
      <label for="exampleFormControlInput1">nom</label>
      <input class="form-control" name="nom" value="{{$edit->nom}}">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Email address</label>
        <input class="form-control" name="adresse" value="{{$edit->adresse}}">
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Email address</label>
        <input class="form-control" name="phone" value="{{$edit->phone}}">
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Email address</label>
        <input class="form-control" name="mail" value="{{$edit->mail}}">
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Email address</label>
        <input class="form-control" name="contactname" value="{{$edit->contactname}}">
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Email address</label>
        <input class="form-control" name="contactfirstname" value="{{$edit->contactfirstname}}">
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Email address</label>
        <input class="form-control" name="image" value="{{$edit->image}}">
      </div>
      <button class="btn btn-danger" type="submit">submit</button>

    
  </form>
@endsection