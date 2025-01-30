@extends('layouts.app')

@section('title', 'About Me')

@section('content')
<div class="bg-white py-16 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div>
                <h1 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">
                    About Me
                </h1>
                <div class="mt-6 text-gray-500 space-y-6">
                    <p>I provide counselling and psychotherapy to individuals in South Yorkshire and online.</p>
                    <p>I have spent over 15 years working in the education sector and have had the privilege of working in the role of a teacher. My career direction changed when I saw the struggles with mental health and wellbeing cropping up regularly.</p>
                    <p>As well as working in private practice, I am currently volunteering my services as a counsellor/psychotherapist in the mental health/wellbeing charity sector.</p>
                </div>
                <div class="mt-8">
                    <h2 class="text-xl font-semibold text-gray-900">Memberships & Qualifications</h2>
                    <ul class="mt-4 space-y-2">
                        <li>Registered member of BACP</li>
                        <li>Member of NCPS</li>
                        <li>Enhanced DBS certificate</li>
                        <li>Professional indemnity insurance</li>
                    </ul>
                </div>
            </div>
            <div class="relative h-96">
                <img src="{{ asset('images/about-image.jpg') }}" alt="Counselling room" class="rounded-lg shadow-lg object-cover h-full w-full">
            </div>
        </div>
    </div>
</div>
@endsection