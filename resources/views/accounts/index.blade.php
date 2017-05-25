@extends('layouts.app')

@section('content')
<div class="container">
    @foreach ($accounts as $user)
        {{ $user->firstname }}
        {{ $user->lastname }}
        {{ $user->birthday}}
        {{ $user->Gender}}
        {{ $user->email}}
        {{ $user->phone}}
        {{ $user->address}}
    @endforeach
</div>
@endsection
