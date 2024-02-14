@extends('layouts.master_backend')
@section('content')

<div class="col-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">User Table</h6>
                            <div class="table-responsive ">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Username</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($u as $user)
                                    <tr>
                                    <td>{{ $user->id}}</td>
                                    <td>{{ $user->username }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->phone }}</td>
                                    </tr>
                                  @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
@endsection