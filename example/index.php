<?php
require ('../vendor/autoload.php');

use Rabus\Printar\Printar;
use Rabus\Printar\PrintarLime;
?>

<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Printar</title>
    <meta name="description" content="Sinvoice - Sin Free Invoicing">
    <meta name="author" content="RABUS">

    <!--[if lt IE 9]>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
        
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <img style="width:200px;" src="../files/graphics/bitmap-logo-large.png">
            <hr>
            <h1>Printar Example</h1>
            <p>Learn how to use Printar with some simple examples</p>
        </div>
        
        </div>
        <div class="row">
            
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <pre><code>$array = array(
    'element 1',
    'element 2',
    'element 3',
);</code></pre>
                <h2>Examples</h2>
                <p>Include Printar in the file you are printing out from</p>
                <pre><code>use Rabus\Printar\Printar;</code></pre>
                <p>Build your array</p>
                <pre><code>$array = array(
    'element 1',
    'element 2',
    'element 3',
);</code></pre>
                <p>Pass it to Printar</p>
                <pre><code>Printar::render($array);</code></pre>

                <h3>Results(Printar default)</h3>
                <?php 
                $array = array(
                    'element 1',
                    'element 2',
                    'element 3',
                );
                Printar::render($array);
                ?>
                <br>
                <p>Pass it to PrintarLime</p>
                <pre><code>use Rabus\Printar\Printar;

$array = array(
    'element 1',
    'element 2',
    'element 3',

PrintarLime::render($array);</code></pre>
                <h3>Results(PrintarLime)</h3>
                <?php 
                $array = array(
                    'element 1',
                    'element 2',
                    'element 3',
                );
                PrintarLime::render($array);
                ?>
            </div>
        </div>
    </div>
</body>
</html>