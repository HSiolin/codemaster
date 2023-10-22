const chk = document.getElementById('chk')

chk.addEventListener('change', () => {
  document.body.classList.toggle('dark')

  const label = document.querySelector('.labelchk');
  label.classList.toggle('checked', chk.checked);
})



