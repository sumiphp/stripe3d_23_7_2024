<?php
  //include 'phar://ArPHP.phar/Arabic.php';
  //$obj = new I18N_Arabic('Numbers');

  //echo $obj->int2str(1975);


  $obj = new \ArPHP\I18N\Arabic();

  echo $obj->int2str(1975);


?> 
 
 
 
 
 <?php
    date_default_timezone_set('GMT');
    $time = time();

    echo date('l dS F Y h:i:s A', $time);
    echo '<br /><br />';

    require '../../Arabic.php';
    $Arabic = new I18N_Arabic('Date');

    $correction = $Arabic->dateCorrection ($time);
    echo $Arabic->date('l dS F Y h:i:s A', $time, $correction);

    $day = $Arabic->date('j', $time, $correction);
    echo ' [<a href="Moon.php?day='.$day.'" target=_blank>القمر الليلة</a>]';
    echo '<br /><br />';

    $Arabic->setMode(8);
    echo $Arabic->date('l dS F Y h:i:s A', $time, $correction);
    echo '<br /><br />';

    $Arabic->setMode(2);
    echo $Arabic->date('l dS F Y h:i:s A', $time);
    echo '<br /><br />';
    
    $Arabic->setMode(3);
    echo $Arabic->date('l dS F Y h:i:s A', $time);
    echo '<br /><br />';

    $Arabic->setMode(4);
    echo $Arabic->date('l dS F Y h:i:s A', $time);
    echo '<br /><br />';

    $Arabic->setMode(5);
    echo $Arabic->date('l dS F Y h:i:s A', $time);
    echo '<br /><br />';

    $Arabic->setMode(6);
    echo $Arabic->date('l dS F Y h:i:s A', $time);
    echo '<br /><br />';

    $Arabic->setMode(7);
    echo $Arabic->date('l dS F Y h:i:s A', $time); 


    ?>