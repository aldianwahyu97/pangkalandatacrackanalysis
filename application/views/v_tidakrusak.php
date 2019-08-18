<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

  <title>Klasifikasi Retakan dengan ANN</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url('/assets/vendor/fontawesome-free/css/all.min.css')?>" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="<?php echo base_url('/assets/vendor/datatables/dataTables.bootstrap4.css')?>" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url('/assets/css/sb-admin.css')?>" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.html">Klasifikasi Retakan dengan ANN</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>
  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a href="<?php echo base_url(); ?>" class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
    </ul>

    <div id="content-wrapper">
      <div class="container-fluid">
      <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Bangunan Tidak Rusak</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Nama Bangunan</th>
                    <th>Alamat</th>
                    <th>Jumlah Lantai</th>
                    <th>Tahun Pembuatan</th>
                    <th>Gambar Bangunan</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Nama Bangunan</th>
                    <th>Alamat</th>
                    <th>Jumlah Lantai</th>
                    <th>Tahun Pembuatan</th>
                    <th>Gambar Bangunan</th>
                    <th>Aksi</th>
                  </tr>
                </tfoot>
                <tbody>
                  <tr>
                    <td>Fakultas Teknik</td>
                    <td>Jalan Majapahit</td>
                    <td>3</td>
                    <td>2014</td>
                    <td><img src="" alt=""></td>
                    <td>
                        <button class="btn btn-danger">Hapus</button>
                    </td>
                  </tr>
                  <tr>
                    <td>Universitas Mataram</td>
                    <td>Jalan Majapahit</td>
                    <td>3</td>
                    <td>2010</td>
                    <td><img src="" alt=""></td>
                    <td>
                        <button class="btn btn-danger">Hapus</button>
                    </td>
                  </tr>

                  <tr>
                    <td>Rumah Sakit UNRAM</td>
                    <td>Jalan Majapahit</td>
                    <td>5</td>
                    <td>2014</td>
                    <td><img src="" alt=""></td>
                    <td>
                        <button class="btn btn-danger">Hapus</button>
                    </td>
                  </tr>

                  <tr>
                    <td>Fakultas Pertanian</td>
                    <td>Jalan Majapahit</td>
                    <td>3</td>
                    <td>2016</td>
                    <td><img src="" alt=""></td>
                    <td>
                        <button class="btn btn-danger">Hapus</button>
                    </td>
                  </tr>
                  
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

        <span>
          <a href="<?php echo base_url(); ?>index.php/Welcome/maps_tidakrusak">
            <button class="btn btn-success"> Tampilkan Penyebaran</button>
          </a>
        </span>
        <br>
        <br>
    </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <script>
	function readURL(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();

			reader.onload = function(e) {
				$('#preview').attr('src', e.target.result);
			}

	
			reader.readAsDataURL(input.files[0]);
		}
		}

		$("#img").change(function() {
			readURL(this);
		});
	</script>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url('/assets/vendor/jquery/jquery.min.js') ?>"></script>
  <script src="<?php echo base_url('/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url('/assets/vendor/jquery-easing/jquery.easing.min.js')?>"></script>

  <!-- Page level plugin JavaScript-->
  <script src="<?php echo base_url('/assets/vendor/chart.js/Chart.min.js')?>"></script>
  <script src="<?php echo base_url('/assets/vendor/datatables/jquery.dataTables.js')?>"></script>
  <script src="<?php echo base_url('/assets/vendor/datatables/dataTables.bootstrap4.js')?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url('/assets/js/sb-admin.min.js')?>"></script>

  <!-- Demo scripts for this page-->
  <script src="<?php echo base_url('/assets/js/demo/datatables-demo.js')?>"></script>
  <script src="<?php echo base_url('/assets/js/demo/chart-area-demo.js')?>"></script>

</body>

</html>
