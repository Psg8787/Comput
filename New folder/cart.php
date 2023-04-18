<?php
include 'header.php';
?>

<HTML>

<HEAD>
	<TITLE>Your Cart</TITLE>
	<link href="style.css" type="text/css" rel="stylesheet" />
	<style>
		@media only screen and (max-width: 600px) {
			.footer {
				margin-top: 0px !important;
			}
		}
	</style>
</HEAD>

<BODY>

	<div id="shopping-cart">
		<div class="txt-heading">
			<div class="row">
				<div class="col-8 col-md-10">
					<div>Shopping Cart</div>
				</div>
				<div class="col-4 col-md-2">
					<div class="btl"><a href="index.php"><button class="btn btn-outline-dark">Go Back</button></a></div>
				</div>
			</div>
		</div>




		<a id="btnEmpty" href="cart.php?action=empty">Empty Cart</a>
		<?php
		if (isset($_SESSION["cart_item"])) {
			$total_quantity = 0;
			$total_price = 0;
			?>
			<table class="tbl-cart" cellpadding="10" cellspacing="1">
				<tbody>
					<tr>
						<th style="text-align:left;">Name</th>
						<th style="text-align:left;">Code</th>
						<th style="text-align:right;" width="5%">Quantity</th>
						<th style="text-align:right;" width="10%">Unit Price</th>
						<th style="text-align:right;" width="10%">Price</th>
						<th style="text-align:center;" width="5%">Remove</th>
					</tr>
					<?php
					foreach ($_SESSION["cart_item"] as $item) {
						$item_price = $item["quantity"] * $item["price"];
						?>
						<tr>
							<td><img src="<?php echo $item["image"]; ?>" class="cart-item-image" /><?php echo $item["name"]; ?>
							</td>
							<td>
								<?php echo $item["code"]; ?>
							</td>
							<td style="text-align:right;">
								<?php echo $item["quantity"]; ?>
							</td>
							<td style="text-align:right;">
								<?php echo "$ " . $item["price"]; ?>
							</td>
							<td style="text-align:right;">
								<?php echo "$ " . number_format($item_price, 2); ?>
							</td>
							<td style="text-align:center;"><a href="cart.php?action=remove&code=<?php echo $item["code"]; ?>"
									class="btnRemoveAction"><img src="icon-delete.png" alt="Remove Item" /></a></td>
						</tr>
						<?php
						$total_quantity += $item["quantity"];
						$total_price += ($item["price"] * $item["quantity"]);
					}
					?>

					<tr>
						<td colspan="2" align="right">Total:</td>
						<td align="right">
							<?php echo $total_quantity; ?>
						</td>
						<td align="right" colspan="2"><strong>
								<?php echo "$ " . number_format($total_price, 2); ?>
							</strong></td>
						<td></td>
					</tr>
				</tbody>
			</table>
			<?php
		} else {
			?>
			<div class="no-records">Your Cart is Empty</div>
			<?php
		}
		?>
	</div>

</BODY>

</HTML>

<?php
include 'footer1.php'
	?>