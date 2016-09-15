<?php

    require_once "src/Number.php";

    class NumberTest extends PHPUnit_Framework_TestCase
    {
      function test_return_single_digit()
      {
        //Arrange
        $test_Number = new Number;
        $first_input = "9";

        //Act
        $result = $test_Number->toWords($first_input);

        //Assert
        $this->assertEquals("nine", $result);
      }
      function test_return_double_digit()
      {
        //Arrange
        $test_Number = new Number;
        $first_input = "27";

        //Act
        $result = $test_Number->toWords($first_input);

        //Assert
        $this->assertEquals("twenty seven", $result);
      }
      function test_return_triple_digit()
      {
        //Arrange
        $test_Number = new Number;
        $first_input = "819";

        //Act
        $result = $test_Number->toWords($first_input);

        //Assert
        $this->assertEquals("eight hundred nineteen", $result);
      }
      function test_return_four_digit()
      {
        //Arrange
        $test_Number = new Number;
        $first_input = "8713";

        //Act
        $result = $test_Number->toWords($first_input);

        //Assert
        $this->assertEquals("eight thousand seven hundred thirteen", $result);
      }
      function test_return_five_digit()
      {
        //Arrange
        $test_Number = new Number;
        $first_input = "19980";

        //Act
        $result = $test_Number->toWords($first_input);

        //Assert
        $this->assertEquals("nineteen thousand nine hundred eighty", $result);
      }
    }
 ?>
