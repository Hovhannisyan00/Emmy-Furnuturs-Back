const options = {
  pathOptions: {
    searchPath: route('dashboard.blogs.getListData'),
    deletePath: route('dashboard.blogs.destroy', ':id'),
    editPath: route('dashboard.blogs.edit', ':id'),
    showPath: route('dashboard.blogs.show', ':id'),
  },

  relations: {},

  actions: {
    show: false,
  },

  // Only override the is_active column
  columnsRender: {
    is_active: {
      render: function (value) {
        if (value == 1) {
          return `<span class="badge bg-success">YES</span>`;
        }
        return `<span class="badge bg-danger">NO</span>`;
      }
    }
  }
};

// eslint-disable-next-line no-new,no-undef
new DataTable(options);
