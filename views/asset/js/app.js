
const input_gambar = document.querySelector('#gambar')
const preview = document.querySelector('#img-preview')

input_gambar.addEventListener('change', () => {
  if (input_gambar.files && input_gambar.files[0]) {
    const reader = new FileReader();
    reader.onload = (e) => {
      preview.src = e.target.result;
    }
    reader.readAsDataURL(input_gambar.files[0]);
  }
})
