@include('layouts.navbar')
@include('layouts.headlinks')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leader Management</title>
</head>
<body>
<div class="p-4 sm:ml-64 mt-5">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
            <h2 class="text-2xl font-bold text-gray-900 dark:text-gray-100">Leader Management</h2>
            <p class="text-sm text-gray-500 dark:text-gray-400">Manage your leaders here</p>
        </div>
    </div>
    <!-- Table -->
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
            <livewire:leader-table/>
        </div>
    </div>
</body>
</html>