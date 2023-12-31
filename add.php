<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles/addStyle.css">
	<title>Add product</title>
</head>

<body>
<form action="includes/add.inc.php" method="post">
	<nav>
		<h1>Add Product</h1>
		<div class="buttons">
			<button class="save-btn" name="save" type="submit">Save</button>
			<button class="cancel-btn" name="cancel" type="submit">Cancel</button>
		</div>
	</nav>
	<hr>
	<main>
		<div class="input-container">
			<ul class="input-list">
				<li class="li-inputs">
					<label for="sku">SKU:</label>
					<input class="sku-input" type="text" id="sku" name="product_sku" placeholder="Enter sku...">
				</li>
				<li class="li-inputs">
					<label for="name">Product Name:</label>
					<input class="name-input" type="text" id="name" name="product_name" placeholder="Enter name...">
				</li>
				<li class="li-inputs">
					<label for="price">Product Price:</label>
					<input class="price-input" type="number" step="00.01" id="price" name="product_price"
					       placeholder="Enter price...">
				</li>
				<li class="li-inputs">
					<label for="type_switcher">Product Type:</label>
					<select class="type-input" name="type_switcher" id="type_switcher">
						<option value="Type switcher">Type switcher</option>
						<option value="DVD">DVD</option>
						<option value="Furniture">Furniture</option>
						<option value="Book">Book</option>
					</select>
				</li>
				<li class="generated_li li-inputs">
				</li>
			</ul>
		</div>
	</main>
</form>
<script src="scripts/script.js"></script>
</body>
</html>