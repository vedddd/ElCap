<?php
#header('Content-type: application/txt');
#header('Content-Disposition: attachment; filename="day.txt"');
$status = $_GET['status'];

if($status != null) { #get the camera status
  $state = elphel_get_state();
  echo "state=$state\n";

  $number = elphel_get_P_value(ELPHEL_NUMBER);
  echo "number=$number\n";

  $update = elphel_get_P_value(ELPHEL_UPDATE);
  echo "update=$update\n";

  $sensor = elphel_get_P_value(ELPHEL_SENSOR);
  echo "sensor=$sensor\n";

  $pars_changed = elphel_get_P_value(ELPHEL_PARS_CHANGED);
  echo "pars_changed=$pars_changed\n";

  $dma_valid = elphel_get_P_value(ELPHEL_DMA_VALID);
  echo "dma_valid=$dma_valid\n";

  $actual_width = elphel_get_P_value(ELPHEL_ACTUAL_WIDTH);
  echo "actual_width=$actual_width\n";

  $actual_height = elphel_get_P_value(ELPHEL_ACTUAL_HEIGHT);
  echo "actual_height=$actual_height\n";

  $lpr = elphel_get_P_value(ELPHEL_LPR);
  echo "lpr=$lpr\n";

  $image_size = elphel_get_P_value(ELPHEL_IMAGE_SIZE);
  echo "image_size=$image_size\n";

  $bayer = elphel_get_P_value(ELPHEL_BAYER);
  echo "bayer=$bayer\n";

  $triggered = elphel_get_P_value(ELPHEL_TRIGGERED);
  echo "triggered=$triggered\n";

  $period = elphel_get_P_value(ELPHEL_PERIOD);
  echo "period=$period\n";

  $frame = elphel_get_P_value(ELPHEL_FRAME);
  echo "frame=$frame\n";

  $jpeg_wp = elphel_get_P_value(ELPHEL_JPEG_WP);
  echo "jpeg_wp=$jpeg_wp\n";

  $clk_fpga = elphel_get_P_value(ELPHEL_CLK_FPGA);
  echo "clk_fpga=$clk_fpga\n";

  $clk_sensor = elphel_get_P_value(ELPHEL_CLK_SENSOR);
  echo "clk_sensor=$clk_sensor\n";

  $fpga_xtra = elphel_get_P_value(ELPHEL_FPGA_XTRA);
  echo "fpga_xtra=$fpga_xtra\n";

  $trig = elphel_get_P_value(ELPHEL_TRIG);
  echo "trig=$trig\n";

  $expos = elphel_get_P_value(ELPHEL_EXPOS);
  echo "expos=$expos\n";

  $bgframe = elphel_get_P_value(ELPHEL_BGFRAME);
  echo "bgframe=$bgframe\n";

  $page_acq = elphel_get_P_value(ELPHEL_PAGE_ACQ);
  echo "page_acq=$page_acq\n";

  $page_read = elphel_get_P_value(ELPHEL_PAGE_READ);
  echo "page_read=$page_read\n";

  $overlap = elphel_get_P_value(ELPHEL_OVERLAP);
  echo "overlap=$overlap\n";

  $video = elphel_get_P_value(ELPHEL_VIDEO);
  echo "video=$video\n";

  $auxcm = elphel_get_P_value(ELPHEL_AUXCM);
  echo "auxcm=$auxcm\n";

  $virt_width = elphel_get_P_value(ELPHEL_VIRT_WIDTH);
  echo "virt_width=$virt_width\n";

  $virt_height = elphel_get_P_value(ELPHEL_VIRT_HEIGHT);
  echo "virt_height=$virt_height\n";

  $woi_left = elphel_get_P_value(ELPHEL_WOI_LEFT);
  echo "woi_left=$woi_left\n";

  $woi_top = elphel_get_P_value(ELPHEL_WOI_TOP);
  echo "woi_top=$woi_top\n";

  $woi_width = elphel_get_P_value(ELPHEL_WOI_WIDTH);
  echo "woi_width=$woi_width\n";

  $woi_height = elphel_get_P_value(ELPHEL_WOI_HEIGHT);
  echo "woi_height=$woi_height\n";

  $flip = elphel_get_P_value(ELPHEL_FLIP);
  echo "flip=$flip\n";

  $fpslm = elphel_get_P_value(ELPHEL_FPSLM);
  echo "fpslm=$fpslm\n";

  $dcm_hor = elphel_get_P_value(ELPHEL_DCM_HOR);
  echo "dcm_hor=$dcm_hor\n";

  $dcm_vert = elphel_get_P_value(ELPHEL_DCM_VERT);
  echo "dcm_vert=$dcm_vert\n";

  $bin_hor = elphel_get_P_value(ELPHEL_BIN_HOR);
  echo "bin_hor=$bin_hor\n";

  $bin_vert = elphel_get_P_value(ELPHEL_BIN_VERT);
  echo "bin_vert=$bin_vert\n";

  $color = elphel_get_P_value(ELPHEL_COLOR);
  echo "color=$color\n";

  $framesync_dly = elphel_get_P_value(ELPHEL_FRAMESYNC_DLY);
  echo "framesync_dly=$framesync_dly\n";

  $mclk = elphel_get_P_value(ELPHEL_MCLK);
  echo "mclk=$mclk\n";

  $pf_height = elphel_get_P_value(ELPHEL_PF_HEIGHT);
  echo "pf_height=$pf_height\n";

  $bits = elphel_get_P_value(ELPHEL_BITS);
  echo "bits=$bits\n";

  $shiftl = elphel_get_P_value(ELPHEL_SHIFTL);
  echo "shiftl=$shiftl\n";

  $fpns = elphel_get_P_value(ELPHEL_FPNS);
  echo "fpns=$fpns\n";

  $fpnm = elphel_get_P_value(ELPHEL_FPNM);
  echo "fpnm=$fpnm\n";

  $vexpos = elphel_get_P_value(ELPHEL_VEXPOS);
  echo "vexpos=$vexpos\n";

  $virttrig = elphel_get_P_value(ELPHEL_VIRTTRIG);
  echo "virttrig=$virttrig\n";

  $gainr = elphel_get_P_value(ELPHEL_GAINR);
  echo "gainr=$gainr\n";

  $gaing = elphel_get_P_value(ELPHEL_GAING);
  echo "gaing=$gaing\n";

  $gainb = elphel_get_P_value(ELPHEL_GAINB);
  echo "gainb=$gainb\n";

  $gaingb = elphel_get_P_value(ELPHEL_GAINGB);
  echo "gaingb=$gaingb\n";

  $fatzero = elphel_get_P_value(ELPHEL_FATZERO);
  echo "fatzero=$fatzero\n";

  $spec_kac_gga = elphel_get_P_value(ELPHEL_SPEC_KAC_GGA);
  echo "spec_kac_gga=$spec_kac_gga\n";

  $spec_kac_ggb = elphel_get_P_value(ELPHEL_SPEC_KAC_GGB);
  echo "spec_kac_ggb=$spec_kac_ggb\n";

  $spec_kac_ggm = elphel_get_P_value(ELPHEL_SPEC_KAC_GGM);
  echo "spec_kac_ggm=$spec_kac_ggm\n";

  $gain = elphel_get_P_value(ELPHEL_GAIN);
  echo "gain=$gain\n";

  $rscale = elphel_get_P_value(ELPHEL_RSCALE);
  echo "rscale=$rscale\n";

  $bscale = elphel_get_P_value(ELPHEL_BSCALE);
  echo "bscale=$bscale\n";

  $quality = elphel_get_P_value(ELPHEL_QUALITY);
  echo "quality=$quality\n";

  $fp100s = elphel_get_P_value(ELPHEL_FP100S);
  echo "fp100s=$fp100s\n";

  $sensor_width = elphel_get_P_value(ELPHEL_SENSOR_WIDTH);
  echo "sensor_width=$sensor_width\n";

  $sensor_height = elphel_get_P_value(ELPHEL_SENSOR_HEIGHT);
  echo "sensor_height=$sensor_height\n";

  $color_saturation_blue = elphel_get_P_value(ELPHEL_COLOR_SATURATION_BLUE);
  echo "color_saturation_blue=$color_saturation_blue\n";

  $color_saturation_red = elphel_get_P_value(ELPHEL_COLOR_SATURATION_RED);
  echo "color_saturation_red=$color_saturation_red\n";

  $gamma = elphel_get_P_value(ELPHEL_GAMMA);
  echo "gamma=$gamma\n";

  $pixel_low = elphel_get_P_value(ELPHEL_PIXEL_LOW);
  echo "pixel_low=$pixel_low\n";

  $pixel_high = elphel_get_P_value(ELPHEL_PIXEL_HIGH);
  echo "pixel_high=$pixel_high\n";

  $dontcare = elphel_get_P_value(ELPHEL_DONTCARE);
  echo "dontcare=$dontcare\n";

  $pgmsensrslt = elphel_get_P_value(ELPHEL_PGMSENSRSLT);
  echo "pgmsensrslt=$pgmsensrslt\n";

  $camseqstate = elphel_get_P_value(ELPHEL_CAMSEQSTATE);
  echo "camseqstate=$camseqstate\n";

  $camseqcount = elphel_get_P_value(ELPHEL_CAMSEQCOUNT);
  echo "camseqcount=$camseqcount\n";

  $circbufsize = elphel_get_P_value(ELPHEL_CIRCBUFSIZE);
  echo "circbufsize=$circbufsize\n";

  $freecircbuf = elphel_get_P_value(ELPHEL_FREECIRCBUF);
  echo "freecircbuf=$freecircbuf\n";

  $circbufwp = elphel_get_P_value(ELPHEL_CIRCBUFWP);
  echo "circbufwp=$circbufwp\n";

  $circbufrp = elphel_get_P_value(ELPHEL_CIRCBUFRP);
  echo "circbufrp=$circbufrp\n";

  $tiles = elphel_get_P_value(ELPHEL_TILES);
  echo "tiles=$tiles\n";

  $sensor_phase = elphel_get_P_value(ELPHEL_SENSOR_PHASE);
  echo "sensor_phase=$sensor_phase\n";

  $seconds = elphel_get_P_value(ELPHEL_SECONDS);
  echo "seconds=$seconds\n";

  $microseconds = elphel_get_P_value(ELPHEL_MICROSECONDS);
  echo "microseconds=$microseconds\n";

  $tiles = elphel_get_P_value(ELPHEL_TILES);
  echo "tiles=$tiles\n";

  $sensor_phase = elphel_get_P_value(ELPHEL_SENSOR_PHASE);
  echo "sensor_phase=$sensor_phase\n";

  $gscale = elphel_get_P_value(ELPHEL_GSCALE);
  echo "gscale=$gscale\n";

  $autoexp_on = elphel_get_P_value(ELPHEL_AUTOEXP_ON);
  echo "autoexp_on=$autoexp_on\n";

  $autoexp_rwidth = elphel_get_P_value(ELPHEL_AUTOEXP_RWIDTH);
  echo "autoexp_rwidth=$autoexp_rwidth\n";

  $autoexp_rheight = elphel_get_P_value(ELPHEL_AUTOEXP_RHEIGHT);
  echo "autoexp_rheight=$autoexp_rheight\n";

  $autoexp_rleft = elphel_get_P_value(ELPHEL_AUTOEXP_RLEFT);
  echo "autoexp_rleft=$autoexp_rleft\n";

  $autoexp_rtop = elphel_get_P_value(ELPHEL_AUTOEXP_RTOP);
  echo "autoexp_rtop=$autoexp_rtop\n";

  $autoexp_exp_max = elphel_get_P_value(ELPHEL_AUTOEXP_EXP_MAX);
  echo "autoexp_exp_max=$autoexp_exp_max\n";

  $autoexp_overexp_max = elphel_get_P_value(ELPHEL_AUTOEXP_OVEREXP_MAX);
  echo "autoexp_overexp_max=$autoexp_overexp_max\n";

  $autoexp_s_percent = elphel_get_P_value(ELPHEL_AUTOEXP_S_PERCENT);
  echo "autoexp_s_percent=$autoexp_s_percent\n";

  $autoexp_s_index = elphel_get_P_value(ELPHEL_AUTOEXP_S_INDEX);
  echo "autoexp_s_index=$autoexp_s_index\n";

  $autoexp_exp = elphel_get_P_value(ELPHEL_AUTOEXP_EXP);
  echo "autoexp_exp=$autoexp_exp\n";

  $autoexp_skip_pmin = elphel_get_P_value(ELPHEL_AUTOEXP_SKIP_PMIN);
  echo "autoexp_skip_pmin=$autoexp_skip_pmin\n";

  $autoexp_skip_pmax = elphel_get_P_value(ELPHEL_AUTOEXP_SKIP_PMAX);
  echo "autoexp_skip_pmax=$autoexp_skip_pmax\n";

  $autoexp_skip_t = elphel_get_P_value(ELPHEL_AUTOEXP_SKIP_T);
  echo "autoexp_skip_t=$autoexp_skip_t\n";

  $aexpwnd_width = elphel_get_P_value(ELPHEL_AEXPWND_WIDTH);
  echo "aexpwnd_width=$aexpwnd_width\n";

  $aexpwnd_height = elphel_get_P_value(ELPHEL_AEXPWND_HEIGHT);
  echo "aexpwnd_height=$aexpwnd_height\n";

  $aexpwnd_top = elphel_get_P_value(ELPHEL_AEXPWND_TOP);
  echo "aexpwnd_top=$aexpwnd_top\n";

  $aexpwnd_left = elphel_get_P_value(ELPHEL_AEXPWND_LEFT);
  echo "aexpwnd_left=$aexpwnd_left\n";

  $hist_not_change = elphel_get_P_value(ELPHEL_HIST_NOT_CHANGE);
  echo "hist_not_change=$hist_not_change\n";

 }
 else {

#    $number = $_GET['number'];
#    if($number != null) elphel_set_P_value(ELPHEL_NUMBER, $number);

#    $update = $_GET['update'];
#    if($update != null) elphel_set_P_value(ELPHEL_UPDATE, $update);

#    $sensor = $_GET['sensor'];
#    if($sensor != null) elphel_set_P_value(ELPHEL_SENSOR, $sensor);

#    $pars_changed = $_GET['pars_changed'];
#    if($pars_changed != null) elphel_set_P_value(ELPHEL_PARS_CHANGED, $pars_changed);

#    $dma_valid = $_GET['dma_valid'];
#    if($dma_valid != null) elphel_set_P_value(ELPHEL_DMA_VALID, $dma_valid);

    $actual_width = $_GET['actual_width'];
    if($actual_width != null) elphel_set_P_value(ELPHEL_ACTUAL_WIDTH, $actual_width);

    $actual_height = $_GET['actual_height'];
    if($actual_height != null) elphel_set_P_value(ELPHEL_ACTUAL_HEIGHT, $actual_height);

#    $lpr = $_GET['lpr'];
#    if($lpr != null) elphel_set_P_value(ELPHEL_LPR, $lpr);

#    $image_size = $_GET['image_size'];
#    if($image_size != null) elphel_set_P_value(ELPHEL_IMAGE_SIZE, $image_size);

#    $bayer = $_GET['bayer'];
#    if($bayer != null) elphel_set_P_value(ELPHEL_BAYER, $bayer);

#    $triggered = $_GET['triggered'];
#    if($triggered != null) elphel_set_P_value(ELPHEL_TRIGGERED, $triggered);

#    $period = $_GET['period'];
#    if($period != null) elphel_set_P_value(ELPHEL_PERIOD, $period);

#    $frame = $_GET['frame'];
#    if($frame != null) elphel_set_P_value(ELPHEL_FRAME, $frame);

#    $jpeg_wp = $_GET['jpeg_wp'];
#    if($jpeg_wp != null) elphel_set_P_value(ELPHEL_JPEG_WP, $jpeg_wp);

#    $clk_fpga = $_GET['clk_fpga'];
#    if($clk_fpga != null) elphel_set_P_value(ELPHEL_CLK_FPGA, $clk_fpga);

#    $clk_sensor = $_GET['clk_sensor'];
#    if($clk_sensor != null) elphel_set_P_value(ELPHEL_CLK_SENSOR, $clk_sensor);

#    $fpga_xtra = $_GET['fpga_xtra'];
#    if($fpga_xtra != null) elphel_set_P_value(ELPHEL_FPGA_XTRA, $fpga_xtra);

#    $trig = $_GET['trig'];
#    if($trig != null) elphel_set_P_value(ELPHEL_TRIG, $trig);

    $expos = $_GET['expos'];
    if($expos != null) elphel_set_P_value(ELPHEL_EXPOS, $expos);

#    $bgframe = $_GET['bgframe'];
#    if($bgframe != null) elphel_set_P_value(ELPHEL_BGFRAME, $bgframe);

#    $page_acq = $_GET['page_acq'];
#    if($page_acq != null) elphel_set_P_value(ELPHEL_PAGE_ACQ, $page_acq);

#    $page_read = $_GET['page_read'];
#    if($page_read != null) elphel_set_P_value(ELPHEL_PAGE_READ, $page_read);

#    $overlap = $_GET['overlap'];
#    if($overlap != null) elphel_set_P_value(ELPHEL_OVERLAP, $overlap);

#    $video = $_GET['video'];
#    if($video != null) elphel_set_P_value(ELPHEL_VIDEO, $video);

#    $auxcm = $_GET['auxcm'];
#    if($auxcm != null) elphel_set_P_value(ELPHEL_AUXCM, $auxcm);

#    $virt_width = $_GET['virt_width'];
#    if($virt_width != null) elphel_set_P_value(ELPHEL_VIRT_WIDTH, $virt_width);

#    $virt_height = $_GET['virt_height'];
#    if($virt_height != null) elphel_set_P_value(ELPHEL_VIRT_HEIGHT, $virt_height);

    $woi_left = $_GET['woi_left'];
    if($woi_left != null) elphel_set_P_value(ELPHEL_WOI_LEFT, $woi_left);

    $woi_top = $_GET['woi_top'];
    if($woi_top != null) elphel_set_P_value(ELPHEL_WOI_TOP, $woi_top);

    $woi_width = $_GET['woi_width'];
    if($woi_width != null) elphel_set_P_value(ELPHEL_WOI_WIDTH, $woi_width);

    $woi_height = $_GET['woi_height'];
    if($woi_height != null) elphel_set_P_value(ELPHEL_WOI_HEIGHT, $woi_height);

#    $flip = $_GET['flip'];
#    if($flip != null) elphel_set_P_value(ELPHEL_FLIP, $flip);

#    $fpslm = $_GET['fpslm'];
#    if($fpslm != null) elphel_set_P_value(ELPHEL_FPSLM, $fpslm);

    $dcm_hor = $_GET['dcm_hor'];
    if($dcm_hor != null) elphel_set_P_value(ELPHEL_DCM_HOR, $dcm_hor);

    $dcm_vert = $_GET['dcm_vert'];
    if($dcm_vert != null) elphel_set_P_value(ELPHEL_DCM_VERT, $dcm_vert);

#    $bin_hor = $_GET['bin_hor'];
#    if($bin_hor != null) elphel_set_P_value(ELPHEL_BIN_HOR, $bin_hor);

#    $bin_vert = $_GET['bin_vert'];
#    if($bin_vert != null) elphel_set_P_value(ELPHEL_BIN_VERT, $bin_vert);

#    $color = $_GET['color'];
#    if($color != null) elphel_set_P_value(ELPHEL_COLOR, $color);

#    $framesync_dly = $_GET['framesync_dly'];
#    if($framesync_dly != null) elphel_set_P_value(ELPHEL_FRAMESYNC_DLY, $framesync_dly);

#    $mclk = $_GET['mclk'];
#    if($mclk != null) elphel_set_P_value(ELPHEL_MCLK, $mclk);

#    $pf_height = $_GET['pf_height'];
#    if($pf_height != null) elphel_set_P_value(ELPHEL_PF_HEIGHT, $pf_height);

#    $bits = $_GET['bits'];
#    if($bits != null) elphel_set_P_value(ELPHEL_BITS, $bits);

#    $shiftl = $_GET['shiftl'];
#    if($shiftl != null) elphel_set_P_value(ELPHEL_SHIFTL, $shiftl);

#    $fpns = $_GET['fpns'];
#    if($fpns != null) elphel_set_P_value(ELPHEL_FPNS, $fpns);

#    $fpnm = $_GET['fpnm'];
#    if($fpnm != null) elphel_set_P_value(ELPHEL_FPNM, $fpnm);

#    $vexpos = $_GET['vexpos'];
#    if($vexpos != null) elphel_set_P_value(ELPHEL_VEXPOS, $vexpos);

#    $virttrig = $_GET['virttrig'];
#    if($virttrig != null) elphel_set_P_value(ELPHEL_VIRTTRIG, $virttrig);

#    $gainr = $_GET['gainr'];
#    if($gainr != null) elphel_set_P_value(ELPHEL_GAINR, $gainr);

#    $gaing = $_GET['gaing'];
#    if($gaing != null) elphel_set_P_value(ELPHEL_GAING, $gaing);

#    $gainb = $_GET['gainb'];
#    if($gainb != null) elphel_set_P_value(ELPHEL_GAINB, $gainb);

#    $gaingb = $_GET['gaingb'];
#    if($gaingb != null) elphel_set_P_value(ELPHEL_GAINGB, $gaingb);

#    $fatzero = $_GET['fatzero'];
#    if($fatzero != null) elphel_set_P_value(ELPHEL_FATZERO, $fatzero);

#    $spec_kac_gga = $_GET['spec_kac_gga'];
#    if($spec_kac_gga != null) elphel_set_P_value(ELPHEL_SPEC_KAC_GGA, $spec_kac_gga);

#    $spec_kac_ggb = $_GET['spec_kac_ggb'];
#    if($spec_kac_ggb != null) elphel_set_P_value(ELPHEL_SPEC_KAC_GGB, $spec_kac_ggb);

#    $spec_kac_ggm = $_GET['spec_kac_ggm'];
#    if($spec_kac_ggm != null) elphel_set_P_value(ELPHEL_SPEC_KAC_GGM, $spec_kac_ggm);

#    $gain = $_GET['gain'];
#    if($gain != null) elphel_set_P_value(ELPHEL_GAIN, $gain);

#    $rscale = $_GET['rscale'];
#    if($rscale != null) elphel_set_P_value(ELPHEL_RSCALE, $rscale);

#    $bscale = $_GET['bscale'];
#    if($bscale != null) elphel_set_P_value(ELPHEL_BSCALE, $bscale);

#    $quality = $_GET['quality'];
#    if($quality != null) elphel_set_P_value(ELPHEL_QUALITY, $quality);

#    $fp100s = $_GET['fp100s'];
#    if($fp100s != null) elphel_set_P_value(ELPHEL_FP100S, $fp100s);

#    $sensor_width = $_GET['sensor_width'];
#    if($sensor_width != null) elphel_set_P_value(ELPHEL_SENSOR_WIDTH, $sensor_width);

#    $sensor_height = $_GET['sensor_height'];
#    if($sensor_height != null) elphel_set_P_value(ELPHEL_SENSOR_HEIGHT, $sensor_height);

#    $color_saturation_blue = $_GET['color_saturation_blue'];
#    if($color_saturation_blue != null) elphel_set_P_value(ELPHEL_COLOR_SATURATION_BLUE, $color_saturation_blue);

#    $color_saturation_red = $_GET['color_saturation_red'];
#    if($color_saturation_red != null) elphel_set_P_value(ELPHEL_COLOR_SATURATION_RED, $color_saturation_red);

#    $gamma = $_GET['gamma'];
#    if($gamma != null) elphel_set_P_value(ELPHEL_GAMMA, $gamma);

#    $pixel_low = $_GET['pixel_low'];
#    if($pixel_low != null) elphel_set_P_value(ELPHEL_PIXEL_LOW, $pixel_low);

#    $pixel_high = $_GET['pixel_high'];
#    if($pixel_high != null) elphel_set_P_value(ELPHEL_PIXEL_HIGH, $pixel_high);

#    $dontcare = $_GET['dontcare'];
#    if($dontcare != null) elphel_set_P_value(ELPHEL_DONTCARE, $dontcare);

#    $pgmsensrslt = $_GET['pgmsensrslt'];
#    if($pgmsensrslt != null) elphel_set_P_value(ELPHEL_PGMSENSRSLT, $pgmsensrslt);

#    $camseqstate = $_GET['camseqstate'];
#    if($camseqstate != null) elphel_set_P_value(ELPHEL_CAMSEQSTATE, $camseqstate);

#    $camseqcount = $_GET['camseqcount'];
#    if($camseqcount != null) elphel_set_P_value(ELPHEL_CAMSEQCOUNT, $camseqcount);

#    $circbufsize = $_GET['circbufsize'];
#    if($circbufsize != null) elphel_set_P_value(ELPHEL_CIRCBUFSIZE, $circbufsize);

#    $freecircbuf = $_GET['freecircbuf'];
#    if($freecircbuf != null) elphel_set_P_value(ELPHEL_FREECIRCBUF, $freecircbuf);

#    $circbufwp = $_GET['circbufwp'];
#    if($circbufwp != null) elphel_set_P_value(ELPHEL_CIRCBUFWP, $circbufwp);

#    $circbufrp = $_GET['circbufrp'];
#    if($circbufrp != null) elphel_set_P_value(ELPHEL_CIRCBUFRP, $circbufrp);

#    $tiles = $_GET['tiles'];
#    if($tiles != null) elphel_set_P_value(ELPHEL_TILES, $tiles);

#    $sensor_phase = $_GET['sensor_phase'];
#    if($sensor_phase != null) elphel_set_P_value(ELPHEL_SENSOR_PHASE, $sensor_phase);

#    $seconds = $_GET['seconds'];
#    if($seconds != null) elphel_set_P_value(ELPHEL_SECONDS, $seconds);

#    $microseconds = $_GET['microseconds'];
#    if($microseconds != null) elphel_set_P_value(ELPHEL_MICROSECONDS, $microseconds);

#    $tiles = $_GET['tiles'];
#    if($tiles != null) elphel_set_P_value(ELPHEL_TILES, $tiles);

#    $sensor_phase = $_GET['sensor_phase'];
#    if($sensor_phase != null) elphel_set_P_value(ELPHEL_SENSOR_PHASE, $sensor_phase);

#    $gscale = $_GET['gscale'];
#    if($gscale != null) elphel_set_P_value(ELPHEL_GSCALE, $gscale);

    $autoexp_on = $_GET['autoexp_on'];
    if($autoexp_on != null) elphel_set_P_value(ELPHEL_AUTOEXP_ON, $autoexp_on);

#    $autoexp_rwidth = $_GET['autoexp_rwidth'];
#    if($autoexp_rwidth != null) elphel_set_P_value(ELPHEL_AUTOEXP_RWIDTH, $autoexp_rwidth);

#    $autoexp_rheight = $_GET['autoexp_rheight'];
#    if($autoexp_rheight != null) elphel_set_P_value(ELPHEL_AUTOEXP_RHEIGHT, $autoexp_rheight);

#    $autoexp_rleft = $_GET['autoexp_rleft'];
#    if($autoexp_rleft != null) elphel_set_P_value(ELPHEL_AUTOEXP_RLEFT, $autoexp_rleft);

#    $autoexp_rtop = $_GET['autoexp_rtop'];
#    if($autoexp_rtop != null) elphel_set_P_value(ELPHEL_AUTOEXP_RTOP, $autoexp_rtop);

#    $autoexp_exp_max = $_GET['autoexp_exp_max'];
#    if($autoexp_exp_max != null) elphel_set_P_value(ELPHEL_AUTOEXP_EXP_MAX, $autoexp_exp_max);

#    $autoexp_overexp_max = $_GET['autoexp_overexp_max'];
#    if($autoexp_overexp_max != null) elphel_set_P_value(ELPHEL_AUTOEXP_OVEREXP_MAX, $autoexp_overexp_max);

#    $autoexp_s_percent = $_GET['autoexp_s_percent'];
#    if($autoexp_s_percent != null) elphel_set_P_value(ELPHEL_AUTOEXP_S_PERCENT, $autoexp_s_percent);

#    $autoexp_s_index = $_GET['autoexp_s_index'];
#    if($autoexp_s_index != null) elphel_set_P_value(ELPHEL_AUTOEXP_S_INDEX, $autoexp_s_index);

#    $autoexp_exp = $_GET['autoexp_exp'];
#    if($autoexp_exp != null) elphel_set_P_value(ELPHEL_AUTOEXP_EXP, $autoexp_exp);

#    $autoexp_skip_pmin = $_GET['autoexp_skip_pmin'];
#    if($autoexp_skip_pmin != null) elphel_set_P_value(ELPHEL_AUTOEXP_SKIP_PMIN, $autoexp_skip_pmin);

#    $autoexp_skip_pmax = $_GET['autoexp_skip_pmax'];
#    if($autoexp_skip_pmax != null) elphel_set_P_value(ELPHEL_AUTOEXP_SKIP_PMAX, $autoexp_skip_pmax);

#    $autoexp_skip_t = $_GET['autoexp_skip_t'];
#    if($autoexp_skip_t != null) elphel_set_P_value(ELPHEL_AUTOEXP_SKIP_T, $autoexp_skip_t);

#    $aexpwnd_width = $_GET['aexpwnd_width'];
#    if($aexpwnd_width != null) elphel_set_P_value(ELPHEL_AEXPWND_WIDTH, $aexpwnd_width);

#    $aexpwnd_height = $_GET['aexpwnd_height'];
#    if($aexpwnd_height != null) elphel_set_P_value(ELPHEL_AEXPWND_HEIGHT, $aexpwnd_height);

#    $aexpwnd_top = $_GET['aexpwnd_top'];
#    if($aexpwnd_top != null) elphel_set_P_value(ELPHEL_AEXPWND_TOP, $aexpwnd_top);

#    $aexpwnd_left = $_GET['aexpwnd_left'];
#    if($aexpwnd_left != null) elphel_set_P_value(ELPHEL_AEXPWND_LEFT, $aexpwnd_left);

#    $hist_not_change = $_GET['hist_not_change'];
#    if($hist_not_change != null) elphel_set_P_value(ELPHEL_HIST_NOT_CHANGE, $hist_not_change);

#   elphel_program_sensor(1);
   echo "done=1\n";
 }
?>