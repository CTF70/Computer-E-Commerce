@extends('layout')

@section('content')

<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <div class="flex justify-center pt-8">
         <h1 style="font-weight: bold">Computers</h1>
    </div><br>
    <div class="mt-5 overflow-hidden shadow sm:rounded-lg flex justify-center ">
         <p>{{$computer['name']}} ( {{$computer['origin']}} ) - <strong>{{$computer['price']}}$</strong></p>
    </div><br>
    <a class="edit-btn" href="{{route('computers.edit',$computer->id)}}">edit</a>
    <form action="{{route('computers.destroy',$computer->id)}}" method="POST">
         @csrf
         @method('DELETE')
         <input class="delete-btn" type="submit" value="delete">
    </form>
</div>
@endsection
@section('title','Show Computer')
