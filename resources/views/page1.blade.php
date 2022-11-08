<link href="{{ asset('css/form.css') }}" rel="stylesheet" type="text/css">
<div class="container">
    <div class="brand-logo"></div>
  <div class="brand-title">Welcome to the Software World</div>
    <form method="POST" action="user/store" enctype="multipart/form-data">
    @csrf
    <div class="inputs">
    <label for="name"><b>First name:</b></label>
    <input type="text" name="name" required>
    @if ($errors->has('name'))
            <span id="name-error">{{ $errors->first('name') }}</span>
     @endif
    <label for="fname"><b>Father name:</b></label>
    <input type="text" name="fname" required>
    <span></span>
    <label for="age"><b>Age:</b></label>
    <input type="number"  name="age" required>
    @if ($errors->has('age'))
            <span id="age-error">{{ $errors->first('age') }}</span>
     @endif
    <label for="gender"><b>Gender:</b></label>
    <center><input type="radio"  name="gender" value="male" required>Male</input></center>
    <center><input type="radio"  name="gender" value="female" required>Female</input></center>
    <span></span>
    <label><b>Image:</b></label>
    <input type="file" name="imagename" class="form-control" required>
    <button type="submit">Submit</button>
    </form>
    </div>
</body>
</html>