<?php
include('koneksi.php');
$bulann = mysqli_query($conn,"select DATE_FORMAT(waktu_pesanan,'%b %y') as bulan ,sum(bayar_pesanan) as total from pesanan group by DATE_FORMAT(waktu_pesanan,'%b %y') desc");
while($row = mysqli_fetch_array($bulann)){
	$bulan[] = $row['bulan'];
	$total[] = $row['total'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Membuat Grafik Menggunakan Chart JS</title>
	<script type="text/javascript" src="Chart.js"></script>
</head>
<body>
	<div style="width: 800px;height: 800px">
		<canvas id="myChart"></canvas>
	</div>


	<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: <?php echo json_encode($bulan); ?>,
				datasets: [{
					label: 'Grafik Penjualan',
					data: <?php echo json_encode($total); ?>,
					backgroundColor: 'rgba(255, 99, 132, 0.2)',
					borderColor: 'rgba(255,99,132,1)',
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>
</body>
</html>