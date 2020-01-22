Pantone-CMYK-RGB-Hex
====================

About
-----

Conversion table for Pantone PMS to CMYK, RGB, and Hex values.

The index.html file is completely self contained. Just drop it onto a server and it will work, all the CSS is either in the styles.css file, or inline. I know inline css is "A Bad Thing", but it was far simpler to add the bottom border colour inline for each colour.

The .json file is an array of all the Pantone colours, including the PMS code, CMYK values, RGB values, and Hexadecimal values.

The dynamic-create.php file does what it says on the tin; it iterates through the .json file and dynamically creates the html you will find in index.html.

Please note that the colours on your screen may display very differently to those you print. That is the whole reason for colour matching systems like Pantone in the first place. This is merely meant to be a rough guide to what colour you can expect.

Let me know if I've missed anything!

To-Do
-----

Set up a php script that only outputs results of a search. This would use "dynamic-create.php" with some input variables.

Acknowledgments
---------------

I used the Pantone to CMYK reference at [Excalibur Creations](http://www.excaliburcreations.com/pantone.html "Excalibur Creations Pantone to CMYK"), then calculated the RGB, and therefore Hex, values using the equations at [Rapid Tables](http://www.rapidtables.com/convert/color/cmyk-to-rgb.htm "Rapid Tables CMYK to RGB")
