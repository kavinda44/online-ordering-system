let search_item = basket.find((x) => x.id === "xxx" + element_id);
console.log(search_item);
if (search_item === undefined) {
  document.getElementById(element_id).innerHTML = "0";
} else {
  document.getElementById(element_id).innerHTML = search_item.quantity;
}

function increment(id, qty) {
  let quantity = document.getElementById(id).innerHTML * 1;
  if (quantity >= qty) {
    return;
  } else {
    let item_id = "xxx" + id;
    let search = basket.find((x) => x.id === item_id);

    if (search === undefined) {
      let obj = { id: item_id, quantity: 1 };
      basket.push(obj);
    } else {
      search.quantity += 1;
    }

    quantity += 1;
    update(id, quantity);
    localStorage.setItem("data", JSON.stringify(basket));
  }
}

function decrement(id) {
  let quantity = document.getElementById(id).innerHTML * 1;
  if (quantity === 0) {
    return;
  } else {
    let item_id = "xxx" + id;
    let search = basket.find((x) => x.id === item_id);

    if (search === undefined) {
      return;
    } else {
      search.quantity -= 1;
    }

    quantity -= 1;
    update(id, quantity);
    basket = basket.filter((x) => x.quantity !== 0);
    localStorage.setItem("data", JSON.stringify(basket));
  }
}

function update(id, quantity) {
  document.getElementById(id).innerHTML = quantity;
  calculation();
}

calculation();
