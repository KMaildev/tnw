<?php
if ($my_active_packages) {
	$order_total = [];
	foreach ($my_active_packages as $my_active_package) {
		if (date("Y-m-d") >= $my_active_package->end_date) {
			continue;
		}
		$order_total[] = $my_active_package->no_of_posts;
	}
	$total_buy_posts =  array_sum($order_total);
} else {
	$total_buy_posts = 0;
}

?>

<?php
$free_package = (empty($packages)) ? 0 : $packages->no_of_posts;
$available_post = $free_package + $total_buy_posts;
$already_posts = $already_posts;
?>

<div class="avapostdashshow">
	<p class="en m0">Total Posted Upload: <?php echo $available_post; ?> </p>
</div>
<div class="avapostdashshow">
	<p class="en m0">Already Posted: <?php echo $already_posts; ?></p>
</div>
<div class="avapostdashshow">
	<p class="en m0">Available Post Upload: <?php echo $available_post - $already_posts; ?> </p>
</div>