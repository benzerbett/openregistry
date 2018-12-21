@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">All People</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(count($persons)> 0)
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>UID</th>
                                    <th>Full Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Gender</th>
                                    <th>Date of Birth</th>
                                    <th>Actions</th>
                                </tr>
                            <thead>
                            <tbody>
                                @foreach($persons as $person)
                                <tr>
                                    <td>{{$person->uid}}</td>
                                    <td>{{$person->sname}}, {{$person->fname}} {{$person->lname}}</td>
                                    <td>{{$person->email}}</td>
                                    <td>{{$person->phone}}</td>
                                    <td>{{$person->gender}}</td>
                                    <td>{{$person->dob}}</td>
                                    <td>
                                        <div class="dropdown open">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="actionsL" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actions</button>
                                            <div class="dropdown-menu" aria-labelledby="actionsL">
                                                <a class="dropdown-item" href="persons/{{$person->id}}">View</a>
                                                <a class="dropdown-item" href="persons/{{$person->id}}/edit">Edit</a>
                                                <button type="button" class="dropdown-item" data-toggle="modal" data-target="#dlUser{{$person->id}}Modal">Delete</button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                        @foreach($persons as $person)
                            <!-- Modal -->
                            <div class="modal fade" id="dlUser{{$person->id}}Modal" tabindex="-1" role="dialog" aria-labelledby="dlUser{{$person->id}}Title" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title">Delete {{$person->fname}}</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure you want to delete <strong>{{$person->fname}} {{$person->lname}}</strong> completely?
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
                        @endforeach
                    @else
                        <div class="alert alert-warning" role="alert">
                            No persons added yet. Add one <a class="btn btn-primary" href="{{url('persons/create')}}">now</a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
