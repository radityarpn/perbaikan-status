<div class="card-center" style=" margin-left: px; width: 50rem;">
<table class="responsive-table" border="2" style="width: 100%;">
	<tr>
		<td><h4></h4></td>
	</tr>
          <table class="table table-light table-striped-columns">
		<td>No</td>
		<td>NIK Pelapor</td>
		<td>Nama Pelapor</td>
		<td>Nama Petugas</td>
		<td>Tanggal Masuk</td>
		<td>Tanggal Ditanggapi</td>
		<td>Status</td>
	</tr>
	</form>
</div>


<?php 
include '../conn/koneksi.php';
$no=1;
$query = mysqli_query($koneksi,"SELECT * FROM pengaduan INNER JOIN masyarakat ON pengaduan.nik=masyarakat.nik INNER JOIN tanggapan ON tanggapan.id_pengaduan=pengaduan.id_pengaduan INNER JOIN petugas ON tanggapan.id_petugas=petugas.id_petugas ORDER BY tgl_pengaduan DESC");
while ($r=mysqli_fetch_assoc($query)) { ?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $r['nik']; ?></td>
			<td><?php echo $r['nama']; ?></td>
			<td><?php echo $r['nama_petugas']; ?></td>
			<td><?php echo $r['tgl_pengaduan']; ?></td>
			<td><?php echo $r['tgl_tanggapan']; ?></td>
			<td><?php echo $r['status']; ?></td>
		</tr>
<?php	}
?>
</table>
<script type="text/javascript">
	window.print();
</script>