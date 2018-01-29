<?
require 'scraperwiki.php';
require 'scraperwiki/simple_html_dom.php';
$Links	=	array('https://www.redfin.com/county/536/GA/Cobb-County/filter/include=sold-1wk',
             'https://www.redfin.com/county/559/GA/Fayette-County/filter/include=sold-1wk'
             );
for ($mainpage = 0; $mainpage < sizeof($Links); $mainpage++)
{
  echo $mainpage"; 
}

?>
