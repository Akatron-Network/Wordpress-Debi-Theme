
window.onload = function () {

  dragElement(document.getElementById("win"));
}


function dragElement(elmnt) {

  if (window.innerWidth < 900) return;

  elmnt.insertAdjacentHTML('afterend', '<div id="' + elmnt.id + '_shadow" style="visibility: hidden;"></div>')
  document.getElementById(elmnt.id + "_shadow").style.width = elmnt.clientWidth + "px"
  document.getElementById(elmnt.id + "_shadow").style.height = elmnt.clientHeight + "px"

  var pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;
  if (document.getElementById(elmnt.id + "header")) {
    // if present, the header is where you move the DIV from:
    document.getElementById(elmnt.id + "header").onmousedown = dragMouseDown;
  } else {
    // otherwise, move the DIV from anywhere inside the DIV:
    elmnt.onmousedown = dragMouseDown;
  }

  function dragMouseDown(e) {
    e = e || window.event;
    e.preventDefault();
    // get the mouse cursor position at startup:
    pos3 = e.clientX;
    pos4 = e.clientY;
    document.onmouseup = closeDragElement;
    // call a function whenever the cursor moves:
    document.onmousemove = elementDrag;
  }

  function elementDrag(e) {
    e = e || window.event;
    e.preventDefault();
    // calculate the new cursor position:
    pos1 = pos3 - e.clientX;
    pos2 = pos4 - e.clientY;
    pos3 = e.clientX;
    pos4 = e.clientY;
    // set the element's new position:
    elmnt.style.top = (elmnt.offsetTop - pos2) + "px";
    elmnt.style.left = (elmnt.offsetLeft - pos1) + "px";
  }

  function closeDragElement() {
    // stop moving when mouse button is released:
    document.onmouseup = null;
    document.onmousemove = null;
    goBackWin(elmnt)
  }
}



async function goBackWin(elmnt) {
  elmnt.style.transition = '.3s'
  elmnt.style.transform = 'scale(0.95)'
  await timeout(100)
  elmnt.style.top = '0px'
  elmnt.style.left = '0px'
  await timeout(300)

  console.log("back to pos");
  let top = parseInt(elmnt.style.top.replace('px', ''))
  let left = parseInt(elmnt.style.left.replace('px', ''))

  let tTime = 100
  let tScale = 100
  let rate = tTime / tScale

  // for (let i = 0; i < tScale; i++) {
  //   let iRate = 1 - (i / tScale)

  //   elmnt.style.top = (top * iRate) + 'px'
  //   elmnt.style.left = (left * iRate) + 'px'

  //   await timeout(rate)
  // }


  elmnt.style.transform = ''
  await timeout(200)
  elmnt.style.transition = ''

}

function timeout(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}