const options = {
  pathOptions: {
    searchPath: route('dashboard.galleries.getListData'),
    deletePath: route('dashboard.galleries.destroy', ':id'),
    editPath: route('dashboard.galleries.edit', ':id'),
    showPath: route('dashboard.galleries.show', ':id'),
  },

  relations: {},

  actions: {
      show: false,
  },
};
// eslint-disable-next-line no-new,no-undef
new DataTable(options);
