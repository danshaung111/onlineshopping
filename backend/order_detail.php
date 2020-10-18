<?php
session_start();
if (isset($_SESSION['loginuser']) && $_SESSION['loginuser']['role_name']=="Admin" ) {

	include 'include/header.php';
	include 'dbconnect.php';

	$id=$_GET['id'];


	$sql="SELECT item_order.*, items.name as item_name,items.price as item_price,orders.voucherno as vno,orders.total as Total,orders.orderdate as order_date,users.name as user_name FROM item_order INNER JOIN items ON item_order.item_id=items.id INNER JOIN orders ON item_order.order_id=orders.id INNER JOIN users ON orders.user_id=users.id WHERE item_order.order_id=:id";
	$stmt=$pdo->prepare($sql);
	$stmt->bindParam(':id',$id);
	$stmt->execute();
	$orderdetails= $stmt->fetchAll();

	date_default_timezone_set('Asia/Yangon');
	$ordertime=date('h:i:sA');

	// date_default_timezone_set("Asia/Yangon");
	// echo "Time is".date("h:i:sa");

	// var_dump($orderdetails);

?>

<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Order Detail</h1>
		<a href="order_list.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-backward fa-sm text-white-50"></i> Go Back</a>
	</div>
	
	<div class="container my-5 py-5">
		<div class="row">
			<table class="table table-bordered">
				<thead>
					<?php foreach ($orderdetails as $orderdetail) {
						}
					?>
					<tr>
						<td colspan="4">
							<table class="table table-borderless">
								<tr>
									<td scope="col">Casher</td>
									<td scope="col">:</td>
									<td scope="col"><?php echo $orderdetail['user_name']; ?></td>
									<td scope="col">Date</td>
									<td scope="col">:</td>
									<td scope="col"><?php echo $orderdetail['order_date']; ?></td>
								</tr>
								<tr>
									<td scope="col">Voucher</td>
									<td scope="col">:</td>
									<td scope="col"><?php echo $orderdetail['vno']; ?></td>
									<td scope="col">Order Time</td>
									<td scope="col">:</td>
									<td scope="col"><?php echo $ordertime; ?></td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<th>Item Name</th>
						<th>Price</th>
						<th style="text-align: center;">Qty</th>
						<th style="text-align: center;">Amount</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($orderdetails as $orderdetail) {
						$price=$orderdetail['item_price'];
						$qty=$orderdetail['qty'];
						$amount=$price*$qty;
					?>
					<tr>
						<td><?php echo $orderdetail['item_name']; ?></td>
						<td><?php echo $orderdetail['item_price']; ?></td>
						<td style="text-align: center;"><?php echo $orderdetail['qty']; ?></td>
						<td style="text-align: center;"><?php echo $amount; ?></td>
					</tr>
				<?php } ?>
					<tr>
						<tr class="table table-borderless">
							<td scope="col" colspan="2">Total Amount</td>
							<td scope="col" style="text-align: center;">:</td>
							<td scope="col" style="text-align: center;"><?php echo $orderdetail['Total']; ?></td>
						</tr>	
					</tr>

				</tbody>
			</table>
		</div>
	</div>


<?php
	
	include 'include/footer.php';
}else{
  header("location:../index.php");
}
?>
