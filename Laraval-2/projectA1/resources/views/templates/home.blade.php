@extends('layouts.main')
@section('maincontents')
<div class="container mt-5">
    <h1 class="text-primary">Home Page</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item active">Home</li>
        <li class="breadcrumb-item "><a href="templates/inputpage">New Items</a> </li>
    </ol>
    <table class="table table-bordered text-center fw-semibold">
        <thead class="">
            <tr>
                <td>S.no</td>
                <td>Image</td>
                <td>Name</td>
                <td>M.R.P</td>
                <td> Selling Price</td>
                <td>Desc</td>
                <td>Edit</td>
                <td>Remove</td>
            </tr>
        </thead>
        <tbody>
            <tr class="">
                <td></td>
                <td><img src="/images/p1.png" alt=""></td>
                <td><a href="/project/show/shown.html">Redmi</a></td>
                <td>50000</td>
                <td>45000</td>
                <td>This is New Brand</td>
                <td><button class="btn btn-success btn-sm"><i class="bi bi-pen"></i> Edit</button></td>
                <td><button class="btn btn-danger btn-sm"><i class="bi bi-trash-fill"></i> Delete</button></td>
            </tr>
         </tbody>
    </table>
</div>
@endsection