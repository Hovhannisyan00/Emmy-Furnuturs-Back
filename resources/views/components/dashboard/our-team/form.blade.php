<x-dashboard.layouts.app>
    <div class="container-fluid">
        <div class="card mb-4">
             <x-dashboard.form._form
                :action="$viewMode === 'add' ? route('dashboard.our-teams.store') : route('dashboard.our-teams.update', $ourTeam->id)"
                :method="$viewMode === 'add' ? 'post' : 'put'"
                :indexUrl="route('dashboard.our-teams.index')"
                :viewMode="$viewMode"
            >
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group required">
                            <x-dashboard.form._input name="name" :value="$ourTeam->name"/>
                        </div>

{{--                        <div class="form-group">--}}
{{--                            <x-dashboard.form.uploader._file--}}
{{--                                name="photo"--}}
{{--                                :value="$ourTeam->photo"--}}
{{--                                :crop="true"--}}
{{--                                :configKey="$ourTeam->getFileConfigName()"/>--}}
{{--                        </div>--}}
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group required">
                            <x-dashboard.form._input name="position" :value="$ourTeam->position"/>
                        </div>
                        <div class="form-group required">
                            <x-dashboard.form._input name="email" :value="$ourTeam->email"/>
                        </div>
                        <div class="form-group required">
                            <x-dashboard.form._input name="phone" type="phone" :value="$ourTeam->phone"/>
                        </div>
                    </div>
                </div>
             </x-dashboard.form._form>
        </div>
    </div>

    <x-slot name="scripts">
        <script src="{{ asset('/js/dashboard/our-team/main.js') }}"></script>
    </x-slot>
</x-dashboard.layouts.app>


