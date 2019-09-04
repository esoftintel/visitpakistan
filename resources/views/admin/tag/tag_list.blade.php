
 @include('admin.templates.header')
<body class="white-content">
  <div class="wrapper">
    @include('admin.templates.aside')
    <div class="main-panel">
    @include('admin.templates.navbar')
     
      <!-- End Navbar -->
      <div class="content">
     
 
        <div class="col-lg-12 col-md-12">
        @if (session('info'))
          <div class="alert alert-success">
              {{ session('info') }}
          </div>
          @endif
            <div class="card ">
              <div class="card-header">
              <div class="row"> 
              <div class="col-lg-6"><h4 class="card-title"> Tags</h4></div>
                <div class="col-lg-6"> <a class="btn btn-primary pull-right btn-sm" href="{{route('tag.create')}}" role="button">add Tags</a></div>
               
              <h4 class="card-title"> </h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table tablesorter " id="sample_table">
                    <thead class=" text-primary">
                      <tr class="text-center">
                        <th>Id</th>
                        <th>Name</th>
                        <th>icon <b>Green</b></th>
                        <th>icon <b>White</b></th>
                        <th>Created</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($tag_data as $key)
                      <tr>
                        <td> {{$key->tg_id}} </td>
                        <td>{{$key->tg_name}}</td>
                        <td><img src="<?php echo  asset('')."images/tag/".$key->tg_green_icon; ?>" class="img-thumbnail" width="70"></td>
                        <td><img src="<?php echo  asset('')."images/tag/".$key->tg_wight_icon; ?>" class="img-thumbnail" width="70"></td>
                           <td>{{$key->created_at}}</td>
                        <td class="text-center">
                           <a class="btn btn-primary btn-sm" href="{{route('tag.edit',$key->tg_id)}}" role="button">Update</a>
                           <a class="btn btn-danger btn-sm" href="{{url('tag_delete',$key->tg_id)}}" role="button">Delete</a>
                        </td>
                      </tr>
                      @endforeach
                     
                      
                    </tbody>
                  </table>
                  </div>
              </div>
            </div>
          </div>

       </div>
       
      @include('admin.templates.footer')
     