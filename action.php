<?php
include 'dbConication.php';
session_start();
if(isset($_POST['userLogin'])){
    $Email=$_POST['Email'];
    $Password=md5($_POST['Password']);
//    $sele="SELECT * FROM uset_info WHERE email='$Email' and password='$Password'";
    $sele="SELECT * FROM uset_info WHERE email='$Email'";
    $query=mysqli_query($conn,$sele);
    $count=mysqli_num_rows($query);
    if($count == 1){
        $rows_colmun=mysqli_fetch_array($query);
        $_SESSION['uid']=$rows_colmun['user_id'];
        $_SESSION['uname']=$rows_colmun['frist_name'];
        $_SESSION['uemail']=$rows_colmun['email'];
        echo "trvewrberbwebrwebewbewrue";
    }

}

if(isset($_POST['cart_count']) AND isset($_SESSION['uid'])){
   @ $user_I=$_SESSION['uid'];
    $sql_INSERT="SELECT * FROM cart WHERE  user_id ='$user_I'";
     $ca_us=mysqli_query($conn,$sql_INSERT);
    echo mysqli_num_rows($ca_us);
}

if(isset($_POST['category'])){
    $category_query="SELECT *  FROM categories";
    $category_run=mysqli_query($conn,$category_query);
    echo '
                    <div class="nav nav-pills nav-stacked">
                    <li class="active"><a href="#"><h4> Category</h4></a></li>
    ';
    if(mysqli_num_rows($category_run) > 0 ){
        while($rows=mysqli_fetch_array($category_run)){
           $cid= $rows['cat_id'];
            $cat_title=$rows['cat_title'];

            echo "<li class='mt-2'><a href='#' class='category' cid='$cid'>".$cat_title."</a></li>";
         }
    }
    echo "</div>";
}

if(isset($_POST['brands'])){
    $brands_query="SELECt * FROM brands";
    echo '
     <div class="nav nav-pills nav-stacked">
                    <li class="active"><a href="#"><h4> Brands</h4></a></li>
    ';
    $brands_Run=mysqli_query($conn,$brands_query);
    if(mysqli_num_rows($brands_Run) > 0){
        while($brand=mysqli_fetch_assoc($brands_Run)){
            $brands=$brand['brands_id'];
            $brands_name=$brand['brands_title'];
            echo "<li class='mt-2'><a href='#' class='brand' bid='$brands'>".$brands_name."</a></li>";
        }
    }
    echo '</div>';
}
if(isset($_POST["page_pagenation"])){
    $page_pagenation="SELECT * FROM products";
    $page_pagen_run=mysqli_query($conn,$page_pagenation);
    $page_pagen_row=mysqli_num_rows($page_pagen_run);
    //echo $page_pagen_row;
      $pageno=ceil($page_pagen_row/4);
   // echo $pageno;
    for($i=1;$i<=$pageno;$i++){
        echo "<li><a   page='$i' id='page'>".$i."</a></li>";
    }
}

if(isset($_POST['getproducts'])){
    $limit=4;
     if(isset($_POST['set_page_new'])){
        $pageNumber=$_POST['pageNumber_s'];
        $start=($pageNumber * $limit) - $limit;
    }
    else{
        $start=0;
    }
    $products_query="SELECT * FROM products   LIMIT $start,$limit";
    $products_run=mysqli_query($conn,$products_query);
    if(mysqli_num_rows($products_run) > 0){
        while($products=mysqli_fetch_assoc($products_run)){
            $products_id=$products['products_id'];
            $products_cat=$products['products_cat'];
            $products_brand=$products['products_brand'];
            $products_title=$products['products_title'];
            $products_price=$products['products_price'];
            $products_description=$products['products_description'];
            $products_images=$products['products_images'];
            $products_keywords=$products['products_keywords'];
             echo "

                <div class='col-md-4 col-sm-6'>
                    <div class='panel panel-info'>
                        <div class='panel-heading'>$products_title</div>
                        <div class='panel-body'>
                                    <img src='img//$products_images' width='180px' height='190px' alt=''/>
                        </div>
                        <div class='panel-heading'>$.$products_price.00
                                <button pid='$products_id' id='products_cart_customer' style='float: right'   class='btn btn-danger btn-xs'>AddToCart</button>
                        </div>
                    </div>
                </div>
            ";
        }
    }
}

//if(isset($_POST['get_categotr_selected'])){
//    $cat_id_cate=$_POST['cat_id'];
//    $cat_id_qurey="SELECT * FROM products where products_cat='$cat_id_cate'";
//    $cat_id_query_run=mysqli_query($conn,$cat_id_qurey);
//    if(mysqli_num_rows($cat_id_query_run) > 0){
//        while($cat_id_query_run_cate=mysqli_fetch_assoc($cat_id_query_run)){
//            $products_id_cat=$cat_id_query_run_cate['products_id'];
//            $products_cat_cat=$cat_id_query_run_cate['products_cat'];
//            $products_brand_cat=$cat_id_query_run_cate['products_brand'];
//            $products_title_cat=$cat_id_query_run_cate['products_title'];
//            $products_price_cat=$cat_id_query_run_cate['products_price'];
//            $products_description_cat=$cat_id_query_run_cate['products_description'];
//            $products_images_cat=$cat_id_query_run_cate['products_images'];
//            $products_keywords_cat=$cat_id_query_run_cate['products_keywords'];
//             echo "
//                 <div class='col-md-4 col-sm-6'>
//                    <div class='panel panel-info'>
//                        <div class='panel-heading'>$products_title_cat</div>
//                        <div class='panel-body'>
//                                    <img src='img//$products_images_cat' width='180px' height='190px' alt=''/>
//                        </div>
//                        <div class='panel-heading'>$.$products_price_cat.00
//                                <button id='$products_id_cat' style='float: right'   class='btn btn-danger btn-xs'>AddToCart</button>
//                        </div>
//                    </div>
//                </div>
//            ";
//        }
//    }
//}

//if(isset($_POST['brand_cate_selected'])){
//    $brand_id_cate=$_POST['brand_id_cate'];
//    $brand_id_cate_selected="SELECT * FROM products where  products_brand='$brand_id_cate'";
//    $brand_id_cate_selected_query=mysqli_query($conn,$brand_id_cate_selected);
//    if(mysqli_num_rows($brand_id_cate_selected_query) > 0){
//        while($brand_id__rows=mysqli_fetch_assoc($brand_id_cate_selected_query)){
//             $products_id_brand=$brand_id__rows['products_id'];
//            $products_cat_brand=$brand_id__rows['products_cat'];
//            $products_brand_brand=$brand_id__rows['products_brand'];
//            $products_title_brand=$brand_id__rows['products_title'];
//            $products_price_brand=$brand_id__rows['products_price'];
//            $products_description_brand=$brand_id__rows['products_description'];
//            $products_images_brand=$brand_id__rows['products_images'];
//            $products_keywords_brand=$brand_id__rows['products_keywords'];
//            echo "
//                 <div class='col-md-4 col-sm-6'>
//                    <div class='panel panel-info'>
//                        <div class='panel-heading'>$products_title_brand</div>
//                        <div class='panel-body'>
//                                    <img src='img//$products_images_brand' width='180px' height='190px' alt=''/>
//                        </div>
//                        <div class='panel-heading'>$.$products_price_brand.00
//                                <button id='$products_id_brand' style='float: right'   class='btn btn-danger btn-xs'>AddToCart</button>
//                        </div>
//                    </div>
//                </div>
//            ";
//         }
//       }
//}
if(isset($_POST['get_categotr_selected']) || isset($_POST['brand_cate_selected']) ||  isset($_POST['search_any_word'])){
    if(isset($_POST['get_categotr_selected'])){
        $cat_id=$_POST['cat_id'];
        $all_id_qurey="SELECT distinct * FROM products where products_cat='$cat_id'";
    }
     elseif(isset($_POST['brand_cate_selected'])){
        $cat_id=$_POST['brand_id_cate'];
        $all_id_qurey="SELECT distinct * FROM products where  products_brand='$cat_id'";
    }
    elseif(isset($_POST['search_any_word'])){
        $keyword_ser=$_POST['keyword_ser'];
        $all_id_qurey="SELECT * FROM products WHERE products_keywords LIKE '%$keyword_ser%'";
    }

    $mysqli_query_seleeced_add=mysqli_query($conn,$all_id_qurey);
    if(mysqli_num_rows($mysqli_query_seleeced_add) > 0 ){
        while($mysqli_query_sel_row=mysqli_fetch_assoc($mysqli_query_seleeced_add)){
            $products_id_all=$mysqli_query_sel_row['products_id'];
            $products_cat_all=$mysqli_query_sel_row['products_cat'];
            $products_brand_all=$mysqli_query_sel_row['products_brand'];
            $products_title_all=$mysqli_query_sel_row['products_title'];
            $products_price_all=$mysqli_query_sel_row['products_price'];
            $products_description_all=$mysqli_query_sel_row['products_description'];
            $products_images_all=$mysqli_query_sel_row['products_images'];
            $products_keywords_all=$mysqli_query_sel_row['products_keywords'];
            echo "
                 <div class='col-md-4 col-sm-6'>
                    <div class='panel panel-info'>
                        <div class='panel-heading'>$products_title_all</div>
                        <div class='panel-body'>
                                    <img src='img//$products_images_all' width='180px' height='190px' alt=''/>
                        </div>
                        <div class='panel-heading'>$.$products_price_all.00
                                <button pid='$products_id_all' id='products_cart_customer' style='float: right'    class='btn btn-danger btn-xs'>AddToCart</button>
                        </div>
                    </div>
                </div>
            ";
        }
    }
    else{
        echo " <div class='alert alert-success' style='cursor: pointer'>
                    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b><strong>Not Found $keyword_ser The Shopping  b3 Click The Message  Reload
                    The Window</strong></b>
                  </div> ";
        ?>
        <script>
         $(document).click(function(){
             window.location.reload();
         });
        </script>
      <?php   die();    }
}

//if(isset($_POST['search_any_word'])){
//    $keyword_ser=$_POST['keyword_ser'];
//    $keyword_serach_query="SELECT * FROM products WHERE products_keywords LIKE '%$keyword_ser%'";
//    $keyword_serach_query_run=mysqli_query($conn,$keyword_serach_query);
//    if(mysqli_num_rows($keyword_serach_query_run) > 0){
//        while($key_rows=mysqli_fetch_assoc($keyword_serach_query_run)){
//            $products_id_key_words=$key_rows['products_id'];
//            $products_cat_key_words=$key_rows['products_cat'];
//            $products_brand_key_words=$key_rows['products_brand'];
//            $products_title_key_words=$key_rows['products_title'];
//            $products_price_key_words=$key_rows['products_price'];
//            $products_description_key_words=$key_rows['products_description'];
//            $products_images_key_words=$key_rows['products_images'];
//            $products_keywords_key_words=$key_rows['products_keywords'];
//            echo "
//                 <div class='col-md-4 col-sm-6'>
//                    <div class='panel panel-info'>
//                        <div class='panel-heading'>$products_title_key_words</div>
//                        <div class='panel-body'>
//                                    <img src='img//$products_images_key_words' width='180px' height='190px' alt=''/>
//                        </div>
//                        <div class='panel-heading'>$.$products_price_key_words.00
//                                <button id='$products_id_key_words' style='float: right'   class='btn btn-danger btn-xs'>AddToCart</button>
//                        </div>
//                    </div>
//                </div>
//            ";
//        }
//    }
//    else{
//        echo "Not Found";
//    }
// }

if(isset($_POST['pid_products'])){
    if(isset($_SESSION['uid'])){
        $pid_ID=$_POST['pid_ID'];
        $user_ID=$_SESSION['uid'];
        $sql_INSERT="SELECT * FROM cart WHERE p_id ='$pid_ID' AND user_id ='$user_ID'";
        $sql_INSERT_run=mysqli_query($conn,$sql_INSERT);
        $count_query=mysqli_num_rows($sql_INSERT_run);
        if( $count_query > 0){
            echo "
    <div class='alert alert-danger'>
        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b><strong>Products Is Already  Added INTO The Cart  Continue Shopping ..!</strong></b>
    </div>
    ";
            exit();

        }
        else{
            $sql_INSERT2="SELECT *  FROM products WHERE products_id ='$pid_ID'";
            $run_query=mysqli_query($conn,$sql_INSERT2);
            $rows_runs=mysqli_fetch_array($run_query);
            $products_id_id         =$rows_runs['products_id'];
            $products_title_title   =$rows_runs['products_title'];
            $products_price_price   =$rows_runs['products_price'];
            $products_images_images = $rows_runs['products_images'];
            $sql_INSERT_Cart="INSERT INTO cart
         (p_id, ip_add, user_id, prodouts_title, prodouts_image, qty, price, total_amount)
                           VALUES
         ('$pid_ID','0','$user_ID','$products_title_title','$products_images_images','1','$products_price_price','$products_price_price')";

            if(mysqli_query($conn,$sql_INSERT_Cart)){
                echo "
                    <div class='alert alert-success'>
                  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b><strong>Products $products_title_title Added SuccessFully...!</strong></b>
             </div>
    ";
                exit();

            }

        }

    }
    else{
        echo "
                    <div class='alert alert-success'>
                  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b><strong>Error</strong></b>
             </div>
    ";
        exit();

    }


}
if(isset($_POST["get_cart_products"]) || isset($_POST['check_out'])){
    $us_D=$_SESSION['uid'];
    $sql_cart="SELECT * FROM `cart`  where user_id ='$us_D'";
    $sql_ca_qu=mysqli_query($conn,$sql_cart);
    $count_cart=mysqli_num_rows($sql_ca_qu);
    if($count_cart > 0 ){
        $no=1;
        $total_amt=0;
        while($count_row = mysqli_fetch_assoc($sql_ca_qu)){
            $id_p_id_cart           =$count_row['id'];
            $p_id_cart              =$count_row['p_id'];
            $p_cart_prodouts_title  =$count_row['prodouts_title'];
            $p_cart_prodouts_image  =$count_row['prodouts_image'];
            $p_cart_price           =$count_row['price'];
             $p_cart_qty            =$count_row['qty'];
            $p_cart_total_amount    =$count_row['total_amount'];
            $price_array_cart=array($p_cart_total_amount);
            $total_sum=array_sum($price_array_cart);
            $total_amt=$total_amt + $total_sum;
            //setCookie("ta",$total_amt,strtotime("+1 day"),"/","","",TRUE);
            if(isset($_POST["get_cart_products"]) ){
                echo "
              <div class='row'>
                                <div class='col-md-3'>$no</div>
                                <div class='col-md-3'><img src='img//$p_cart_prodouts_image' width='60px' height='50px'></div>
                                <div class='col-md-3'>$p_cart_prodouts_title</div>
                                <div class='col-md-3'>$.$p_cart_price.00</div>
                            </div>
                           ";
                $no=$no+1;
            }
            else{
                echo "
                   <div class='row' style='margin-bottom: 10px;margin-top: 30px'>
                         <div class='col-md-2'>
                             <div class='btn-group'>
                                <a href='#' class='btn btn-danger remove' remove_id='$p_id_cart' style='margin-right: 5px'><span class='glyphicon glyphicon-trash'></span></a>
                <a href='#' class='btn btn-primary update'  update_id='$p_id_cart'><span class='glyphicon glyphicon-ok-sign'></span></a>
                              </div>
                        </div>
                         <div class='col-md-2'><img src='img/$p_cart_prodouts_image' width='90px' height='90px' alt=''/></div>
                         <div class='col-md-2'>$p_cart_prodouts_title</div>
                         <div class='col-md-2'><input type='text' class='form-control qty' id='qty-$p_id_cart' pid='$p_id_cart' value=' $p_cart_qty' min='1' /></div>
                         <div class='col-md-2'><input type='text' class='form-control price' id='price-$p_id_cart' pid='$p_id_cart' value='$p_cart_price '  readonly disabled /> </div>
                         <div class='col-md-2''><input type='text' class='form-control total' id='total-$p_id_cart' pid='$p_id_cart'  value=' $p_cart_total_amount ' readonly disabled/></div>
                     </div> <hr>
                 ";
            }
         }
        if( isset($_POST['check_out'])){
            echo "
            <div class='row'>
                <div class='col-md-8'></div>
                <div class='col-md-4'>
                <b>Total $ ".$total_amt."</b>
                </div>
            </div>
            ";
        }
    }
 }
if(isset($_POST['remove_cart_shopping'])){
    $remover_id_cart  =$_POST['remover_id_cart'];
    $remover_uid_cart  =$_SESSION['uid'];
    $remover_id_ca_del="DELETE FROM cart where user_id ='$remover_uid_cart' AND p_id='$remover_id_cart'";
    $remover_id_ca_query=mysqli_query($conn,$remover_id_ca_del);
    if($remover_id_ca_query){
        echo " <div class='alert alert-info'>
                    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b><strong>Deleted The Products is SuccessFully ..!</strong></b>
             </div>";
        exit();
    }

}
if(isset($_POST['updateProduct'])){
    $updateID=$_POST['updateID'];
    $upda_user=$_SESSION['uid'];
    $qty_ID=$_POST['qty_ID'];
    $price_ID=$_POST['price_ID'];
    $total_ID=$_POST['total_ID'];
    $sqlUpdate="UPDATE cart SET qty='$qty_ID' ,price='$price_ID' ,total_amount='$total_ID' WHERE user_id='$upda_user' AND p_id='$updateID'";
    $run_update=mysqli_query($conn,$sqlUpdate);
    if($run_update){
        echo " <div class='alert alert-info'>
                    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b><strong>Products is Update..!</strong></b>
             </div>";
        exit();
     }
 }
