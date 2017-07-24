@extends('layouts.main')

@section('content')

@if(count($todos) > 0)
  @foreach($todos as $todo)
    <div class="well">
      <h4><a href="todo/{{$todo->id}}/edit"><b>{{$todo->text}}</b></a> {{$todo->body}}<span class="label label-danger pull-right">{{$todo->due}}</span></h4>
    </div>
  @endforeach
@endif

@endsection
