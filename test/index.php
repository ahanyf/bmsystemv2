<!DOCTYPE html>
<html>
<head>
  <title>Delivery Item Form</title>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <style>
    #suggestions {
      border: 1px solid #ccc;
      max-height: 150px;
      overflow-y: auto;
      position: absolute;
      background: white;
      z-index: 1000;
      width: 100%;
    }
    .suggestion-item {
      padding: 5px;
      cursor: pointer;
    }
    .suggestion-item:hover {
      background-color: #eee;
    }
  </style>
</head>
<body>
  <div class="container">
    <form method="post" action="app/bm_delivary/delivary_id_items_form1_post.php" class="row g-3 align-items-center position-relative">
      <input type="hidden" value="<?php echo $uri; ?>" name="uri" />
      <input type="hidden" value="<?php echo $id; ?>" name="id" />

      <div class="col-md-2">
        <label class="visually-hidden" for="inlineFormInputQty">Qty</label>
        <input type="text" name="item_qty" class="form-control" id="inlineFormInputQty" placeholder="Qty">
      </div>

      <div class="col-md-8 position-relative">
        <label class="visually-hidden" for="inlineFormInputItem">Item Name</label>
        <div class="input-group">
          <input type="text" name="item_name" id="item_name" autocomplete="off" class="form-control" placeholder="Item Name (BM Code)">
        </div>
        <div id="suggestions"></div>
      </div>

      <div class="col-md-2">
        <button type="submit" class="btn btn-primary w-100">Add</button>
      </div>
    </form>
  </div>

  <script>
    $(document).ready(function() {
      $('#item_name').keyup(function() {
        let query = $(this).val();
        if (query.length > 0) {
          $.ajax({
            url: 'search.php',
            method: 'POST',
            data: { query: query },
            success: function(data) {
              $('#suggestions').html(data);
            }
          });
        } else {
          $('#suggestions').html('');
        }
      });

      $(document).on('click', '.suggestion-item', function() {
        $('#item_name').val($(this).text());
        $('#suggestions').html('');
      });
    });
  </script>
</body>
</html>
