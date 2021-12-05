@extends('layouts.app')

@section('content')
<x-list-header createUrl="{{ route('projects.create') }}" />

<div class="card mb-4">
    <div class="card-header">
        @lang('Projects')
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">@lang('Name')</th>
                    <th scope="col" style="width: 170px;">@lang('Actions')</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                <tr>
                    <th scope="row">{{ $project->id }}</th>
                    <td>{{ $project->name }}</td>
                    <td>
                        <div class="tw-flex tw-items-center">
                            <x-btn.view class="tw-mr-2" url="{{ route('projects.show', $project->id) }}" />
                            <x-btn.edit class="tw-mr-2" url="{{ route('projects.edit', $project->id) }}" />
                            <x-btn.delete url="{{ route('projects.destroy', $project->id) }}" />
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div>
            {{ $projects->links() }}
        </div>
    </div>
</div>
@endsection