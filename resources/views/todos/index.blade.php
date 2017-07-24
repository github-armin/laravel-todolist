@extends('layouts.main')

@section('content')

<h1>Todos List</h1>

@if(count($todos) > 0)
  @foreach($todos as $todo)
    <div class="well">
      <h4><a href="todo/{{$todo->id}}"><b>{{$todo->text}}</b></a> {{$todo->body}}<span class="label label-danger pull-right">{{$todo->due}}</span></h4>
    </div>
  @endforeach
@endif

@endsection
