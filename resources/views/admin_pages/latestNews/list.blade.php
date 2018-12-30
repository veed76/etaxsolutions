@extends('admin_pages.common.header')

@section('content')
<div class="row">
    <div class="col-md-10">
        <h4 class="page-title">{{ __('News List') }}</h4>
        <ol class="breadcrumb">
            <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li>News List</li>
        </ol>
    </div>
    <div class="col-md-2">
        <a href="{{ route('admin.latestNews.create') }}"><button type="button" class="btn btn-primary waves-effect waves-light"><i class="fa fa-plus"></i> Create News</button></a>
    </div>
</div>
<div class="row">
    @if(session('status'))
        @php echo successAlert(session('status')) @endphp
    @endif
    <div class="col-sm-12">
        <div class="card-box">
            <h4 class="m-t-0 header-title"><b>{{ __('News  Listing') }}</b></h4>
            <hr/>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Title</th>
                                <th scope="col">Descriptions</th>
                                <th scope="col">Created Date</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as  $val)
                            <tr>
                                <td>{{ $val->name }}</td>
                                <td>{{ $val->descriptions }}</td>
                                <td>{{ filterDate($val->created_at) }}</td>
                                <td>
                                    <div class="btn-group" role="group">
                                      <a title="Edit" href="{{ route('admin.latestNews.create') }}/{{ $val->id }}"><i class="fa fa-edit"></i></a> 
                                      <a title="Delete" href="#" class="delete" data-code="{{ route('admin.listLatestNews') }}/?id={{ $val->id }}&type=delete" ><i class="fa fa-trash"></i></a>
                                    </div>
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
