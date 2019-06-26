<div class='container'>
	<div class='sixteen columns'>
		<h3>Système d'exploitation</h3>
		<p id="os_name_text">Système d'exploitation: <?php echo php_uname('s'); ?></p>
		<p id="os_kernel_text">Noyau: <?php echo php_uname('r'); ?></p>
		<p id="os_uptime_text">Disponibilité: <?php echo "$days days $hours hours $mins minutes and $secs seconds"; ?></p>
	</div>
</div>