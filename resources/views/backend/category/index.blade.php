@extends('layouts.master_backend')
@section('content')

<div class="col-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Category Table</h6>
                            <a href="{{ route('c.from')}}" class="btn btn-outline-primary "> เพิ่มข้อมูล</a>
                            <div class="table-responsive ">
                                <table class="table">
                                    <thead>
                                    <tr>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Created_at</th>
                                        <th>Updated_at</th>
                                        <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($c as $cat)
                                    <tr>
                                    <td>{{ $c ->firstItem() + $loop->index }}</td>
                                    <td>{{ $cat ->name }}</td>
                                    <td>{{ $cat ->created_at}}</td>
                                    <td>{{ $cat ->updated_at }}</td>
                                    <td>
                                    <a href="{{ url('admin/category/edit/'.$cat->category_id)}}"><box-icon name='edit' ></box-icon></a>
                                    <a href="{{url('admin/category/delete/'.$cat->category_id)}}"><box-icon name='trash'></box-icon></a>
                                  </td>
                                  </tr>
                                  @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
@endsection