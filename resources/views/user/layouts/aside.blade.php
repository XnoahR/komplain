<div class="wrapper d-flex align-items-stretch">
    <nav id="sidebar">
      <div class="custom-menu">
        <button type="button" id="sidebarCollapse" class="btn btn-primary">
            <i class="fa-solid fa-bars" style="color: #000000;"></i>
          <span class="sr-only">Toggle Menu</span>
        </button>
      </div>
      <h1><a href="{{ url('/') }}" class="logo">Back Home</a></h1>
      <ul class="list-unstyled components mb-5">
        @can('admin')
        <li class="{{ ($title === "Data")? 'active' : '' }}">
          <a href="{{ route('data') }}"><span class="fa fa-server mr-3"></span> Data</a>
      </li>
        <li class="{{ ($title === "Role Management")? 'active' : '' }}">
          <a href="{{ route('role_manage') }}"><span class="fa fa-user-group mr-3"></span> Role Management</a>
      </li>
        @endcan
        @can('auth')
        <li class="{{ ($title === "Profile")? 'active' : '' }}">
            <a href="{{ route('profile') }}"><span class="fa fa-user mr-3"></span> Profile</a>
        </li>
        @endcan
        {{-- User --}}
        @can('user')
        <li class="{{ ($title === "Product")? 'active' : '' }}">
          <a href="{{ route('product') }}"><span class="fa fa-briefcase mr-3"></span>Product</a>
        </li>
        <li class="{{ ($title === "Complaint")? 'active' : '' }}">
          <a href="{{ route('complaint') }}"><span class="fa fa-plus mr-3"></span> Add Complaint</a>
        </li>
        <li class="{{ ($title === "Unsolved")? 'active' : '' }}">
          <a href="{{ route('unsolved') }}"><span class="fa fa-comments mr-3"></span> Unsolved Complaints</a>
        </li>
        @endcan
    {{-- Staff --}}
    @can('staff')
        
        <li class = "{{ ($title === "All Complaint")? 'active' : '' }}">
          <a href="{{ route('all_complaint') }}"><span class="fa fa-database mr-3"></span> All Complaint</a>
        </li>
        @endcan
        
        @can('auth')
        <li class = "{{ ($title === "Solved")? 'active' : '' }}">
          <a href="{{ route('solved') }}"><span class="fa fa-check mr-3"></span> Solved Complaint</a>
      </li>
        @endcan
      </ul>
    </nav>
  