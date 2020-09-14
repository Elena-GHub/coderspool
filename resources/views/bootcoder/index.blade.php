@extends('layouts.app')

<style>
    body {
        margin: 25%;
    }
    .my-container {
        border: 2em;
        flex-direction: column;
        justify-content: center;
    }
    .my-rowheader {
        margin-bottom: 1em;
        background-color: gray;
        color: whitesmoke;
        font-weight: bold;
    }
    .my-row {
        padding: .3%;
    }
    .my-row:nth-child(even){
        background: lightgray;
    }
    
</style>

@section('content')
<div>
    <div class="container my-container">
        <div class="card-header">
            <h2>Best coders in the Universe <a href="{{Route('bootcoder.create')}}" class="btn btn-primary">Add a coder</a>
                <a href="{{Route('codersgroup.index')}}" class="btn btn-secondary">Group manager</a>
            </h2>
            <div class="row my-rowheader">
                <div class="col-4">Full name</div>
                <div class="col-2">Current group</div>
                <div class="col-4">E-mail</div>
                <div class="col-2">Action</div>
            </div>   
                @foreach($bootcoders as $bootcoder)
                <div class="row my-row">
                <div class="col-4">
                    {{$bootcoder->first_name}} {{$bootcoder->last_name}} 
                </div>
                <div class="col-2">
                    {{$bootcoder->codersgroup_id}}
                </div>
                <div class="col-4">
                    {{$bootcoder->email}}
                </div>
                <div class="col-1">
                    <form action="{{route('bootcoder.update',$bootcoder->id)}}" method="POST">
                        @csrf
                        @method('update')
                        <a href="{{Route('bootcoder.edit',$bootcoder->id)}}" class="btn btn-xs btn-secondary">Edit</a>
                    </form>
                </div>
                <div class="col-1">
                    <form action="{{route('bootcoder.destroy',$bootcoder->id)}}" method="POST">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete" class="btn btn-xs btn-danger">
                    </form>
                </div>
            </div>
                @endforeach
            
        </div>
    </div>
</div>
@endsection