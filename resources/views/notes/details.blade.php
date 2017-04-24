@extends('layout')

@section('content')
  <div class="row">
    <div class="col-md-12 col-md-12">
      <br><br>
      <h2>Details Note</h2>
      <p>
        Category:
        @if($note->category)
          <span class="label label-info">{{ $note->category->name}}</span>
        @else
          <span class="label label-info">Otros</span>
        @endif
        |<a href="{{url('notes')}}"> View all note</a>
      </p>

      <hr>
      {{$note->note}}

    </div>
  </div>
@endsection
