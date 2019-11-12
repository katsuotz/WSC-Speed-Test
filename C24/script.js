let sortPositive = arr => {
  let sorted = arr.filter(function (a) {
    return a > 0
  })

  sorted = sorted.sort(function (a, b) {
    return a - b
  })

  let x = 0

  for (let i = 0; i < arr.length; i++) {
    if (arr[i] >= 0) {
      arr[i] = sorted[x]
      x++
    }
  }
  console.log(arr)
  return arr
}

/*TESTS FOR AVALIATIONS*/

sortPositive([-2, 150, 190, 170, -3, -4, 160, 180]);
sortPositive([-1, -1, -1, -1, -1]);
sortPositive([-1]);
sortPositive([4, 2, 9, 11, 2, 16]);
sortPositive([2, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 1]);
sortPositive([23, 54, -1, 43, 1, -1, -1, 77, -1, -1, -1, 3]);