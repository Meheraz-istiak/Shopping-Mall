<?php 
function cardArray()
{
	$cartcollection =\cart::getContent();
	return $cartcollection->toArray();
}


 ?>