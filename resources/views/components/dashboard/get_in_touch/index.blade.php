<x-dashboard.layouts.app>
    <div class="container-fluid">
        <div class="card mb-4">
            <x-dashboard.layouts.partials.card-header :createRoute="route('dashboard.get_in_touches.create')"/>

            <div class="card-body">
                <x-dashboard.datatable._filters_form>
                    <div class="col-md-4 form-group">
                        <x-dashboard.form._input name="id" type="number"/>
                    </div>

                    <div class="col-md-4 form-group">
                        <x-dashboard.form._input name="first_name"/>
                    </div>
                </x-dashboard.datatable._filters_form>

                <x-dashboard.datatable._table>
                    <th data-key="id">{{ __('label.id') }}</th>
                    <th data-key="first_name">{{ __('label.first_name') }}</th>
                    <th data-key="last_name">{{ __('label.last_name') }}</th>
                    <th data-key="email">{{ __('label.email') }}</th>
                    <th data-key="phone">{{ __('label.phone') }}</th>
                    <th data-key="message">{{ __('label.message') }}</th>
                    <th class="text-center">{{ __('label.actions') }}</th>
                </x-dashboard.datatable._table>
            </div>
        </div>
    </div>

    <x-slot name="scripts">
        <script src="{{ asset('/js/dashboard/get_in_touch/index.js') }}"></script>
    </x-slot>
</x-dashboard.layouts.app>




