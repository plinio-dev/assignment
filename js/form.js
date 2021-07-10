// data del form 
var currentDateTime = new Date();
var year = currentDateTime.getFullYear();
var month = (currentDateTime.getMonth() + 1);
var date = (currentDateTime.getDate() + 1);

if(date < 10) {
  date = '0' + date;
}
if(month < 10) {
  month = '0' + month;
}

var dateTomorrow = year + "-" + month + "-" + date;
var checkinElem = document.querySelector("#checkin-date");
var checkoutElem = document.querySelector("#checkout-date");

checkinElem.setAttribute("min", dateTomorrow);

checkinElem.onchange = function () {
    checkoutElem.setAttribute("min", this.value);
}
// data del form


// var form = document.getElementById("my-form");
    
//     async function handleSubmit(event) {
//       event.preventDefault();
//       var status = document.getElementById("my-form-status");
//       var data = new FormData(event.target);
//       fetch(event.target.action, {
//         method: form.method,
//         body: data,
//         headers: {
//             'Accept': 'application/json'
//         }
//       }).then(response => {
//         status.innerHTML = "Thanks!";
//         status.classList.add('success');
//         form.reset()
//       }).catch(error => {
//         status.innerHTML = "Oops! There was a problem!"
//         status.classList.add('error');
//       });
//     }
//     form.addEventListener("submit", handleSubmit)


// const myForm = document.getElementById('my-form');

// myForm.addEventListener('submit', function(e){
//   e.preventDefault();

//   const formData = new FormData(this);
//   const searchParams = new URLSearchParams();

//   for (const pair of formData) {
//       searchParams.append(pair[0], pair[1, pair[2]])
//   }

//   fetch('data.php', {
//     method: 'post', 
//     body: searchParams
//   }).then( function (response) {
//     // status.innerHTML = "Thanks!";
//     // status.classList.add('success');
//     return response.text();
//     // form.reset()
//   }).then(function(text){
//     console.log(text);
//   }).catch(function(error){
//     console.log(error);
//   })
  
  // .catch(error => {
  //   status.innerHTML = "Oops! There was a problem!"
  //   status.classList.add('error');
  // });
// });