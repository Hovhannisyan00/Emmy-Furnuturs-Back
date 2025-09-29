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
                     <div class="col-lg-6">
                         <div class="form-group">
                             <x-dashboard.form.uploader._file
                                 name="photo"
                                 :value="$product->photo"
                                 :configKey="$product->getFileConfigName()"/>
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
                        <div class="form-group required">
                            <x-dashboard.form._textarea name="description"  :value="$product->description"
                            />
                        </div>
                    </div>
                    <div class="col-lg-6">

                        <div class="form-group required">
                            <x-dashboard.form._input name="SKU" :value="$product->sku"/>
                        </div>

                        <div class="form-group required">
                            <x-dashboard.form._input name="quantity" :value="$product->quantity" type="number"/>
                        </div>

                        <div class="form-group required">
                            <x-dashboard.form._select
                                name="category_id"
                                :data="[]"
                                :value="$product->categorie_id ?? ''"
                                defaultOption="true"
                                data-selected="{{ $product->categorie_id ?? '' }}"
                            />
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


