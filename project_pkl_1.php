<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
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

      
        input{
            border:none;
            border-bottom:#999 solid 2px;   
        }

    </style>
</head>

<body>

<div class="background">
        <img src="image/logo.jpg" alt="">
    <center>
    <h1>FORM PENGADUAN KEKERASAN PEREMPUAN DAN ANAK</h1>
    </center>
    <form action="receive_project_pkl_1.php" method="POST">
    <br>
    <center>
    <h1>BERITA ACARA PENGADUAN</h1>
    <br>
    <h3>FORM DATA KASUS</h3>
    </center>
    <br>
        <table>
            <tr>
                <td>No. Register</td>
                <td>:</td>
                <td><input type="text" name="no_register"></td>
            </tr>
            <tr>
                <td>Tanggal Pelaporan</td>
                <td>:</td>
                <td><input type="date" name="tanggal_pelaporan"></td>
            </tr>
            <tr>
                <td>Tanggal Kejadian</td>
                <td>:</td>
                <td><input type="date" name="tanggal_kejadian"></td>
            </tr>
            <tr>
                <td>Keterangan Kasus</td>
                <td>:</td>
                <td>
                    <select name="keterangan_kasus">
                        <option selected="selected">-Pilih kasus</option>
                        <option value="baru">Baru</option>
                        <option value="rujukan">Rujukan</option> 
                    </select>
                </td>
            </tr>
            <tr>
                <td>Deskripsi Kasus</td>
                <td>:</td>
                <td>
                    <textarea name="deskripsi_kasus" cols="60" rows="10"></textarea></br>
                </td>
            </tr>
            <tr>
                <td>Kategori Lokasi Kasus</td>
                <td>:</td>
                <td>
                    <select name="kategori_lokasi_kasus">
                        <option selected="selected">-Pilih lokasi</option>
                        <option value="rumah tangga">a.  Rumah Tangga</option>
                        <option value="tempat kerja">b.  Tempat Kerja</option>
                        <option value="sekolah fasilitas umum">c. Sekolah Fasilitas Umum</option>
                       
                    </select>
                </td>
            <tr>
                <td>Tempat Kejadian</td>
                <td>:</td>
                <td><input type="text" name="tempat_kejadian"></td>
            </tr>
            <tr>
                <td>Provinsi</td>
                <td>:</td>
                <td><input type="text" name="provinsi"></td>
            </tr>
            <tr>
                <td>Kabupaten/Kota</td>
                <td>:</td>
                <td><input type="text" name="kabupaten/kota"></td>
            </tr>
        </table>
        <br>
        <center>
        <h3>FORM DATA KORBAN</h3>
        </center>
        <br>
        <table>
            <tr>
                <td>NIK</td>
                <td>:</td>
                <td><input type="text" name="nik" maxlength="16" onkeypress="return event.charCode >= 48 && event.charCode <= 57"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Tempat/Tanggal Lahir</td>
                <td>:</td>
                <td><input type="date" name="tempat_tanggal_lahir"></td>
            </tr>
            <tr>
                <td>Usia</td>
                <td>:</td>
                <td><input type="text" name="usia" onkeypress="return event.charCode >= 48 && event.charCode <= 57"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td>Provinsi</td>
                <td>:</td>
                <td><input type="text" name="provinsi_korban"></td>
            </tr>
            <tr>
                <td>Kabupaten/Kota</td>
                <td>:</td>
                <td><input type="text" name="kabupaten_kota_korban"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                    <input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki
                    <input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan
                </td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td>
                    <select name="agama">
                        <option selected="selected">-Pilih agama</option>
                        <option value="islam"> Islam</option>
                        <option value="kristen"> Kristen</option>
                        <option value="katolik"> Katolik</option>
                        <option value="buddha"> Buddha</option>
                        <option value="hindu"> Hindu</option>
                        <option value="Konghuchu"> Konghuchu</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>No. Telepon</td>
                <td>:</td>
                <td><input type="text" name="no_telepon" maxlength="12" onkeypress="return event.charCode >= 48 && event.charCode <= 57"></td>
            </tr>
            <tr>
                <td>Pendidikan</td>
                <td>:</td>
                <td>
                    <select name="pendidikan">
                        <option selected="selected">-Pilih pendidikan</option>
                        <option value="sd"> SD</option>
                        <option value="smp"> SMP</option>
                        <option value="sma_smk"> SMA/SMK</option>
                        <option value="s1"> S1</option>
                        <option value="s2"> S2</option>
                     </select>
                </td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td>:</td>
                <td><input type="text" name="pekerjaan"></td>
            </tr>
            <tr>
                <td>Status Perkawinan</td>
                <td>:</td>
                <td>
                    <select name="status_perkawinan">
                        <option selected="selected">-Pilih Perkawinan</option>
                        <option value="kawin"> Kawin</option>
                        <option value="belum_kawin"> Belum Kawin</option>
                        <option value="janda"> Janda</option>
                        <option value="duda"> Duda</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Difabel</td>
                <td>:</td>
                <td>
                    <select name="difabel">
                        <option selected="selected">-Pilih Difabel</option>
                        <option value="kawin"> Ya</option>
                        <option value="tidak"> Tidak</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Tindak kekerasan yang dialami</td>
                <td>:</td>
                <td><input type="text" name="tindak_kekerasan_yang_dialami"></td>
            </tr>
            <br>
            <form>
                <tr>
                    <td><h3>I.  Perempuan</h3></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="kdrt_perempuan"><label for="kdrt">a. Kdrt</label></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="fisik_perempuan"><label for="kdrt">b. Fisik</label></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="psikis_perempuan"><label for="psikis">c. Psikis</label></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="eksploitasi_perempuan"><label for="eksploitasi">d. Eksploitasi</label></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="penelantaran_perempuan"><label for="penelantaran">e. Penelantaran</label></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="seksual_perempuan"><label for="seksual">f. Seksual</label></td>
                </tr>
            </form>
            <tr>
                <td><h3>II. Anak</h3></td>
            </tr>
            <tr>
                    <td><input type="checkbox" name="fisik_anak"><label for="fisik">a. Fisik</label></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="psikis_anak"><label for="psikis">b. Psikis</label></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="seksual_anak"><label for="seksual">c. Seksual</label></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="penelantaran_anak"><label for="penelantaran">d. Penelantaran</label></td>
                </tr>
            <tr>
                <td><h3>III. Kategori Trafficking</h3></td>
            </tr>
            <tr>
                    <td><input type="checkbox" name="eksploitasi"><label for="eksploitasi">a. Eksploitasi</label></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="perbudakan"><label for="perbudakan">b. Perbudakan</label></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="perdagangan_organ_tubuh"><label for="perdagangan_organ_tubuh">c. Perdagangan Organ</label></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="Perdagangan_narkoba"><label for="Perdagangan_narkoba">d. Perdagangan Narkoba</label></td>
                </tr>
        </table>
        <br>
        <center>
        <h3>FORM DATA PELAKU</h3>
        </center>
        <br>
        <table>
            <tr>
                <td>NIK</td>
                <td>:</td>
                <td><input type="text" name="nik_pelaku" maxlength="16" onkeypress="return event.charCode >= 48 && event.charCode <= 57"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama_pelaku"></td>
            </tr>
            <tr>
                <td>Tempat/Tanggal Lahir</td>
                <td>:</td>
                <td><input type="date" name="tempat_tanggal_lahir_pelaku"></td>
            </tr>
            <tr>
                <td>Usia</td>
                <td>:</td>
                <td><input type="text" name="usia_pelaku" onkeypress="return event.charCode >= 48 && event.charCode <= 57"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input type="text" name="alamat_pelaku"></td>
            </tr>
            <tr>
                <td>Provinsi</td>
                <td>:</td>
                <td><input type="text" name="provinsi_pelaku"></td>
            </tr>
            <tr>
                <td>Kabupaten/Kota</td>
                <td>:</td>
                <td><input type="text" name="kabupaten_kota_pelaku"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                    <input type="radio" name="jenis_kelamin_pelaku" value="laki-laki"> Laki-laki
                    <input type="radio" name="jenis_kelamin_pelaku" value="perempuan"> Perempuan
                </td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td>
                    <select name="agama_pelaku">
                        <option selected="selected">-Pilih agama</option>
                        <option value="islam"> Islam</option>
                        <option value="kristen"> Kristen</option>
                        <option value="katolik"> Katolik</option>
                        <option value="buddha"> Buddha</option>
                        <option value="hindu"> Hindu</option>
                        <option value="Konghuchu"> Konghuchu</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>No. Telepon</td>
                <td>:</td>
                <td><input type="text" name="no_telepon_pelaku" maxlength="12"></td>
            </tr>
            <tr>
                <td>Pendidikan</td>
                <td>:</td>
                <td>
                    <select name="pendidikan_pelaku">
                        <option selected="selected">-Pilih pendidikan</option>
                        <option value="sd"> SD</option>
                        <option value="smp"> SMP</option>
                        <option value="sma_smk"> SMA/SMK</option>
                        <option value="s1"> S1</option>
                        <option value="s2"> S2</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td>:</td>
                <td><input type="text" name="pekerjaan_pelaku"></td>
            </tr>
            <tr>
                <td>Status Perkawinan</td>
                <td>:</td>
                <td>
                    <select name="status_perkawinan_pelaku">
                        <option selected="selected">-Pilih Perkawinan</option>
                        <option value="kawin"> Kawin</option>
                        <option value="belum_kawin"> Belum Kawin</option>
                        <option value="janda"> Janda</option>
                        <option value="duda"> Duda</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Kebangsaan</td>
                <td>:</td>
                <td><input type="text" name="kebangsaan_pelaku"></td>
            </tr>
            <tr>
                <td>Hubungan Dengan Korban</td>
                <td>:</td>
                <td><input type="text" name="hubungan_dengan_korban"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="kirim"></td>
            </tr>
    </form>
    </table>
</div>
    
</body>
</html>