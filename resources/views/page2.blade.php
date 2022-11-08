<link href="{{ asset('css/data.css') }}" rel="stylesheet" type="text/css">


<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<div class="container">
	
	<div class="table">
		<div class="table-header">
			<div class="header__item"><a id="image" class="filter__link" href="#">Image</a></div>
			<div class="header__item"><a id="name" class="filter__link filter__link--number" href="#">Name</a></div>
			<div class="header__item"><a id="fname" class="filter__link filter__link--number" href="#">Father Name</a></div>
			<div class="header__item"><a id="age" class="filter__link filter__link--number" href="#">Age</a></div>
			<div class="header__item"><a id="gender" class="filter__link filter__link--number" href="#">Gender</a></div>
            <div class="header__item"><a id="gender" class="filter__link filter__link--number" href="#">Edit</a></div>
		</div>
        @foreach($members as $member)
		<div class="table-content">	
			<div class="table-row">		
				<div class="table-data"><img src="{{url('public/images/'. $member['imagename'])}}" style="height: 70px; width: 70px;"></div>
				<div class="table-data">{{$member['name']}}</div>
				<div class="table-data">{{$member['fname']}}</div>
				<div class="table-data">{{$member['age']}}</div>
				<div class="table-data">{{$member['gender']}}</div>
                <div class="table-data"><a class="btn btn-info" href="{{Route('editpage',$member->id)}}">edit</a></div>
			</div>
			</div>	
            @endforeach
            
	</div>
    <script>
         @if(Session::has('success'))
toastr.success("{{ Session::get('success') }}")
@endif    
</script>
</div>


