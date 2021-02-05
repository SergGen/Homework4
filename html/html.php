<?php
foreach ($images as $image) {
    $imgLink = "/img/{$image}";
    ?>

    <a href="<?=$imgLink?>" target='_blank'>
        <img src="<?=$imgLink?>" alt="pict" width='240'>
    </a>

<? } ?>