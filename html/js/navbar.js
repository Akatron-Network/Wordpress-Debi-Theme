

for (el of document.getElementsByClassName('dropable')) {
  el.addEventListener('mouseenter', (e) => {
    let height = (e.target.getElementsByClassName('list-group-item').length * e.target.getElementsByClassName('list-group-item')[0].clientHeight) - 3
    e.target.getElementsByClassName('nav-dropdown')[0].style.height = height + "px"
    e.target.getElementsByClassName('nav-dropdown')[0].style.boxShadow = '1px 5px 20px 4px rgba(0, 0, 0, 0.364)'
  });
  el.addEventListener('mouseleave', (e) => {
    e.target.getElementsByClassName('nav-dropdown')[0].style.height = '0'
    e.target.getElementsByClassName('nav-dropdown')[0].style.boxShadow = ''
  });
}
