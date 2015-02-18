<?php
// Get array of Pantone data from json file
$pantone_json = file_get_contents('pantone_CMYK_RGB_Hex.json');
$pantone = json_decode($pantone_json,true);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pantone Colour Conversions &#124; www.adonald.co.uk</title>
    <meta name="author" content="Alex Donald">
     <style type="text/css">
         /*! PocketGrid 1.1.0
        * Copyright 2013 Arnaud Leray
        * MIT License
        */.block-group,.block,.block-group:after,.block:after,.block-group:before,.block:before{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}
        .block-group{*zoom:1}
        .block-group:before,.block-group:after{display:table;content:"";line-height:0}
        .block-group:after{clear:both}
        .block-group{list-style-type:none;padding:0;margin:0}
        .block-group>.block-group{clear:none;float:left;margin:0 !important}
        .block{float:left;width:100%}
        /* Keep PocketGrid at the top! */
        ul, li {
            margin: 0;
            padding: 0;
        }
        li {
            list-style: none;
            list-style-type: none;
        }
        .pantone-swatch {
            width: 200px;
            height: 150px;
            margin: 5px;
            padding: 10px;
        }
        /* make swatches full width for mobile screens */
        @media screen and (max-width: 450px) {
            .pantone-swatch {
                width: 100%;
                margin: 5px 0;
            }
        }
     </style>
</head>
<body>
<div class="blockgroup">
    <div class="block">
        <h2>Pantone Colour Conversions</h2>

        <p>Pantone to CMYK to RGB to Hex. I used the Pantone to CMYK reference at <a href="http://www.excaliburcreations.com/pantone.html" title="Excalibur Creations Pantone to CMYK">Excalibur Creations</a>, then calculated the RGB, and therefore Hex, values using the equations at <a href="http://www.rapidtables.com/convert/color/cmyk-to-rgb.htm" title="Rapid Tables CMYK to RGB">Rapid Tables</a>.</p>
        <p>There is a nice json file with my results on the github page for this project, along with a php script to cycle through the json data to create the html file you are viewing. The github page for this project is here: <a href="https://github.com/adonald/Pantone-CMYK-RGB-Hex" title="adonald GitHub Pantone to CMYK to RGB to Hex">Pantone to CMYK to RGB to Hex</a></p>
        <p>For the layout, I used the <a href="https://github.com/arnaudleray/pocketgrid" title="PocketGrid">PocketGrid</a> CSS boilerplate. It's incredibly lightweight and simple.</p>
        <p>Please note that the colours on your screen may display very differently to those you print. That is the whole reason for colour matching systems like Pantone in the first place. This is merely meant to be a rough guide to what colour you can expect.</p>
    </div>
</div>
<div class="block-group">
<?php
// iterate through data array and output each item formatted
foreach ($pantone as $key => $value) {
    // add "Pantone" to beginning of Code title if just a number
    if (ctype_digit(substr($value["Code"], 0, 3))) {
        $pantone_title = "Pantone " . $value["Code"];
    } else {
        $pantone_title = $value["Code"];
    }
    echo "
    <ul class=\"block pantone-swatch\" style=\"border-bottom: 50px solid " . $value["Hex"] . ";\">
        <li><strong>" . $pantone_title . "</strong></li>
        <li><strong>CMYK:</strong> " . $value["C"] . ", " . $value["M"] . ", " . $value["Y"] . ", " . $value["K"] . "</li>
        <li><strong>RGB:</strong> " . $value["R"] . ", " . $value["G"] . ", " . $value["B"] . "</li>
        <li><strong>Hex:</strong> " . $value["Hex"] . "</li>
    </ul>";
}
?>
</div>
</body>
</html>