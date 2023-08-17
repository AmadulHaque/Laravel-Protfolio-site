
@extends('backend.master')
@section('content')
@php
      $types= DB::table('port_types')->where('status',1)->get();
@endphp
<div class="row">
  <div class="col-xl-9 mx-auto">
    <h6 class="mb-0 text-uppercase">Edit Portfolio </h6>
    <hr>         
    <div class="card">
      <div class="card-body">
        <form action="{{route('PortfolioUpdate')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <input type="hidden" name="id" value="{{ $data->id }}">
            <div class="border p-3 rounded">
              <div class="mb-3">
                <label class="form-label">Portfolio Type </label>
                <select name="type_id" class="form-control" required id="">
                    <option value="">--select--</option>
                    @foreach ($types as $item)
                      <option @if ($item->id==$data->type_id)
                      selected
                      @endif value="{{ $item->id }}">{{ $item->title }}</option> 
                    @endforeach
                </select>
              </div>
              <div class="mb-3">
                <label class="form-label">Title</label>
                <input type="text" required class="form-control" name="title" value="{{ $data->title }}" >
              </div>

              <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea name="desc"  class="form-control">{{ $data->desc }}</textarea>
              </div>

              <div class="mb-3">
                <label class="form-label">Image</label>
                <input type="file"  class="form-control" name="image" >
                <img src="/{{ $data->image }}" style="width: 80px" alt="">
              </div>

              <div class="mb-3">
                <label class="form-label">Project</label>
                <input type="text" required class="form-control" name="project" value="{{ $data->project }}">
              </div>

              <div class="mb-3">
                <label class="form-label">Languages</label>
                <input type="text" required class="form-control" name="languages" value="{{ $data->languages }}" >
              </div>

              <div class="mb-3">
                <label class="form-label">Client</label>
                <input type="text" required class="form-control" name="client" value="{{ $data->client }}" >
              </div>

              <div class="mb-3">
                <label class="form-label">Preview Link</label>
                <input type="text" required class="form-control" name="preview" value="{{ $data->preview }}" >
              </div>

              <div class="mb-3">
                <select name="status" class="form-control" required id="">
                    <option @if ($data->status==1) selected @endif value="1">Active</option>
                    <option @if ($data->status==2) selected @endif value="0">InActive</option>
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

