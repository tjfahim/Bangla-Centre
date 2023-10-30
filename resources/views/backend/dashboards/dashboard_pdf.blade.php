<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF</title>

    <style>
        table{
            border-collapse: collapse;
            width: 100%;
        }

        table, th, td, tr{
            border: 1px solid;
        }
    </style>
</head>
<body>

    <h3 style="text-align: center">Booking PDF</h3>
    <h4 style="text-align: center">Personal Details Report</h4>
    <table>
        <thead>
            <tr>
                <th scope="col">Serial</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Address</th>
                <th scope="col">Comment</th>
            </tr>
        </thead>
        <tbody>
            @php
            $sl=1;
            @endphp
            @foreach ($dashboards as $dashboard)
            <tr>
                <th scope="row">{{ $sl++ }}</th>
                <td>{{ $dashboard->name ?? '' }}</td>
                <td>{{ $dashboard->email ?? '' }}</td>
                <td>{{ $dashboard->phone ?? '' }}</td>
                <td>{{ $dashboard->address ?? '' }}</td>
                <td>{!! $dashboard->comment ?? '' !!}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <h4 style="text-align: center">Booking Details Report</h4>
    <table>
        <thead>
            <tr>
                <th scope="col">Serial</th>
                <th scope="col">Booked Date</th>
                <th scope="col">Hall</th>
                <th scope="col">Period</th>
                <th scope="col">Booking Type</th>
                <th scope="col">Price</th>
                <th scope="col">Discount</th>
                <th scope="col">Description</th>
                <th scope="col">Total Paid</th>
            </tr>
        </thead>
        <tbody>
            @php
            $sl=1;
            @endphp
            @foreach ($dashboards as $dashboard)
            <tr>
                <th scope="row">{{ $sl++ }}</th>
                <td>{{ $dashboard->booked_date ?? '' }}</td>
                <td>{{ $dashboard->hall ?? '' }}</td>
                <td>{{ $dashboard->period ?? '' }}</td>
                <td>{{ $dashboard->booking_type ?? '' }}</td>
                <td>{{ $dashboard->price ?? '' }}</td>
                <td>{{ $dashboard->discount ?? '' }}</td>
                <td>{!! $dashboard->description ?? '' !!}</td>
                <td>{{ $dashboard->total_paid ?? '' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
