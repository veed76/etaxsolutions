@extends('admin_common.header')

@section('content')
<div class="row">
    <div class="col-sm-11">
        <h4 class="page-title">{{ __('Users list') }}</h4>
        <ol class="breadcrumb">
            <li><a href="{{ route('root') }}">Dashboard</a></li>
            <li>User list</li>
        </ol>
    </div>
    <div class="col-sm-1">
        <a href="{{ route('addUsers') }}"><button type="button" class="btn btn-primary waves-effect waves-light">Add users</button></a>
    </div>
</div>
<div class="row">
    @if(session('status'))
        <div class="col-sm-12">
            <div class="alert alert-dismissible alert-success">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>{{ session('status') }}</strong>
            </div>
        </div>
    @endif
    <div class="col-sm-12">
        <div class="card-box">
            <h4 class="m-t-0 header-title"><b>{{ __('User Listing') }}</b></h4>
            <hr/>
            <div class="row">
                <div class="col-md-12">
                   @include('admin_common.search')
                </div>
                <div class="col-md-12">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Sr no.</th>
                                <th scope="col">Image</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Mobile No.</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i= ($users->currentpage()-1)*$users->perpage()+1; @endphp
                            @foreach($users as  $val)
                            <tr>
                                <th scope="row">{{ $i++ }}</th>
                                <td>
                                    <img src="{{ image_url($val->profile_image) }}" alt="contact-img" title="contact-img" class="img-circle thumb-sm">
                                </td>
                                <td>{{ $val->name }}</td>
                                <td>{{ $val->email }}</td>
                                <td>{{ $val->phone_no }}</td>
                                <td>
                                    <div class="btn-group" role="group">
                                      <a href=" {{ route('editUsers') .'/'. $val->id }} "><button type="button" class="btn btn-default">Update</button></a>
                                      <a href=" {{ route('viewUsers') .'/'. $val->id }} "><button type="button" class="btn btn-default">View</button></a>
                                      <a href="#" class="delete" data-code="{{ route('deleteUsers') .'/'. $val->id }}" ><button type="button" class="btn btn-default">Delete</button></a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div>
                        Showing {{($users->currentpage()-1)*$users->perpage()+1}} to {{$users->currentpage()*$users->perpage()}}
                        of  {{$users->total()}} entries
                    </div>
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var operations = {
        init: function(){
           this.common(); 
        },
        common: function(){
            $(document).on("click","a.delete",function(){
                var url = this.dataset.code;
                swal({
                  title: "Are you sure?",
                  text: "Your will not be able to recover this user!",
                  type: "warning",
                  showCancelButton: true,
                  confirmButtonClass: "btn-danger",
                  confirmButtonText: "Yes, delete it!",
                  closeOnConfirm: false
                },
                function(){
                    window.location.href = url;
                });
            });
        },
    };
    $(document).ready(function(){
        operations.init();
    });
</script>
@endsection