const options = {
  pathOptions: {
    searchPath: route('dashboard.banners.getListData'),
    deletePath: route('dashboard.banners.destroy', ':id'),
    editPath: route('dashboard.banners.edit', ':id'),
    showPath: route('dashboard.banners.show', ':id'),
  },

  relations: {},

  actions: {
      show: false,
  },
};
// eslint-disable-next-line no-new,no-undef
new DataTable(options);
