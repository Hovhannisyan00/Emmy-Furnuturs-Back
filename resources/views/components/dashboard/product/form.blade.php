<x-dashboard.layouts.app>
    <div class="container-fluid">
        <div class="card mb-4">
             <x-dashboard.form._form
                :action="$viewMode === 'add' ? route('dashboard.products.store') : route('dashboard.products.update', $product->id)"
                :method="$viewMode === 'add' ? 'post' : 'put'"
                :indexUrl="route('dashboard.products.index')"
                :viewMode="$viewMode"
            >
            <div class="row">
    <div class="col-lg-3">
        <div class="form-group">
            <x-dashboard.form.uploader._file
                name="photo1"
                :value="$product->photo1 ?? null"
                :configKey="$product->getFileConfigName()"/>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="form-group">
            <x-dashboard.form.uploader._file
                name="photo2"
                :value="$product->photo2 ?? null"
                :configKey="$product->getFileConfigName()"/>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="form-group">
            <x-dashboard.form.uploader._file
                name="photo3"
                :value="$product->photo3 ?? null"
                :configKey="$product->getFileConfigName()"/>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="form-group">
            <x-dashboard.form.uploader._file
                name="photo4"
                :value="$product->photo4 ?? null"
                :configKey="$product->getFileConfigName()"   />
        </div>
    </div>
</div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group required">
                            <x-dashboard.form._input name="name" :value="$product->name"/>
                        </div>
                        <div class="form-group required">
                            <x-dashboard.form._input name="price" :value="$product->price" type="number"/>
                        </div>
                        <div class="form-group">
                            <x-dashboard.form._textarea name="description"  :value="$product->description"
                            />
                        </div>
                    </div>
                    <div class="col-lg-6">

                        <div class="form-group required">
                            <x-dashboard.form._input name="SKU" :value="$product->SKU"/>
                        </div>

                        <div class="form-group required">
                            <x-dashboard.form._input name="quantity" :value="$product->quantity" type="number"/>
                        </div>
                            
                        <div class="form-group required">
                            <x-dashboard.form._select
                                name="category_id"
                                :data="[]"
                                :value="$product->category_id"
                            />
                        </div>
                        <div class="form-group required">
                            <x-dashboard.form._input name="discount" :value="$product->discount" type="number"/>
                        </div>
                    </div>
                </div>
            </x-dashboard.form._form>
        </div>
    </div>
    <script>
        const categoriesUrl = "{{ route('dashboard.categories.list') }}";
    </script>
    <x-slot name="scripts">
        <script src="{{ asset('/js/dashboard/product/main.js') }}"></script>
    </x-slot>
</x-dashboard.layouts.app>


