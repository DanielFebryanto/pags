<div class="">
<div class="page-title">
<div class="title_left">
<h3>
<?php echo "Title" ?>
                    <small>
                        <?php echo "Conter	" ?>
                    </small>
                </h3>
                        </div>
                        
                        <div class="title_right">
                            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search for...">
                                    <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                    <h2>Daily active users <small>Sessions</small></h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a href="#"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Settings 1</a>
                                                </li>
                                                <li><a href="#">Settings 2</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <table id="example" class="table table-striped responsive-utilities jambo_table">
                                        <thead>
                                            <tr class="headings">
                                                <!-- <th>
                                                    <input type="checkbox" class="tableflat">
                                                </th> -->
                                                <th>Nama Produk </th>
                                                <th>Kategori </th>
                                                <th>Stok </th>
                                                <th>Harga </th>
                                                <th>Status </th>
                                                <th class=" no-link last" style="width:150px"><span class="nobr">Action</span>
                                                </th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php foreach ($supp->result_array() as $row) {?>
                                            <tr class="even pointer">
                                                <!-- <td class="a-center ">
                                                    <input type="checkbox" class="tableflat">
                                                </td> -->
                                                <td class=" "><?php echo $row['namaPT'] ?></td>
                                                <td class=" "><?php echo $row['suppliertypename'] ?></td>
                                                <td class=" "><?php echo $row['email'] ?> pcs</td>
                                                <td class=" ">IDR <?php echo $row['kontak'] ?></td>
                                                <td class="a-right a-right "><?php echo $row['statusname'] ?></td>
                                                <td class=" last">
                                                    <a href="<?php echo base_url('supplier/edit/'.$row['idsupplier'].'') ?>" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                                                    <a href="<?php echo base_url('supplier/delete/'.$row['idsupplier'].'/'.$row['suppliertypename'].'') ?>" class="btn btn-danger" ><i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>

                        <br />
                        <br />
                        <br />

                    </div>
                </div>