<x-dashboard.layouts.app>
    <div class="container-fluid">
        <div class="card mb-4">
             <x-dashboard.form._form
                :action="$viewMode === 'add' ? route('dashboard.categories.store') : route('dashboard.categories.update', $categorie->id)"
                :method="$viewMode === 'add' ? 'post' : 'put'"
                :indexUrl="route('dashboard.categories.index')"
                :viewMode="$viewMode"
            >
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group required">
                            <x-dashboard.form._input name="name" :value="$categorie->name"/>
                        </div>
                        <div class="form-group required">
                            <x-dashboard.form._textarea name="description" class="ckeditor5" :value="$categorie->description"
                            />
                        </div>
                    </div>
                </div>
            </x-dashboard.form._form>
        </div>
    </div>

    <x-slot name="scripts">
        <script src="{{ asset('/js/dashboard/categorie/main.js') }}"></script>
    </x-slot>
</x-dashboard.layouts.app>


