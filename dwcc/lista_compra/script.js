//TODO TERMINAR LISTA DE LA COMPRA

const div = document.getElementById("div");
const addElement = document.getElementById("addElement");
const filterElements = document.getElementById("filterElements");
const deleteElements = document.getElementById("deleteElements");
const input = document.getElementById("element");
const filter = document.getElementById("filter");
const ul = document.getElementById("list");

// Add element to the list
addElement.addEventListener("click", () => {
  let li = document.createElement("li");
  const span = document.createElement("span");
  const x = document.createTextNode(" [x]");
  span.appendChild(x);
  li.append(input.value.trim());
  ul.appendChild(li);
  li.appendChild(span);

  // Remove one element of the list
  span.addEventListener("click", () => {
    const verification = confirm("Seguro que quiere borrar el elemento?");

    if (verification) {
      span.removeChild(li);
    }
  });

  // Delete elements
  deleteElements.addEventListener("click", () => {
    ul.removeChild(li);
    li.removeChild(span);
  });

  // Filter elements
  filterElements.addEventListener("click", () => {
    filter.value = filter.value.trim();
    const elements = ul.getElementsByTagName("li");
    for (let i = 0; i < elements.length; i++) {
      if (elements[i].innerText.includes(filter.value)) {
        elements[i].style.display = "block";
      } else {
        elements[i].style.display = "none";
      }
    }
  });
});
