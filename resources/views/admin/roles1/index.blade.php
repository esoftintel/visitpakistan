@include('admin.templates.header')
<body class="white-content">
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
                  <div class="col-lg-6"><h4 class="card-title">Roles</h4></div>
                    <div class="col-lg-6">
                    <a href="{{ route('users.index') }}" class="btn btn-default pull-right btn-sm">Users</a>
                     <a href="{{ route('permissions.index') }}" class="btn btn-default pull-right btn-sm">Permissions</a>
            
                  </div>
                </div>
              </div>
               <div class="card-body">
                <div class="table-responsive">
                  <table class="table tablesorter " id="sample_table">
                    <thead class=" text-primary">
            <thead>
                <tr>
                    <th>Role</th>
                    <th>Permissions</th>
                    <th>Operation</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($roles as $role)
                <tr>

                    <td>{{ $role->name }}</td>

                    <td>{{ str_replace(array('[',']','"'),'', $role->permissions()->pluck('name')) }}</td>{{-- Retrieve array of permissions associated to a role and convert to string --}}
                    <td>
                    <a href="{{ URL::to('roles/'.$role->id.'/edit') }}" class="btn btn-info pull-left btn-sm" style="margin-right: 3px;">Edit</a>

                    {!! Form::open(['method' => 'DELETE', 'route' => ['roles.destroy', $role->id] ]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                    {!! Form::close() !!}

                    </td>
                </tr>
                @endforeach
                </tbody>

                    </table>
                </div>

                <a href="{{ URL::to('roles/create') }}" class="btn btn-success btn-sm">Add Role</a>

       </div>
     </div>
    </div>
  </div>

</div>
      
@include('admin.templates.footer')