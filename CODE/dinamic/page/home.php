<!DOCTYPE html>
<html>
<head>
    <?php
    include "connection.php";
    $query = "SELECT * FROM customer";

    $result = mysqli_query($conn, $query);

    if ($result) {
        while ($row=mysqli_fetch_assoc($result)){
            echo "Yeay!!";
        }
    }

    if (isset($_POST['simpan'])){
        mysqli_query($conn, "insert into customer set
        nama_lengkap = '$_POST[nama_lengkap]',
        umur = '$_POST[umur]',
        jenis_kelamin = '$_POST[jenis_kelamin]',
        kamar_tidur = '$_POST[kamar_tidur]',
        kamar_mandi = '$_POST[kamar_mandi]',
        lantai = '$_POST[lantai]',
        luas_bangunan = '$_POST[luas_bangunan]',
        luas_tanah = '$_POST[luas_tanah]',
        furniture = '$_POST[furniture]'");

        echo "Finished";
    }

//     class Fungsi_Model extends PM_Model {
//         function ambil_house(){
//             $query = $this->db>query('SELECT * FROM profilematching');
//             foreach ($query->result() as $row){
//             $id_rumah = $row->$id_rumah;
//             $kamar_tidur = $row->kamar_tidur;
//             $kamar_mandi = $row->kamar_mandi;
//             $lantai = $row->lantai;
//             $luas_bangunan = $row->luas_bangunan;
//             $luas_tanah = $row->luas_tanah;
//             $furniture = $row->furniture;
//             $lokasi = $row->lokasi;

//             $gap_kamartidur = $kamar_tidur-5;
//             $gap_kamarmandi = $kamar_mandi-5;
//             $gap_lantai = $lantai-3;
//             $gap_luasbangunan = $luas_bangunan-3;
//             $gap_luastanah = $luas_tanah-3;
//             $gap_furniture = $furniture-3;
//             $gap_lokasi = $lokasi-3;

//             if ($gap_kamartidur<=0) {
//                 $bobot_kamartidur = $gap_kamartidur+5;
//             }
//             else {
//                 if ($gap_kamartidur==1) {
//                     $bobot_kamartidur=4.5;
//                 }elseif($gap_kamartidur==2) {
//                     $bobot_kamartidur=3.5;
//                 }elseif($gap_kamartidur==3) {
//                     $bobot_kamartidur=2.5;
//                 }elseif($gap_kamartidur==4) {
//                     $bobot_kamartidur==1.5;
//                 }
//             }

//             if ($gap_kamarmandi<=0) {
//                 $bobot_kamarmandi = $gap_kamarmandi+5;
//             }
//             else {
//                 if ($gap_kamarmandi==1) {
//                     $bobot_kamarmandi=4.5;
//                 }elseif($gap_kamarmandi==2) {
//                     $bobot_kamarmandi=3.5;
//                 }elseif($gap_kamarmandi==3) {
//                     $bobot_kamarmandi=2.5;
//                 }elseif($gap_kamarmandi==4) {
//                     $bobot_kamarmandi=1.5;
//                 }
//             }

//             if ($gap_lantai<=0) {
//                 $bobot_lantai = $gap_lantai+5;
//             }
//             else {
//                 if ($gap_lantai==1) {
//                     $bobot_lantai=4.5;
//                 }elseif($gap_lantai==2) {
//                     $bobot_lantai=3.5;
//                 }elseif($gap_lantai==3) {
//                     $bobot_lantai=2.5;
//                 }elseif($gap_lantai==4) {
//                     $bobot_lantai=1.5;
//                 }
//             }

//             if ($gap_luasbangunan<=0) {
//                 $bobot_luasbangunan = $gap_luasbangunan+5;
//             }
//             else {
//                 if ($gap_luasbangunan==1) {
//                     $bobot_luasbangunan=4.5;
//                 }elseif($gap_luasbangunan==2) {
//                     $bobot_luasbangunan=3.5;
//                 }elseif($gap_luasbangunan==3) {
//                     $bobot_luasbangunan=2.5;
//                 }elseif($gap_luasbangunan==4) {
//                     $bobot_luasbangunan=1.5;
//                 }
//             }

//             if ($gap_luastanah<=0) {
//                 $bobot_luastanah = $gap_luastanah+5;
//             }
//             else {
//                 if ($gap_luastanah==1) {
//                     $bobot_luastanah=4.5;
//                 }elseif($gap_luastanah==2) {
//                     $bobot_luastanah=3.5;
//                 }elseif($gap_luastanah==3) {
//                     $bobot_luastanah=2.5;
//                 }elseif($gap_luastanah==4) {
//                     $bobot_luastanah=1.5;
//                 }
//             }

//             if ($gap_furniture<=0) {
//                 $bobot_furniture = $gap_furniture+5;
//             }
//             else {
//                 if ($gap_furniture==1) {
//                     $bobot_furniture=4.5;
//                 }elseif($gap_furniture==2) {
//                     $bobot_furniture=3.5;
//                 }elseif($gap_furniture==3) {
//                     $bobot_furniture=2.5;
//                 }elseif($gap_furniture==4) {
//                     $bobot_furniture=1.5;
//                 }
//             }

//             if ($gap_lokasi<=0) {
//                 $bobot_lokasi = $gap_lokasi+5;
//             }
//             else {
//                 if ($gap_lokasi==1) {
//                     $bobot_lokasi=4.5;
//                 }elseif($gap_lokasi==2) {
//                     $bobot_lokasi=3.5;
//                 }elseif($gap_lokasi==3) {
//                     $bobot_lokasi=2.5;
//                 }elseif($gap_lokasi==4) {
//                     $bobot_lokasi=1.5;
//                 }
//             }
            
//             $core_interior = ($bobot_kamartidur+$bobot_kamarmandi+$bobot_lantai)/3;
//             $sec_interior = ($bobot_luasbangunan+$bobot_luastanah)/2;
//             $main = 0.6*$core_interior + 0.4*$sec_interior;
    
//             $core_factorin = ($bobot_furniture+$bobot_lokasi)/2;
//             $outmain = $core_factorin;
    
//             $total = $main + $outmain;

//             $house[] = array(
//                 'kamar_tidur' => $kamar_tidur,
//                 'kamar_mandi' => $kamar_mandi,
//                 'lantai' => $lantai,
//                 'luas_bangunan' => $luas_bangunan,
//                 'luas_tanah' => $luas_tanah,
//                 'furniture' => $furniture,
//                 'lokasi' => $lokasi,
//                 'gap_kamartidur' => $gap_kamartidur,
//                 'gap_kamarmandi' => $gap_kamarmandi,
//                 'gap_lantai' => $gap_lantai,
//                 'gap_luasbangunan' => $gap_luasbangunan,
//                 'gap_lunastanah' => $gap_luastanah,
//                 'gap_furniture' => $gap_furniture,
//                 'gap_lokasi' => $gap_lokasi,
//                 'bobot_kamartidur' => $bobot_kamartidur,
//                 'bobot_kamarmandi' => $bobot_kamarmandi,
//                 'bobot_lantai' => $bobot_lantai,
//                 'bobot_luasbangunan' => $bobot_luasbangunan,
//                 'bobot_luastanah' => $bobot_luastanah,
//                 'bobot_furniture' => $bobot_furniture,
//                 'bobot_lokasi' => $bobot_lokasi,
//                 'core_interior' => $core_interior,
//                 'sec_interior' => $sec_interior,
//                 'core_factorin' => $core_factorin,
//                 'main' => $main,
//                 'outmain' => $outmain,
//                 'total' => $total
//             );
//             }
//             return $house;
//         }

//         function lihat_house($house){
//             $query = $this->db->query("SELECT * FROM profilematching WHERE id_rumah='".$id_rumah."'");
//     foreach ($query->result() as $row){
//             $kamar_tidur = $row->kamar_tidur;
//             $kamar_mandi = $row->kamar_mandi;
//             $lantai = $row->lantai;
//             $luas_bangunan = $row->luas_bangunan;
//             $luas_tanah = $row->luas_tanah;
//             $furniture = $row->furniture;
//             $lokasi = $row->lokasi;
//         }
//         $house[] = array(
//                 'kamar_tidur' => $kamar_tidur,
//                 'kamar_mandi' => $kamar_mandi,
//                 'lantai' => $lantai,
//                 'luas_bangunan' => $luas_bangunan,
//                 'luas_tanah' => $luas_tanah,
//                 'furniture' => $furniture,
//                 'lokasi' => $lokasi
//         );

//         return $house;
//     }
// }
    ?>
	<title>Home</title>
	<!-- menghubungkan dengan file css -->
	<link rel="stylesheet" type="text/css" href="style1.css">
	<!-- menghubungkan dengan file jquery -->
	<script type="text/javascript" src="jquery.js"></script>
</head>

<body>
<div class="content1">
	<header>
		<h1 class="judul1">Rumah seperti</h1>
        <h3 class="judul2">apa yang anda inginkan?</h3>
	</header>

    <div class="form1">
        <input for="name" placeholder="Nama Lengkap"><br>
        <input type="text" placeholder="Umur"><br>

        <label for="gender" placeholder="Jenis Kelamin">Jenis Kelamin<br>
        <input type="text" placeholder="Jenis Kelamin"><br>
    
        <label for="bedrom">Kamar Tidur</label><br>
        <input type="number" placeholder="Kamar Tidur"><br>

        <label for="bathroom">Kamar Mandi</label><br>
        <input type="number" placeholder="Kamar Mandi"><br>

        <label for="floor">Lantai</label><br>
        <input type="number" placeholder="Lantai"><br>

        <label for="lb">Luas Bangunan</label><br>
        <input type="number" placeholder="Luas Bangunan"><br>

        <label for="lt">Luas Tanah</label><br>
        <input type="number" placeholder="Luas Tanah"><br>

        <label for="frnt">Beserta Furniture?</label><br>
        <input type="text" placeholder="Furniture"><br> 

        
        <td><input type="submit" value="Search" name="simpan"></td>
</form>
</div>
</div>
</body>
</html>