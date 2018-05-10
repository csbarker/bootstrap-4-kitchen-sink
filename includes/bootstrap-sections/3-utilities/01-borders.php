<?php

// Borders
$html = <<<PRE
<div id="borders-demo">
    <span class="border"></span>
    <span class="border-top"></span>
    <span class="border-right"></span>
    <span class="border-bottom"></span>
    <span class="border-left"></span>
</div>
PRE;

$output .= '<style type="text/css">#borders-demo SPAN { display: inline-block; width: 5rem; height: 5rem; margin: .25rem; background-color: #f5f5f5; }</style>';
$output .= '<h1>Borders</h1><hr>';
$output .= $html;
$output .= highlight($html);

// Borders > Subtractive
$html = <<<PRE
<div id="borders-demo2">
    <span class="border-0"></span>
    <span class="border-top-0"></span>
    <span class="border-right-0"></span>
    <span class="border-bottom-0"></span>
    <span class="border-left-0"></span>
</div>
PRE;

$output .= '<style type="text/css">#borders-demo2 SPAN { border:1px solid #dee2e6; display: inline-block; width: 5rem; height: 5rem; margin: .25rem; background-color: #f5f5f5; }</style>';
$output .= '<h1>Borders > Subtractive</h1><hr>';
$output .= $html;
$output .= highlight($html);

// Borders > Border color
$html = <<<PRE
<div id="borders-demo3">
    <span class="border border-primary"></span>
    <span class="border border-secondary"></span>
    <span class="border border-success"></span>
    <span class="border border-danger"></span>
    <span class="border border-warning"></span>
    <span class="border border-info"></span>
    <span class="border border-light"></span>
    <span class="border border-dark"></span>
    <span class="border border-white"></span>
</div>
PRE;

$output .= '<style type="text/css">#borders-demo3 SPAN { display: inline-block; width: 5rem; height: 5rem; margin: .25rem; background-color: #f5f5f5; }</style>';
$output .= '<h1>Borders > Border color</h1><hr>';
$output .= $html;
$output .= highlight($html);

// Borders > Border-radius
$html = <<<PRE
<img src="http://via.placeholder.com/75x75" alt="..." class="rounded">
<img src="http://via.placeholder.com/75x75" alt="..." class="rounded-top">
<img src="http://via.placeholder.com/75x75" alt="..." class="rounded-right">
<img src="http://via.placeholder.com/75x75" alt="..." class="rounded-bottom">
<img src="http://via.placeholder.com/75x75" alt="..." class="rounded-left">
<img src="http://via.placeholder.com/75x75" alt="..." class="rounded-circle">
<img src="http://via.placeholder.com/75x75" alt="..." class="rounded-0">
PRE;

$output .= '<style type="text/css">#borders-demo3 SPAN { display: inline-block; width: 5rem; height: 5rem; margin: .25rem; background-color: #f5f5f5; }</style>';
$output .= '<h1>Borders > Border-radius</h1><hr>';
$output .= $html;
$output .= highlight($html);