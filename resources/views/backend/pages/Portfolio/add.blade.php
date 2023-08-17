
@extends('backend.master')
@section('content')
@php
      $types = DB::table('port_types')->where('status',1)->get();
@endphp
<div class="row">
  <div class="col-xl-9 mx-auto">
    <h6 class="mb-0 text-uppercase">Add Portfolio Type</h6>
    <hr>
    <div class="card">
      <div class="card-body">
        <form action="{{route('PortfolioPost')}}" method="POST" enctype="multipart/form-data">
          @csrf
            <div class="border p-3 rounded">
              <div class="mb-3">
                <label class="form-label">Portfolio Type </label>
                <select name="type_id" class="form-control" required id="">
                    <option value="">--select--</option>
                    @foreach ($types as $item)
                      <option value="{{ $item->id }}">{{ $item->title }}</option> 
                    @endforeach
                </select>
              </div>
              <div class="mb-3">
                <label class="form-label">Title</label>
                <input type="text" required class="form-control" name="title" >
              </div>

              <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea name="desc"  class="form-control"></textarea>
              </div>

              <div class="mb-3">
                <label class="form-label">Image</label>
                <input type="file" required class="form-control" name="image">
              </div>

              <div class="mb-3">
                <label class="form-label">Project</label>
                <input type="text" required class="form-control" name="project" >
              </div>

              <div class="mb-3">
                <label class="form-label">Languages</label>
                <input type="text" required class="form-control" name="languages" >
              </div>

              <div class="mb-3">
                <label class="form-label">Client</label>
                <input type="text" required class="form-control" name="client" >
              </div>

              <div class="mb-3">
                <label class="form-label">Preview Link</label>
                <input type="text" required class="form-control" name="preview" >
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

