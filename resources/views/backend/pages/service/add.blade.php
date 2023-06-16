
@extends('backend.master')
@section('content')
<div class="row">
  <div class="col-xl-9 mx-auto">
    <h6 class="mb-0 text-uppercase">Add Service </h6>
    <hr>
    <div class="card">
      <div class="card-body">
        <form action="{{route('servicePost')}}" method="POST" enctype="multipart/form-data">
          @csrf
            <div class="border p-3 rounded">
              <div class="mb-3">
                <label class="form-label">Service Icon</label>
                <input type="file" required class="form-control" name="icon" id="Profileimg">
                <img id="showProfile" src="{{ url('images/profile/no_image.jpeg') }}" style="width:100px; height: 100px;" >
              </div>
              <div class="mb-3">
                <label class="form-label">Service Title</label>
                <input type="text" required class="form-control" name="title" >
              </div>
              <div class="mb-3">
                <label class="form-label">Service Desc</label>
                <input type="text" required class="form-control" name="desc">
              </div>
            
              <div class="mb-3">
                <button type="submit" class="btn btn-primary" >Submit</button>
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

