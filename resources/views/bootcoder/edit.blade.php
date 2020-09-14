@extends('layouts.app')

<style>
    body {
        margin: 25%;
    }
.optgroup {
        color: orangered;
    }

</style>

@section('content')
<div>
    <div class="container">
        <div class="card">
            <form action="{{Route('bootcoder.update',$bootcoder->id)}}" method="POST">
                @csrf
                @method('put')
                <div class="card-header">
                    <strong>Please insert the bootcoder's new details</strong>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>First name</label>
                        <input type="text" name="first_name" class="form-control" value="{{$bootcoder->first_name}}" />
                    </div>
                    <div class="form-group">
                        <label>Last name</label>
                        <input type="text" name="last_name" class="form-control" value="{{$bootcoder->last_name}}" />
                    </div>
                    <div class="form-group">
                        <label>E-mail</label>
                        <input type="text" name="email" class="form-control" value="{{$bootcoder->email}}" />
                    </div>

                    <div class="form-group">
                        <label>Coders group</label>
                        <select name="codersgroup_id" class="form-control">
                        <optgroup label="Please select a group">
                        @foreach ($codersgroups as $codersgroup)
                            <option value="{{ $codersgroup['id'] }}">{{ $codersgroup['groupname'] }}</option>
                        @endforeach
                        </select>
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