<?php

// Buttons
$html = <<<PRE
<button type="button" class="btn btn-primary">Primary</button>
<button type="button" class="btn btn-secondary">Secondary</button>
<button type="button" class="btn btn-success">Success</button>
<button type="button" class="btn btn-danger">Danger</button>
<button type="button" class="btn btn-warning">Warning</button>
<button type="button" class="btn btn-info">Info</button>
<button type="button" class="btn btn-light">Light</button>
<button type="button" class="btn btn-dark">Dark</button>

<button type="button" class="btn btn-link">Link</button>
PRE;

$output .= '<h1>Buttons</h1><hr>';
$output .= $html;
$output .= highlight($html);

// Buttons > Outline
$html = <<<PRE
<button type="button" class="btn btn-outline-primary">Primary</button>
<button type="button" class="btn btn-outline-secondary">Secondary</button>
<button type="button" class="btn btn-outline-success">Success</button>
<button type="button" class="btn btn-outline-danger">Danger</button>
<button type="button" class="btn btn-outline-warning">Warning</button>
<button type="button" class="btn btn-outline-info">Info</button>
<button type="button" class="btn btn-outline-light">Light</button>
<button type="button" class="btn btn-outline-dark">Dark</button>
PRE;

$output .= '<h1>Buttons > Outline</h1><hr>';
$output .= $html;
$output .= highlight($html);

// Buttons > Sizes
$html = <<<PRE
<button type="button" class="btn btn-primary btn-sm">Small button</button>
<button type="button" class="btn btn-secondary btn-sm">Small button</button>

<br><br>

<button type="button" class="btn btn-primary">Normal button</button>
<button type="button" class="btn btn-secondary">Normal button</button>

<br><br>

<button type="button" class="btn btn-primary btn-lg">Large button</button>
<button type="button" class="btn btn-secondary btn-lg">Large button</button>
PRE;

$output .= '<h1>Buttons > Sizes</h1><hr>';
$output .= $html;
$output .= highlight($html);