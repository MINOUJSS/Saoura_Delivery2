<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        إضافة منتج
        <small>إضافة منتج معين</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('admin.dashboard')}}"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
        <li class="active">إضافة منتج</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Your Page Content Here -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">إضافة منتج</h3>
        </div><!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="{{route('admin.product.store')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
          <div class="box-body">
            <div class="form-group col-lg-4 {{$errors->has('product_name')? 'has-error':''}}">
              <label for="product_name">إسم المنتج</label>
              <input type="text" class="form-control" name="product_name" id="product_name" placeholder="اسم المنتج" value="{{old('product_name')}}">
              @if($errors->has('product_name'))
              <span class="help-block">
              {{ $errors->first('product_name')}}
              </span>
              @endif
            </div>
            <div class="form-group col-lg-4 {{$errors->has('product_brand')? 'has-error':''}}">
              <label for="product_brand">العلامة التجارية</label>
              <select class="form-control" name="product_brand">
                <option value="1">بدون علامة تجارية</option>
                @foreach ($brands as $brand)
                    <option value="{{$brand->id}}" @if(old('product_brand')==$brand->id) {{'selected'}} @endif>{{$brand->name}}</option>
                @endforeach                
              </select>              
            </div>
            <div class="form-group col-lg-4 {{$errors->has('product_supplier')? 'has-error':''}}">
              <label for="product_supplier">المزود</label>
              <select class="form-control" name="product_supplier">
                <option value="1">لا مزود</option>
                @foreach ($suppliers as $supplier)
                    <option value="{{$supplier->id}}" @if(old('product_supplier')==$supplier->id) selected @endif>{{$supplier->name}}</option>
                @endforeach                
              </select>              
            </div>
            <div class="form-group {{$errors->has('product_short_description')? 'has-error':''}}">
              <label for="product_short_description">وصف مختصر للمنتج</label>
              <textarea class="form-control" name="product_short_description" id="short_description" cols="30" rows="3" placeholder="وصف مختصر للمنتج">{{old('product_short_description')}}</textarea>            
              @if($errors->has('product_short_description'))
              <span class="help-block">
              {{ $errors->first('product_short_description')}}
              </span>
              @endif
            </div>
            <div class="form-group {{$errors->has('product_long_description')? 'has-error':''}}">
              <label for="product_long_description">وصف كامل للمنتج</label>
              <textarea class="form-control" name="product_long_description" id="article-ckeditor" cols="30" rows="5" placeholder="وصف كامل للمنتج">{{old('product_long_description')}}</textarea>            
              @if($errors->has('product_long_description'))
              <span class="help-block">
              {{ $errors->first('product_long_description')}}
              </span>
              @endif
            </div>
            <div class="form-group col-lg-4 {{$errors->has('product_Purchasing_price')? 'has-error':''}}">
              <label for="product_Purchasing_price">سعر المنتج (دج)</label>
              <input type="number" class="form-control" name="product_Purchasing_price" id="product_Purchasing_price" placeholder="تكلفة المنتج بالدينار الجزائري" value="<?php if(old('product_Purchasing_price')){echo old('product_Purchasing_price');}else{echo "0";}?>">
              @if($errors->has('product_Purchasing_price'))
              <span class="help-block">
              {{ $errors->first('product_Purchasing_price')}}
              </span>
              @endif
            </div>
            <div class="form-group col-lg-4 {{$errors->has('product_to_magazin_price')? 'has-error':''}}">
              <label for="product_to_magazin_price">تكلفة التوصيل لمخازننا (دج)</label>
              <input type="number" class="form-control" name="product_to_magazin_price" id="product_to_magazin_price" placeholder="تكلفة توصيل المنتج إلى مخازننا بالدينار الجزائري" value="<?php if(old('product_to_magazin_price')){echo old('product_to_magazin_price');}else{echo "0";}?>">
              @if($errors->has('product_to_magazin_price'))
              <span class="help-block">
              {{ $errors->first('product_to_magazin_price')}}
              </span>
              @endif
            </div>
            <div class="form-group col-lg-4 {{$errors->has('product_to_consumer_price')? 'has-error':''}}">
              <label for="product_to_consumer_price">تكلفة التوصيل للزبون (دج)</label>
              <input type="number" class="form-control" name="product_to_consumer_price" id="product_to_consumer_price" placeholder="تكلفة توصيل المنتج إلى الزبون بالدينار الجزائري" value="<?php if(old('product_to_consumer_price')){echo old('product_to_consumer_price');}else{echo "0";}?>">
              @if($errors->has('product_to_consumer_price'))
              <span class="help-block">
              {{ $errors->first('product_to_consumer_price')}}
              </span>
              @endif
            </div>
            <div class="form-group col-lg-4 {{$errors->has('product_ombalage_price')? 'has-error':''}}">
              <label for="product_ombalage_price">تكلفة التغليف (دج)</label>
              <input type="number" class="form-control" name="product_ombalage_price" id="product_ombalage_price" placeholder="تكلفة تغليف المنتج  بالدينار الجزائري" value="<?php if(old('product_ombalage_price')){echo old('product_ombalage_price');}else{echo "0";}?>">
              @if($errors->has('product_ombalage_price'))
              <span class="help-block">
              {{ $errors->first('product_ombalage_price')}}
              </span>
              @endif
            </div>
            <div class="form-group col-lg-4 {{$errors->has('product_adds_price')? 'has-error':''}}">
              <label for="product_adds_price"> تكلفة الإعلان للمنتج (دج)</label>
              <input type="number" class="form-control" name="product_adds_price" id="product_adds_price" placeholder="سعر إعلان المنتج بالدينار الجزائري" value="<?php if(old('product_adds_price')){echo old('product_adds_price');}else{echo "0";}?>">
              @if($errors->has('product_adds_price'))
              <span class="help-block">
              {{ $errors->first('product_adds_price')}}
              </span>
              @endif
            </div>
            <div class="form-group col-lg-4 {{$errors->has('product_global_price')? 'has-error':''}}">
              <label for="product_global_price"> التكلفة الإجمالية للمنتج (دج)</label>
              <input type="text" class="form-control" disabled="disabled" name="product_global_price" id="product_global_price" placeholder="0" value="{{old('product_global_price')}}">
              @if($errors->has('product_global_price'))
              <span class="help-block">
              {{ $errors->first('product_global_price')}}
              </span>
              @endif
            </div>
            <div class="form-group col-lg-4 {{$errors->has('product_selling_price')? 'has-error':''}}">
              <label for="product_selling_price"> تسعيرة المنتج (دج)</label>
              <input type="number" class="form-control" name="product_selling_price" id="product_selling_price" placeholder="سعر المنتج بالدينار الجزائري" value="{{old('product_selling_price')}}">
              @if($errors->has('product_selling_price'))
              <span class="help-block">
              {{ $errors->first('product_selling_price')}}
              </span>
              @endif
            </div>
            <div class="form-group col-lg-4 {{$errors->has('product_qty')? 'has-error':''}}">
              <label for="product_qty"> الكمية</label>
              <input type="number" class="form-control" name="product_qty" id="product_qty" placeholder="أكتب الكمية" value="{{old('product_qty')}}">
              @if($errors->has('product_qty'))
              <span class="help-block">
              {{ $errors->first('product_qty')}}
              </span>
              @endif
            </div>
            <div class="form-group col-lg-4 {{$errors->has('product_category')? 'has-error':''}}">
              <label for="product_category">الصنف</label>
              <select class="form-control" name="product_category" id="product_category">
                <option value="1">إختر الصنف</option>
                @foreach ($categories as $category)
                    <option value="{{$category->id}}" @if(old('product_category')==$category->id) selected @endif>{{$category->name}}</option>
                @endforeach                
              </select>              
            </div>
            <div class="form-group col-lg-4 {{$errors->has('product_sub_category')? 'has-error':''}}">
              <label for="product_sub_category1">تحت الصنف</label>
              <select class="form-control" name="product_sub_category" id="product_sub_category">
                <option value="1">إختر تحت الصنف</option>
              </select>              
            </div>
            <div class="form-group col-lg-4 {{$errors->has('product_sub_sub_category')? 'has-error':''}}">
              <label for="product_sub_sub_category">تحت تحت الصنف</label>
              <select class="form-control" name="product_sub_sub_category" id="product_sub_sub_category">
                <option value="1">إختر تحت تحت الصنف</option>               
              </select>              
            </div>
            <div class="form-group {{$errors->has('product_image')? 'has-error':''}}">
              <label for="product_image">صورة المنتج الرئيسية</label>
              <input type="file" name="product_image" id="product_image">
              @if($errors->has('product_image'))
              <span class="help-block">
                {{$errors->first('product_image')}}
              </span>
              @endif
            </div>            
          </div><!-- /.box-body -->

          <div class="box-footer">
            <button type="submit" class="btn btn-primary">حفظ</button>
          </div>
        </form>
      </div>
      <!-- End Your Page Content Here -->

    </section><!-- /.content -->
  </div><!-- /.content-wrapper -->