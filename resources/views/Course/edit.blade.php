@extends('layout.default')
@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-sm-flex align-items-center mb-4">
                        <h4 class="card-title mb-sm-0">Cập nhật khóa học</h4>
                    </div>
                    <form action="{{ route('courses.update', $course) }}" method="post">
                        @csrf
                        @method('PUT')
                        <label for="">Name</label>
                        <input type="text" name="name" value="{{ $course->name }}" class="form-control">
                        {{-- @error('name')
                            {{ $message }}
                        @enderror --}}
                        @if ($errors->has('name'))
                            <span class="text-danger">
                                {{ $errors->first('name') }}
                            </span>
                        @endif
                        <br>
                        <input type="submit" class="btn btn-primary mt-3">
                        <a href="{{route('courses.index')}}" class="btn btn-warning ml-3 mt-3">Back</a>   
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
