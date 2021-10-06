
function myFunctionToggle() {
  document.getElementById("unete-container").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
/*window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("unete-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
*/

// document.addEventListener('mouseup', function(e) {
//   var container = document.getElementById('unete-container');
//   if (!container.contains(e.target)) {
//       container.style.display = 'none';
//   }
// });

// var box = document.querySelector("#unete-container");


// document.addEventListener('mouseup', function(event) {
// 	if (event.target.closest("#unete-container")) return;
//   if (box.classList.contains('show')) {
//     box.classList.remove('show');
//   }
// });

//document.getElementById("nav-toggle").addEventListener("click", myFunction);

function navHeader() {

  var checkBox =  document.getElementById("nav-toggle");
  var navigation =  document.getElementById("nav");

  if (checkBox.checked == true){
    navigation.classList.add("open");
  } else {
    navigation.classList.remove("open");
  }
}

AOS.init();

function language() {
  document.getElementById("myDropdown").classList.toggle("show-lang");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show-lang')) {
        openDropdown.classList.remove('show-lang');
      }
    }
  }
}