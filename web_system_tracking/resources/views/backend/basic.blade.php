@extends('layout.master-backend')

@section('title', 'Basic Variable')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="white-box">
            <h3 class="box-title m-b-0">Basic Information of Your Website</h3>
            <p class="text-muted m-b-30 font-13"> This data show in many pages </p>
            <form class="form-horizontal" method="POST" action="{{ url('admin/basic/save') }}">
                {{ csrf_field() }}
            	@foreach($models as $model)
            	@if($model->type == 'string')
                <div class="form-group">
                    <label class="col-md-12">{{ $model->description }}</label>
                    <div class="col-md-12">
                        <input type="text" name="{{ $model->variable_name }}" class="form-control" value="{{ $model->string_contain }}" ></div>
                </div>
                @elseif($model->type == 'text')
                <div class="form-group">
                    <label class="col-md-12">{{ $model->description }}</label>
                    <div class="col-md-12">
                        <textarea class="form-control" rows="5" name="{{ $model->variable_name }}">{{ $model->text_contain }}</textarea>
                    </div>
                </div>
                @endif
                @endforeach
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