<div class="container">
    @foreach ($emdesignations as $emdesignation)
        {{ $emdesignation->id }}
        {{ $emdesignation->accountinfo->firstname}}
        {{ $emdesignation->accountinfo->lastname}}
        {{ $emdesignation->designation->designationName}}
        {{ $emdesignation->dateStart}}
        {{ $emdesignation->dateEnd}}
        {{ $emdesignation->shiftStart}}
        {{ $emdesignation->shiftEnd}}

    @endforeach
</div>
