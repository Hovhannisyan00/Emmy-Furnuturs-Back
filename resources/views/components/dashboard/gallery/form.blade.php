<x-dashboard.layouts.app>
    <div class="container-fluid">
        <div class="card mb-4">
             <x-dashboard.form._form
                :action="$viewMode === 'add' ? route('dashboard.galleries.store') : route('dashboard.galleries.update', $gallery->id)"
                :method="$viewMode === 'add' ? 'post' : 'put'"
                :indexUrl="route('dashboard.galleries.index')"
                :viewMode="$viewMode"
            >
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group required">
                            <x-dashboard.form._input name="name" :value="$gallery->name"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <x-dashboard.form.uploader._file
                            name="photo"
                            :value="$gallery->photo ?? null"
                            :configKey="$gallery->getFileConfigName()"
                        />
                    </div>
                </div>
            </x-dashboard.form._form>
        </div>
    </div>

    <x-slot name="scripts">
        <script src="{{ asset('/js/dashboard/gallery/main.js') }}"></script>
    </x-slot>
</x-dashboard.layouts.app>


