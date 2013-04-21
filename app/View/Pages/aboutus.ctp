<?php
// in your view file
$this->Html->css('global', null, array('inline' => false));
?>

<h2>About us</h2>
<?php
echo $content['Pagecontent']['content'];
?>