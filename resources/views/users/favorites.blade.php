@extends('layouts.app')

@section('content')
    <div class="row">
        <aside class="col-sm-4">
            <div class="card">
            @include('users.card',['user'=>$user])
            </div>
        </aside>
        <div class="col-sm-8">
            @include('users.navtabs',['user'=>$user])
            @if(count($microposts)>0)
                @include('microposts.microposts',['microposts'=>$microposts])
            @endif
        </div>
    </div>
@endsection