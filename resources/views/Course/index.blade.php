<h2>Danh sách khóa học</h2>
<a href="{{ route('courses.create')}}">Thêm</a>
<table border="1" width="100%">
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Created_at</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>

    @foreach ($courses as $course)
        <tr>
            <td>{{ $course->id }}</td>
            <td>{{ $course->name }}</td>
            <td>{{ $course->dateCreate }}</td>
            <td><a href="{{ route('courses.edit', $course) }}">Edit</a></td>
            <td>
                <form action="{{ route('courses.destroy', $course) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="delete">
                </form>    
            </td>
            {{-- <td><a href="{{ route('courses.destroy', ['id'=>$course->id]) }}">Delete</a></td> --}}
        </tr>
    @endforeach
</table>