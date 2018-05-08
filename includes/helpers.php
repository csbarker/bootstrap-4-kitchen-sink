<?php

function highlight($html) {
    return '<pre><code class="html">' . htmlspecialchars($html) . '</code></pre>';
}