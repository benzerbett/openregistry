@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit {{$person->fname}}'s profile</div>

                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <div class="card-body">
                    <form method="post" action="{{ route('persons.update', $person->id) }}">
                    @method('PATCH')
                    @csrf
                        <div class="row">
                            <div class="form-group col-md-4 {{ $errors->has('fname') ? 'has-error' : '' }}">
                                <label class="control-label">First Name</label>
                            <input type="text" name="fname" required value="{{$person->fname}}" class="form-control" placeholder="First Name"/>
                                <span class="text-danger">{{ $errors->first('fname') }}</span>
                            </div>

                            <div class="form-group col-md-4 {{ $errors->has('sname') ? 'has-error' : '' }}">
                                <label class="control-label">Surname</label>
                                <input type="text" name="sname" class="form-control" value="{{$person->sname}}" placeholder="Surname"/>
                                <span class="text-danger">{{ $errors->first('sname') }}</span>
                            </div>

                            <div class="form-group col-md-4 {{ $errors->has('lname') ? 'has-error' : '' }}">
                                <label class="control-label">Last Name</label>
                                <input type="text" name="lname" required  class="form-control" value="{{$person->lname}}" placeholder="Last Name"/>
                                <span class="text-danger">{{ $errors->first('lname') }}</span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6 {{ $errors->has('phone') ? 'has-error' : '' }}">
                                <label class="control-label">Phone</label>
                                <input type="text" name="phone" class="form-control" value="{{$person->phone}}" placeholder="Phone"/>
                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                            </div>

                            <div class="form-group col-md-6 {{ $errors->has('email') ? 'has-error' : '' }}">
                                <label class="control-label">Email</label>
                                <input type="text" name="email" id="email" required  value="{{$person->email}}" class="form-control" placeholder="Enter Email"/>
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-4 {{ $errors->has('govid') ? 'has-error' : '' }}">
                                <label class="control-label">National ID/Passport</label>
                                <input type="text" name="govid" class="form-control"  value="{{$person->govid}}" placeholder="National ID/Passport"/>
                                <span class="text-danger">{{ $errors->first('govid') }}</span>
                            </div>

                            <div class="form-group col-md-4 {{ $errors->has('gender') ? 'has-error' : '' }}">
                                <label class="control-label">Gender</label>
                                <select name="gender" class="form-control">
                                    <option value="M">Male</option>
                                    <option value="F">Female</option>
                                </select>
                                <span class="text-danger">{{ $errors->first('gender') }}</span>
                            </div>

                            <div class="form-group col-md-4 {{ $errors->has('dob') ? 'has-error' : '' }}">
                                <label class="control-label">Date of Birth</label>
                                <input type="date" name="dob" class="form-control"  value="{{$person->dob}}" placeholder="Date of Birth"/>
                                <span class="text-danger">{{ $errors->first('dob') }}</span>
                            </div>
                        </div>

                    <input type="hidden" required value="{{$person->uid}}" name="uid"/>

                        <div class="form-group">
                            <button class="btn btn-primary">Update</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
