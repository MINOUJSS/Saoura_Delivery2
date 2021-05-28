<!-- BREADCRUMB -->
<div id="breadcrumb">
    <div class="container">
        <ul class="breadcrumb">
        <li><a href="{{url('/')}}">الرئيسية</a></li>
            <li class="active">المنتجات</li>
        </ul>
    </div>
</div>
<!-- /BREADCRUMB -->

<!-- section -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="container">
            <!-- ASIDE -->
            <div id="aside" class="col-md-3">
                <!-- aside widget -->
                @include('store.layouts.inc.products.shop-by')
                <!-- /aside widget -->

                <!-- aside widget -->
                @include('store.layouts.inc.products.filter-by-price')
                <!-- aside widget -->

                <!-- aside widget -->
                @include('store.layouts.inc.products.filter-by-color')
                <!-- /aside widget -->

                <!-- aside widget -->
                @include('store.layouts.inc.products.filter-by-size')
                <!-- /aside widget -->

                <!-- aside widget -->
                @include('store.layouts.inc.products.filter-by-brand')
                <!-- /aside widget -->

                <!-- aside widget -->
                {{-- @include('store.layouts.inc.products.filter-by-gender') --}}
                <!-- /aside widget -->

                <!-- aside widget -->
                @include('store.layouts.inc.products.top-rated-product')
                <!-- /aside widget -->
            </div>
            <!-- /ASIDE -->

            <!-- MAIN -->
            <div id="main" class="col-md-9">
                <!-- store top filter -->
                @include('store.layouts.inc.products.store-filter')
                <!-- /store top filter -->

                <!-- STORE -->
                <div id="store">
                    <!-- row -->
                    @include('store.layouts.inc.products.search-result')
                    <!-- /row -->
                </div>
                <!-- /STORE -->

                <!-- store bottom filter -->
                @include('store.layouts.inc.products.store-filter')
                <!-- /store bottom filter -->
            </div>
            <!-- /MAIN -->
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /section -->
