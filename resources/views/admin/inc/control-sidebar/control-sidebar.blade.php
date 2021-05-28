<aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">إشهار و تتبع المتجر</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="{{route('admin.edit.google.analytic')}}">
              <i class="menu-icon fa fa-line-chart bg-red"></i>
              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Google Analytics</h4>
                <p>إدخال كود التتبع و تفعيله</p>
              </div>
            </a>
          </li>
        </ul><!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">الكلمات المفتاحية للمنتجات</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="{{route('admin.products.seo')}}">
              <i class="menu-icon fa fa-search bg-red"></i>
              <div class="menu-info">
                <h4 class="control-sidebar-subheading">جدول الكلمات المفتاحية</h4>
                <p>المنتجات التي تم إضافة كلمات مفتاحية إليها</p>
              </div>
            </a>
          </li>
        </ul><!-- /.control-sidebar-menu -->

      </div><!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div><!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <h3 class="control-sidebar-heading">إعداد عامة</h3>
        <ul class="sidebar-menu">
          {{-- <li class="header">محتوى القائمة</li> --}}
          <!-- Optionally, you can add icons to the links -->
        <li><a href="{{route('admin.setting')}}"><i class="fa fa-cog"></i> <span>إعدادت الموقع</span></a></li>      
        </ul>
        {{-- <form method="post">
          <h3 class="control-sidebar-heading">إعداد عامة</h3>
          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>
            <p>
              Some information about this general settings option
            </p>
          </div><!-- /.form-group -->
        </form> --}}
      </div><!-- /.tab-pane -->
    </div>
  </aside><!-- /.control-sidebar -->