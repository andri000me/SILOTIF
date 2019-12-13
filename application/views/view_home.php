<!--Slider Start-->
<div class="slider">
    <div class="slide-carousel slider-one owl-carousel">
        <?php
        foreach ($sliders as $slider) {
            ?>
            <div class="slider-item flex" style="background-image:url(<?php echo base_url(); ?>public/uploads/<?php echo $slider['photo']; ?>);">
                <div class="bg-slider"></div>
                <div class="container">
                    <div class="row">
                        <div class="<?php if ($slider['position'] == 'Left') {
                                            echo 'col-lg-6 col-md-9 col-12';
                                        } else {
                                            echo 'offset-lg-6 col-lg-6 offset-md-3 col-md-9 col-12';
                                        } ?>">
                            <div class="slider-text">

                                <?php if ($slider['heading'] != '') : ?>
                                    <div class="text-animated">
                                        <h1><?php echo $slider['heading']; ?></h1>
                                    </div>
                                <?php endif; ?>

                                <?php if ($slider['content'] != '') : ?>
                                    <div class="text-animated">
                                        <p>
                                            <?php echo nl2br($slider['content']); ?>
                                        </p>
                                    </div>
                                <?php endif; ?>


                                <?php if ($slider['button1_text'] != '' || $slider['button2_text'] != '') : ?>
                                    <div class="text-animated">
                                        <ul>
                                            <?php if ($slider['button1_text'] != '') : ?>
                                                <li><a href="<?php echo $slider['button1_url']; ?>"><?php echo $slider['button1_text']; ?></a></li>
                                            <?php endif; ?>

                                            <?php if ($slider['button2_text'] != '') : ?>
                                                <li><a href="<?php echo $slider['button2_url']; ?>"><?php echo $slider['button2_text']; ?></a></li>
                                            <?php endif; ?>
                                        </ul>
                                    </div>
                                <?php endif; ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>
<!--Slider End-->

<!--Blog-Area Start-->

<div class="event-area pt_60 pb_90">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <?php
                foreach ($event_fetched as $row) {
                    ?>
                    <div class="event-item">
                        <div class="row">
                            <div class="col-xl-3 col-lg-4">
                                <div class="event-photo" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $row->photo; ?>)"></div>
                            </div>
                            <div class="col-xl-9 col-lg-8">
                                <div class="event-body">
                                    <div class="event-header">
                                        <ul>
                                            <li class="event-header-left">
                                                <h4><?php echo $row->event_title; ?></h4>
                                                <span><i class="fa fa-clock-o"></i> Awal Pendaftaran:
                                                    <?php
                                                        $dt = explode('-', $row->event_start_date);
                                                        if ($dt[1] == '01') {
                                                            $month = 'Januari';
                                                        }
                                                        if ($dt[1] == '02') {
                                                            $month = 'Februari';
                                                        }
                                                        if ($dt[1] == '03') {
                                                            $month = 'Maret';
                                                        }
                                                        if ($dt[1] == '04') {
                                                            $month = 'April';
                                                        }
                                                        if ($dt[1] == '05') {
                                                            $month = 'Mei';
                                                        }
                                                        if ($dt[1] == '06') {
                                                            $month = 'Juni';
                                                        }
                                                        if ($dt[1] == '07') {
                                                            $month = 'Juli';
                                                        }
                                                        if ($dt[1] == '08') {
                                                            $month = 'Agustus';
                                                        }
                                                        if ($dt[1] == '09') {
                                                            $month = 'September';
                                                        }
                                                        if ($dt[1] == '10') {
                                                            $month = 'Oktober';
                                                        }
                                                        if ($dt[1] == '11') {
                                                            $month = 'November';
                                                        }
                                                        if ($dt[1] == '12') {
                                                            $month = 'Desember';
                                                        }
                                                        // echo $month . ' ' . $dt[2] . ', ' . $dt[0];
                                                        echo $dt[2] . ' ' . $month . ' ' . ' ' . $dt[0];
                                                        ?>
                                                </span><br>
                                                <span><i class="fa fa-clock-o"></i> Akhir Pendaftaran:
                                                    <?php
                                                        $dt = explode('-', $row->event_end_date);
                                                        if ($dt[1] == '01') {
                                                            $month = 'Januari';
                                                        }
                                                        if ($dt[1] == '02') {
                                                            $month = 'Februari';
                                                        }
                                                        if ($dt[1] == '03') {
                                                            $month = 'Maret';
                                                        }
                                                        if ($dt[1] == '04') {
                                                            $month = 'April';
                                                        }
                                                        if ($dt[1] == '05') {
                                                            $month = 'Mei';
                                                        }
                                                        if ($dt[1] == '06') {
                                                            $month = 'Juni';
                                                        }
                                                        if ($dt[1] == '07') {
                                                            $month = 'Juli';
                                                        }
                                                        if ($dt[1] == '08') {
                                                            $month = 'Agustus';
                                                        }
                                                        if ($dt[1] == '09') {
                                                            $month = 'September';
                                                        }
                                                        if ($dt[1] == '10') {
                                                            $month = 'Oktober';
                                                        }
                                                        if ($dt[1] == '11') {
                                                            $month = 'November';
                                                        }
                                                        if ($dt[1] == '12') {
                                                            $month = 'Desember';
                                                        }
                                                        echo $dt[2] . ' ' . $month . ' ' . ' ' . $dt[0];
                                                        ?>
                                                </span>

                                            </li>
                                            <li class="event-header-left">
                                                <span><i class="fa fa-map-marker"></i> Alamat: <?php echo nl2br($row->event_location); ?></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="event-content">
                                        <p>
                                            <?php echo $row->event_content_short; ?>
                                        </p>
                                        <div class="button-df">
                                            <a href="<?php echo base_url(); ?>event/view/<?php echo $row->event_id; ?>">Selengkapnya <i class="fa fa-chevron-circle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" style="margin-top:30px;text-align: center;">
                <?php echo $links; ?>
            </div>
        </div>
    </div>
</div>

<!--Blog-Area End-->