function calculateSum(numbers) {
  if (!Array.isArray(numbers)) {
    throw new Error('Invalid input: numbers must be an array.');
  }

  let sum = 0;
  for (let i = 0; i < numbers.length; i++) {
    sum += numbers[i]; //Bug: using += operator incorrectly when numbers[i] is string
  }
  return sum;
}

let numbers = [1, 2, "3", 4, 5];
let result = calculateSum(numbers);
console.log(result); //Output: NaN