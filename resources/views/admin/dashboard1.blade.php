
@include('admin.templates.header')
<body class="">
  <div class="wrapper">
    @include('admin.templates.aside')
    <div class="main-panel">
    @include('admin.templates.navbar')
     
      <!-- End Navbar -->
      <div class="content">
      {{$i=1}}
      <div class="row">
        @foreach($posts as $post)
     
        
          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h4 class="card-category">Posted by: {{$post->name}}</h4>
                <div class="row">

                <h5 class="card-title"><i class="tim-icons icon-bell-55 text-primary"></i>Posted at: {{$post->created_at}}</h5>
                &nbsp &nbsp &nbsp &nbsp &nbsp<a style="float:right" href="post_details/{{$post->ps_id}}">Details</a>
                </div>
              </div>
              <div class="card-body">
              <img src="{{$post->image_path}}" alt="Trulli" width="320" height="250">
                <!-- <div class="chart-area">
                  <canvas id="chartLinePurple"></canvas> -->
                </div>
              </div>
            </div>
            @if($i/3==0)
      
            <br>
            @endif
            {{$i++}}
            
            @endforeach
            </div>

      
      @include('admin.templates.footer')
     