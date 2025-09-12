<x-dashboard.layouts.app>
    <div class="container-fluid">
        <div class="card mb-4">
            <x-dashboard.form._form
                :action="$viewMode === 'add' ? route('dashboard.get_in_touches.store') : route('dashboard.get_in_touches.update', $getInTouch->id)"
                :method="$viewMode === 'add' ? 'post' : 'put'"
                :indexUrl="route('dashboard.get_in_touches.index')"
                :viewMode="$viewMode"
            >
                <div class="row">
                    {{-- First Name --}}
                    <div class="col-lg-6">
                        <div class="form-group required">
                            <x-dashboard.form._input name="first_name" :value="$getInTouch->first_name ?? ''"/>
                        </div>
                    </div>

                    {{-- Last Name --}}
                    <div class="col-lg-6">
                        <div class="form-group required">
                            <x-dashboard.form._input name="last_name" :value="$getInTouch->last_name ?? ''"/>
                        </div>
                    </div>

                    {{-- Email --}}
                    <div class="col-lg-6">
                        <div class="form-group required">
                            <x-dashboard.form._input type="email" name="email" :value="$getInTouch->email ?? ''"/>
                        </div>
                    </div>

                    {{-- Phone --}}
                    <div class="col-lg-6">
                        <div class="form-group required">
                            <x-dashboard.form._input name="phone" :value="$getInTouch->phone ?? ''"/>
                        </div>
                    </div>

                    {{-- Message --}}
                    <div class="col-lg-12">
                        <div class="form-group required">
                            <x-dashboard.form._textarea name="message" :value="$getInTouch->message ?? ''"></x-dashboard.form._textarea>
                        </div>
                    </div>
                </div>
            </x-dashboard.form._form>
        </div>
    </div>

    <x-slot name="scripts">
        <script src="{{ asset('/js/dashboard/get_in_touch/main.js') }}"></script>
    </x-slot>
</x-dashboard.layouts.app>
