
<?php
$koneksi=mysqli_connect("localhost","root","","perhitungan");
if(mysqli_connect_errno()){
    echo "Gagal konek ke database." . mysqli_connect_error();
}
?>
<html>
<center>
<form>
        a: <input type="number" name="a"><br>
        b: <input type="number" name="b"><br>
       
            <input type="submit" name="count" value="hitung"><br>
            <input type="submit" name="runtun" value="hitung runtun"><br>
            <input type="submit" name="reset" value="reset"><br>
            <input type="submit" name="resetruntun" value="resetruntun"><br>

            
    </form>
</center>
    </html>

<?php
if(isset($_GET['reset'])){
    $del=mysqli_query ($koneksi, "DELETE  FROM jumlah");
}
?>
<?php
if(isset($_GET['resetruntun'])){
    $del=mysqli_query ($koneksi, "DELETE  FROM jumlahruntun");
    
}
?>
    <?php
    if(isset($_GET['count']))
    {
        $a= $_GET['a'];
        $b = $_GET['b'];

        //echo "hasil = $c";
        
        $c = $a+$b;
	if ($c>=10) {
		$ket="A";
	}

	elseif ($c>=8) {
		$ket="B";
	}

	elseif ($c>=6) {
		$ket="C";
	}

	elseif ($c>=4) {
		$ket="D";
	}

	elseif ($c<4) {
		$ket="E";
    }

        $sql = mysqli_query($koneksi , "INSERT INTO jumlah (a, b, c, ket) VALUES ('$a', '$b', '$c', '$ket')") or die(
            mysqli_error($koneksi));
   // if(sql){
       // echo '<script>alert("Berhasil menyimpan data."); document.location="coba penjumlahan.php?";</script>';
    //}else{
     //   echo '<div class="alert-warning">Gagal melakukan proses edit data.</div>';
    //} 


    }
    ?>
    <?php
    if(isset($_GET['runtun']))
    {
        $a= $_GET['a'];
        $b = $_GET['b'];
         

        //echo "hasil = $c";
        for($i=0;$i<=10;$i++){
        $c = $a+$b;
	if ($c>=10) {
		$ket="A";
	}

	elseif ($c>=8) {
		$ket="B";
	}

	elseif ($c>=6) {
		$ket="C";
	}

	elseif ($c>=4) {
		$ket="D";
	}

	elseif ($c<4) {
		$ket="E";
    }
    $sql = mysqli_query($koneksi , "INSERT INTO jumlahruntun (a, b, c, ket) VALUES ('$a', '$b', '$c', '$ket')") or die(
        mysqli_error($koneksi));
        $a=$b;
        $b=$c;
}
    
    }
    ?>

   
<center>jumlah : <input type="text" name="c" value="<?php echo $c; ?>" readonly=readonly></center>
<center><p>TABEL HASIL HITUNG</p>
   <table border="1">
	<tr>
<th>NO.</th>
<th>A</th>
<th>B</th>
<th>C</th>
<th>KETERANGAN</th>
</tr></center>
<?php
$sql=mysqli_query($koneksi,"SELECT * FROM jumlah");
while ($data=mysqli_fetch_assoc($sql)){
    ?>
<tr>
    <td><?php echo $data ['id']?></td>
    <td><?php echo $data ['a']?></td>
    <td><?php echo $data ['b']?></td>
    <td><?php echo $data ['c']?></td>
    <td><?php echo $data ['ket']?></td>
</tr>
<?php
}
?>
</table>
<center><p>TABEL HASIL HITUNG RUNTUN</p>
   <table border="1">
	<tr>
<th>NO.</th>
<th>A</th>
<th>B</th>
<th>C</th>
<th>KETERANGAN</th>
</tr></center>
<?php
$sql=mysqli_query($koneksi,"SELECT * FROM jumlahruntun");
while ($data=mysqli_fetch_assoc($sql)){
    ?>
<tr>
    <td><?php echo $data ['id']?></td>
    <td><?php echo $data ['a']?></td>
    <td><?php echo $data ['b']?></td>
    <td><?php echo $data ['c']?></td>
    <td><?php echo $data ['ket']?></td>
</tr>
<?php
}
?>
</table>