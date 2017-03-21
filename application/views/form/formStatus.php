
<div class="">

                    <?php $this->load->view('search')?>
                    <div class="clearfix"></div>
<div class="alert alert-success alert-dismissible fade out asd" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
    </button>
    <strong>Success</strong><div id="errMessage">

	</div> 
</div>
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2>
						Transaksi Baru
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
					<form
						class="form-horizontal form-label-left">
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12"
								for="first-name">Status Name<span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" id="statusName"
									class="form-control col-md-7 col-xs-12">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12"
								for="last-name">Description<span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" id="description" name="last-name"
									class="form-control col-md-7 col-xs-12">
							</div>
						</div>
						
<!-- <button type="button" class="btn btn-primary produkBtn" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-plus"></i> Produk</button>-->
<button type="button" class="produkBtn btn btn-primary " data-toggle="modal"><i class="fa fa-plus"></i> Produk</button>
						 
									
						<div class="ln_solid"></div>
						<div class="form-group">
							<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
								<button type="submit" class="btn btn-primary">Cancel</button>
								<button class="btn btn-success statBtn">Submit</button>
							</div>
						</div>
					</form>	
				</div>
			</div>
		</div>
	</div>
</div>
<script>

$(function(){
	$('.statBtn').click(function(){
		var stat = $('#statusName');
		var desc = $('#description');
		if(stat.val() == ''|| desc == ''){
			$('#errMessage').append('Status Tidak Boleh Kosong');
			return false;
		}else{
			 $.get("<?php echo base_url('localhost/status/insert') ?>", function(stat){
            	alert("Data: " + stat + "\nStatus: ");
        });
		}
	});
});
</script>