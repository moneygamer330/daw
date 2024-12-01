const div = document.getElementById("div");
const addElement = document.getElementById("addElement");
const filterElements = document.getElementById("filterElements");
const deleteElements = document.getElementById("deleteElements");
const input = document.getElementById("element");
const filter = document.getElementById("filter");
const list = document.getElementById("list");
let li = document.createElement("li");

//add element to the list
addElement.addEventListener("click", () => {
  li.append(input.value.trim());
  list.append(li);
  list.append(div);
  input.value = "";
  input.focus();
});

//filter elements


//delete elements
deleteElements.addEventListener("click", () => {
  list.removeChild(li);
});


