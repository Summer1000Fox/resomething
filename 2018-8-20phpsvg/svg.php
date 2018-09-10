<?php
/**
 * Created by S1Fox's PhpStorm.
 * User: S1Fox
 * Date: 2018/8/20 0020
 * Time: 16:12
 * Purpose&Description:
 */
  $image = 'image.jpg';
  // Supports http if allow_url_fopen is enabled
  $image = file_get_contents($image);
  $img = imagecreatefromstring($image);
  $width = imagesx($img);
  $height = imagesy($img);
  for($h=0;$h<$height;$h++){
      for($w=0;$w<=$width;$w++){
          $rgb = imagecolorat($img, $w, $h);
          $a = ($rgb >> 24) & 0xFF;
          $r = ($rgb >> 16) & 0xFF;
          $g = ($rgb >> 8) & 0xFF;
          $b = $rgb & 0xFF;
          $a = abs(($a / 127) - 1);
          if($w == $width){
              echo '<br>';
          }else{
              echo '<span style="color:rgba('.$r.','.$g.','.$b.','.$a.');">#</span>';
          }
      }
  }