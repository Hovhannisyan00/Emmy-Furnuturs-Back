const options = {
  pathOptions: {
    searchPath: route('dashboard.orders.getListData'),
    deletePath: route('dashboard.orders.destroy', ':id'),
    editPath: route('dashboard.orders.edit', ':id'),
    showPath: route('dashboard.orders.show', ':id'),
  },

  relations: {},

  actions: {
      show: false,
  },
};
// eslint-disable-next-line no-new,no-undef
new DataTable(options);
