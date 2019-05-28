@include('admin.templates.header')
<body class="">
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
                  <div class="col-lg-6"><h4 class="card-title">All Users</h4></div>
                    <div class="col-lg-6">
                     <a href="{{ route('permissions.index') }}" class="btn btn-default pull-right btn-sm">Permissions</a>
                     <a href="{{ route('roles.index') }}" class="btn btn-default pull-right btn-sm">Roles</a>
            
                  </div>
                </div>
              </div>
               <div class="card-body">
                <div class="table-responsive">
                  <table class="table tablesorter " id="sample_table">
                    <thead class=" text-primary">

                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Date/Time Added</th>
                            <th>User Roles</th>
                            <th>Operations</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($users as $user)
                        <tr>

                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->created_at->format('F d, Y h:ia') }}</td>
                            <td>{{  $user->roles()->pluck('name')->implode(' ') }}</td>{{-- Retrieve array of roles associated to a user and convert to string --}}
                            <td>
                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-info pull-left btn-sm" style="margin-right: 3px;">Edit</a>

                            {!! Form::open(['method' => 'DELETE', 'route' => ['users.destroy', $user->id] ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                            {!! Form::close() !!}

                            </td>
                        </tr>
                        @endforeach
                    </tbody>

                    </table>
                </div>

              <a href="{{ route('users.create') }}" class="btn btn-success btn-sm">Add User</a>
              </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
     
      @include('admin.templates.footer')