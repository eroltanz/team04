<?php
// in your view file
$this->Html->css('global', null, array('inline' => false));
?>

<h2>Side content</h2>
<?php
echo $content['Pagecontent']['content'];
?>