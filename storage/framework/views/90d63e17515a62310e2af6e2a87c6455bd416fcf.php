<?php $__env->startSection('content'); ?>
<div id="page-wrapper">
    <div class="row">
        <!--
		<div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    You are logged in!
                </div>
				
            </div>
        </div>
		-->
		
		<?php if(session('status')): ?>
        <div class="alert alert-success">
			<?php echo e(session('status')); ?>

        </div>
        <?php endif; ?>
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
							<?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                            <tr>
								<td><?php echo e($data->id); ?></td>
                                <td><?php echo e($data->name); ?></td>
                                <td><?php echo e($data->email); ?></td>
								<td><?php echo e($data->created_at); ?></td>
								<td><?php echo e($data->updated_at); ?></td>
								<td>
									<button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#<?php echo e($data->id); ?>">Edit</button>
									<div class="modal fade" id="<?php echo e($data->id); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
										<div class="modal-dialog modal-lg" role="document">
											<div class="modal-content">
											<form role="form" action="<?php echo e(action('HomeController@edit')); ?>" accept-charset="UTF-8">
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
																		<input class="form-control" value="<?php echo e($data->id); ?>" type="text" disabled>
																		<input class="form-control " name="id" value="<?php echo e($data->id); ?>" type="text" style="display:none;">
																	</div>
															</div>
															<div class="col-lg-6">
																	<div class="form-group">
																		<label>Name</label>
																		<input class="form-control" value="<?php echo e($data->name); ?>" type="text" disabled>
																		<input class="form-control " name="name" value="<?php echo e($data->name); ?>" type="text" style="display:none;">
																	</div>
															</div>
														</div>
														<div class="row" style="margin-bottom:8px">
															<div class="col-lg-6">
																	<div class="form-group">
																		<label>Email</label>
																		<input class="form-control" name="email" value="<?php echo e($data->email); ?>" type="text">
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
　									<form action="<?php echo e(action('HomeController@delete', $data->id)); ?>" id="form_<?php echo e($data->id); ?>" method="post">
									<?php echo e(csrf_field()); ?>

									<?php echo e(method_field('delete')); ?>

									<a data-id="<?php echo e($data->id); ?>" class="btn btn-danger btn-xs" onclick="deletePost(this);">Delete</a>
									</form>
								</td>
                            </tr>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>