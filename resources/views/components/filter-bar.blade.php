<header 
    class="flex flex-wrap px-[15px] lg:pt-0 pt-[15px] w-full gap-5 pb-0 items-center justify-between mb-6"
    aria-labelledby="action-table-title"
>

    <div class="flex flex-wrap  md:flex-row items-start md:items-center  gap-4 justify-between w-full ">
        
    <h2
        id="action-table-title"
        class="text-lg font-bold mr-[auto] text-black"
    >
    Smart Filter
    </h2>
        <div class="relative grow-0 shrink-0 basis-full md:order-[0] order-2 md:basis-[260px]">
            <label for="action-search" class="sr-only">
                Search actions
            </label>

            <svg
                class="w-5 h-5 absolute left-3 top-1/2 -translate-y-1/2 text-gray-400 pointer-events-none"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
                aria-hidden="true"
                focusable="false"
            >
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
            </svg>

            <input
                id="action-search"
                type="search"
                placeholder="Search actions..."
                aria-label="Search actions"
                class="pl-10 pr-4 py-2.5 bg-[#FAFAFB] border border-gray-300 rounded-lg w-full text-sm
                       focus:outline-none focus:ring-2 focus:ring-primary-color-10 focus:ring-offset-2 focus:border-transparent"
            />
        </div>

        <div class="flex items-center gap-3">
            <!-- Filter Button -->
            <div class="relative">
                <button
                    id="filter-button"
                    type="button"
                    class="px-4 py-2.5 border border-gray-300 rounded-lg text-sm font-medium
                           text-white bg-primary-color-500 flex items-center gap-2
                           focus:outline-none focus:ring-2 focus:ring-primary-color-10 focus:ring-offset-2
                           transition-colors"
                    aria-haspopup="true"
                    aria-expanded="false"
                    aria-controls="filter-dropdown"
                    aria-label="Open filter options"
                >
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"/>
                    </svg>
                    Filter
                    <span id="filter-count" class="hidden ml-1 px-2 py-0.5 bg-white text-primary-color-500 rounded-full text-xs font-semibold" aria-live="polite">
                        0
                    </span>
                </button>

                <!-- Filter Dropdown -->
                <div
                    id="filter-dropdown"
                    role="menu"
                    aria-labelledby="filter-button"
                    class="hidden absolute right-0 max-h-[300px] [&::-webkit-scrollbar]:w-2 
    [&::-webkit-scrollbar-track]:bg-gray-100 
    [&::-webkit-scrollbar-thumb]:bg-primary-color-500 
    [&::-webkit-scrollbar-thumb]:rounded-full 
    [&::-webkit-scrollbar-thumb]:hover:bg-primary-color-500 overflow-y-scroll mt-2 w-72 bg-white rounded-lg shadow-xl border border-gray-200 z-50 overflow-hidden"
                >
                    <div class="p-5">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-base font-semibold text-gray-900">Filters</h3>
                        </div>

                        <!-- Priority Filters -->
                        <fieldset class="mb-6">
                            <legend class="text-sm font-medium text-gray-700 mb-3">Priority</legend>
                            <div class="space-y-1">
                                <label class="flex items-center py-2 px-3 cursor-pointer hover:bg-gray-50 rounded-md transition-colors">
                                    <input
                                        type="checkbox"
                                        value="high"
                                        data-label="High Priority"
                                        data-category="priority"
                                        class="filter-checkbox w-4 h-4 text-teal-600 border-gray-300 rounded focus:ring-teal-500 focus:ring-2"
                                        aria-labelledby="priority-high-label"
                                    />
                                    <span id="priority-high-label" class="ml-3 text-sm text-gray-700">High Priority</span>
                                </label>
                                <label class="flex items-center py-2 px-3 cursor-pointer hover:bg-gray-50 rounded-md transition-colors">
                                    <input
                                        type="checkbox"
                                        value="medium"
                                        data-label="Medium Priority"
                                        data-category="priority"
                                        class="filter-checkbox w-4 h-4 text-teal-600 border-gray-300 rounded focus:ring-teal-500 focus:ring-2"
                                        aria-labelledby="priority-medium-label"
                                    />
                                    <span id="priority-medium-label" class="ml-3 text-sm text-gray-700">Medium Priority</span>
                                </label>
                                <label class="flex items-center py-2 px-3 cursor-pointer hover:bg-gray-50 rounded-md transition-colors">
                                    <input
                                        type="checkbox"
                                        value="low"
                                        data-label="Low Priority"
                                        data-category="priority"
                                        class="filter-checkbox w-4 h-4 text-teal-600 border-gray-300 rounded focus:ring-teal-500 focus:ring-2"
                                        aria-labelledby="priority-low-label"
                                    />
                                    <span id="priority-low-label" class="ml-3 text-sm text-gray-700">Low Priority</span>
                                </label>
                            </div>
                        </fieldset>

                        <!-- Status Filters -->
                        <fieldset>
                            <legend class="text-sm font-medium text-gray-700 mb-3">Status</legend>
                            <div class="space-y-1">
                                <label class="flex items-center py-2 px-3 cursor-pointer hover:bg-gray-50 rounded-md transition-colors">
                                    <input
                                        type="checkbox"
                                        value="pending"
                                        data-label="Pending"
                                        data-category="status"
                                        class="filter-checkbox w-4 h-4 text-teal-600 border-gray-300 rounded focus:ring-teal-500 focus:ring-2"
                                        aria-labelledby="status-pending-label"
                                    />
                                    <span id="status-pending-label" class="ml-3 text-sm text-gray-700">Pending</span>
                                </label>
                                <label class="flex items-center py-2 px-3 cursor-pointer hover:bg-gray-50 rounded-md transition-colors">
                                    <input
                                        type="checkbox"
                                        value="in-progress"
                                        data-label="In Progress"
                                        data-category="status"
                                        class="filter-checkbox w-4 h-4 text-teal-600 border-gray-300 rounded focus:ring-teal-500 focus:ring-2"
                                        aria-labelledby="status-inprogress-label"
                                    />
                                    <span id="status-inprogress-label" class="ml-3 text-sm text-gray-700">In Progress</span>
                                </label>
                                <label class="flex items-center py-2 px-3 cursor-pointer hover:bg-gray-50 rounded-md transition-colors">
                                    <input
                                        type="checkbox"
                                        value="completed"
                                        data-label="Completed"
                                        data-category="status"
                                        class="filter-checkbox w-4 h-4 text-teal-600 border-gray-300 rounded focus:ring-teal-500 focus:ring-2"
                                        aria-labelledby="status-completed-label"
                                    />
                                    <span id="status-completed-label" class="ml-3 text-sm text-gray-700">Completed</span>
                                </label>
                                <label class="flex items-center py-2 px-3 cursor-pointer hover:bg-gray-50 rounded-md transition-colors">
                                    <input
                                        type="checkbox"
                                        value="overdue"
                                        data-label="Overdue"
                                        data-category="status"
                                        class="filter-checkbox w-4 h-4 text-teal-600 border-gray-300 rounded focus:ring-teal-500 focus:ring-2"
                                        aria-labelledby="status-overdue-label"
                                    />
                                    <span id="status-overdue-label" class="ml-3 text-sm text-gray-700">Overdue</span>
                                </label>
                            </div>
                        </fieldset>
                    </div>

                
                </div>
            </div>

            <button
                id="clear-all-btn"
                type="button"
                class="hidden text-sm text-teal-600 hover:text-teal-700 font-medium focus:outline-none focus-visible:underline"
                aria-label="Clear all active filters"
            >
                Clear All
            </button>
        </div>
    </div>

    <div 
        id="filter-pills-container" 
        class="hidden w-full hidden md:flex flex-wrap gap-2 mt-3 md:mt-0"
        role="region"
        aria-live="polite"
        aria-label="Active filters"
    >
    </div>
</header>
