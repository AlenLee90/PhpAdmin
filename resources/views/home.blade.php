@extends('layouts.app')

@section('content')
<div id="page-wrapper">
    <div class="row">
        <!--
		<div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
				
            </div>
        </div>
		-->
		
		@if (session('status'))
        <div class="alert alert-success">
			{{ session('status') }}
        </div>
        @endif
    </div>
	
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">User Management</h1>
		</div>
		<!-- /.col-lg-12 -->
    </div>
	
	<div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    User Datas
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
								<th>CreatedAt</th>
								<th>UpdateAt</th>
								<th data-orderable="false">Action</th>
                            </tr>
                        </thead>
                        <tbody>
							@foreach ($datas as $data) 
                            <tr>
								<td>{{ $data->id }}</td>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->email }}</td>
								<td>{{ $data->created_at }}</td>
								<td>{{ $data->updated_at }}</td>
								<td>
									<button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#{{ $data->id }}">Edit</button>
									<div class="modal fade" id="{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
										<div class="modal-dialog modal-lg" role="document">
											<div class="modal-content">
											<form role="form" action="{{ action('HomeController@edit') }}" accept-charset="UTF-8">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
													<h4 class="modal-title" id="myModalLabel">Edit Data</h4>
												</div>
												<div class="modal-body">
													<div class="container-fluid">
														<div class="row" style="margin-bottom:8px">
															<div class="col-lg-6">
																	<div class="form-group">
																		<label>Id</label>
																		<input class="form-control" value="{{ $data->id }}" type="text" disabled>
																		<input class="form-control " name="id" value="{{ $data->id }}" type="text" style="display:none;">
																	</div>
															</div>
															<div class="col-lg-6">
																	<div class="form-group">
																		<label>Name</label>
																		<input class="form-control" value="{{ $data->name }}" type="text" disabled>
																		<input class="form-control " name="name" value="{{ $data->name }}" type="text" style="display:none;">
																	</div>
															</div>
														</div>
														<div class="row" style="margin-bottom:8px">
															<div class="col-lg-6">
																	<div class="form-group">
																		<label>Email</label>
																		<input class="form-control" name="email" value="{{ $data->email }}" type="text">
																	</div>
															</div>
														</div>
													</div>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
													<button type="submit" class="btn btn-primary">Save changes</button>
												</div>
											</form>
											</div>
										</div>
									</div>
　									<form action="{{ action('HomeController@delete', $data->id) }}" id="form_{{ $data->id }}" method="post">
									{{ csrf_field() }}
									{{ method_field('delete') }}
									<a data-id="{{ $data->id }}" class="btn btn-danger btn-xs" onclick="deletePost(this);">Delete</a>
									</form>
								</td>
                            </tr>
							@endforeach
                        </tbody>
                    </table>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>
@endsection
