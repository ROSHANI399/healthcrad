@include('header')
 
  <main id="main" class="main">

    <div class="pagetitle">
     <center> <h1>Advertisement List</h1></center>
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
           
            <style> 
 .table-responsive {
    max-height: 500px;
    overflow-y: auto;
  }

  .table-responsive::-webkit-scrollbar {
    width: 8px;
  }

  .table-responsive::-webkit-scrollbar-thumb {
    background-color: #888;
    border-radius: 10px;
  }

  .table-responsive::-webkit-scrollbar-thumb:hover {
    background-color: #555;
  }

  @media (max-width: 768px) {
    .datatable {
      font-size: 12px;
    }
  }
           </style>
            
           <!-- Table with stripped rows -->
           <div class="table-responsive" style="max-height: 500px; overflow-y: auto;">
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>
                     ID
                    </th>
                    <th>Advertisement Image</th>
                    <th> </th>
                    <th> </th>
                    <th>redirect Url</th>
                    <th>status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
           
                     <tr>     
                        <td>{{$user->id}}</td>
                        <td><img src="{{$user->image}}"height="70px;"width="150px;"></td>
                        <td> </td>
                        <td> </td>
                        <td>{{$user->url}}</td>
                        
                        <td><a herf=""class="btn btn-info">Active</a></td>
                  
                        <td><a href=""class="btn btn-danger">Delete</td>
                                                          
                    </tr>
              @endforeach
                </tbody>
                
              </table>
              <!-- End Table with stripped rows -->
               </div>
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