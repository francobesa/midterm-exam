@extends('template.main')

@section('content')
 
<h1>Laravel Features</h1>
    
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
<p> © Web Development Technologies - Midterm Exam </p>

@endsection