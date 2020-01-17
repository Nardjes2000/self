@extends('layouts.master')

@section('title')
welcome
@endsection

@section('content')

 @include('includes.message-block')
<div class="row">
<div class="col-6">





  <h1>sign up</h1>
  <form  action="{{route('signup')}}" method="Get">
    <div class="form-group ">
      <label for="name">your first name</label>
      <input class="form-control" type="text" name="name" id="name" value="{{ Request::old('name')}}">
      </div>
    <div class="form-group ">
      <label for="email">your email</label>
      <input class="form-control" type="text" name="email" id="email"value="{{ Request::old('email')}}">
    </div>
    <div class="form-group">
      <label for="password">your password</label>
      <input class="form-control" type="text" name="password" id="password"value="{{ Request::old('password')}} ">
    </div>
    <div class="form-group">
      <label for="type">type user</label>
      <input class="form-control" type="text" name="type" id="type"value="{{ Request::old('password')}} ">
    </div>
    <button type="submit" class="btn btn-danger">submit</button>

  </form>

</div>
</div>
@endsection
