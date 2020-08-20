@extends('layouts.dashboard')

@section('main')
<div class="container">
    @if (session('status'))
    <div class="alert alert-success alert-dismissable fade show" role="alert">
        {{ session('status') }}
        <button class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @elseif(session('update'))
    <div class="alert alert-success alert-dismissable fade show" role="alert">
        {{ session('update') }}
        <button class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @elseif(session('delete'))
    <div class="alert alert-warning alert-dismissable fade show" role="alert">
        {{ session('delete') }}
        <button class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
</div>
<div class="container">
    <a href="{{route('dashboard.create')}}" class="btn btn-primary mb-2 ml-2">Create article</a>

    @foreach($articles as $article)
    <div class="text-primary border my-2 p-2">
        <div class="row mx-2 d-flex justify-content-between">
            <p>{{$article->id}}</p>
            <p>{{$article->title}}</p>
            <p>{{$article->author}}</p>
            <p>{{$article->tag}}</p>
            <p>{{$article->created_at}}</p>
        </div>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" id="dashMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Post menu</button>
            <div class="dropdown-menu" aria-labelledby="dashMenuButton">
                <a href="{{route('dashboard.show', $article->id)}}" class="dropdown-item">Show Article</a>
                <a href="{{route('dashboard.edit', $article->id)}}" class="dropdown-item">Edit</a>
                <button type="button" class="dropdown-item" data-toggle="modal" data-target="#delete-modal">Delete</button>


            </div>

        </div>

    </div>
    <!-- Modal -->
    <div class="modal fade" id="delete-modal" tabindex="-1" aria-labelledby="delete-modal" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Are you sure?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body d-flex">
                    <form action="{{route('dashboard.destroy', $article->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Yes</button>
                    </form>
                    <button type="button" class="btn btn-secondary ml-2" data-dismiss="modal">No</button>
                </div>
            </div>
        </div>
    </div>
    @endforeach

</div>

@endsection