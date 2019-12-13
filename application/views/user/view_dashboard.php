<?php
if (!$this->session->userdata('id')) {
  redirect(base_url() . 'admin');
}
?>
<section class="content-header">
  <h1>Dashboard</h1>
</section>

<section class="content">

  <div class="row">
    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-green"><i class="fa fa-hand-o-right"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Total Events</span>
          <span class="info-box-number"><?php echo $total_event; ?></span>
        </div>
      </div>
    </div>
  </div>


</section>