let search_item = basket.map((x) => x.id);
var x = search_item;

for (let i = 0; i < x.length; i++) {
    x[i] = x[i].replace(/x/g, '');
    console.log(x[i]);
}

if (search_item === undefined) {
  document.getElementById("title").innerHTML = "CART EMPTY";
} else {
  document.getElementById("title").innerHTML = "CART ITEMS";
}
