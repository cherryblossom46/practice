<?php require_once ('data.php'); ?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel='stylesheet' href='style.css'>
	<link rel="stylesheet" href="responsive.css">
  <link rel="icon" href="img/favicon.ico">
  <title>Products｜Furniture Design</title>
</head>
<body>
	<div class="order-wrapper">
		<h2>注文内容確認</h2>
		<?php $totalPayment =0; ?>
		<?php foreach ($products as $product): ?>
			<?php 
			$orderCount = $_POST[$product->getName()];
			$product-> setOrderCount($orderCount);
			$totalPayment = $totalPayment+$product->getTotalPrice();
			?>
			<p class='order-amount'>
				<?php echo $product ->getName() ?>
				x
				<?php echo $orderCount ?>
				個
			</p>
			<p class="order-price"><?php echo $product->getTotalPrice() ?>円</p>
    <?php endforeach ?>
    <h3>合計金額: <?php echo $totalPayment?>円</h3>
	</div>
</body>
</html>