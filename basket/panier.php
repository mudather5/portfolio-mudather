<?php
function creationPanier(){
   if (!isset($_SESSION['panier'])){
      $_SESSION['panier']=array();
      $_SESSION['panier']['name'] = array();
      $_SESSION['panier']['price'] = array();
      $_SESSION['panier']['size'] = array();
			$_SESSION['panier']['summary'] = array();
      $_SESSION['panier']['verrou'] = false;
   }
   return true;
}
?>
