
<div class="">

                    <?php $this->load->view('search')?>
                    <div class="clearfix"></div>
<?php if($this->session->flashdata('success')){ ?>
<div class="alert alert-success alert-dismissible fade in" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
    </button>
    <strong>Success</strong> <?php echo $this->session->flashdata('success') ?>
</div>
	
<?php } if($this->session->flashdata('error')){ ?>
	<div class="alert alert-danger alert-dismissible fade in" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
        </button>
        <strong>Error</strong> <?php echo $this->session->flashdata('error') ?>
     </div>
<?php } ?>
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2>
						Supplier <small>Create New Supplier</small>
					</h2>
					<ul class="nav navbar-right panel_toolbox">
						<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
						</li>
						<li class="dropdown"><a href="#" class="dropdown-toggle"
							data-toggle="dropdown" role="button" aria-expanded="false"><i
								class="fa fa-wrench"></i></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#">Settings 1</a></li>
								<li><a href="#">Settings 2</a></li>
							</ul></li>
						<li><a class="close-link"><i class="fa fa-close"></i></a></li>
					</ul>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<br />
					<form id="demo-form2" method="post" class="form-horizontal form-label-left" action="<?php echo base_url('supplier/save') ?>">

						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Supplier Type</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<select name="supType" class="form-control">
									<option selected hidden="hidden">Choose option</option>
									<?php foreach ($supType->result_array() as $row) {?>
									<option value="<?php echo $row['idsuppliertype']?>"><?php echo $row['suppliertypename']?></option>
									<?php }?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12"
								for="first-name">Supplier Name <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" id="first-name" required="required" name="nama"
									class="form-control col-md-7 col-xs-12">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12"
								for="last-name">Supplier Email <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" id="last-name" name="email"
									required="required" class="form-control col-md-7 col-xs-12">
							</div>
						</div>
						<div class="form-group">
							<label for="middle-name"
								class="control-label col-md-3 col-sm-3 col-xs-12">Supplier
								Contact</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input id="middle-name" class="form-control col-md-7 col-xs-12"
									type="text" name="kontak">
							</div>
						</div>
						<div class="form-group">
							<label for="middle-name"
								class="control-label col-md-3 col-sm-3 col-xs-12">Address</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input id="middle-name" class="form-control col-md-7 col-xs-12"
									type="text" name="alamat">
							</div>
						</div>
						
						<div class="ln_solid"></div>
						<div class="form-group">
							<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
								<a class="btn btn-primary" href="<?php echo base_url('supplier/save')?>">Back</a>
								<button type="submit" id="supplierSubmit" class="btn btn-success">Save</button>
							</div>
						</div>

					</form>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/js/appValidation.js"></script>
	<script type="text/javascript">
                        $(document).ready(function () {
                            $('#birthday').daterangepicker({
                                singleDatePicker: true,
                                calender_style: "picker_1"
                            }, function (start, end, label) {
                                console.log(start.toISOString(), end.toISOString(), label);
                            });
                        });
                    </script>


</div>
