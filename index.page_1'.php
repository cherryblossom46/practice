<?php require_once('data.php') ?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel='stylesheet' href='style.css'>
	<link rel='stylesheet' href='responsive.css'>
	<link rel="stylesheet" href="responsive.css">
  <link rel="icon" href="img/favicon.ico">
  <title>Products｜Furniture Design</title>
</head>
<body>
<?php include('./header.php');?>
	<div class="wrapper">
		<form method='post' action='confirm.php'>
 	<div class="product-items">
		<?php foreach ($products as $product): ?>
			<div class="catalogpage">
			<a href='#<?php echo  $product->getName();?>' class="product-item">
				<img src="<?php echo $product->getImage(); ?>" class="menu-item-image">
				<h3 class="product-item-name"><?php echo $product->getName() ?></h3>
				<p class="price">¥<?php echo $product->getTaxIncludedPrice() ?>（税込）</p>
			</a>
			<input type='text' value='0' name='<?php echo $product ->getName() ?>'>
			<span>個</span>
			</div>
		<?php endforeach ?>
	</div>
	</div>
	<input type='submit' value='注文する' id='submit' >
	</form>
	<?php include('./footer.php');?>
	<script src="script.js"></script>
</body>
</html>