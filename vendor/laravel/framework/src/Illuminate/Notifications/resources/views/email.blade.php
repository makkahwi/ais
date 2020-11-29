@component('mail::message')
<img src="{{ asset('img/wLogo.png') }}" alt="" width="100%">

<hr><br>

<h2>
    This is an auto generated confirmation email from {{ config('app.name') }}<br><br>

    {{-- Intro Lines --}}
    @foreach ($introLines as $line)
        {{ $line }}
    @endforeach
</h2>

<br>

{{-- Greeting --}}
@if (! empty($greeting))
    # {{ $greeting }}
@else
    @if ($level === 'error')
        # @lang('Whoops!')
    @else
        # @lang('Hello!')
    @endif
@endif

{{-- Action Button --}}
@isset($actionText)
    <?php
        switch ($level) {
            case 'success':
            case 'error':
                $color = $level;
                break;
            default:
                $color = 'success';
        }
    ?>
    @component('mail::button', ['url' => $actionUrl, 'color' => $color])
        {{ $actionText }}
    @endcomponent
@endisset

{{-- Outro Lines --}}
@foreach ($outroLines as $line)
    {{ $line }}
@endforeach

{{-- Salutation --}}
@if (! empty($salutation))
    {{ $salutation }}
@else
    @lang('Regards'),<br>
    {{ config('app.name') }}
@endif

{{-- Subcopy --}}
@isset($actionText)
    @slot('subcopy')
        @lang(
            "If you’re having trouble clicking the \":actionText\" button, copy and paste the URL below\n".
            'into your web browser:',
            [
                'actionText' => $actionText,
            ]
        ) <span class="break-all">[{{ $displayableActionUrl }}]({{ $actionUrl }})</span>
    @endslot
@endisset
@endcomponent
