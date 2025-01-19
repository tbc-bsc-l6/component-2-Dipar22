<!-- Sidebar Navigation-->
<nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          <div class="avatar"><img src="assets/images/single-author.jpg" alt="..." class="img-fluid rounded-circle"></div>
          <div class="title">
            <h1 class="h5">Emily</h1>
            <p>Dim's Manager</p>
          </div>
        </div>
        <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
        <ul class="list-unstyled">
                <li class="active"><a href="{{url('/home')}}"> <i class="icon-home"></i>Home </a></li>
                <li><a href="{{url('category_page')}}"> <i class="icon-grid"></i>Category </a></li>
                <!-- <li><a href="charts.html"> <i class="fa fa-bar-chart"></i>Charts </a></li> -->
                <!-- <li><a href="forms.html"> <i class="icon-padnote"></i>Forms </a></li> -->
                <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Books </a>
                  <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                    <li><a href="{{url('add_book')}}">Add Books</a></li>
                    <li><a href="{{url('show_book')}}">Show Books</a></li>
                    
                  </ul>
                </li>
                <li><a href="{{url('borrow_request')}}"> <i class="icon-logout"></i>Borrow Request</a></li>
        </ul>
        <!-- <span class="heading">Extras</span>
        <ul class="list-unstyled">
          <li> <a href="#"> <i class="icon-settings"></i>Demo </a></li>
          <li> <a href="#"> <i class="icon-writing-whiteboard"></i>Demo </a></li>
          <li> <a href="#"> <i class="icon-chart"></i>Demo </a></li>
          
        </ul> -->
      </nav>
      <!-- Sidebar Navigation end-->