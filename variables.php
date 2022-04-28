<?php

  # url: localhost/php-front-to-back-traversy-media/variables.php

  // Single line comment
  #  Single line comment
  /*
      Multiline Comments
  */

  # VARIABLES
  /*
      - Prefix $
      - Start with a letter or an underscore
      - Only letters, numbers and underscores
      - Case sensitive
  */
  $_output = 'Hello World!';
  echo $_output;

  # DATA TYPES
  /*
      String
      Integers
      floats
      Booleans
      Arrays
  */
  $output = 'Hello World!';
  $num1 = 4;
  $float1 = 4.4;
  $bool1 = true;
  echo $output;

  $num1 = 4;
  $num2 = 10;
  $sum = $num1 + $num2;
  echo $sum;

  # Concatenate strings
  $string1 = 'Hello';
  $string2 = 'concat World';
  $greeting = $string1 . ' ' . $string2 . '!';
  echo $greeting;

  $greeting2 = '$string1 $string2!';
  $greeting3 = "$string1 $string2!";
  echo $greeting2;
  echo $greeting3;

  # Escape sequence
  $string3 = 'They\'re Here';
  $string4 = "They're Here";
  echo $string3;
  echo $string4;

  # CONSTANT
  define('GREETING', 'Hello Everyone');
  echo GREETING;
?>