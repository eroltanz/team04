<?php
// in your view file
$this->Html->script('dropdown.js', array('inline' => false));
$this->Html->css('global', null, array('inline' => false));
$this->layout="booking";
?>
<h2>Book Now</h2>

<p><iframe id="iframe" src="https://muscleworksmassage.cliniko.com/bookings" frameborder="0" scrolling="no" width="980" height="1150"></iframe></p>