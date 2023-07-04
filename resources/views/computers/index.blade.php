@extends('layout')
@section('content')
@section('title','Computers')

<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <div class="flex justify-center pt-8">
        <h1 style="font-weight: bold">Computers</h1>
    </div>
    <div>
         @if (count($computers)>0)
         <ul>
         @foreach ($computers as $computer )
         <a href="{{route('computers.show',['computer'=> $computer['id']])}}">
            <li>
                 <p>{{$computer['name']}} ( {{$computer['origin']}} ) - <strong>{{$computer['price']}}$</strong></p>
            </li>
         </a>
         @endforeach
         </ul>
         @else
         <p>There are no computers to display</p>
         @endif
    </div>
</div>

@endsection
