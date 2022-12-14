 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
     <!-- Brand Logo -->

     <!-- Sidebar -->
     <div class="sidebar">
         <!-- Sidebar user panel (optional) -->
         <div class="user-panel mt-3 pb-3 mb-3 d-flex">
             <div class="image">
                 <img src="{{ asset('/adminDashboardSourceFiles/user_img/' . Auth::user()->user_image) }}"
                     class="img-circle elevation-2" alt="User Image">
             </div>
             <div class="info">
                 <a href="#" class="d-block">{{ Auth::user()->name }}</a>
             </div>
         </div>

         <!-- SidebarSearch Form -->
         <div class="form-inline">
             <div class="input-group" data-widget="sidebar-search">
                 <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                     aria-label="Search">
                 <div class="input-group-append">
                     <button class="btn btn-sidebar">
                         <i class="fas fa-search fa-fw"></i>
                     </button>
                 </div>
             </div>
         </div>

         <!-- Sidebar Menu -->
         <nav class="mt-2">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                 data-accordion="false">
                 <a href="{{ route('user.show_profile') }}" class="nav-link">
                     <i class="nav-icon fas fa-tachometer-alt"></i>
                     <p>
                         Restaurant Profile
                         <i class="right fas fa-angle-left"></i>
                     </p>
                 </a>
             </ul>
         </nav>

         <nav class="mt-2">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                 data-accordion="false">
                 <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                 <li class="nav-item has-treeview menu-open">
                     <a href="#" class="nav-link active">
                         <i class="nav-icon fas fa-tachometer-alt"></i>
                         <p>
                             Menu
                             <i class="right fas fa-angle-left"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="{{ route('dish.show_dish_table') }}" class="nav-link active">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Add Dish</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="{{ route('manage_dish') }}" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Manage Dishes</p>
                             </a>
                         </li>
                     </ul>
                 </li>
             </ul>
         </nav>
         <nav class="mt-2">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                 data-accordion="false">
                 <a href="{{ route('showOrders') }}" class="nav-link">
                     <i class="nav-icon fas fa-tachometer-alt"></i>
                     <p>
                         Orders
                         <i class="right fas fa-angle-left"></i>
                     </p>
                 </a>
             </ul>
         </nav>
         </nav>
         <nav class="mt-2">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                 data-accordion="false">
                 <a href="{{ route('restaurantReservation') }}" class="nav-link">
                     <i class="nav-icon fas fa-tachometer-alt"></i>
                     <p>
                         Reservations
                         <i class="right fas fa-angle-left"></i>
                     </p>
                 </a>
             </ul>
         </nav>
         <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
 </aside>
