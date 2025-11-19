const options = {
  pathOptions: {
    searchPath: route('dashboard.orders.getListData'),
    deletePath: route('dashboard.orders.destroy', ':id'),
    editPath: route('dashboard.orders.edit', ':id'),
    showPath: route('dashboard.orders.show', ':id'),
  },

  relations: {},

  actions: {
    show: true,

    // --- Кнопка отправки Email ---
    email(row) {
      const emailUrl = `${route('dashboard.send-mail')}?order_id=${row.id}`;
      return `
        <a href="${emailUrl}"
            class="btn __send_email__btn"
            data-id="${row.id}"
            title="Отправить письмо">
              <i class="fas fa-envelope"></i>
        </a>`;
    },

    // --- Кнопка экспорта PDF ---
    exportPdf(row) {
      return `
        <a href="#"
            class="btn __export_pdf__btn"
            data-id="${row.id}"
            title="Экспорт PDF">
              <i class="fas fa-file-pdf"></i>
        </a>`;
    },
  },
};

// eslint-disable-next-line no-new,no-undef
new DataTable(options);
document.addEventListener('click', function (e) {

  // --- EMAIL ---
  if (e.target.closest('.__send_email__btn')) {
    e.preventDefault();

    const {id} = e.target.closest('.__send_email__btn').dataset;

    fetch(route('dashboard.send-mail'), {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
      },
      body: JSON.stringify({ order_id: id }),
    })
      .then(res => res.json())
      .then(() => {
        alert('Письмо успешно отправлено!');
      })
      .catch(() => {
        alert('Ошибка при отправке письма.');
      });
  }


  // --- EXPORT PDF ---
  if (e.target.closest('.__export_pdf__btn')) {
    e.preventDefault();

    const {id} = e.target.closest('.__export_pdf__btn').dataset;

    fetch(route('dashboard.orders.exportPdf'), {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
      },
      body: JSON.stringify({ order_id: id }),
    })
      .then(async res => {
        if (!res.ok) throw new Error('Ошибка');

        // Получаем PDF-файл как blob
        const blob = await res.blob();
        const url = window.URL.createObjectURL(blob);

        // Создаём ссылку для скачивания
        const a = document.createElement("a");
        a.href = url;
        a.download = `order_${id}.pdf`;
        a.click();

        alert('PDF успешно создан и загружен!');
      })
      .catch(() => {
        alert('Ошибка при генерации PDF.');
      });
  }
});
