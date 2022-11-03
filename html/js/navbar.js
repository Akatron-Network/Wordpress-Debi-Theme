

for (el of document.getElementsByClassName('dropable')) {
  el.addEventListener('mouseenter', (e) => {
    let height = (e.target.getElementsByClassName('list-group-item').length * e.target.getElementsByClassName('list-group-item')[0].clientHeight) - 3
    e.target.getElementsByClassName('nav-dropdown')[0].style.height = height + "px"
    e.target.getElementsByClassName('nav-dropdown')[0].classList.add('nav-dropdown-open')
  });
  el.addEventListener('mouseleave', (e) => {
    e.target.getElementsByClassName('nav-dropdown')[0].style.height = '0'
    e.target.getElementsByClassName('nav-dropdown')[0].classList.remove('nav-dropdown-open')
  });
}


addEventListener('scroll', (e) => {
  if (window.scrollY > 170 && window.innerWidth > 900) {
    document.getElementById('nav-stick').style.height = '56px'
  }
  else {
    document.getElementById('nav-stick').style.height = '0'
  }
});


addEventListener('load', (e) => {
  setTimeout(() => {
    for (let el of document.getElementsByClassName('btn-login')) {
      el.classList.remove('btn-login-active')
    }
  }, 3000)
})


async function themechange() {

  let body = document.getElementsByTagName('body')[0]
  let tload = document.getElementById('theme-loader')
  //* To The Dark side
  if (body.classList.contains('light')) {

    tload.style.backgroundColor = "var(--black_light)"
    tload.style.opacity = "0"
    tload.style.display = "block"
    await timeout(200)
    tload.style.opacity = "1"
    await timeout(200)

    await setTheme('dark')
      
    tload.style.opacity = "0"
    await timeout(200)
    tload.style.display = "none"

  }

  //* To The Light side
  else {
    tload.style.backgroundColor = "var(--platinium)"
    tload.style.opacity = "0"
    tload.style.display = "block"
    await timeout(200)
    tload.style.opacity = "1"
    await timeout(200)
    
    await setTheme('light')
    
    tload.style.opacity = "0"
    await timeout(200)
    tload.style.display = "none"
  }
}

async function setTheme(theme = 'dark') {
  let body = document.getElementsByTagName('body')[0]
  let btn = document.getElementById('theme-btn')
  let btnmin = document.getElementById('theme-btn-mini')

  if (theme === 'dark') {

    localStorage.setItem('theme', 'dark')

    body.classList.remove('light')
    btn.innerHTML = 
      '<i class="fa-solid fa-sun"></i>' + 
      '<span>&nbsp; Açık Tema</span>'
    btnmin.innerHTML = 
      '<i class="fa-solid fa-sun"></i>'
  }
  else {
    localStorage.setItem('theme', 'light')


    body.classList.add('light')
    btn.innerHTML = 
      '<i class="fa-solid fa-moon"></i>' + 
      '<span>&nbsp; Koyu Tema</span>'
    btnmin.innerHTML = 
      '<i class="fa-solid fa-moon"></i>'
  }
}