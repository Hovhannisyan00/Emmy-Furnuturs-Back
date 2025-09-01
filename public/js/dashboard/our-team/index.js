const options = {
  pathOptions: {
    searchPath: route('dashboard.our-teams.getListData'),
    deletePath: route('dashboard.our-teams.destroy', ':id'),
    editPath: route('dashboard.our-teams.edit', ':id'),
    showPath: route('dashboard.our-teams.show', ':id'),
  },

  relations: {},

  actions: {
      show: false,
  },
};
// eslint-disable-next-line no-new,no-undef
new DataTable(options);
