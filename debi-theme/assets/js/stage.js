addEventListener('load', async function () {
  await timeout(2000)
  while (true) {
    
    document.getElementById('anim-0').style.transform = ""
    document.getElementById('anim-0').style.opacity = "0.8"
    let animcount = 4
    for (let i = 1; i <= animcount; i++) {
      document.getElementById('anim-'+i).style.opacity = "1"
      document.getElementById('anim-'+i).style.width = "0"
      await timeout(1000)
      document.getElementById('anim-'+i).style.width = "30%"
      await timeout(1500)
    }
    await timeout(10000)
    for (let i = 1; i <= animcount; i++) {
      document.getElementById('anim-'+i).style.opacity = "0"
      await timeout(100)
    }
    document.getElementById('anim-0').style.transform = "scale(1.2) translateY(20px)"
    document.getElementById('anim-0').style.opacity = "1"
    await timeout(1000)
    for (let i = 1; i <= animcount; i++) {
      document.getElementById('anim-'+i).style.width = "0"
    }
    await timeout(10000)
  }
})