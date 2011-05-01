<?php

    foreach($article as $row) {

?>

<small class="publication-date"><?php echo date("jS F Y", strtotime($row->date)) ?></small>
<h1><?php echo $row->title ?></h1>
<p class="summary"><?php echo $row->summary ?></p>
<div class="cont-read"><a href="/<?php echo $row->title_url?>/">Continue lendo "<?php echo $row->title ?>"</a></div>

<?php } ?>