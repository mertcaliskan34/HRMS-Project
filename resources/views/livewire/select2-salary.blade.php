<div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
    <div class="input-block mb-3 form-focus select-focus">
        <select wire:model="selectedOption1" class="select2 floating select">
            @foreach ($options1 as $option)
                <option>{{ $option }}</option>
            @endforeach
        </select>
        <label class="focus-label">Role</label>
    </div>
</div>
