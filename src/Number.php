<?php

    class Number
    {
        function toWords($input1)
        {
            $input_digits = str_split($input1);
            $length_of_number = count($input_digits);
            $ones_array = array("0"=>"zero","1"=>"one","2"=>"two","3"=>"three","4"=>"four","5"=>"five","6"=>"six","7"=>"seven","8"=>"eight","9"=>"nine");
            $teens_array = array("10"=>"ten","11"=>"eleven","12"=>"twelve","13"=>"thirteen","14"=>"fourteen","15"=>"fifteen","16"=>"sixteen","17"=>"seventeen","18"=>"eightteen","19"=>"nineteen");
            $tens_array = array("0"=>"and","2"=>"twenty","3"=>"thirty","4"=>"forty","5"=>"fifty","6"=>"sixty","7"=>"seventy","8"=>"eighty","9"=>"ninety");
            if ($input1<=9) {
              return $ones_array[$input1];
            } elseif (($input1>=10)&&($input1<=19)) {
              return $teens_array[$input1];
            } elseif (($input1>=20)&&($input1<=99)) {
              $double_digit_return = "";
              $double_digit_return = $tens_array[$input_digits[0]]." ".$ones_array[$input_digits[1]];
              return $double_digit_return;
            } elseif (($input1>=100)&&($input1<=999)) {
              if ($input1[1]==1) {
                $last_two = $input1[1] . $input1[2];
                $triple_digit_return = "";
                $triple_digit_return = $ones_array[$input_digits[0]] . " hundred " . $teens_array[$last_two];
                return $triple_digit_return;
              }
              $triple_digit_return = "";
              $triple_digit_return = $ones_array[$input_digits[0]] . " hundred " . $tens_array[$input_digits[1]]." ".$ones_array[$input_digits[2]];
              return $triple_digit_return;
            } elseif (($input1>=1000)&&($input1<=9999)) {
              if ($input1[2]==1) {
                $last_two = $input1[2] . $input1[3];
                $four_digit_return ="";
                $four_digit_return = $ones_array[$input_digits[0]] . " thousand " . $ones_array[$input_digits[1]] . " hundred " . $teens_array[$last_two];
                return $four_digit_return;
              }
              $four_digit_return ="";
              $four_digit_return = $ones_array[$input_digits[0]] . " thousand " . $ones_array[$input_digits[1]] . " hundred " . $tens_array[$input_digits[2]]." ".$ones_array[$input_digits[3]];
              return $four_digit_return;
            } elseif (($input1>=10000)&&($input1<=99999)) {
              $five_digit_return="";
              if (($input1[0]==1)&&($input1[3]==1)) {
                $ten_k_first_two = $input1[0] . $input1[1];
                $ten_k_last_two = $input1[3] . $input1[4];
                $five_digit_return ="";
                $five_digit_return = $teens_array[$ten_k_first_two] . " thousand " . $ones_array[$input_digits[2]] . " hundred " . $teens_array[$ten_k_last_two];
                return $five_digit_return;
              } elseif (($input1[0]==1)&&($input1[3]!=1)) {
                $ten_k_first_two = $input1[0] . $input1[1];
                $five_digit_return ="";
                $five_digit_return = $teens_array[$ten_k_first_two] . " thousand " . $ones_array[$input_digits[2]] . " hundred " . $tens_array[$input_digits[3]]." ".$ones_array[$input_digits[4]];
                return $five_digit_return;
              } elseif (($input1[0]!=1)&&($input1[3]==1)) {
                $ten_k_last_two = $input1[3] . $input1[4];
                $five_digit_return ="";
                $five_digit_return =  $tens_array[$input_digits[0]]." ".$ones_array[$input_digits[1]]." thousand " . $ones_array[$input_digits[2]] . " hundred " . $teens_array[$ten_k_last_two];
                return $five_digit_return;
              } elseif (($tens_of_thousands>=20)&&($tens_of_thousands<=99)) {
                $five_digit_return= $tens_array[$input_digits[0]]." ".$ones_array[$input_digits[1]]." thousand " . $ones_array[$input_digits[2]] . " hundred " . $tens_array[$input_digits[3]]." ".$ones_array[$input_digits[4]];
                return $five_digit_return;
              }
            }
        }
    }
 ?>
