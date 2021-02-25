<nav class="navbar navbar-expand-lg {{$css}}" {!! $addOn !!}>
    @if ($image)
        <a class="navbar-brand" href="{{config('environment.home')}}">
            <img src="{{logo($cor)}}" alt="{{title()}}" height="{{$size}}">
        </a>    
    @endif
    {!! $prepend !!}
    <button class="navbar-toggler {{$css2}}" type="button" data-toggle="collapse" data-target="#{{$id}}" aria-controls="{{$id}}" aria-expanded="false" aria-label="Toggle navigation" {!! $addOn2 !!}>
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="{{$id}}">
        {!! $content !!}
    </div>
    {!! $append !!}
</nav>