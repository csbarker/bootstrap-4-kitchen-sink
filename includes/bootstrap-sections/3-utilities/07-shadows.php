<?php

// Shadows
$html = <<<PRE
<div class="shadow-none p-3 mb-5 bg-light rounded">No shadow</div>
<div class="shadow-sm p-3 mb-5 bg-white rounded">Small shadow</div>
<div class="shadow p-3 mb-5 bg-white rounded">Regular shadow</div>
<div class="shadow-lg p-3 mb-5 bg-white rounded">Larger shadow</div>
PRE;

$output .= '<h1>Shadows</h1><hr>';
$output .= $html;
$output .= highlight($html);
