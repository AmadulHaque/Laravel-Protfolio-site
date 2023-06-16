
@extends('backend.master')
@section('content')
<div class="row">
  <div class="col-xl-9 mx-auto">
    <h6 class="mb-0 text-uppercase">Control Hero Section</h6>
    <hr>
    <div class="card">
      <div class="card-body">
        <form action="{{route('updateHeroSec')}}" method="POST" enctype="multipart/form-data">
          @csrf
        <div class="border p-3 rounded">
          <div class="mb-3">
            <label class="form-label">Profile Image</label>
            <input type="file" class="form-control" name="image" id="Profileimg">
            <img id="showProfile" src="{{(!empty($hero->image)) ? url('images/profile/'.$hero->image):url('images/profile/no_image.jpeg') }}" style="width:100px; height: 100px;" >
          </div>
          <div class="mb-3">
            <label class="form-label">Frontend  Icon</label>
            <input type="file" class="form-control" name="frontimage" id="frontimageImg">
            <img id="showfrontimage" src="{{(!empty($hero->frontimage)) ? url('images/profile/'.$hero->frontimage):url('images/profile/no_image.jpeg') }}" style="width:100px; height: 100px;" >
          </div>
          <div class="mb-3">
            <label class="form-label">Backend  Icon</label>
            <input type="file" class="form-control" name="backimage" id="backimageImg">
            <img id="showbackimage" src="{{(!empty($hero->backimage)) ? url('images/profile/'.$hero->backimage):url('images/profile/no_image.jpeg') }}" style="width:100px; height: 100px;" >
          </div>
          <div class="mb-3">
            <label class="form-label">Head Title</label>
            <input type="text" class="form-control" name="head" value="{{$hero->head}}">
          </div>
          <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" name="name" value="{{$hero->name}}">
          </div>
          <div class="mb-3">
            <label class="form-label">Designation </label>
            <input type="text" class="form-control" name="designation" value="{{$hero->designation}}">
          </div>
          <div class="mb-3">
            <label class="form-label">Title </label>
            <input type="text" class="form-control" name="title" value="{{$hero->title}}">
          </div>
          <div class="mb-3">
            <label class="form-label">Project </label>
            <input type="text" class="form-control" name="project" value="{{$hero->project}}">
          </div>
          <div class="mb-3">
            <label class="form-label">Github</label>
            <input type="text" class="form-control" name="github" value="{{$hero->github}}">
          </div>
          <div class="mb-3">
            <label class="form-label">Facebook</label>
            <input type="text" class="form-control" name="fb" value="{{$hero->fb}}">
          </div>
          <div class="mb-3">
            <label class="form-label">Linkdin</label>
            <input type="text" class="form-control" name="linkdin" value="{{$hero->linkdin}}">
          </div>
          <div class="mb-3">
            <label class="form-label">Youtube</label>
            <input type="text" class="form-control" name="youtube" value="{{$hero->youtube}}">
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
<script type="text/javascript">
  $(document).ready(function(){
    $('#frontimageImg').change(function(e){
      var reader = new FileReader();
      reader.onload = function(e){
        $('#showfrontimage').attr('src',e.target.result);
      }
      reader.readAsDataURL(e.target.files['0']);
    });

    $('#backimageImg').change(function(e){
      var reader = new FileReader();
      reader.onload = function(e){
        $('#showbackimage').attr('src',e.target.result);
      }
      reader.readAsDataURL(e.target.files['0']);
    });

  });
</script>
@endpush()

