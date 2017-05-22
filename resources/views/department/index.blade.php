<div class="container">
    @foreach ($departments as $department)
        {{ $department->id }}
        {{ $department->departmentName }}

    @endforeach
</div>
