@extends('layouts.app')

@section('title')Create @endsection

@section('content')
    <form method="POST" action="{{ route('posts.store') }}">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="">
            @if ($errors->has('title'))
                <div class="alert alert-danger">
                      <strong>{{ $errors->first('title') }}.</strong>
                </div>

            @endif
        </div >

        <div class="mb-3" >
        <label for="exampleFormControlInput1" class="form-label">Slug</label>
        <input type="text" name="slug"  class="form-control" id="slug" placeholder="">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
            <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            @if ($errors->has('description'))
                     <div class="alert alert-danger">
                             <strong>{{ $errors->first('description') }}.</strong>
                     </div>
            @endif
        </div>

{{--        @if ($errors->any())--}}
{{--            <div class="alert alert-danger">--}}
{{--                <ul>--}}
{{--                    @foreach ($errors->all() as $error)--}}
{{--                        <li>{{ $error }}</li>--}}
{{--                    @endforeach--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        @endif--}}

        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Post Creator</label>
            <select class="form-control" name="user">
                @foreach($users as $user)
                <option value="{{$user['id']}}">{{$user['name']}}</option>
                @endforeach

            </select>
        </div>

        <button class="btn btn-success">Create</button>
    </form>

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('#title').change(function (e){
            $.get('{{ route('posts.checkSlug') }}',
                { 'title':$(this).val() },
                function (data){
                $('#slug').val(data.slug);
                }
            );
        });
    </script>
@endsection

