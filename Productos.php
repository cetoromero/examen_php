<?php 

examenfinal_start();


$_id = $_GET['id'];

if(isset($_EXAMENFINAL['carrito']))
{
    if(isset($_EXAMENFINAL['carrito'][md5($_id)])){
        
        $_EXAMENFINAL['carrito'][md5($_id)]['stock']+=1;
    }else{
       $_EXAMENFINAL['carrito'][md5($_id)]= getProductos($_id); 
   EXAMENFINAL
   
}else{
 $_EXAMENFINAL['carrito'][md5($_id)]= getProductos($_id);   
}



echo "<pre>";

print_r ($_EXAMENFINAL);

//print_r(getProductos($_id));

function getProductos($id)
{
    if($id == 1)
    {
        return[
                'id'     => 1,
                'nombre' => 'converse',
                'Foto' => 'converse.jpg',
                'descripcion' => 'Converse Chuck Taylor Black White High Top Canvas New in Box Sizes 3 5 to 12 ',
                'precio' => 175.00,
                'stock'  => 25
              ];
     }
    
      if($id==2)
      {
        return[
                'id'     => 2,
                'nombre' => 'Adidas',
                'Foto' => 'adidasball.jpg',
                'descripcion' => 'Very Rare Germany/Italy Teamgeist Ball',
                'precio' => 125.00,
                'stock'  => 50
              ];
      }
    
       if($id==3)
      {
        return[
                'id'     => 3,
                'nombre' => 'devil converse',
                'Foto' => 'devilconverse.jpg'
                'descripcion' => 'VVan Halen of Men B&w Winged Devil T-shirt Black',
                'precio' => 85.00,
                'stock'  => 10
              ];
      }    
    return FALSE;
    
    
}

 ?>