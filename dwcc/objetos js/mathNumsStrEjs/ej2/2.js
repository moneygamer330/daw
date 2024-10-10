str = "I am a string";

function reverseString1(str) {
  for (let i = str.length - 1, newStr = ""; i >= 0; i--) {
    newStr += str[i];
  }
  return newStr;
}

console.log(reverseString1(str)); // 'gnirts a ma I'
