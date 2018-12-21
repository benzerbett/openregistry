@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add new person</div>

                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <div class="card-body">
                    <form method="post" action="{{ route('persons.update', $person->id) }}">
                    @method('PATCH')
                    @csrf
                        <div class=" {{ $errors->has('fname') ? 'has-error' : '' }}">
                            <label class="control-label@extends('layouts.app')

                            @section('content')
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-md-4 text-center">
                                    <a class="btn btn-secondary btn-block" style="margin-bottom: 5px;" href="{{url('persons')}}">&larr; Back to registry</a>
                                        <div class="card">
                                            <div class="card-body">
                                                <img src="https://unsplash.it/300/300" style="width: 250px; margin: 0 auto; display: block; float: none; border-radius: 5px;"/>
                                                <br/>
                                                UID: <strong>{{$person->uid}}</strong>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card">
                                            <div class="card-header">Edit {{$person->fname}}'s profile</div>

                                            @if (session('status'))
                                                <div class="alert alert-success" role="alert">
                                                    {{ session('status') }}
                                                </div>
                                            @endif

                                            <div class="card-body">
                                                    <div class="row">
                                                        <div class=" col-md-4">
                                                            <small>First Name</small>
                                                            <p class="text-bold">{{$person->fname}}</p>
                                                        </div>

                                                        <div class=" col-md-4">
                                                            <small>Surname</small>
                                                            <p class="text-bold">{{$person->sname}}</p>
                                                        </div>

                                                        <div class=" col-md-4">
                                                            <small>Last Name</small>
                                                            <p class="text-bold">{{$person->lname}}</p>
                                                        </div>
                                                    </div>
                                                    <hr/>
                                                    <div class="row">
                                                        <div class=" col-md-6">
                                                            <small>Phone</small>
                                                            <p class="text-bold">{{$person->phone}}</p>
                                                        </div>

                                                        <div class=" col-md-6">
                                                            <small>Email</small>
                                                            <p class="text-bold">{{$person->email}}</p>
                                                        </div>
                                                    </div>
                                                    <hr/>
                                                    <div class="row">
                                                        <div class=" col-md-4">
                                                            <small>National ID/Passport</small>
                                                            <p class="text-bold" >{{$person->govid}}</p>
                                                        </div>

                                                        <div class=" col-md-4">
                                                            <small>Gender</small>
                                                            <p class="text-bold" >{{$person->gender}}</p>
                                                        </div>

                                                        <div class=" col-md-4 ">
                                                            <small>Date of Birth</small>
                                                            <p class="text-bold">{{$person->dob}}</p>
                                                        </div>
                                                    </div>
                                                    <hr/>
                                                    <div class="">
                                                        <button class="btn btn-primary btn-sm">Edit</button>
                                                        <!-- Button trigger modal -->
                                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#dlPers{{$person->id}}">
                                                          Delete
                                                        </button>

                                                        <!-- Modal -->
                                                    <div class="modal fade" id="dlPers{{$person->id}}" tabindex="-1" role="dialog" aria-labelledby="dlModal{{$person->id}}" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                    <h5 class="modal-title">Delete {{$person->fname}}</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        Are you sure you want to delete <strong>{{$person->fname}} {{$person->lname}}</strong>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                            <button type="button" class="btn btn-default" data-dismiss="modal">No, Cancel</button>
                                                                            <form action="{{ url('persons', $person->id)}}" method="post">
                                                                                @csrf
                                                                                @method('DELETE')
                                                                                <button class="btn btn-danger" type="submit">Yes, Delete</button>
                                                                            </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @endsection
                            ">First Name</label>
                            <p >$person->fname}}" class="text-bold"></p>Name"/>
                        </div>

                        <div class=" {{ $errors->has('sname') ? 'has-error' : '' }}">
                            <small>Surname</label>
                            <p class="text-bold" >$person->sname}}"></p>
                        </div>

                        <div class=" {{ $errors->has('lname') ? 'has-error' : '' }}">
                            <small>Last Name</label>
                            <p class="text-bold" >$person->lname}}"></p>Name"/>
                        </div>

                        <div class=" {{ $errors->has('phone') ? 'has-error' : '' }}">
                            <small>Phone</label>
                            <p class="text-bold" >$person->phone}}"></p>
                        </div>

                        <div class=" {{ $errors->has('email') ? 'has-error' : '' }}">
                            <small>Email</label>
                            <p >$person->email}}" class="text-bold"></p>
                        </div>

                        <div class=" {{ $errors->has('govid') ? 'has-error' : '' }}">
                            <small>National ID/Passport</label>
                            <p class="text-bold"  >$person->govid}}"></p>
                        </div>

                        <div class=" {{ $errors->has('gender') ? 'has-error' : '' }}">
                            <small>Gender</label>
                            <p class="text-bold"  >$person->govid}}"></p>
                        </div>

                        <div class=" {{ $errors->has('dob') ? 'has-error' : '' }}">
                            <small>Date of Birth</label>
                            <p class="text-bold"  >$person->dob}}"></p>
                        </div>

                    <p class="text-bold">$person->uid}}" </p>

                        <div class="">
                            <a href="persons/{{$person->id}}/edit" class="btn btn-primary">Edit</a>
                            <a href="persons/{{$person->id}}/edit" class="btn btn-primary">Delete</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
