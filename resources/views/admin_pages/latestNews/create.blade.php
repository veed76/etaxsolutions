@extends('admin_pages.common.header')

@section('content')
<div class="row">
    <div class="col-md-12">
        <h4 class="page-title">{{ __('Save News') }}</h4>
        <ol class="breadcrumb">
            <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li><a href="{{ route('admin.listLatestNews') }}">Latest News</a></li>
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
            <h4 class="m-t-0 header-title"><b>{{ __('Save News') }}</b></h4>
            <hr/>
            <div class="row">
                <div class="col-md-12">
                    <form class="form-horizontal" method="POST" action="{{ Request::url() }}" role="form" _lpchecked="1"> 
                        @csrf
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="example-email">Title</label>
                            <div class="col-md-10">
                                <input type="text" id="title" name="title" class="form-control" placeholder="Enter News Title" required value="{{ ($data)?$data->name:old('title') }}">
                                
                                @if($errors->has('title'))
                                    @php 
                                        echo showError($errors->first('title'));
                                    @endphp
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label" for="descriptions">Description</label>
                            <div class="col-md-10">
                                <textarea name='descriptions' id="descriptions" class="form-control" required placeholder="Enter News Descriptions">{{ ($data)?$data->descriptions:old('descriptions') }}</textarea>
                                @if($errors->has('descriptions'))
                                    @php 
                                        echo showError($errors->first('descriptions'));
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
@endsection
