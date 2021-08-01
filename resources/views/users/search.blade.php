@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           <h3 class="page-title text-center">User found: {{ $user->name }}</h3>
            <b>Email</b>: {{ $user->email }}
            <br>
            <b>Registered on</b>: {{ $user->created_at }}
        </div>
    </div>
</div>
@endsection