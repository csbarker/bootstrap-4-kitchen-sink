<?php

// Floats
$html = <<<PRE
<div class="clearfix">
    <div class="float-left">Float left on all viewport sizes</div><br>
    <div class="float-right">Float right on all viewport sizes</div><br>
    <div class="float-none">Don't float on all viewport sizes</div>
</div>

<div class="clearfix">
    <div class="float-sm-left">Float left on viewports sized SM (small) or wider</div><br>
    <div class="float-md-left">Float left on viewports sized MD (medium) or wider</div><br>
    <div class="float-lg-left">Float left on viewports sized LG (large) or wider</div><br>
    <div class="float-xl-left">Float left on viewports sized XL (extra-large) or wider</div><br>
</div>
PRE;

$output .= '<h1>Floats</h1><hr>';
$output .= $html;
$output .= highlight($html);
