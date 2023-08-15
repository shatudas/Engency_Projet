@php
 $prefix = Request::route()->getPrefix();
 $route = Route::current()->getName();
@endphp
  
 <!-- Sidebar Menu -->
 <nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

  <li class="nav-item text-white">
   <a class="nav-link">
    <p class="pl-3 m-0"><small>Dashboard</small></p>   
   </a>
  </li>


   @if(Auth::user()->user_type !=='User')
    <li class="nav-item {{ ($prefix=='/user')?'menu-open':'' }}">
     <a href="#" class="nav-link">
      <i class="nav-icon fas fa-copy"></i>
      <p>
       Manage User
       <i class="fas fa-angle-left right"></i>
      </p>
     </a>

     <ul class="nav nav-treeview">
      <li class="nav-item">
       <a href="{{ route('user.view') }}" class="nav-link {{ ($route=='user.view')?'active':'' }}">
        <i class="far fa-circle nav-icon"></i>
        <p> View User </p>
       </a>
      </li>  
     </ul>
    </li>
   @endif

   <li class="nav-item has-treeview {{ ($prefix=='/profiles')?'menu-open':'' }}">
    <a href="#" class="nav-link">
     <i class="nav-icon fas fa-copy"></i>
     <p> Manage Profile <i class="fas fa-angle-left right"></i> <span class=""></span></p>
    </a>
    <ul class="nav nav-treeview ">
     <li class="nav-item">
      <a href="{{ route('profiles.view') }}" class="nav-link  {{ ($route=='profiles.view')?'active':'' }}">
       <i class="far fa-circle nav-icon"></i>
       <p>Your Profile</p>
      </a>
     </li>
     <li class="nav-item">
      <a href="{{ route('profiles.password.view') }}" class="nav-link {{ ($route=='profiles.password.views')?'active':'' }}">
       <i class="far fa-circle nav-icon"></i>
       <p>Change Password</p>
      </a>
     </li>
    </ul>
   </li>

   <li class="nav-item text-white p-0 ">
    <a class="nav-link">
     <p class="pl-3 py-0 m-0"><small>Look Up</small></p>
    </a>   
   </li>

   <li class="nav-item has-treeview {{ ($prefix=='/compamy_info')?'menu-open':'' }}">
    <a href="#" class="nav-link">
     <i class="nav-icon fas fa-copy"></i>
     <p> Company Info <i class="fas fa-angle-left right"></i> <span class=""></span></p>
    </a>
    <ul class="nav nav-treeview ">
     <li class="nav-item">
      <a href="{{ route('about.add') }}" class="nav-link  {{ ($route=='about.add')?'active':'' }}">
       <i class="far fa-circle nav-icon"></i>
       <p>About Us</p>
      </a>
     </li>
     <li class="nav-item">
      <a href="{{ route('vision.add') }}" class="nav-link  {{ ($route=='vision.add')?'active':'' }}">
       <i class="far fa-circle nav-icon"></i>
       <p>Vision Us</p>
      </a>
     </li>
     <li class="nav-item">
      <a href="{{ route('mision.add') }}" class="nav-link  {{ ($route=='mision.add')?'active':'' }}">
       <i class="far fa-circle nav-icon"></i>
       <p>Mision Us</p>
      </a>
     </li>

     <li class="nav-item">
      <a href="{{ route('history.add') }}" class="nav-link  {{ ($route=='history.add')?'active':'' }}">
       <i class="far fa-circle nav-icon"></i>
       <p>History Us</p>
      </a>
     </li>

     <li class="nav-item">
      <a href="{{ route('branch.view') }}" class="nav-link  {{ ($route=='branch.view ')?'active':'' }}">
       <i class="far fa-circle nav-icon"></i>
       <p>Manage branch</p>
      </a>
     </li>
  
    </ul>
   </li>

   <li class="nav-item {{($prefix=='/web_setting')?'menu-open':''}}">
    <a href="#" class="nav-link">
     <i class="nav-icon fas fa-copy"></i>
     <p>Web Setting
      <i class="fas fa-angle-left right"></i>
      <span class=""></span>
     </p>
    </a>
    <ul class="nav nav-treeview">
     <li class="nav-item">
      <a href="{{route('genarelsetting.add')}}" class="nav-link {{($route=='genarelsetting.add')?'active':''}}">
       <i class="far fa-circle nav-icon"></i>
       <p>Genarel Setting</p>
      </a>
     </li>
    </ul>
   </li>

   <li class="nav-item {{($prefix=='/contact')?'menu-open':''}}">
    <a href="#" class="nav-link">
     <i class="nav-icon fas fa-copy"></i>
     <p>Contact
      <i class="fas fa-angle-left right"></i>
      <span class=""></span>
     </p>
    </a>
    <ul class="nav nav-treeview">
     <li class="nav-item">
      <a href="{{route('user.contact.view')}}" class="nav-link {{($route=='user.contact.view')?'active':''}}">
       <i class="far fa-circle nav-icon"></i>
       <p>Client Message</p>
      </a>
     </li>
    </ul>
   </li>


   <li class="nav-item text-white">
    <a class="nav-link">
     <p class="pl-3 m-0"><small>Main</small></p>
    </a>   
   </li>

   <li class="nav-item has-treeview {{ ($prefix=='/slider')?'menu-open':'' }}">
    <a href="#" class="nav-link">
     <i class="nav-icon fas fa-copy"></i>
     <p> Manage Slider <i class="fas fa-angle-left right"></i> <span class=""></span></p>
    </a>
    <ul class="nav nav-treeview ">
     <li class="nav-item">
      <a href="{{ route('slider.view') }}" class="nav-link {{ ($route=='slider.view')?'active':'' }}">
       <i class="far fa-circle nav-icon"></i>
       <p>View Slider</p>
      </a>
     </li>
    </ul>
   </li>


   <li class="nav-item has-treeview {{ ($prefix=='/package')?'menu-open':'' }}">
    <a href="#" class="nav-link">
     <i class="nav-icon fas fa-copy"></i>
     <p> Manage Service <i class="fas fa-angle-left right"></i> <span class=""></span></p>
    </a>
    <ul class="nav nav-treeview ">
     <li class="nav-item">
      <a href="{{ route('category.view') }}" class="nav-link {{ ($route=='category.view')?'active':'' }}">
       <i class="far fa-circle nav-icon"></i>
       <p>Manage Cetagory</p>
      </a>
     </li>
     <li class="nav-item">
      <a href="{{ route('services.view') }}" class="nav-link {{ ($route=='services.view')?'active':'' }}">
       <i class="far fa-circle nav-icon"></i>
       <p>Manage Services</p>
      </a>
     </li>
     <li class="nav-item">
      <a href="{{ route('FAQ.view') }}" class="nav-link {{ ($route=='FAQ.view')?'active':'' }}">
       <i class="far fa-circle nav-icon"></i>
       <p>Service FAQ</p>
      </a>
     </li>  
    </ul>
   </li>


   <li class="nav-item has-treeview {{ ($prefix=='/team')?'menu-open':'' }}">
    <a href="#" class="nav-link">
     <i class="nav-icon fas fa-copy"></i>
     <p> Manage Team <i class="fas fa-angle-left right"></i> <span class=""></span></p>
    </a>
    <ul class="nav nav-treeview ">
     <li class="nav-item">
      <a href="{{ route('employer.view') }}" class="nav-link {{ ($route=='employer.view')?'active':'' }}">
       <i class="far fa-circle nav-icon"></i>
       <p>View Emlpoyer</p>
      </a>
     </li>
     <li class="nav-item">
      <a href="{{ route('director.view') }}" class="nav-link {{ ($route=='director.view')?'active':'' }}">
       <i class="far fa-circle nav-icon"></i>
       <p>View Director</p>
      </a>
     </li>
    </ul>
   </li>

   <li class="nav-item has-treeview {{ ($prefix=='/governance')?'menu-open':'' }}">
    <a href="#" class="nav-link">
     <i class="nav-icon fas fa-copy"></i>
     <p> Manage Governance <i class="fas fa-angle-left right"></i> <span class=""></span></p>
    </a>
    <ul class="nav nav-treeview ">
     <li class="nav-item">
      <a href="{{ route('authority.add') }}" class="nav-link {{ ($route=='authority.add')?'active':'' }}">
       <i class="far fa-circle nav-icon"></i>
       <p>Manege Authority</p>
      </a>
     </li>
     <li class="nav-item">
      <a href="{{ route('memorandum.add') }}" class="nav-link {{ ($route=='memorandum.add')?'active':'' }}">
       <i class="far fa-circle nav-icon"></i>
       <p>Manage Memorandum</p>
      </a>
     </li>
     <li class="nav-item">
      <a href="{{ route('statutes.add') }}" class="nav-link  {{ ($route=='statutes.add')?'active':'' }}">
       <i class="far fa-circle nav-icon"></i>
       <p>Statutes of the Gov</p>
      </a>
     </li>
    </ul>
   </li>

   <li class="nav-item has-treeview {{ ($prefix=='/adminstration')?'menu-open':'' }}">
    <a href="#" class="nav-link">
     <i class="nav-icon fas fa-copy"></i>
     <p> Manage Adminstration <i class="fas fa-angle-left right"></i> <span class=""></span></p>
    </a>
    <ul class="nav nav-treeview ">
     <li class="nav-item">
      <a href="{{ route('generaladmistration.add') }}" class="nav-link {{ ($route=='generaladmistration.add')?'active':'' }}">
       <i class="far fa-circle nav-icon"></i>
       <p>General Admistration</p>
      </a>
     </li>
     <li class="nav-item">
      <a href="{{ route('finance.add') }}" class="nav-link {{ ($route=='finance.add')?'active':'' }}">
       <i class="far fa-circle nav-icon"></i>
       <p>Finance Adminstration</p>
      </a>
     </li>
     <li class="nav-item">
      <a href="{{ route('hr.add') }}" class="nav-link {{ ($route=='hr.add')?'active':'' }}">
       <i class="far fa-circle nav-icon"></i>
       <p>HR Administration</p>
      </a>
     </li>
    
    </ul>
   </li>


  
  </ul>
 </nav>