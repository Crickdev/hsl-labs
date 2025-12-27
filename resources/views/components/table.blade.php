<div class="lg:overflow-hidden overflow-scroll">
<table 
    class="w-full  border-collapse" 
    role="table" 
    aria-label="Action Tracker Table" 
    aria-describedby="action-table-caption"
>
    <caption id="action-table-caption" class="sr-only">
        Daily operations action tracker showing tasks, assignees, priorities, and current status
    </caption>

    <thead>
        <tr>
            <th 
                scope="col" 
                class="text-left whitespace-nowrap py-3 px-4 text-sm font-semibold text-gray-600 sortable" 
                data-sort="sn"
                aria-sort="none"
            >
                <button class="flex items-center gap-2 focus:outline-none focus-visible:ring-2 focus-visible:ring-primary-color-500 rounded">
                    SN
                    <span class="sort-icon" aria-hidden="true">
                       <svg width="9" height="5" viewBox="0 0 9 5" fill="none" xmlns="http://www.w3.org/2000/svg">
<path opacity="0.2" d="M3.44785 4.81539C3.40678 4.78714 3.23116 4.68047 3.08671 4.5811C2.17819 3.99854 0.691128 2.47881 0.237221 1.68339C0.164284 1.56259 0.00991372 1.25718 0 1.09401C0 0.937652 0.0509848 0.788602 0.154371 0.646371C0.298828 0.46907 0.526135 0.326839 0.794513 0.248904C0.98075 0.198734 1.53804 0.120799 1.54796 0.120799C2.15765 0.0428641 3.14831 0 4.24307 0C5.28613 0 6.23643 0.0428641 6.85533 0.106673C6.86525 0.11398 7.55779 0.191914 7.79501 0.277155C8.22838 0.433512 8.49747 0.738919 8.49747 1.06576V1.09401C8.48685 1.30687 8.21776 1.75451 8.20785 1.75451C7.75323 2.50706 6.33911 3.99172 5.39943 4.58841C5.39943 4.58841 5.15796 4.75645 5.00713 4.82952C4.79045 4.9435 4.52207 5 4.25369 5C3.95416 5 3.67516 4.93619 3.44785 4.81539Z" fill="#030229"/>
</svg>

                    </span>
                </button>
            </th>

            <th 
                scope="col" 
                class="text-left whitespace-nowrap py-3 px-4 text-sm font-semibold text-gray-600 sortable" 
                data-sort="action"
                aria-sort="none"
            >
                <button class="flex items-center gap-2 focus:outline-none focus-visible:ring-2 focus-visible:ring-primary-color-500 rounded">
                    Action Tracker
                    <span class="sort-icon" aria-hidden="true">
                       <svg width="9" height="5" viewBox="0 0 9 5" fill="none" xmlns="http://www.w3.org/2000/svg">
<path opacity="0.2" d="M3.44785 4.81539C3.40678 4.78714 3.23116 4.68047 3.08671 4.5811C2.17819 3.99854 0.691128 2.47881 0.237221 1.68339C0.164284 1.56259 0.00991372 1.25718 0 1.09401C0 0.937652 0.0509848 0.788602 0.154371 0.646371C0.298828 0.46907 0.526135 0.326839 0.794513 0.248904C0.98075 0.198734 1.53804 0.120799 1.54796 0.120799C2.15765 0.0428641 3.14831 0 4.24307 0C5.28613 0 6.23643 0.0428641 6.85533 0.106673C6.86525 0.11398 7.55779 0.191914 7.79501 0.277155C8.22838 0.433512 8.49747 0.738919 8.49747 1.06576V1.09401C8.48685 1.30687 8.21776 1.75451 8.20785 1.75451C7.75323 2.50706 6.33911 3.99172 5.39943 4.58841C5.39943 4.58841 5.15796 4.75645 5.00713 4.82952C4.79045 4.9435 4.52207 5 4.25369 5C3.95416 5 3.67516 4.93619 3.44785 4.81539Z" fill="#030229"/>
</svg>

                    </span>
                </button>
            </th>

            <th 
                scope="col" 
                class="text-left whitespace-nowrap py-3 px-4 text-sm font-semibold text-gray-600 sortable" 
                data-sort="assignee"
                aria-sort="none"
            >
                <button class="flex items-center gap-2 focus:outline-none focus-visible:ring-2 focus-visible:ring-primary-color-500 rounded">
                    Assigned To
                    <span class="sort-icon" aria-hidden="true">
                       <svg width="9" height="5" viewBox="0 0 9 5" fill="none" xmlns="http://www.w3.org/2000/svg">
<path opacity="0.2" d="M3.44785 4.81539C3.40678 4.78714 3.23116 4.68047 3.08671 4.5811C2.17819 3.99854 0.691128 2.47881 0.237221 1.68339C0.164284 1.56259 0.00991372 1.25718 0 1.09401C0 0.937652 0.0509848 0.788602 0.154371 0.646371C0.298828 0.46907 0.526135 0.326839 0.794513 0.248904C0.98075 0.198734 1.53804 0.120799 1.54796 0.120799C2.15765 0.0428641 3.14831 0 4.24307 0C5.28613 0 6.23643 0.0428641 6.85533 0.106673C6.86525 0.11398 7.55779 0.191914 7.79501 0.277155C8.22838 0.433512 8.49747 0.738919 8.49747 1.06576V1.09401C8.48685 1.30687 8.21776 1.75451 8.20785 1.75451C7.75323 2.50706 6.33911 3.99172 5.39943 4.58841C5.39943 4.58841 5.15796 4.75645 5.00713 4.82952C4.79045 4.9435 4.52207 5 4.25369 5C3.95416 5 3.67516 4.93619 3.44785 4.81539Z" fill="#030229"/>
</svg>

                    </span>
                </button>
            </th>

            <th 
                scope="col" 
                class="text-left whitespace-nowrap py-3 px-4 text-sm font-semibold text-gray-600 sortable" 
                data-sort="priority"
                aria-sort="none"
            >
                <button class="flex items-center gap-2 focus:outline-none focus-visible:ring-2 focus-visible:ring-primary-color-500 rounded">
                    Priority
                    <span class="sort-icon" aria-hidden="true">
                       <svg width="9" height="5" viewBox="0 0 9 5" fill="none" xmlns="http://www.w3.org/2000/svg">
<path opacity="0.2" d="M3.44785 4.81539C3.40678 4.78714 3.23116 4.68047 3.08671 4.5811C2.17819 3.99854 0.691128 2.47881 0.237221 1.68339C0.164284 1.56259 0.00991372 1.25718 0 1.09401C0 0.937652 0.0509848 0.788602 0.154371 0.646371C0.298828 0.46907 0.526135 0.326839 0.794513 0.248904C0.98075 0.198734 1.53804 0.120799 1.54796 0.120799C2.15765 0.0428641 3.14831 0 4.24307 0C5.28613 0 6.23643 0.0428641 6.85533 0.106673C6.86525 0.11398 7.55779 0.191914 7.79501 0.277155C8.22838 0.433512 8.49747 0.738919 8.49747 1.06576V1.09401C8.48685 1.30687 8.21776 1.75451 8.20785 1.75451C7.75323 2.50706 6.33911 3.99172 5.39943 4.58841C5.39943 4.58841 5.15796 4.75645 5.00713 4.82952C4.79045 4.9435 4.52207 5 4.25369 5C3.95416 5 3.67516 4.93619 3.44785 4.81539Z" fill="#030229"/>
</svg>

                    </span>
                </button>
            </th>

            <th 
                scope="col" 
                class="text-center py-3 px-4 text-sm font-semibold text-gray-600 sortable" 
                data-sort="status"
                aria-sort="none"
            >
                <button class="flex items-center gap-2 mx-auto focus:outline-none focus-visible:ring-2 focus-visible:ring-primary-color-500 rounded">
                    Status
                    <span class="sort-icon" aria-hidden="true">
                       <svg width="9" height="5" viewBox="0 0 9 5" fill="none" xmlns="http://www.w3.org/2000/svg">
<path opacity="0.2" d="M3.44785 4.81539C3.40678 4.78714 3.23116 4.68047 3.08671 4.5811C2.17819 3.99854 0.691128 2.47881 0.237221 1.68339C0.164284 1.56259 0.00991372 1.25718 0 1.09401C0 0.937652 0.0509848 0.788602 0.154371 0.646371C0.298828 0.46907 0.526135 0.326839 0.794513 0.248904C0.98075 0.198734 1.53804 0.120799 1.54796 0.120799C2.15765 0.0428641 3.14831 0 4.24307 0C5.28613 0 6.23643 0.0428641 6.85533 0.106673C6.86525 0.11398 7.55779 0.191914 7.79501 0.277155C8.22838 0.433512 8.49747 0.738919 8.49747 1.06576V1.09401C8.48685 1.30687 8.21776 1.75451 8.20785 1.75451C7.75323 2.50706 6.33911 3.99172 5.39943 4.58841C5.39943 4.58841 5.15796 4.75645 5.00713 4.82952C4.79045 4.9435 4.52207 5 4.25369 5C3.95416 5 3.67516 4.93619 3.44785 4.81539Z" fill="#030229"/>
</svg>

                    </span>
                </button>
            </th>
        </tr>
    </thead>

    <tbody id="table-body">
        <tr class="hover:bg-gray-50 table-row" data-priority="high" data-status="pending" data-action="Patient intake" data-assignee="Laura" data-sn="1">
            <th scope="row" class="py-4 px-4 text-start text-sm text-gray-600 font-medium">1</th>
            <td class="py-4 px-4 text-sm font-medium whitespace-nowrap text-primary-color-500">Patient intake</td>
            <td class="py-4 px-4 text-sm text-gray-700">Laura</td>
            <td class="py-4 px-4 text-sm font-medium text-red-600">High</td>
            <td class="py-4 px-4 text-center">
                <span 
                    class="px-6 py-2 inline-block rounded-[5px] text-xs font-medium bg-orange-100 text-orange-700" 
                    role="status" 
                    aria-label="Status: Pending"
                >
                    Pending
                </span>
            </td>
        </tr>

        <tr class="bg-gray-50 hover:bg-gray-100 table-row" data-priority="medium" data-status="in-progress" data-action="Patient Sample" data-assignee="Alex" data-sn="2">
            <th scope="row" class="py-4 px-4 text-start text-sm text-gray-600 font-medium">2</th>
            <td class="py-4 px-4 text-sm font-medium whitespace-nowrap text-primary-color-500">Patient Sample</td>
            <td class="py-4 px-4 text-sm text-gray-700">Alex</td>
            <td class="py-4 px-4 text-sm font-medium text-amber-600">Medium</td>
            <td class="py-4 px-4 text-center">
                <span 
                    class="px-6 py-2 inline-block rounded-[5px] text-xs font-medium bg-blue-100 text-blue-700" 
                    role="status" 
                    aria-label="Status: In Progress"
                >
                    In Progress
                </span>
            </td>
        </tr>

        <tr class="hover:bg-gray-50 table-row" data-priority="low" data-status="completed" data-action="Checkup" data-assignee="Sophia" data-sn="3">
            <th scope="row" class="py-4 px-4 text-start text-sm text-gray-600 font-medium">3</th>
            <td class="py-4 px-4 text-sm font-medium whitespace-nowrap text-primary-color-500">Checkup</td>
            <td class="py-4 px-4 text-sm text-gray-700">Sophia</td>
            <td class="py-4 px-4 text-sm font-medium text-green-600">Low</td>
            <td class="py-4 px-4 text-center">
                <span 
                    class="px-6 py-2 inline-block rounded-[5px] text-xs font-medium bg-green-100 text-green-700" 
                    role="status" 
                    aria-label="Status: Completed"
                >
                    Completed
                </span>
            </td>
        </tr>

        <tr class="hover:bg-gray-50 table-row" data-priority="low" data-status="completed" data-action="Patient Sample" data-assignee="Alex" data-sn="4">
            <th scope="row" class="py-4 px-4 text-start text-sm text-gray-600 font-medium">4</th>
            <td class="py-4 px-4 text-sm font-medium whitespace-nowrap text-primary-color-500">Patient Sample</td>
            <td class="py-4 px-4 text-sm text-gray-700">Alex</td>
            <td class="py-4 px-4 text-sm font-medium text-green-600">Low</td>
            <td class="py-4 px-4 text-center">
                <span 
                    class="px-6 py-2 inline-block rounded-[5px] text-xs font-medium bg-green-100 text-green-700" 
                    role="status" 
                    aria-label="Status: Completed"
                >
                    Completed
                </span>
            </td>
        </tr>

        <tr class="hover:bg-gray-50 table-row" data-priority="low" data-status="completed" data-action="Checkup" data-assignee="Sophia" data-sn="5">
            <th scope="row" class="py-4 px-4 text-start text-sm text-gray-600 font-medium">5</th>
            <td class="py-4 px-4 text-sm font-medium whitespace-nowrap text-primary-color-500">Checkup</td>
            <td class="py-4 px-4 text-sm text-gray-700">Sophia</td>
            <td class="py-4 px-4 text-sm font-medium text-green-600">Low</td>
            <td class="py-4 px-4 text-center">
                <span 
                    class="px-6 py-2 inline-block rounded-[5px] text-xs font-medium bg-green-100 text-green-700" 
                    role="status" 
                    aria-label="Status: Completed"
                >
                    Completed
                </span>
            </td>
        </tr>
    </tbody>
</table>

<div 
    id="no-results" 
    class="hidden text-center py-12" 
    role="alert" 
    aria-live="polite"
>
    <svg class="w-16 h-16 mx-auto text-gray-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
    </svg>
    <p class="text-gray-500 text-lg font-medium">No Results Found</p>
    <p class="text-gray-400 text-sm mt-2">Try adjusting your filters or search query</p>
</div>
</div>