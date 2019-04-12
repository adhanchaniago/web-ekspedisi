@extends('layout.master-backend')

@section('title', 'News')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="panel">
            <div class="panel-heading">News List</div>
            <div class="button-box pull-right" style="padding-bottom:10px;">
                <a href="{{ url('admin/news/add') }}" class="btn btn-primary waves-effect waves-light"> <i class="fa fa-plus m-r-5"></i> <span>Add New Contain</span></a>
            </div>
            <div class="clearfix"></div>
            <div class="table-responsive">
                <table class="table table-hover manage-u-table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th width="70" class="text-center">Num</th>
                            <th>Title</th>
                            <th>Status</th>
                            <th>Created Date</th>
                            <th>Created By</th>
                            <th>Published Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    	@foreach($models as $no => $model)
                    	<?php 
                    	$createdDate   = new \DateTime($model->created_at);
                    	$publishedDate = !empty($model->published_at) ? new \DateTime($model->published_at) : null;
                    	?>
                        <tr>
                            <td class="text-center">{{ $no+1 }}</td>
                            <td>{{ $model->title }}</td>
                            <td>{{ $model->status }}</td>
                            <td>{{ $createdDate->format('d-m-Y') }}</td>
                            <td>{{ $model->name }}</td>
                            <td>{{ !empty($publishedDate) ? $publishedDate->format('d-m-Y') : '' }}</td>
                            <td>
                                <a href="{{ url('admin/news/edit/'.$model->news_id) }}" type="button" class="btn btn-info btn-outline btn-circle btn-sm m-r-5"><i class="ti-pencil-alt"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection