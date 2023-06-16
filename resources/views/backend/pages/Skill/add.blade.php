
@extends('backend.master')
@section('content')
<div class="row">
  <div class="col-xl-9 mx-auto">
    <h6 class="mb-0 text-uppercase">Add Skill </h6>
    <hr>
    <div class="card">
      <div class="card-body">
        <form action="{{route('SkillPost')}}" method="POST" enctype="multipart/form-data">
          @csrf
            <div class="border p-3 rounded">
              <div class="mb-3">
                <label class="form-label">Skill Title</label>
                <input type="text" required class="form-control" name="name" >
              </div>
              <div class="mb-3">
                <label class="form-label">Skill Percentage</label>
                <input type="text" required class="form-control" name="number">
              </div>
              <div class="mb-3">
                <select name="status" class="from-control" required id="">
                    <option value="1">Frontend</option>
                    <option value="2">Backend</option>
                </select>
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

