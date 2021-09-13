@extends('layouts.app')

@section('content')
<div class="container">
    @if(session()->has('success'))

        <div class="alert alert-success">
            {{session()->get('success')}}
        </div>
    @endif

    <div class="row justify-content-center">
        <div class="col-md-8 w-3/4">
            @each('user.user',$users,'user')
        </div>
    </div>
</div>
@endsection
