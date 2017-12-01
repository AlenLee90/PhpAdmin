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
										<th data-orderable="false">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
									<?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                    <tr>
										<td><?php echo e($data->id); ?></td>
                                        <td><?php echo e($data->amount); ?></td>
                                        <td><?php echo e($data->category_id); ?></td>
                                        <td><?php echo e($data->consumption_flag); ?></td>
                                        <td><?php echo e($data->currency_id); ?></td>
                                        <td><?php echo e($data->location); ?></td>
										<td><?php echo e($data->comment); ?></td>
										<td><?php echo e($data->created_at); ?></td>
										<td><?php echo e($data->updated_at); ?></td>
										<td>
											<button type="button" class="btn btn-primary btn-xs">Edit</button>
											<button type="button" class="btn btn-danger btn-xs">Delete</button>
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