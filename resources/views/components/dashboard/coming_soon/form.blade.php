<x-dashboard.layouts.app>
    <div class="container-fluid">
        <div class="card mb-4">
            <x-dashboard.form._form
                :action="$viewMode === 'add' ? route('dashboard.coming_soons.store') : route('dashboard.coming_soons.update', $comingSoon->id)"
                :method="$viewMode === 'add' ? 'post' : 'put'"
                :indexUrl="route('dashboard.coming_soons.index')"
                :viewMode="$viewMode"
            >
                <div class="row">
                    {{-- Name --}}
                    <div class="col-lg-6">
                        <div class="form-group required">
                            <x-dashboard.form._input
                                name="name"
                                :value="$comingSoon->name ?? ''"/>
                        </div>
                    </div>

                    {{-- Target DateTime --}}
                    <div class="col-lg-6">
                        <div class="form-group required">
                            <x-dashboard.form._input
                                type="datetime-local"
                                name="target_datetime"
                                :value="$comingSoon->target_datetime ?? ''"/>
                        </div>
                    </div>
                </div>
            </x-dashboard.form._form>
        </div>
    </div>

    <x-slot name="scripts">
        <script src="{{ asset('/js/dashboard/coming_soon/main.js') }}"></script>
    </x-slot>
</x-dashboard.layouts.app>
