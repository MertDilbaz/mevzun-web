@props(['name', 'size' => '20'])

@php
$dimensions = match((string)$size) {
    '16' => 'w-4 h-4',
    '18' => 'w-[18px] h-[18px]',
    '20' => 'w-5 h-5',
    '24' => 'w-6 h-6',
    '28' => 'w-7 h-7',
    '32' => 'w-8 h-8',
    default => 'w-5 h-5'
};
@endphp

<svg {{ $attributes->merge(['class' => "$dimensions shrink-0 stroke-[1.5] text-current inline-block fill-none"]) }}
     viewBox="0 0 24 24"
     stroke="currentColor"
     stroke-linecap="round"
     stroke-linejoin="round"
     aria-hidden="true">
    @switch($name)
        @case('menu')
            <path d="M4 6h16M4 12h16M4 18h16" />
            @break

        @case('close')
        @case('x')
            <path d="M6 18L18 6M6 6l12 12" />
            @break

        @case('arrow-right')
            <path d="M5 12h14M13 5l7 7-7 7" />
            @break

        @case('arrow-up-right')
            <path d="M7 17L17 7M7 7h10v10" />
            @break

        @case('check')
            <path d="M5 13l4 4L19 7" />
            @break

        @case('folder')
            <path d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
            @break

        @case('calendar')
            <rect x="3" y="4" width="18" height="18" rx="2" ry="2" />
            <line x1="16" y1="2" x2="16" y2="6" />
            <line x1="8" y1="2" x2="8" y2="6" />
            <line x1="3" y1="10" x2="21" y2="10" />
            @break

        @case('ai')
        @case('spark')
            <path d="M12 3v3m0 12v3M3 12h3m12 0h3M6.34 6.34l2.12 2.12m7.08 7.08l2.12 2.12M6.34 17.66l2.12-2.12m7.08-7.08l2.12-2.12M9 12a3 3 0 106 0 3 3 0 00-6 0z" />
            @break

        @case('sparkle')
            <path d="M10.8 3.2c.75 3.53 2.67 5.45 6.2 6.2-3.53.75-5.45 2.67-6.2 6.2-.75-3.53-2.67-5.45-6.2-6.2 3.53-.75 5.45-2.67 6.2-6.2Z" />
            <path d="M18.2 15.2c.35 1.63 1.25 2.53 2.88 2.88-1.63.35-2.53 1.25-2.88 2.88-.35-1.63-1.25-2.53-2.88-2.88 1.63-.35 2.53-1.25 2.88-2.88Z" />
            @break

        @case('table')
            <rect x="3" y="3" width="18" height="18" rx="2" />
            <path d="M3 9h18M3 15h18M9 3v18" />
            @break

        @case('link')
            <path d="M10 13a5 5 0 007.54.54l3-3a5 5 0 00-7.07-7.07l-1.72 1.71" />
            <path d="M14 11a5 5 0 00-7.54-.54l-3 3a5 5 0 007.07 7.07l1.71-1.71" />
            @break

        @case('shield')
            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
            @break

        @case('database')
            <ellipse cx="12" cy="5" rx="8" ry="3" />
            <path d="M4 5v6c0 1.66 3.58 3 8 3s8-1.34 8-3V5" />
            <path d="M4 11v6c0 1.66 3.58 3 8 3s8-1.34 8-3v-6" />
            @break

        @case('bolt')
            <path d="M13 2L5 14h6l-1 8 8-12h-6l1-8z" />
            @break

        @case('monitor')
            <rect x="3" y="4" width="18" height="13" rx="1.5" />
            <path d="M8 21h8M12 17v4" />
            @break

        @case('search')
            <circle cx="11" cy="11" r="8" />
            <line x1="21" y1="21" x2="16.65" y2="16.65" />
            @break

        @case('quote')
            <path d="M3 21c3 0 7-1 7-8V5c0-1.25-.756-2.017-2-2H4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2 1 0 1 0 1 1v1c0 1-1 2-2 2s-1 .008-1 1.031V20c0 1 0 1 1 1z" />
            <path d="M15 21c3 0 7-1 7-8V5c0-1.25-.757-2.017-2-2h-4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2 1 0 1 0 1 1v1c0 1-1 2-2 2s-1 .008-1 1.031V20c0 1 0 1 1 1z" />
            @break

        @case('document')
            <path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z" />
            <polyline points="14 2 14 8 20 8" />
            <line x1="16" y1="13" x2="8" y2="13" />
            <line x1="16" y1="17" x2="8" y2="17" />
            <line x1="10" y1="9" x2="8" y2="9" />
            @break

        @case('users')
            <path d="M16 21v-2a4 4 0 00-4-4H6a4 4 0 00-4 4v2" />
            <circle cx="9" cy="7" r="4" />
            <path d="M22 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75" />
            @break

        @case('sun')
            <circle cx="12" cy="12" r="4" />
            <path d="M12 2v2M12 20v2M4.93 4.93l1.41 1.41M17.66 17.66l1.41 1.41M2 12h2M20 12h2M6.34 17.66l-1.41 1.41M19.07 4.93l-1.41 1.41" />
            @break

        @case('moon')
            <path d="M12 3a6 6 0 009 9 9 9 0 11-9-9z" />
            @break

        @default
            <circle cx="12" cy="12" r="9" />
    @endswitch
</svg>
