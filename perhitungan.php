
<link href="css/perhitungan.css" rel="stylesheet">

<div class="container">
<div class="panel panel-primary">
<div class="panel-heading"><strong>PERHITUNGAN</strong></div>
<div class="panel-body" style=" border: 1px solid #e7e7e7;">

<!-- KECERDASAN -->
<div class="panel panel-default">
<div class="panel-heading"><strong>Aspek Kecerdasan</strong></div>
<div class="table-responsive">
<table class="table  table-striped table-hover" style="border: 0px;">
<tbody> <tr>
                    <th>Nama Pelamar</th>
                    <th>A1</th>
                    <th>A2</th>
                    <th>A3</th>
                    <th>A4</th>
                    <th>A5</th>
                    <th>A6</th>
                    <th>A7</th>
                    <th>A8</th>
                    <th>A9</th>
                    <th>A10</th>
                  </tr>
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
                      <?php echo $row['A1'];?>
                    </td>
                    <td>
                      <?php echo $row['A2'];?>
                    </td>
                    <td>
                        <?php echo $row['A3'];?>
                    </td>
                    <td>
                       <?php echo $row['A4'];?>
                    </td>
                    <td>
                       <?php echo $row['A5'];?>
                    </td>
                    <td>
                       <?php echo $row['A6'];?>
                    </td>
                    <td>
                       <?php echo $row['A7'];?>
                    </td>
                    <td>
                       <?php echo $row['A8'];?>
                    </td>
                    <td>
                       <?php echo $row['A9'];?>
                    </td>
                    <td>
                       <?php echo $row['A10'];?>
                    </td>
                  </tr>
                  <?php
                    }
                  }
                  ?>

</tbody><tfoot><tr>
<th>Nilai Kriteria</th>
<td class="text-primary"><?php echo cari_nilai("select target as nilai from pm_faktor where id_faktor=1");?></td>
<td class="text-primary"><?php echo cari_nilai("select target as nilai from pm_faktor where id_faktor=2");?></td>
<td class="text-primary"><?php echo cari_nilai("select target as nilai from pm_faktor where id_faktor=3");?></td>
<td class="text-primary"><?php echo cari_nilai("select target as nilai from pm_faktor where id_faktor=4");?></td>
<td class="text-primary"><?php echo cari_nilai("select target as nilai from pm_faktor where id_faktor=5");?></td>
<td class="text-primary"><?php echo cari_nilai("select target as nilai from pm_faktor where id_faktor=6");?></td>
<td class="text-primary"><?php echo cari_nilai("select target as nilai from pm_faktor where id_faktor=7");?></td>
<td class="text-primary"><?php echo cari_nilai("select target as nilai from pm_faktor where id_faktor=8");?></td>
<td class="text-primary"><?php echo cari_nilai("select target as nilai from pm_faktor where id_faktor=9");?></td>
<td class="text-primary"><?php echo cari_nilai("select target as nilai from pm_faktor where id_faktor=10");?></td>
</tr></tfoot>
</table>
</div>
<div class="panel-body">PERHITUNGAN PEMETAAN GAP <strong></strong>:</div>
<div class="table-responsive">
<table class="table  table-striped table-hover" style="border: 0px;">
<tbody> <tr>
                    <th>Nama Pelamar</th>
                    <th>A1</th>
                    <th>A2</th>
                    <th>A3</th>
                    <th>A4</th>
                    <th>A5</th>
                    <th>A6</th>
                    <th>A7</th>
                    <th>A8</th>
                    <th>A9</th>
                    <th>A10</th>
                  </tr>
                  <?php
                    $query = "SELECT mp.id_pelamar,mp.nama_pelamar,pm.A1,pm.A2,pm.A3,pm.A4,pm.A5,pm.A6,pm.A7,pm.A8,pm.A9,pm.A10 FROM master_pelamar mp left JOIN (SELECT * FROM( select id_pelamar,sum( if(id_faktor=1,value,0) ) as 'A1',sum( if(id_faktor=2,value,0) ) as 'A2',sum( if(id_faktor=3,value,0) ) as 'A3',sum( if(id_faktor=4,value,0) ) as 'A4',sum( if(id_faktor=5,value,0) ) as 'A5',sum( if(id_faktor=6,value,0) ) as 'A6',sum( if(id_faktor=7,value,0) ) as 'A7',sum( if(id_faktor=8,value,0) ) as 'A8',sum( if(id_faktor=9,value,0) ) as 'A9',sum( if(id_faktor=10,value,0) ) as 'A10' from pm_sample group by id_pelamar)tbl) pm on mp.id_pelamar =pm.id_pelamar";
                    //$query ="select * from master_pelamar";
                    $sql = mysqli_query($koneksi, $query);
                    $value1 =cari_nilai("select target as nilai from pm_faktor where id_faktor=1");
                    $value2 =cari_nilai("select target as nilai from pm_faktor where id_faktor=2");
                    $value3 =cari_nilai("select target as nilai from pm_faktor where id_faktor=3");
                    $value4 =cari_nilai("select target as nilai from pm_faktor where id_faktor=4");
                    $value5 =cari_nilai("select target as nilai from pm_faktor where id_faktor=5");
                    $value6 =cari_nilai("select target as nilai from pm_faktor where id_faktor=6");
                    $value7 =cari_nilai("select target as nilai from pm_faktor where id_faktor=7");
                    $value8 =cari_nilai("select target as nilai from pm_faktor where id_faktor=8");
                    $value9 =cari_nilai("select target as nilai from pm_faktor where id_faktor=9");
                    $value10 =cari_nilai("select target as nilai from pm_faktor where id_faktor=10");

                    if(mysqli_num_rows($sql) > 0){
                    while($row = mysqli_fetch_array($sql)){
                      $gap=array();

                  ?>
                  <tr>
                    <td><?php echo $row['nama_pelamar'];?></td>
                    <td>
                      <?php echo $gap[$row['id_pelamar']] = $row['A1']-$value1;?>
                    </td>
                    <td>
                      <?php echo $gap[$row['id_pelamar']] = $row['A2']-$value2;?>
                    </td>
                    <td>
                        <?php echo $gap[$row['id_pelamar']] = $row['A3']-$value3;?>
                    </td>
                    <td>
                       <?php echo $gap[$row['id_pelamar']] = $row['A4']-$value4;?>
                    </td>
                    <td>
                       <?php echo $gap[$row['id_pelamar']] = $row['A5']-$value5;?>
                    </td>
                    <td>
                       <?php echo $gap[$row['id_pelamar']] = $row['A6']-$value6;?>
                    </td>
                    <td>
                       <?php echo $gap[$row['id_pelamar']] = $row['A7']-$value7;?>
                    </td>
                    <td>
                       <?php echo $gap[$row['id_pelamar']] = $row['A8']-$value8;?>
                    </td>
                    <td>
                       <?php echo $gap[$row['id_pelamar']] = $row['A9']-$value9;?>
                    </td>
                    <td>
                       <?php echo $gap[$row['id_pelamar']] = $row['A10']-$value10;?>
                    </td>
                  </tr>
                  <?php
                    }
                  }
                  ?>

</tbody>
</table>
</div>
<div class="panel-body">PEMBOBOTAN NILAI GAP <strong></strong>:</div>
<div class="table-responsive">
<table class="table  table-striped table-hover" style="border: 0px;">
<tbody> <tr>
                    <th>Nama Pelamar</th>
                    <th>A1</th>
                    <th>A2</th>
                    <th>A3</th>
                    <th>A4</th>
                    <th>A5</th>
                    <th>A6</th>
                    <th>A7</th>
                    <th>A8</th>
                    <th>A9</th>
                    <th>A10</th>
                  </tr>
                  <?php
                    $query = "SELECT mp.id_pelamar,mp.nama_pelamar,pm.A1,pm.A2,pm.A3,pm.A4,pm.A5,pm.A6,pm.A7,pm.A8,pm.A9,pm.A10 FROM master_pelamar mp left JOIN (SELECT * FROM( select id_pelamar,sum( if(id_faktor=1,value,0) ) as 'A1',sum( if(id_faktor=2,value,0) ) as 'A2',sum( if(id_faktor=3,value,0) ) as 'A3',sum( if(id_faktor=4,value,0) ) as 'A4',sum( if(id_faktor=5,value,0) ) as 'A5',sum( if(id_faktor=6,value,0) ) as 'A6',sum( if(id_faktor=7,value,0) ) as 'A7',sum( if(id_faktor=8,value,0) ) as 'A8',sum( if(id_faktor=9,value,0) ) as 'A9',sum( if(id_faktor=10,value,0) ) as 'A10' from pm_sample group by id_pelamar)tbl) pm on mp.id_pelamar =pm.id_pelamar";
                    //$query ="select * from master_pelamar";
                    $sql = mysqli_query($koneksi, $query);
                    $value1 =cari_nilai("select target as nilai from pm_faktor where id_faktor=1");
                    $value2 =cari_nilai("select target as nilai from pm_faktor where id_faktor=2");
                    $value3 =cari_nilai("select target as nilai from pm_faktor where id_faktor=3");
                    $value4 =cari_nilai("select target as nilai from pm_faktor where id_faktor=4");
                    $value5 =cari_nilai("select target as nilai from pm_faktor where id_faktor=5");
                    $value6 =cari_nilai("select target as nilai from pm_faktor where id_faktor=6");
                    $value7 =cari_nilai("select target as nilai from pm_faktor where id_faktor=7");
                    $value8 =cari_nilai("select target as nilai from pm_faktor where id_faktor=8");
                    $value9 =cari_nilai("select target as nilai from pm_faktor where id_faktor=9");
                    $value10 =cari_nilai("select target as nilai from pm_faktor where id_faktor=10");
                    if(mysqli_num_rows($sql) > 0){
                    while($row = mysqli_fetch_array($sql)){
                      $terbobot=array();

                      $bobot1 = $row['A1']-$value1;
                      $query1 ="select * from pm_bobot where selisih = ".$bobot1."";
                      $sql1 = mysqli_query($koneksi, $query1);
                      $row1 = mysqli_fetch_array($sql1);

                      $bobot2 = $row['A2']-$value2;
                      $query2 ="select * from pm_bobot where selisih = ".$bobot2."";
                      $sql2 = mysqli_query($koneksi, $query2);
                      $row2 = mysqli_fetch_array($sql2);

                      $bobot3 = $row['A3']-$value3;
                      $query3 ="select * from pm_bobot where selisih = ".$bobot3."";
                      $sql3 = mysqli_query($koneksi, $query3);
                      $row3 = mysqli_fetch_array($sql3);

                      $bobot4 = $row['A4']-$value4;
                      $query4 ="select * from pm_bobot where selisih = ".$bobot4."";
                      $sql4 = mysqli_query($koneksi, $query4);
                      $row4 = mysqli_fetch_array($sql4);

                      $bobot5 = $row['A5']-$value5;
                      $query5 ="select * from pm_bobot where selisih = ".$bobot5."";
                      $sql5 = mysqli_query($koneksi, $query5);
                      $row5 = mysqli_fetch_array($sql5);

                      $bobot6 = $row['A6']-$value6;
                      $query6 ="select * from pm_bobot where selisih = ".$bobot6."";
                      $sql6 = mysqli_query($koneksi, $query6);
                      $row6 = mysqli_fetch_array($sql6);

                      $bobot7 = $row['A7']-$value7;
                      $query7 ="select * from pm_bobot where selisih = ".$bobot7."";
                      $sql7 = mysqli_query($koneksi, $query7);
                      $row7 = mysqli_fetch_array($sql7);

                      $bobot8 = $row['A8']-$value8;
                      $query8 ="select * from pm_bobot where selisih = ".$bobot8."";
                      $sql8 = mysqli_query($koneksi, $query8);
                      $row8 = mysqli_fetch_array($sql8);

                      $bobot9 = $row['A9']-$value9;
                      $query9 ="select * from pm_bobot where selisih = ".$bobot9."";
                      $sql9 = mysqli_query($koneksi, $query9);
                      $row9 = mysqli_fetch_array($sql9);

                      $bobot10 = $row['A10']-$value10;
                      $query10 ="select * from pm_bobot where selisih = ".$bobot10."";
                      $sql10 = mysqli_query($koneksi, $query10);
                      $row10 = mysqli_fetch_array($sql10);
                  ?>
                  <tr>
                    <td><?php echo $row['nama_pelamar'];?></td>
                    <td>
                      <?php echo $terbobot[$row['id_pelamar']] = $row1['bobot']?>
                    </td>
                    <td>
                      <?php echo $terbobot[$row['id_pelamar']] = $row2['bobot']?>
                    </td>
                    <td>
                        <?php echo $terbobot[$row['id_pelamar']] = $row3['bobot']?>
                    </td>
                    <td>
                       <?php echo $terbobot[$row['id_pelamar']] = $row4['bobot']?>
                    </td>
                    <td>
                       <?php echo $terbobot[$row['id_pelamar']] = $row5['bobot']?>
                    </td>
                    <td>
                       <?php echo $terbobot[$row['id_pelamar']] = $row6['bobot']?>
                    </td>
                    <td>
                       <?php echo $terbobot[$row['id_pelamar']] = $row7['bobot']?>
                    </td>
                    <td>
                       <?php echo $terbobot[$row['id_pelamar']] = $row8['bobot']?>
                    </td>
                    <td>
                       <?php echo $terbobot[$row['id_pelamar']] = $row9['bobot']?>
                    </td>
                    <td>
                       <?php echo $terbobot[$row['id_pelamar']] = $row10['bobot']?>
                    </td>
                  </tr>
                  <?php
                    }
                  }
                  ?>

</tbody>
</table>
</div>
<div class="panel-body">PERHITUNGAN FAKTOR <strong></strong>:</div>
<div class="table-responsive">
<table class="table  table-striped table-hover" style="border: 0px;">
<tbody> <tr>
                    <th>Nama Pelamar</th>
                    <th>A1</th>
                    <th>A2</th>
                    <th>A3</th>
                    <th>A4</th>
                    <th>A5</th>
                    <th>A6</th>
                    <th>A7</th>
                    <th>A8</th>
                    <th>A9</th>
                    <th>A10</th>
                    <th>NCF</th>
                    <th>NSF</th>
                    <th>Total</th>
                  </tr>
                  <?php
                    $query = "SELECT mp.id_pelamar,mp.nama_pelamar,pm.A1,pm.A2,pm.A3,pm.A4,pm.A5,pm.A6,pm.A7,pm.A8,pm.A9,pm.A10 FROM master_pelamar mp left JOIN (SELECT * FROM( select id_pelamar,sum( if(id_faktor=1,value,0) ) as 'A1',sum( if(id_faktor=2,value,0) ) as 'A2',sum( if(id_faktor=3,value,0) ) as 'A3',sum( if(id_faktor=4,value,0) ) as 'A4',sum( if(id_faktor=5,value,0) ) as 'A5',sum( if(id_faktor=6,value,0) ) as 'A6',sum( if(id_faktor=7,value,0) ) as 'A7',sum( if(id_faktor=8,value,0) ) as 'A8',sum( if(id_faktor=9,value,0) ) as 'A9',sum( if(id_faktor=10,value,0) ) as 'A10' from pm_sample group by id_pelamar)tbl) pm on mp.id_pelamar =pm.id_pelamar";
                    //$query ="select * from master_pelamar";
                    $sql = mysqli_query($koneksi, $query);
                    $value1 =cari_nilai("select target as nilai from pm_faktor where id_faktor=1");
                    $value2 =cari_nilai("select target as nilai from pm_faktor where id_faktor=2");
                    $value3 =cari_nilai("select target as nilai from pm_faktor where id_faktor=3");
                    $value4 =cari_nilai("select target as nilai from pm_faktor where id_faktor=4");
                    $value5 =cari_nilai("select target as nilai from pm_faktor where id_faktor=5");
                    $value6 =cari_nilai("select target as nilai from pm_faktor where id_faktor=6");
                    $value7 =cari_nilai("select target as nilai from pm_faktor where id_faktor=7");
                    $value8 =cari_nilai("select target as nilai from pm_faktor where id_faktor=8");
                    $value9 =cari_nilai("select target as nilai from pm_faktor where id_faktor=9");
                    $value10 =cari_nilai("select target as nilai from pm_faktor where id_faktor=10");

                    if(mysqli_num_rows($sql) > 0){
                    while($row = mysqli_fetch_array($sql)){
                      $terbobot=array();

                      $bobot1 = $row['A1']-$value1;
                      $query1 ="select * from pm_bobot where selisih = ".$bobot1."";
                      $sql1 = mysqli_query($koneksi, $query1);
                      $row1 = mysqli_fetch_array($sql1);

                      $bobot2 = $row['A2']-$value2;
                      $query2 ="select * from pm_bobot where selisih = ".$bobot2."";
                      $sql2 = mysqli_query($koneksi, $query2);
                      $row2 = mysqli_fetch_array($sql2);

                      $bobot3 = $row['A3']-$value3;
                      $query3 ="select * from pm_bobot where selisih = ".$bobot3."";
                      $sql3 = mysqli_query($koneksi, $query3);
                      $row3 = mysqli_fetch_array($sql3);

                      $bobot4 = $row['A4']-$value4;
                      $query4 ="select * from pm_bobot where selisih = ".$bobot4."";
                      $sql4 = mysqli_query($koneksi, $query4);
                      $row4 = mysqli_fetch_array($sql4);

                      $bobot5 = $row['A5']-$value5;
                      $query5 ="select * from pm_bobot where selisih = ".$bobot5."";
                      $sql5 = mysqli_query($koneksi, $query5);
                      $row5 = mysqli_fetch_array($sql5);

                      $bobot6 = $row['A6']-$value6;
                      $query6 ="select * from pm_bobot where selisih = ".$bobot6."";
                      $sql6 = mysqli_query($koneksi, $query6);
                      $row6 = mysqli_fetch_array($sql6);

                      $bobot7 = $row['A7']-$value7;
                      $query7 ="select * from pm_bobot where selisih = ".$bobot7."";
                      $sql7 = mysqli_query($koneksi, $query7);
                      $row7 = mysqli_fetch_array($sql7);

                      $bobot8 = $row['A8']-$value8;
                      $query8 ="select * from pm_bobot where selisih = ".$bobot8."";
                      $sql8 = mysqli_query($koneksi, $query8);
                      $row8 = mysqli_fetch_array($sql8);

                      $bobot9 = $row['A9']-$value9;
                      $query9 ="select * from pm_bobot where selisih = ".$bobot9."";
                      $sql9 = mysqli_query($koneksi, $query9);
                      $row9 = mysqli_fetch_array($sql9);

                      $bobot10 = $row['A10']-$value10;
                      $query10 ="select * from pm_bobot where selisih = ".$bobot10."";
                      $sql10 = mysqli_query($koneksi, $query10);
                      $row10 = mysqli_fetch_array($sql10);

                      $core_persen =cari_nilai("select bobot_core as nilai from pm_aspek where id_aspek=1");
                      $secondary_persen = cari_nilai("select bobot_secondary as nilai from pm_aspek where id_aspek=1");

                  ?>
                  <tr>
                    <td><?php echo $row['nama_pelamar'];?></td>
                    <td>
                      <?php echo $terbobot[$row['id_pelamar']] = $row1['bobot']?>
                    </td>
                    <td>
                      <?php echo $terbobot[$row['id_pelamar']] = $row2['bobot']?>
                    </td>
                    <td>
                        <?php echo $terbobot[$row['id_pelamar']] = $row3['bobot']?>
                    </td>
                    <td>
                       <?php echo $terbobot[$row['id_pelamar']] = $row4['bobot']?>
                    </td>
                    <td>
                       <?php echo $terbobot[$row['id_pelamar']] = $row5['bobot']?>
                    </td>
                    <td>
                       <?php echo $terbobot[$row['id_pelamar']] = $row6['bobot']?>
                    </td>
                    <td>
                       <?php echo $terbobot[$row['id_pelamar']] = $row7['bobot']?>
                    </td>
                    <td>
                       <?php echo $terbobot[$row['id_pelamar']] = $row8['bobot']?>
                    </td>
                    <td>
                       <?php echo $terbobot[$row['id_pelamar']] = $row9['bobot']?>
                    </td>
                    <td>
                       <?php echo $terbobot[$row['id_pelamar']] = $row10['bobot']?>
                    </td>
                    <!-- core faktor -->
                    <td>
                       <?php echo $terbobot[$row['id_pelamar']] = ($row1['bobot']+$row3['bobot']+$row4['bobot']+$row5['bobot']+$row6['bobot'])/5?>
                    </td>
                    <!-- secondary factor -->
                    <td>
                       <?php echo $terbobot[$row['id_pelamar']] = ($row2['bobot']+$row7['bobot']+$row8['bobot']+$row9['bobot']+$row10['bobot'])/5?>
                    </td>
                    <td class="text-primary">
                       <?php echo $terbobot[$row['id_pelamar']] = (($core_persen*($row1['bobot']+$row3['bobot']+$row4['bobot']+$row5['bobot']+$row6['bobot'])/5)/100)+(($secondary_persen*($row2['bobot']+$row7['bobot']+$row8['bobot']+$row9['bobot']+$row10['bobot'])/5)/100)?>
                    </td>

                  </tr>
                  <?php
                    }
                  }
                  ?>
                  <tr>
                  <td></td>
                  <td class="text-primary"><?php echo cari_nilai("select type as nilai from pm_faktor where id_faktor=1");?></td>
                  <td class="text-primary"><?php echo cari_nilai("select type as nilai from pm_faktor where id_faktor=2");?></td>
                  <td class="text-primary"><?php echo cari_nilai("select type as nilai from pm_faktor where id_faktor=3");?></td>
                  <td class="text-primary"><?php echo cari_nilai("select type as nilai from pm_faktor where id_faktor=4");?></td>
                  <td class="text-primary"><?php echo cari_nilai("select type as nilai from pm_faktor where id_faktor=5");?></td>
                  <td class="text-primary"><?php echo cari_nilai("select type as nilai from pm_faktor where id_faktor=6");?></td>
                  <td class="text-primary"><?php echo cari_nilai("select type as nilai from pm_faktor where id_faktor=7");?></td>
                  <td class="text-primary"><?php echo cari_nilai("select type as nilai from pm_faktor where id_faktor=8");?></td>
                  <td class="text-primary"><?php echo cari_nilai("select type as nilai from pm_faktor where id_faktor=9");?></td>
                  <td class="text-primary"><?php echo cari_nilai("select type as nilai from pm_faktor where id_faktor=10");?></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  </tr>

</tbody>
</table>
</div>
</div>

<!-- SIKAP KERJA -->
<div class="panel panel-default">
<div class="panel-heading"><strong>Aspek Sikap Kerja</strong></div>
<div class="table-responsive">
<table class="table  table-striped table-hover" style="border: 0px;">
<tbody> <tr>
                    <th>Nama Pelamar</th>
                    <th>A11</th>
                    <th>A12</th>
                    <th>A13</th>
                    <th>A14</th>
                    <th>A15</th>
                    <th>A16</th>
                  </tr>
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
                      <?php echo $row['A11'];?>
                    </td>
                    <td>
                      <?php echo $row['A12'];?>
                    </td>
                    <td>
                        <?php echo $row['A13'];?>
                    </td>
                    <td>
                       <?php echo $row['A14'];?>
                    </td>
                    <td>
                       <?php echo $row['A15'];?>
                    </td>
                    <td>
                       <?php echo $row['A16'];?>
                    </td>
                  </tr>
                  <?php
                    }
                  }
                  ?>

</tbody><tfoot><tr>
<th>Nilai Kriteria</th>
<td class="text-primary"><?php echo cari_nilai("select target as nilai from pm_faktor where id_faktor=11");?></td>
<td class="text-primary"><?php echo cari_nilai("select target as nilai from pm_faktor where id_faktor=12");?></td>
<td class="text-primary"><?php echo cari_nilai("select target as nilai from pm_faktor where id_faktor=13");?></td>
<td class="text-primary"><?php echo cari_nilai("select target as nilai from pm_faktor where id_faktor=14");?></td>
<td class="text-primary"><?php echo cari_nilai("select target as nilai from pm_faktor where id_faktor=15");?></td>
<td class="text-primary"><?php echo cari_nilai("select target as nilai from pm_faktor where id_faktor=16");?></td>
</tr></tfoot>
</table>
</div>
<div class="panel-body">PERHITUNGAN PEMETAAN GAP <strong></strong>:</div>
<div class="table-responsive">
<table class="table  table-striped table-hover" style="border: 0px;">
<tbody> <tr>
                    <th>Nama Pelamar</th>
                    <th>A11</th>
                    <th>A12</th>
                    <th>A13</th>
                    <th>A14</th>
                    <th>A15</th>
                    <th>A16</th>
                  </tr>
                  <?php
                    $query = "SELECT mp.id_pelamar,mp.nama_pelamar,pm.A11,pm.A12,pm.A13,pm.A14,pm.A15,pm.A16 FROM master_pelamar mp left JOIN (SELECT * FROM( select id_pelamar,sum( if(id_faktor=11,value,0) ) as 'A11',sum( if(id_faktor=12,value,0) ) as 'A12',sum( if(id_faktor=13,value,0) ) as 'A13',sum( if(id_faktor=14,value,0) ) as 'A14',sum( if(id_faktor=15,value,0) ) as 'A15',sum( if(id_faktor=16,value,0) ) as 'A16' from pm_sample group by id_pelamar)tbl) pm on mp.id_pelamar =pm.id_pelamar";
                    //$query ="select * from master_pelamar";
                    $sql = mysqli_query($koneksi, $query);
                    $value11 =cari_nilai("select target as nilai from pm_faktor where id_faktor=11");
                    $value12 =cari_nilai("select target as nilai from pm_faktor where id_faktor=12");
                    $value13 =cari_nilai("select target as nilai from pm_faktor where id_faktor=13");
                    $value14 =cari_nilai("select target as nilai from pm_faktor where id_faktor=14");
                    $value15 =cari_nilai("select target as nilai from pm_faktor where id_faktor=15");
                    $value16 =cari_nilai("select target as nilai from pm_faktor where id_faktor=16");
                    
                    if(mysqli_num_rows($sql) > 0){
                    while($row = mysqli_fetch_array($sql)){
                      $gap=array();

                  ?>
                  <tr>
                    <td><?php echo $row['nama_pelamar'];?></td>
                    <td>
                      <?php echo $gap[$row['id_pelamar']] = $row['A11']-$value11;?>
                    </td>
                    <td>
                      <?php echo $gap[$row['id_pelamar']] = $row['A12']-$value12;?>
                    </td>
                    <td>
                        <?php echo $gap[$row['id_pelamar']] = $row['A13']-$value13;?>
                    </td>
                    <td>
                       <?php echo $gap[$row['id_pelamar']] = $row['A14']-$value14;?>
                    </td>
                    <td>
                       <?php echo $gap[$row['id_pelamar']] = $row['A15']-$value15;?>
                    </td>
                    <td>
                       <?php echo $gap[$row['id_pelamar']] = $row['A16']-$value16;?>
                    </td>
                  </tr>
                  <?php
                    }
                  }
                  ?>

</tbody>
</table>
</div>
<div class="panel-body">PEMBOBOTAN NILAI GAP <strong></strong>:</div>
<div class="table-responsive">
<table class="table  table-striped table-hover" style="border: 0px;">
<tbody> <tr>
                    <th>Nama Pelamar</th>
                    <th>A11</th>
                    <th>A12</th>
                    <th>A13</th>
                    <th>A14</th>
                    <th>A15</th>
                    <th>A16</th>
                  </tr>
                  <?php
                    $query = "SELECT mp.id_pelamar,mp.nama_pelamar,pm.A11,pm.A12,pm.A13,pm.A14,pm.A15,pm.A16 FROM master_pelamar mp left JOIN (SELECT * FROM( select id_pelamar,sum( if(id_faktor=11,value,0) ) as 'A11',sum( if(id_faktor=12,value,0) ) as 'A12',sum( if(id_faktor=13,value,0) ) as 'A13',sum( if(id_faktor=14,value,0) ) as 'A14',sum( if(id_faktor=15,value,0) ) as 'A15',sum( if(id_faktor=16,value,0) ) as 'A16' from pm_sample group by id_pelamar)tbl) pm on mp.id_pelamar =pm.id_pelamar";
                    //$query ="select * from master_pelamar";
                    $sql = mysqli_query($koneksi, $query);
                    $value11 =cari_nilai("select target as nilai from pm_faktor where id_faktor=11");
                    $value12 =cari_nilai("select target as nilai from pm_faktor where id_faktor=12");
                    $value13 =cari_nilai("select target as nilai from pm_faktor where id_faktor=13");
                    $value14 =cari_nilai("select target as nilai from pm_faktor where id_faktor=14");
                    $value15 =cari_nilai("select target as nilai from pm_faktor where id_faktor=15");
                    $value16 =cari_nilai("select target as nilai from pm_faktor where id_faktor=16");
        
                    if(mysqli_num_rows($sql) > 0){
                    while($row = mysqli_fetch_array($sql)){
                      $terbobot=array();

                      $bobot11 = $row['A11']-$value11;
                      $query11 ="select * from pm_bobot where selisih = ".$bobot11."";
                      $sql11 = mysqli_query($koneksi, $query11);
                      $row11 = mysqli_fetch_array($sql11);

                      $bobot12 = $row['A12']-$value12;
                      $query12 ="select * from pm_bobot where selisih = ".$bobot12."";
                      $sql12 = mysqli_query($koneksi, $query12);
                      $row12 = mysqli_fetch_array($sql12);

                      $bobot13 = $row['A13']-$value13;
                      $query13 ="select * from pm_bobot where selisih = ".$bobot13."";
                      $sql13 = mysqli_query($koneksi, $query13);
                      $row13 = mysqli_fetch_array($sql13);

                      $bobot14 = $row['A14']-$value14;
                      $query14 ="select * from pm_bobot where selisih = ".$bobot14."";
                      $sql14 = mysqli_query($koneksi, $query14);
                      $row14 = mysqli_fetch_array($sql14);

                      $bobot15 = $row['A15']-$value15;
                      $query15 ="select * from pm_bobot where selisih = ".$bobot15."";
                      $sql15 = mysqli_query($koneksi, $query15);
                      $row15 = mysqli_fetch_array($sql15);

                      $bobot16 = $row['A16']-$value16;
                      $query16 ="select * from pm_bobot where selisih = ".$bobot16."";
                      $sql16 = mysqli_query($koneksi, $query16);
                      $row16 = mysqli_fetch_array($sql16);
                  ?>
                  <tr>
                    <td><?php echo $row['nama_pelamar'];?></td>
                    <td>
                      <?php echo $terbobot[$row['id_pelamar']] = $row11['bobot']?>
                    </td>
                    <td>
                      <?php echo $terbobot[$row['id_pelamar']] = $row12['bobot']?>
                    </td>
                    <td>
                        <?php echo $terbobot[$row['id_pelamar']] = $row13['bobot']?>
                    </td>
                    <td>
                       <?php echo $terbobot[$row['id_pelamar']] = $row14['bobot']?>
                    </td>
                    <td>
                       <?php echo $terbobot[$row['id_pelamar']] = $row15['bobot']?>
                    </td>
                    <td>
                       <?php echo $terbobot[$row['id_pelamar']] = $row16['bobot']?>
                    </td>
                  </tr>
                  <?php
                    }
                  }
                  ?>

</tbody>
</table>
</div>
<div class="panel-body">PERHITUNGAN FAKTOR <strong></strong>:</div>
<div class="table-responsive">
<table class="table  table-striped table-hover" style="border: 0px;">
<tbody> <tr>
                    <th>Nama Pelamar</th>
                    <th>A11</th>
                    <th>A12</th>
                    <th>A13</th>
                    <th>A14</th>
                    <th>A15</th>
                    <th>A16</th>
                    <th>NCF</th>
                    <th>NSF</th>
                    <th>Total</th>
                  </tr>
                  <?php
                    $query = "SELECT mp.id_pelamar,mp.nama_pelamar,pm.A11,pm.A12,pm.A13,pm.A14,pm.A15,pm.A16 FROM master_pelamar mp left JOIN (SELECT * FROM( select id_pelamar,sum( if(id_faktor=11,value,0) ) as 'A11',sum( if(id_faktor=12,value,0) ) as 'A12',sum( if(id_faktor=13,value,0) ) as 'A13',sum( if(id_faktor=14,value,0) ) as 'A14',sum( if(id_faktor=15,value,0) ) as 'A15',sum( if(id_faktor=16,value,0) ) as 'A16' from pm_sample group by id_pelamar)tbl) pm on mp.id_pelamar =pm.id_pelamar";
                    //$query ="select * from master_pelamar";
                    $sql = mysqli_query($koneksi, $query);
                    $value11 =cari_nilai("select target as nilai from pm_faktor where id_faktor=11");
                    $value12 =cari_nilai("select target as nilai from pm_faktor where id_faktor=12");
                    $value13 =cari_nilai("select target as nilai from pm_faktor where id_faktor=13");
                    $value14 =cari_nilai("select target as nilai from pm_faktor where id_faktor=14");
                    $value15 =cari_nilai("select target as nilai from pm_faktor where id_faktor=15");
                    $value16 =cari_nilai("select target as nilai from pm_faktor where id_faktor=16");

                    if(mysqli_num_rows($sql) > 0){
                    while($row = mysqli_fetch_array($sql)){
                      $terbobot=array();

                      $bobot11 = $row['A11']-$value11;
                      $query11 ="select * from pm_bobot where selisih = ".$bobot11."";
                      $sql11 = mysqli_query($koneksi, $query11);
                      $row11 = mysqli_fetch_array($sql11);

                      $bobot12 = $row['A12']-$value12;
                      $query12 ="select * from pm_bobot where selisih = ".$bobot12."";
                      $sql12 = mysqli_query($koneksi, $query12);
                      $row12 = mysqli_fetch_array($sql12);

                      $bobot13 = $row['A13']-$value13;
                      $query13 ="select * from pm_bobot where selisih = ".$bobot13."";
                      $sql13 = mysqli_query($koneksi, $query13);
                      $row13 = mysqli_fetch_array($sql13);

                      $bobot14 = $row['A14']-$value14;
                      $query14 ="select * from pm_bobot where selisih = ".$bobot14."";
                      $sql14 = mysqli_query($koneksi, $query14);
                      $row14 = mysqli_fetch_array($sql14);

                      $bobot15 = $row['A15']-$value15;
                      $query15 ="select * from pm_bobot where selisih = ".$bobot15."";
                      $sql15 = mysqli_query($koneksi, $query15);
                      $row15 = mysqli_fetch_array($sql15);

                      $bobot16 = $row['A16']-$value16;
                      $query16 ="select * from pm_bobot where selisih = ".$bobot16."";
                      $sql16 = mysqli_query($koneksi, $query16);
                      $row16 = mysqli_fetch_array($sql16);

                      $core_persen =cari_nilai("select bobot_core as nilai from pm_aspek where id_aspek=2");
                      $secondary_persen = cari_nilai("select bobot_secondary as nilai from pm_aspek where id_aspek=2");

                  ?>
                  <tr>
                    <td><?php echo $row['nama_pelamar'];?></td>
                    <td>
                      <?php echo $terbobot[$row['id_pelamar']] = $row1['bobot']?>
                    </td>
                    <td>
                      <?php echo $terbobot[$row['id_pelamar']] = $row2['bobot']?>
                    </td>
                    <td>
                        <?php echo $terbobot[$row['id_pelamar']] = $row3['bobot']?>
                    </td>
                    <td>
                       <?php echo $terbobot[$row['id_pelamar']] = $row4['bobot']?>
                    </td>
                    <td>
                       <?php echo $terbobot[$row['id_pelamar']] = $row5['bobot']?>
                    </td>
                    <td>
                       <?php echo $terbobot[$row['id_pelamar']] = $row6['bobot']?>
                    </td>
                    <!-- core faktor -->
                    <td>
                       <?php echo $terbobot[$row['id_pelamar']] = ($row12['bobot']+$row13['bobot']+$row15['bobot'])/3?>
                    </td>
                    <!-- secondary factor -->
                    <td>
                       <?php echo $terbobot[$row['id_pelamar']] = ($row11['bobot']+$row14['bobot']+$row16['bobot'])/3?>
                    </td>
                    <td class="text-primary">
                       <?php echo $terbobot[$row['id_pelamar']] = (($core_persen*($row12['bobot']+$row13['bobot']+$row15['bobot'])/3)/100)+(($secondary_persen*($row11['bobot']+$row14['bobot']+$row16['bobot'])/3)/100)?>
                    </td>

                  </tr>
                  <?php
                    }
                  }
                  ?>
                  <tr>
                  <td></td>
                  <td class="text-primary"><?php echo cari_nilai("select type as nilai from pm_faktor where id_faktor=11");?></td>
                  <td class="text-primary"><?php echo cari_nilai("select type as nilai from pm_faktor where id_faktor=12");?></td>
                  <td class="text-primary"><?php echo cari_nilai("select type as nilai from pm_faktor where id_faktor=13");?></td>
                  <td class="text-primary"><?php echo cari_nilai("select type as nilai from pm_faktor where id_faktor=14");?></td>
                  <td class="text-primary"><?php echo cari_nilai("select type as nilai from pm_faktor where id_faktor=15");?></td>
                  <td class="text-primary"><?php echo cari_nilai("select type as nilai from pm_faktor where id_faktor=16");?></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  </tr>
</tbody>
</table>
</div>
</div>

<!-- PERILAKU -->
<div class="panel panel-default">
<div class="panel-heading"><strong>Aspek Perilaku</strong></div>
<div class="table-responsive">
<table class="table  table-striped table-hover" style="border: 0px;">
<tbody> <tr>
                    <th>Nama Pelamar</th>
                    <th>A17</th>
                    <th>A18</th>
                    <th>A19</th>
                    <th>A20</th>
                  </tr>
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
                       <?php echo $row['A17'];?>
                    </td>
                    <td>
                       <?php echo $row['A18'];?>
                    </td>
                    <td>
                       <?php echo $row['A19'];?>
                    </td>
                    <td>
                       <?php echo $row['A20'];?>
                    </td>
                  </tr>
                  <?php
                    }
                  }
                  ?>

</tbody><tfoot><tr>
<th>Nilai Kriteria</th>
<td class="text-primary"><?php echo cari_nilai("select target as nilai from pm_faktor where id_faktor=17");?></td>
<td class="text-primary"><?php echo cari_nilai("select target as nilai from pm_faktor where id_faktor=18");?></td>
<td class="text-primary"><?php echo cari_nilai("select target as nilai from pm_faktor where id_faktor=19");?></td>
<td class="text-primary"><?php echo cari_nilai("select target as nilai from pm_faktor where id_faktor=20");?></td>
</tr></tfoot>
</table>
</div>
<div class="panel-body">PERHITUNGAN PEMETAAN GAP <strong></strong>:</div>
<div class="table-responsive">
<table class="table  table-striped table-hover" style="border: 0px;">
<tbody> <tr>
                    <th>Nama Pelamar</th>
                    <th>A17</th>
                    <th>A18</th>
                    <th>A19</th>
                    <th>A20</th>
                  </tr>
                  <?php
                    $query = "SELECT mp.id_pelamar,mp.nama_pelamar,pm.A17,pm.A18,pm.A19,pm.A20 FROM master_pelamar mp left JOIN (SELECT * FROM( select id_pelamar,sum( if(id_faktor=17,value,0) ) as 'A17',sum( if(id_faktor=18,value,0) ) as 'A18',sum( if(id_faktor=19,value,0) ) as 'A19',sum( if(id_faktor=20,value,0) ) as 'A20' from pm_sample group by id_pelamar)tbl) pm on mp.id_pelamar =pm.id_pelamar";
                    //$query ="select * from master_pelamar";
                    $sql = mysqli_query($koneksi, $query);
                    $value17 =cari_nilai("select target as nilai from pm_faktor where id_faktor=17");
                    $value18 =cari_nilai("select target as nilai from pm_faktor where id_faktor=18");
                    $value19 =cari_nilai("select target as nilai from pm_faktor where id_faktor=19");
                    $value20 =cari_nilai("select target as nilai from pm_faktor where id_faktor=20");

                    if(mysqli_num_rows($sql) > 0){
                    while($row = mysqli_fetch_array($sql)){
                      $gap=array();

                  ?>
                  <tr>
                    <td><?php echo $row['nama_pelamar'];?></td>
                    <td>
                       <?php echo $gap[$row['id_pelamar']] = $row['A17']-$value17;?>
                    </td>
                    <td>
                       <?php echo $gap[$row['id_pelamar']] = $row['A18']-$value18;?>
                    </td>
                    <td>
                       <?php echo $gap[$row['id_pelamar']] = $row['A19']-$value19;?>
                    </td>
                    <td>
                       <?php echo $gap[$row['id_pelamar']] = $row['A20']-$value20;?>
                    </td>
                  </tr>
                  <?php
                    }
                  }
                  ?>

</tbody>
</table>
</div>
<div class="panel-body">PEMBOBOTAN NILAI GAP <strong></strong>:</div>
<div class="table-responsive">
<table class="table  table-striped table-hover" style="border: 0px;">
<tbody> <tr>
                    <th>Nama Pelamar</th>
                    <th>A17</th>
                    <th>A18</th>
                    <th>A19</th>
                    <th>A20</th>
                  </tr>
                  <?php
                    $query = "SELECT mp.id_pelamar,mp.nama_pelamar,pm.A17,pm.A18,pm.A19,pm.A20 FROM master_pelamar mp left JOIN (SELECT * FROM( select id_pelamar,sum( if(id_faktor=17,value,0) ) as 'A17',sum( if(id_faktor=18,value,0) ) as 'A18',sum( if(id_faktor=19,value,0) ) as 'A19',sum( if(id_faktor=20,value,0) ) as 'A20' from pm_sample group by id_pelamar)tbl) pm on mp.id_pelamar =pm.id_pelamar";
                    //$query ="select * from master_pelamar";
                    $sql = mysqli_query($koneksi, $query);
                    $value17 =cari_nilai("select target as nilai from pm_faktor where id_faktor=17");
                    $value18 =cari_nilai("select target as nilai from pm_faktor where id_faktor=18");
                    $value19 =cari_nilai("select target as nilai from pm_faktor where id_faktor=19");
                    $value20 =cari_nilai("select target as nilai from pm_faktor where id_faktor=20");
                    if(mysqli_num_rows($sql) > 0){
                    while($row = mysqli_fetch_array($sql)){
                      $terbobot=array();

                      $bobot17 = $row['A17']-$value17;
                      $query17 ="select * from pm_bobot where selisih = ".$bobot17."";
                      $sql17 = mysqli_query($koneksi, $query17);
                      $row17 = mysqli_fetch_array($sql17);

                      $bobot18 = $row['A18']-$value18;
                      $query18 ="select * from pm_bobot where selisih = ".$bobot18."";
                      $sql18 = mysqli_query($koneksi, $query18);
                      $row18 = mysqli_fetch_array($sql18);

                      $bobot19 = $row['A19']-$value19;
                      $query19 ="select * from pm_bobot where selisih = ".$bobot19."";
                      $sql19 = mysqli_query($koneksi, $query19);
                      $row19 = mysqli_fetch_array($sql19);

                      $bobot20 = $row['A20']-$value20;
                      $query20 ="select * from pm_bobot where selisih = ".$bobot20."";
                      $sql20 = mysqli_query($koneksi, $query20);
                      $row20 = mysqli_fetch_array($sql20);
                  ?>
                  <tr>
                    <td><?php echo $row['nama_pelamar'];?></td>
                    <td>
                       <?php echo $terbobot[$row['id_pelamar']] = $row17['bobot']?>
                    </td>
                    <td>
                       <?php echo $terbobot[$row['id_pelamar']] = $row18['bobot']?>
                    </td>
                    <td>
                       <?php echo $terbobot[$row['id_pelamar']] = $row19['bobot']?>
                    </td>
                    <td>
                       <?php echo $terbobot[$row['id_pelamar']] = $row20['bobot']?>
                    </td>
                  </tr>
                  <?php
                    }
                  }
                  ?>

</tbody>
</table>
</div>
<div class="panel-body">PERHITUNGAN FAKTOR <strong></strong>:</div>
<div class="table-responsive">
<table class="table  table-striped table-hover" style="border: 0px;">
<tbody> <tr>
                    <th>Nama Pelamar</th>
                    <th>A17</th>
                    <th>A18</th>
                    <th>A19</th>
                    <th>A20</th>
                    <th>NCF</th>
                    <th>NSF</th>
                    <th>Total</th>
                  </tr>
                  <?php
                    $query = "SELECT mp.id_pelamar,mp.nama_pelamar,pm.A17,pm.A18,pm.A19,pm.A20 FROM master_pelamar mp left JOIN (SELECT * FROM( select id_pelamar,sum( if(id_faktor=17,value,0) ) as 'A17',sum( if(id_faktor=18,value,0) ) as 'A18',sum( if(id_faktor=19,value,0) ) as 'A19',sum( if(id_faktor=20,value,0) ) as 'A20' from pm_sample group by id_pelamar)tbl) pm on mp.id_pelamar =pm.id_pelamar";
                    //$query ="select * from master_pelamar";
                    $sql = mysqli_query($koneksi, $query);
                    $value7 =cari_nilai("select target as nilai from pm_faktor where id_faktor=17");
                    $value8 =cari_nilai("select target as nilai from pm_faktor where id_faktor=18");
                    $value9 =cari_nilai("select target as nilai from pm_faktor where id_faktor=19");
                    $value10 =cari_nilai("select target as nilai from pm_faktor where id_faktor=20");

                    if(mysqli_num_rows($sql) > 0){
                    while($row = mysqli_fetch_array($sql)){
                      $terbobot=array();

                      $bobot17 = $row['A17']-$value17;
                      $query17 ="select * from pm_bobot where selisih = ".$bobot17."";
                      $sql17 = mysqli_query($koneksi, $query17);
                      $row17 = mysqli_fetch_array($sql17);

                      $bobot18 = $row['A18']-$value18;
                      $query18 ="select * from pm_bobot where selisih = ".$bobot18."";
                      $sql18 = mysqli_query($koneksi, $query18);
                      $row18 = mysqli_fetch_array($sql18);

                      $bobot19 = $row['A19']-$value19;
                      $query19 ="select * from pm_bobot where selisih = ".$bobot19."";
                      $sql19 = mysqli_query($koneksi, $query19);
                      $row19 = mysqli_fetch_array($sql19);

                      $bobot20 = $row['A20']-$value20;
                      $query20 ="select * from pm_bobot where selisih = ".$bobot20."";
                      $sql20 = mysqli_query($koneksi, $query20);
                      $row20 = mysqli_fetch_array($sql20);

                      $core_persen =cari_nilai("select bobot_core as nilai from pm_aspek where id_aspek=3");
                      $secondary_persen = cari_nilai("select bobot_secondary as nilai from pm_aspek where id_aspek=3");

                  ?>
                  <tr>
                    <td><?php echo $row['nama_pelamar'];?></td>
                    <td>
                       <?php echo $terbobot[$row['id_pelamar']] = $row17['bobot']?>
                    </td>
                    <td>
                       <?php echo $terbobot[$row['id_pelamar']] = $row18['bobot']?>
                    </td>
                    <td>
                       <?php echo $terbobot[$row['id_pelamar']] = $row19['bobot']?>
                    </td>
                    <td>
                       <?php echo $terbobot[$row['id_pelamar']] = $row20['bobot']?>
                    </td>
                    <!-- core faktor -->
                    <td>
                       <?php echo $terbobot[$row['id_pelamar']] = ($row17['bobot']+$row18['bobot'])/2?>
                    </td>
                    <!-- secondary factor -->
                    <td>
                       <?php echo $terbobot[$row['id_pelamar']] = ($row19['bobot']+$row20['bobot'])/2?>
                    </td>
                    <td class="text-primary">
                       <?php echo $terbobot[$row['id_pelamar']] = (($core_persen*($row17['bobot']+$row18['bobot'])/2)/100)+(($secondary_persen*($row19['bobot']+$row20['bobot'])/2)/100)?>
                    </td>

                  </tr>
                  <?php
                    }
                  }
                  ?>
                  <tr>
                  <td></td>
                  <td class="text-primary"><?php echo cari_nilai("select type as nilai from pm_faktor where id_faktor=17");?></td>
                  <td class="text-primary"><?php echo cari_nilai("select type as nilai from pm_faktor where id_faktor=18");?></td>
                  <td class="text-primary"><?php echo cari_nilai("select type as nilai from pm_faktor where id_faktor=19");?></td>
                  <td class="text-primary"><?php echo cari_nilai("select type as nilai from pm_faktor where id_faktor=20");?></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  </tr>

</tbody>
</table>
</div>
</div>
</div>
</div>
<div id ="cetak">
<div class="panel panel-primary">
<div class="panel-heading"><strong>Hasil Akhir</strong></div>
<div class="panel-body" style=" border: 1px solid #e7e7e7;">
<div class="panel panel-default">
<div class="panel-body">
</div>
<div class="table-responsive">
<table class="table  table-striped table-hover">
<tbody><tr>
<th>Nama Pelamar</th>
<th>Aspek Kecerdasan</th>
 <th>Aspek Sikap Kerja</th>
<th>Aspek Perilaku</th>
<th>Total</th>
<th>Rank</th>
</tr>
<tr>
<td>Persentase</td>
<td><?php echo cari_nilai("select Prosentase as nilai from pm_aspek where id_aspek=1");?>%</td>
<td><?php echo cari_nilai("select Prosentase as nilai from pm_aspek where id_aspek=2");?>%</td>
<td><?php echo cari_nilai("select Prosentase as nilai from pm_aspek where id_aspek=3");?>%</td>
<td></td>
<td></td>
</tr>
<?php
                    $query = "SELECT mp.id_pelamar,mp.nama_pelamar,pm.A1,pm.A2,pm.A3,pm.A4,pm.A5,pm.A6,pm.A7,pm.A8,pm.A9,pm.A10,pm.A11,pm.A12,pm.A13,pm.A14,pm.A15,pm.A16,pm.A17,pm.A18,pm.A19,pm.A20 FROM master_pelamar mp left JOIN (SELECT * FROM( select id_pelamar,sum( if(id_faktor=1,value,0) ) as 'A1',sum( if(id_faktor=2,value,0) ) as 'A2',sum( if(id_faktor=3,value,0) ) as 'A3',sum( if(id_faktor=4,value,0) ) as 'A4',sum( if(id_faktor=5,value,0) ) as 'A5',sum( if(id_faktor=6,value,0) ) as 'A6',sum( if(id_faktor=7,value,0) ) as 'A7',sum( if(id_faktor=8,value,0) ) as 'A8',sum( if(id_faktor=9,value,0) ) as 'A9',sum( if(id_faktor=10,value,0) ) as 'A10',sum( if(id_faktor=11,value,0) ) as 'A11',sum( if(id_faktor=12,value,0) ) as 'A12',sum( if(id_faktor=13,value,0) ) as 'A13',sum( if(id_faktor=14,value,0) ) as 'A14',sum( if(id_faktor=15,value,0) ) as 'A15',sum( if(id_faktor=16,value,0) ) as 'A16',sum( if(id_faktor=17,value,0) ) as 'A17',sum( if(id_faktor=18,value,0) ) as 'A18',sum( if(id_faktor=19,value,0) ) as 'A19',sum( if(id_faktor=20,value,0) ) as 'A20' from pm_sample group by id_pelamar)tbl) pm on mp.id_pelamar =pm.id_pelamar";
                    //$query ="select * from master_pelamar";
                    $sql = mysqli_query($koneksi, $query);
                    $value1 =cari_nilai("select target as nilai from pm_faktor where id_faktor=1");
                    $value2 =cari_nilai("select target as nilai from pm_faktor where id_faktor=2");
                    $value3 =cari_nilai("select target as nilai from pm_faktor where id_faktor=3");
                    $value4 =cari_nilai("select target as nilai from pm_faktor where id_faktor=4");
                    $value5 =cari_nilai("select target as nilai from pm_faktor where id_faktor=5");
                    $value6 =cari_nilai("select target as nilai from pm_faktor where id_faktor=6");
                    $value7 =cari_nilai("select target as nilai from pm_faktor where id_faktor=7");
                    $value8 =cari_nilai("select target as nilai from pm_faktor where id_faktor=8");
                    $value9 =cari_nilai("select target as nilai from pm_faktor where id_faktor=9");
                    $value10 =cari_nilai("select target as nilai from pm_faktor where id_faktor=10");
                    $value11 =cari_nilai("select target as nilai from pm_faktor where id_faktor=11");
                    $value12 =cari_nilai("select target as nilai from pm_faktor where id_faktor=12");
                    $value13 =cari_nilai("select target as nilai from pm_faktor where id_faktor=13");
                    $value14 =cari_nilai("select target as nilai from pm_faktor where id_faktor=14");
                    $value15 =cari_nilai("select target as nilai from pm_faktor where id_faktor=15");
                    $value16 =cari_nilai("select target as nilai from pm_faktor where id_faktor=16");
                    $value17 =cari_nilai("select target as nilai from pm_faktor where id_faktor=17");
                    $value18 =cari_nilai("select target as nilai from pm_faktor where id_faktor=18");
                    $value19 =cari_nilai("select target as nilai from pm_faktor where id_faktor=19");
                    $value20 =cari_nilai("select target as nilai from pm_faktor where id_faktor=20");
                    $persen_1 = cari_nilai("select Prosentase as nilai from pm_aspek where id_aspek=1");
                    $persen_2 = cari_nilai("select Prosentase as nilai from pm_aspek where id_aspek=2");
                    $persen_3 = cari_nilai("select Prosentase as nilai from pm_aspek where id_aspek=3");
                    if(mysqli_num_rows($sql) > 0){
                    while($row = mysqli_fetch_array($sql)){
					  
                      $terbobot1=array();
                      $terbobot2=array();
                      $terbobot3=array();
                      $terbobot_total=array();
					  
                      $bobot1 = $row['A1']-$value1;
                      $query1 ="select * from pm_bobot where selisih = ".$bobot1."";
                      $sql1 = mysqli_query($koneksi, $query1);
                      $row1 = mysqli_fetch_array($sql1);

                      $bobot2 = $row['A2']-$value2;
                      $query2 ="select * from pm_bobot where selisih = ".$bobot2."";
                      $sql2 = mysqli_query($koneksi, $query2);
                      $row2 = mysqli_fetch_array($sql2);

                      $bobot3 = $row['A3']-$value3;
                      $query3 ="select * from pm_bobot where selisih = ".$bobot3."";
                      $sql3 = mysqli_query($koneksi, $query3);
                      $row3 = mysqli_fetch_array($sql3);

                      $bobot4 = $row['A4']-$value4;
                      $query4 ="select * from pm_bobot where selisih = ".$bobot4."";
                      $sql4 = mysqli_query($koneksi, $query4);
                      $row4 = mysqli_fetch_array($sql4);

                      $bobot5 = $row['A5']-$value5;
                      $query5 ="select * from pm_bobot where selisih = ".$bobot5."";
                      $sql5 = mysqli_query($koneksi, $query5);
                      $row5 = mysqli_fetch_array($sql5);

                      $bobot6 = $row['A6']-$value6;
                      $query6 ="select * from pm_bobot where selisih = ".$bobot6."";
                      $sql6 = mysqli_query($koneksi, $query6);
                      $row6 = mysqli_fetch_array($sql6);

                      $bobot7 = $row['A7']-$value7;
                      $query7 ="select * from pm_bobot where selisih = ".$bobot7."";
                      $sql7 = mysqli_query($koneksi, $query7);
                      $row7 = mysqli_fetch_array($sql7);

                      $bobot8 = $row['A8']-$value8;
                      $query8 ="select * from pm_bobot where selisih = ".$bobot8."";
                      $sql8 = mysqli_query($koneksi, $query8);
                      $row8 = mysqli_fetch_array($sql8);

                      $bobot9 = $row['A9']-$value9;
                      $query9 ="select * from pm_bobot where selisih = ".$bobot9."";
                      $sql9 = mysqli_query($koneksi, $query9);
                      $row9 = mysqli_fetch_array($sql9);

                      $bobot10 = $row['A10']-$value10;
                      $query10 ="select * from pm_bobot where selisih = ".$bobot10."";
                      $sql10 = mysqli_query($koneksi, $query10);
                      $row10 = mysqli_fetch_array($sql10);

                      $bobot11 = $row['A11']-$value11;
                      $query11 ="select * from pm_bobot where selisih = ".$bobot11."";
                      $sql11 = mysqli_query($koneksi, $query11);
                      $row11 = mysqli_fetch_array($sql11);

                      $bobot12 = $row['A12']-$value12;
                      $query12 ="select * from pm_bobot where selisih = ".$bobot12."";
                      $sql12 = mysqli_query($koneksi, $query12);
                      $row12 = mysqli_fetch_array($sql12);

                      $bobot13 = $row['A13']-$value13;
                      $query13 ="select * from pm_bobot where selisih = ".$bobot13."";
                      $sql13 = mysqli_query($koneksi, $query13);
                      $row13 = mysqli_fetch_array($sql13);

                      $bobot14 = $row['A14']-$value14;
                      $query14 ="select * from pm_bobot where selisih = ".$bobot14."";
                      $sql14 = mysqli_query($koneksi, $query14);
                      $row14 = mysqli_fetch_array($sql14);

                      $bobot15 = $row['A15']-$value15;
                      $query15 ="select * from pm_bobot where selisih = ".$bobot15."";
                      $sql15 = mysqli_query($koneksi, $query15);
                      $row15 = mysqli_fetch_array($sql15);

                      $bobot16 = $row['A16']-$value16;
                      $query16 ="select * from pm_bobot where selisih = ".$bobot16."";
                      $sql16 = mysqli_query($koneksi, $query16);
                      $row16 = mysqli_fetch_array($sql16);

                      $bobot17 = $row['A17']-$value17;
                      $query17 ="select * from pm_bobot where selisih = ".$bobot17."";
                      $sql17 = mysqli_query($koneksi, $query17);
                      $row17 = mysqli_fetch_array($sql17);

                      $bobot18 = $row['A18']-$value18;
                      $query18 ="select * from pm_bobot where selisih = ".$bobot18."";
                      $sql18 = mysqli_query($koneksi, $query18);
                      $row18 = mysqli_fetch_array($sql18);

                      $bobot19 = $row['A19']-$value19;
                      $query19 ="select * from pm_bobot where selisih = ".$bobot19."";
                      $sql19 = mysqli_query($koneksi, $query19);
                      $row19 = mysqli_fetch_array($sql19);

                      $bobot20 = $row['A20']-$value20;
                      $query20 ="select * from pm_bobot where selisih = ".$bobot20."";
                      $sql20 = mysqli_query($koneksi, $query20);
                      $row20 = mysqli_fetch_array($sql20);
                      
                      $core_persen_1 =cari_nilai("select bobot_core as nilai from pm_aspek where id_aspek=1");
                      $secondary_persen_1 = cari_nilai("select bobot_secondary as nilai from pm_aspek where id_aspek=1");  
                      $core_persen_2 =cari_nilai("select bobot_core as nilai from pm_aspek where id_aspek=2");
                      $secondary_persen_2 = cari_nilai("select bobot_secondary as nilai from pm_aspek where id_aspek=2");  
                      $core_persen_3 =cari_nilai("select bobot_core as nilai from pm_aspek where id_aspek=3");
                      $secondary_persen_3 = cari_nilai("select bobot_secondary as nilai from pm_aspek where id_aspek=3");  


                  ?>
                   


                  <tr>
                    <td><?php echo $row['nama_pelamar'];?></td>
                    <td>
                     
                       <?php echo $terbobot1[$row['id_pelamar']] = (($core_persen_1*($row1['bobot']+$row3['bobot']+$row4['bobot']+$row5['bobot']+$row6['bobot'])/5)/100)+(($secondary_persen_1*($row2['bobot']+$row7['bobot']+$row8['bobot']+$row9['bobot']+$row10['bobot'])/5)/100)?>
                    </td>
                   <td>
                       <?php echo $terbobot2[$row['id_pelamar']] = (($core_persen_2*($row12['bobot']+$row13['bobot']+$row15['bobot'])/3)/100)+(($secondary_persen_2*($row11['bobot']+$row14['bobot']+$row16['bobot'])/3)/100)?>
                    </td>
                    <td>
                       <?php echo $terbobot3[$row['id_pelamar']] = (($core_persen_3*($row17['bobot']+$row18['bobot'])/2)/100)+(($secondary_persen_3*($row19['bobot']+$row20['bobot'])/2)/100)?>
                    </td>
                    <td>
                      <?php echo $terbobot_total[$row['id_pelamar']] = ($persen_1*(($core_persen_1*(($row1['bobot']+$row3['bobot']+$row4['bobot']+$row5['bobot']+$row6['bobot'])/5)/100)+($secondary_persen_1*(($row2['bobot']+$row7['bobot']+$row8['bobot']+$row9['bobot']+$row10['bobot'])/5)/100))/100)+
                                                                       ($persen_2*(($core_persen_2*(($row12['bobot']+$row13['bobot']+$row15['bobot'])/3)/100)+($secondary_persen_2*(($row11['bobot']+$row14['bobot']+$row16['bobot'])/3)/100))/100)+
                                                                       ($persen_3*(($core_persen_3*(($row17['bobot']+$row18['bobot'])/2)/100)+($secondary_persen_3*(($row19['bobot']+$row20['bobot'])/2)/100))/100)?>
                    </td>
                    <td class="text-primary">
                        <?php
						         echo cari_nilai("select rank as nilai from(SELECT id_pelamar, nilai_akhir, @curRank := @curRank +1 AS rank FROM pm_ranking p, (SELECT @curRank := 0) r ORDER BY nilai_akhir desc) tbl where id_pelamar =".$row['id_pelamar']."");
                        ?>
                    </td>

                  </tr>
                  <?php
					mysqli_query($koneksi, "DELETE FROM pm_ranking where id_pelamar = ".$row['id_pelamar']."");
					
					mysqli_query($koneksi, "INSERT INTO pm_ranking(id_pelamar, nilai_akhir) VALUES('".$row['id_pelamar']."', '".$terbobot_total[$row['id_pelamar']]."')");
                    }
                   

                  }
                  ?>


</tbody></table>
</div>
</div>
<input type="button" value="Cetak" id="btnPrint" />
</div>
</div>
</div>
</div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/0.9.0rc1/jspdf.min.js"></script>
<script type="text/javascript">
       $("#btnPrint").click(function() {

       //var doc = new jsPDF();
       var divContents = $("#cetak").html();
            var printWindow = window.open('', '', 'height=400,width=800');
            printWindow.document.write('<html><head><title>DIV Contents</title>');
            printWindow.document.write('</head><body >');
            printWindow.document.write(divContents);
            printWindow.document.write('</body></html>');
            printWindow.document.close();
            printWindow.print();

    });
    </script>