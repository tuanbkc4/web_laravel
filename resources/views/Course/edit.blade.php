<form action="{{ route('courses.update', $course) }}" method="post">
    @csrf
    @method('PUT')
    <label for="">Name</label>
    <input type="text" name="name" value="{{ $course->name }}">
    <br>
    <input type="submit">

</form>