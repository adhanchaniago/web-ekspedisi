@extends('layout.master-backend')

@section('title', $title)

<?php use App\Model\Contact; ?>

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="white-box">
            <h3 class="box-title m-b-0">{{ $title }}</h3>
            <br>
            <form class="form-horizontal" method="POST" action="{{ url('admin/contact/save') }}">
                {{ csrf_field() }}
                <input type="hidden" name="contactId" class="form-control" value="{{ $model->contact_id }}" >
                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                    <label class="col-md-12">Name</label>
                    <div class="col-md-12">
                        <input type="text" name="name" class="form-control" value="{{ count($errors) > 0 ? old('name') : $model->name }}" readonly>
                        @if($errors->has('name'))
                        <span class="help-block">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                </div>
                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                    <label class="col-md-12">Email</label>
                    <div class="col-md-12">
                        <input type="text" name="email" class="form-control" value="{{ count($errors) > 0 ? old('email') : $model->email }}" readonly>
                        @if($errors->has('email'))
                        <span class="help-block">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                </div>
                <div class="form-group {{ $errors->has('phoneNumber') ? 'has-error' : '' }}">
                    <label class="col-md-12">Phone Number</label>
                    <div class="col-md-12">
                        <input type="text" name="phoneNumber" class="form-control" value="{{ count($errors) > 0 ? old('phoneNumber') : $model->phone_number }}" readonly>
                        @if($errors->has('phoneNumber'))
                        <span class="help-block">{{ $errors->first('phoneNumber') }}</span>
                        @endif
                    </div>
                </div>
                <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
                    <label class="col-md-12">Message</label>
                    <div class="col-md-12">
                        <textarea class="form-control" rows="5" name="message" readonly>{{ count($errors) > 0 ? old('message') : $model->message }}</textarea>
                        @if($errors->has('message'))
                        <span class="help-block">{{ $errors->first('message') }}</span>
                        @endif
                    </div>
                </div>
                
                <div class="form-group {{ $errors->has('status') ? 'has-error' : '' }}">
                    <label class="col-md-12">Status</label>
                    <div class="col-md-12">
                        <input type="text" name="status" class="form-control" value="{{ count($errors) > 0 ? old('status') : $model->status }}" readonly>
                        @if($errors->has('status'))
                        <span class="help-block">{{ $errors->first('status') }}</span>
                        @endif
                    </div>
                </div>
                <div class="form-group {{ $errors->has('note') ? 'has-error' : '' }}">
                    <label class="col-md-12">Note</label>
                    <div class="col-md-12">
                        <textarea class="form-control" rows="5" name="note" {{ $model->status == Contact::CLOSED ? 'readonly' : '' }}>{{ count($errors) > 0 ? old('note') : $model->note }}</textarea>
                        @if($errors->has('note'))
                        <span class="help-block">{{ $errors->first('note') }}</span>
                        @endif
                    </div>
                </div>
                <div class="form-group m-b-0">
                    <div class="col-sm-12 pull-left">
                        <a href="{{ url('admin/contact') }}" class="btn btn-warning"> <i class="fa fa-undo"></i> Back </a>
                        @if($model->status == Contact::OPEN)
                        <button type="submit" class="btn btn-info" name="btninprocess" value="submit"> <i class="fa fa-save"></i> Inprocess</button>
                        @endif
                        @if($model->status == Contact::INPROCESS )
                        <button type="submit" class="btn btn-danger" name="btnclosed" value="submit"> <i class="mdi mdi-publish"></i> Closed</button>
                        @endif
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!--./row-->
@endsection
@section('script')
    @parent
   
</script>
    
@endsection