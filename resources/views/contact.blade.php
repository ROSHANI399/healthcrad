@include('header')
 
  <main id="main" class="main">

    <div class="pagetitle">
      <!-- <h1>Data Tables</h1> -->
      <nav>
        <ol class="breadcrumb">
       
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row table">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
          
            
           <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>
                     ID
                    </th>
                    <th> </th>
                    <th>MobileNo</th>
                    <th> </th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
            
                @foreach($users as $user)
                     <tr>     
                        <td>{{$user->id}}</td>
                        <td></td>
                        <td>{{$user->number}}</td>
                        <td></td>
                        <td><a href=""class="btn btn-info">Edit</a></td>                                          
                    </tr>
                  @endforeach
                </tbody>
                
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  
 
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>