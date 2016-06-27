<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>#?!_!?#</title>
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css" type="text/css" media="screen">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css" type="text/css" media="screen">	
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/font-awesome.min.css" type="text/css" media="screen">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/fonts/opensans/open-sans.css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" type="text/css" media="screen">	
	<script>
		var baseurl= "<?php echo base_url();?>";
	</script>
</head>
<body>
	<div class="container">
		<h1>#?!_!?#</h1>
		<div class="row">
			<div class="col-md-12">
				<div class="content">
					<textarea></textarea>
					<div class="content-img">
						<!-- Nav tabs -->
						<ul class="nav nav-tabs" role="tablist" id="imgTabs">
							<li role="presentation" class="active"><a href="#newupload" aria-controls="newgalery" role="tab" data-toggle="tab">New Upload</a></li>
							<li role="presentation"><a href="#galery" aria-controls="galery" role="tab" data-toggle="tab">Galery</a></li>
						</ul>
						<!-- Tab panes -->
						<div class="tab-content">
							<div role="tabpanel" class="tab-pane active" id="newupload">
								<div class="content-img">
									<div class="row">								
										<div class="hasil"></div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-upload">
												<form id="uploadfoto" id="uploadfoto" method="post" enctype="multipart/form-data" class="form-inline">
													<div class="form-group">
														File: <input type="file" name="myfile" id="myfile"/ class="form-control">
														<button type="submit" onclick="javascript:simpanfoto();" class="btn btn-success">Upload now !</button>
													</div> 
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane" id="galery">
								<img data-url="<?=base_url()?>assets/files/img/sample.jpg" src="<?=base_url()?>assets/files/img/sample.jpg" alt="sample-img" class="j-pick-img one-img">
							</div>
						</div>

					</div>	
				</div>
				<div class="content">
					<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  '<!> <strong>' . CI_VERSION . '</strong>' : '' ?></p>
				</div>
			</div>
		</div>
	</div>
</body>
	<script src="<?=base_url(); ?>assets/js/jquery-1.12.0.min.js"></script>
	<script src="<?=base_url(); ?>assets/js/bootstrap.min.js"></script>
	<script src="<?=base_url(); ?>assets/js/jquery-form.min.js"></script>
	<script src="<?=base_url(); ?>assets/js/myscripts.js"></script>
	<script src="<?=base_url(); ?>assets/js/tinymce/tinymce.min.js"></script>
	
</html>