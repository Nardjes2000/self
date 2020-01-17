@extends('layouts.master')

@section('title')
welcome
@endsection

@section('content')
<div class="row">
 <div class="col-6">
   @if ($errors->any())
       <div class="alert alert-danger">
           <ul>
               @foreach ($errors->all() as $error)
                   <li>{{ $error }}</li>
               @endforeach
           </ul>
       </div>
   @endif
    <h1>sign in</h1>
    <form  action="{{route('signin')}}" method="Get">

      <div class="form-group">
        <label for="email">your email</label>
        <input class="form-control" type="text" name="email" id="email">
      </div>
      <div class="form-group">
        <label for="password">your password</label>
        <input class="form-control" type="text" name="password" id="password">
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
