
<div class="">

<?php $this->load->view('search')?>
                    <div class="clearfix"></div>

	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2>Create New Employee</h2>
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
					<form id="demo-form">
						<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
							<input type="text" class="form-control has-feedback-left"
								id="aaaaa" placeholder="Nama Depan" name="namaDepan"> <span
								class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
						</div>

						<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
							<input type="text" class="form-control" id="inputSuccess3"
								placeholder="Nama Belakang" name="namaBelakang"> <span
								class="fa fa-user form-control-feedback right"
								aria-hidden="true"></span>
						</div>

						<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
							<input type="text" class="form-control has-feedback-left"
								id="inputSuccess4" placeholder="Email" name="email"> <span
								class="fa fa-envelope form-control-feedback left"
								aria-hidden="true"></span>
						</div>

						<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
							<input type="text" class="form-control" id="inputSuccess5"
								placeholder="Phone" name="kontak"> <span
								class="fa fa-phone form-control-feedback right"
								aria-hidden="true"></span>
						</div>
						<div class="clearfix"></div>
						<div class="form-group col-md-offset 2">
							<div class="col-md-6 col-sm-6 col-xs-12">
								<select id="Departement" name="dep" class="Departement form-control">
									<option selected hidden="hidden">Choose Departement</option>
									<?php foreach ($Dep->result_array() as $row) {?>
									<option value="<?php echo $row['id']?>"><?php echo $row['depName']?></option>
									<?php }?>
								</select>
							</div>
						</div>
						<div style="margin-top: -20px;" class="form-group col-md-offset">
							<div class="posisi col-md-6 col-sm-6 col-xs-12">
								<select name="pos" class="form-control ">
									<option class="noClick" selected hidden="hidden">Choose Position</option>
								</select>
							</div>
						</div>
						<div class="clearfix"></div>
						<br />
						<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
							<input type="text"
								class="form-control has-feedback-left date-picker" id="birthday"
								placeholder="Date Of Birth"> <span
								class="fa fa-calendar form-control-feedback left"
								aria-hidden="true"></span>
						</div>
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
						<br /> <span class="btn btn-primary">validate form</span>

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
// $(function(){
// 	$(".Departement").change(function () {
// 		alert("ddd");
//         var klikID = $(".Departement").val();
//         $.ajax({
//             url: "http://localhost/ajax/requestPosition"+ klikID,
//             dataType: "JSON",
//         type: "GET",
//         success: function (data) {
//                 $("#posisi").html("");
//                     var selectApp ="<option value='"+value.id+"' >"+value.jabatanName+"</option>";
//                     $("#posisi").append(selectApp);
//                 });
//         }
//         });
// });
	</script>