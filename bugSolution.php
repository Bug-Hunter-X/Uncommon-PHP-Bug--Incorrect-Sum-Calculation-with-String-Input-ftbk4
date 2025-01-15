function calculateSum(numbers) {
  if (!is_array(numbers)) {
    throw new Exception('Invalid input: numbers must be an array.');
  }

  $sum = 0;
  foreach ($numbers as $number) {
    if (is_numeric($number)) {
      $sum += $number;
    } else {
      //Handle non-numeric values appropriately
      //For Example: Throw an exception, skip the value, or use a default value
      throw new Exception('Invalid input: Array element is not a number.'); 
    }
  }
  return $sum;
}

$numbers = [1, 2, "3", 4, 5];
try{
  $result = calculateSum($numbers);
  echo $result; //Output: 15
} catch(Exception $e) {
  echo "Error: " . $e->getMessage();
}
