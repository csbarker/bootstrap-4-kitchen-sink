<?php

// Display property
$html = <<<PRE
<div class="d-inline p-2 bg-primary text-white">d-inline</div>
<div class="d-inline p-2 bg-dark text-white">d-inline</div>
PRE;

$output .= '<h1>Display property</h1><hr>';
$output .= $html;
$output .= highlight($html);

$html = <<<PRE
<span class="d-block p-2 bg-primary text-white">d-block</span>
<span class="d-block p-2 bg-dark text-white">d-block</span>
PRE;
$output .= $html;
$output .= highlight($html);