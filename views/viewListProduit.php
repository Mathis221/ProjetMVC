<?php
include("header.php")

?>



<style>
    table{
    border-collapse: collapse
  }
  
  td{
    border: 1px solid black;
    padding: 10px;
  }
  </style>
<?php


?>
<center>
<table>
<tr>
            <td>type: </td>
            <td>Prix: </td>
            <td>Description: </td>
            <td>image: </td>
            <td>TVA: </td>
            <td>STOCK: </td>
            <td>modifier</td>
            <td>supprimer</td>
           
        </tr>
               
<?php
foreach ($tab as $row){
    
?>
    
    
           
        <tr>
            <td><?=$row['type']?></td>
            <td><?=$row['prix']?></td>
            <td><?=$row['description']?></td>
            <td><?=$row['image']?></td>
            <td><?=$row['TVA']?></td>
            <td><?=$row['STOCK']?></td>
            <td><a href="modifProduit/<?=$row['id_produit']?>">modifier</a></td>
            <td><a href="newDelete/<?=$row['']?>">supprimer</a></td>
            
        </tr>
        <?php
}
?>
</table>
</center>
