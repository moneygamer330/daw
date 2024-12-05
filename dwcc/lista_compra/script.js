//TODO TERMINAR LISTA DE LA COMPRA

const div = document.getElementById("div");
const addElement = document.getElementById("addElement");
const filterElements = document.getElementById("filterElements");
const deleteElements = document.getElementById("deleteElements");
const input = document.getElementById("element");
const filter = document.getElementById("filter");
const ul = document.getElementById("list");

// Check for duplicates
function isDuplicate(value) {
  const elements = ul.getElementsByTagName("li");
  for (let element of elements) {
    if (element.textContent.replace(" [x]", "").trim() === value) {
      return true;
    }
  }
  return false;
}

// Add element to the list
addElement.addEventListener("click", () => {
  let li = document.createElement("li");
  const span = document.createElement("span");
  const x = document.createTextNode(" [x]");
  let value = input.value.trim();

  // Check for empty input
  if (value === "") {
    alert("No puedes agregar un elemento vacío.");
    return;
  }

  // Check for duplicates
  if (isDuplicate(value)) {
    alert("El elemento ya existe en la lista.");
    return;
  }

  span.appendChild(x);
  li.append(value);
  ul.appendChild(li);
  li.appendChild(span);

  // Remove one element of the list
  span.addEventListener("click", () => {
    const verification = confirm("Seguro que quiere borrar el elemento?");

    if (verification) {
      ul.removeChild(li);
    }
  });

  // Delete elements
  deleteElements.addEventListener("click", () => {
    ul.removeChild(li);
    li.removeChild(span);
  });

  // Filter elements
  filter.addEventListener("input", () => {
    filter.value = filter.value.trim();
    const elements = ul.getElementsByTagName("li");
    for (let element of elements) {
      if (
        element.textContent.toLowerCase().includes(filter.value.toLowerCase())
      ) {
        element.classList.remove("hidden");
      } else {
        element.classList.add("hidden");
      }
    }
  });
});
