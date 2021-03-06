<div class="container">
<ul class="nav nav-tabs">
 		<li><a href="<?php echo base_url('account/orders')?>"><i class="fa fa-home"></i> Home</a></li>
 		<li><a href="<?php echo base_url('billing')?>"><i class="fa fa-exclamation"></i> Orders</a></li>
 		<li><a href="<?php echo base_url('billing/view')?>"><i class="fa fa-list"></i> Detail orders</a></li>
 		
 		
</ul>
	<div class="well">


	<?php echo form_open('billing/search', array('method' => 'GET', 'class' => 'navbar-form navbar-left', 'role' => 'Search','style'=>'float:right;')); ?>
			<div class="form-group">
			   <?php echo form_input('keyword', $this->input->get('keyword'), 'class="form-control" placeholder="Search"'); ?>
			</div>		
	<?php echo form_close(); ?>


		<table class="table table-hover text-center">
			<tr>
				<td>Customer Name</td>
				<td>Order Date</td>
				<td>Payment Type</td>
				<td>Action</td>
			</tr>

			<?php foreach ($results as $data):?>
				<tr>
					<td><?php echo $data->customer_name;?></td>
					<td><?php echo date("M / d / Y",strtotime($data->date));?></td>
					<td><?php echo $data->payment;?></td>
					<td><a href="<?php echo base_url('billing/view_id/'.$data->oid);?>"><i class="fa fa-cart-plus fa-2x"></i></a> &nbsp
					 <a href="<?php echo base_url('print_pdf/download_pdf/'.$data->oid)?>"><i class="fa fa-download fa-2x"></i></a></td>
				</tr>


			<?php endforeach;?>
		</table>
		<?php echo $links;?>
	</div>


</div>
