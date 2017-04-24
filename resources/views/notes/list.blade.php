@extends('layout')
@section('content')
    <h2>Notes</h2>
    <a href="{{url('notes/create')}}">Agregar nota</a>
    <ul class="list-group">
      @foreach ($notes as $note)
        <li class="list-group-item">
          @if($note->category)
            <span class="label label-info">{{ $note->category->name}}</span>
          @else
            <span class="label label-info">Otros</span>
          @endif
          {{substr($note->note,0,100)}}...
          <a href="{{url('notes/'.$note->id)}}">View note</a>
        </li>
      @endforeach
    </ul>
    {!! $notes->render() !!}
@endsection
