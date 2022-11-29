@extends('layout.master')
@section('content')
    {{-- end  add country modal --}}
    <div class="container-fluid px-4">


        <div class="row my-5">
            <h3 class="fs-4 mb-3">Recent Orders <a href="{{ route('post.create') }}"> <button type="button"
                        style="margin-left: 15px" class="btn btn-success">
                        Add POST
                    </button></a></h3>

            <div class="col">
                <table class="table bg-white rounded shadow-sm  table-hover">
                    <thead>
                        <tr>
                            <th scope="col" width="50">#</th>
                            <th scope="col">Image</th>
                            <th scope="col">Title</th>
                            <th scope="col">Body</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    @foreach ($post as $item)
                        <tbody>
                            <tr>
                                <input type="hidden" class="delid" value="{{ $item->id }}">
                                <th scope="row">{{ $item->id }}</th>
                                <td><img src="image/posts/{{ $item->image }}" width="100px" height="80px"></td>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->body }}</td>



                                <td>
                                    {{-- <a href={{"company.edit/".$item['id']}} id="" class="text-success mx-1" >Update</a> --}}
                                  <button class="btn btn-success btn-sm">
                                      
                                      <a href={{ route('post.edit', $item->id) }} id=""
                                        class="text-white mx-1">Update</a>
                                </button>  
                                    {{-- <a href={{'deleteCompany/'.$item['id']}} id="" class="text-danger mx-1" >Delete</a> --}}
                                    {{-- <a href='' id="" class="text-danger mx-1 deleteCompany">Delete</a> --}}

                                    <form method="post" class="delete-form"
                                        data-route="{{ route('post.destroy', $item->id) }}">
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>

                        </tbody>
                    @endforeach
                </table>
                <div class="row  mb-5 mt-4">
                    {{ $post->links() }}
                </div>
            </div>
        </div>

    </div>
   
@endsection
@section('script')
    <script type="text/javascript">
        $(document).ready(function() {

            $('.delete-form').on('submit', function(e) {
                e.preventDefault();

                $.ajax({
                    type: 'post',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: $(this).data('route'),
                    data: {
                        '_method': 'delete'
                    },
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

            })
        });
    </script>
@endsection
