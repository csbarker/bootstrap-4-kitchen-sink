<?php

// Clearfix
$html = <<<PRE
<div class="bg-info clearfix">
  <button type="button" class="btn btn-secondary float-left">Example Button floated left</button>
  <button type="button" class="btn btn-secondary float-right">Example Button floated right</button>
</div>
PRE;

$output .= '<h1>Clearfix</h1><hr>';
$output .= $html;
$output .= highlight($html);