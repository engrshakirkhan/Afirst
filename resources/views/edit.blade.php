<form method="POST"  enctype="multipart/form-data">
    @csrf
    <div class="inputs">
    <label for="name"><b>First name:</b></label>
    <input type="text" name="name" value="{{$post->name}}" required>
    <label for="fname"><b>Father name:</b></label>
    <input type="text" name="fname" required>
    <label for="age"><b>Age:</b></label>
    <input type="number"  name="age" required>
    <label for="gender"><b>Gender:</b></label>
    <center><input type="radio"  name="gender" value="male" required>Male</input></center>
    <center><input type="radio"  name="gender" value="female" required>Female</input></center>
    <label><b>Image:</b></label>
    <input type="file" name="imagename" class="form-control" required>
    <button type="submit">update</button>
    </form>