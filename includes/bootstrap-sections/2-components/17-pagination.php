<?php

// Pagination
$html = <<<PRE
<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav>
PRE;

$output .= '<h1>Pagination</h1><hr>';
$output .= $html;
$output .= highlight($html);

// Pagination > Disabled and active states
$html = <<<PRE
<nav aria-label="...">
  <ul class="pagination">
    <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item active"><a class="page-link" href="#">2 <span class="sr-only">(current)</span></a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav>
PRE;

$output .= '<h1>Pagination > Disabled and active states</h1><hr>';
$output .= $html;
$output .= highlight($html);