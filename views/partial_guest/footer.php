<a class="btn btn-warning" href="#" style="position: fixed;
  bottom: 20px;
  right: 20px;
  ">
  <i class="bi bi-caret-up"></i></a>
<footer>
  <hr>
  <p class="text-center">Copyright &copy;2024 Dian Astri </p>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script>
  var nav = document.querySelector('nav');

  window.addEventListener('scroll', function () {
    if (window.pageYOffset > 100) {
      nav.classList.add('bg-dark', 'shadow');
    } else {
      nav.classList.remove('bg-dark');
    }
  });
</script>

</body>

</html>