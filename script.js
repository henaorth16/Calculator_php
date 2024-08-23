var select = document.querySelector("select");
var num1Elem = document.querySelector(".inputs:nth-child(2)");
var num3Elem = document.querySelector(".num3Elem");
var labelElem = document.querySelector("#num2");

window.addEventListener("load", () => {
    num3Elem.style.display = "none";
  if (select.value == "cir" || select.value == "fib" || select.value == "fac") {
    num1Elem.style.display = "none";
    if (select.value == "fib") {
      labelElem.innerText = "number of sequence";
    } else if (select.value == "cir") {
      labelElem.innerText = "Radius";
    } else {
      labelElem.innerText = "Number Limit";
    }
  } else {
    num1Elem.style.display = "flex";
    labelElem.innerText = "number 2:";
  }

  select.addEventListener("change", () => {
    if (
      select.value == "cir" ||
      select.value == "fib" ||
      select.value == "fac"
    ) {
      num1Elem.style.display = "none";
      if (select.value == "fib") {
        labelElem.innerText = "number of sequence";
      } else if (select.value == "cir") {
        labelElem.innerText = "Radius";
      } else {
        labelElem.innerText = "Number Limit";
      }
    } else {
      num1Elem.style.display = "flex";
      labelElem.innerText = "Number 2:";
    }

      select.value == "qua" ? num3Elem.style.display = "flex" : num3Elem.style.display = "none";
    
  });
});
