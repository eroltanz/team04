<?php
// in your view file
$this->Html->script('dropdown.js', array('inline' => false));
$this->Html->css('global', null, array('inline' => false));
?>

<h2>Contact us</h2>

<?php
echo $content['Pagecontent']['content'];
?>
		
		