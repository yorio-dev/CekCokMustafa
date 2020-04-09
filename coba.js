// let mahasiswa = {
//     "nama" : "pukis",
//     "nrp" : "1234123",
//     "email" : "pukis@gmail.com"
// }

// console.log(JSON.stringify(mahasiswa));

// var xhttp = new XMLHttpRequest();
//   xhttp.onreadystatechange = function() {
//     if (this.readyState == 4 && this.status == 200) {
//         let mahasiswa = JSON.parse(this.responseText);
//         console.log(mahasiswa);
//     }
//   };
//   xhttp.open("GET", "coba.json", true);
//   xhttp.send();

// coba jquery
$.getJSON('coba.json', function(data) {
    console.log(data);
})