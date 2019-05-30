
@include('admin.templates.header')
<body class="white-content">
  <div class="wrapper">
    @include('admin.templates.aside')
    <div class="main-panel">
    @include('admin.templates.navbar')
     
      <!-- End Navbar -->
      <div class="content">
       
        <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card ">
              <div class="card-header">
              <div class="row"> 
                <div class="col-lg-6"><h4 class="card-title">Sub Category Update</h4></div>
                <div class="col-lg-6"> <a class="btn btn-primary btn-sm pull-right" href="{{route('subcategory.index')}}" role="button">Subcategories</a></div>
                </div>
               
              </div>
              <div class="card-body">
                <div class="table-responsive">
                <form action='{{route("subcategory.update",$subcategory->st_id)}}' method="post" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" class="form-control" name="subcategory" value='<?php echo $subcategory->st_name?>'  placeholder="Attribute Name">
                     </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Category </label>
                        <select class="form-control"  name="category_id" id="sel1">
                             <option value="{{$subcategory->st_ct_id}}" selected>{{$subcategory->st_ct_id}}</option>
                           @foreach($category_data as $key)
                            <option value={{$key->ct_id}}>{{$key->ct_name}}</option>
                             @endforeach
                        </select>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                 </form>
                   
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
      @include('admin.templates.footer')
     