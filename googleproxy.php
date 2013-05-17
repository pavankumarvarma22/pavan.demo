<?php
/*
 * Created on Apr 15, 2013
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 $url="https://www.google.co.in";
 $page=file($url);
 echo '<img src="pavan.jpg">';
 foreach ( $page as $part ) {
       //echo $part;
       $part=ereg_replace('<img src=','<img src='.$url,$part);
       
       $part=ereg_replace('action="','action="'.$url,$part);
       echo $part;
}
?>
