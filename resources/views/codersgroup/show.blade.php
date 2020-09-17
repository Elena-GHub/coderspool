@extends('layouts.app')

<style>
    body {
        margin: 25%;
    }
.optgroup {
        color: orangered;
    }
    label {
        font-weight: bold;
    }
</style>

@section('content')
<div>
    <div class="container">
        <div class="card col-6">
                <div class="card-header">
                    <strong>{{$codersgroup->groupname}}'s details</strong>
                </div>
                <div class="card-body">
                    <div class="form-row card-body">
                        <div class="col-md-4">
                            <label>Group name:</label>
                        </div>
                        <div class="col-md-6">
                            <p>{{$codersgroup->groupname}}</p>
                        </div>
                    </div>
                    <div class="form-row card-body">
                        <div class="col-md-4">
                            <label>Members:</label>
                        </div>
                        <div class="col-md-6">
                        @foreach ($codersgroup->bootcoders as $bootcoder)
                            <p>{{ $bootcoder->first_name }} {{ $bootcoder->last_name }}</p>
                        @endforeach
                        </div>
                    </div>

                    <div class="card-footer">
                    <a href="{{Route('codersgroup.index')}}" class="btn btn-dark">Back</a>
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection