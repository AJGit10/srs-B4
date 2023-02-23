
// let x =5;
// let y =10;
// let z = x*y
// document.getElementById("ajay").innerHTML =z;


// let x = 5;
// x--;
// let z = x;
// document.getElementById("ajay").innerHTML =z;


// let x = 5;
// let z = x ** 2;
// document.getElementById("ajay").innerHTML =z;

// let x = "Audi" + 25000;
// function multi(p1, p2) {
//     return p1*p2;
// }
// document.getElementById("ajay").innerHTML = multi(12, 10);

// const cars = ["BMW", "Volvo", "Mini"];

// let text = "";
// for (let x of cars) {
//   text += x + "<br>";
// }
// document.getElementById("ajay").innerHTML = text;


// function loadDoc() {
//     const xhttp = new XMLHttpRequest();
//     xhttp.onload = function() {
//       document.getElementById("ajay").innerHTML =
//       this.responseText;
//     }
//     xhttp.open("GET", "new.json");
//     xhttp.send();


// function loadDoc() {
//     const xhttp = new XMLHttpRequest();
//     xhttp.onreadystatechange = function() {
//       if (this.readyState == 4 && this.status == 200) {
//         document.getElementById("ajay").innerHTML =
//         this.responseText;
//       }
//     }
//     xhttp.open("GET", "new.json");
//     xhttp.send();
//   }



// const myObj = {name:"John", age:30, city:"New York"};
// document.getElementById("ajay").innerHTML = myObj.name;


// const text = '{"name":"John", "birth":"1986-12-14", "city":"New York"}';
// const obj = JSON.parse(text);
// obj.birth = new Date(obj.birth);
// document.getElementById("ajay").innerHTML = obj.name + ", " + obj.birth; 


// let obj = JSON.parse("new.json");
// obj.birth = new Date(obj.birth);
// document.getElementById("ajay").innerHTML = obj.name + ", " + obj.birth; 


// const text = '{"name":"John", "birth":"1986-12-14", "city":"New York"}';
// const obj = JSON.parse(text);
// obj.birth = new Date(obj.birth);
// document.getElementById("ajay").innerHTML = obj.name + ", " + obj.birth; 






// fetch("new.json")
// .then(function(response){
// 	return response.json();
// })
// .then(function(variable){
// 	let placeholder = document.querySelector("#ajay");
// 	let out = "";
// 	for(let product of variable){
// 		out += `
// 			<tr>
// 				<td>${product.name}</td>
// 				<td>${product.age}</td>
// 			</tr>
// 		`;
// 	}

// 	placeholder.innerHTML = out;
// });


const myElements = document.getElementsByTagName("p");
document.getElementById("demo").innerHTML = "The text in the first paragraph is: " + myElements[0].innerHTML;