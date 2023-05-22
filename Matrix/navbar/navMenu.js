const toggleButton = document.getElementById('MenuButton');
const containerMenu = document.getElementById('ContainerMenu');

toggleButton.addEventListener('click', function() {
  if (containerMenu.style.display === 'block') {
    containerMenu.style.display = 'none';
    
  } else {
    containerMenu.style.display = 'block';
  }
});



