@extends('layouts.admin_master')

@section('header', 'User Posts')

@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Posts</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="example2" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Category</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->title }}</td>
                            <td><img src="{{ url('images/'.$post->image) }}" width="150"/></td>
                            <td>{{ $post->category->name }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5">No Post Found</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
@endsection