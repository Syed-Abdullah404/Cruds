@extends('layout.master')
@section('content')
  
    {{-- add country modal --}}


    {{-- end  add country modal --}}
    <div class="container-fluid px-4">


        <div class="row my-5">
            <h3 class="fs-4 mb-3">Recent Orders <a href="addEmployee"> <button type="button" style="margin-left: 15px"
                        class="btn btn-success">
                        Add Employee
                    </button></a></h3>

            <div class="col">
                <table class="table bg-white rounded shadow-sm  table-hover">
                    <thead>
                        <tr>
                            <th scope="col" width="50">#</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Company</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    {{-- @foreach ($showCompany as $item)
                            $companyName = $item['name'];
                            @endforeach --}}
                    @foreach ($showEmployee as $items)
                        <tbody>
                            <tr>
                                <input type="hidden" class="delid" value="{{ $items->id }}">
                                <th scope="row">{{ $items->id }}</th>
                                <td>{{ $items->firstname }}</td>
                                <td>{{ $items->lastname }}</td>
                                <td>{{ $items->company }}</td>

                                <td>{{ $items->email }}</td>
                                <td>{{ $items->phone }}</td>



                                <td>
                                    <a href={{ '/employee/editEmployee/' . $items['id'] }} id=""
                                        class="text-success mx-1">Update</a>
                                    {{-- <a href={{'deleteEmployee/'.$items['id']}} id="" class="text-danger mx-1" >Delete</a> --}}
                                    <a href='' id="" class="text-danger mx-1 deleteEmployee">Delete</a>
                                </td>
                            </tr>

                        </tbody>
                    @endforeach
                </table>
                <div class="row mb-3 mt-2">
                    {{ $showEmployee->links() }}
                </div>
            </div>
        </div>

    </div>
    </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('.deleteEmployee').click(function(e) {
                e.preventDefault();
                var del_id = $(this).closest('tr').find('.delid').val();
                // alert($del_id);
                Swal.fire({
                        title: 'Are you sure?',
                        text: "You won't be able to revert this!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!'
                    })
                    .then((result) => {
                        if (result.isConfirmed) {

                            $.ajaxSetup({
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                }
                            })
                            $.ajax({
                                type: "Delete",
                                url: '/deleteEmployee/' + del_id,


                                success: function(response) {
                                    Swal.fire(
                                            'Deleted!',
                                            'Your data has been deleted.',
                                            'success',

                                        )
                                        .then((result) => {
                                            location.reload();
                                        });
                                }
                            });



                        }
                    })
            });
        });
    </script>
@endsection
