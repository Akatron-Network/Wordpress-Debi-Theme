
function integrateFeatures() {

  let tstime = 400

  let feacols = document.getElementsByClassName('feature-col')

  for (let fcol of feacols) {
    let detelmn = document.getElementById('detail-' + fcol.id)
    detelmn.style.opacity = "1";
    detelmn.style.display = "none"  
    detelmn.style.transition = tstime + "ms"

    fcol.onclick = function () {
      activateFeature(fcol, tstime)
    }
  }

  autoFeatureChange(tstime)

}

var featureChanger = true

async function autoFeatureChange(tstime) {
  let feacols = document.getElementsByClassName('feature-col')
  while (true) {
    for (let i = 0; i < feacols.length; i++) {
      activateFeature(feacols[i], tstime)
      await timeout(tstime * 30)
      while (!featureChanger) { await timeout(tstime * 5); console.log("Feature Changer Paused."); }
    }
  }
}

function activateFeature(fcol, tstime) {
  let detelmn = document.getElementById('detail-' + fcol.id)

  for (let ode of document.getElementsByClassName('feature-details-element')) {
    ode.style.position = "absolute"
    ode.style.top = "0";
    if (detelmn.id == ode.id) {
      ode.style.transform = "translateX(-100%)";
      continue;
    }
    ode.style.transform = "translateX(100%)";
    setTimeout(() => {
      ode.style.display = "none";
      ode.style.position = "relative";
      ode.style.top = "";
    }, tstime)
  }
  for (let fc of document.getElementsByClassName('feature-col')) { fc.classList.add('feature-passive') }
  fcol.classList.remove('feature-passive')

  detelmn.style.display = "";
  detelmn.style.position = "relative"
  setTimeout(() => {detelmn.style.transform = "";}, tstime)
}