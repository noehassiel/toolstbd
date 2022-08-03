@extends('layouts.main')


@push('seo')

@endpush

@push('stylesheets')

@endpush

@section('content')

<section class="mainBanner add-margin-bottom-x2 position-relative">

    <div class="bannerTitle">
        <div class="title">
            <div class="title-1">somos</div>
            <div class="title-2">diferentes</div>
        </div>
    </div>

    <div class="bannerImage position-absolute w-100 h-100" >
        <img src="{{ asset('img/banner.jpg') }}" alt="">
    </div>
</section>

@endsection

@push('scripts')

<script>
        let textWrapper = document.querySelector('.title-1')
        textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

        let textWrapper2 = document.querySelector('.title-2')
        textWrapper2.innerHTML = textWrapper2.textContent.replace(/\S/g, "<span class='letter'>$&</span>");


        let tl = gsap.timeline();

        tl.to('.title-1 .letter', {opacity: 1, y: '0', clipPath: 'polygon(0 0, 100% 0, 100% 100%, 0 100%)', stagger: '.03'})
        tl.to('.title-2 .letter', {opacity: 1, y: '0', clipPath: 'polygon(0 0, 100% 0, 100% 100%, 0 100%)',stagger: '.03'}, "-=.7")

</script>

@endpush
