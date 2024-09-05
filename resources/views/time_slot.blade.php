@include('header')
 
  <main id="main" class="main">

    <div class="pagetitle">
      <center><h1>Time Slot List</h1></center>
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
                <thead style="font-size:14px;">
                  <tr>
                    <th>
                     ID
                    </th>
                    <th>Doctor Name</th>
                    <th>First Seating Time.</th>
                    <th>Second Seating Time	</th>
                    <th>Third Seating Time</th>
                    <th>Second Time slot</th>
                    <th>Third Time slot</th>
                    <th>Day</th>
                    <th>Location
                    </th>
                    
                  </tr>
                </thead>
                <tbody>
            @foreach($users as $user)
                     <tr>     
                                                                
                        <td>{{$user->id}}</td>
                        <td>{{$user->slot1}}</td>
                        <td>{{$user->slot2}}</td>
                        <td>{{$user->slot3}}</td>
                        <td>{{$user->slottime1}}</td>
                        <td>{{$user->slottime2}}</td>
                        <td>{{$user->slottime3}}</td>
                        <td>{{$user->day}}</td>
                        <td></td>
                    
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