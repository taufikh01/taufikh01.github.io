<?php include "header.php"?>
  
<section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="icon_table"></i>Table</li>
						<li><i class="icon_table"></i>Type Mobil</li>
                        <li><i class="fa fa-file-text-o"></i>Edit Type Mobil</li>
					</ol>
				</div>
			</div>
              
              
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                             Edit Type Mobil
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                <form class="form-validate form-horizontal " method="post" action="action/proses_edit_typemobil.php">
				         		<?php
						        include "../../koneksi.php";
						        $id=$_GET['id'];
						        $sql="SELECT * FROM type_mobil where id_type='$id'";
						        $query=mysql_query($sql);
						        $array=mysql_fetch_array($query)or die(mysql_error());
						        ?>
		                        <div class="form-group">
		                            <label class="control-label col-lg-2">ID Type </label>
		                            <div class="col-lg-10">
		                                <input type="text" name="id" value="<?php echo $array['id_type'] ?>" readonly="" class="form-control">
		                            </div>
		                        </div>
				         		<div class="form-group">
		                            <label class="control-label col-lg-2">Nama</label>
		                            <div class="col-lg-10">
		                               <select class="form-control" name='id_merk' id='id_merk'>
                                    <?php
                                    $sq2 = "select * from merk";
                                    $q = mysql_query($sq2);
                                    while ($rs = mysql_fetch_array($q)) {
                                        echo "<option value='$rs[id_merk]'>$rs[nama_merk]</option>";
                                    }
                                    ?>
                
                                </select>
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <label class="control-label col-lg-2">Nama Type</label>
		                            <div class="col-lg-10">
		                                <input type="text" name="nama" value="<?php echo $array['nama_type'] ?>" class="form-control">
		                            </div>
		                        </div>
		                        <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <button class="btn btn-primary" type="submit">Save</button>
                                    </div>
				         	</form>
				         </div>
		         </div>
		      </div>
<?php include "footer.php"?>