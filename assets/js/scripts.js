function generateName() {
  fetch('./generator.php')
      .then(response => response.json())
      .then(data => {
          document.getElementById('generatedName').innerHTML = data.newValue;
      })
      .catch(error => {
          console.error('Error fetching data:', error);
      });
}