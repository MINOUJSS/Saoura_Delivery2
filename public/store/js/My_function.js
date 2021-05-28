//
$(document).ready(function(){                                                                 
   //get min price change     
      $('.noUi-handle-lower').on('mouseup',function(event){
         event.preventDefault();
         var min_price=$('.noUi-handle-lower').attr('aria-valuetext');        
                  $.ajax({
                     url:"/searcher/min-price/"+parseInt(min_price)+"/add",
                     method:'GET',
                     data:{min_price:parseInt(min_price)},

                     success:function(data)
                     {
                        $('#min_price_value').text(parseInt(min_price));
                        $('#searcher_data').fadeIn(500).html(data);
                        sort_product_result();
                        //load_pagination();
                     }
                  });
        });
   //get max price change   
   // $('.noUi-handle-upper').on('change',function(event){
   //    event.preventDefault();
   //    $('#max_price_value').text(parseInt(max_price));
   // });
   $('.noUi-handle-upper').on('mouseup',function(event){
      event.preventDefault();
      var max_price=$('.noUi-handle-upper').attr('aria-valuetext');
   $.ajax({
      url:"/searcher/max-price/"+parseInt(max_price)+"/add",
      method:'GET',
      data:{min_price:parseInt(max_price)},

      success:function(data)
      {
         $('#max_price_value').text(parseInt(max_price));
         $('#searcher_data').fadeIn(500).html(data);
         sort_product_result();
      }
   });
     });           
});
//
//redirecte to the right tabs
// Javascript to enable link to tab
var url = document.location.toString();
if (url.match('#')) {
    $('.nav-tabs a[href="#' + url.split('#')[1] + '"]').tab('show');
} 
//
function select_color(color_id)
{
 //change value in hideen input box of color_id 
 $('#color_id').val(color_id);
 //clear old border of other color box
 for(var x=1;x<=20;x++)
 {
    $('#color-box-'+x).css('border','none');
 }
 //change css of the color box how has click
 $('#color-box-'+color_id).css('border','2px solid #000');

}
//
function select_size(size_id)
{
 //change value in hideen input box of size_id 
 $('#size_id').val(size_id);
 //clear old border of other color box
 for(var x=1;x<=20;x++)
 {
    $('#size-box-'+x).css('border','none');
 }
 //change css of the color box how has click
 $('#size-box-'+size_id).css('border','2px solid #000');    
  
};

// add_color_to_searcher
function add_color_to_searcher(color_id)
{
   $.ajax({
      url:'/searcher/color/'+color_id+'/add',
      method:'GET',
      success:function(data)
      {
         $('#searcher_data').fadeIn(500).html(data);  
         sort_product_result();
      }
   });
};

// add_size_to_searcher
function add_size_to_searcher(size_id)
{
   $.ajax({
      url:'/searcher/size/'+size_id+'/add',
      method:'GET',
      success:function(data)
      {
         $('#searcher_data').fadeIn(500).html(data);  
         sort_product_result();
      }
   });
};
// add_size_to_searcher
function add_brand_to_searcher(brand_id)
{
   $.ajax({
      url:'/searcher/brand/'+brand_id+'/add',
      method:'GET',
      success:function(data)
      {
         $('#searcher_data').fadeIn(500).html(data);  
         sort_product_result();
      }
   });
};
// delete_size_to_searcher
function delete_size_to_searcher(size_id)
{
   $.ajax({
      url:'/searcher/size/'+size_id+'/delete',
      method:'GET',
      success:function(data)
      {
         //$('#searcher_data').fadeIn(500).html(data);  
         //sort_product_result();
         window.location.href='/products';
      }
   });
};

// delete_color_to_searcher
function delete_color_to_searcher(color_id)
{
   
   $.ajax({
      url:'/searcher/color/'+color_id+'/delete',
      method:'GET',
      success:function(data)
      {
        // $('#searcher_data').fadeIn(500).html(data);  
         //sort_product_result();
         window.location.href='/products';
      }
   });
};

// delete_min_price_to_searcher
function delete_min_price_to_searcher()
{
   $.ajax({
      url:'/searcher/min-price/delete',
      method:'GET',
      success:function(data)
      {
         //$('#searcher_data').fadeIn(500).html(data);  
         //sort_product_result();
         window.location.href='/products';
      }
   });
};

// delete_max_price_to_searcher
function delete_max_price_to_searcher()
{
   $.ajax({
      url:'/searcher/max-price/delete',
      method:'GET',
      success:function(data)
      {
         //$('#searcher_data').fadeIn(500).html(data);
         //sort_product_result();
         window.location.href='/products';
      }
   });
};
// delete_brand_to_searcher
function delete_brand_to_searcher(brand_id)
{
   $.ajax({
      url:'/searcher/brand/'+brand_id+'/delete',
      method:'GET',
      success:function(data)
      {
         //$('#searcher_data').fadeIn(500).html(data);  
         window.location.href='/products';
      }
   });
};
// sort_product_result()
function sort_product_result()
{
   $.ajax({
      url:'/shop-by',
      method:'GET',
      success:function(data)
      {
         window.location.href='/products';
         //location.reload(true);
         //$('#load_products').fadeIn(50).html(data);  
         //$('#my_pagination').fadeIn(50).html(data);
         //console.log(data[1].data);
         //
         //load_pagination(data[1].data);         
            //start star rating
            var pathname=document.location.pathname.toString();
            if(pathname =='/products' )
            {
               //            		
               var product_ratings=document.getElementsByName('products_ratings_b');               
            for(var b=0 ;b<=product_ratings.length; b++)
            {
               $('.product-star-'+b).starrr({
               readOnly:true,
               rating:product_ratings[b].getAttribute('data-rating')
                });
            }
            }else{			
            //get product ratings
            var product_rating=document.getElementById('product_ratings');
            $('.product-star').starrr({
               readOnly:true,
               rating:product_rating.getAttribute('data-rating')
            });
            //get consumer rating
            var consumers_ratings = document.getElementsByName('consumer_rating');
            for(var a=0; a < consumers_ratings.length;a++)
            {
               $('.consumer-star-'+a).starrr({
               readOnly:true,
               rating:consumers_ratings[a].getAttribute('data-rating')
                });					
            }						
            //put star rating in hidenn input
            $('.put-stars').starrr();		
            $('.put-stars').on('starrr:change', function(e, value){
                 alert('new rating is ' + value)
               })
   
            }
            //end star rating
         
      }
   });   
};
//function add to carte
function add_to_cart(product_id)
{
   //send data to products controler to add to catr function   
   var host_name=document.location.protocol+'//'+document.location.host;
   $.ajax({
      url:host_name+'/product/'+product_id+'/add-to-cart',
      method:'GET',
      success:function(data){
         $('#cart_section').fadeIn(500).html(data);  
         $('#xs_cart_section').fadeIn(500).html(data);  
         //alert success
         Swal.fire({
            //position: 'top-end',
            icon: 'success',
            title: 'تم إضافة المنتج إلى السلة',
            showConfirmButton: false,
            timer: 1500
          })
      }
   });
}

//function add to wish-list
function add_to_wish_list(product_id)
{
   //send data to products controler to add to catr function   
   var host_name=document.location.protocol+'//'+document.location.host;
   $.ajax({
      url:host_name+'/consumer/wish-list/add/'+product_id,
      method:'GET',
      success:function(data){
         //alert(data);
         if(data)
         {
            $('#wish_list_button'+product_id).css('color','#F8694A');
            //alert success
         Swal.fire({
            //position: 'top-end',
            icon: 'success',
            title: 'تم إضافة المنتج إلى قائمة المفضلة',
            showConfirmButton: false,
            timer: 1500
          });
         }else
         {
            $('#wish_list_button'+product_id).css('color','#30323A');
            //alert success
         Swal.fire({
            //position: 'top-end',
            icon: 'success',
            title: 'تم حذف المنتج إلى قائمة المفضلة',
            showConfirmButton: false,
            timer: 1500
          });
         }
         
      }
   });
}

//function add to compar-list
function add_to_compar_list(product_id)
{
   //send data to products controler to add to catr function   
   var host_name=document.location.protocol+'//'+document.location.host;
   $.ajax({
      url:host_name+'/consumer/compar-list/add/'+product_id,
      method:'GET',
      success:function(data){
         //alert(data);
         if(data)
         {
            $('#compar_list_button'+product_id).css('color','#F8694A');
            //alert success
         Swal.fire({
            //position: 'top-end',
            icon: 'success',
            title: 'تم إضافة المنتج إلى قائمة المقارنة',
            showConfirmButton: false,
            timer: 1500
          });
         }else
         {
            $('#compar_list_button'+product_id).css('color','#30323A');
            //alert success
         Swal.fire({
            //position: 'top-end',
            icon: 'success',
            title: 'تم حذف المنتج إلى قائمة المقارنة',
            showConfirmButton: false,
            timer: 1500
          });
         }
         
      }
   });
}
//function get_interval_seconds()
function countDown(index,date)
{
var eventDate=new Date(date);
var now=new Date();
var currentTime=now.getTime();
var eventTime=eventDate.getTime();   
var remTime= eventTime-currentTime;
var s=Math.floor(remTime/1000);
var m=Math.floor(s/60);
var h=Math.floor(m/60);
var d=Math.floor(h/24);
h%=24;
m%=60;
s%=60;
d=(d<10)?"0"+d :d;
h=(h<10)?"0"+h :h;
m=(m<10)?"0"+m :m;
s=(s<10)?"0"+s :s;
if(d>0){
document.getElementById("days"+index).textContent=d+" ي";
document.getElementById("heurs"+index).textContent=h+" سا";
document.getElementById("munites"+index).textContent=m+" د";
// document.getElementById("seconds"+index).textContent=s;
}else
{
document.getElementById("heurs"+index).textContent=h+" سا";
document.getElementById("munites"+index).textContent=m+" د";
document.getElementById("seconds"+index).textContent=s+" ثا";
}
setTimeout(alert('1000'),1000);
}
   // fix nav bar whenn scrolling
   $(window).scroll(function(){
      $('nav').toggleClass('navbar-fixed-top',$(this).scrollTop() >50);
   });
   //show and hid search form
   $('.xs-search-btn').click(function(){
         $('#xs-search-form').toggle(); 
   });