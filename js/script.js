// ambil element
var keyword = document.getElementById('keyword');
keyword.style.display = 'block';
var tombolCari = document.getElementById('tombol-cari');
var container = document.getElementById('container');

// tambah event
keyword.addEventListener('keyup', function () {
  //obejek ajax
  var xhr = new XMLHttpRequest();

  //Cek kesiapan ajax
  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      container.innerHTML = xhr.responseText;
      var rmovie = document.getElementById('rating-movie');
      rmovie.style.display = 'none';
      if (keyword.value == '') {
        rmovie.style.display = 'block';
      }
    }
  };
  xhr.open('GET', 'ajax/search.php?keyword=' + keyword.value, true);
  xhr.send();
});
