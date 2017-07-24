@extends('layouts.main')

@section('content')

<h1>Todos List</h1>

@if(count($todos) > 0)
  @foreach($todos as $todo)
    <div class="well">
      <h4><a href="todo/{{$todo->id}}">{{$todo->text}} <span class="label label-danger">{{$todo->due}}</span></a></h4>
    </div>
  @endforeach
@endif

@endsection
