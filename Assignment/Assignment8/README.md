## Assignment Given : 21st June 2022 ----- Deadline : 22nd June 2022
### Sorting 
#### -> Sorting refers to ordering data in an alphabetical, numerical order and increasing or decreasing fashion according to some linear relationship among the data items. Similarly, an array can have it's elements be sorted in alphabetical or numerical order, descending or ascending. For this very purpose, PHP comes with a number of built-in functions designed specifically for sorting array elements in different ways. The various array sorting function in PHP are as follows :

### Various Sorting Function for Array in PHP
#### 1. sort()
#### -> sort() function is used for sorting indexed arrays. It is used for sorting the elements of the indexed arrary in ascending order.
### Synatx:
`sort($variable);`
### Example :
```PHP
<?php
$even= array(22,36,48,60);
sort($even);
echo($even);
?>

```