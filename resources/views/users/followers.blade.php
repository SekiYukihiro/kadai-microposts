@extends('layouts.app')

@section('content')
    <div class="row">
        <aside class="col-sm-4">
            <div class="card">
            @include('users.card',['user'=>$user])
            </div>
            @include('user_follow.follow_button',['user'=>$user])
        </aside>
        <div class="col-sm-8">
            @include('users.navtabs',['user'=>$user])
            @include('users.users',['users'=>$users])
        </div>
    </div>
@endsection