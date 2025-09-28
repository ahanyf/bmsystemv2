<div class="mb-3 position-relative">
  <label for="search" class="form-label">Search</label>
  <input type="text" id="search" class="form-control" autocomplete="off">
 
</div>

 <div id="suggestions" class="suggestions" >6565ddd6</div>


sssssssssssssssssssssssssssssssssssssssssssssssssss
<script>
document.addEventListener('DOMContentLoaded', function () {
  const searchInput = document.getElementById('search');
  const suggestionsBox = document.getElementById('suggestions');

  searchInput.addEventListener('input', function () {
    const query = this.value;

    if (query.length > 1) {
      const xhr = new XMLHttpRequest();
      xhr.open('POST', 'search.php', true);
      xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

      xhr.onload = function () {
        if (xhr.status === 200) {
          suggestionsBox.innerHTML = xhr.responseText;
          suggestionsBox.style.display = 'block';
        }
      };

      xhr.send('query=' + encodeURIComponent(query));
    } else {
      suggestionsBox.style.display = 'none';
    }
  });

  document.addEventListener('click', function (e) {
    if (e.target.classList.contains('suggestion-item')) {
      searchInput.value = e.target.textContent;
      suggestionsBox.style.display = 'none';
    }
  });
});
</script>
