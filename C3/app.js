(function () {
  let color = '#f00'

  let canvas = document.getElementById('canvas')
  let ctx = canvas.getContext('2d')

  canvas.addEventListener('mousedown', function (e) {
    canvas.onmousemove = drag
    canvas.onmouseup = stopDrag

    let x1, x2, y1, y2

    x2 = e.offsetX
    y2 = e.offsetY

    function drag(e) {
      e = e || window.event

      e.preventDefault()

      x1 = x2
      y1 = y2

      x2 = e.offsetX
      y2 = e.offsetY

      ctx.beginPath()
      ctx.strokeStyle = color
      ctx.strokeWidth = 2
      ctx.moveTo(x1, y1)
      ctx.lineTo(x2, y2)
      ctx.stroke()
      ctx.closePath()
    }

    function stopDrag() {
      canvas.onmousemove = null
      canvas.onmouseup = null
    }
  })

  document.addEventListener('click', function (e) {
    let el = e.target

    if (el.className.includes('color')) {
      color = el.getAttribute('data-color')
    }
  })

})();