
@extends('backend.master')
@section('content')
@php
$setting =DB::table('settings')->first();
@endphp
<div class="row">
  <div class="col-xl-9 mx-auto">
    <h6 class="mb-0 text-uppercase">Control Setting</h6>
    <hr>
    <div class="card">
      <div class="card-body">
        <form action="{{route('updateSetting')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="border p-3 rounded">
            <div class="mb-3">
              <label class="form-label">Logo Image</label>
              <input type="file" class="form-control" name="logo_img" id="Logoimg">
              <img id="showlogo" src="{{(!empty($setting->logo)) ? url('images/setting/'.$setting->logo):url('images/profile/no_image.jpeg') }}" style="width:100px; height: 100px;" >
            </div>
            <div class="mb-3">
              <label class="form-label">Favicon Image</label>
              <input type="file" class="form-control" name="favicon" id="faviconImg">
              <img id="showFavicon" src="{{(!empty($setting->favicon)) ? url('images/setting/'.$setting->favicon):url('images/profile/no_image.jpeg') }}" style="width:100px; height: 100px;" >
            </div>
            <div class="mb-3">
              <label class="form-label">Email</label>
              <input type="text" class="form-control" name="email" value="{{$setting->email}}">
            </div>
            <div class="mb-3">
              <label class="form-label">Phone </label>
              <input type="text" class="form-control" name="phone" value="{{$setting->phone}}">
            </div>
            <div class="mb-3">
              <label class="form-label">Title </label>
              <input type="text" class="form-control" name="title" value="{{$setting->title}}">
            </div>
          </div>

          <div class="border p-3 rounded mt-4">
            <h2 class="text-center">Service </h2>
            <div class="mb-3">
              <label class="form-label">Title </label>
              <input type="text" class="form-control" name="s_title" value="{{$setting->s_title}}">
            </div>
            <div class="mb-3">
              <label class="form-label">Description</label>
              <textarea name="s_desc" class="form-control" >
                {{$setting->s_desc}}
              </textarea>
            </div>
          </div>
          
          <div class="border p-3 rounded mt-4">
            <h2 class="text-center">About </h2>
            <div class="mb-3">
              <label class="form-label">Education Title </label>
              <input type="text" class="form-control" name="a_title" value="{{$setting->a_title}}">
            </div>
            <hr>
            <div class="mb-3">
              <label class="form-label">Skill Title </label>
              <input type="text" class="form-control" name="sk_title" value="{{$setting->sk_title}}">
            </div>
            <div class="mb-3">
              <label class="form-label">Skill Description</label>
              <textarea name="sk_desc" class="form-control" >
                {{$setting->sk_desc}}
              </textarea>
            </div>
          </div>
          





          <div class="border p-3 rounded mt-2">
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

		$('#Logoimg').change(function(e){
			var reader = new FileReader();
			reader.onload = function(e){
				$('#showlogo').attr('src',e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});

	});
</script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#faviconImg').change(function(e){
      var reader = new FileReader();
      reader.onload = function(e){
        $('#showFavicon').attr('src',e.target.result);
      }
      reader.readAsDataURL(e.target.files['0']);
    });

  });
</script>
@endpush()
