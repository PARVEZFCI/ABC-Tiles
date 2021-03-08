<!-- Start wrapper -->

 <div id="wrapper">

  <!--Start sidebar-wrapper -->
   <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true" class="border-right border-secondary-light">
     <div class="brand-logo bg-blue" style="background: #FF002A;"><!-- bg-danger shadow-danger -->
      <a href="{{url('/')}}">
     <img width="200px" src="{{ asset('/logo/'.$settingsinfo->logo)}}"/>
     <!--   <h5 class="logo-text"> CA Expert Acc</h5>  -->
     </a>
   </div>

   <ul class="sidebar-menu do-nicescrol">
  
      <!-- Accounts -->
      <li class="sidebar-header">Modules</li>
      
      <li>
        <a href="{{url('admin/dashboard')}}" class="waves-effect">
          <i class="icon-home"></i><span> Dashboard</span>
        </a>
      </li>
      
   
      <li class="sidebar-header">Receiption</li>

      <li>
        <a href="{{url('admin/allcashmemo')}}" class="waves-effect">
          <i class="fa fa-users"></i> <span> Cash Memo </span>
        </a>
      </li>

        <li>
        <a href="{{url('admin/customerdetails')}}" class="waves-effect">
          <i class="fa fa-users"></i> <span> Customer Details  </span>
        </a>
      </li>

      <li>
        <a href="{{url('admin/productdetails')}}" class="waves-effect">
          <i class="fa fa-users"></i> <span> Product Details  </span>
        </a>
      </li>

     
      <li>
        <a href="{{url('admin/producttype')}}" class="waves-effect">
          <i class="fa fa-users"></i> <span> Product Types</span>
        </a>
      </li>
      
       <li>
        <a href="{{url('admin/productsize')}}" class="waves-effect">
          <i class="fa fa-users"></i> <span> Product Specification  </span>
        </a>
      </li>
     

      <li>
        <a href="#" class="waves-effect">
          <i class="fa fa-th-list"></i><span>Reports</span><i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">


           <li>
            <a href="{{url('admin/selectdatedailysales')}}"><i class="fa fa-file-o"></i>Daily Sales Statement   </a>
          </li>

          <li>
            <a href="{{url('admin/dealerwisesalestatmentdateselect')}}"><i class="fa fa-file-o"></i>Single Dealer   Sales Statement   </a>

          </li>

           <li>
            <a href="{{url('admin/dealerwisedateselect')}}"><i class="fa fa-file-o"></i> Dealer Wise  Sales Statement   </a>

          </li>

          <li>
            <a href="{{url('admin/monthlysalestatementdateselect')}}"><i class="fa fa-file-o"></i>Monthly Sales Statement</a>
          </li> 

          <li>
            <a href="{{url('admin/monthlycomissionselctmonth')}}"><i class="fa fa-file-o"></i> Monthly Comission  </a>
          </li>

          <li>
            <a href="{{url('admin/monthlytargetstatementselectdate')}}"><i class="fa fa-file-o"></i>Monthly Target  Statement</a>
          </li> 
          <li>
            <a href="{{url('admin/quarterlytargetselectdate')}}"><i class="fa fa-file-o"></i>Quarterly Target  Statement</a>
          </li> 

           <li>
            <a href="{{url('admin/truck_count')}}"><i class="fa fa-arrows-h"></i> Customer wise Truck count  </a>
          </li>

          <li>
            <a href="{{url('admin/customerduestatement')}}"><i class="fa fa-th-list"></i> Customer wise Due Statement  </a>
          </li>

           <li>
            <a href="{{url('admin/selectyear')}}"><i class="fa fa-file-o"></i>Yearly Sales Statement</a>
          </li> 
         
          <li>
            <a href="{{url('admin/customerdetailsreport')}}"><i class="fa fa-file"></i> Customer Details  </a>
          </li>
          


        </ul>
      </li>

       @if($user_role_per->admin == 1)
      <li>
        <a href="{{url('admin/usermanage')}}" class="waves-effect">
          <i class="fa fa-users"></i><span>User Manage</span>
        </a>
      </li>
      @endif

      <li>
        <a href="{{url('admin/settings')}}">
            <i class="fa fa-cogs"></i> Settings 
        </a>
      </li>

       <li>
        <a href="{{url('logout')}}" class="waves-effect">
          <i class="fa fa-users"></i> <span> Logout </span>
        </a>
      </li>


    </ul>

   </div>

<!-- End sidebar-wrapper
