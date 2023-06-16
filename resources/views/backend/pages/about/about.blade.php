
@extends('backend.master')
@section('content')
<div class="row">
  <div class="col-xl-9 mx-auto">
    <h6 class="mb-0 text-uppercase">Control About Section</h6>
    <hr>
    <div class="card">
      <div class="card-body">
        <form action="{{route('aboutUpdate')}}" method="POST" enctype="multipart/form-data">
          @csrf
        <div class="border p-3 rounded">
          <div class="mb-3">
            <label class="form-label">Profile Image</label>
            <input type="file" class="form-control" name="image" id="Profileimg">
            <img id="showProfile" src="{{(!empty($about->image)) ? url($about->image):url('images/profile/no_image.jpeg') }}" style="width:100px; height: 100px;" >
          </div>
          <div class="mb-3">
            <label class="form-label">First Name</label>
            <input type="text" class="form-control" name="firstname" value="{{$about->firstname}}">
          </div>
          <div class="mb-3">
            <label class="form-label">Last Name</label>
            <input type="text" class="form-control" name="lastname" value="{{$about->lastname}}">
          </div>
          <div class="mb-3">
            <label class="form-label">email </label>
            <input type="email" class="form-control" name="email" value="{{$about->email}}">
          </div>
          <div class="mb-3">
            <label class="form-label">phone </label>
            <input type="number" class="form-control" name="phone" value="{{$about->phone}}">
          </div>
          <div class="mb-3">
            <label class="form-label">address </label>
            <input type="text" class="form-control" name="address" value="{{$about->address}}">
          </div>
          <div class="mb-3">
            <label class="form-label">Age </label>
            <input type="number" class="form-control" name="age" value="{{$about->age}}">
          </div>
          <div class="mb-3">
            <label class="form-label">Nationality</label>
            <input type="text" class="form-control" name="nationality" value="{{$about->nationality}}">
          </div>
          <div class="mb-3">
            <label class="form-label">Whatsapp</label>
            <input type="text" class="form-control" name="whatsapp" value="{{$about->whatsapp}}">
          </div>
          <div class="mb-3">
            <label class="form-label">Languages</label>
            <input type="text" class="form-control" name="languages" value="{{$about->languages}}">
          </div>
          <div class="mb-3">
            <label class="form-label">Work Year</label>
            <input type="text" class="form-control" name="work_year" value="{{$about->work_year}}">
          </div>
          <div class="mb-3">
            <label class="form-label">Freelance</label>
            <input type="text" class="form-control" name="freelance" value="{{$about->freelance}}">
          </div>
          <div class="mb-3">
            <button type="submit" class="btn btn-primary" >Update</button>
          </div>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection()
@push('js')
<script type="text/javascript">
	$(document).ready(function(){
		$('#Profileimg').change(function(e){
			var reader = new FileReader();
			reader.onload = function(e){
				$('#showProfile').attr('src',e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});

	});
</script>
@endpush()

