<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $title ?></title>

    <!-- Bootstrap core CSS -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/vendors/bootstrap-wysihtml5/src/bootstrap-wysihtml5.css">
    <link href="<?php echo base_url() ?>assets/fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/animate.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/plugins/iCheck/flat/blue.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/dist/css/AdminLTE.min.css">
    <!-- Custom styling plus plugins -->
    <link href="<?php echo base_url() ?>assets/css/custom.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/icheck/flat/green.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/datatables/tools/css/dataTables.tableTools.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/editor/external/google-code-prettify/prettify.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/select/select2.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/calendar/fullcalendar.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/css/calendar/fullcalendar.print.css" rel="stylesheet" media="print">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/switchery/switchery.min.css" />
    <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
    <style type="text/css">
        .table>tbody>tr>td {
            vertical-align: middle !important;
        }
    </style>

    <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script type="text/javascript">
    function loadCart()	{
			$('#jmlcart2').load('<?php echo base_url(); ?>index.php/admin/load_add_jurnalis');
			$('#keranjang').load('<?php echo base_url(); ?>index.php/admin/load_add_jurnalis');
			$('#gambar').load('<?php echo base_url(); ?>index.php/jurnalis/load_add_jurnalis');
		}
		setInterval (loadCart, 5000);
</script>
<script type="text/javascript">
    var status = "";
		function tampilForm(frm){
			if(status=="")
			{
				$(frm).slideDown();
				status = "isi";
			}
			else
			{
				$(frm).slideUp();
				status = "";
			}
			
		}
		function tutupForm(frm){
			$(frm).slideUp();
			status = "";
		}
</script>
</head>

<body class="nav-md">

    <div class="container body">


        <div class="main_container">

            <div class="col-md-3 left_col">
                <!--SIDEBAR-->
                <?php echo $_sidebar ?>
            </div>

            <!-- top navigation -->
            <div class="top_nav">

                <!--HEADER-->
                <?php echo $_header ?>

            </div>
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">
                <!--CONTENT-->
                <?php echo $_content ?>
                    <!-- footer content -->
                
                <!--FOOTER -->
                <?php echo $_footer ?>
                <!-- /footer content -->
                </div>
                <!-- /page content -->
            </div>

        </div>
<div id="CalenderModalNew" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title" id="myModalLabel">New Calender Entry</h4>
                            </div>
                            <div class="modal-body">
                                <div id="testmodal" style="padding: 5px 20px;">
                                    <form id="antoform" class="form-horizontal calender" role="form">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Title</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="title" name="title">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Description</label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" style="height:55px;" id="descr" name="descr"></textarea>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default antoclose" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary antosubmit">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="CalenderModalEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title" id="myModalLabel2">Edit Calender Entry</h4>
                            </div>
                            <div class="modal-body">

                                <div id="testmodal2" style="padding: 5px 20px;">
                                    <form id="antoform2" class="form-horizontal calender" role="form">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Title</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="title2" name="title2">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Description</label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" style="height:55px;" id="descr2" name="descr"></textarea>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default antoclose2" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary antosubmit2">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="fc_create" data-toggle="modal" data-target="#CalenderModalNew"></div>
                <div id="fc_edit" data-toggle="modal" data-target="#CalenderModalEdit"></div>
        <div id="custom_notifications" class="custom-notifications dsp_none">
            <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
            </ul>
            <div class="clearfix"></div>
            <div id="notif-group" class="tabbed_notifications"></div>
        </div>

        <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/nprogress.js"></script>
    <script src="<?php echo base_url() ?>assets/js/moment.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/calendar/fullcalendar.min.js"></script>
        <!-- chart js -->
        <script src="<?php echo base_url() ?>assets/js/chartjs/chart.min.js"></script>
        <!-- bootstrap progress js -->
        <script src="<?php echo base_url() ?>assets/js/progressbar/bootstrap-progressbar.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/nicescroll/jquery.nicescroll.min.js"></script>
        <!-- icheck -->
        <script src="<?php echo base_url() ?>assets/js/icheck/icheck.min.js"></script>

        <script src="<?php echo base_url() ?>assets/js/custom.js"></script>
        <script src="<?php echo base_url() ?>assets/js/cropping/cropper.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/cropping/main.js"></script>
        <script src="<?php echo base_url() ?>assets/js/tags/jquery.tagsinput.min.js"></script>
        <script src="<?php echo base_url()?>assets/docs.min.js"></script>
        <!-- Datatables -->
        <script src="<?php echo base_url() ?>assets/js/datatables/js/jquery.dataTables.js"></script>
        <script src="<?php echo base_url() ?>assets/js/datatables/tools/js/dataTables.tableTools.js"></script>
        <!-- daterangepicker -->
        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/moment.min2.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/datepicker/daterangepicker.js"></script>
    
        <script>
            $(document).ready(function () {
                $('input.tableflat').iCheck({
                    checkboxClass: 'icheckbox_flat-green',
                    radioClass: 'iradio_flat-green'
                });
            });

            var asInitVals = new Array();
            $(document).ready(function () {
                var oTable = $('#example').dataTable({
                    "oLanguage": {
                        "sSearch": "Search all columns:"
                    },
                    "aoColumnDefs": [
                        {
                            'bSortable': false,
                            'aTargets': [0]
                        } //disables sorting for column one
            ],
                    'iDisplayLength': 12,
                    "sPaginationType": "full_numbers",
                    "dom": 'T<"clear">lfrtip',
                    "tableTools": {
                        "sSwfPath": "<?php echo base_url('assets/js/Datatables/tools/swf/copy_csv_xls_pdf.swf'); ?>"
                    }
                });
                $("tfoot input").keyup(function () {
                    /* Filter on the column based on the index of this element's parent <th> */
                    oTable.fnFilter(this.value, $("tfoot th").index($(this).parent()));
                });
                $("tfoot input").each(function (i) {
                    asInitVals[i] = this.value;
                });
                $("tfoot input").focus(function () {
                    if (this.className == "search_init") {
                        this.className = "";
                        this.value = "";
                    }
                });
                $("tfoot input").blur(function (i) {
                    if (this.value == "") {
                        this.className = "search_init";
                        this.value = asInitVals[$("tfoot input").index(this)];
                    }
                });
            });
        </script>
        
    <script src="<?php echo base_url() ?>assets/vendors/ckeditor/ckeditor.js"></script>
        
       
		<script src="<?php echo base_url() ?>assets/vendors/bootstrap-wysihtml5/src/bootstrap-wysihtml5.js"></script>
    <script src="<?php echo base_url() ?>assets/vendors/ckeditor/ckeditor.js"></script>
		<script src="<?php echo base_url() ?>assets/vendors/ckeditor/adapters/jquery.js"></script>
    
    <script>
        $(function() {
            // Bootstrap
            $('#bootstrap-editor').wysihtml5();

            // Ckeditor standard
            $( 'textarea#ckeditor_standard' ).ckeditor({width:'98%', height: '150px', toolbar: [
				{ name: 'document', items: [ 'Source', '-', 'NewPage', 'Preview', '-', 'Templates' ] },	// Defines toolbar group with name (used to create voice label) and items in 3 subgroups.
				[ 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo' ],			// Defines toolbar group without name.
				{ name: 'basicstyles', items: [ 'Bold', 'Italic' ] }
			]});
            $( 'textarea#ckeditor_full' ).ckeditor({width:'98%', height: '150px'});
        });

        // Tiny MCE
        tinymce.init({
		    selector: "#tinymce_basic",
		    plugins: [
		        "advlist autolink lists link image charmap print preview anchor",
		        "searchreplace visualblocks code fullscreen",
		        "insertdatetime media table contextmenu paste"
		    ],
		    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
		});

		// Tiny MCE
        tinymce.init({
		    selector: "#tinymce_full",
		    plugins: [
		        "advlist autolink lists link image charmap print preview hr anchor pagebreak",
		        "searchreplace wordcount visualblocks visualchars code fullscreen",
		        "insertdatetime media nonbreaking save table contextmenu directionality",
		        "emoticons template paste textcolor"
		    ],
		    toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
		    toolbar2: "print preview media | forecolor backcolor emoticons",
		    image_advtab: true,
		    templates: [
		        {title: 'Test template 1', content: 'Test 1'},
		        {title: 'Test template 2', content: 'Test 2'}
		    ]
		});

        </script>
</body>

</html>