@extends('layouts.master')

@section('title')
welcome
@endsection

@section('content')
<div class="row">
  <div class="col-6">
<form class="" action="/" method="Get">
  <button type="submit" class="btn btn-outline-danger  btn-lg">Administration</button>

</form>

  </div>
  <div class="col-6">
  <form class="" action="/" method="Get">
  <button type="submit" class="btn btn-outline-danger  btn-lg">Enseignant</button>

  </form>

  </div>


</div>
@endsection
