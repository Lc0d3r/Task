@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8 bg-white p-8 rounded-xl shadow-md border border-gray-100">
        <div>
            <h2 class="text-center text-3xl font-extrabold text-indigo-950">EHOPn Admin Portal</h2>
            <p class="mt-2 text-center text-sm text-gray-600">Sign in to manage ecosystem data</p>
        </div>
        
        @if(session('error'))
            <div class="bg-red-50 text-red-700 p-3 rounded-lg text-sm border border-red-200">{{ session('error') }}</div>
        @endif

        <form class="mt-8 space-y-6" action="{{ route('admin.login.submit') }}" method="POST">
            @csrf
            <div class="rounded-md shadow-sm space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Admin Email</label>
                    <input type="email" name="email" required class="appearance-none rounded-lg relative block w-full px-3 py-2 border border-gray-300 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="admin@ehopn.com">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                    <input type="password" name="password" required class="appearance-none rounded-lg relative block w-full px-3 py-2 border border-gray-300 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="••••••••">
                </div>
            </div>

            <div>
                <button type="submit" class="group relative w-full flex justify-center py-2.5 px-4 border border-transparent text-sm font-medium rounded-lg text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition">
                    Access Dashboard
                </button>
            </div>
        </form>
    </div>
</div>
@endsection