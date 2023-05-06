@props(['size' => 35, 'color' => 'gray'])

@php
    switch ($color) {
        case 'gray':
            $col = '#374151';

            break;

        case 'white':
            $col = '#ffffff';

            break;

        default:
            $col = '#374151';

            break;
    }
@endphp

<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="{{ $size }}"
    height="{{ $size }}" viewBox="0,0,255.98958,255.98958" style="fill:#000000;">
    <g fill="#ff001c" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter"
        stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
        font-size="none" text-anchor="none" style="mix-blend-mode: normal">
        <g transform="scale(5.12,5.12)">
            <path
                d="M7,4c-1.65,0 -3,1.35 -3,3v36c0,1.65 1.35,3 3,3h36c1.65,0 3,-1.35 3,-3v-36c0,-1.65 -1.35,-3 -3,-3zM22.5,13c5.24,0 9.5,4.26 9.5,9.5c0,2.26 -0.78937,4.3407 -2.10937,5.9707l7.82031,7.81836l-1.42188,1.42188l-7.81836,-7.82031c-1.63,1.32 -3.7107,2.10938 -5.9707,2.10938c-5.24,0 -9.5,-4.26 -9.5,-9.5c0,-5.24 4.26,-9.5 9.5,-9.5zM22.5,15c-4.14214,0 -7.5,3.35786 -7.5,7.5c0,4.14214 3.35786,7.5 7.5,7.5c4.14214,0 7.5,-3.35786 7.5,-7.5c0,-4.14214 -3.35786,-7.5 -7.5,-7.5z">
            </path>
        </g>
    </g>
</svg>
