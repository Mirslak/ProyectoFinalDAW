
<?php  
 //cart.php  
 session_start();  
 $connect = mysqli_connect("192.168.1.64", "debianDB", "debianDB", "test");  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | Multi Tab Shopping Cart By Using PHP Ajax Jquery Bootstrap Mysql</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br />  
           <div class="container" style="width:800px;">  
                <?php  
                if(isset($_POST["place_order"]))  
                {  
                     $insert_order = "  
                     INSERT INTO carrito(id_usuario, fecha)  
                     VALUES('1', '".date('Y-m-d')."')  
                     ";  
                     $order_id = "";  
                     if(mysqli_query($connect, $insert_order))  
                     {  
                          $order_id = mysqli_insert_id($connect);  
                     }  
                     $_SESSION["id_compra"] = $order_id;  
                     $order_details = "";  
                     foreach($_SESSION["shopping_cart"] as $keys => $values)  
                     {  
                          $order_details .= "  
                          INSERT INTO detalles_compra(producto_id, nombre_producto, precio_producto, cantidad_producto)  
                          VALUES('".$order_id."', '".$values["nombre_producto"]."', '".$values["precio_producto"]."', '".$values["cantidad_producto"]."');  
                          ";  
                     }  
                     if(mysqli_multi_query($connect, $order_details))  
                     {  
                          unset($_SESSION["shopping_cart"]);  
                          echo '<script>alert("You have successfully place an order...Thank you")</script>';  
                          echo '<script>window.location.href="cart.php"</script>';  
                     }  
                }  
                if(isset($_SESSION["pedido_id"]))  
                {  
                     $customer_details = '';  
                     $order_details = '';  
                     $total = 0;  
                     $query = '  
                     SELECT * FROM pedido  
                     INNER JOIN detalles_compra  
                     ON detalles_compra.pedido_id = pedido.pedido_id  
                     INNER JOIN usuario  
                     ON usuario.usuario_id = pedido.usuario_id  
                     WHERE pedido.pedido_id = "'.$_SESSION["pedido_id"].'"  
                     ';  
                     $result = mysqli_query($connect, $query);  
                     while($row = mysqli_fetch_array($result))  
                     {  
                          $customer_details = '  
                          <label>'.$row["nombre"].'</label>  
                          <p>'.$row["direccion"].'</p>  
                          <p>Melilla, '.$row["codigoPostal"].'</p>  
                          <p>España</p>  
                          ';  
                          $order_details .= "  
                               <tr>  
                                    <td>".$row["nombre_producto"]."</td>  
                                    <td>".$row["cantidad_producto"]."</td>  
                                    <td>".$row["precio_producto"]."</td>  
                                    <td>".number_format($row["cantidad_producto"] * $row["precio_producto"], 2)."</td>  
                               </tr>  
                          ";  
                          $total = $total + ($row["cantidad_producto"] * $row["precio_producto"]);  
                     }  
                     echo '  
                     <h3 align="center">Número de pedido.'.$_SESSION["pedido_id"].'</h3>  
                     <div class="table-responsive">  
                          <table class="table">  
                               <tr>  
                                    <td><label>Información del Cliente</label></td>  
                               </tr>  
                               <tr>  
                                    <td>'.$customer_details.'</td>  
                               </tr>  
                               <tr>  
                                    <td><label>Detalles del pedido</label></td>  
                               </tr>  
                               <tr>  
                                    <td>  
                                         <table class="table table-bordered">  
                                              <tr>  
                                                   <th width="50%">Nombre del producto</th>  
                                                   <th width="15%">Cantidad</th>  
                                                   <th width="15%">Precio</th>  
                                                   <th width="20%">Total</th>  
                                              </tr>  
                                              '.$order_details.'  
                                              <tr>  
                                                   <td colspan="3" align="right"><label>Total</label></td>  
                                                   <td>'.number_format($total, 2).'</td>  
                                              </tr>  
                                         </table>  
                                    </td>  
                               </tr>  
                          </table>  
                     </div>  
                     ';  
                }  
                ?>  
           </div>  
      </body>  
 </html>