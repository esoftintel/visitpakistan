
@include('admin.templates.header')
<body class="white-content">
  <div class="wrapper">
    @include('admin.templates.aside')
    <div class="main-panel">
    @include('admin.templates.navbar')
     
      <!-- End Navbar -->
      <div class="content">
       
     
 
        <div class="col-lg-12 col-md-12">
        <a class="btn btn-success btn-sm pull-right"  href="{{url('/post_details/'.$chats[0]->ch_ps_id)}}" >Back</a>
        @if (session('info'))
          <div class="alert alert-success">
              {{ session('info') }}
          </div>
          @endif
            <div class="card ">
              <div class="card-header">
              <div class="row"> 
                <div class="col-lg-6"><h4 class="card-title">Post Chat</h4></div>
               
                <h4 class="card-title"> </h4>
              </div>
              <div class="card-body">
              <div class="row">

              <div class="col-lg-8">
            <div class="card card-chart">
              <div class="card-header">
             
                <div class="row">

                <h4 class="card-title"><i class="tim-icons  text-primary"></i>Chat Messages</h4>
                
                </div>
              </div>
              <div class="card-body">
                  @foreach($chats as $chat)
              <h4 class="card-title"><i class="tim-icons icon-bell-55 text-primary"></i>User Name:{{$chat->name}}<div>{{$chat->ch_message}}</div><div>{{$chat->created_at}}</div></h4>
               @endforeach
                </div>
              </div>
            </div>
          
          </div>
          
</div>
      
      
      @include('admin.templates.footer')
     