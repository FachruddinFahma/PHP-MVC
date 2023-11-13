<!-- AKHIR SIDEBAR -->
<script src="js/script.js"></script>
<!-- JS BOOTSTRAPS -->
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="http://localhost/PHP-MVC/public/vendor/apexcharts/apexcharts.js"></script>
<script src="http://localhost/PHP-MVC/public/js/dashboard.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
  new DataTable("#dataTable", {
    info: false,
    "columnDefs": [{
        "orderable": true,
        "targets": 0
      },
      {
        "orderable": false,
        "targets": 1
      },
      {
        "orderable": true,
        "targets": 2
      },
      {
        "orderable": false,
        "targets": 3
      },
      {
        "orderable": false,
        "targets": 4
      },
      {
        "orderable": false,
        "targets": 5
      },
      {
        "orderable": false,
        "targets": 6
      },
    ]
  });
</script>
<script>
  new DataTable("#dataKamar", {
    info: false,
    "columnDefs": [{
        "orderable": true,
        "targets": 0
      },
      {
        "orderable": false,
        "targets": 1
      },
      {
        "orderable": true,
        "targets": 2
      },
      {
        "orderable": false,
        "targets": 3
      },
      {
        "orderable": false,
        "targets": 4
      },
      {
        "orderable": false,
        "targets": 5
      },
    ]
  });
</script>
</body>

</html>