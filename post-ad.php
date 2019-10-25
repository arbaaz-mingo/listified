<?php include('header-inner.php');?>
<div class="breadcrumbarea">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<ol class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li class="active">Post an Ad</li>
				</ol>
			</div>
		</div>
	</div>
</div>

<section class="post-ad-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-9 col-md-12 col-sm-12 col-12">
				<div class="ad-wrapper">
					<div class="ad-head">
						<div class="ad-title">
							<h2>Post A Free Ad</h2>
						</div>
					</div>

					<div class="ad-form">
						<form class="post-ad">
							<div class="form-group row">
								<div class="col-sm-12">
									<div class="section-ad-title">
										<h3><i class="fas fa-mail-bulk"></i> Ad Information</h3>
									</div>
								</div>
							</div>
							<div class="form-group row">
								<div class="col-sm-3 col-12">
									<label class="control-label">Category<span> *</span></label>
								</div>
								<div class="col-sm-9 col-12">
									<select data-live-search="true"  class="form-control selectpicker">
										<option value="">Select Category</option>
										<option value="1">Mobile &amp; Tablets</option>
										<option value="2">Electronics</option>
									</select>
								</div>
							</div>
							
							<div class="form-group row">
								<div class="col-sm-3 col-12">
									<label class="control-label">Ad Type<span> *</span></label>
								</div>
								<div class="col-sm-9 col-12">
									<input type="radio" class="form-control" name="ad_type"> Personal
									<input type="radio" class="form-control" name="ad_type"> Business
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php include('footer.php');?>