<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		//echo $this->Html->css('global');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
		
	?>
	
	
</head>
<body>

	<div id="container">
		<div id="header">
		<div id="masthead">
		
<h1><center><?php echo $this->Html->image('logo.png', array('alt' => 'MuscleWorks Massage', 'url' => array('controller' => 'pages', 'action' => 'home')));?></h1>

</div>
		</div>
		


		<div id="content">
		
<ul id='nav'>		
		<li><?php echo $this->Html->link('Home', '/pages/home', array('class' => 'button'));?></li>
	<li class='menu sfHover'><?php echo $this->Html->link('Services', '/pages/services', array('class' => 'button'));?></a>
		<ul>
			<li><?php echo $this->Html->link('Remedial', '/pages/services', array('class' => 'button'));?></li>
			<li><?php echo $this->Html->link('Pre/Post natal', '/pages/services', array('class' => 'button'));?></li>
			<li><?php echo $this->Html->link('Sports', '/pages/services', array('class' => 'button'));?></li>
			<li><?php echo $this->Html->link('Relaxation', '/pages/services', array('class' => 'button'));?></li>
			<li><?php echo $this->Html->link('Corporate/Events', '/pages/services', array('class' => 'button'));?></li>
		</ul>
	</li>
	<li class='menu sfHover'><?php echo $this->Html->link('Bookings', '/pages/prices', array('class' => 'button'));?>
		<ul>
			<li><?php echo $this->Html->link('Prices', '/pages/prices', array('class' => 'button'));?></li>
			<li><?php echo $this->Html->link('Book Now', '/pages/booknow', array('class' => 'button'));?></li>
		</ul>	
	</li>
	<li class='menu sfHover'><?php echo $this->Html->link('About us', '/pages/aboutus', array('class' => 'button'));?>
		<ul>
			<li><?php echo $this->Html->link('Our practitioners', '/pages/aboutus', array('class' => 'button'));?></li>
			<li><?php echo $this->Html->link('FAQS', '/pages/faq', array('class' => 'button'));?></li>
			<li><?php echo $this->Html->link('Preferred providers', '/pages/provider', array('class' => 'button'));?></li>
		</ul>	
	</li>
	<li class='menu sfHover'><?php echo $this->Html->link('Contact us', '/pages/contactus', array('class' => 'button'));?>
	</li>
</ul>

<div id="mainContent">
	
<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>

		
		
	</div>
		<div id="footer">
		
		<li>&copy; 2013 Team Drive.</li>
	<li><?php echo $this->Html->link('Contact us', '/pages/contactus');?></li>
	<li><a href="#">Privacy Policy</a></li>
	<li><a href="#">Terms of Service</a></li>
	<li><?php echo $this->Html->link('Admin', '/pagecontents');?></li>
	
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
	
	
</div>
			
		
	</div>
	
</body>
</html>