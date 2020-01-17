@extends('layouts.master')

@section('title')
welcome
@endsection

@section('content')
<div class="row">
  <div class="col-6">
<form class="" action="/in" method="Get">
  <button type="submit" class="btn btn-outline-danger  btn-lg">sign in</button>

</form>

  </div>

  <div class="col-6">
    <form class="" action="/up" method="Get">
      <button type="submit" class="btn btn-danger btn-lg">sign up</button>
    </form>
  </div>

</div>
@endsection
