@extends('layouts.app')

@section('content')
<div>
    <div class="container">
        <div class="card">
            <form action="{{Route('codersgroup.update',$codersgroup->id)}}" method="POST">
                @csrf
                @method('put')
                <div class="card-header">
                    <strong>Please type the new group name</strong>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>New name</label>
                        <input type="text" name="groupname" class="form-control" value="{{$codersgroup->name}}" />
                    </div>
                    <div class="card-footer">
                        <input type="submit" value="Update" class="btn btn-primary">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection