<x-dashboard.layouts.app>
    <div class="container-fluid">
        <div class="card mb-4">
             <x-dashboard.form._form
                :action="$viewMode === 'add' ? route('dashboard.histories.store') : route('dashboard.histories.update', $history->id)"
                :method="$viewMode === 'add' ? 'post' : 'put'"
                :indexUrl="route('dashboard.histories.index')"
                :viewMode="$viewMode"
            >
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group required">
                            <x-dashboard.form._input name="name" :value="$history->name"/>
                        </div>
                        <div class="form-group required">
                            <x-dashboard.form._textarea name="description"  :value="$history->description"
                            />
                        </div>
                        <div class="form-group required">
                            <x-dashboard.form._input name="year" :value="$history->year"/>
                        </div>
                    </div>
                </div>
            </x-dashboard.form._form>
        </div>
    </div>

    <x-slot name="scripts">
        <script src="{{ asset('/js/dashboard/history/main.js') }}"></script>
    </x-slot>
</x-dashboard.layouts.app>


