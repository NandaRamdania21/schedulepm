<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weekly Report Sidebar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .sidebar {
            width: 250px;
            background-color: #f4f4f4;
            padding: 20px;
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            overflow-y: auto;
        }
        .sidebar h3 {
            color: #333;
        }
        .sidebar select, .sidebar input[type="button"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
        }
        .report-section {
            margin-left: 270px;
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: center;
            border: 1px solid #ddd;
        }
        .achievements {
            font-weight: bold;
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <h3>Report Filter</h3>
        <label for="period">Select Period:</label>
        <select id="period" name="period">
            <option value="week">Weekly</option>
            <option value="month">Monthly</option>
            <option value="year">Yearly</option>
        </select>
        <input type="button" value="Generate Report" onclick="generateReport()">
    </div>

    <!-- Main content section -->
    <div class="report-section">
        <h3>Equipment Performance Report</h3>
        <table>
            <thead>
                <tr>
                    <th>Equipment</th>
                    <th>Plan</th>
                    <th>Advance</th>
                    <th>On Time</th>
                    <th>Delay</th>
                    <th>Remark for Delay</th>
                    <th>Overall Achievement</th>
                </tr>
            </thead>
            <tbody id="report-table">
                <!-- Data will be inserted here -->
            </tbody>
        </table>
    </div>

    <script>
        // Sample data (replace with dynamic data from the database)
        const data = [
            { equipment: 'Machine', plan: 30, advance: 5, on_time: 20, delay: 5, remark: '-', achievement: 83, period: 'week' },
            { equipment: 'Pallet Selective', plan: 20, advance: 3, on_time: 15, delay: 2, remark: 'Production Running', achievement: 90, period: 'week' },
            { equipment: 'Jig', plan: 15, advance: 7, on_time: 8, delay: 0, remark: '-', achievement: 100, period: 'week' },
            { equipment: 'Fume Extractor', plan: 7, advance: 0, on_time: 7, delay: 0, remark: '-', achievement: 100, period: 'week' },
            { equipment: 'Selective Line', plan: 3, advance: 0, on_time: 3, delay: 0, remark: '-', achievement: 100, period: 'week' },
            { equipment: 'Trolley & Handjack', plan: 10, advance: 5, on_time: 5, delay: 0, remark: '-', achievement: 100, period: 'week' }
        ];

        // Function to calculate achievement percentage
        function calculateAchievement(advance, on_time, delay) {
            const total = advance + on_time + delay;
            if (total === 0) return 0;
            return ((on_time / total) * 100).toFixed(2);
        }

        // Function to generate report based on selected period
        function generateReport() {
            const period = document.getElementById('period').value;
            const reportTable = document.getElementById('report-table');
            reportTable.innerHTML = ''; // Clear existing rows

            // Loop through data and filter by selected period
            const filteredData = data.filter(item => item.period === period);
            
            // Add rows to table for filtered data
            filteredData.forEach(item => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${item.equipment}</td>
                    <td>${item.plan}</td>
                    <td>${item.advance}</td>
                    <td>${item.on_time}</td>
                    <td>${item.delay}</td>
                    <td>${item.remark}</td>
                    <td class="achievements">${calculateAchievement(item.advance, item.on_time, item.delay)}%</td>
                `;
                reportTable.appendChild(row);
            });
        }
    </script>

</body>
</html>
