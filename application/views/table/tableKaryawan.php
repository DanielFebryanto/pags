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
                                                <th>Nama Panjang </th>
                                                <th>Departement </th>
                                                <th>Posisi </th>
                                                <th>Email </th>
                                                <th>Kontak </th>
                                                <th>Jenis Kelamin </th>
                                                <th class=" no-link last"><span class="nobr">Action</span>
                                                </th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php foreach ($Emp->result_array() as $row) {?>
                                            <tr class="even pointer">
                                                <!-- <td class="a-center ">
                                                    <input type="checkbox" class="tableflat">
                                                </td> -->
                                                <td class=" "><?php echo $row['namapanjang'] ?></td>
                                                <td class=" "><?php echo $row['departementname'] ?></td>
                                                <td class=" "><?php echo $row['posisiname'] ?></td>
                                                <td class=" "><?php echo $row['email'] ?></td>
                                                <td class=" "><?php echo $row['kontak'] ?></td>
                                                <td class="a-right a-right "><?php echo $row['gender'] ?></td>
                                                <td class=" last">
                                                    <a href="<?php echo base_url('employee/edit/'.$row['idkaryawan'].'') ?>" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                                                    <a href="<?php echo base_url('employee/delete/'.$row['idkaryawan'].'') ?>" class="btn btn-danger" ><i class="fa fa-trash"></i></a>
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