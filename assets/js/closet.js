document.addEventListener('DOMContentLoaded', function() {
    const buttons = document.querySelectorAll('.stylebtn');
    
    buttons.forEach(function(button) {
      const arrow = button.querySelector('.arrow');
      
      button.addEventListener('click', function() {
        arrow.classList.add('rotate-135');
      });
      
      button.addEventListener('blur', function() {
        arrow.classList.remove('rotate-135');
      });
    });
  });
  const myModal = document.getElementById('myModal')
const myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', () => {
  myInput.focus()
})