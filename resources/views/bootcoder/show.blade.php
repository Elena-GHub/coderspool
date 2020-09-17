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
                    <strong>{{$bootcoder->first_name}}'s details</strong>
                </div>
                <div class="card-body">
                    <div class="form-row">
                        <div class="col-md-4">
                            <label>First name:</label>
                        </div>
                        <div class="col-md-6">
                            <p>{{$bootcoder->first_name}}</p>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-4">
                            <label>Last name:</label>
                        </div>
                        <div class="col-md-6">
                            <p>{{$bootcoder->last_name}}</p>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-4">
                            <label>E-mail:</label>
                        </div>
                        <div class="col-md-6">
                            <p>{{$bootcoder->email}}</p>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-4">
                            <label>Coders group:</label>
                            </div>
                        <div class="col-md-6">
                            <p value="{{ $bootcoder->codersgroup_id }}">{{ $codersgroups[($bootcoder->codersgroup_id)-1]->groupname }}</p>
                        </div>
                    </div>

                    <div class="card-footer">
                    <a href="{{Route('bootcoder.index')}}" class="btn btn-dark">Back</a>
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection