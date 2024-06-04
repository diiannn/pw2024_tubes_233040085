// ambil element
var keyword = document.getElementById('keyword');
var tombolCari = document.getElementById('tombol-cari');
var kategori = document.getElementById('kategori');

// tambah event
keyword.addEventListener('keyup', function () {
  //obejek ajax
  var xhr = new XMLHttpRequest();

  //Cek kesiapan ajax
  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      kategori.innerHTML = xhr.responseText;
    }
  };
  xhr.open('GET', 'ajax/searchkat.php?keyword=' + keyword.value, true);
  xhr.send();
});
