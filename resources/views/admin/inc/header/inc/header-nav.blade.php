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
            <span class="label label-success">{{get_no_read_contact()}}</span>
          </a>
          <ul class="dropdown-menu">
            <li class="header">{{print_message_nember_string(get_no_read_contact())}}</li>
            <li>
              <!-- inner menu: contains the messages -->
              <ul class="menu">
                {{-- @if() --}}
                @foreach(get_no_read_contact_data() as $contact)
                <li><!-- start message -->
                  <a href="{{route('admin.contact.show',$contact->id)}}">
                    <div class="pull-left">
                      <!-- User Image -->
                      <img src="{{url('admin-css')}}/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                    </div>
                    <!-- Message title and timestamp -->
                    <h4>
                      {{$contact->name}}
                      <small><i class="fa fa-clock-o"></i>{{$contact->created_at->diffForHumans()}}</small>
                    </h4>
                    <!-- The message -->
                    <p>{{$contact->title}}</p>
                  </a>
                </li><!-- end message -->                
                @endforeach
              </ul><!-- /.menu -->
            </li>
            <li class="footer"><a href="{{route('admin.all.contacts')}}">مشاهدة الكل </a></li>
          </ul>
        </li><!-- /.messages-menu -->

        <!-- Notifications Menu -->
        <li class="dropdown notifications-menu">
          <!-- Menu toggle button -->
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-bell-o"></i>
            <span class="label label-warning">{{get_no_read_notification_count(Auth::guard('admin')->user()->id)}}</span>
          </a>
          <ul class="dropdown-menu">
            <li class="header">{{print_note_nember_string(get_no_read_notification_count(Auth::guard('admin')->user()->id))}}</li>
            <li>
              <!-- Inner Menu: contains the notifications -->
              <ul class="menu">
                @if(count(get_no_reading_note_data(Auth::guard('admin')->user()->id))>0)
                <!-- start notification -->
                @foreach(get_no_reading_note_data(Auth::guard('admin')->user()->id) as $note)
                <li>
                  <a href="{{route('admin.notification.read.note.and.redirect',$note->id)}}">
                    <i class="{{$note->icon}} text-aqua"></i> {{$note->title}}
                  </a>
                </li>
                @endforeach
                <!-- end notification -->
                @endif
              </ul>
            </li>
            <li class="footer"><a href="{{route('admin.notifications')}}">مشاهدة الكل</a></li>
          </ul>
        </li>
        <!-- Tasks Menu -->
        <li class="dropdown tasks-menu">
          <!-- Menu Toggle Button -->
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-flag-o"></i>
            <span class="label label-danger">{{get_no_read_order_notification_count()}}</span>
          </a>
          <ul class="dropdown-menu">
            <li class="header">{{print_order_note_nember_string(get_no_read_order_notification_count())}}</li>
            <li>
              <!-- Inner menu: contains the tasks -->
              <ul class="menu">
                @if(count(get_no_reading_order_note_data())>0)
                <!-- start order notification -->
                @foreach(get_no_reading_order_note_data() as $note)
                <li>
                  <a href="{{url($note->link)}}">
                    <i class="{{$note->icon}} text-aqua"></i> {{$note->title}}
                  </a>
                </li>
                @endforeach
                <!-- end order item -->
                @endif
              </ul>
            </li>
            <li class="footer">
              <a href="{{route('admin.orders')}}">كل الطلبات</a>
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
          <span class="hidden-xs">{{Auth::user()->name}}</span>
          </a>
          <ul class="dropdown-menu">
            <!-- The user image in the menu -->
            <li class="user-header">
              <img src="{{url('admin-css')}}/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
              <p>
                {{Auth::user()->name}} - مطور ويب
                <small>عضو منذ نوفمبر 2012</small>
              </p>
            </li>
            {{-- <!-- Menu Body -->
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
            <!-- Menu Footer--> --}}
            <li class="user-footer">
              <div class="pull-left">
                <a href="#" class="btn btn-default btn-flat">الملف الشخصي</a>
              </div>
              <div class="pull-right">
                <a href="{{ route('admin.logout') }}" class="btn btn-default btn-flat">
     {{ __('خروج') }}</a>
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