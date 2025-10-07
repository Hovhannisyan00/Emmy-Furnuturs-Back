<x-dashboard.layouts.app>
    <div class="container-fluid">
        <div class="card mb-4">
             <x-dashboard.form._form
                :action="$viewMode === 'add' ? route('dashboard.orders.store') : route('dashboard.orders.update', $order->id)"
                :method="$viewMode === 'add' ? 'post' : 'put'"
                :indexUrl="route('dashboard.orders.index')"
                :viewMode="$viewMode"
            >
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group required">
                            <x-dashboard.form._input name="status" :value="$order->status"/>
                        </div>
                    </div>
                </div>


                 <div class="row">
                     <div class="col-lg-6">
                         <div class="form-group required">
                             <x-dashboard.form._input name="total" :value="$order->total" type="number"/>
                         </div>
                     </div>
                 </div>
            </x-dashboard.form._form>
        </div>
    </div>

    <x-slot name="scripts">
        <script src="{{ asset('/js/dashboard/order/main.js') }}"></script>
    </x-slot>
</x-dashboard.layouts.app>


