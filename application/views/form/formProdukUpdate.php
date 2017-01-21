
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
						Create New Product
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
					<form id="demo-form2" action="<?php echo base_url('produk/update') ?>" method="post"
						class="form-horizontal form-label-left">
                        <?php foreach ($produk->result_array() as $row) {?>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12"
								Kategori Produk <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<select name="produkKat" required="required"
									class="form-control col-md-7 col-xs-12">
									<option value="<?php echo $row['idprodukkat'] ?>" selected hidden> <?php echo $row['produkkatname'] ?> </option>
									<?php foreach ($produkKat->result_array() as $kat) {?>
										<option value="<?php echo $kat['idprodukkat'] ?>"><?php echo $kat['produkkatname'] ?> </option>
									<?php } ?> 
									</select>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12"
								for="first-name">Nama Produk <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" value="<?php echo $row['namaproduk'] ?>" name="namaProduk" required="required"
									class="form-control col-md-7 col-xs-12">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12"
								for="last-name">Stok <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" name="stok" value="<?php echo $row['stok'] ?>"
									required="required" class="form-control col-md-7 col-xs-12">
							</div>
						</div>
						<div class="form-group">
							<label for="middle-name"
								class="control-label col-md-3 col-sm-3 col-xs-12">Harga / Box</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input id="middle-name" class="form-control col-md-7 col-xs-12"
									value="<?php echo $row['harga'] ?>" type="text" name="harga">
							</div>
						</div>
						
						<div class="ln_solid"></div>
						<div class="form-group">
							<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <input type="hidden" name="id" value="<?php echo $row['idproduk'] ?>" />
								<button type="submit" class="btn btn-primary">Cancel</button>
								<button type="submit" class="btn btn-success">Submit</button>
							</div>
						</div>
                        <?php } ?>
					</form>
				</div>
			</div>
		</div>
	</div>


</div>
