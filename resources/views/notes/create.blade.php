@extends('layout')

@section('content')
<br><br>
<h1>create</h1>
@include('partials/errors')
<form class="" action="{{url('/notes')}}" method="post" class="form">
  {!!csrf_field()!!}
  <textarea name="note" rows="8" cols="80" class="form-control">{{old('note')}}</textarea>
  <button type="submit" name="button" class="btn btn-primary">Crear nota</button>
</form>
@endsection
