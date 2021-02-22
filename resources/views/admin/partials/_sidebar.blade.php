    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin Panel<!-- <sup>2</sup> --></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="{{route('admin')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>



      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Nav Item - Pages Collapse Menu -->
     <!--  <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseDoctor" aria-expanded="true" aria-controls="collapseDoctor">
          <i class="fas fa-fw fa-folder"></i>
          <span>Doctor</span>
        </a>
        <div id="collapseDoctor" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{route('doctor.create')}}">Add</a>
            <a class="collapse-item" href="{{route('doctor.index')}}">List</a>
              </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCourse" aria-expanded="true" aria-controls="collapseCourse">
          <i class="fas fa-fw fa-folder"></i>
          <span>Course Management</span>
        </a>
        <div id="collapseCourse" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{route('course-management.create')}}">Add</a>
            <a class="collapse-item" href="{{route('course-management.index')}}">List</a>
         </div>
        </div>
      </li> -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTask" aria-expanded="true" aria-controls="collapseTask">
          <i class="fas fa-fw fa-folder"></i>
          <span>Task Management</span>
        </a>
        <div id="collapseTask" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{route('cal.create')}}">Add</a>
            <a class="collapse-item" href="{{route('tasks.index')}}">List</a>
         </div>
        </div>
      </li>



      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAssignee" aria-expanded="true" aria-controls="collapseCourse">
          <i class="fas fa-fw fa-folder"></i>
          <span>Assignee Management</span>
        </a>
        <div id="collapseAssignee" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{route('assignee.create')}}">Add</a>
            <a class="collapse-item" href="{{route('assignee.index')}}">List</a>
         </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSkill" aria-expanded="true" aria-controls="collapseCourse">
          <i class="fas fa-fw fa-folder"></i>
          <span>Skill Management</span>
        </a>
        <div id="collapseSkill" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{route('skill.create')}}">Add</a>
            <a class="collapse-item" href="{{route('skill.index')}}">List</a>
         </div>
        </div>
      </li>


      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseClient" aria-expanded="true" aria-controls="collapseCourse">
          <i class="fas fa-fw fa-folder"></i>
          <span>Client Management</span>
        </a>
        <div id="collapseClient" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{route('client.create')}}">Add</a>
            <a class="collapse-item" href="{{route('client.index')}}">List</a>
         </div>
        </div>
      </li>


      <!-- Nav Item - Tables -->
<!--       <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Tables</span></a>
      </li> -->

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    
    <!-- End of Sidebar -->
