let one = 1;
let two = 2;
let three = 3;

if (one < two && two < three && three > one) {
  console.log(three + " is the biggest number");
} else if (one > two && two > three && three < one) {
  console.log(one + " is the biggest number");
} else if (one < two && two > three && three < two) {
  console.log(two + " is the biggest number");
}
