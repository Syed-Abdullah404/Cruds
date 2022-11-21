@extends('layout.master')
@section('content')



{{--end  add country modal--}}
            <div class="container-fluid px-4">
               

                <div class="row my-5">
                    <h3 class="fs-4 mb-3">Recent Orders  <a href="{{route('company.create')}}"> <button type="button" style="margin-left: 15px" class="btn btn-success" >
                        Add Company 
                      </button></a></h3>
                  
                    <div class="col">
                        <table class="table bg-white rounded shadow-sm  table-hover">
                            <thead>
                                <tr>
                                    <th scope="col" width="50">#</th>
                                    <th scope="col">Company</th>
                                    <th scope="col">Email</th>
                                 
                                    <th scope="col" >Action</th>
                                </tr>
                            </thead>
                            @foreach ($show  as $item)
                                
                            <tbody>
                                <tr>
                                    <input type="hidden" class="delid" value="{{ $item->id }}">
                                    <th scope="row">{{$item->id}}</th>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->email}}</td>
                                    
                              

                                    <td> 
                                        {{-- <a href={{"company.edit/".$item['id']}} id="" class="text-success mx-1" >Update</a> --}}
                                        <a href={{ route('company.edit', $item->id) }} id="" class="text-success mx-1" >Update</a>
                                        {{-- <a href={{'deleteCompany/'.$item['id']}} id="" class="text-danger mx-1" >Delete</a> --}}
                                        <a href='' id="" class="text-danger mx-1 deleteCompany">Delete</a>
                                    </td>
                                </tr>
                                
                            </tbody>
                            @endforeach
                        </table>
                        <div class="row  mb-5 mt-4">
                            {{$show->links()}}
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
            $('.deleteCompany').click(function(e) {
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
                                url: "{{route('company.destroy')" + del_id,


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