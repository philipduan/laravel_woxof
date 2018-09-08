@extends('layouts.app')
@php
    $user = Auth::user();
@endphp
@section('content')
<div class="user-profile">
    
        <div class="name">
                <label>Name</label>
                <p>{{$user->name}}</p>
        </div>

        <div class="surname">
                <label>Surname</label>
                <p>{{$user->surname}}</p>
        </div>

        <div class="email">
                <label>Email</label>
                <p>{{$user->email}}</p>
        </div>
</div>
@endsection
