<?php

// Inline code
$html = <<<PRE
For example, <code>&lt;section&gt;</code> should be wrapped as inline.
PRE;

$output .= '<h1>Inline code</h1><hr>';
$output .= $html;
$output .= highlight($html);

// Code blocks
$html = <<<PRE
<pre><code>&lt;p&gt;Sample text here...&lt;/p&gt;
&lt;p&gt;And another line of sample text here...&lt;/p&gt;
</code></pre>
PRE;

$output .= '<h1>Code blocks</h1><hr>';
$output .= $html;
$output .= highlight($html);

// Variables
$html = <<<PRE
<var>y</var> = <var>m</var><var>x</var> + <var>b</var>
PRE;

$output .= '<h1>Variables</h1><hr>';
$output .= $html;
$output .= highlight($html);

// User input
$html = <<<PRE
To switch directories, type <kbd>cd</kbd> followed by the name of the directory.<br>
To edit settings, press <kbd><kbd>ctrl</kbd> + <kbd>,</kbd></kbd>
PRE;

$output .= '<h1>User input</h1><hr>';
$output .= $html;
$output .= highlight($html);

// Sample output
$html = <<<PRE
<samp>This text is meant to be treated as sample output from a computer program.</samp>
PRE;

$output .= '<h1>Sample output</h1><hr>';
$output .= $html;
$output .= highlight($html);

