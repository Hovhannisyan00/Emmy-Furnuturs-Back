
const langDisplay = document.getElementById('selected-language');
const savedLanguage = localStorage.getItem('selectedLanguage');

if (savedLanguage) {
  langDisplay.innerText = savedLanguage;
}


document.querySelectorAll('.dropdown-item[data-lang]').forEach(item => {
  item.addEventListener('click', function (e) {
    e.preventDefault();
    const selectedLang = this.getAttribute('data-lang');
    langDisplay.innerText = selectedLang;
    localStorage.setItem('selectedLanguage', selectedLang);
  });
});


const currencyDisplay = document.getElementById('selected-currency');
const priceCurrency = document.getElementById('price-currency');
const savedCurrency = localStorage.getItem('selectedCurrency');

if (savedCurrency) {
  currencyDisplay.innerText = savedCurrency;
  if (priceCurrency) {
    priceCurrency.innerText = savedCurrency;
  }
}


document.querySelectorAll('.dropdown-menu a[data-currency]').forEach(item => {
  item.addEventListener('click', function (e) {
    e.preventDefault();
    const selectedCurrency = this.getAttribute('data-currency');

    currencyDisplay.innerText = selectedCurrency;
    if (priceCurrency) {
      priceCurrency.innerText = selectedCurrency;
    }

    localStorage.setItem('selectedCurrency', selectedCurrency);
  });
});
