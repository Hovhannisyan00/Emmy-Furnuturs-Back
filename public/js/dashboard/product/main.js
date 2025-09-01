// eslint-disable-next-line no-undef,no-new
new FormRequest();

document.addEventListener('DOMContentLoaded', function () {
  fetch(categoriesUrl)
    .then(response => response.json())
    .then(data => {
      const select = document.querySelector('select[name="category_id"]');
      if (!select) return;

      select.innerHTML = '<option value="">Select category</option>';

      Object.entries(data).forEach(([id, name]) => {
        const option = document.createElement('option');
        option.value = id;
        option.textContent = name;
        select.appendChild(option);
      });

      const selectedValue = select.getAttribute('data-selected');
      if (selectedValue) {
        select.value = selectedValue;
      }
    })
    .catch(error => console.error('Error loading categories:', error));
});
