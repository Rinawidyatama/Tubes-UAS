<div class="container">
  <div class="col-md-12 col-xs-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> <b>Laporan Pasien</b></h3>
      </div>
      <div class="panel-body">
        <?php echo form_open('laporan', array('name' => 'adminForm', 'id' => 'adminForm', 'class' => 'form-horizontal')); ?>
        <?php echo $this->session->flashdata('pesan'); ?>


        <div class="form-group">
          <label for="inputkode" class="col-md-2 control-label">Bentuk Laporan</label>
          <div class="col-lg-4">
            <select name="tampil" class="form-control">
              <option value="web">Print Preview</option>
              <option value="cetak">Cetak</option>
            </select>
          </div>
        </div>

        <div class="form-group">
          <div class="col-lg-10 col-lg-offset-2">
            <button type="submit" name="submit" class="btn btn-success"><i class="glyphicon glyphicon-search"></i> Proses Laporan</button>
            <button type="reset" name="reset" class="btn btn-danger"><i class="glyphicon glyphicon-retweet"></i> Ulangi</button>

          </div>
        </div>

        <?php echo form_close(); ?>
      </div>
    </div>

  </div>
</div>
</div>

<script text="text/javascript">
  $(".input-group.date").datepicker({
    autoclose: true,
    todayHighlight: true
  });
</script>