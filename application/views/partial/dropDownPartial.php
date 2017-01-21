
<?php if($opt->num_rows() < 1) {?>
<select name="pos" class="Departement form-control">
	<option selected hidden="hidden">Belum ada posisi</option>
</select>
<?php }else{ ?>
<select name="pos" class="Departement form-control">
	<?php foreach ($opt->result_array() as $row) {?>
	<option selected hidden="hidden">Choose Position</option>
	<option value="<?php echo $row['idposisi']?>"><?php echo $row['posisiname']?></option>
<?php 
	}
	} ?>
</select>