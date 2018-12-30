@extends('admin_pages.common.header')

@section('content')
<div class="row">
    <div class="col-md-12">
        <h4 class="page-title">{{ __('Save listTaluka') }}</h4>
        <ol class="breadcrumb">
            <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li><a href="{{ route('admin.listTaluka') }}">Taluka</a></li>
            <li>Save</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-md-8 col-md-push-2">
        @if(session('status'))
            @php echo successAlert(session('status')) @endphp
        @endif
        <div class="card-box">
            <h4 class="m-t-0 header-title"><b>{{ __('Save Taluka') }}</b></h4>
            <hr/>
            <div class="row">
                <div class="col-md-12">
                    <form class="form-horizontal" method="POST" action="{{ Request::url() }}" role="form" _lpchecked="1"> 
                        @csrf
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="">States *</label>
                            <div class="col-md-10">
                                <select class="form-control select2 select_state" required="" data-child='district'>
                                    <option value="">Select States</option>
                                    @foreach($states as $key => $val)
                                        @php
                                            $selected = (@$data->state_id == $val->id)?'selected':'';
                                        @endphp
                                        <option {{ $selected }} value='{{ $val->id }}'>{{ $val->name }}</option>
                                    @endforeach
                                </select>
                            </div> 
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label" for="">District *</label>
                            <div class="col-md-10">
                                <select class="form-control select2" name='district' id="district" required="">
                                    <option value="">Select District</option>
                                    @if(@$data->district_id)
                                        <option selected value="{{ @$data->district_id }}">{{ @$data->district_name }}</option>
                                    @endif                                    
                                </select>
                            </div> 
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label" for="name">Taluka *</label>
                            <div class="col-md-10">
                                <input type="text" id="name" name="name" class="form-control" placeholder="Enter Taluka name" required value="{{ ($data)?$data->name:old('name') }}">
                                @if($errors->has('name'))
                                    @php 
                                        echo showError($errors->first('name'));
                                    @endphp
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-2">
                                <button class="btn btn-primary" type="submit">Save</button>
                                <button class="btn btn-danger" type="reset">Clear</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
var page = {
    init: function(){
       this.common(); 
    },
    common: function(){
        $(document).on("change",".select_state",function(){
            var id = this.dataset.child;
            var state_id = this.value;
            $.ajax({
                url: '{{ route("admin.taluka.districtAjax") }}',
                data: { 'state_id': state_id,'_token': '{{ csrf_token() }}' },
                dataType: 'JSON',
                type: 'POST',
                success: function(response){
                    $('#'+id).html();
                    $('#'+id).html(response.data);
                }
            });
        });
    },
};
$(document).ready(function(){
    page.init();
});
</script>
@endsection
