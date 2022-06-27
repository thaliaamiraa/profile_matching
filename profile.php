<?php // jika submit button diklik
  if(isset( $_REQUEST['Simpan_kecerdasan'] ) ){ // ASPEK KECERDASAN
    
      $sql_truncate = mysqli_query($koneksi, "DELETE FROM pm_sample where id_faktor in(1,2,3,4,5,6,7,8,9,10)"); //Ada 10 faktor di aspek kecerdasan
      $queryloop = "SELECT * FROM master_pelamar";
      $sql_loop = mysqli_query($koneksi, $queryloop);
      if(mysqli_num_rows($sql_loop) > 0){
          while($row_loop = mysqli_fetch_array($sql_loop)){
            $a1 = array(array($row_loop['id_pelamar'],1,$_REQUEST[$row_loop['id_pelamar'].'_A1'])); //Disambungkan aspek ke pelamar untuk penilaian
            $a2 = array(array($row_loop['id_pelamar'],2,$_REQUEST[$row_loop['id_pelamar'].'_A2']));
            $a3 = array(array($row_loop['id_pelamar'],3,$_REQUEST[$row_loop['id_pelamar'].'_A3']));
            $a4 = array(array($row_loop['id_pelamar'],4,$_REQUEST[$row_loop['id_pelamar'].'_A4']));
            $a5 = array(array($row_loop['id_pelamar'],5,$_REQUEST[$row_loop['id_pelamar'].'_A5']));
            $a6 = array(array($row_loop['id_pelamar'],6,$_REQUEST[$row_loop['id_pelamar'].'_A6']));
            $a7 = array(array($row_loop['id_pelamar'],7,$_REQUEST[$row_loop['id_pelamar'].'_A7']));
            $a8 = array(array($row_loop['id_pelamar'],8,$_REQUEST[$row_loop['id_pelamar'].'_A8']));
            $a9 = array(array($row_loop['id_pelamar'],9,$_REQUEST[$row_loop['id_pelamar'].'_A9']));
            $a10 = array(array($row_loop['id_pelamar'],10,$_REQUEST[$row_loop['id_pelamar'].'_A10']));
            
            $sqla1 = mysqli_query($koneksi, "INSERT INTO pm_sample(id_sample, id_pelamar, id_faktor, value) VALUES('', '".$a1[0][0]."', '".$a1[0][1]."', '".$a1[0][2]."')");
             $sqla2 = mysqli_query($koneksi, "INSERT INTO pm_sample(id_sample, id_pelamar, id_faktor, value) VALUES('', '".$a2[0][0]."', '".$a2[0][1]."', '".$a2[0][2]."')");
              $sqla3 = mysqli_query($koneksi, "INSERT INTO pm_sample(id_sample, id_pelamar, id_faktor, value) VALUES('', '".$a3[0][0]."', '".$a3[0][1]."', '".$a3[0][2]."')");
               $sqla4 = mysqli_query($koneksi, "INSERT INTO pm_sample(id_sample, id_pelamar, id_faktor, value) VALUES('', '".$a4[0][0]."', '".$a4[0][1]."', '".$a4[0][2]."')");
                $sqla5 = mysqli_query($koneksi, "INSERT INTO pm_sample(id_sample, id_pelamar, id_faktor, value) VALUES('', '".$a5[0][0]."', '".$a5[0][1]."', '".$a5[0][2]."')");
                 $sqla6 = mysqli_query($koneksi, "INSERT INTO pm_sample(id_sample, id_pelamar, id_faktor, value) VALUES('', '".$a6[0][0]."', '".$a6[0][1]."', '".$a6[0][2]."')");
                  $sqla7 = mysqli_query($koneksi, "INSERT INTO pm_sample(id_sample, id_pelamar, id_faktor, value) VALUES('', '".$a7[0][0]."', '".$a7[0][1]."', '".$a7[0][2]."')");
                   $sqla8 = mysqli_query($koneksi, "INSERT INTO pm_sample(id_sample, id_pelamar, id_faktor, value) VALUES('', '".$a8[0][0]."', '".$a8[0][1]."', '".$a8[0][2]."')");
                    $sqla9 = mysqli_query($koneksi, "INSERT INTO pm_sample(id_sample, id_pelamar, id_faktor, value) VALUES('', '".$a9[0][0]."', '".$a9[0][1]."', '".$a9[0][2]."')");
                     $sqla10 = mysqli_query($koneksi, "INSERT INTO pm_sample(id_sample, id_pelamar, id_faktor, value) VALUES('', '".$a10[0][0]."', '".$a10[0][1]."', '".$a10[0][2]."')");

               echo "<script>alert('Proses Profile Matching Tersimpan');location='home.php?page=profile';</script>";

          }
      }

    }

    if(isset( $_REQUEST['Simpan_sikapkerja'] ) ){
    
        $sql_truncate = mysqli_query($koneksi, "DELETE FROM pm_sample where id_faktor in(11,12,13,14,15,16)");
        $queryloop = "SELECT * FROM master_pelamar";
        $sql_loop = mysqli_query($koneksi, $queryloop);
        if(mysqli_num_rows($sql_loop) > 0){
            while($row_loop = mysqli_fetch_array($sql_loop)){
              $a11 = array(array($row_loop['id_pelamar'],11,$_REQUEST[$row_loop['id_pelamar'].'_A11']));
              $a12 = array(array($row_loop['id_pelamar'],12,$_REQUEST[$row_loop['id_pelamar'].'_A12']));
              $a13 = array(array($row_loop['id_pelamar'],13,$_REQUEST[$row_loop['id_pelamar'].'_A13']));
              $a14 = array(array($row_loop['id_pelamar'],14,$_REQUEST[$row_loop['id_pelamar'].'_A14']));
              $a15 = array(array($row_loop['id_pelamar'],15,$_REQUEST[$row_loop['id_pelamar'].'_A15']));
              $a16 = array(array($row_loop['id_pelamar'],16,$_REQUEST[$row_loop['id_pelamar'].'_A16']));

              
              $sqla1 = mysqli_query($koneksi, "INSERT INTO pm_sample(id_sample, id_pelamar, id_faktor, value) VALUES('', '".$a11[0][0]."', '".$a11[0][1]."', '".$a11[0][2]."')");
               $sqla2 = mysqli_query($koneksi, "INSERT INTO pm_sample(id_sample, id_pelamar, id_faktor, value) VALUES('', '".$a12[0][0]."', '".$a12[0][1]."', '".$a12[0][2]."')");
                $sqla3 = mysqli_query($koneksi, "INSERT INTO pm_sample(id_sample, id_pelamar, id_faktor, value) VALUES('', '".$a13[0][0]."', '".$a13[0][1]."', '".$a13[0][2]."')");
                 $sqla4 = mysqli_query($koneksi, "INSERT INTO pm_sample(id_sample, id_pelamar, id_faktor, value) VALUES('', '".$a14[0][0]."', '".$a14[0][1]."', '".$a14[0][2]."')");
                  $sqla5 = mysqli_query($koneksi, "INSERT INTO pm_sample(id_sample, id_pelamar, id_faktor, value) VALUES('', '".$a15[0][0]."', '".$a15[0][1]."', '".$a15[0][2]."')");
                   $sqla6 = mysqli_query($koneksi, "INSERT INTO pm_sample(id_sample, id_pelamar, id_faktor, value) VALUES('', '".$a16[0][0]."', '".$a16[0][1]."', '".$a16[0][2]."')");
                 
                 echo "<script>alert('Proses Profile Matching Tersimpan');location='home.php?page=profile';</script>";
  
            }
        }
  
      }

      if(isset( $_REQUEST['Simpan_perilaku'] ) ){
    
        $sql_truncate = mysqli_query($koneksi, "DELETE FROM pm_sample where id_faktor in(17,18,19,20)");
        $queryloop = "SELECT * FROM master_pelamar";
        $sql_loop = mysqli_query($koneksi, $queryloop);
        if(mysqli_num_rows($sql_loop) > 0){
            while($row_loop = mysqli_fetch_array($sql_loop)){
              $a17 = array(array($row_loop['id_pelamar'],17,$_REQUEST[$row_loop['id_pelamar'].'_A17']));
              $a18 = array(array($row_loop['id_pelamar'],18,$_REQUEST[$row_loop['id_pelamar'].'_A18']));
              $a19 = array(array($row_loop['id_pelamar'],19,$_REQUEST[$row_loop['id_pelamar'].'_A19']));
              $a20 = array(array($row_loop['id_pelamar'],20,$_REQUEST[$row_loop['id_pelamar'].'_A20']));
              
              $sqla1 = mysqli_query($koneksi, "INSERT INTO pm_sample(id_sample, id_pelamar, id_faktor, value) VALUES('', '".$a17[0][0]."', '".$a17[0][1]."', '".$a17[0][2]."')");
               $sqla2 = mysqli_query($koneksi, "INSERT INTO pm_sample(id_sample, id_pelamar, id_faktor, value) VALUES('', '".$a18[0][0]."', '".$a18[0][1]."', '".$a18[0][2]."')");
                $sqla3 = mysqli_query($koneksi, "INSERT INTO pm_sample(id_sample, id_pelamar, id_faktor, value) VALUES('', '".$a19[0][0]."', '".$a19[0][1]."', '".$a19[0][2]."')");
                 $sqla4 = mysqli_query($koneksi, "INSERT INTO pm_sample(id_sample, id_pelamar, id_faktor, value) VALUES('', '".$a20[0][0]."', '".$a20[0][1]."', '".$a20[0][2]."')");
  
                 echo "<script>alert('Proses Profile Matching Tersimpan');location='home.php?page=profile';</script>";
  
            }
        }
  
      }

      
?>
<form class="form-kecerdasan" method="post" action="" role="form">
<div class="card mb-6 shadow-sm">
  <div class="card-header">
     <div class="col-6">
        <select class="custom-select d-block w-50" id="aspek" name="aspek" required>
          <option value="">Pilih Aspek...</option>
          <option value="kecerdasan"<?php echo $_REQUEST['aspek'] == "kecerdasan" ? "selected=selected" : "";?>>Kecerdasan</option>
          <option value="sikapkerja"<?php echo $_REQUEST['aspek'] == "sikapkerja" ? "selected=selected" : "";?>>Sikap Kerja</option>
          <option value="perilaku"<?php echo $_REQUEST['aspek'] == "perilaku" ? "selected=selected" : "";?>>Perilaku</option>
        </select>
     </div>
  </div>
  <!-- Melihat GAP Aspek kecerdasan setiap pelamar -->
  <div class="card-body">  
      <div class="container">
        <div id="spninactive_kecerdasan" style="display:none;">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Nama Pelamar</th>
                <th>A1-Kecerdasan</th>
                <th>A2-Verbalisasi Ide</th>
                <th>A3-SistematikaBerfikir</th>
                <th>A4-KemampuanPenalaran</th>
                <th>A5-Konsentrasi</th>
                <th>A6-Logika</th>
                <th>A7-FleksibilasBerfikir</th>
                <th>A8-ImajinasiKreatif</th>
                <th>A9-Antisipasi</th>
                <th>A10-PotensiKecerdasan</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $query = "SELECT mp.id_pelamar,mp.nama_pelamar,pm.A1,pm.A2,pm.A3,pm.A4,pm.A5,pm.A6,pm.A7,pm.A8,pm.A9,pm.A10 FROM master_pelamar mp left JOIN (SELECT * FROM( select id_pelamar,sum( if(id_faktor=1,value,0) ) as 'A1',sum( if(id_faktor=2,value,0) ) as 'A2',sum( if(id_faktor=3,value,0) ) as 'A3',sum( if(id_faktor=4,value,0) ) as 'A4',sum( if(id_faktor=5,value,0) ) as 'A5',sum( if(id_faktor=6,value,0) ) as 'A6',sum( if(id_faktor=7,value,0) ) as 'A7',sum( if(id_faktor=8,value,0) ) as 'A8',sum( if(id_faktor=9,value,0) ) as 'A9',sum( if(id_faktor=10,value,0) ) as 'A10' from pm_sample group by id_pelamar)tbl) pm on mp.id_pelamar =pm.id_pelamar";
                //$query ="select * from master_pelamar";
                $sql = mysqli_query($koneksi, $query);
                if(mysqli_num_rows($sql) > 0){
                while($row = mysqli_fetch_array($sql)){
              ?>
              <tr>
                <td><?php echo $row['nama_pelamar'];?></td>
                <td>
                  <select class="custom-select d-block w-100" name="<?php echo $row['id_pelamar']?>_A1">
                    <option value="1"  <?php echo $row['A1'] == 1 ? "selected=selected" : "";?>>1 - Kurang</option>
                    <option value="2"  <?php echo $row['A1'] == 2 ? "selected=selected" : "";?>>2 - Cukup</option>
                    <option value="3"  <?php echo $row['A1'] == 3 ? "selected=selected" : "";?>>3 - Baik</option>
                    <option value="4"  <?php echo $row['A1'] == 4 ? "selected=selected" : "";?>>4 - Sangat Baik</option>
                    <option value="5"  <?php echo $row['A1'] == 5 ? "selected=selected" : "";?>>5 - Amat Sangat Baik</option>

                  </select>

                </td>
                <td>
                   <select class="custom-select d-block w-100" name="<?php echo $row['id_pelamar']?>_A2">
                    <option value="1" <?php echo $row['A2'] == 1 ? "selected=selected" : "";?>>1 - Kurang</option>
                    <option value="2" <?php echo $row['A2'] == 2 ? "selected=selected" : "";?>>2 - Cukup</option>
                    <option value="3" <?php echo $row['A2'] == 3 ? "selected=selected" : "";?>>3 - Baik</option>
                    <option value="4" <?php echo $row['A2'] == 4 ? "selected=selected" : "";?>>4 - Sangat Baik</option>
                    <option value="5" <?php echo $row['A2'] == 5 ? "selected=selected" : "";?>>5 - Amat Sangat Baik</option>
                  </select>
                </td>
                <td>
                    <select class="custom-select d-block w-100" name="<?php echo $row['id_pelamar']?>_A3">
                    <option value="1" <?php echo $row['A3'] == 1 ? "selected=selected" : "";?>>1 - Kurang</option>
                    <option value="2" <?php echo $row['A3'] == 2 ? "selected=selected" : "";?>>2 - Cukup</option>
                    <option value="3" <?php echo $row['A3'] == 3 ? "selected=selected" : "";?>>3 - Baik</option>
                    <option value="4" <?php echo $row['A3'] == 4 ? "selected=selected" : "";?>>4 - Sangat Baik</option>
                    <option value="5" <?php echo $row['A3'] == 5 ? "selected=selected" : "";?>>5 - Amat Sangat Baik</option>
                  </select>
                </td>
                <td>
                    <select class="custom-select d-block w-100" name="<?php echo $row['id_pelamar']?>_A4">
                    <option value="1" <?php echo $row['A4'] == 1 ? "selected=selected" : "";?>>1 - Kurang</option>
                    <option value="2" <?php echo $row['A4'] == 2 ? "selected=selected" : "";?>>2 - Cukup</option>
                    <option value="3" <?php echo $row['A4'] == 3 ? "selected=selected" : "";?>>3 - Baik</option>
                    <option value="4" <?php echo $row['A4'] == 4 ? "selected=selected" : "";?>>4 - Sangat Baik</option>
                    <option value="5" <?php echo $row['A4'] == 5 ? "selected=selected" : "";?>>5 - Amat Sangat Baik</option>
                  </select>
                </td>
                <td>
                    <select class="custom-select d-block w-100" name="<?php echo $row['id_pelamar']?>_A5">
                    <option value="1" <?php echo $row['A5'] == 1 ? "selected=selected" : "";?>>1 - Kurang</option>
                    <option value="2" <?php echo $row['A5'] == 2 ? "selected=selected" : "";?>>2 - Cukup</option>
                    <option value="3" <?php echo $row['A5'] == 3 ? "selected=selected" : "";?>>3 - Baik</option>
                    <option value="4" <?php echo $row['A5'] == 4 ? "selected=selected" : "";?>>4 - Sangat Baik</option>
                    <option value="5" <?php echo $row['A5'] == 5 ? "selected=selected" : "";?>>5 - Amat Sangat Baik</option>
                  </select>
                </td>
                <td>
                    <select class="custom-select d-block w-100" name="<?php echo $row['id_pelamar']?>_A6">
                    <option value="1" <?php echo $row['A6'] == 1 ? "selected=selected" : "";?>>1 - Kurang</option>
                    <option value="2" <?php echo $row['A6'] == 2 ? "selected=selected" : "";?>>2 - Cukup</option>
                    <option value="3" <?php echo $row['A6'] == 3 ? "selected=selected" : "";?>>3 - Baik</option>
                    <option value="4" <?php echo $row['A6'] == 4 ? "selected=selected" : "";?>>4 - Sangat Baik</option>
                    <option value="5" <?php echo $row['A6'] == 5 ? "selected=selected" : "";?>>5 - Amat Sangat Baik</option>
                  </select>
                </td>
                <td>
                    <select class="custom-select d-block w-100" name="<?php echo $row['id_pelamar']?>_A7">
                    <option value="1" <?php echo $row['A7'] == 1 ? "selected=selected" : "";?>>1 - Kurang</option>
                    <option value="2" <?php echo $row['A7'] == 2 ? "selected=selected" : "";?>>2 - Cukup</option>
                    <option value="3" <?php echo $row['A7'] == 3 ? "selected=selected" : "";?>>3 - Baik</option>
                    <option value="4" <?php echo $row['A7'] == 4 ? "selected=selected" : "";?>>4 - Sangat Baik</option>
                    <option value="5" <?php echo $row['A7'] == 5 ? "selected=selected" : "";?>>5 - Amat Sangat Baik</option>
                  </select>
                </td>
                <td>
                    <select class="custom-select d-block w-100" name="<?php echo $row['id_pelamar']?>_A8">
                    <option value="1" <?php echo $row['A8'] == 1 ? "selected=selected" : "";?>>1 - Kurang</option>
                    <option value="2" <?php echo $row['A8'] == 2 ? "selected=selected" : "";?>>2 - Cukup</option>
                    <option value="3" <?php echo $row['A8'] == 3 ? "selected=selected" : "";?>>3 - Baik</option>
                    <option value="4" <?php echo $row['A8'] == 4 ? "selected=selected" : "";?>>4 - Sangat Baik</option>
                    <option value="5" <?php echo $row['A8'] == 5 ? "selected=selected" : "";?>>5 - Amat Sangat Baik</option>
                  </select>
                </td>
                <td>
                    <select class="custom-select d-block w-100" name="<?php echo $row['id_pelamar']?>_A9">
                    <option value="1" <?php echo $row['A9'] == 1 ? "selected=selected" : "";?>>1 - Kurang</option>
                    <option value="2" <?php echo $row['A9'] == 2 ? "selected=selected" : "";?>>2 - Cukup</option>
                    <option value="3" <?php echo $row['A9'] == 3 ? "selected=selected" : "";?>>3 - Baik</option>
                    <option value="4" <?php echo $row['A9'] == 4 ? "selected=selected" : "";?>>4 - Sangat Baik</option>
                    <option value="5" <?php echo $row['A9'] == 5 ? "selected=selected" : "";?>>5 - Amat Sangat Baik</option>
                  </select>
                </td>
                <td>
                    <select class="custom-select d-block w-100" name="<?php echo $row['id_pelamar']?>_A10">
                    <option value="1" <?php echo $row['A10'] == 1 ? "selected=selected" : "";?>>1 - Kurang</option>
                    <option value="2" <?php echo $row['A10'] == 2 ? "selected=selected" : "";?>>2 - Cukup</option>
                    <option value="3" <?php echo $row['A10'] == 3 ? "selected=selected" : "";?>>3 - Baik</option>
                    <option value="4" <?php echo $row['A10'] == 4 ? "selected=selected" : "";?>>4 - Sangat Baik</option>
                    <option value="5" <?php echo $row['A10'] == 5 ? "selected=selected" : "";?>>5 - Amat Sangat Baik</option>
                  </select>
                </td>
              </tr>
              <?php
                }
              }
              ?>
            </tbody>
          </table>
          <button class="btn btn-success" type="submit" id="Simpan_kecerdasan" name="Simpan_kecerdasan">Simpan</button>
        </div>

        <div id="spninactive_sikapkerja" style="display:none;">
            
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Nama Pelamar</th>
                  <th>A11-EnergiPsikis</th>
                  <th>A12-KetelitianDanTanggung Jawab</th>
                  <th>A13-Kehati-hatian</th>
                  <th>A14-PengendalianRasa</th>
                  <th>A15-DoronganPrestasi</th>
                  <th>A16-VitalitasPerencanaan</th>
                </tr>
              </thead>
              <tbody>
                <?php
                    $query = "SELECT mp.id_pelamar,mp.nama_pelamar,pm.A11,pm.A12,pm.A13,pm.A14,pm.A15,pm.A16 FROM master_pelamar mp left JOIN (SELECT * FROM( select id_pelamar,sum( if(id_faktor=11,value,0) ) as 'A11',sum( if(id_faktor=12,value,0) ) as 'A12',sum( if(id_faktor=13,value,0) ) as 'A13',sum( if(id_faktor=14,value,0) ) as 'A14',sum( if(id_faktor=15,value,0) ) as 'A15',sum( if(id_faktor=16,value,0) ) as 'A16' from pm_sample group by id_pelamar)tbl) pm on mp.id_pelamar =pm.id_pelamar";
                    //$query ="select * from master_pelamar";
                    $sql = mysqli_query($koneksi, $query);
                    if(mysqli_num_rows($sql) > 0){
                    while($row = mysqli_fetch_array($sql)){
                  ?>
                  <tr>
                    <td><?php echo $row['nama_pelamar'];?></td>
                    <td>
                      <select class="custom-select d-block w-100" name="<?php echo $row['id_pelamar']?>_A11">
                        <option value="1"  <?php echo $row['A11'] == 1 ? "selected=selected" : "";?>>1 - Kurang</option>
                        <option value="2"  <?php echo $row['A11'] == 2 ? "selected=selected" : "";?>>2 - Cukup</option>
                        <option value="3"  <?php echo $row['A11'] == 3 ? "selected=selected" : "";?>>3 - Baik</option>
                        <option value="4"  <?php echo $row['A11'] == 4 ? "selected=selected" : "";?>>4 - Sangat Baik</option>
                        <option value="5"  <?php echo $row['A11'] == 5 ? "selected=selected" : "";?>>5 - Amat Sangat Baik</option>
                      </select>

                    </td>
                    <td>
                       <select class="custom-select d-block w-100" name="<?php echo $row['id_pelamar']?>_A12">
                        <option value="1" <?php echo $row['A12'] == 1 ? "selected=selected" : "";?>>1 - Kurang</option>
                        <option value="2" <?php echo $row['A12'] == 2 ? "selected=selected" : "";?>>2 - Cukup</option>
                        <option value="3" <?php echo $row['A12'] == 3 ? "selected=selected" : "";?>>3 - Baik</option>
                        <option value="4" <?php echo $row['A12'] == 4 ? "selected=selected" : "";?>>4 - Sangat Baik</option>
                        <option value="5" <?php echo $row['A12'] == 5 ? "selected=selected" : "";?>>5 - Amat Sangat Baik</option>
                      </select>
                    </td>
                    <td>
                        <select class="custom-select d-block w-100" name="<?php echo $row['id_pelamar']?>_A13">
                        <option value="1" <?php echo $row['A13'] == 1 ? "selected=selected" : "";?>>1 - Kurang</option>
                        <option value="2" <?php echo $row['A13'] == 2 ? "selected=selected" : "";?>>2 - Cukup</option>
                        <option value="3" <?php echo $row['A13'] == 3 ? "selected=selected" : "";?>>3 - Baik</option>
                        <option value="4" <?php echo $row['A13'] == 4 ? "selected=selected" : "";?>>4 - Sangat Baik</option>
                        <option value="5" <?php echo $row['A13'] == 5 ? "selected=selected" : "";?>>5 - Amat Sangat Baik</option>
                      </select>
                    </td>
                    <td>
                        <select class="custom-select d-block w-100" name="<?php echo $row['id_pelamar']?>_A14">
                        <option value="1" <?php echo $row['A14'] == 1 ? "selected=selected" : "";?>>1 - Kurang</option>
                        <option value="2" <?php echo $row['A14'] == 2 ? "selected=selected" : "";?>>2 - Cukup</option>
                        <option value="3" <?php echo $row['A14'] == 3 ? "selected=selected" : "";?>>3 - Baik</option>
                        <option value="4" <?php echo $row['A14'] == 4 ? "selected=selected" : "";?>>4 - Sangat Baik</option>
                        <option value="5" <?php echo $row['A14'] == 5 ? "selected=selected" : "";?>>5 - Amat Sangat Baik</option>
                      </select>
                    </td>
                    <td>
                        <select class="custom-select d-block w-100" name="<?php echo $row['id_pelamar']?>_A15">
                        <option value="1" <?php echo $row['A15'] == 1 ? "selected=selected" : "";?>>1 - Kurang</option>
                        <option value="2" <?php echo $row['A15'] == 2 ? "selected=selected" : "";?>>2 - Cukup</option>
                        <option value="3" <?php echo $row['A15'] == 3 ? "selected=selected" : "";?>>3 - Baik</option>
                        <option value="4" <?php echo $row['A15'] == 4 ? "selected=selected" : "";?>>4 - Sangat Baik</option>
                        <option value="5" <?php echo $row['A15'] == 5 ? "selected=selected" : "";?>>5 - Amat Sangat Baik</option>
                      </select>
                    </td>
                    <td>
                        <select class="custom-select d-block w-100" name="<?php echo $row['id_pelamar']?>_A16">
                        <option value="1" <?php echo $row['A16'] == 1 ? "selected=selected" : "";?>>1 - Kurang</option>
                        <option value="2" <?php echo $row['A16'] == 2 ? "selected=selected" : "";?>>2 - Cukup</option>
                        <option value="3" <?php echo $row['A16'] == 3 ? "selected=selected" : "";?>>3 - Baik</option>
                        <option value="4" <?php echo $row['A16'] == 4 ? "selected=selected" : "";?>>4 - Sangat Baik</option>
                        <option value="5" <?php echo $row['A16'] == 5 ? "selected=selected" : "";?>>5 - Amat Sangat Baik</option>
                      </select>
                    </td>
                  </tr>
                  <?php
                    }
                  }
                  ?>
              </tbody>
            </table>
          
             <button class="btn btn-success" type="submit" id="Simpan_sikapkerja" name="Simpan_sikapkerja">Simpan</button>
           </div>

           <div id="spninactive_perilaku" style="display:none;">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Nama Pelamar</th>
                  <th>A17-Kekuasaan</th>
                  <th>A18-Pengaruh</th>
                  <th>A19-KeteguhanHati</th>
                  <th>A20-Pemenuhan</th>
                </tr>
              </thead>
              <tbody>
                <?php
                    $query = "SELECT mp.id_pelamar,mp.nama_pelamar,pm.A17,pm.A18,pm.A19,pm.A20 FROM master_pelamar mp left JOIN (SELECT * FROM( select id_pelamar,sum( if(id_faktor=17,value,0) ) as 'A17',sum( if(id_faktor=18,value,0) ) as 'A18',sum( if(id_faktor=19,value,0) ) as 'A19',sum( if(id_faktor=20,value,0) ) as 'A20' from pm_sample group by id_pelamar)tbl) pm on mp.id_pelamar =pm.id_pelamar";
                    //$query ="select * from master_pelamar";
                    $sql = mysqli_query($koneksi, $query);
                    if(mysqli_num_rows($sql) > 0){
                    while($row = mysqli_fetch_array($sql)){
                  ?>
                  <tr>
                    <td><?php echo $row['nama_pelamar'];?></td>
                    <td>
                      <select class="custom-select d-block w-100" name="<?php echo $row['id_pelamar']?>_A17">
                        <option value="1"  <?php echo $row['A17'] == 1 ? "selected=selected" : "";?>>1 - Kurang</option>
                        <option value="2"  <?php echo $row['A17'] == 2 ? "selected=selected" : "";?>>2 - Cukup</option>
                        <option value="3"  <?php echo $row['A17'] == 3 ? "selected=selected" : "";?>>3 - Baik</option>
                        <option value="4"  <?php echo $row['A17'] == 4 ? "selected=selected" : "";?>>4 - Sangat Baik</option>
                        <option value="5"  <?php echo $row['A17'] == 5 ? "selected=selected" : "";?>>5 - Amat Sangat Baik</option>
                      </select>

                    </td>
                    <td>
                       <select class="custom-select d-block w-100" name="<?php echo $row['id_pelamar']?>_A18">
                        <option value="1" <?php echo $row['A18'] == 1 ? "selected=selected" : "";?>>1 - Kurang</option>
                        <option value="2" <?php echo $row['A18'] == 2 ? "selected=selected" : "";?>>2 - Cukup</option>
                        <option value="3" <?php echo $row['A18'] == 3 ? "selected=selected" : "";?>>3 - Baik</option>
                        <option value="4" <?php echo $row['A18'] == 4 ? "selected=selected" : "";?>>4 - Sangat Baik</option>
                        <option value="5" <?php echo $row['A18'] == 5 ? "selected=selected" : "";?>>5 - Amat Sangat Baik</option>
                      </select>
                    </td>
                    <td>
                        <select class="custom-select d-block w-100" name="<?php echo $row['id_pelamar']?>_A19">
                        <option value="1" <?php echo $row['A19'] == 1 ? "selected=selected" : "";?>>1 - Kurang</option>
                        <option value="2" <?php echo $row['A19'] == 2 ? "selected=selected" : "";?>>2 - Cukup</option>
                        <option value="3" <?php echo $row['A19'] == 3 ? "selected=selected" : "";?>>3 - Baik</option>
                        <option value="4" <?php echo $row['A19'] == 4 ? "selected=selected" : "";?>>4 - Sangat Baik</option>
                        <option value="5" <?php echo $row['A19'] == 5 ? "selected=selected" : "";?>>5 - Amat Sangat Baik</option>
                      </select>
                    </td>
                    <td>
                        <select class="custom-select d-block w-100" name="<?php echo $row['id_pelamar']?>_A20">
                        <option value="1" <?php echo $row['A20'] == 1 ? "selected=selected" : "";?>>1 - Kurang</option>
                        <option value="2" <?php echo $row['A20'] == 2 ? "selected=selected" : "";?>>2 - Cukup</option>
                        <option value="3" <?php echo $row['A20'] == 3 ? "selected=selected" : "";?>>3 - Baik</option>
                        <option value="4" <?php echo $row['A20'] == 4 ? "selected=selected" : "";?>>4 - Sangat Baik</option>
                        <option value="5" <?php echo $row['A20'] == 5 ? "selected=selected" : "";?>>5 - Amat Sangat Baik</option>
                      </select>
                    </td>
                  </tr>
                  <?php
                    }
                  }
                  ?>
              </tbody>
            </table>
             <button class="btn btn-success" type="submit" id="Simpan_perilaku" name="Simpan_perilaku">Simpan</button>
           </div>
          </div>
      </div>
    </div>
    </form>
    <script src="js/jquery-1.12.4.min.js"></script>
  <script>
   $(document).ready(function() {
      var ddlTxt = $("#aspek option:selected").val();
      $("#spninactive_" + ddlTxt).show();

      $("#aspek").on("change", function() {
        var ddlTxt = $("#aspek option:selected").val();
        $(".container div").hide();
        $("#spninactive_" + ddlTxt).show();
      });

  });
  </script>