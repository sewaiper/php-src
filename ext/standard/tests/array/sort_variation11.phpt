--TEST--
Test sort() function : usage variations - sort mixed values, 'sort_flag' as default/SORT_REGULAR (OK to fail as result is unpredectable)
--FILE--
<?php
/*
 * testing sort() by providing mixed value array for $array argument with following flag values.
 * flag value as default
 * SORT_REGULAR - compare items normally
*/

echo "*** Testing sort() : usage variations ***\n";

// mixed value array
$mixed_values = array (
  array(),
  array(array(33, -5, 6), array(11), array(22, -55), array() ),
  -4, "4", 4.00, "b", "5", -2, -2.0, -2.98989, "-.9", "True", "",
  NULL, "ab", "abcd", 0.0, -0, "abcd\x00abcd\x00abcd", '', true, false
);

echo "\n-- Testing sort() by supplying mixed value array, 'flag' value is default --\n";
$temp_array = $mixed_values;
var_dump(sort($temp_array) );
var_dump($temp_array);

echo "\n-- Testing sort() by supplying mixed value array, 'flag' value is SORT_REGULAR --\n";
$temp_array = $mixed_values;
var_dump(sort($temp_array, SORT_REGULAR) );
var_dump($temp_array);

echo "Done\n";
?>
--EXPECT--
*** Testing sort() : usage variations ***

-- Testing sort() by supplying mixed value array, 'flag' value is default --
bool(true)
array(22) {
  [0]=>
  string(0) ""
  [1]=>
  NULL
  [2]=>
  bool(false)
  [3]=>
  int(-4)
  [4]=>
  float(-2.98989)
  [5]=>
  int(-2)
  [6]=>
  float(-2)
  [7]=>
  string(0) ""
  [8]=>
  string(3) "-.9"
  [9]=>
  string(1) "4"
  [10]=>
  string(1) "5"
  [11]=>
  string(4) "True"
  [12]=>
  string(2) "ab"
  [13]=>
  string(4) "abcd"
  [14]=>
  string(1) "b"
  [15]=>
  float(0)
  [16]=>
  int(0)
  [17]=>
  string(14) "abcd abcd abcd"
  [18]=>
  float(4)
  [19]=>
  array(0) {
  }
  [20]=>
  array(4) {
    [0]=>
    array(3) {
      [0]=>
      int(33)
      [1]=>
      int(-5)
      [2]=>
      int(6)
    }
    [1]=>
    array(1) {
      [0]=>
      int(11)
    }
    [2]=>
    array(2) {
      [0]=>
      int(22)
      [1]=>
      int(-55)
    }
    [3]=>
    array(0) {
    }
  }
  [21]=>
  bool(true)
}

-- Testing sort() by supplying mixed value array, 'flag' value is SORT_REGULAR --
bool(true)
array(22) {
  [0]=>
  string(0) ""
  [1]=>
  NULL
  [2]=>
  bool(false)
  [3]=>
  int(-4)
  [4]=>
  float(-2.98989)
  [5]=>
  int(-2)
  [6]=>
  float(-2)
  [7]=>
  string(0) ""
  [8]=>
  string(3) "-.9"
  [9]=>
  string(1) "4"
  [10]=>
  string(1) "5"
  [11]=>
  string(4) "True"
  [12]=>
  string(2) "ab"
  [13]=>
  string(4) "abcd"
  [14]=>
  string(1) "b"
  [15]=>
  float(0)
  [16]=>
  int(0)
  [17]=>
  string(14) "abcd abcd abcd"
  [18]=>
  float(4)
  [19]=>
  array(0) {
  }
  [20]=>
  array(4) {
    [0]=>
    array(3) {
      [0]=>
      int(33)
      [1]=>
      int(-5)
      [2]=>
      int(6)
    }
    [1]=>
    array(1) {
      [0]=>
      int(11)
    }
    [2]=>
    array(2) {
      [0]=>
      int(22)
      [1]=>
      int(-55)
    }
    [3]=>
    array(0) {
    }
  }
  [21]=>
  bool(true)
}
Done
