@extends('layout.master-backend')

@section('title', 'Edit Branch')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="white-box">
            <h3 class="box-title m-b-0">Edit Branch {{ $model->branch_name }}</h3>
            <br>
            <form class="form-horizontal" method="POST" action="{{ url('admin/branch/save') }}">
                {{ csrf_field() }}
                <input type="hidden" name="branchId" class="form-control" value="{{ $model->branch_id }}" >
                <div class="form-group {{ $errors->has('branchCode') ? 'has-error' : '' }}">
                    <label class="col-md-12">Branch Code</label>
                    <div class="col-md-12">
                        <input type="text" name="branchCode" class="form-control" value="{{ count($errors) > 0 ? old('branchCode') : $model->branch_code }}" >
                        @if($errors->has('branchCode'))
                        <span class="help-block">{{ $errors->first('branchCode') }}</span>
                        @endif
                    </div>
                </div>
                <div class="form-group {{ $errors->has('branchName') ? 'has-error' : '' }}">
                    <label class="col-md-12">Branch Name</label>
                    <div class="col-md-12">
                        <input type="text" name="branchName" class="form-control" value="{{ count($errors) > 0 ? old('branchName') : $model->branch_name }}" >
                        @if($errors->has('branchName'))
                        <span class="help-block">{{ $errors->first('branchName') }}</span>
                        @endif
                    </div>
                </div>
                 <div class="form-group {{ $errors->has('phoneNumber') ? 'has-error' : '' }}">
                    <label class="col-md-12">Phone Number</label>
                    <div class="col-md-12">
                        <input type="text" name="phoneNumber" class="form-control" value="{{ count($errors) > 0 ? old('phoneNumber') : $model->phone_number }}" >
                        @if($errors->has('phoneNumber'))
                        <span class="help-block">{{ $errors->first('phoneNumber') }}</span>
                        @endif
                    </div>
                </div>
                 <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                    <label class="col-md-12">Email</label>
                    <div class="col-md-12">
                        <input type="email" name="email" class="form-control" value="{{ count($errors) > 0 ? old('email') : $model->email }}" >
                        @if($errors->has('email'))
                        <span class="help-block">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                </div>
                <div class="form-group {{ $errors->has('address') ? 'has-error' : '' }}">
                    <label class="col-md-12">Address</label>
                    <div class="col-md-12">
                        <textarea class="form-control" rows="5" name="address">{{ count($errors) > 0 ? old('address') : $model->address }}</textarea>
                        @if($errors->has('address'))
                        <span class="help-block">{{ $errors->first('address') }}</span>
                        @endif
                    </div>
                </div>
                <div class="form-group {{ $errors->has('maps') ? 'has-error' : '' }}">
                    <label class="col-md-12">Maps</label>
                    <div class="col-md-12">
                        <textarea class="form-control" rows="5" name="maps">{{ count($errors) > 0 ? old('maps') : $model->maps }}</textarea>
                        @if($errors->has('maps'))
                        <span class="help-block">{{ $errors->first('maps') }}</span>
                        @endif
                    </div>
                </div>
                <div class="form-group m-b-0">
                    <div class="col-sm-12 pull-left">
                        <button type="submit" class="btn btn-info waves-effect waves-light m-t-10">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!--./row-->
@endsection