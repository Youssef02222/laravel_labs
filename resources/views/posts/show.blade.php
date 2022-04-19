@extends('layouts.app')

@section('title')Post @endsection

@section('content')


<br><br>

<div class="card">
    <div class="card-header">
        Post Info
    </div>
    <div class="card-body">
        <div class="d-flex">
        <h5 class="card-title mr-2">id : </h5>
        <p class="card-text">{{$post['id']}}</p>
        </div>


        <div class="d-flex">
           <h5 class="card-title mr-2">Title :</h5> <p class="card-text">{{$post['title']}}</p>
        </div>


    </div>
</div>

<br><br>

<div class="card">
    <div class="card-header">
        Post Creator Info
    </div>
    <div class="card-body">
        <div class="d-flex">
            <h5 class="card-title mr-2">Name :</h5>
            <p class="card-text">{{$post['post_creator']}}</p>
        </div>

    </div>
</div>






@endsection
