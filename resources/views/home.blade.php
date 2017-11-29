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
			<h1 class="page-header">Dashboard</h1>
		</div>
		<!-- /.col-lg-12 -->
    </div>
</div>
@endsection
