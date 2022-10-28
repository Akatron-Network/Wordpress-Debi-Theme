async function feature_changer() {
  let f_list = document.getElementsByClassName('features-list-elm')
  let counter = 0

  while (true) {
    if (counter >= f_list.length) { counter = 0}
    for (let fea of f_list) { fea.classList.remove('feature-active') }

    f_list[counter].classList.add('feature-active')
    counter++

    await new Promise(r => setTimeout(r, 6000));
  }
}