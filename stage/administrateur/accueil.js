var modal = document.getElementById("myModal");
var btn = document.getElementById("myBtn");
var ajt=document.getElementById('ajt');
var form=document.getElementById('form');
var inp=document.getElementsByClassName('form-control');

function modifier(element){
  var infos=document.getElementById('table-responsive').rows,
  ligneC=element.getAttribute('ligne'),
  infos=document.getElementById('table-responsive').rows,
  colonnes=infos[ligneC].cells;
  ajt.value="modifier";
  inp[0].value=colonnes[1].innerText;
  inp[1].value=colonnes[2].innerText;
  inp[2].value=colonnes[3].innerText;
  inp[3].value=colonnes[4].innerText;
  inp[4].value=colonnes[5].innerText;
  inp[5].value=colonnes[6].innerText;
  form.setAttribute("action","OpFour/insertionFour.php?id="+colonnes[0].innerText);
  modal.style.display="block";
}