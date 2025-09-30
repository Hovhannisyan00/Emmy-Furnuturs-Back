<x-dashboard.layouts.app>
    <div class="container-fluid">
        <div class="card mb-4">
            <x-dashboard.form._form
                :action="$viewMode === 'add' ? route('dashboard.banners.store') : route('dashboard.banners.update', $banner->id)"
                :method="$viewMode === 'add' ? 'post' : 'put'"
                :indexUrl="route('dashboard.banners.index')"
                :viewMode="$viewMode"
            >
                <div class="row">
                    <!-- Left side: Photo uploader + Checkbox -->
                    <div class="col-lg-6">
                        <div class="form-group">
                            <x-dashboard.form.uploader._file
                                name="photo"
                                :value="$banner->photo ?? null"
                                :configKey="$banner->getFileConfigName()"
                            />
                        </div>

                        <div class="form-group required">
                            <x-dashboard.form._checkbox
                                name="is_active"
                                :checked="$banner->is_active ?? 0"
                                title="Is Active"
                            />
                        </div>
                    </div>

                    <!-- Right side: Name input -->
                    <div class="col-lg-6">
                        <div class="form-group required">
                            <x-dashboard.form._input name="name" :value="$banner->name"/>
                        </div>
                    </div>
                </div>
            </x-dashboard.form._form>
        </div>
    </div>

    <x-slot name="scripts">
        <script src="{{ asset('/js/dashboard/banner/main.js') }}"></script>
    </x-slot>
</x-dashboard.layouts.app>
