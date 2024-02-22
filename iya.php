<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body bgcolor=" #ecf0f1">
  <table width="95%"color="white">
    <tr>
    <td width="15" align="center"><img src="logo-polije.png" width="300%"></td>
    <td width="50" align="center"><p> <font face="Verdana" size="6"> <b>POLITEKNIK NEGERI JEMBER <br>
    POLIKLINIK </font></b><br>
    Jl. Matrip Kotak Pos 164 Jember 68121<br>
    Provinsi Jawa Timur Telp (037) 4455522<br>
    Email : poliklinik@polije.ac.id<br></p></td>
    <td width="20" align="center"><img src="logo rschuuu.png" width="200%"></td>
    </tr>
    </table>
    <p>
	<a href="input.php" >| Input |</a>
	<a href="data.php" >| Data |</a> 
    </p>
<center>
  <h3>Formulir Pendaftaran Pasien Baru</h3>
</center>
  <p><b>I. IDENTITAS PASIEN</b></p>
  <form action="" method="POST">
  <div class="content">
      <table class="table-form" border="0" width="100%" cellpadding="0" cellspacing="0">
          <tr>
              <td width="20%"><label for="nama">Nama Pasien</label></td>
              <td colspan="3"><input name="nama" id="nama" type="text" class="form"></td>
          </tr>
          <tr>
              <td><label for="tempat_lahir">Tempat Lahir</label></td>
              <td><input name="tempat_lahir" id="tempat_lahir" type="text" class="form"></td>
              <td><label>Tanggal Lahir</label></td>
              <td>
                  <select name="tgl_lahir" class="form">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                      <option>6</option>
                      <option>7</option>
                      <option>8</option>
                      <option>9</option>
                      <option>10</option>
                      <option>11</option>
                      <option>12</option>
                      <option>13</option>
                      <option>14</option>
                      <option>15</option>
                      <option>16</option>
                      <option>17</option>
                      <option>18</option>
                      <option>19</option>
                      <option>20</option>
                      <option>21</option>
                      <option>22</option>
                      <option>23</option>
                      <option>24</option>
                      <option>25</option>
                      <option>26</option>
                      <option>27</option>
                      <option>28</option>
                      <option>29</option>
                      <option>30</option>
                      <option>31</option>
                  </select>
                  <select name="bln_lahir" class="form">
                      <option>Januari</option>
                      <option>Februari</option>
                      <option>Maret</option>
                      <option>April</option>
                      <option>Mei</option>
                      <option>Juni</option>
                      <option>Juli</option>
                      <option>Agustus</option>
                      <option>September</option>
                      <option>Oktober</option>
                      <option>November</option>
                      <option>Desember</option>  
                  </select>
                  <select name="thn_lahir" class="form">
                      <option>1999</option>
                      <option>2000</option>
                      <option>2001</option>
                      <option>2002</option>
                      <option>2003</option>
                      <option>2004</option>
                  </select>
              </td>
          </tr>
          <tr>
              <td valign="top"><label for="alamat">Alamat</label></td>
              <td valign="top" colspan="2">
                  <textarea name="alamat" id="alamat" class="form" cols="50" rows="8"></textarea>
              </td>
              <td valign="top">
                  <div>
                      <label for="provinsi">Provinsi</label>
                      <input type="text" name="provinsi" id="provinsi" class="form">
                  </div>
                <div>
                    <label for="kecamatan">Kecamatan</label>
                    <input type="text" name="kecamatan" id="kecamatan" class="form">
                </div>
                <div>
                    <label for="kelurahan_desa">Kelurahan/Desa</label>
                    <input type="text" name="kelurahan_desa" id="kelurahan_desa" class="form">
                </div>
                  <div>
                      <label for="kode_pos">Kode Pos</label>
                      <input type="number" name="kode_pos" id="kode_pos" class="form">
                  </div>
              </td>
          </tr>
          <tr>
              <td><label for="hp">No. HP</label></td>
              <td colspan="3"><input name="hp" id="hp" type="number" class="form"></td>
          </tr>
          <tr>
              <td><label for="agama">Agama</label></td>
              <td colspan="3"><input name="agama" id="agama" type="text" class="form"></td>
          </tr>
          <tr>
            <td><label for="pendidikan_terakhir">Pendidikan Terakhir</label></td>
            <td colspan="3"><input name="pendidikan_terakhir" id="pendidikan_terakhir" type="text" class="form"></td>
        </tr>
        <tr>
            <td><label for="pekerjaan">Pekerjaan</label></td>
            <td colspan="3"><input name="pekerjaan" id="pekerjaan" type="text" class="form"></td>
        </tr>
      </table>
  </div>
  <p><b>II. PENANGGUNG JAWAB PASIEN</b></p>
  <form action="" method="POST">
  <div class="content">
      <table class="table-form" border="0" width="100%" cellpadding="0" cellspacing="0">
        <tr>
            <td width="20%"><label for="hubungan_pasien">Hubungan Dengan Pasien</label></td>
            <td colspan="3"><input name="hubungan_pasien" id="hubungan_pasien" type="text" class="form"></td>
        </tr>
        <tr>
            <td width="20%"><label for="penganggung_jawab">Nama Penanggung Jawab</label></td>
            <td colspan="3"><input name="penganggung_jawab" id="penganggung_jawab" type="text" class="form"></td>
        </tr>
        <tr>
            <td width="20%"><label for="pendidikan_penanggung">Pendidikan Penanggung Jawab</label></td>
            <td colspan="3"><input name="pendidikan_penanggung" id="pendidikan_penanggung" type="text" class="form"></td>
        </tr>
        <tr>
            <td width="20%"><label for="pekerjaan_penanggung">Pekerjaan Penanggung Jawab</label></td>
            <td colspan="3"><input name="pekerjaan_penanggung" id="pekerjaan_penanggung" type="text" class="form"></td>
        </tr>
    </table>
</div>
<p><b>III. DATA REGISTRASI BEROBAT</b></p>
  <form action="" method="POST">
  <div class="content">
      <table class="table-form" border="0" width="100%" cellpadding="0" cellspacing="0">
        <tr>
            <td width="20%"><label for="poli">Tempat Tujuan Berobat/Poli</label></td>
            <td colspan="3"><input name="poli" id="poli" type="text" class="form"></td>
        </tr>
        <tr>
            <td width="20%"><label for="cara_pembayaran">Cara Pembayaran Pasien</label></td>
            <td colspan="3"><input name="cara_pembayaran" id="cara_pembayaran" type="text" class="form"></td>
        </tr>
        <tr>
            <td width="20%"><label for="cara_masuk">Cara Masuk Pasien</label></td>
            <td colspan="3"><input name="cara_masuk" id="cara_masuk" type="text" class="form"></td>
        </tr>
  <button type="submit" onclick="alert('Terima kasih')">SIMPAN</button>
</form>
</body>
</html>