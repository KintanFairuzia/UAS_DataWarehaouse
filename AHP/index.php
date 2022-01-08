
<?php
include('config.php');
include('fungsi.php');

// header
include('header.php');
?>

	<section class="content">
			<h2 class="ui header">SPK Pemilihan Supplier Obat</h2>
			 
			<br>
			Kelas 4C D4 Teknik Informatika
			<ol class="ui list">
				<li>Kintan Fairuzia 19090035</li>
				<li>Nur Khadifah 19090075</li>
				<li>Abu Bakar S 19090111</li>
			</ol>
			<h3 class="ui header">Tabel Tingkat Kepentingan</h3>
			<table class="ui collapsing striped blue table">
				<thead>
					<tr>
						<th>Nilai Numerik</th>
						<th>Tingkat Kepentingan</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="center aligned">1</td>
						<td>Sama penting</td>
					</tr>
					<tr>
						<td class="center aligned">3</td>
						<td>Cukup penting</td>
					</tr>
					<tr>
						<td class="center aligned">5</td>
						<td>Lebih penting</td>
					</tr>
					<tr>
						<td class="center aligned">7</td>
						<td>Sangat lebih penting</td>
					</tr>
					<tr>
						<td class="center aligned">9</td>
						<td>Mutlak lebih penting </td>
					</tr>
				</tbody>
			</table>

	</section>

<?php include('footer.php'); ?>
