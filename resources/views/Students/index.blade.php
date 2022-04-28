<h1>Danh sách sinh viên</h1>
<a href="{{ route('create')}}">Thêm</a>
<table border="1" width="100%">
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Age</th>
        <th>Gender</th>
    </tr>
    @foreach ($students as $key => $student )
        <tr>
            <td>{{ $student->id}}</td>
            <td>{{ $student->fullName}}</td>
            <td>{{ $student->countAge}}</td>
            <td>{{ $student->genderName}}</td>
        </tr>
    @endforeach
</table>