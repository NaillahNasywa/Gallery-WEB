document.addEventListener('DOMContentLoaded', function() {
    const cover = document.getElementById('cover');
    const blah = document.querySelector('.blah');
  
    cover.addEventListener('change', function(evt) {
      const file = evt.target.files[0];
      console.log(file);
      if (file) {
        blah.src = URL.createObjectURL(file);
        blah.style.width = '100%';
      }
    });
  });

