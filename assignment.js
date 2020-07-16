// 1. Given an array, rotate the array to the right by k steps, where k is non-negative.
//     Example:
//         Input: [1,2,7,8,9] &
//         k=3 (3 steps)
//         Output: [7,8,9,1,2]

function arrayRotateRight(array, length, rotations) {
  for (let i = 0; i < rotations; i++) {
    // take out the last element
    let temp = array[length - 1];
    for (let j = length - 1; j > 0; j--) {
      // shift array elements towards right by one place
      array[j] = array[j - 1];
    }
    array[0] = temp;
  }
  return array;
}
var arr = [1, 2, 7, 8, 9];
var k = 3;
console.log(arrayRotateRight(arr, arr.length, k));

// 2 . Find all combinations of a given string.
// Example:
// Input: “abc”
// Output: {“”, a, b, c, ab, bc, ac, abc}
function getStringCombinations(str) {
  let combinations = [];
  let array = [];
  let temp = "";
  for (let x = 0, y = 1; x < str.length; x++, y++) {
    array[x] = str.substring(x, y);
  }
  let strlent = Math.pow(2, array.length);
  for (let i = 0; i < strlent; i++) {
    temp = "";
    for (let j = 0; j < array.length; j++) {
      if (i & Math.pow(2, j)) {
        temp += array[j];
      }
    }
    combinations.push(temp);
  }

  return combinations.join(",");
}

console.log(getStringCombinations("abc"));
