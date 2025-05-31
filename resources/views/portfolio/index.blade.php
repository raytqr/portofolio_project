@extends('layouts.app')

@section('title', $personalInfo['name'] . ' - Portfolio')

@section('content')
    @include('sections.header', ['personalInfo' => $personalInfo])
    @include('sections.skills', ['skillsData' => $skillsData])
    @include('sections.portfolio', ['portfolioData' => $portfolioData])
@endsection

@push('styles')
<style>
    /* Add specific page styles here if needed */
</style>
@endpush

@push('scripts')
<script>
    // Add specific page scripts here if needed
</script>
@endpush