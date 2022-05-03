@extends('layout.default')
@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-sm-flex align-items-center mb-4">
                        <h4 class="card-title mb-sm-0">Danh sách khóa học</h4>

                    </div>
                    <div class="container-fluid">
                        <div class="row align-items-center justify-content-between">
                            <a class="btn btn-success btn-custom" href="{{ route('courses.create') }}">Thêm</a>
                            <form class="col-6 form-group d-flex align-items-center m-0 p-0 ">
                                <label for="" class="mr-3">Search:</label>
                                <input type="search" name="q" class="form-control">
                            </form>
                        </div>
                    </div>
                    <div class="table-responsive border rounded p-1 mt-3">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="font-weight-bold">#</th>
                                    <th class="font-weight-bold">Name</th>
                                    <th class="font-weight-bold">Created_at</th>
                                    <th width="100px" class="font-weight-bold">Delete</th>
                                    <th width="100px" class="font-weight-bold">Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($courses as $course)
                                    <tr>
                                        <td>{{ $course->id }}</td>
                                        <td>{{ $course->name }}</td>
                                        <td>{{ $course->dateCreate }}</td>
                                        <td><a class="btn btn-info btn-custom"
                                                href="{{ route('courses.edit', $course) }}">Edit</a></td>
                                        <td>
                                            <form action="{{ route('courses.destroy', $course) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <input type="submit" class="btn btn-danger btn-custom" value="delete">
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex mt-4 flex-wrap">
                        <nav class="ml-auto">
                            <ul class="pagination separated pagination-info">
                                {{ $courses->links() }}
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
