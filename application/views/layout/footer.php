<footer>
  <div class="footer clearfix mb-0 text-muted">
    <div class="float-start">
      <p>2021 &copy; Mazer</p>
    </div>
    <div class="float-end">
      <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a href="https://saugi.me">Saugi</a></p>
    </div>
  </div>
</footer>
</div>
</div>
<script src="<?= base_url(); ?>/assets/js/bootstrap.js"></script>
<script src="<?= base_url(); ?>/assets/js/app.js"></script>
<script src="<?= base_url(); ?>/assets/extensions/jquery/jquery.min.js"></script>
<script src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>
<script src="<?= base_url(); ?>/assets/js/pages/datatables.js"></script>

<script>
  window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function() {
      $(this).remove();
    });
  }, 3000);
</script>

</body>

</html>