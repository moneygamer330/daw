//TODO TERMINAR LISTA DE LA COMPRA

const div = document.getElementById("div");
const addElement = document.getElementById("addElement");
const filterElements = document.getElementById("filterElements");
const deleteElements = document.getElementById("deleteElements");
const input = document.getElementById("element");
const filter = document.getElementById("filter");
const list = document.getElementById("list");
let li = document.createElement("li");
const x = document.createTextNode("[x]");

// Add element to the list
addElement.addEventListener("click", () => {
  li.append(input.value.trim());
  list.appendChild(li);
  list.appendChild(x);
});

// Filter elements

// Delete elements
deleteElements.addEventListener("click", () => {
  list.removeChild(li);
  list.removeChild(x);
});
