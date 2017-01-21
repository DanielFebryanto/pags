
<div class="">

                    <?php $this->load->view('search')?>
                    <div class="clearfix"></div>

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
					<form id="demo-form2" data-parsley-validate
						class="form-horizontal form-label-left">
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12"
								for="first-name">Product Name<span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" id="first-name" required="required"
									class="form-control col-md-7 col-xs-12">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12"
								for="last-name">Product Stock <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" id="last-name" name="last-name"
									required="required" class="form-control col-md-7 col-xs-12">
							</div>
						</div>
						<div class="form-group">
							<label for="middle-name"
								class="control-label col-md-3 col-sm-3 col-xs-12">Product Price / Box</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input id="middle-name" class="form-control col-md-7 col-xs-12"
									type="text" name="middle-name">
							</div>
						</div>
						
<!-- <button type="button" class="btn btn-primary produkBtn" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-plus"></i> Produk</button>-->
<button type="button" class="produkBtn btn btn-primary" data-toggle="modal"><i class="fa fa-plus"></i> Produk</button>
						 <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nama Produk</th>
                                                <th>Harga</th>
                                                <th>Qty</th>
                                                <th>SubTotal</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                                <td>@mdo</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3"> </td>
                                                <td>Total</td>
                                                <td>RP. 2.000.000</td>
                                            </tr>
                                        </tbody>
                                    </table>
									
						<div class="ln_solid"></div>
						<div class="form-group">
							<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
								<button type="submit" class="btn btn-primary">Cancel</button>
								<button type="submit" class="btn btn-success">Submit</button>
							</div>
						</div>
					</form>	
				</div>
			</div>
		</div>
	</div>

                                <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" id="modal_produk">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">

                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                                </button>
                                                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="x_content">
													<table id="example" class="table table-striped responsive-utilities jambo_table">
														<thead>
															<tr class="headings">
																<th>Nama Produk</th>
																<th>Kategori</th>
																<th>Harga</th>
																<th class=" no-link last"><span class="nobr">Action</span></th>
															</tr>
														</thead>

														<tbody id="modal_body">
														</tbody>

													</table>
												</div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>

</div>
<script>

$(function(){
	$("#example").datatable(){
			$.ajax({
			type: "GET",
			url: "<?php echo base_url('ajax/getProduk') ?>",
			success: function(msg){
				$("#modal_body").append("<tr>"+
				"<td class=''>121000040</td>"+
				"<td class=''>121000040</td>"+
				"<td class=''>121000040</td>"+
				"<td class='last'><button class='btn btn-success'><i class='fa fa-plus'></i> </td>"+
				"</tr>");
			}
			});
		};
	$(".produkBtn").click(function(){
	$("#modal_produk").modal('show');
		
	});
});
</script>