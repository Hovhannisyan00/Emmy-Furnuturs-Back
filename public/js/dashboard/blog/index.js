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
};
// eslint-disable-next-line no-new,no-undef
new DataTable(options);
