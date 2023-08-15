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
					<li class="inputs">
						<label for="sku">SKU:</label>
						<input type="text" id="sku" name="product_sku" placeholder="Enter sku...">
					</li>
					<li class="inputs">
						<label for="name">Product Name:</label>
						<input type="text" id="name" name="product_name" placeholder="Enter name...">
					</li>
					<li class="inputs">
						<label for="price">Product Price:</label>
						<input type="number" id="price" name="product_price" placeholder="Enter price...">
					</li>
					<li class="inputs">
						<label for="type_switcher">Product Type:</label>
						<select name="type_switcher" id="type_switcher">
							<option value="Type switcher">Type switcher</option>
							<option value="DVD">DVD</option>
							<option value="Furniture">Furniture</option>
							<option value="Book">Book</option>
						</select>
					</li>
					<li class="generated_li inputs">
					</li>
				</ul>
			</div>
		</main>
	</form>
	<script src="scripts/script.js"></script>
</body>

</html>