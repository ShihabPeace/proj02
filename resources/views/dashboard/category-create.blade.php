@extends('layouts.dashboard-app')

@section('content')
    <div class="flex h-screen overflow-hidden">
        @include('layouts.partials.sidebar')
        
        <div class="flex-1 overflow-auto">
            <header class="bg-white shadow-sm sticky top-0 z-10">
                <div class="flex justify-between items-center px-4 py-4 sm:px-6 lg:px-8">
                    <button class="md:hidden text-gray-500 focus:outline-none" id="mobile-menu-button">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                    
                    <div class="flex-1 max-w-md mx-4">
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-search text-gray-400"></i>
                            </div>
                            <input type="text" placeholder="Search dashboard..." class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md leading-5 bg-white placeholder-gray-500 focus:outline-none focus:placeholder-gray-400 focus:ring-1 focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        </div>
                    </div>
                    
                    <div class="flex items-center space-x-4">
                        <button class="p-1 text-gray-400 hover:text-gray-500 focus:outline-none">
                            <i class="fas fa-bell text-xl"></i>
                        </button>
                        <button class="p-1 text-gray-400 hover:text-gray-500 focus:outline-none">
                            <i class="fas fa-envelope text-xl"></i>
                        </button>
                        
                        <div class="relative">
                            <button id="user-menu-button" class="flex items-center space-x-2 focus:outline-none">
                                <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="User" class="w-8 h-8 rounded-full">
                                <span class="hidden md:inline text-gray-700">John Doe</span>
                                <i class="fas fa-chevron-down text-gray-500 text-xs"></i>
                            </button>
                            <div id="user-menu" class="hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-50 border border-gray-200">
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Your Profile</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Settings</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Notifications</a>
                                <div class="border-t border-gray-200"></div>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Sign out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            
            <main class="px-4 py-6 sm:px-6 lg:px-8">
                <div class="bg-white p-6 rounded-lg shadow-md mb-8 max-w-3xl mx-auto">
                    <h2 class="text-xl font-bold mb-4 text-gray-800">Create New Category</h2>
                    <form action="{{ route('sub_categories.store') }}" method="POST" class="space-y-6">
                        @csrf
                        <!-- name -->
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700">Name <span class="text-red-500">*</span></label>
                            <input type="text" id="name" name="name" required
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500">
                            @error('name')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Slug -->
                        {{-- <div>
                            <label for="slug" class="block text-sm font-medium text-gray-700">Slug <span class="text-red-500">*</span></label>
                            <input type="text" id="slug" name="slug" required
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500">
                        </div> --}}

                        <!-- Parent Category -->
                        <div>
                            <label for="category_id" class="block text-sm font-medium text-gray-700">Parent Category <span class="text-red-500">*</span></label>
                            <select id="category_id" name="category_id" required
                                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 bg-white focus:ring-blue-500 focus:border-blue-500">
                                    <option value="">Select Parent Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                            </select>
                        </div>

                        <!-- Description -->
                        <div>
                            <label for="description" class="block text-sm font-medium text-gray-700">Description <span class="text-red-500">*</span></label>
                            <textarea id="description" name="description" required rows="4"
                                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500"></textarea>
                                    @error('description')
                                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                        </div>

                        <!-- Submit Button -->
                        <div class="text-right">
                            <button type="submit"
                                    class="bg-blue-600 hover:bg-blue-700 text-white font-medium px-4 py-2 rounded-md">
                                Create Category
                            </button>
                        </div>
                    </form>
                </div>

            </main>
        </div>
    </div>
@endsection
{{-- 
@section('script')
@parent
    <script src="{{ asset('assets/js/category-create.js') }}"></script>
@endsection --}}
