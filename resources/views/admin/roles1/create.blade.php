@include('admin.templates.header')
<body class="">
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
                  <div class="col-lg-6">
    <h1><i class='fa fa-key'></i> Add Role</h1></div>
                  
              </div>
              <div class="card-body">
                <div class="table-responsive">

    {{ Form::open(array('url' => 'roles')) }}

    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', null, array('class' => 'form-control')) }}
    </div>

    <h5><b>Assign Permissions</b></h5>

    <div class='form-group'>
        @foreach ($permissions as $permission)
            {{ Form::checkbox('permissions[]',  $permission->id ) }}
            {{ Form::label($permission->name, ucfirst($permission->name)) }}<br>

        @endforeach
    </div>

    {{ Form::submit('Add', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

</div>



        </div>
      </div>
      </div>
      </div>
      