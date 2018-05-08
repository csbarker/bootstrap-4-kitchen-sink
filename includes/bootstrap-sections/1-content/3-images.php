<?php

// Responsive images
$html = <<<PRE
<img src="http://via.placeholder.com/900x200" class="img-fluid" alt="Responsive image">
PRE;

$output .= '<h1>Responsive images</h1><hr>';
$output .= $html;
$output .= highlight($html);

// Image thumbnails
$html = <<<PRE
<img src="http://via.placeholder.com/200x200" alt="..." class="img-thumbnail">
PRE;

$output .= '<h1>Image thumbnails</h1><hr>';
$output .= $html;
$output .= highlight($html);

// Aligning images
$html = <<<PRE
<img src="http://via.placeholder.com/200x200" class="rounded float-left" alt="...">
<img src="http://via.placeholder.com/200x200" class="rounded float-right" alt="...">
PRE;

$output .= '<h1>Aligning images</h1><hr>';
$output .= '<div class="row"><div class="col">' . $html . '</div></div>';
$output .= highlight($html);

$html = <<<PRE
<img src="http://via.placeholder.com/200x200" class="rounded mx-auto d-block" alt="...">
PRE;

$output .= '<div class="row"><div class="col">' . $html . '</div></div>';
$output .= highlight($html);

$html = <<<PRE
<div class="text-center">
  <img src="http://via.placeholder.com/200x200" class="rounded" alt="...">
</div>
PRE;

$output .= '<div class="row"><div class="col">' . $html . '</div></div>';
$output .= highlight($html);