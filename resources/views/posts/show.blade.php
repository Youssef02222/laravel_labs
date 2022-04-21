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
           <h5 class="card-title mr-2">Title :</h5> <p class="card-text">{{$post['title']}}</p>
        </div>
        <div class="d-flex">
            <h5 class="card-title mr-2">Description:</h5> <p class="card-text">{{$post['description']}}</p>
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
            <p class="card-text">{{$post->user->name}}</p>
        </div>
        <div class="d-flex">
            <h5 class="card-title mr-2">Email :</h5>
            <p class="card-text">{{$post->user->email}}</p>
        </div>

        <div class="d-flex">
            <h5 class="card-title mr-2">Created at :</h5> <p class="card-text">{{ $post->created_at->isoFormat('dddd Do [of] MMMM YYYY HH: mm: ss A' )}}</p>
        </div>

    </div>
</div>






@endsection
