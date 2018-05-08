<?php

// Button groups
$html = <<<PRE
<div class="btn-group" role="group" aria-label="Basic example">
  <button type="button" class="btn btn-secondary">Left</button>
  <button type="button" class="btn btn-secondary">Middle</button>
  <button type="button" class="btn btn-secondary">Right</button>
</div>
PRE;

$output .= '<h1>Button groups</h1><hr>';
$output .= $html;
$output .= highlight($html);

// Button groups > Vertical
$html = <<<PRE
<div class="btn-group-vertical" role="group" aria-label="Basic example">
  <button type="button" class="btn btn-secondary">First</button>
  <button type="button" class="btn btn-secondary">Second</button>
  <button type="button" class="btn btn-secondary">Third</button>
</div>
PRE;

$output .= '<h1>Button groups > Vertical</h1><hr>';
$output .= $html;
$output .= highlight($html);

// Button groups > Button Toolbar
$html = <<<PRE
<div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
  <div class="btn-group mr-2" role="group" aria-label="First group">
    <button type="button" class="btn btn-secondary">1</button>
    <button type="button" class="btn btn-secondary">2</button>
    <button type="button" class="btn btn-secondary">3</button>
    <button type="button" class="btn btn-secondary">4</button>
  </div>
  <div class="btn-group mr-2" role="group" aria-label="Second group">
    <button type="button" class="btn btn-secondary">5</button>
    <button type="button" class="btn btn-secondary">6</button>
    <button type="button" class="btn btn-secondary">7</button>
  </div>
  <div class="btn-group" role="group" aria-label="Third group">
    <button type="button" class="btn btn-secondary">8</button>
  </div>
</div>
PRE;

$output .= '<h1>Button groups > Button Toolbar</h1><hr>';
$output .= $html;
$output .= highlight($html);

// Button groups > Sizing
$html = <<<PRE
<div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
  <button type="button" class="btn btn-secondary">Left</button>
  <button type="button" class="btn btn-secondary">Middle</button>
  <button type="button" class="btn btn-secondary">Right</button>
</div>

<br><br>

<div class="btn-group" role="group" aria-label="Basic example">
  <button type="button" class="btn btn-secondary">Left</button>
  <button type="button" class="btn btn-secondary">Middle</button>
  <button type="button" class="btn btn-secondary">Right</button>
</div>

<br><br>

<div class="btn-group btn-group-lg" role="group" aria-label="Basic example">
  <button type="button" class="btn btn-secondary">Left</button>
  <button type="button" class="btn btn-secondary">Middle</button>
  <button type="button" class="btn btn-secondary">Right</button>
</div>
PRE;

$output .= '<h1>Button groups > Sizing</h1><hr>';
$output .= $html;
$output .= highlight($html);