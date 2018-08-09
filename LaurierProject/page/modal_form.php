<style type="text/css">
  input[type=text], select {
    width: 70%;
    padding: 12px 20px;
    margin: 8px 0;
    /*border: 1px solid #ccc;*/
    border-radius: 5px;
    background-color: #fff;
    font-size: 20px;
    height: 50px;
    /*size: 50px;*/
  }
  input[type=text]:focus {
    border: 1px solid #fff;
  }

</style>

<div class="modal fade" id="modal_form" role="dialog">
    <div class="modal-dialog modal-lg">
      <!-- <div class="modal-content"> -->
        <div class="modal-body">
          <div class="col-md-12" style="background-color: #c1daf0;height: 500px">
            <div class="row">
                <img src="img/exit2.png" style="float: right;cursor: pointer;" data-dismiss="modal">
            </div>
          		<div class="row">
                <center>
                  <h1 style="font-family: 'myWebFont'; color: #58595b">
                    Dapatkan sampel produk Laurier Healthy Skin <br>
                  dengan mengisi data diri kamu.*
                  </h1>
                </center>
              </div>
              <form action="page/send_email.php" name="form_send_email" id="myForm" method="POST">
                  <div class="row">
                    <div class="col-md-12">
                      <center><input placeholder="Nama" type="text" name="nama"></center>  
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <center><input type="text" placeholder="Alamat" name="alamat"></center>  
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <input class="pull-right" type="text" name="no_telp" placeholder="No. Telp">
                    </div>
                    <div class="col-md-6">
                      <input type="text" name="emailuser" placeholder="Email">
                    </div>
                  </div>
                  <div class="row">
                    <!-- <input type="submit" name="" value="submit"> -->
                    <center><img id="btn-submit" src="img/submit.png" data-toggle="modal" data-target="#modal_tank_you" data-dismiss="modal" width="30%"></center>

                  </div>
                  <div class="row">
                    <p style="font-family: 'myWebFont'; font-size: 20px; color: #58595b;margin-top: -10px; margin-left: 30px">*Sampel terbatas</p>
                  </div>
              </form>
          		
          </div>
        </div>
    </div>
  </div>
  <script type="text/javascript">
    $("#btn-submit").click(function(){
      $("#myForm").submit();
    });
  </script>