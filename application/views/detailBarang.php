<?php
include 'header.php';
?>
<pre>
	<?php
		foreach ($barang as $b) {
			print_r($b);
		}
	?>
</pre>
<a href="<?php echo base_url('LoginPenawar/'); ?>">Login</a> untuk mengikuti lelang