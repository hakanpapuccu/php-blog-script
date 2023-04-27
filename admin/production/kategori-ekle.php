<?php 
include "../../baglan.php";
include "header.php"; 


?>
<!-- /top navigation -->

<!-- page content -->


<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Kategoriler</h3>
      </div>


    </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="col-md-12 col-sm-12 col-xs-12">


          <div class="x_panel">
            <div class="x_title">
              <h2>Kategori Ekle</h2>

              <div class="clearfix"></div>
            </div>

            <div class="x_content">

              <?php if (isset($_GET['durum'])) {

              if ($_GET['durum']=="ok") { ?>
                <div class="alert alert-success alert-dismissible fade in" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                  </button>
                  <strong>Güncelleme işlemi başarıyla tamamlandı...</strong>
                </div>
              <?php } elseif ($_GET['durum']=="no") { ?>
                <div class="alert alert-danger alert-dismissible fade in" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                  </button>
                  <strong>Güncelleme işlemi başarısız...</strong>
                </div>

              <?php } }?>

              <form action="../../islem.php" method="POST" data-parsley-validate class="form-horizontal form-label-left">

                

                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kategori Adı: <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="ad">
                    </div>
                  </div>




                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kategori Detayı: <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" id="first-name"  class="form-control col-md-7 col-xs-12" name="detay">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kategori Sırası: <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="sira">
                    </div>
                  </div>

                

                  <div class="form-group">
                    <div class="col-md-3 col-sm-3 col-xs-12 col-md-offset-3">
                      <button type="submit" class="btn btn-success" name="kategorikaydet">Kaydet</button>
                    </div>
                  </div>

                </form>


              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /page content -->

  <!-- footer content -->
  
  
  <?php include "footer.php"; ?>