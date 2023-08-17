
@extends('backend.master')
@section('content')
<div class="row">
  <div class="col-xl-9 mx-auto">
    <h6 class="mb-0 text-uppercase">Add Portfolio Type</h6>
    <hr>
    <div class="card">
      <div class="card-body">
        <form action="{{route('PortfolioTypePost')}}" method="POST" enctype="multipart/form-data">
          @csrf
            <div class="border p-3 rounded">
              <div class="mb-3">
                <label class="form-label">Portfolio Type Title</label>
                <input type="text" required class="form-control" name="title" >
              </div>
              <div class="mb-3">
                <select name="status" class="form-control" required id="">
                    <option value="1">Active</option>
                    <option value="0">InActive</option>
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

