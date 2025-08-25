const options = {
  pathOptions: {
    searchPath: route('dashboard.products.getListData'),
    deletePath: route('dashboard.products.destroy', ':id'),
    editPath: route('dashboard.products.edit', ':id'),
    showPath: route('dashboard.products.show', ':id'),
  },

  relations: {},

  actions: {
      show: false,
  },
};
// eslint-disable-next-line no-new,no-undef
new DataTable(options);
