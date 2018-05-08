<?php

// Badges
$html = <<<PRE
<span class="badge badge-primary">Primary</span>
<span class="badge badge-secondary">Secondary</span>
<span class="badge badge-success">Success</span>
<span class="badge badge-danger">Danger</span>
<span class="badge badge-warning">Warning</span>
<span class="badge badge-info">Info</span>
<span class="badge badge-light">Light</span>
<span class="badge badge-dark">Dark</span>
PRE;

$output .= '<h1>Badges</h1><hr>';
$output .= $html;
$output .= highlight($html);

// Badges > Pills
$html = <<<PRE
<span class="badge badge-pill badge-primary">Primary</span>
<span class="badge badge-pill badge-secondary">Secondary</span>
<span class="badge badge-pill badge-success">Success</span>
<span class="badge badge-pill badge-danger">Danger</span>
<span class="badge badge-pill badge-warning">Warning</span>
<span class="badge badge-pill badge-info">Info</span>
<span class="badge badge-pill badge-light">Light</span>
<span class="badge badge-pill badge-dark">Dark</span>
PRE;

$output .= '<h1>Badges > Pills</h1><hr>';
$output .= $html;
$output .= highlight($html);

// Badges > Links
$html = <<<PRE
<a href="#" class="badge badge-primary">Primary</a>
<a href="#" class="badge badge-secondary">Secondary</a>
<a href="#" class="badge badge-success">Success</a>
<a href="#" class="badge badge-danger">Danger</a>
<a href="#" class="badge badge-warning">Warning</a>
<a href="#" class="badge badge-info">Info</a>
<a href="#" class="badge badge-light">Light</a>
<a href="#" class="badge badge-dark">Dark</a>
PRE;

$output .= '<h1>Badges > Links</h1><hr>';
$output .= $html;
$output .= highlight($html);

// Badges > In Elements
$html = <<<PRE
<h1>Example heading <span class="badge badge-secondary">New</span></h1>
<h2>Example heading <span class="badge badge-secondary">New</span></h2>
<h3>Example heading <span class="badge badge-secondary">New</span></h3>
<h4>Example heading <span class="badge badge-secondary">New</span></h4>
<h5>Example heading <span class="badge badge-secondary">New</span></h5>
<h6>Example heading <span class="badge badge-secondary">New</span></h6>
PRE;

$output .= '<h1>Badges > In Elements</h1><hr>';
$output .= $html;
$output .= highlight($html);

// Badges > In Buttons
$html = <<<PRE
<button type="button" class="btn btn-primary">
  Notifications <span class="badge badge-light">4</span>
</button>
PRE;

$output .= '<h1>Badges > In Buttons</h1><hr>';
$output .= $html;
$output .= highlight($html);