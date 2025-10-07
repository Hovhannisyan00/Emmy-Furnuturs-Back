const options = {
  pathOptions: {
    searchPath: route('dashboard.partners.getListData'),
    deletePath: route('dashboard.partners.destroy', ':id'),
    editPath: route('dashboard.partners.edit', ':id'),
    showPath: route('dashboard.partners.show', ':id'),
  },

  relations: {},

  actions: {
      show: false,
  },
};
// eslint-disable-next-line no-new,no-undef
new DataTable(options);
