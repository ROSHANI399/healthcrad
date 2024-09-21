@include('header')
 
  <main id="main" class="main">

    <div class="pagetitle">
     <center> <h1>Category List</h1></center>
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
           <a href="{{url('add_category')}}"><button type="button" class="btn btn-primary mt-2 ml-5" data-bs-toggle="modal" data-bs-target="#exampleModal"style="position:relative;float:right;left:5px;">
            Add Category
            </button></a>
            
           <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
               
                  <tr>
                   <th>ID</th>
                    <th>Category</th>
                    <th>Description</th>
                    <th>ZoneID</th>
                    <th>Image</th>
                      
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                
                @foreach($users as $user)
                     <tr>     
                        <td>{{$user->id}}</td>
                        <td>{{$user->category}}</td>
                        <td>{{$user->description}}</td>
                        <td></td>
                        <td> </td>
                      
                        <td><a href=""class="btn btn-success">Edit</a>
                        <a href=""class="btn btn-danger">Delete</a></td>                                          
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