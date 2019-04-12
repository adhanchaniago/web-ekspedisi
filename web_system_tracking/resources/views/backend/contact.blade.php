@extends('layout.master-backend')

@section('title', 'Contact')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="panel">
            <div class="panel-heading">Contact List</div>
            <div class="clearfix"></div>
            <div class="table-responsive">
                <table class="table table-hover manage-u-table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th width="70" class="text-center">Num</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Message</th>
                            <th>Send Date</th>
                            <th>Status</th>
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
                            <td>{{ $model->name }}</td>
                            <td>{{ $model->email }}</td>
                            <td>{{ $model->phone_number }}</td>
                            <td>{{ $model->message }}</td>
                            <td>{{ $createdDate->format('d-m-Y H:i') }}</td>
                            <td>{{ $model->status }}</td>
                            <td>
                                <a href="{{ url('admin/contact/edit/'.$model->contact_id) }}" type="button" class="btn btn-info btn-outline btn-circle btn-sm m-r-5"><i class="ti-pencil-alt"></i></a>
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