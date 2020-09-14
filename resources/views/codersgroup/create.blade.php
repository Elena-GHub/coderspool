@extends('layouts.app')

@section('content')
<div>
    <div class="container">
        <div class="card">
            <form action="{{Route('codersgroup.store')}}" method="POST">
                @csrf
                <div class="card-header">
                    <strong>Please insert the name of the new coders group</strong><a
                        href="{{Route('codersgroup.create')}}"></a>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Group name</label>
                        <input type="text" name="groupname" class="form-control" />
                    </div>
                    <div class="card-footer">
                        <input type="submit" value="Create" class="btn btn-primary">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection