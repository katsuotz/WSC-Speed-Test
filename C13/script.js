function draggable(el) {
  el.addEventListener('mousedown', function (e) {
    document.onmousemove = drag
    document.onmouseup = cancelDrag

    let x1, x2, y1, y2

    x2 = e.clientX
    y2 = e.clientY

    function drag(e) {
      e.preventDefault()

      x1 = e.clientX - x2
      y1 = e.clientY - y2

      x2 = e.clientX
      y2 = e.clientY

      el.style.left = x1 + el.offsetLeft + 'px'
      el.style.top = y1 + el.offsetTop + 'px'
    }

    function cancelDrag() {
      document.onmousemove = null
      document.onmouseup = null
    }
  })
}

draggable(document.getElementById('draggable'));
