<?php

// Text alignment
$html = <<<PRE
<p class="text-justify">Ambitioni dedisse scripsisse iudicaretur. Cras mattis iudicium purus sit amet fermentum. Donec sed odio operae, eu vulputate felis rhoncus. Praeterea iter est quasdam res quas ex communi. At nos hinc posthac, sitientis piros Afros. Petierunt uti sibi concilium totius Galliae in diem certam indicere. Cras mattis iudicium purus sit amet fermentum.</p>
PRE;

$output .= '<h1>Text alignment</h1><hr>';
$output .= $html;
$output .= highlight($html);

$html = <<<PRE
<p class="text-left">Left aligned text on all viewport sizes.</p>
<p class="text-center">Center aligned text on all viewport sizes.</p>
<p class="text-right">Right aligned text on all viewport sizes.</p>

<p class="text-sm-left">Left aligned text on viewports sized SM (small) or wider.</p>
<p class="text-md-left">Left aligned text on viewports sized MD (medium) or wider.</p>
<p class="text-lg-left">Left aligned text on viewports sized LG (large) or wider.</p>
<p class="text-xl-left">Left aligned text on viewports sized XL (extra-large) or wider.</p>
PRE;
$output .= $html;
$output .= highlight($html);

// Text wrapping and overflow
$html = <<<PRE
<!-- Block level -->
<div class="row">
  <div class="col-2 text-truncate">
    Praeterea iter est quasdam res quas ex communi.
  </div>
</div>

<!-- Inline level -->
<span class="d-inline-block text-truncate" style="max-width: 150px;">
  Praeterea iter est quasdam res quas ex communi.
</span>
PRE;

$output .= '<h1>Text wrapping and overflow</h1><hr>';
$output .= $html;
$output .= highlight($html);

// Text transform
$html = <<<PRE
<p class="text-lowercase">Lowercased text.</p>
<p class="text-uppercase">Uppercased text.</p>
<p class="text-capitalize">CapiTaliZed text.</p>
PRE;

$output .= '<h1>Text transform</h1><hr>';
$output .= $html;
$output .= highlight($html);

// Font weight and italics
$html = <<<PRE
<p class="font-weight-bold">Bold text.</p>
<p class="font-weight-normal">Normal weight text.</p>
<p class="font-weight-light">Light weight text.</p>
<p class="font-italic">Italic text.</p>
PRE;

$output .= '<h1>Font weight and italics</h1><hr>';
$output .= $html;
$output .= highlight($html);