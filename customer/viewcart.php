

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<style>
  .width
  {
    width:100%;
  }
</style>
  </head>
<body>
     <div class="container-fluid width">
    <div class="row">
        </div class="col-lg-12 text-center border rounded bg-light my-5">
        <h1 class="text-right">MY CART!</h1>
        </div>
    <div class="col-lg-8">
        <table class="table">
            <thead class="text-center">
              <tr>
                <th scope="col">Serial no</th>
                <th scope="col">Item name</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Total</th>
                <th scope="col">Remove from cart</th>
              </tr>
            </thead>
            <tbody class="text-center">
              <tr>
                
                <?php
              include_once "../shared/cus-authguard.php";
              
              include "../shared/conn.php";

               
              $result=mysqli_query($conn,"select * from cart join products on cart.pid=products.pid  where userid=$userid");
              
              while($row=mysqli_fetch_assoc($result))
            {
                $cartid=$row['cartid'];
                $pid=$row['pid'];
                $name=$row['name'];
                $price=$row['price'];
                $detail=$row['detail'];
                $imgpath=$row['imgpath'];
                $quantity=$row['quantity'];
                
             echo"
                <td>  $pid </td>
                <td>$name</td>
                <td><input type='hidden' class='iprice' value='$price'>$price</td>
                <td ><input class='text-center iquantity' onchange='subtotal()' type='number' value='$quantity' min='1' max='10'> </td>
                <td class='itotal'> </td>
                <td><a href='remove.php?cartid=$cartid' class='btn btn-outline-danger'>REMOVE</a>
                </tr>";
            }
                ?>
               
              
             
            </tbody>
          </table>
     </div>
           <div class="col-lg-4">
            <div class="border bg-light rounded p-4"> 
              <h4 class="text-right"> Total:</h4>
              <h1 class="text-center" id="gtotal"> </h1>
              <a href='placeorder.php'>
            <button class='btn btn-success'>Place Order</button>
        </a>
            </div>
          
         
          </div>
            
           </div>
    
    <script>
      var gt1=0;
     var iprice=document.getElementsByClassName('iprice');
     var iquantity=document.getElementsByClassName('iquantity');
     var itotal=document.getElementsByClassName('itotal');
     var gtotal=document.getElementById('gtotal');

      function subtotal()
      {
        gt=0;
        for(i=0;i<iprice.length;i++)
        {
        itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);
        gt=gt+(iprice[i].value)*(iquantity[i].value);
      }
      gtotal.innerText=gt;
      }
      subtotal();
    </script>
    </body>
</html>