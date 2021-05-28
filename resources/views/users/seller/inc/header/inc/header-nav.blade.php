<nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>
    <!-- Navbar Right Menu -->
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- Messages: style can be found in dropdown.less-->
        <li class="dropdown messages-menu">
          <!-- Menu toggle button -->
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-envelope-o"></i>
            <span class="label label-success">4</span>
          </a>
          <ul class="dropdown-menu">
            <li class="header">لديك 4 رسائل</li>
            <li>
              <!-- inner menu: contains the messages -->
              <ul class="menu">
                <li><!-- start message -->
                  <a href="#">
                    <div class="pull-left">
                      <!-- User Image -->
                      <img src="{{url('admin-css')}}/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                    </div>
                    <!-- Message title and timestamp -->
                    <h4>
                      فريق الدعم
                      <small><i class="fa fa-clock-o"></i> 5 دقائق</small>
                    </h4>
                    <!-- The message -->
                    <p>لماذا لا تشتري سمة جديدة رائعة؟</p>
                  </a>
                </li><!-- end message -->
              </ul><!-- /.menu -->
            </li>
            <li class="footer"><a href="#">مشاهدة كل الرسائل</a></li>
          </ul>
        </li><!-- /.messages-menu -->

        <!-- Notifications Menu -->
        <li class="dropdown notifications-menu">
          <!-- Menu toggle button -->
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-bell-o"></i>
            <span class="label label-warning">1</span>
          </a>
          <ul class="dropdown-menu">
            <li class="header">واحدة</li>
            <li>
              <!-- Inner Menu: contains the notifications -->
              <ul class="menu">
                {{-- @if(count(get_no_reading_note_data())>0)
                <!-- start notification -->
                @foreach(get_no_reading_note_data() as $note)
                <li>
                  <a href="{{url($note->link)}}">
                    <i class="{{$note->icon}} text-aqua"></i> {{$note->title}}
                  </a>
                </li>
                @endforeach
                <!-- end notification -->
                @endif --}}
              </ul>
            </li>
            <li class="footer"><a href="#">مشاهدة الكل</a></li>
          </ul>
        </li>
        <!-- Tasks Menu -->
        <li class="dropdown tasks-menu">
          <!-- Menu Toggle Button -->
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-flag-o"></i>
            <span class="label label-danger">9</span>
          </a>
          <ul class="dropdown-menu">
            <li class="header">لديك 9 مهام</li>
            <li>
              <!-- Inner menu: contains the tasks -->
              <ul class="menu">
                <li><!-- Task item -->
                  <a href="#">
                    <!-- Task title and progress text -->
                    <h3>
                      صمم بعض الأزرار
                      <small class="pull-right">20%</small>
                    </h3>
                    <!-- The progress bar -->
                    <div class="progress xs">
                      <!-- Change the css width attribute to simulate progress -->
                      <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                        <span class="sr-only">20٪ اكتمل</span>
                      </div>
                    </div>
                  </a>
                </li><!-- end task item -->
              </ul>
            </li>
            <li class="footer">
              <a href="#">اعرض جميع المهام</a>
            </li>
          </ul>
        </li>
        <!-- User Account Menu -->
        <li class="dropdown user user-menu">
          <!-- Menu Toggle Button -->
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <!-- The user image in the navbar-->
            <img src="{{url('admin-css')}}/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
            <!-- hidden-xs hides the username on small devices so only the image appears. -->
          <span class="hidden-xs">seller name</span>
          </a>
          <ul class="dropdown-menu">
            <!-- The user image in the menu -->
            <li class="user-header">
              <img src="{{url('admin-css')}}/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
              <p>
                seller name - مطور ويب
                <small>عضو منذ نوفمبر 2012</small>
              </p>
            </li>
            <!-- Menu Body -->
            <li class="user-body">
              <div class="col-xs-4 text-center">
                <a href="#">متابعون</a>
              </div>
              <div class="col-xs-4 text-center">
                <a href="#">مبيعات</a>
              </div>
              <div class="col-xs-4 text-center">
                <a href="#">اصحاب</a>
              </div>
            </li>
            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-left">
                <a href="#" class="btn btn-default btn-flat">الملف الشخصي</a>
              </div>
              <div class="pull-right">
                {{-- <a href="{{ route('logout') }}" class="btn btn-default btn-flat">
     {{ __('خروج') }}</a> --}}
     <a class="btn btn-default btn-flat" href="{{ route('userlogout') }}"
     onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
      {{ __('خروج') }}
  </a>

  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
      @csrf
  </form>
                {{-- 
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();"
                  
                  <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                  @csrf
                </form> --}}
              {{-- <a href="#" class="btn btn-default btn-flat">Sign out</a> --}}
              </div>
            </li>
          </ul>
        </li>
        <!-- Control Sidebar Toggle Button -->
        <li>
          <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
        </li>
      </ul>
    </div>
  </nav>