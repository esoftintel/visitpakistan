<div class="sidebar">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red"
    -->
      <div class="sidebar-wrapper">
        <div class="logo">
          <!-- <a href="javascript:void(0)" class="simple-text logo-mini">
            CT
          </a> -->
          <a href="{{url('/dashboard')}}" class="simple-text logo-normal text-center">
            Dashboard
          </a>
        </div>
        <ul class="nav">
         
          <li >
         
            <!-- <a href="/dashboard">
              <i class="tim-icons icon-chart-pie-36"></i>
              <p>Dashboard</p>
            </a> -->
            <a href="{{url('/category')}}">
            <i class='tim-icons icon-align-center'></i>
              <!-- <i class="tim-icons icon-atom"></i> -->
              <p>Categories</p>
            </a>
          </li>
          <li >
            <!-- <a href="/dashboard">
              <i class="tim-icons icon-chart-pie-36"></i>
              <p>Dashboard</p>
            </a> -->
            <a href="{{url('/subcategory')}}">
            <i class='tim-icons icon-align-center'></i>
              <!-- <i class="tim-icons icon-atom"></i> -->
              <p>SubCategories</p>
            </a>
          </li>
         
          <li>
            <a href="{{url('/attribute')}}">
            <i class='tim-icons icon-align-center'></i>
              <!-- <i class="tim-icons icon-atom"></i> -->
              <p>Attributes</p>
            </a>
          </li>
          <li>
            <a href="{{url('/AttributeValue')}}">
            <i class='tim-icons icon-align-center'></i>
              <!-- <i class="tim-icons icon-atom"></i> -->
              <p>Attribute Values</p>
            </a>
          </li>

           <li>
            <a href="{{url('/packages')}}">
            <i class='tim-icons icon-align-center'></i>
              <!-- <i class="tim-icons icon-atom"></i> -->
              <p>Packages</p>
            </a>
          </li>
          
          <li>
          <a href="{{url('/posts_list')}}">
            <i class='tim-icons icon-bell-55'></i>
              <!-- <i class="tim-icons icon-atom"></i> -->
              <p>Posts</p>
            </a>
          </li>
          <li>
            <a href="{{route('users.index')}}">
              <i class="tim-icons icon-single-02"></i>
              <p>Users</p>
            </a>
          </li>
          <!-- <li>
            <a href="{{url('/setLink')}}">
              <i class="tim-icons icon-bell-55"></i>
              <p>setLink</p>
            </a>
          </li>
          <li>
            <a href="{{url('/setLink')}}">
              <i class="tim-icons icon-bell-55"></i>
              <p>setLink</p>
            </a>
          </li>
          <li>
            <a href="{{url('/setLink')}}">
              <i class="tim-icons icon-bell-55"></i>
              <p>setLink</p>
            </a>
          </li> -->
         
        </ul>
      </div>
    </div>