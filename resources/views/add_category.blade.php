@include('header')
 
<div class="container"style="float:right;">
<div class="bg-light py-md-5"style=" background-color:#0dcaf0;">
  <div class="container py-5">
    <div class="row justify-content-md-center">
      <div class="col-12 col-md-11 col-lg-8 col-xl-7 col-xxl-6">
        <div class="bg-light p-4 p-md-5 rounded shadow-sm" >
          <div class="row">
            <div class="col-12">
              <div class="mb-5">
                <center><h1 style="color:#4154f1;"><strong> Add Category </strong></h1></center>
               <h6 style="float:left;font-size:25px;"class="mt-3">Health Crad</h6>
              </div>
            </div>
          </div>

          <form action="{{ url('/category') }}" method="POST" enctype="multipart/form-data">
          @csrf
            <div class="row gy-3 gy-md-4 overflow-hidden">
              <div class="col-12">
                <label for="Name" class="form-label"> </label>
                  <input type="text" class="form-control" name="category" id="" placeholder="Category Name"style="height:50px;">
            </div>
            <span class="text-danger">
              @error('category')    
              {{$message}}`
              @enderror
            </span><br>

        <div class="col-12">
             <label for="exampleFormControlTextarea1" class="form-label"></label>
                <textarea class="form-control" name="description" id="description" rows="3"placeholder="Description"style="margin-top:-20px;height:250px;"></textarea>
           </div>

           <span class="text-danger">
              @error('description')    
              {{$message}}`
              @enderror
            </span><br>

              
                
              
                <div class="col-12">
                <label for="" class="form-label mt-4">Image</label>
                <input type="file" class="form-control" name="image" id="add coupon" value=" "placeholder=""style="height:50px;">
              </div>
              <span class="text-danger">
              @error('image')    
              {{$message}}`
              @enderror

            </span><br>

           

              <div class="col-12">
                <div class="d-grid">
                  <button class="btn btn-lg btn-info mt-4" type="submit"style="height:50px;">Submit</button>
                </div>
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
@include('footer')
 