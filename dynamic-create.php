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
    <title>Pantone Converter &#124; www.alexdonald.co.uk</title>
    <meta name="description" content="Pantone to CMYK, RGB, and Hex converter">
    <meta name="keywords" content="Pantone, CMYK, RGB, Hex, Hexadecimal, colour, converter">
    <meta name="author" content="Alex Donald">
    <link rel="stylesheet" href="css/styles.css" />
</head>
<body>
<div class="header">
    <h1>Pantone Converter</h1>
    <p>See <a href="pantone_CMYK_RGB_Hex.json">Pantone Conversion JSON file</a> for raw data</p>
</div>

<div class="pantone-group">
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
    <ul class=\"pantone-swatch\" style=\"border-bottom: 50px solid " . $value["Hex"] . ";\">
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