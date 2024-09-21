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
                <center><h1 style="color:#4154f1;"><strong> Add Medicine </strong></h1></center>
               <h6 style="float:left;font-size:25px;"class="mt-3">Health Crad</h6>
              </div>
            </div>
          </div>

          <form action="{{ url('/add_medicine') }}" method="POST" enctype="multipart/form-data">
          @csrf
            <div class="row gy-3 gy-md-4 overflow-hidden">
              <div class="col-12">
                <label for="Name" class="form-label"> </label>
                  <input type="text" class="form-control" name="name" id="" placeholder="Medicine Name"style="height:50px;">
            </div>
            <span class="text-danger">
              @error('name')    
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
                <label for=" " class="form-label"> </label>
                <input type="text" class="form-control" name="price" id=" " placeholder="Price"style="height:50px;margin-top:-15px;">
              </div>
             
              <span class="text-danger">
              @error('price')    
              {{$message}}`
              @enderror
            </span><br>
                </div>
            
              <div class="col-12">
                <label for=" " class="form-label"> </label>
                <input type="text" class="form-control" name="quantity" id="medicine quantity" value=""placeholder="Medicine Quantity"style="height:50px;">
              </div>
              <span class="text-danger">
              @error('quantity')    
              {{$message}}`
              @enderror
            </span><br>
              
              <div class="col-12">
                <label for=" " class="form-label"></label>
                <input type="text" class="form-control" name="discount" id="discount" value=""placeholder="Discount"style="height:50px;">
              </div>

              <span class="text-danger">
              @error('discount')    
              {{$message}}`
              @enderror
              </span><br>
               

                <select name="category" class="form-control mt-3"name="category" fdprocessedid="3bzgs"style="height:50px;">
               <option value="0">Select Category</option>
                <option value="1">OTC MEDICINES</option>
               <option value="2">DIABETES MEDICINE</option>
               <option value="3">BABY &amp; MOTHER</option>
               <option value="4">PERSONAL CARE</option>
                 <option value="5">WELLNESS ITEM</option>
                <span class="text-danger">
              @error('category')    
              {{$message}}`
              @enderror
              </span><br>
            </select>
                  


                                <select name="category" class="form-control mt-3"name="subcategory" fdprocessedid="3bzgs"style="height:50px;">
                                 <option value="0">Select Sub Category</option>
                                                         <option value="1">OTC MEDICINES</option>
                                                         <option value="2">DIABETES MEDICINE</option>
                                                         <option value="3">BABY &amp; MOTHER</option>
                                                         <option value="4">PERSONAL CARE</option>
                                                         <option value="5">WELLNESS ITEM</option>
                              
                                                         <span class="text-danger">
              @error('subcategory')    
              {{$message}}`
              @enderror
              </span><br>
                                                        </select>
                   
              
                <div class="col-12">
                <label for="" class="form-label mt-4">Add Coupon</label>
                <input type="text" class="form-control" name="coupon" id="add coupon" value=" "placeholder="Enter Coupon Code here"style="height:50px;">
              </div>
              <span class="text-danger">
              @error('coupon')    
              {{$message}}`
              @enderror

            </span><br>

              <div class="col-12">
                <label for="" class="form-label mt-4">Medicine Images</label>
                <input type="file" class="form-control" name=" " id="medicine image" value=" "placeholder=""style="height:50px;">
              </div>

             <span class="text-danger">
              @error('medicine image')    
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
 