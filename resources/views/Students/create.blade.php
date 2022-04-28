<h2>Thêm student</h2>
<form action="{{ route('store') }}" method="POST">
    @csrf
    <label for="">First Name</label>
    <input type="text" name="first_name">
    <br>
    <label for="">Last Name</label>
    <input type="text" name="last_name">
    <br>
    <label for="">Gender</label>
    <input type="radio" name="gender" value="1">Male
    <input type="radio" name="gender" value="0">Female
    <br>
    <label for="">Birthday</label>
    <input type="date" name="birthday">
    <br>
    <input type="submit" value="Create">
</form>