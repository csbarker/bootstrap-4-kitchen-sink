<?php

include('includes/helpers.php');

$bootstrap_includes = glob('includes/bootstrap-sections/*/*.php');
$codes = '';
$output = '';

foreach ($bootstrap_includes as $file) {
    include($file);
}

$final_html = <<<PRE
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bootstrap 4 Kitchen Sink</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

    <!-- Highlight.js -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/default.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>

    <style type="text/css">
        CODE.html { margin-top:1rem; }
    </style>
</head>
<body>
    <nav class="navbar sticky-top navbar-dark bg-dark navbar-expand-lg mb-3">
        <div class="container">
            <a class="navbar-brand" href="#">Bootstrap 4 Kitchen Sink</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#"><strong>PROTIP:</strong> CTRL+F is your friend</a>
                </li>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="alert alert-info" role="alert">
                    Note: this is intended to be used as a quick overview/reference. Visit <a href="https://getbootstrap.com/docs/">https://getbootstrap.com/docs/</a> for full documentation!
                </div>

                $output

                <hr>
                
                <div class="alert alert-info" role="alert">
                Note: this is intended to be used as a quick overview/reference. Visit <a href="https://getbootstrap.com/docs/">https://getbootstrap.com/docs/</a> for full documentation!
                </div>
            </div>
        </div>
    </div>
</body>
</html>
PRE;

file_put_contents('index.html', $final_html);
header('Location: index.html');
exit;