@extends('layout.master-backend')

@section('title', 'Branch')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="panel">
            <div class="panel-heading">Branch List</div>
            <div class="button-box pull-right" style="padding-bottom:10px;">
                <a href="{{ url('admin/branch/add') }}" class="btn btn-primary waves-effect waves-light"> <i class="fa fa-plus m-r-5"></i> <span>Add New Branch</span></a>
            </div>
            <div class="clearfix"></div>
            <div class="table-responsive">
                <table class="table table-hover manage-u-table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th width="70" class="text-center">Num</th>
                            <th>Code</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    	@foreach($models as $no => $model)
                        <tr>
                            <td class="text-center">{{ $no+1 }}</td>
                            <td>{{ $model->branch_code }}</td>
                            <td>{{ $model->branch_name }}</td>
                            <td>{{ $model->address }}</td>
                            <td>{{ $model->phone_number }}</td>
                            <td>
                                <a href="{{ url('admin/branch/edit/'.$model->branch_id) }}" type="button" class="btn btn-info btn-outline btn-circle btn-sm m-r-5"><i class="ti-pencil-alt"></i></a>
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