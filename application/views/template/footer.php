
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <script
      src="https://code.jquery.com/jquery-3.7.1.js"
      integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
      crossorigin="anonymous"></script>

      <script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
      <script>
        let table = new DataTable('#datatable1');
      </script>
      <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap4.min.js"></script>
      <script>
          $(document).ready(function () {
            $('.confirm-delete').click(function (e) { 
              e.preventDefault();
              confirmDialog = confirm("Are you sure? You want to delete this data?");
              if(confirmDialog){
                var id = $(this).val();
                //alert(id);
                $.ajax({
                  type: "DELETE",
                  url: "/employee/confirmDelete/" + id,
                  success: function (response) {
                    alert("Data deleted Successfully");
                    window.location.reload();
                  }
                });
              }
            });
          });
      </script>
  </body>
</html>