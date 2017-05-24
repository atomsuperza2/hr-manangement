<div class="container">
    @foreach ($emdesignations as $emdesignation)
        {{ $emdesignation->id }}
        
        {{ $emdesignation->designation->designationName}}
        {{ $emdesignation->dateStart}}
        {{ $emdesignation->dateEnd}}
        {{ $emdesignation->shiftStart}}
        {{ $emdesignation->shiftEnd}}

    @endforeach
</div>
