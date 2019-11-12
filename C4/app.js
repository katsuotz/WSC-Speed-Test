(function () {
  let background = 'rgba(255,255,255)'
  let block = document.getElementById('block')

  let inputRange = document.querySelectorAll('.input-range')

  for (let i = 0; i < inputRange.length; i++) {
    let input = inputRange[i]
    input.onchange = function () {
      changeBackground()
    }
    input.oninput = function () {
      changeBackground()
    }
    input.onmousedown = function ( ){
      input.onmousemove = drag
      input.onmouseup = stopDrag

      function drag(){
        changeBackground()
      }

      function stopDrag () {
        input.onmousemove = null
        input.onmouseup = null
      }

    }
  }

  function changeBackground() {
    let colors = {}
    for (let i = 0; i < inputRange.length; i++) {
      let input = inputRange[i]
      let color = input.getAttribute('data-color')
      colors[color] = input.value
    }

    background = `rgb(${colors['red']},${colors['green']},${colors['blue']})`

    block.innerHTML = background
    block.style.backgroundColor = background
  }

  changeBackground()
})();