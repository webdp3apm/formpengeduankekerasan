<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <style type="text/css">

        .background {
            position: relative;
        }

        .background img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover; /* Menyesuaikan gambar agar mencakup seluruh area */
            z-index: -1; /* Menempatkan gambar di bawah elemen-elemen lainnya */
            opacity: 35%;
        }

        .background center {
            position: relative;
            z-index: 1; /* Menempatkan elemen-elemen ini di atas gambar */
        }

        .table{
          
        }
    </style>
</head>
<body>

<?php
    $reg = $_POST["no_register"];
    $tgl_pel = $_POST["tanggal_pelaporan"];
    $tgl_kjd = $_POST["tanggal_kejadian"];
    $ket_kas = $_POST["keterangan_kasus"];
    // deskripsi
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["deskripsi_kasus"])) {
            $deskripsi_kasus = $_POST["deskripsi_kasus"];
        } else {
            echo "Deskripsi Kasus tidak ditemukan dalam formulir POST.";
        }
    }
    // deskripsi end
    
    $ket_lok = $_POST["kategori_lokasi_kasus"];
    $tmp_kjd = $_POST["tempat_kejadian"];
    $prov = $_POST["provinsi"];
    $kab_kota = $_POST["kabupaten/kota"];
    
    //perempuan
    if ($_SERVER["REQUEST_METHOD"] !== "POST") {
        echo "Kosong";
    } else {
        $kdrt_perempuan = isset($_POST["kdrt_perempuan"]) ? "a. Kdrt" : "";
        $fisik_perempuan = isset($_POST["fisik_perempuan"]) ? "b. Fisik" : "";
        $psikis_perempuan = isset($_POST["psikis_perempuan"]) ? "c. Psikis" : "";
        $eksploitasi_perempuan = isset($_POST["eksploitasi_perempuan"]) ? "d. Eksploitasi" : "";
        $penelantaran_perempuan = isset($_POST["penelantaran_perempuan"]) ? "e. Penelantaran" : "";
        $seksual = isset($_POST["seksual_perempuan"]) ? "f. Seksual" : "";
    }
    //end perempuan
    
    //anak
    if ($_SERVER["REQUEST_METHOD"] !== "POST") {
        echo "Kosong";
    } else {
        $fisik_anak = isset($_POST["fisik_anak"]) ? "a. Fisik" : "";
        $psikis_anak = isset($_POST["psikis_anak"]) ? "b. Psikis" : "";
        $seksual_anak = isset($_POST["seksual_anak"]) ? "c. Seksual" : "";
        $penelantaran_anak = isset($_POST["penelantaran_anak"]) ? "d. Penelantaran" : "";
    }
    //anak end

    //Kategori Trafficking
    if ($_SERVER["REQUEST_METHOD"] !== "POST") {
        echo "Kosong";
    } else {
        $eksploitasi = isset($_POST["eksploitasi"]) ? "a. Eksploitasi" : "";
        $perbudakan = isset($_POST["perbudakan"]) ? "b. Perbudakan" : "";
        $perdagangan_organ_tubuh = isset($_POST["perdagangan_organ_tubuh"]) ? "c.  Perdagangan Organ" : "";
        $Perdagangan_narkoba = isset($_POST["Perdagangan_narkoba"]) ? "d. Perdagangan Narkoba" : "";
    }
    //Kategori Trafficking end

    $nik = $_POST["nik"];
    $nama = $_POST["nama"];
    $tgl_lahir = $_POST["tempat_tanggal_lahir"];
    $umur = $_POST["usia"];
    $alamat = $_POST["alamat"];
    $prov_kor = $_POST["provinsi_korban"];
    $kab_kota_kor = $_POST["kabupaten_kota_korban"];
    $jes_kel = $_POST["jenis_kelamin"];
    $agama = $_POST["agama"];
    $telpon = $_POST["no_telepon"];
    $pendidikan = $_POST["pendidikan"];
    $kerja = $_POST["pekerjaan"];
    $status = $_POST["status_perkawinan"];
    $difabel = $_POST["difabel"];
    $tdk_kekerasan = $_POST["tindak_kekerasan_yang_dialami"];
    $nik_plk = $_POST["nik_pelaku"];
    $nm_pelaku = $_POST["nama_pelaku"];
    $tgl_lahir_plk = $_POST["tempat_tanggal_lahir_pelaku"];
    $umr_pelaku = $_POST["usia_pelaku"];
    $alt_pelaku = $_POST["alamat_pelaku"];
    $prov_plk = $_POST["provinsi_pelaku"];
    $kab_kota_plk = $_POST["kabupaten_kota_pelaku"];
    $jes_kel_plk = $_POST["jenis_kelamin_pelaku"];
    $agama_plk = $_POST["agama_pelaku"];
    $telpon_plk = $_POST["no_telepon_pelaku"];
    $pendidikan_plk = $_POST["pendidikan_pelaku"];
    $kerja_plk = $_POST["pekerjaan_pelaku"];
    $status_plk = $_POST["status_perkawinan_pelaku"];
    $bangsa = $_POST["kebangsaan_pelaku"];
    $hubungan = $_POST["hubungan_dengan_korban"];
?> 

<div class="background">
  <img src="image/logo.jpg" alt="">
  <div class="container" id="print">
    <div class="row">
      <div class="col-md-12">
        
      
          <h3 class="text-center mb-5">FORM PENGADUAN KEKERASAN PEREMPUAN DAN ANAK</h3>

          <h5 align="center">BERITA ACARA PENGADUAN</h5>
          
          <table class="table table-bordered" width="100%" border="1" cellpadding="3" cellspacing="0">
            <tr>
              <th colspan="3" class="text-center bg-success">FORM DATA KASUS</th>
            </tr>
            <tr>
              <td width="250px">No. Register</td>
              <td align="center">:</td>
              <td><?php echo $reg ?> KTPA/DP3APM-TT</td>
            </tr>
            <tr>
              <td>Tanggal Pelaporan</td>
              <td align="center">:</td>
              <td><?php echo $tgl_pel ?></td>
            </tr>
            <tr>
              <td>Tanggal Kejadian</td>
              <td align="center">:</td>
              <td><?php echo $tgl_kjd ?></td>
            </tr>
            <tr>
              <td>Keterangan Kasus</td>
              <td align="center">:</td>
              <td><?php echo $ket_kas ?></td>
            </tr>
            <tr>
              <td>Deskripsi Kasus</td>
              <td align="center">:</td>
              <td><?php echo $deskripsi_kasus ?></td>
            </tr>
            <tr>
              <td>Kategori Lokasi Kasus</td>
              <td align="center">:</td>
              <td><?php echo $ket_lok ?></td>
            </tr>
            <tr>
              <td>Tempat Kejadian</td>
              <td align="center">:</td>
              <td><?php echo $tmp_kjd ?></td>
            </tr>
            <tr>
              <td>Provinsi</td>
              <td align="center">:</td>
              <td><?php echo $prov ?></td>
            </tr>
            <tr>
              <td>Kabupaten/Kota</td>
              <td align="center">:</td>
              <td><?php echo $kab_kota ?></td>
            </tr>
            <tr bgcolor="lightblue">
              <th colspan="3" class="text-center bg-success">FORM DATA KORBAN</th>
            </tr>
            <tr>
              <td>NIK</td>
              <td align="center">:</td>
              <td><?php echo $nik ?></td>
            </tr>
            <tr>
              <td>Nama</td>
              <td align="center">:</td>
              <td><?php echo $nama ?></td>
            </tr>
            <tr>
              <td>Tempat/Tanggal Lahir</td>
              <td align="center">:</td>
              <td><?php echo $tgl_lahir ?></td>
            </tr>
            <tr>
              <td>Usia</td>
              <td align="center">:</td>
              <td><?php echo $umur ?></td>
            </tr>
            <tr>
              <td>Alamat</td>
              <td align="center">:</td>
              <td><?php echo $alamat ?></td>
            </tr>
            <tr>
              <td>Provinsi</td>
              <td align="center">:</td>
              <td><?php echo $prov_kor ?></td>
            </tr>
            <tr>
              <td>Kabupaten/kota</td>
              <td align="center">:</td>
              <td><?php echo $kab_kota_kor ?></td>
            </tr>
            <tr>
              <td>Jenis Kelamin</td>
              <td align="center">:</td>
              <td><?php echo $jes_kel ?></td>
            </tr>
            <tr>
              <td>Agama</td>
              <td align="center">:</td>
              <td><?php echo $agama ?></td>
            </tr>
            <tr>
              <td>No. Telepon</td>
              <td align="center">:</td>
              <td><?php echo $telpon ?></td>
            </tr>
            <tr>
              <td>Pendidikan</td>
              <td align="center">:</td>
              <td><?php echo $pendidikan ?></td>
            </tr>
            <tr>
              <td>Pekerjaan</td>
              <td align="center">:</td>
              <td><?php echo $kerja ?></td>
            </tr>
            <tr>
              <td>Status Perkawinan</td>
              <td align="center">:</td>
              <td><?php echo $status ?></td>
            </tr>
            <tr>
              <td>Difabel</td>
              <td align="center">:</td>
              <td><?php echo $difabel ?></td>
            </tr>
            <tr>
              <td>Tindak Kekerasan yang Dialami</td>
              <td align="center">:</td>
              <td><?php echo $tdk_kekerasan ?></td>
            </tr>
            <tr>
              <td><b>I. Perempuan</b></td>
              <td align="center">:</td>
              <td></td>
            </tr>
            <tr>
              <td>a. KDRT</td>
              <td align="center">:</td>
              <td><?php echo $kdrt_perempuan ?></td>
            </tr>
            <tr>
              <td>b. Fisik</td>
              <td align="center">:</td>
              <td><?php echo $fisik_perempuan ?></td>
            </tr>
            <tr>
              <td>c. Psikis</td>
              <td align="center">:</td>
              <td><?php echo $psikis_perempuan ?></td>
            </tr>
            <tr>
              <td>d. Eksploitasi</td>
              <td align="center">:</td>
              <td><?php echo $eksploitasi_perempuan ?></td>
            </tr>
            <tr>
              <td>e. Penelantaran</td>
              <td align="center">:</td>
              <td><?php echo $penelantaran_perempuan ?></td>
            </tr>
            <tr>
              <td>f. Seksual</td>
              <td align="center">:</td>
              <td><?php echo $seksual ?></td>
            </tr>
            <tr>
              <td><b>II. Anak</b></td>
              <td align="center">:</td>
              <td></td>
            </tr>
            <tr>
              <td>a. Fisik</td>
              <td align="center">:</td>
              <td><?php echo $fisik_anak ?></td>
            </tr>
            <tr>
              <td>b. Psikis</td>
              <td align="center">:</td>
              <td><?php echo $psikis_anak ?></td>
            </tr>
            <tr>
              <td>c. Seksual</td>
              <td align="center">:</td>
              <td><?php echo $seksual_anak ?></td>
            </tr>
            <tr>
              <td>d. Penelantaran</td>
              <td align="center">:</td>
              <td><?php echo $penelantaran_anak ?></td>
            </tr>
            <tr>
              <td><b>III. Kategori Trafficking</b></td>
              <td align="center">:</td>
              <td></td>
            </tr>
            <tr>
              <td>a. Eksploitasi Seksual</td>
              <td align="center">:</td>
              <td><?php echo $eksploitasi ?></td>
            </tr>
            <tr>
              <td>b. Perbudakan</td>
              <td align="center">:</td>
              <td><?php echo $perbudakan ?></td>
            </tr>
            <tr>
              <td>c. Perdagangan Organ Tubuh</td>
              <td align="center">:</td>
              <td><?php echo $perdagangan_organ_tubuh ?></td>
            </tr>
            <tr>
              <td>d. Perdagangan Narkoba</td>
              <td align="center">:</td>
              <td><?php echo $Perdagangan_narkoba ?></td>
            </tr>
            <tr bgcolor="gold">
              <th colspan="3" class="text-center bg-success">FORM DATA PELAKU</th>
            </tr>
            <tr>
              <td>NIK</td>
              <td align="center">:</td>
              <td><?php echo $nik_plk ?></td>
            </tr>
            <tr>
              <td>Nama</td>
              <td align="center">:</td>
              <td><?php echo $nm_pelaku ?></td>
            </tr>
            <tr>
              <td>Tempat/Tanggal Lahir</td>
              <td align="center">:</td>
              <td><?php echo $tgl_lahir_plk ?></td>
            </tr>
            <tr>
              <td>Usia</td>
              <td align="center">:</td>
              <td><?php echo $umr_pelaku ?></td>
            </tr>
            <tr>
              <td>Alamat</td>
              <td align="center">:</td>
              <td><?php echo $alt_pelaku ?></td>
            </tr>
            <tr>
              <td>Provinsi</td>
              <td align="center">:</td>
              <td><?php echo $prov_plk ?></td>
            </tr>
            <tr>
              <td>Kabupaten/kota</td>
              <td align="center">:</td>
              <td><?php echo $kab_kota_plk ?></td>
            </tr>
            <tr>
              <td>Jenis Kelamin</td>
              <td align="center">:</td>
              <td><?php echo $jes_kel_plk ?></td>
            </tr>
            <tr>
              <td>Agama</td>
              <td align="center">:</td>
              <td><?php echo $agama_plk ?></td>
            </tr>
            <tr>
              <td>No. Telepon</td>
              <td align="center">:</td>
              <td><?php echo $telpon_plk ?></td>
            </tr>
            <tr>
              <td>Pendidikan</td>
              <td align="center">:</td>
              <td><?php echo $pendidikan_plk ?></td>
            </tr>
            <tr>
              <td>Pekerjaan</td>
              <td align="center">:</td>
              <td><?php echo $kerja_plk ?></td>
            </tr>
            <tr>
              <td>Status Perkawinan</td>
              <td align="center">:</td>
              <td><?php echo $status_plk ?></td>
            </tr>
            <tr>
              <td>Kebangsaan</td>
              <td align="center">:</td>
              <td><?php echo $bangsa ?></td>
            </tr>
            <tr>
              <td>Hubungan Dengan Korban</td>
              <td align="center">:</td>
              <td><?php echo $hubungan ?></td>
            </tr>
            <tr>
              <td colspan="2" width="50%">
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p></p>
                <p><b>Pelapor</b></p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>(..................................................................)</p>

              </td>
              <td width="50%">
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>
                  Tebing Tinggi, ................................. 2023<br>
                  <b>Petugas yang Menerima Pengaduan</b>
                </p>
                <p>&nbsp;</p>
                
                <p>
                (..................................................................) <br>
                NIP
              </p>
                
              </td>
            </tr>
          </table>
          <!-- <table width="100%" border="1" cellpadding="3">
            <tr>
              <td colspan="3" rowspan="5"  height="100px">1</td>
              <td colspan="3" rowspan="5"  height="100px">4</td>
            </tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr> -->
          
  </div>
</div>

<p align="left">
        <button class="btn btn-success" onclick="cetak()">Cetak</button>
    </p>

    <script>
        function cetak(){
          window.print();
            // var divContents = document.getElementById("print").innerHTML;
            // var a = window.open('', '', 'height=500, width=500');
            // a.document.write('<html>');
            // a.document.write('<body>');
            // a.document.write(divContents);
            // a.document.write('</body></html>');
            // a.document.close();
            // a.print();
        }
    </script>

    </div>
  </div>
</div>
</body>
</html>