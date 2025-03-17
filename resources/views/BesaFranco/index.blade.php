@extends('template.main')

@section('content')

<div class="col-md-9 col-lg-12 col-xl-12 text-center grid-item fw-bold fs-3 rounded-header">
    Laravel Features
</div>

    
<!-- Table for category -->
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Feature Name</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($features as $feature)
        <tr>
            <td>{{$feature->id}}</td>
            <td>{{$feature->name}}</td>
            <td>{{$feature->description}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
<p> © 2025 Web Development Technologies - Midterm Exam </p>

@endsection
