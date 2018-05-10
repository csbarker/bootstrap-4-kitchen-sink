<?php

// Close icon
$html = <<<PRE
<div class="clearfix">
  <button type="button" class="close" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
PRE;

$output .= '<h1>Close icon</h1><hr>';
$output .= $html;
$output .= highlight($html);