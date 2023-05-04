function getPricesAndNames() {
    // Get the parent container element
    const parent = document.querySelector("#parentdiv");

    // Get all the child elements (products) in the parent container
    const children = Array.from(parent.children);

    // Create an empty object to store the prices and names
    const pricesAndNames = {};

    // Loop through the children elements
    children.forEach(child => {
      // Get the name and price of the current element
      const name = child.querySelector("h4").textContent;
      const price = parseInt(child.querySelector("p").textContent.replace("Rs ", ""));

      // Add the name and price to the object
      pricesAndNames[name] = price;
    });

    // Return the object
    return pricesAndNames;
}


const select = document.querySelector("#sorted");

  // Add an event listener to the select element
  select.addEventListener("change", function() {
    // Get the selected option value
    const selectedOption = this.value;

    // Check if the selected option is "Sort by Price"
    if (selectedOption === "Sort by Price") {
      sortByPrice();
    }
  });
// const pricesAndNames = getPricesAndNames();

function sortByPrice() {
// Get the parent container element
const parent = document.querySelector("#parentdiv");

// Get all the child elements (products) in the parent container
const children = Array.from(parent.children);

// Sort the children array by price
children.sort((a, b) => {
    const priceA = parseInt(a.querySelector("p").textContent.replace("Rs ", ""));
    const priceB = parseInt(b.querySelector("p").textContent.replace("Rs ", ""));
    return priceA - priceB;
});

// Remove all the child elements from the parent container
children.forEach(child => parent.removeChild(child));

// Append the sorted children to the parent container
children.forEach(child => parent.appendChild(child));
}



