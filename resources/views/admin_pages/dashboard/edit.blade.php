@extends('admin_common.header')

@section('content')
<div class="row">
    <div class="col-sm-12">
        <h4 class="page-title">{{ __('Update User') }}</h4>
        <ol class="breadcrumb">
            <li><a href="{{ route('root') }}">Dashboard</a></li>
            <li>Update User</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-sm-6 col-sm-push-3">
        <div class="card-box">
            <h4 class="m-t-0 header-title"><b>{{ __('Add User') }}</b></h4>
            <hr/>
            <div class="row">
                <div class="col-md-12">
                    <form class="form-horizontal" method="POST" action="{{ route('editUsers') .'/' . $users->id }}" role="form" _lpchecked="1" enctype="multipart/form-data"> 
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label class="col-md-2 control-label">First name</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control" name="firstname" placeholder="First Name" value="{{ old('firstname', $users->firstname ) }}">
                                @if ($errors->has('firstname'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('firstname') }}</strong>
                                </span>
                                @endif
                            </div>
                            <label class="col-md-2 control-label">Last name</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control" name="lastname" placeholder="Last Name" value="{{ old('lastname', $users->lastname ) }}">
                                @if($errors->has('lastname'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('lastname') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label" for="example-email">Email</label>
                            <div class="col-md-10">
                                <input type="email" disabled id="example-email" name="email" class="form-control" placeholder="Email" value="{{ old('email', $users->email ) }}">
                                @if($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label" for="example-phone_no">Mobile Number</label>
                            <div class="col-md-10">
                                <input type="text" disabled id="example-phone_no" name="phone_no" class="form-control" placeholder="Mobile Number" value="{{ old('phone_no', $users->phone_no ) }}">
                                @if($errors->has('phone_no'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('phone_no') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Member Role</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="roles" value="{{ old('roles', $users->roles ) }}">
                                    @foreach(roles() as $key => $val)
                                        @php $selected = ($users->roles == $key)?'selected':'' @endphp
                                        <option {{ $selected }} value="{{ $key }}">{{ $val }}</option>
                                    @endforeach
                                </select>
                                @if($errors->has('roles'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('roles') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2">Profile Picture</label>
                            <div class="col-sm-10">
                                <input type="file" class="filestyle" data-input="false" name="profile_image" id="filestyle-1" tabindex="-1" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);"><div class="bootstrap-filestyle input-group"><span class="group-span-filestyle " tabindex="0"><label for="filestyle-1" class="btn btn-default "><span class="icon-span-filestyle glyphicon glyphicon-folder-open"></span> <span class="buttonText">Choose file</span></label></span></div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-2">
                                <button class="btn btn-primary" type="submit">Update User</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
