const options = {
  pathOptions: {
    searchPath: route('dashboard.categories.getListData'),
    deletePath: route('dashboard.categories.destroy', ':id'),
    editPath: route('dashboard.categories.edit', ':id'),
    showPath: route('dashboard.categories.show', ':id'),
  },

  relations: {},

  actions: {
      show: false,
  },
};
// eslint-disable-next-line no-new,no-undef
new DataTable(options);
