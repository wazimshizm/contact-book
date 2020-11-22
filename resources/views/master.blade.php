<!DOCTYPE html>
<html lang="EN">
<head>
    @include('meta')
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Roboto|Lato:400,700|Quicksand:300">
    <link rel="stylesheet" type="text/css" href="{{ mix('/css/app.css') }}">
    <script type="application/javascript" src="{{ mix('/js/app.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.0/moment.min.js"
            integrity="sha512-Izh34nqeeR7/nwthfeE0SI3c8uhFSnqxV0sI9TvTcXiFJkMd6fB644O64BRq2P/LA/+7eRvCw4GmLsXksyTHBg=="
            crossorigin="anonymous"></script>
    <title>Contact Book</title>
</head>
<body>
<div class="container">
    <h1 class="tw-text-center tw-m-6">Live Search Contact Book</h1>
    <div class="tw-border-gray-400 tw-border tw-rounded">
        <div class="tw-p-4 tw-bg-gray-200 tw-text-gray-600">Search Contact Book</div>
        <div class="tw-p-4 tw-overflow-x-hidden">
            <form class="form-horizontal">
                <div class="control-group">
                    <div class="form-row">
                        <div class="col-10">
                            <input id="search" class="form-control" title="Contact Search Box" type="text"
                                   placeholder="Enter a name">
                        </div>
                        <div class="col">
                            <button id="NewContactBtn" type="button" class="btn btn-success tw-w-full">+</button>
                        </div>
                    </div>
                </div>
            </form>
            <table id='table1' class="table table-striped table-hover table-borderless tw-my-1">
                <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Phone</th>
                    <th class="tw-hidden sm:tw-table-cell">Email</th>
                    <th class="tw-hidden md:tw-table-cell">Postcode</th>
                </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>
    @include('modal')
</div>
</body>
</html>
