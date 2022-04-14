<?php 
// PHP code to demonstrate Bitwise Operator.
          
    // Bitwise AND
    $First = 5;
    $second = 3;
    $answer = $First & $second;
      
    print_r("Bitwise & of 5 and 3 is $answer");
      
    print_r("\n");
      
    // Bitwise OR
    $answer = $First | $second;
    print_r("Bitwise | of 5 and 3 is $answer");
      
    print_r("\n");
      
    // Bitwise XOR
    $answer = $First ^ $second;
    print_r("Bitwise ^ of 5 and 3 is $answer");
      
    print_r("\n");
      
    // Bitwise NOT
    $answer = ~$First;
    print_r("Bitwise ~ of 5 is $answer");
      
    print_r("\n");
      
    // Bitwise Left shift
    $second = 1;
    $answer = $First << $second;
    print_r("5 << 1 will be $answer");
      
    print_r("\n");
      
    // Bitwise Right shift
    $answer = $First >> $second;
    print_r("5 >> 1 will be $answer");
      
    print_r("\n");
    
/**
 * Undocumented function
 *
 * @param [type] $num
 * @return void
 */
function oddEven($num){
    echo $num&1 ? 'Odd Number' : 'Even Number';
}

// oddEven(10);

/**
 * & and operator, matching 1 in both operand
 */
echo 5 & 4; // 101 & 100 = 100 == 4

/**
 * | or operator, at least one 1 in an operand
 */
echo 5 | 4; // 101 & 100 = 101 == 5

/**
 * ^ xor operator, true only if operand are different
 */
echo 5 ^ 4; // 101 & 100 = 001 == 1

/**
 * Left shift
 */
echo 5 << 1; // 101 to 1010 = 10
echo 5 << 2; // 101 to 10100 = 20
echo 5 << 3; // 101 to 101000 = 40

/**
 * right shift
 */
echo 5 >> 1; // 101 to 10 = 2
echo 5 >> 2; // 101 to 1 = 1
echo 5 >> 3; // 101 to 0 = 0
