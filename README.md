Pantone-CMYK-RGB-Hex
====================

Conversion table for Pantone PMS to CMYK, RGB, and Hex values

The .json file is an array of all the Pantone colours, including the PMS code, CMYK values, RGB values, and Hexadecimal values.

The pantone.html file is completely self contained. Just drop it onto a server and it will work, all the CSS is either in the head, or inline. It was simpler to add the bottom border colour inline for each colour.

The dynamic-create.php file does what it says on the tin; it iterates through the .json file and dynamically creates the html you will find in pantone.html

Let me know if I've missed anything

Acknowledgments
---------------

I used the excellent [PocketGrid](https://github.com/arnaudleray/pocketgrid "PocketGrid") CSS framework to make the swatches flow nicely.
