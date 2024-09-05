@include('header')
@include('register')

  <main id="main" class="main">
    <div class="pagetitle">
      <h1> Tables</h1>
      <nav>
        <ol class="breadcrumb">
        </ol>
      </nav>
    </div>

    <!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
            <button type="button" class="btn btn-primary mt-2 ml-5" data-bs-toggle="modal" data-bs-target="#exampleModal"style="position:relative;float:right;left:5px;">
            Add User
            </button>
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>url</th>
                    <th>images</th>
                    <th>Status</th>
                    <th>Action</th>
                    <th>Datetime</th>
                   
                  </tr>
                </thead>
                
                              @foreach($data as $key=> $c)
                               <tr>     
                                 <td>{{$key+1}}</td>                                                  
                                   <td>{{$c['url']}}</td>
                                  
                                   <td>
                                    
                                     <img  src=" {{$c['image']}}"height="100px";width="100px;">
                                   </td>
                                    
                                   
                                   <td>

                                    @if($c['status']=='1')
                                    <a href="{{url('/table/update').'/'.$c['id'].'/2'}}" class="btn btn-primary  btn-sm">Active</a>
                                    @else
                                    <a href="{{url('/table/update').'/'.$c['id'].'/1'}}" class="btn btn-danger btn-sm">Inactive</i></a>                
                                    @endif
                                    </td>
  
                            <td><a href="{{ url('/table/delete/'.$c['id']) }}"class="btn btn-danger">Delete</a></td>                 
                            <td>{{$c['created_at']}}</td>                     
                      
                        </tr>
                   @endforeach
                 <tbody>
              </div>
           </div>
        </div>
      </div>
    </section>
  </main>
