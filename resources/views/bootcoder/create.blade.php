@extends('layouts.app')

<style>
    body {
        margin: 25%;
    }

</style>

@section('content')
<div>
    <div class="container">
        <div class="card">
            <form action="{{Route('bootcoder.store')}}" method="POST">
                @csrf
                <div class="card-header">
                    <strong>Please insert the details of the new bootcoder</strong><a
                        href="{{Route('bootcoder.create')}}"></a>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>First name</label>
                        <input type="text" name="first_name" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Last name</label>
                        <input type="text" name="last_name" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>E-mail</label>
                        <input type="text" name="email" class="form-control" />
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
                        <input type="submit" value="Create" class="btn btn-primary">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection