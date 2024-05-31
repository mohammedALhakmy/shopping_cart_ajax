/**
 * Created by Mohammed Alhakami on 13/01/22.
 */

    $(document).ready(function(){
    cat();
    cart_count();
    // SELECT *  FROM categories this Is Select All Categeries Of DataBase
    function cat(){
        $.ajax({
           url:"action.php",
            method:"POST",
            data:{category:1},
            success:function(data){
                $("#get_category").html(data);
            }
        });
    }
    brands();
    // "SELECt * FROM brands This Is Slect All Brands Of DataBase
    function brands(){
        $.ajax({
            url:"action.php",
            method:"POST",
            data:{brands:1},
            success:function(data){
                $('#get_Brands').html(data);
            }
        });
    }
    products();
    // SELECT * FROM products   LIMIT $start,$limit Select All Products Of DataBase And Count Pagaintion The Page
    function products(){
        $.ajax({
           url:"action.php",
            method:"POST",
            data:{getproducts:1},
            success:function(data){
                $('#get_products').html(data);
            }
        });
    }
    // SELECT distinct * FROM products where products_cat='$cat_id' Select All Products Of Child Category Category_id=Products_id
    $("body").delegate(".category","click",function(event){
        event.preventDefault();
           var cid=$(this).attr('cid');
        //alert(cid);
        $.ajax({
            url:"action.php",
            method:"POST",
            data:{get_categotr_selected:1,cat_id:cid},
            success:function(data){
            $('#get_products').html(data);
            }
        });
    });

    // SELECT distinct * FROM products where  products_brand='$cat_id' Select All Brands Of Child Brand Brand_id=Products_id
    $("body").delegate(".brand","click",function(event){
       event.preventDefault();
        var bid=$(this).attr("bid");
        //alert(bid);
        $.ajax({
           url:"action.php",
            method:"POST",
            data:{brand_cate_selected:1,brand_id_cate:bid},
            success:function(data){
                $('#get_products').html(data);
            }
        });
    });
//    $("#search_btn").click(function(){
//       var keyWord=$("#search").val();
//        if(keyWord != ""){
//            $.ajax({
//                url:"action.php",
//                method:"POST",
//                data:{search_any_word:1,keyword_ser:keyWord},
//                success:function(data){
//                    $('#get_products').html(data);
//                 }
//            })
//        }
//    });

    // SELECT * FROM products WHERE products_keywords LIKE '%$keyword_ser%' Select Of Search Of Products Keyup Of Database Some Column Of Table Products
    $('#search').keyup(function(){
        var keyWord=$("#search").val();
        if(keyWord != ""){
            $.ajax({
                url:"action.php",
                method:"POST",
                data:{search_any_word:1,keyword_ser:keyWord},
                success:function(data){
                    $('#get_products').html(data);
                }
            })
        }
    });
        // INSERT INTO `uset_info`(`frist_name`, `last_name`, `email`, `password`, `mobile`, `address1`, `address2`) Insert Into Values Of Table user_info
    // People Login Or SiginIn Of Page register.php
    $('#signuo_button').click(function(event){
       // alert(1);
        event.preventDefault();
        $.ajax({
            url:"register.php",
            method:"POST",
            data:$("form").serialize(),
            success:function(data){
                //alert(data);
                $('#signin_smg').html(data);
            }
         });
    });

    // SELECT * FROM uset_info WHERE email='$Email' and password='$Password' This is Select Login any People Because By My Website
    $('#login').click(function(event){
        event.preventDefault();
        var email =$('#email').val();
        var password =$('#password').val();
        $.ajax({
            url:"action.php",
            method:"POST",
            data:{userLogin:1,Email:email,Password:password},
            success:function(data){
               // alert(data);
                if(data  == "trvewrberbwebrwebewbewrue"){
                    window.location.href="profile.php";
                }
            }
        })
    });


    // SELECT * FROM cart WHERE p_id ='$pid_ID' AND user_id ='$user_ID' Select Any People by Products By One Buyinng Or Free Insert Into Cart
   $('body').delegate("#products_cart_customer","click",function(event){
      event.preventDefault();
       //alert('mohammed');
       var p_id=$(this).attr('pid');
       //alert(pid);
       $.ajax({
           url:"action.php",
           method:"POST",
           data:{pid_products:1,pid_ID:p_id},
           success:function(data){
          //  alert(data);
               $("#products_msg").html(data);
               cart_count();
           }
       });
   });

    // SELECT * FROM `cart`  where user_id ='$us_D' Select  Products Of Session Login Of Cart of icon cart Products Session Login
    cart_container();
    function cart_container(){
        $.ajax({
            url:"action.php",
            method:"POST",
            data:{get_cart_products:1},
            success:function(data){
                $("#cart_products").html(data);
            }
        });
    }

    // SELECT * FROM cart WHERE  user_id ='$user_I' Count Of Cart Number Becuase Icon Products Session Login
    function cart_count(){
        $.ajax({
            url:"action.php",
            method:"POST",
            data:{cart_count:1},
            success:function(data){
                $(".badge").html(data);
            }
        })
    }


    // SELECT * FROM `cart`  where user_id ='$us_D' CheckOut Prodcuts Som
     $("#cart_container").click(function(event){
        event.preventDefault();
           //alert("vasvasvas");
                 $.ajax({
                        url:"action.php",
                        method:"POST",
                        data:{get_cart_products:1},
                        success:function(data){
                            $("#cart_products").html(data);
                        }
                    });
    });
    check_out_cart();
    function check_out_cart(){
        $.ajax({
           url:"action.php",
            method:"POST",
            data:{check_out:1},
            success:function(data){
                $("#check_out").html(data);
            }
        });
    }

    $("body").delegate(".qty","keyup",function(){
        //alert(0);
        var pid= $(this).attr("pid");
        //alert(pid);
        var qty= $("#qty-"+pid).val();
        var price= $("#price-"+pid).val();
        var total = qty * price;
        //alert(total);

        $("#total-"+pid).val(total);
     });
    $("body").delegate(".remove","click",function(event){
        event.preventDefault();
        var remover_id=$(this).attr("remove_id");
        //alert(remover_id);
        $.ajax({
            url:"action.php",
            method:"POST",
            data:{remove_cart_shopping:1,remover_id_cart:remover_id},
            success:function(data){
                //alert(data);
                $("#cart_msg").html(data);
                //window.location.reload();
                check_out_cart();
            }
        })
    });
    $('body').delegate(".update","click",function(event){
        event.preventDefault();
        var update_id=$(this).attr("update_id");
        //alert(update_id);
        var qry_id=$("#qty-"+update_id).val();
        var price_id=$("#price-"+update_id).val();
        var total_id=$("#total-"+update_id).val();
        $.ajax({
           url:"action.php",
            method:"POST",
            data:{updateProduct:1,updateID:update_id,qty_ID:qry_id,price_ID:price_id,total_ID:total_id},
            success:function(data){
            //alert(data);
                $("#cart_msg").html(data);
                check_out_cart();
            }
        });
    });
    page();
    function page(){
         $.ajax({
           url      :       "action.php",
            method  :       "POST",
            data    :       {page_pagenation:1},
            success :       function(data){
                //alert(data);
                $("#pageno").html(data);
            }
        });
    }
    $("body").delegate("#page","click",function(){
       var pin=$(this).attr("page");
        alert(pin);
        $.ajax({
            url: "action.php",
            method:"POST",
            data:{getproducts:1,set_page_new:1,pageNumber_s:pin},
            success:function(data){
                //alert(data);
                $("#get_products").html(data);
            }
        })
    });

});

