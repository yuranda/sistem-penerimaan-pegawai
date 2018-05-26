   <pre>
  <?php print_r($get_penilaian); ?>
</pre>
<pre>
  <?php print_r($sub_kriteria) ?>
</pre>
   
  <div class="row">
    <div class="col-md-4">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Variabel dan Konversi Nilai</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table class="table table-bordered">
            <thead style="font-weight: bold;" >
            <tr class="bg-silver">
              <td>Variabel</td>
              <td>Nilai Konversi</td>
              <td>Range Nilai</td>
              
            </tr>
          </thead>

          <tbody>
            <?php foreach ($konversi as $get) : ?>
              <tr>
            <td><?php echo $get->nama ?></td>
            <td class="text-center"><?php echo $get->nilai ?></td>
            <td class="text-center"><?php echo $get->range ?></td>
            </tr>
            <?php endforeach; ?>
          </tbody>
          </table>
        </div>
      </div>
    </div>


    <div class="col-md-8" style="margin-top: 2px;">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Nilai Tes Calon Karyawan Baru</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table class="table table-bordered">
             <thead style="font-weight: bold;" >

              <tr class="bg-silver">
                <td>Calon Karyawan</td>
                <td>Wawancara</td>
                <td>Tes Tertulis</td>
                <td>Tes Microsoft Word</td>
                <td>Tes Microsoft Excel</td>
                <td>Tes Keahlian</td>
                
              </tr>
            </thead>
        <!-- tabel nilai asli karyawan sebelum di konversikan-->
           <tbody>
             <tr class="text-center">
                <td><?php echo $this->analisa->get_analisa($id_pelamar)->nama_lengkap; ?></td>
                <?php foreach ($get_penilaian as $row) : ?>
                  <th class="text-center"><?php echo $row->range ?></th>
                <?php endforeach; ?>
              </tr>
          </tbody>
          </table>
        </div>
      </div>
    </div>

    <div class="col-md-8" style="margin-top: 2px;">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Perhitungan Nilai Gap Setelah Di Konversikan</h3>
        </div>
        <!-- /.box-header -->
         <div class="box-body">
          <table class="table table-bordered">
               <thead style="font-weight: bold;" >
                <tr class="bg-silver">
                  <td>Calon Karyawan</td>
                  <td>Wawancara</td>
                  <td>Tes Tertulis</td>
                  <td>Tes Microsoft Word</td>
                  <td>Tes Microsoft Excel</td>
                  <td>Tes Keahlian</td>  
                </tr>
              </thead>

              <!-- tabel nilai asli karyawan baru setela di konversikan -->
              <tbody>
                    <th class="text-center"><?php echo $this->analisa->get_analisa($id_pelamar)->nama_lengkap; ?></th>
                    <?php foreach ($get_penilaian as $row) : ?>
                    <td class="text-center"><?php echo $row->nilai ?></td>
                    <?php endforeach; ?>
                    
              </tbody>
              
              <!-- tabel nilai profil ideal perusahaan -->
              <th class="color text-center">Nilai Profile</th>
              <?php foreach ($sub_kriteria as $row) : ?>
              <th class="color text-center"><?php echo $row->id_kriteria ?></th>
              <?php endforeach; ?>
              
              <!-- tabel hasil pengurangan nilai konversi dan nilai profile  -->
              <tr style="font-weight: bold;">
                <td class="text-center"><?php echo $this->analisa->get_analisa($id_pelamar)->nama_lengkap; ?></td>
               
              </tr>
          </table>
        </div>
      </div>
    </div> 
  </div>