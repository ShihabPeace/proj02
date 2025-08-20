sidebar-partial:
<aside id="sidebar" class="w-64 bg-gray-800 text-white flex-shrink-0">
    <div>
        <a href="{{ route('dashboard') }}" class="flex items-center px-3 py-3 text-sm font-medium rounded-md bg-gray-900 text-white">
            <i class="fas fa-tachometer-alt text-blue-400 mr-3"></i>
            <span>Dashboard</span>
        </a>
    </div>

    <div class="sidebar-dropdown">
        <button class="sidebar-dropdown-toggle flex items-center w-full px-3 py-3 text-sm font-medium rounded-md text-gray-300 hover:bg-gray-700 hover:text-white">
            <i class="fas fa-newspaper mr-3"></i>
            <span>Content Management</span>
            <i class="fas fa-chevron-down ml-auto text-xs"></i>
        </button>
        <div class="sidebar-dropdown-menu hidden pl-2 mt-1 space-y-1">
            <a href="{{ route('category-create') }}" class="flex items-center px-3 py-2 text-sm rounded-md text-gray-300 hover:bg-gray-700 hover:text-white pl-11">
                <i class="fas fa-pen mr-3 text-xs"></i>
                <span>Create Category</span>
            </a>
            <a href="{{ route('category-list') }}" class="flex items-center px-3 py-2 text-sm rounded-md text-gray-300 hover:bg-gray-700 hover:text-white pl-11">
                <i class="fas fa-pen mr-3 text-xs"></i>
                <span>Category List</span>
            </a>
            <a href="{{ route('all-post') }}" class="flex items-center px-3 py-2 text-sm rounded-md text-gray-300 hover:bg-gray-700 hover:text-white pl-11">
                <i class="fas fa-folder mr-3 text-xs"></i>
                <span>All Posts</span>
            </a>
            <a href="#" class="flex items-center px-3 py-2 text-sm rounded-md text-gray-300 hover:bg-gray-700 hover:text-white pl-11">
                <i class="fas fa-tags mr-3 text-xs"></i>
                <span>Tags</span>
            </a>
        </div>
    </div>
</aside>

                    
        