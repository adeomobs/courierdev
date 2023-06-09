/*var x = document.getElementById('test').innerHTML;
alert(x);



            $(document).ready(function(){
                $("#sub-menuh").hover(function(){
                    $("#sub-menu").slideToggle();
                });
            });
*/


function myFunction(a) {
  a.parentNode.getElementsByClassName('dropdown-content')[0].classList.toggle("show");
}



var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  });
}