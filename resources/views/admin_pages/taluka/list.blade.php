@extends('admin_pages.common.header')

@section('content')
<div class="row">
    <div class="col-md-10">
        <h4 class="page-title">{{ __('Taluka List') }}</h4>
        <ol class="breadcrumb">
            <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li>Taluka List</li>
        </ol>
    </div>
    <div class="col-md-2">
        <a href="{{ route('admin.taluka.save') }}"><button type="button" class="btn btn-primary waves-effect waves-light"><i class="fa fa-plus"></i> Create Taluka</button></a>
    </div>
</div>
<div class="row">
    @if(session('status'))
        @php echo successAlert(session('status')) @endphp
    @endif
    <div class="col-sm-12">
        <div class="card-box">
            <h4 class="m-t-0 header-title"><b>{{ __('Taluka  Listing') }}</b></h4>
            <hr/>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover" id="table_taluka">
                            <thead>
                                <th> State </th>
                                <th> District </th>
                                <th> Taluka </th>
                                <th> Actions </th>
                            </thead>     
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
var page = {
    init: function(){
       this.common(); 
       this.customDataTable(); 
    },
    common: function(){
    },
    customDataTable: function(){
        $table_datatable = $('#table_taluka').DataTable({
           processing: true,
           serverSide: false,
           ajax: '{{ route("admin.talukaJson") }}',
           columns: [
                { data: 'state' },
                { data: 'district' },
                { data: 'taluka' },
            ],
            columnDefs: [
                {
                    "render": function (data, type, row) {
                        return  row.state_name;                
                    },
                    "targets": 0,
                },
                {
                    "render": function (data, type, row) {
                        return  row.district_name;                
                    },
                    "targets": 1,
                },
                {
                    "render": function (data, type, row) {
                        return  row.name;                
                    },
                    "targets": 2,
                },
                {
                    "render": function (data, type, row) {
                        return  page.getActions(row);                
                    },
                    "targets": 3,
                },
            ],
            "lengthChange": false,
            "pageLength": '{{ config("app.pagination") }}',
            "orderable": true,
        });
        
    },
    getActions: function(row){ 
        var html = '';
            html = `
                <div class="btn-group" role="group">
                  <a title="Edit" href="{{ route('admin.taluka.save') }}/`+row.id+`"><i class="fa fa-edit"></i></a> 
                  <a title="Delete" href="#" class="delete" data-code="{{ route('admin.listTaluka') }}/?id=`+row.id+`&type=delete" ><i class="fa fa-trash"></i></a>
                </div>`;
            return html;
    },
};
$(document).ready(function(){
    page.init();
});
</script>
@endsection
