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
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
           <center> <h5 class="mt-4">User List</h5></center>
           <!--            
           <div class="dt-buttons">
            <a class="dt-button buttons-excel buttons-html5 exportExcel" tabindex="0" aria-controls="example" href
            span>Excel</span></a>
            <a class="dt-button buttons-csv buttons-html5 exportExcel" tabindex="0" aria-controls="example" href="#"><span>CSV</span></a><a class="dt-button buttons-pdf buttons-html5 exportExcel" tabindex="0" aria-controls="example" href="#"><span>PDF</span></a></div>
            -->
            
           <!-- Table with stripped rows -->

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
                       <div class="table-responsive" style="max-height: 500px; overflow-y: auto;">
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>
                     ID
                    </th>
                    <th>UserName</th>
                    <th>MobileNo</th>
                    <th>Email</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($users as  $user)
                     <tr>     
                        <td>{{$user->id}}</td>
                        <td>{{$user->username}}</td>
                        <td>{{$user->phone}}</td>
                        <td>{{$user->email}}</td>
                        <td><a href=""class="btn btn-danger">Delete</a></td>                                          
                    </tr>
                    @endforeach
                </tbody>
                
              </table>
</div>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>

    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->


</body>

</html>

@include('footer')
