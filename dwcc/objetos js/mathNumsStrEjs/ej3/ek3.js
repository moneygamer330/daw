let nums = 1234123412347777;

function maskify(nums) {
  let str = nums.toString();
  let last4 = str.slice(-4);
  let masked = str.slice(0, -4).replace(/./g, "*");
  return masked + last4;
}

console.log(maskify(nums));
