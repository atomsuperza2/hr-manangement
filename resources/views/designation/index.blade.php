<div class="container">
    @foreach ($designations as $designation)
        {{ $designation->id }}
        {{ $designation->designationName}}
        {{ $designation->department->departmentName}}

    @endforeach
</div>
