@extends('layouts.app', ['activePage'=>'customers'])

@section('content')
<div class="details-index">
    <div class="recentOrders">
        <div class="cardHeader">
            <h2>Customers</h2>
            <a href="#" class="btn">Create</a>
        </div>

        <table>
            <thead>
                <tr>
                    <td>Name</td>
                    <td>Price</td>
                    <td>Payment</td>
                    <td>Status</td>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>Star Refrigerator</td>
                    <td>$1200</td>
                    <td>Paid</td>
                    <td><span class="status delivered">Delivered</span></td>
                </tr>

                <tr>
                    <td>Dell Laptop</td>
                    <td>$110</td>
                    <td>Due</td>
                    <td><span class="status pending">Pending</span></td>
                </tr>

                <tr>
                    <td>Apple Watch</td>
                    <td>$1200</td>
                    <td>Paid</td>
                    <td><span class="status return">Return</span></td>
                </tr>

                <tr>
                    <td>Addidas Shoes</td>
                    <td>$620</td>
                    <td>Due</td>
                    <td><span class="status inProgress">In Progress</span></td>
                </tr>

                <tr>
                    <td>Star Refrigerator</td>
                    <td>$1200</td>
                    <td>Paid</td>
                    <td><span class="status delivered">Delivered</span></td>
                </tr>

                <tr>
                    <td>Dell Laptop</td>
                    <td>$110</td>
                    <td>Due</td>
                    <td><span class="status pending">Pending</span></td>
                </tr>

                <tr>
                    <td>Apple Watch</td>
                    <td>$1200</td>
                    <td>Paid</td>
                    <td><span class="status return">Return</span></td>
                </tr>

                <tr>
                    <td>Addidas Shoes</td>
                    <td>$620</td>
                    <td>Due</td>
                    <td><span class="status inProgress">In Progress</span></td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection