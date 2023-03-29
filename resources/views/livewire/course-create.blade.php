
<form wire:submit.prevent="formSubmit">
    <div class="mb-6">
        @include('components.form-field', [
            'name' => 'name',
            'label' => 'Name',
            'type' => 'text',
            'placeholder' => 'Enter name',
            'required' => 'required',
        ])
    </div>
    <div class="mb-6">
        @include('components.form-field', [
        'name' => 'image',
        'label' => 'Image',
        'type' => 'text',
        'placeholder' => 'Enter image url',
        'required' => 'required',
        ])
    </div>
    <div class="mb-6">
        @include('components.form-field', [
        'name' => 'description',
        'label' => 'Description',
        'type' => 'textarea',
        'placeholder' => 'Enter name',
        'required' => 'required',
        ])
    </div>

    <div class="mb-6">
        @include('components.form-field', [
        'name' => 'price',
        'label' => 'Price',
        'type' => 'number',
        'placeholder' => 'Add price',
        'required' => 'required',
        ])
    </div>




    @include('components.wire-loading-btn')
</form>
