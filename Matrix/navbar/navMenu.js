  const toggleButton = document.getElementById('MenuButton');
  const myDiv = document.getElementById('MenuOverlay');

  toggleButton.addEventListener('click', function() {
    console.log('Test')
    myDiv.classList.toggle('block');
    canvasContainer.style.display = (canvasContainer.style.display === 'none') ? 'block' : 'none';

  });

