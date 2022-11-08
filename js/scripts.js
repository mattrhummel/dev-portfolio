/* Set the width of the side navigation to 250px and the left margin of the page content to 250px */
function openNav()
 {
    if (window.matchMedia("(max-width:772px)").matches) { document.getElementById("popOutMenu").style.width =
  "100%"} else {
    document.getElementById("popOutMenu").style.width =
    "38%"
  }
  document.getElementById("wrapper").style.marginRight = "38%";
  
}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
function closeNav() {
  document.getElementById("popOutMenu").style.width = "0";
  document.getElementById("wrapper").style.marginRight = "0";
  document.body.style.backgroundColor = "white";
} 


/*Set menu to be sticky*/
window.onscroll = function() {myFunction()};

var header = document.getElementById("mainHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
