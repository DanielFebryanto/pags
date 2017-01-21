<!--inner block start here-->
<div class="inner-block">
<div class="market-updates">
			<h4>Create New Supplier</h4>
<hr/>
		<form class="form-horizontal">
			<div class="form-group">
				<label class="control-label col-md-3 col-sm-3 col-xs-12"
					for="first-name">Supplier Name <span class="required">*</span>
				</label>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<input type="text" id="name" required="required"
						class="form-control col-md-7 col-xs-12" name="name">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-3 col-sm-3 col-xs-12">Select</label>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<select name="type" class="form-control">
						<option selected hidden="hidden">Choose option</option>
						<?php foreach ($SupType->result_array() as $row) {?>
						<option value="<?php echo $row['id']?>"><?php echo $row['typeName']?></option>
						<?php }?>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="middle-name"
					class="control-label col-md-3 col-sm-3 col-xs-12">Email Address</label>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<input id="middle-name" class="form-control col-md-7 col-xs-12"
						type="email" name="email">
				</div>
			</div>
			<div class="form-group">
				<label for="middle-name"
					class="control-label col-md-3 col-sm-3 col-xs-12">Kontak</label>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<input id="middle-name" class="form-control col-md-7 col-xs-12"
						type="text" name="email">
				</div>
			</div>
			<div class="form-group">
				<label for="middle-name"
					class="control-label col-md-3 col-sm-3 col-xs-12">Alamat</label>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<input id="middle-name" class="form-control col-md-7 col-xs-12"
						type="text" name="email">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-3 col-sm-3 col-xs-12">Gender</label>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<div id="gender" class="btn-group" data-toggle="buttons">
						<label class="btn btn-default" data-toggle-class="btn-primary"
							data-toggle-passive-class="btn-default"> <input type="radio"
							name="gender" value="male"> &nbsp; Male &nbsp;
						</label> <label class="btn btn-primary active"
							data-toggle-class="btn-primary"
							data-toggle-passive-class="btn-default"> <input type="radio"
							name="gender" value="female" checked> Female
						</label>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-3 col-sm-3 col-xs-12">Date Of
					Birth <span class="required">*</span>
				</label>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<input id="birthday"
						class="date-picker form-control col-md-7 col-xs-12"
						required="required" type="text">
				</div>
			</div>
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
<script>
	$(function(){
		$("#first-name").change(function(){
			alert("ok");
		});
	});
</script>