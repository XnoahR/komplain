<div class="wrapper d-flex align-items-stretch">
    <nav id="sidebar">
      <div class="custom-menu">
        <button type="button" id="sidebarCollapse" class="btn btn-primary">
            <i class="fa-solid fa-bars" style="color: #000000;"></i>
          <span class="sr-only">Toggle Menu</span>
        </button>
      </div>
      <h1><a href="index.html" class="logo">Project Name</a></h1>
      <ul class="list-unstyled components mb-5">
        {{-- User --}}
        <li class="active">
            <a href="{{ route('profile') }}"><span class="fa fa-user mr-3"></span> Profile</a>
        </li>
        <li>
          <a href="{{ route('komplain') }}"><span class="fa fa-plus mr-3"></span> Add Complaint</a>
        </li>
        <li>
          <a href="{{ route('unsolved') }}"><span class="fa fa-comments mr-3"></span> Unsolved Complaints</a>
        </li>
        
    {{-- Admin/Staff --}}
        <li>
          <a href="#"><span class="fa fa-chart-simple mr-3"></span> Statistics</a>
        </li>
        <li>
          <a href="#"><span class="fa fa-database mr-3"></span> All Complaint</a>
        </li>
        <li>
            <a href="{{ route('solved') }}"><span class="fa fa-check mr-3"></span> Solved Complaint</a>
        </li>
      </ul>
    </nav>
  