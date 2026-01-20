 <!--  BEGIN SIDEBAR  -->
 <style>
    th {
        color: #805dca !important;
        font-weight: bold !important;
    }

    .main-content {
        margin-top: 25px;
    }

    #accordionExample {
        overflow-y: hidden !important;
    }
</style>
 <div class="sidebar-wrapper sidebar-theme">

     <nav id="sidebar">

         <div class="flex-row text-center navbar-nav theme-brand">
             <div class="nav-logo">
                 <div class="nav-item theme-logo">
                     <a href="/">
                         {{-- <img src="{{ asset('assets/img/logo.svg') }}" class="navbar-logo" alt="logo"> --}}
                         <img src="{{ asset('assets/img/logo.svg') }}" alt="">
                     </a>
                 </div>
             </div>
             <div class="nav-item sidebar-toggle">
                 <div class="btn-toggle sidebarCollapse">
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                         stroke-linejoin="round" class="feather feather-chevrons-left">
                         <polyline points="11 17 6 12 11 7"></polyline>
                         <polyline points="18 17 13 12 18 7"></polyline>
                     </svg>
                 </div>
             </div>
         </div>
         <div class="shadow-bottom"></div>
         <ul class="list-unstyled menu-categories" id="accordionExample">
             <li class="menu active">
                 {{-- <a href="{{ route('admin.dashboard') }}" data-bs-toggle="collapse" aria-expanded="true"
                     class="dropdown-toggle">
                     <div class="">
                         <span>Dashboard</span>
                     </div>
                 </a> --}}
                 <a href="{{ route('admin.dashboard') }}" aria-expanded="true" class="dropdown-toggle">
                            <div class="">
                                <span>Dashboard</span>
                            </div>
                        </a>
             </li>



             <li class="menu menu-heading">
                 <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                         viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                         stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus">
                         <line x1="5" y1="12" x2="19" y2="12"></line>
                     </svg><span>INTERFACE</span></div>
             </li>


             <li class="menu">
                 <a href="#Categories" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                     <div class="">
                         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                             fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                             stroke-linejoin="round" class="feather feather-box">
                             <path
                                 d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                             </path>
                             <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                             <line x1="12" y1="22.08" x2="12" y2="12"></line>
                         </svg>
                         <span>Categories</span>
                     </div>
                     <div>
                         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                             fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                             stroke-linejoin="round" class="feather feather-chevron-right">
                             <polyline points="9 18 15 12 9 6"></polyline>
                         </svg>
                     </div>
                 </a>
                 <ul class="collapse submenu list-unstyled" id="Categories" data-bs-parent="#accordionExample">
                     <li>
                         <a href="{{ route('categories.list') }}"> List Categories</a>
                     </li>
                     <li>
                         <a href="{{ route('categories.create') }}"> Create New Category</a>
                     </li>
                     <li>
                         <a href="{{ route('categories.deleted') }}"> Deleted Categories </a>
                     </li>
                 </ul>
             </li>
             <li class="menu">
                 <a href="#services" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                     <div class="">
                         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                             fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                             stroke-linejoin="round" class="feather feather-box">
                             <path
                                 d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                             </path>
                             <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                             <line x1="12" y1="22.08" x2="12" y2="12"></line>
                         </svg>
                         <span>Services</span>
                     </div>
                     <div>
                         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                             fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                             stroke-linejoin="round" class="feather feather-chevron-right">
                             <polyline points="9 18 15 12 9 6"></polyline>
                         </svg>
                     </div>
                 </a>
                 <ul class="collapse submenu list-unstyled" id="services" data-bs-parent="#accordionExample">
                     <li>
                         <a href="{{ route('service.list') }}"> List services</a>
                     </li>
                     <li>
                         <a href="{{ route('service.create') }}"> Create New Service</a>
                     </li>
                     {{-- <li>
                         <a href="{{ route('services.deleted') }}"> Deleted services </a>
                     </li> --}}
                 </ul>
             </li>

             <li class="menu">
                 <a href="#gallery" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                     <div class="">
                         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                             fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                             stroke-linejoin="round" class="feather feather-box">
                             <path
                                 d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                             </path>
                             <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                             <line x1="12" y1="22.08" x2="12" y2="12"></line>
                         </svg>
                         <span>Gallery</span>
                     </div>
                     <div>
                         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                             fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                             stroke-linejoin="round" class="feather feather-chevron-right">
                             <polyline points="9 18 15 12 9 6"></polyline>
                         </svg>
                     </div>
                 </a>
                 <ul class="collapse submenu list-unstyled" id="gallery" data-bs-parent="#accordionExample">
                     <li>
                         <a href="{{ route('media.gallery.categories') }}"> Categories</a>
                     </li>
                     <li>
                         <a href="{{ route('media.gallery.categories.create') }}"> Create Category</a>
                     </li>
                     <li>
                         <a href="{{ route('list.media') }}"> List Media </a>
                     </li>
                     <li>
                         <a href="{{ route('upload.media') }}"> Upload Galleries </a>
                     </li>
                     <li>
                         <a href="{{ route('deleted.media') }}"> Deleted Media </a>
                     </li>
                 </ul>
             </li>
             {{-- <li class="menu">
                 <a href="#partners" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                     <div class="">
                         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                             fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                             stroke-linejoin="round" class="feather feather-box">
                             <path
                                 d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                             </path>
                             <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                             <line x1="12" y1="22.08" x2="12" y2="12"></line>
                         </svg>
                         <span>Partners</span>
                     </div>
                     <div>
                         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                             fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                             stroke-linejoin="round" class="feather feather-chevron-right">
                             <polyline points="9 18 15 12 9 6"></polyline>
                         </svg>
                     </div>
                 </a>
                 <ul class="collapse submenu list-unstyled" id="partners" data-bs-parent="#accordionExample">
                     <li>
                         <a href="{{ route('partners.list') }}"> List Partners</a>
                     </li>
                     <li>
                         <a href="{{ route('partners.create') }}"> Create New Partner</a>
                     </li>
                     <li>
                         <a href="{{ route('partners.deleted') }}"> Deleted Partners </a>
                     </li>
                 </ul>
             </li> --}}
             <li class="menu">
                 <a href="#pages" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                     <div class="">
                         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                             fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                             stroke-linejoin="round" class="feather feather-box">
                             <path
                                 d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                             </path>
                             <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                             <line x1="12" y1="22.08" x2="12" y2="12"></line>
                         </svg>
                         <span>Pages</span>
                     </div>
                     <div>
                         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                             fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                             stroke-linejoin="round" class="feather feather-chevron-right">
                             <polyline points="9 18 15 12 9 6"></polyline>
                         </svg>
                     </div>
                 </a>
                 <ul class="collapse submenu list-unstyled" id="pages" data-bs-parent="#accordionExample">

                     <li>
                         <a href="{{ route('setting.home') }}"> Home Settings</a>
                     </li>

                     <li>
                         <a href="{{ route('about.index') }}"> About Settings</a>
                     </li>
                     <li>
                         <a href="{{ route('certificate.index') }}">Certificate</a>
                     </li>
                 </ul>
             </li>
             <li class="menu">
                 <a href="#settings" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                     <div class="">
                         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                             fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                             stroke-linejoin="round" class="feather feather-box">
                             <path
                                 d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                             </path>
                             <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                             <line x1="12" y1="22.08" x2="12" y2="12"></line>
                         </svg>
                         <span>Site Settings</span>
                     </div>
                     <div>
                         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                             fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                             stroke-linejoin="round" class="feather feather-chevron-right">
                             <polyline points="9 18 15 12 9 6"></polyline>
                         </svg>
                     </div>
                 </a>
                 <ul class="collapse submenu list-unstyled" id="settings" data-bs-parent="#accordionExample">
                     <li>
                         <a href="{{ route('settings.index') }}"> Site Settings</a>
                     </li>

                 </ul>
             </li>

             <li class="menu menu-heading">
                 <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                         viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                         stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus">
                         <line x1="5" y1="12" x2="19" y2="12"></line>
                     </svg><span>STAFF</span></div>
             </li>

             <li class="menu">
                 <a href="#staff" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                     <div class="">
                         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                             fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                             stroke-linejoin="round" class="feather feather-box">
                             <path
                                 d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                             </path>
                             <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                             <line x1="12" y1="22.08" x2="12" y2="12"></line>
                         </svg>
                         <span>Staff</span>
                     </div>
                     <div>
                         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                             fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                             stroke-linejoin="round" class="feather feather-chevron-right">
                             <polyline points="9 18 15 12 9 6"></polyline>
                         </svg>
                     </div>
                 </a>
                 <ul class="collapse submenu list-unstyled" id="staff" data-bs-parent="#accordionExample">
                     <li>
                         <a href="{{ route('staff.list') }}"> List Staff</a>
                     </li>
                     <li>
                         <a href="{{ route('staff.create') }}"> Create Staff Member</a>
                     </li>
                     <li>
                         <a href="{{ route('staff.deleted') }}"> Deleted Members</a>
                     </li>
                 </ul>
             </li>


         </ul>

     </nav>

 </div>
 <!--  END SIDEBAR  -->
