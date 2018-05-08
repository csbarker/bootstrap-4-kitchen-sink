<?php

// Headings
$html = <<<PRE
<h1>h1. Bootstrap heading</h1>
<h2>h2. Bootstrap heading</h2>
<h3>h3. Bootstrap heading</h3>
<h4>h4. Bootstrap heading</h4>
<h5>h5. Bootstrap heading</h5>
<h6>h6. Bootstrap heading</h6>
PRE;

$output .= '<h1>Headings</h1><hr>';
$output .= $html;
$output .= highlight($html);

// Display Headings
$html = <<<PRE
<h1 class="display-1">Display 1</h1>
<h1 class="display-2">Display 2</h1>
<h1 class="display-3">Display 3</h1>
<h1 class="display-4">Display 4</h1>
PRE;

$output .= '<h1>Display headings</h1><hr>';
$output .= $html;
$output .= highlight($html);

// Lead
$html = <<<PRE
<p class="lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Enim alias beatae sed dignissimos expedita inventore totam eius ut pariatur, quidem maxime, aut asperiores repellat. Labore laborum eius quibusdam placeat ratione.</p>
<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Enim alias beatae sed dignissimos expedita inventore totam eius ut pariatur, quidem maxime, aut asperiores repellat. Labore laborum eius quibusdam placeat ratione.</p>
PRE;

$output .= '<h1>Lead</h1><hr>';
$output .= $html;
$output .= highlight($html);

// Inline text elements
$html = <<<PRE
<p>You can use the mark tag to <mark>highlight</mark> text.</p>
<p><del>This line of text is meant to be treated as deleted text.</del></p>
<p><s>This line of text is meant to be treated as no longer accurate.</s></p>
<p><ins>This line of text is meant to be treated as an addition to the document.</ins></p>
<p><u>This line of text will render as underlined</u></p>
<p><small>This line of text is meant to be treated as fine print.</small></p>
<p><strong>This line rendered as bold text.</strong></p>
<p><em>This line rendered as italicized text.</em></p>
PRE;

$output .= '<h1>Inline text elements</h1><hr>';
$output .= $html;
$output .= highlight($html);

// Abbreviations
$html = <<<PRE
<p><abbr title="attribute">attr</abbr></p>
<p><abbr title="HyperText Markup Language" class="initialism">HTML</abbr></p>
PRE;

$output .= '<h1>Abbreviations</h1><hr>';
$output .= $html;
$output .= highlight($html);

// Blockquotes
$html = <<<PRE
<blockquote class="blockquote">
  <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
</blockquote>

<blockquote class="blockquote">
  <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
  <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
</blockquote>

<blockquote class="blockquote text-center">
  <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
  <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
</blockquote>

<blockquote class="blockquote text-right">
  <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
  <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
</blockquote>
PRE;

$output .= '<h1>Blockquotes</h1><hr>';
$output .= $html;
$output .= highlight($html);

// Lists
$html = <<<PRE
<ul class="list-unstyled">
  <li>Lorem ipsum dolor sit amet</li>
  <li>Consectetur adipiscing elit</li>
  <li>Integer molestie lorem at massa</li>
  <li>Facilisis in pretium nisl aliquet</li>
  <li>Nulla volutpat aliquam velit
    <ul>
      <li>Phasellus iaculis neque</li>
      <li>Purus sodales ultricies</li>
      <li>Vestibulum laoreet porttitor sem</li>
      <li>Ac tristique libero volutpat at</li>
    </ul>
  </li>
  <li>Faucibus porta lacus fringilla vel</li>
  <li>Aenean sit amet erat nunc</li>
  <li>Eget porttitor lorem</li>
</ul>

<ul class="list-inline">
  <li class="list-inline-item">Lorem ipsum</li>
  <li class="list-inline-item">Phasellus iaculis</li>
  <li class="list-inline-item">Nulla volutpat</li>
</ul>
PRE;

$output .= '<h1>Lists</h1><hr>';
$output .= $html;
$output .= highlight($html);