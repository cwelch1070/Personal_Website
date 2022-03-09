function calculate()
{
  var numOne, numTwo, sum;
  numOne = parseInt(document.getElementById("Number1").value);
  numTwo = parseInt(document.getElementById("Number2").value);
  sum = numOne + numTwo;
  document.getElementById("result").value = sum;
}

