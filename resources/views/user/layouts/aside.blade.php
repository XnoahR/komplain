<div class="wrapper d-flex align-items-stretch">
    <nav id="sidebar">
      <div class="custom-menu">
        <button type="button" id="sidebarCollapse" class="btn btn-primary">
            <i class="fa-solid fa-bars" style="color: #000000;"></i>
          <span class="sr-only">Toggle Menu</span>
        </button>
      </div>
      <h1><a href="index.html" class="logo">Profile Menu</a></h1>
      <ul class="list-unstyled components mb-5">
        <li class="{{ ($title === "Profile")? 'active' : '' }}">
            <a href="{{ route('profile') }}"><span class="fa fa-user mr-3"></span> Profile</a>
        </li>
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
    {{-- Admin/Staff --}}
    @can('staff')
        
        <li class = "{{ ($title === "All Complaint")? 'active' : '' }}">
          <a href="{{ route('all_complaint') }}"><span class="fa fa-database mr-3"></span> All Complaint</a>
        </li>
        @endcan
        <li class = "{{ ($title === "Solved")? 'active' : '' }}">
            <a href="{{ route('solved') }}"><span class="fa fa-check mr-3"></span> Solved Complaint</a>
        </li>
      </ul>
    </nav>
  