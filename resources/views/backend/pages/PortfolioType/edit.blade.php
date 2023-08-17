
@extends('backend.master')
@section('content')
<div class="row">
  <div class="col-xl-9 mx-auto">
    <h6 class="mb-0 text-uppercase">Edit Portfolio Type </h6>
    <hr>
    <div class="card">
      <div class="card-body">
        <form action="{{route('PortfolioTypeUpdate')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <input type="hidden" name="id" value="{{ $data->id }}">
            <div class="border p-3 rounded">
              <div class="mb-3">
                <label class="form-label">Portfolio Type Title</label>
                <input type="text" required class="form-control" name="title" value="{{ $data->title }}" >
              </div>
              <div class="mb-3">
                <select name="status" class="form-control" required id="">
                    <option @if ($data->status==1) selected @endif  value="1">Active</option>
                    <option @if ($data->status==0) selected @endif  value="0">InActive</option>
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

