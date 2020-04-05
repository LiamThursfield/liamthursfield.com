@extends('layouts.app')

@section('content')

    <!-- Image / Title Header -->
    <header class="container mx-auto px-4">
        <div
            class="
                flex flex-row items-center justify-center max-w-5xl min-h-screen mx-auto -mt-12 py-24 relative
                md:justify-between
            "
        >
            <div
                class="
                    hidden opacity-50 pr-8
                    md:block
                "
            >
                <img
                    alt="Developer Illustration"
                    src="/images/illustrations/undraw_developer_activity_bv83.svg"
                >
            </div>

            <div
                class="
                    text-center
                    md:pl-4 md:pt-8 md:text-left
                    lg:pl-8 lg:pt-16
                "
            >
                <h1
                    class="
                        font-bold font-serif leading-none text-6xl
                        md:text-5xl
                        lg:text-6xl
                    "
                >
                    Liam
                    <br>
                    Thursfield
                </h1>
                <h2
                    class="
                        font-bold ml-1 mt-3 text-yellow-600 text-xl tracking-widest
                        md:mt-1
                    "
                >
                    WEB DEVELOPER
                </h2>
            </div>

            <div
                class="absolute bottom-0 left-0 opacity-25 pb-2 right-0 text-center text-yellow-500"
            >
                Keep Scrolling
            </div>
        </div>
    </header>

    <!-- Page Break -->
    <div class="border-t border-yellow-500 mt-4 opacity-25"></div>

    <!-- Projects -->
    <section class="container mb-32 mt-12 mx-auto px-4">
        <h2 class="flex flex-col font-bold font-serif leading-none text-3xl">
            <span class="font-sans pb-1 tracking-widest text-yellow-600 text-base">
                FEATURED
            </span>
            Projects
        </h2>

        <featured-projects></featured-projects>
    </section>
@endsection