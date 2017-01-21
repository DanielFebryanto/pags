
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
					<h2>Edit Karyawan</h2>
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

					<!-- start form for validation -->
					<form id="demo-form" action="<?php echo base_url('employee/update') ?>" method="post">
                    <?php foreach ($Emp->result_array() as $data) {?>
						<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
							<input type="text" class="form-control has-feedback-left"
								id="aaaaa" placeholder="Fullname" value="<?php echo $data['namapanjang'] ?>" name="nama"> <span
								class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
						</div>

						<!-- <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
							<input type="text" class="form-control" id="inputSuccess3"
								placeholder="Nama Belakang" name="namaBelakang"> <span
								class="fa fa-user form-control-feedback right"
								aria-hidden="true"></span>
						</div> -->

						<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
							<input type="text" class="form-control has-feedback-left"
								id="inputSuccess4" placeholder="Email" value="<?php echo $data['email'] ?>" name="email"> <span
								class="fa fa-envelope form-control-feedback left"
								aria-hidden="true"></span>
						</div>

						<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
							<input type="text" class="form-control" id="inputSuccess5"
								placeholder="Phone" name="kontak" value="<?php echo $data['kontak'] ?>"> <span
								class="fa fa-phone form-control-feedback right"
								aria-hidden="true"></span>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
							<input type="text" class="form-control" id="inputSuccess3"
								placeholder="Alamat" name="alamat" value="<?php echo $data['alamat'] ?>"> <span
								class="fa fa-address form-control-feedback right"
								aria-hidden="true"></span>
						</div>
						<div class="clearfix"></div>
						<div class="form-group col-md-offset 2">
							<div class="col-md-6 col-sm-6 col-xs-12">
								<select id="dep" name="dep" class="Departement form-control">
									<option value="<?php echo $data['iddepartement'] ?>" selected hidden="hidden"><?php echo $data['departementname'] ?></option>
									<?php foreach ($Dep->result_array() as $row) {?>
									<option value="<?php echo $row['iddepartement']?>"><?php echo $row['departementname']?></option>
									<?php }?>
								</select>
							</div>
						</div>
						<div style="margin-top: -20px;" class="form-group col-md-offset">
							<div class="posisi col-md-6 col-sm-6 col-xs-12">
								<select name="pos" class="form-control ">
								<option class="noClick" value="<?php echo $data['idposisi'] ?>" selected hidden="hidden"><?php echo $data['posisiname'] ?></option>
								</select>
							</div>
						</div>
						<div class="clearfix"></div>
						<br />
						<!-- <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
							<input type="text"
								class="form-control has-feedback-left date-picker" id="birthday"
								placeholder="Date Of Birth"> <span
								class="fa fa-calendar form-control-feedback left"
								aria-hidden="true"></span>
						</div> -->
						<div class="clearfix"></div>
						<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
							Gender
							<p class="offset-2">
								M: <input type="radio" class="flat" name="gender" id="genderM"
									value="M" checked required /> F: <input type="radio"
									class="flat" name="gender" id="genderF" value="F" />
							</p>
						</div>

						<div class="clearfix"></div>
						<br /> 
						<input type="hidden" name="id" value="<?php echo $data['idkaryawan'] ?>" />
						<button class="btn btn-primary">Save</button>
                    <?php } ?>
					</form>
					<!-- end form for validations -->

				</div>
			</div>
		</div>
	</div>
<div class="ss">
</div>
	<script type="text/javascript">
                        $(document).ready(function () {
                            $('#birthday').daterangepicker({
                                singleDatePicker: true,
                                calender_style: "picker_4",
                                chooseYear:true
                            }, function (start, end, label) {
                                console.log(start.toISOString(), end.toISOString(), label);
                            });
                        });
                    </script>
</div>
<script src="<?php echo base_url("assets/js/appValidation.js")?>">
    
   	$(".noClick").click(function(){
		alert("Pilih Departemen Dulu!");
   	});
</script>
<script>
 $(function(){
	$(".Departement").change(function () {
 		alert("ddd");
         var klikID = $(".Departement").val();
         $.ajax({
             url: "http://localhost/ajax/requestPosition"+ klikID,
             dataType: "JSON",
         type: "GET",
         success: function (data) {
			 console.log("data : ", data);
                 $("#posisi").html("");
                     var selectApp ="<option value='"+value.idposisi+"' >"+value.posisiname+"</option>";
                     $("#posisi").append(selectApp);
                 });
         }
        });
 });
	</script>