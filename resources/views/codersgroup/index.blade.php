@extends('layouts.app')

<style>
    body {
        margin: 25%;
    }
    .my-container {
        border: 2em;
    }
    .my-rowheader {
        margin-bottom: 1em;
        background-color: gray;
        color: whitesmoke;
        font-weight: bold;
    }
    .my-row {
        padding: .3%;
        align-items: center;
        justify-content: center;
 
    }
    .my-row:nth-child(even){
        background: lightgray;
    }
</style>

@section('content')
<div>
    <div class="container my-container">
        <div class="card-header">
            <h2>Coders groups <a href="{{Route('codersgroup.create')}}" class="btn btn-primary">Add a group</a>
            <a href="{{Route('bootcoder.index')}}" class="btn btn-secondary">Bootcoders manager</a>
            </h2>
            <div class="row my-rowheader">
                <div class="col-2">Group name</div>
                <div class="col-8">Group members</div>
                <div class="col-2">Action</div>
            </div>   
                @foreach($codersgroups as $codersgroup)
                <div class="row my-row">
                <div class="col-2">
                    {{$codersgroup->groupname}}
                </div>
                <div class="col-8">
                    
                    @foreach ($codersgroup->bootcoders as $bootcoder)
                    {{ $bootcoder->name }}
                @endforeach
                </div>
                <div class="col-1">
                    <form action="{{route('codersgroup.update',$codersgroup->id)}}" method="POST">
                        @csrf
                        @method('update')
                        <a href="{{Route('codersgroup.edit',$codersgroup->id)}}" class="btn btn-xs btn-secondary">Edit</a>
                    </form>
                </div>
                <div class="col-1">
                    <form action="{{route('codersgroup.destroy',$codersgroup->id)}}" method="POST">
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