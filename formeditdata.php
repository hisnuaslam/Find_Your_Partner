

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Isikan Informasi tentang KKN Anda !</h4>
      </div>
      <div class="modal-body">
        <form method="POST" action="queryisidata.php">
    <div class="section"><span></span></div>
    <div class="inner-wrap">
        
        <input id="lat" type="hidden" name="flat" />
        <input id="long" type="hidden" name="flong" />
        
        <div class="form-group">
        <label>Kota<br><input type="text" name="fkota" /></label></div>

        <div class="form-group">
        <label>Nama Ketua<br><input type="text" name="fketua"></label></div>

        <div class="form-group">
        <label>Alamat Daerah<br><input type="text" name="falamat"></label></div>

        <div class="form-group">
        <label>Proker 1<br><input type="text" name="fproker1"></label></div>

        <div class="form-group">
        <label>Proker 2<br><input type="text" name="fproker2"></label></div>

        <div class="form-group">
        <label>Proker 3<br><input type="text" name="fproker3"></label></div>

      </div>

    <div class="button-section">
     <input type="submit" name="query" value="Submit"><br><br><br>
     
    </div>
</form>
      </div>
    </div>
  </div>
</div>