<div class="sidebar">
      <div class="brand">
        <i class="fa-solid fa-xmark xmark"></i> 
         <!-- <h3 class="brand-name">Zana</h3> -->
          <a href="{{route('admindashboard') }}"><img src="{{asset('assets/img/logo.png')}}" alt="" style="width: 9rem;margin-bottom: 0.5rem;"></a>
      </div>
      <ul>
        <li>
          <a href="{{route('admindashboard') }}" class="sidebar-link">
            <i class="fa-regular fa-chart-bar fa-fw" style="color: 	#007bff;"></i>
            <span>Dashboard</span>
          </a>
        </li>     

        <li>
          <a href="{{route('order') }}" class="sidebar-link">
            <i class="fa-solid fa-diagram-project fa-fw" style="color: #28a745;"></i><span>Orders</span>
          </a>
        </li>
        <li>
          <a href="{{route('invoice') }}" class="sidebar-link">
            <i class="fa-solid fa-file-invoice fa-fw" style="color: 	#17a2b8;"></i><span>Invoice</span>
          </a>
        </li>

         <li>
          <a href="{{route('orderstatus') }}" class="sidebar-link">
            <i class="fa-solid fa-diagram-project fa-fw" style="color: 	#17a2b8;"></i><span>Order Status</span>
          </a>
        </li>

        <li>
          <a href="{{route('notification') }}" class="sidebar-link">
            <i class="fa-regular fa-credit-card fa-fw" style="color: 	#fd7e14;"></i><span>Notification</span>
          </a>
        </li>

        <li>
          <a href="{{route('profile') }}" class="sidebar-link">
            <i class="fa-regular fa-user fa-fw" style="color: 	#6f42c1;"></i><span>Profile</span>
          </a>
        </li>

        
        <li>
          <a href="{{route('setting') }}" class="sidebar-link">
            <i class="fa-solid fa-gear fa-fw" style="color:	#20c997;"></i>
            <span>Settings</span>
          </a>
        </li>
         <li>
          <a href="settings.html" class="sidebar-link">
           <i class="fa-solid fa-right-from-bracket fa-fw" style="color: 	#dc3545"></i>
            <span style="color: red">Logout</span>
          </a>
        </li>
      </ul>
    </div>