@extends('layouts.app')
@section('content')
    <div class="overflow-x-auto relative">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    STT
                </th>
                <th scope="col" class="py-3 px-6">
                    File Name
                </th>
                <th scope="col" class="py-3 px-6">
                    Time
                </th>
                <th scope="col" class="py-3 px-6">
                    Action
                </th>
            </tr>
            </thead>
            <tbody>
            @forelse ($logs as $log)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $log->id }}
                    </th>
                    <td class="py-4 px-6">
                        {{ $log->file_name }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $log->created_at }}
                    </td>
                    <td class="py-4 px-6">
                        <a href="{{ route('delete',['id' => $log->id]) }}">Delete</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="2"></td>
                    <td><p>No data</p></td>
                    <td colspan="2"></td>
                </tr>
            @endforelse
            </tbody>
        </table>
        {{ $logs->links() }}
    </div>
@endsection
