// alert();
var number = 50;
var text = "Drusawin";
var array = [10, 20, 30];
var array2 = [10, [1, 3, "test"], 30];
var obj = { name: "win", age: 20, color: "red" };
var obj2 = {
  name: "win",
  address: {
    no: 50,
    road: "jira",
    city: "buriram",
  },
};

console.log(obj2);

document.getElementById("msg").innerHTML = array[1];

add(3, 8);

function add(a, b) {
  var var_sum = a + b;
  let let_sum = a + b;
  document.getElementById("msg").innerHTML = let_sum;
}
