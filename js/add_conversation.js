/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close");

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

function toto(){
  modal.style.display = "block";
  alert("toto");
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  alert("fermer");
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

    
// function addconv($idpresta)
// {
//    modal.style.display = "block";
// }




function addconv($idpresta)
{

  $(".modal").load("controleurs/c_modal_addconversation.php", 
  {
  idpresta: $idpresta    
  });
 
 $(".modall").load("controleurs/c_modal_addconversation.php"); // contenu.html se trouve au même niveau dans l’arborescence.

} 