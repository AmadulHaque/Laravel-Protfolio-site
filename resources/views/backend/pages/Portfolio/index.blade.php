@extends('backend.master')
@section('content')
<link href="{{ asset('backend/assets/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
<div class="row">
  <div class="col-12 mx-auto">
    <h6 class="mb-0 text-uppercase">Control Portfolio Type </h6>
    <hr>
    <div class="card">
      <div class="card-body">
        <div class="table-responsive">
          <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
              <tr>
                <th>Sl</th>
                <th>Type</th>
                <th>Title</th>
                <th>Image</th>
                <th>Project</th>
                <th>Languages</th>
                <th>Client</th>
                <th>Preview</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($data as $key=>$item)
              @php
                  $type = DB::table('port_types')->where('id',$item->type_id)->first();
              @endphp
                <tr>
                  <td>{{ $key+1 }}</td>
                  <td>{{ $type->title }}</td>
                  <td>{{ $item->title }}</td>
                  <td>
                    <img style="width: 80px" src="{{ $item->image }}" alt="">
                  </td>
                  <td>{{ $item->project }}</td>
                  <td>{{ $item->languages }}</td>
                  <td>{{ $item->client }}</td>
                  <td>{{ $item->preview }}</td>
                  <td>
                    @if ($item->status==1)
                        Active
                      @else 
                      InActive 
                    @endif
                  </td>
                  <td>
                    <a href="{{ route('PortfolioEdit',$item->id) }}" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit text-white"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg></a>
                    <a href="#"   class=" deleteRow btn btn-danger" data-id="{{ $item->id }}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 text-white"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></a>
                  </td>
                </tr>
              @endforeach
            </tbody>q
          </table>
        </div>
      </div>
    </div>


  </div>
</div>
@endsection()
@push('js')

	<!--plugins-->
	<script src="{{ asset('backend/assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('backend/assets/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>

	<script>
		$(document).ready(function() {
			$('#example').DataTable();
		  } );
	</script>

<script type="text/javascript">
	$(document).ready(function(){

    $(document).on('click','.deleteRow',function(e){
      e.preventDefault();
      let id = $(this).data('id');

      const swalWithBootstrapButtons = Swal.mixin({
      customClass: {
        confirmButton: 'btn btn-success',
        cancelButton: 'btn btn-danger'
      },
      buttonsStyling: false
    })
    swalWithBootstrapButtons.fire({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Yes, delete it!',
      cancelButtonText: 'No, cancel!',
      reverseButtons: true
    }).then((result) => {
      if (result.isConfirmed) {
         location.href = '/portfolio/delete/'+id
      }
    })

    })

	});


</script>
@endpush()




