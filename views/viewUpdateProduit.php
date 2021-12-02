<?php
include("header.php")

?>

<?php
foreach ($tab as $row){}
?>
<h1>Modifier le Produit</h1>
<form action="<?=_BASE?>/controllerProduit/newUpdateProduit" method="post">
<!-- <form action="/mvc1/controllerCours/" method="post"> -->
 
 <center>
 <table>
    <tr>
        <td>Type:</td>
        <td><input type="text" value="<?=$row['type']?>" name="type" size="50" maxlength="50"></td>
    </tr>
 <tr><td>Prix:</td><td><input type="text"  value=<?=$row['prix']?> name="prix"
size="50" maxlength="50"></td></tr>
 <tr><td>Description:</td><td><input type="text"  value="<?=$row['description']?>" name="description"
size="50" maxlength="80"></td></tr>
<tr><td>Image:</td><td><input type="text" value='<?=$row['image']?>' name="image"
size="50" maxlength="50"></td></tr>
 <tr><td>TVA:</td><td><input type="text"  value="<?=$row['TVA']?>" name="TVA"
size="50" maxlength="50"></td></tr>
 <tr><td>STOCK:</td><td><input type="text"  value="<?=$row['STOCK']?>" name="STOCK"
size="50" maxlength="80"></td></tr>
 <tr><td></td><td><input type="reset" name="effacer"
value="Effacer">
 <input type="hidden" name="id_produit" value="<?=$row['id_produit']?>"><input type="submit" name="Modifier" value="Modifier"></
td></tr>
 </table>
 </center>
</form> 