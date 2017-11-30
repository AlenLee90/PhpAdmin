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
			<h1 class="page-header">InputDetail Management</h1>
		</div>
		<!-- /.col-lg-12 -->
    </div>
	
	            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            InputDetail Datas
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Amount</th>
                                        <th>Category</th>
                                        <th>Consumption</th>
                                        <th>Currency</th>
										<th>Location</th>
										<th>Comment</th>
										<th>CreatedAt</th>
										<th>UpdateAt</th>
										<th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
									@foreach ($datas as $data) 
                                    <tr>
										<td>{{ $data->id }}</td>
                                        <td>{{ $data->amount }}</td>
                                        <td>{{ $data->category_id }}</td>
                                        <td>{{ $data->consumption_flag }}</td>
                                        <td>{{ $data->currency_id }}</td>
                                        <td>{{ $data->location }}</td>
										<td>{{ $data->comment }}</td>
										<td>{{ $data->created_at }}</td>
										<td>{{ $data->updated_at }}</td>
										<td></td>
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
