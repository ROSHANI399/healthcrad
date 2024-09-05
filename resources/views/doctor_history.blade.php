@include('header')
@include('doctor-add')
  <main id="main" class="main">

    <div class="pagetitle">
     <center> <h1>History</h1></center>
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
                    <th>Patient Name</th>
                    <th>Phone No.</th>
                    <th>Docter name	</th>
                    <th>City</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Fee	</th>   
                    <th>Payment Method</th>
                    <th>App. Status </th>
                  </tr>
                </thead>
                <tbody>
                
                @foreach($users as $user)
                     <tr>     
                        <td>{{$user->id}}</td>
                        <td>{{$user->patientname}}</td>
                        <td>{{$user->phone}}</td>
                        <td>{{$user->doctorname}}</td>
                        <td></td>
                        
                        <td>{{$user->date}}</td>
                  
                        <td>{{$user->time}}</td>
                        <td> </td>
                        <td>{{$user->payment}}</td>
                     
                        <td>{{$user->status	}}</td>                                          
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
  
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>