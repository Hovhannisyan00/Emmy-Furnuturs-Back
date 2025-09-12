const options = {
  pathOptions: {
    searchPath: route('dashboard.coming_soons.getListData'),
    deletePath: route('dashboard.coming_soons.destroy', ':id'),
    editPath: route('dashboard.coming_soons.edit', ':id'),
    showPath: route('dashboard.coming_soons.show', ':id'),
  },

  relations: {},

  actions: {
      show: false,
  },
};
// eslint-disable-next-line no-new,no-undef
new DataTable(options);
