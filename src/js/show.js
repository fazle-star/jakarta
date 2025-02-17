   // Slideshow
   const slideshow = document.getElementById('slideshow');
   const images = slideshow.getElementsByTagName('img');
   let index = 0;

   function showNextImage() {
       // Sembunyikan gambar saat ini
       images[index].classList.remove('active');

       // Pindah ke gambar berikutnya
       index = (index + 1) % images.length;

       // Tampilkan gambar berikutnya
       images[index].classList.add('active');
   }

   // Tampilkan gambar pertama saat halaman dimuat
   images[index].classList.add('active');

   // Mulai slideshow
   setInterval(showNextImage, 3000); // Ganti gambar setiap 3 detik