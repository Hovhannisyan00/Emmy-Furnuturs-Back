<x-dashboard.layouts.app>
    <div class="container-fluid">
        <div class="card mb-4">
            <x-dashboard.layouts.partials.card-header :createRoute="route('dashboard.our-teams.create')"/>

            <div class="card-body">
                <x-dashboard.datatable._filters_form>
                    <div class="col-md-4 form-group">
                        <x-dashboard.form._input name="id" type="number"/>
                    </div>

                    <div class="col-md-4 form-group">
                        <x-dashboard.form._input name="name"/>
                    </div>
                </x-dashboard.datatable._filters_form>

                <x-dashboard.datatable._table>
                    <th data-key="id">{{ __('label.id') }}</th>
                    <th data-key="name">{{ __('label.name') }}</th>
                    <th data-key="email">{{ __('label.email') }}</th>
                    <th data-key="position">{{ __('label.position') }}</th>
                    <th class="text-center">{{ __('label.actions') }}</th>
                </x-dashboard.datatable._table>
            </div>
        </div>
    </div>

    <x-slot name="scripts">
        <script src="{{ asset('/js/dashboard/our-team/index.js') }}"></script>
    </x-slot>
</x-dashboard.layouts.app>




