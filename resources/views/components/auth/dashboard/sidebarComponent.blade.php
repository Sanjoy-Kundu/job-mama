     <div id="wrapper">

         <!-- Sidebar -->
         <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
             <!-- Nav Item - Dashboard -->
             <li class="nav-item active">
                 <a class="nav-link" href="index.html">
                     <i class="fas fa-fw fa-tachometer-alt"></i>
                     <span>Dashboard</span></a>
             </li>

             <!-- Divider -->
             <hr class="sidebar-divider">

             {{-- job management  --}}
             <li class="nav-item">
                 <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#job_management"
                     aria-expanded="true" aria-controls="job_management">
                     <i class="fas fa-briefcase"></i>
                     <span>Job Management</span>
                 </a>
                 <div id="job_management" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                     <div class="bg-white py-2 collapse-inner rounded">
                         <a class="collapse-item" href="{{url('/dashboard/job/category')}}" target="_blank">Categories</a>
                         <a class="collapse-item" href="">Post a New Job</a>
                         <a class="collapse-item" href="">Manage Jobs</a>
                     </div>
                 </div>
             </li>

             {{-- user  --}}
             <hr class="sidebar-divider">
             <li class="nav-item">
                 <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#users"
                     aria-expanded="true" aria-controls="users">
                     <i class="fas fa-user"></i>
                     <span>Users</span>
                 </a>
                 <div id="users" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                     <div class="bg-white py-2 collapse-inner rounded">
                         <a class="collapse-item" href="">Employeer</a>
                         <a class="collapse-item" href="">Job Seeker</a>
                         <a class="collapse-item" href="">Feed Back</a>
                     </div>
                 </div>
             </li>

             {{-- Applications  --}}
             <hr class="sidebar-divider">
             <li class="nav-item">
                 <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#applications"
                     aria-expanded="true" aria-controls="applications">
                     <i class="fas fa-clipboard" aria-hidden="true"></i>
                     <span>Applications</span>
                 </a>
                 <div id="applications" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                     <div class="bg-white py-2 collapse-inner rounded">
                         <a class="collapse-item" href="">View Job Applications</a>
                         <a class="collapse-item" href="">Shortlisted Candidates</a>
                         <a class="collapse-item" href="">Interview Schedules</a>
                     </div>
                 </div>
             </li>

             {{-- Analytics  --}}
             <hr class="sidebar-divider">
             <li class="nav-item">
                 <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#analytics"
                     aria-expanded="true" aria-controls="analytics">
                     <i class="fas fa-chart-line"></i>
                     <span>Analytics</span>
                 </a>
                 <div id="analytics" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                     <div class="bg-white py-2 collapse-inner rounded">
                         <a class="collapse-item" href="">Job Post Stats</a>
                         <a class="collapse-item" href="">User Engagement Stats</a>
                         <a class="collapse-item" href="">Revenue Reports</a>
                     </div>
                 </div>
             </li>

             {{-- Settings  --}}
             <hr class="sidebar-divider">
             <li class="nav-item">
                 <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#settings"
                     aria-expanded="true" aria-controls="settings">
                     <i class="fas fa-cogs" aria-hidden="true"></i>
                     <span>Settings</span>
                 </a>
                 <div id="settings" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                     <div class="bg-white py-2 collapse-inner rounded">
                         <a class="collapse-item" href="">General Settings</a>
                         <a class="collapse-item" href="">Payment Gateway</a>
                         <a class="collapse-item" href="">Notification Preferences</a>
                     </div>
                 </div>
             </li>


             {{-- Support  --}}
             <hr class="sidebar-divider">
             <li class="nav-item">
                 <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#support"
                     aria-expanded="true" aria-controls="support">
                     <i class="fas fa-life-ring"></i>
                     <span>Support</span>
                 </a>
                 <div id="support" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                     <div class="bg-white py-2 collapse-inner rounded">
                         <a class="collapse-item" href="">Manage Tickets</a>
                         <a class="collapse-item" href="">FAQ Management</a>
                     </div>
                 </div>
             </li>
             <!-- Divider -->
             <hr class="sidebar-divider d-none d-md-block">

             <!-- Sidebar Toggler (Sidebar) -->
             <div class="text-center d-none d-md-inline">
                 <button class="rounded-circle border-0" id="sidebarToggle"></button>
             </div>

             <!-- Sidebar Message -->
         </ul>
         <!-- End of Sidebar -->
