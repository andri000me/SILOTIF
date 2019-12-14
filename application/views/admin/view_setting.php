<?php
if (!$this->session->userdata('id')) {
	redirect(base_url() . 'admin');
}
?>

<section class="content-header">
	<div class="content-header-left">
		<h1>Settings Section</h1>
	</div>
</section>

<section class="content" style="min-height:auto;margin-bottom: -30px;">
	<div class="row">
		<div class="col-md-12">
			<?php
			if ($this->session->flashdata('error')) {
				?>
				<div class="callout callout-danger">
					<p><?php echo $this->session->flashdata('error'); ?></p>
				</div>
			<?php
			}
			if ($this->session->flashdata('success')) {
				?>
				<div class="callout callout-success">
					<p><?php echo $this->session->flashdata('success'); ?></p>
				</div>
			<?php
			}
			?>

		</div>
	</div>
</section>

<section class="content">

	<div class="row">
		<div class="col-md-12">

			<div class="nav-tabs-custom">
				<ul class="nav nav-tabs">
					<li class="active"><a href="#tab_logo" data-toggle="tab">Logo</a></li>
					<li><a href="#tab_favicon" data-toggle="tab">Favicon</a></li>
					<li><a href="#tab_top_bar" data-toggle="tab">Top Bar</a></li>
					<li><a href="#tab_footer" data-toggle="tab">Footer</a></li>
					<li><a href="#tab_email" data-toggle="tab">Email</a></li>
					<li><a href="#tab_banner" data-toggle="tab">Banner</a></li>
					<li><a href="#tab_sidebar" data-toggle="tab">Sidebar</a></li>
					<li><a href="#tab_color" data-toggle="tab">Color</a></li>
				</ul>

				<div class="tab-content">
					<div class="tab-pane active" id="tab_logo">
						<?php echo form_open_multipart(base_url() . 'admin/setting/update', array('class' => 'form-horizontal')); ?>
						<div class="box box-info">
							<div class="box-body">
								<div class="form-group">
									<label for="" class="col-sm-2 control-label">Existing Photo</label>
									<div class="col-sm-6" style="padding-top:6px;">
										<img src="<?php echo base_url(); ?>public/uploads/<?php echo $setting['logo']; ?>" class="existing-photo" style="height:80px;">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-2 control-label">New Photo</label>
									<div class="col-sm-6" style="padding-top:6px;">
										<input type="file" name="photo_logo">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-2 control-label"></label>
									<div class="col-sm-6">
										<button type="submit" class="btn btn-success pull-left" name="form_logo">Update Logo</button>
									</div>
								</div>
							</div>
						</div>
						<?php echo form_close(); ?>
					</div>

					<div class="tab-pane" id="tab_favicon">
						<?php echo form_open_multipart(base_url() . 'admin/setting/update', array('class' => 'form-horizontal')); ?>
						<div class="box box-info">
							<div class="box-body">
								<div class="form-group">
									<label for="" class="col-sm-2 control-label">Existing Photo</label>
									<div class="col-sm-6" style="padding-top:6px;">
										<img src="<?php echo base_url(); ?>public/uploads/<?php echo $setting['favicon']; ?>" class="existing-photo" style="height:40px;">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-2 control-label">New Photo</label>
									<div class="col-sm-6" style="padding-top:6px;">
										<input type="file" name="photo_favicon">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-2 control-label"></label>
									<div class="col-sm-6">
										<button type="submit" class="btn btn-success pull-left" name="form_favicon">Update Favicon</button>
									</div>
								</div>
							</div>
						</div>
						<?php echo form_close(); ?>
					</div>
					<div class="tab-pane" id="tab_top_bar">
						<?php echo form_open(base_url() . 'admin/setting/update', array('class' => 'form-horizontal')); ?>
						<div class="box box-info">
							<div class="box-body">
								<div class="form-group">
									<label for="" class="col-sm-3 control-label">Top Bar Email </label>
									<div class="col-sm-6">
										<input type="text" class="form-control" name="top_bar_email" value="<?php echo $setting['top_bar_email']; ?>">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-3 control-label">Top Bar Phone Number </label>
									<div class="col-sm-6">
										<input type="text" class="form-control" name="top_bar_phone" value="<?php echo $setting['top_bar_phone']; ?>">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-3 control-label"></label>
									<div class="col-sm-6">
										<button type="submit" class="btn btn-success pull-left" name="form_top_bar">Update</button>
									</div>
								</div>
							</div>
						</div>
						<?php echo form_close(); ?>
					</div>

					<div class="tab-pane" id="tab_footer">
						<?php echo form_open_multipart(base_url() . 'admin/setting/update', array('class' => 'form-horizontal')); ?>
						<h3 class="sec_title">Call To Action Section</h3>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">CTA Text </label>
							<div class="col-sm-6">
								<textarea name="cta_text" class="form-control" cols="30" rows="10" style="height:80px;"><?php echo $setting['cta_text']; ?></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">CTA Button Text </label>
							<div class="col-sm-6">
								<input type="text" name="cta_button_text" class="form-control" value="<?php echo $setting['cta_button_text']; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">CTA Button URL </label>
							<div class="col-sm-6">
								<input type="text" name="cta_button_url" class="form-control" value="<?php echo $setting['cta_button_url']; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label"></label>
							<div class="col-sm-6">
								<button type="submit" class="btn btn-success pull-left" name="form_footer_cta">Update</button>
							</div>
						</div>
						<?php echo form_close(); ?>




						<?php echo form_open_multipart(base_url() . 'admin/setting/update', array('class' => 'form-horizontal')); ?>
						<h3 class="sec_title" style="margin-top:0px;">Call To Action Background Photo</h3>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">Existing Photo </label>
							<div class="col-sm-6">
								<img src="<?php echo base_url(); ?>public/uploads/<?php echo $setting['cta_background']; ?>" alt="" style="width:300px;">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label">New Photo </label>
							<div class="col-sm-6">
								<input type="file" name="photo" style="padding-top:5px;">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-3 control-label"></label>
							<div class="col-sm-6">
								<button type="submit" class="btn btn-success pull-left" name="form_footer_cta_background">Update</button>
							</div>
						</div>
						<?php echo form_close(); ?>



					</div>



					<div class="tab-pane" id="tab_email">
						<?php echo form_open(base_url() . 'admin/setting/update', array('class' => 'form-horizontal')); ?>
						<div class="box box-info">
							<div class="box-body">
								<div class="form-group">
									<label for="" class="col-sm-3 control-label">Send Email From <span>*</span></label>
									<div class="col-sm-4">
										<input type="text" class="form-control" name="send_email_from" maxlength="255" autocomplete="off" value="<?php echo $setting['send_email_from']; ?>">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-3 control-label">Receive Email To <span>*</span></label>
									<div class="col-sm-4">
										<input type="text" class="form-control" name="receive_email_to" maxlength="255" autocomplete="off" value="<?php echo $setting['receive_email_to']; ?>">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-3 control-label"></label>
									<div class="col-sm-6">
										<button type="submit" class="btn btn-success pull-left" name="form_email">Update</button>
									</div>
								</div>
							</div>
						</div>
						<?php echo form_close(); ?>
					</div>



					<div class="tab-pane" id="tab_banner">
						<div class="row">
							<div class="col-md-6">
								<table class="table table-bordered">
									<tr>
										<?php echo form_open_multipart(base_url() . 'admin/setting/update', array('class' => '')); ?>
										<td style="width:50%">
											<h4>About Page</h4>
											<p>
												<img src="<?php echo base_url() . 'public/uploads/' . $setting['banner_about']; ?>" alt="" style="width: 100%;height:auto;">
											</p>
										</td>
										<td style="width:50%">
											<h4>Change Banner</h4>
											Select Photo<input type="file" name="photo">
											<input type="submit" class="btn btn-primary btn-xs" value="Change" style="margin-top:10px;" name="form_banner_about">
										</td>
										<?php echo form_close(); ?>
									</tr>

									<tr>
										<?php echo form_open_multipart(base_url() . 'admin/setting/update', array('class' => '')); ?>
										<td style="width:50%">
											<h4>Event Page</h4>
											<p>
												<img src="<?php echo base_url() . 'public/uploads/' . $setting['banner_event']; ?>" alt="" style="width: 100%;height:auto;">
											</p>
										</td>
										<td style="width:50%">
											<h4>Change Banner</h4>
											Select Photo<input type="file" name="photo">
											<input type="submit" class="btn btn-primary btn-xs" value="Change" style="margin-top:10px;" name="form_banner_event">
										</td>
										<?php echo form_close(); ?>
									</tr>
									<!-- <tr>
                                            <?php echo form_open_multipart(base_url() . 'admin/setting/update', array('class' => '')); ?>
                                            <td style="width:50%">
                                                <h4>Contact Page</h4>
                                                <p>
                                                    <img src="<?php echo base_url() . 'public/uploads/' . $setting['banner_contact']; ?>" alt="" style="width: 100%;height:auto;">  
                                                </p>                                        
                                            </td>
                                            <td style="width:50%">
                                                <h4>Change Banner</h4>
                                                Select Photo<input type="file" name="photo">
                                                <input type="submit" class="btn btn-primary btn-xs" value="Change" style="margin-top:10px;" name="form_banner_contact">
                                            </td>
                                            <?php echo form_close(); ?>
                                        </tr>                                      -->

								</table>
							</div>

						</div>
					</div>

					<div class="tab-pane" id="tab_sidebar">
						<?php echo form_open(base_url() . 'admin/setting/update', array('class' => 'form-horizontal')); ?>
						<div class="box box-info">
							<div class="box-body">
								<h3 class="sec_title">Event Page - Sidebar Section</h3>
								<div class="form-group">
									<label for="" class="col-sm-3 control-label">Total Upcoming Events <span>*</span></label>
									<div class="col-sm-4">
										<input type="text" class="form-control" name="sidebar_total_upcoming_event" maxlength="255" autocomplete="off" value="<?php echo $setting['sidebar_total_upcoming_event']; ?>">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-3 control-label">Total Past Events <span>*</span></label>
									<div class="col-sm-4">
										<input type="text" class="form-control" name="sidebar_total_past_event" maxlength="255" autocomplete="off" value="<?php echo $setting['sidebar_total_past_event']; ?>">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-3 control-label">Heading - Upcoming Event <span>*</span></label>
									<div class="col-sm-4">
										<input type="text" class="form-control" name="sidebar_event_heading_upcoming" maxlength="255" autocomplete="off" value="<?php echo $setting['sidebar_event_heading_upcoming']; ?>">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-3 control-label">Heading - Past Event <span>*</span></label>
									<div class="col-sm-4">
										<input type="text" class="form-control" name="sidebar_event_heading_past" maxlength="255" autocomplete="off" value="<?php echo $setting['sidebar_event_heading_past']; ?>">
									</div>
								</div>

								<div class="form-group">
									<label for="" class="col-sm-3 control-label"></label>
									<div class="col-sm-6">
										<button type="submit" class="btn btn-success pull-left" name="form_sidebar">Update</button>
									</div>
								</div>
							</div>
						</div>
						<?php echo form_close(); ?>
					</div>



					<div class="tab-pane" id="tab_color">
						<?php echo form_open(base_url() . 'admin/setting/update', array('class' => 'form-horizontal')); ?>
						<div class="box box-info">
							<div class="box-body">
								<div class="form-group">
									<label for="" class="col-sm-2 control-label">Color </label>
									<div class="col-sm-4">
										<input type="text" name="front_end_color" class="form-control jscolor" value="<?php echo $setting['front_end_color']; ?>">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-2 control-label"></label>
									<div class="col-sm-6">
										<button type="submit" class="btn btn-success pull-left" name="form_color">Update</button>
									</div>
								</div>
							</div>
						</div>
						<?php echo form_close(); ?>
					</div>











				</div>
			</div>


		</div>
	</div>

</section>