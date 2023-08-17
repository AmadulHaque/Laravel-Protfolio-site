@extends('backend.master')
@section('content')
<link href="{{ asset('backend/assets/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
<div class="row">
  <div class="col-12 mx-auto">
    <h6 class="mb-0 text-uppercase">Control Skill </h6>
    <hr>
    <div class="card">
      <div class="card-body">
        <div class="table-responsive">
          <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
              <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Message</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($contacts as $item)
                <tr>
                  <td>{{ $item->name }}</td>
                  <td>{{ $item->email }} </td>
                  <td>{{ $item->subject }} </td>
                  <td>{{ $item->message }} </td>
                  <td>
                    <div class="dropdown">
											<button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">{{ $item->status }}</button>
											<ul class="dropdown-menu" style="margin: 0px;">
												<li><a class="dropdown-item" href="{{ route('ContactApprove',$item->id) }}">Approve</a>
												</li>
												<li><a class="dropdown-item" href="{{ route('ContactReject',$item->id) }}">Reject</a>
												</li>
											</ul>
										</div>

                  </td>
                  <td>
                    <a href="#"   class=" deleteRow btn btn-danger" data-id="{{ $item->id }}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 text-white"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></a>
                  </td>
                </tr>
              @endforeach
            </tbody>
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
         location.href = '/contact/delete/'+id
      }
    })



    })

	});


</script>
@endpush()




