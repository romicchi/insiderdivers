<!DOCTYPE html>
<html>
<head>
    <title>Client Management</title>
    <style>
        .header {
            font-weight: bold;
        }
        .search-bar {
            /* Add your styles for the search bar here */
        }
        .table {
            /* Add your styles for the table here */
        }
        .dropdown {
            /* Add your styles for the dropdown here */
        }
        .button {
            /* Add your styles for the buttons here */
        }
        .pagination {
            /* Add your styles for the pagination here */
        }
    </style>
</head>
<body>
    <h1 class="header">Client Management</h1>
    <input type="text" class="search-bar" placeholder="Search...">
    <table class="table">
        <thead>
            <tr>
                <th>Confirmed</th>
                <th>Potential</th>
            </tr>
        </thead>
        <tbody>
            <!-- Add your table rows here -->
        </tbody>
    </table>
    <div>
        <label for="filter">Filter:</label>
        <select id="filter" class="dropdown">
            <option value="nationality">Nationality</option>
            <option value="gender">Gender</option>
        </select>
    </div>
    <div>
        <label for="sort">Sort:</label>
        <select id="sort" class="dropdown">
            <option value="az">Alphabetical (A-Z)</option>
            <option value="za">Alphabetical (Z-A)</option>
            <option value="oldest">Date (Oldest-Newest)</option>
            <option value="newest">Date (Newest-Oldest)</option>
        </select>
    </div>
    <button class="button">New</button>
    <button class="button">Apply</button>
    <div class="pagination">
        <!-- Add your pagination links here -->
    </div>
    <button class="button">Generate Report</button>
</body>
</html>