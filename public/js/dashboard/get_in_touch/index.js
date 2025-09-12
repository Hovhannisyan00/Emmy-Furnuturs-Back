const options = {
  pathOptions: {
    searchPath: route('dashboard.get_in_touches.getListData'),
    deletePath: route('dashboard.get_in_touches.destroy', ':id'),
    editPath: route('dashboard.get_in_touches.edit', ':id'),
    showPath: route('dashboard.get_in_touches.show', ':id'),
  },

  relations: {},

  actions: {
      show: false,
  },
};
// eslint-disable-next-line no-new,no-undef
new DataTable(options);
