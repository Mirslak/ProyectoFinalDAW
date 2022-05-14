
<?php   
 include "../database/conexion.php";
 include "cabeceraSimp.php";
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Compra</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br />  
           <div class="container" style="width:800px;">  
               <div align="center">
                    <h2 class="text-success fw-bold fs-1 mt-5 mb-5">ZONA DE COMPRA</h2>
               </div>

                <ul class="nav nav-tabs">  
                     <li class="active"><a data-toggle="tab" href="#products">PRODUCTOS</a></li>  
                     <li><a data-toggle="tab" href="#cart">CARRITO <span class="badge"><?php if(isset($_SESSION["shopping_cart"])) { echo count($_SESSION["shopping_cart"]); } else { echo '0';}?></span></a></li>  
                </ul>  
                <div class="tab-content">  
                     <div id="products" class="tab-pane fade in active">  
                     <?php  
                     $query = "SELECT * FROM producto ORDER BY id_producto ASC";  
                     $result = mysqli_query($conexion, $query);  
                     while($row = mysqli_fetch_array($result))  
                     {  
                     ?>  
                     <div class="col-md-4" style="margin-top:12px;">  
                          <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px; height:350px;" align="center">  
                               <img src="../../Imagenes/productos/<?php echo $row["foto"]; ?>" class="img-responsive" style="width: 30px;"/><br />  
                               <h4 class="text-info"><?php echo $row["nombre"]; ?></h4>  
                               <h4 class="text-danger">$ <?php echo $row["precio"]; ?></h4>  
                               <input type="text" name="quantity" id="quantity<?php echo $row["id_producto"]; ?>" class="form-control" value="1" />  
                               <input type="hidden" name="hidden_name" id="name<?php echo $row["id_producto"]; ?>" value="<?php echo $row["nombre"]; ?>" />  
                               <input type="hidden" name="hidden_price" id="price<?php echo $row["id_producto"]; ?>" value="<?php echo $row["precio"]; ?>" />  
                               <input type="button" name="add_to_cart" id="<?php echo $row["id_producto"]; ?>" style="margin-top:5px;" class="btn btn-warning form-control add_to_cart" value="AÑADIR AL CARRO" />  
                          </div>  
                     </div>  
                     <?php  
                     }  
                     ?>  
                     </div>  <div id="cart" class="tab-pane fade">  
                          <div class="table-responsive" id="order_table">  
                               <table class="table table-bordered">  
                                    <tr>  
                                         <th width="40%">Nombre del producto</th>  
                                         <th width="10%">Cantidad</th>  
                                         <th width="20%">Precio</th>  
                                         <th width="15%">Total</th>  
                                         <th width="5%">Ación</th>  
                                    </tr>  
                                    <?php  
                                    if(!empty($_SESSION["shopping_cart"]))  
                                    {  
                                         $total = 0;  
                                         foreach($_SESSION["shopping_cart"] as $keys => $values)  
                                         {                                               
                                    ?>  
                                    <tr>  
                                         <td><?php echo $values["product_name"]; ?></td>  
                                         <td><input type="text" name="quantity[]" id="quantity<?php echo $values["id_producto"]; ?>" value="<?php echo $values["product_quantity"]; ?>" data-product_id="<?php echo $values["id_producto"]; ?>" class="form-control quantity" /></td>  
                                         <td align="right">$ <?php echo $values["precio"]; ?></td>  
                                         <td align="right">$ <?php echo number_format($values["product_quantity"] * $values["precio"], 2); ?></td>  
                                         <td><button name="delete" class="btn btn-danger btn-xs delete" id="<?php echo $values["product_id"]; ?>">Eliminar</button></td>  
                                    </tr>  
                                    <?php  
                                              $total = $total + ($values["product_quantity"] * $values["product_price"]);  
                                         }  
                                    ?>  
                                    <tr>  
                                         <td colspan="3" align="right">Total</td>  
                                         <td align="right">€ <?php echo number_format($total, 2); ?></td>  
                                         <td></td>  
                                    </tr>  
                                    <tr>  
                                         <td colspan="5" align="center">  
                                              <form method="post" action="cart.php">  
                                                   <input type="submit" name="place_order" class="btn btn-warning" value="Place Order" />  
                                              </form>  
                                         </td>  
                                    </tr>  
                                    <?php  
                                    }  
                                    ?>  
                               </table>  
                          </div>  
                     </div>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(data){  
      $('.add_to_cart').click(function(){  
           var product_id = $(this).attr("id");  
           var product_name = $('#name'+product_id).val();  
           var product_price = $('#price'+product_id).val();  
           var product_quantity = $('#quantity'+product_id).val();  
           var action = "add";  
           if(product_quantity > 0)  
           {  
                $.ajax({  
                     url:"action.php",  
                     method:"POST",  
                     dataType:"json",  
                     data:{  
                          product_id:product_id,   
                          product_name:product_name,   
                          product_price:product_price,   
                          product_quantity:product_quantity,   
                          action:action  
                     },  
                     success:function(data)  
                     {  
                          $('#order_table').html(data.order_table);  
                          $('.badge').text(data.cart_item);  
                          alert("PRODUCTO AÑADIDO AL CARRITO");  
                     }  
                });  
           }  
           else  
           {  
                alert("POR FAVOR INTRODUZCA UNA CANTIDAD")  
           }  
      });  
      $(document).on('click', '.delete', function(){  
           var product_id = $(this).attr("id");  
           var action = "remove";  
           if(confirm("¿DESEA ELIMINAR EL PRODUCTO?"))  
           {  
                $.ajax({  
                     url:"action.php",  
                     method:"POST",  
                     dataType:"json",  
                     data:{product_id:product_id, action:action},  
                     success:function(data){  
                          $('#order_table').html(data.order_table);  
                          $('.badge').text(data.cart_item);  
                     }  
                });  
           }  
           else  
           {  
                return false;  
           }  
      });  
      $(document).on('keyup', '.quantity', function(){  
           var product_id = $(this).data("product_id");  
           var quantity = $(this).val();  
           var action = "quantity_change";  
           if(quantity != '')  
           {  
                $.ajax({  
                     url :"action.php",  
                     method:"POST",  
                     dataType:"json",  
                     data:{product_id:product_id, quantity:quantity, action:action},  
                     success:function(data){  
                          $('#order_table').html(data.order_table);  
                     }  
                });  
           }  
      });  
 });  
 </script>


</body>
</html>