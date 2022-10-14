<nav class="iq-sidebar-menu">
    <ul id="iq-sidebar-toggle" class="iq-menu">
       <li class="active">
          <a href="#dashboard" class="iq-waves-effect" data-toggle="collapse" aria-expanded="true"><span class="ripple rippleEffect"></span><i class="las la-home iq-arrow-left"></i><span>Dashboard</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
          <ul id="dashboard" class="iq-submenu collapse show" data-parent="#iq-sidebar-toggle">
             <li class="active"><a href="{{url('/')}}/dashboard"><i class="las la-home"></i>Account Dashboard</a></li>
             <li><a href="{{route('income-statement')}}"><i class="las la-ad"></i>Income Statement</a></li>
             <li><a href="{{url('/')}}"><i class="fa fa-edit"></i>Balance Sheet</a></li>
             <li><a href="{{url('/')}}"><i class="fa fa-money"></i>Cash Flow</a></li>

          </ul>
       </li>
       <li aria-expanded="true">
          <a href="#menu-design" class="iq-waves-effect" data-toggle="collapse" aria-expanded="false"><i class="fa fa-shopping-cart iq-arrow-left"></i><span>Sales</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
          <ul id="menu-design" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
             <li><a href="{{route('coming-soon')}}"><i class="fa fa-pencil"></i>Record Sale</a></li>
             <li><a href="{{route('coming-soon')}}"><i class="fa fa-money"></i>Sales</a></li>
          </ul>
       </li>
       <li aria-expanded="true">
        <a href="#menu-designs" class="iq-waves-effect" data-toggle="collapse" aria-expanded="false"><i class="fa fa-money iq-arrow-left"></i><span>Purchases</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
        <ul id="menu-designs" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
            <li><a href="{{route('coming-soon')}}"><i class="fa fa-pencil"></i>Record Purchase</a></li>
            <li><a href="{{route('coming-soon')}}"><i class="fa fa-money"></i>Purchases</a></li>
        </ul>
     </li>
     <li aria-expanded="true">
        <a href="#menu-designz" class="iq-waves-effect" data-toggle="collapse" aria-expanded="false"><i class="fa fa-suitcase iq-arrow-left"></i><span>Inventory</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
        <ul id="menu-designz" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
           <li><a href="{{route('coming-soon')}}"><i class="fa fa-plus"></i>Add Inventory</a></li>
           <li><a href="{{route('coming-soon')}}"><i class="fa fa-suitcase"></i>View Inventory</a></li>
        </ul>
     </li>

       <li>
          <a href="#userinfo" class="iq-waves-effect" data-toggle="collapse" aria-expanded="false"><span class="ripple rippleEffect"></span><i class="las la-user-tie iq-arrow-left"></i><span>User</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
          <ul id="userinfo" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle" style="">
             <li><a href="{{route('coming-soon')}}"><i class="las la-id-card-alt"></i>User Profile</a></li>
             <li><a href="{{route('coming-soon')}}"><i class="las la-edit"></i>User Edit</a></li>
             <li><a href="{{route('coming-soon')}}"><i class="las la-plus-circle"></i>User Add</a></li>
             <li><a href="{{route('coming-soon')}}"><i class="las la-th-list"></i>User List</a></li>
          </ul>
       </li>

       <li>
        <a href="#userinfos" class="iq-waves-effect" data-toggle="collapse" aria-expanded="false"><span class="ripple rippleEffect"></span><i class="fa fa-dollar iq-arrow-left"></i><span>Finance</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
        <ul id="userinfos" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle" style="">
           <li><a href="{{route('coming-soon')}}"><i class="las la-id-card-alt"></i>Working Capital</a></li>
        </ul>
     </li>

       <li>
          <a href="#ui-elements" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="fa fa-gavel iq-arrow-left"></i><span>Risk Managent</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
          <ul id="ui-elements" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
             <li><a href="{{route('coming-soon')}}"><i class="las la-palette"></i>My Score Card</a></li>
             <li><a href="{{route('coming-soon')}}"><i class="las la-keyboard"></i>Financial Ratios</a></li>
             <li><a href="{{route('coming-soon')}}"><i class="las la-tag"></i>Liquidity</a></li>
             <li><a href="{{route('coming-soon')}}"><i class="lab la-atlassian"></i>Profitabity</a></li>
             <li><a href="{{route('coming-soon')}}"><i class="lab la-atlassian"></i>Leverage</a></li>
             <li><a href="{{route('coming-soon')}}"><i class="lab la-atlassian"></i>Efficiency</a></li>
          </ul>
       </li>
       <li>
          <a href="#forms" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="lab la-wpforms iq-arrow-left"></i><span>Marketing</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
          <ul id="forms" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
             <li><a href="{{route('coming-soon')}}"><i class="fa fa-shopping-cart"></i>E-Commerce</a></li>

          </ul>
       </li>

    </ul>
 </nav>
 <div class="p-3"></div>
