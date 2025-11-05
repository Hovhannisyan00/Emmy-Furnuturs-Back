const options = {
  pathOptions: {
    searchPath: route('dashboard.histories.getListData'),
    deletePath: route('dashboard.histories.destroy', ':id'),
    editPath: route('dashboard.histories.edit', ':id'),
    showPath: route('dashboard.histories.show', ':id'),
  },

  relations: {},

  actions: {
      show: false,
  },
};
// eslint-disable-next-line no-new,no-undef
new DataTable(options);
