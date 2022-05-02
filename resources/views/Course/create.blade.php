<form action="{{ route('courses.store')}}" method="post">
    @csrf
    <label for="">Name</label>
    <input type="text" name="name">
    <br>
    <input type="submit">

</form>