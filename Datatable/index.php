<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Datatable</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.css"/>
</head>
<body>
<div class="container">
    <div class="row">
        <table class="table" id="myTable">
            <thead>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start Date</th>
                <th>Salary</th>
            </thead>

            <tbody>
                <tr>
                    <td>Joy</td>
                    <td>Computer Engineer</td>
                    <td>Mohammadpur</td>
                    <td>45</td>
                    <td>10-12-1995</td>
                    <td>$300</td>
                </tr>
                <tr>
                    <td>Mahmud</td>
                    <td>Software Engineer</td>
                    <td>Dhanmondi</td>
                    <td>45</td>
                    <td>10-12-1995</td>
                    <td>$300</td>
                </tr>
                <tr>
                    <td>Rubel</td>
                    <td>Civil Engineer</td>
                    <td>Mirpur</td>
                    <td>45</td>
                    <td>10-12-1995</td>
                    <td>$300</td>
                </tr>
                <tr>
                    <td>Kajol</td>
                    <td>Social Meadia</td>
                    <td>Gabtoli</td>
                    <td>45</td>
                    <td>10-12-1995</td>
                    <td>$300</td>
                </tr>
                <tr>
                    <td>Hasan</td>
                    <td>Computer Engineer</td>
                    <td>Mohammadpur</td>
                    <td>45</td>
                    <td>10-12-1995</td>
                    <td>$300</td>
                </tr>
                <tr>
                    <td>Masud</td>
                    <td>Engineer</td>
                    <td>Chadpur</td>
                    <td>45</td>
                    <td>10-12-1995</td>
                    <td>$300</td>
                </tr>
                <tr>
                    <td>Kamrul</td>
                    <td>Computer Engineer</td>
                    <td>Shariatpur</td>
                    <td>45</td>
                    <td>10-12-1995</td>
                    <td>$300</td>
                </tr>
                <tr>
                    <td>Rana</td>
                    <td>BBA</td>
                    <td>Mohammadpur</td>
                    <td>45</td>
                    <td>10-12-1995</td>
                    <td>$300</td>
                </tr>
                <tr>
                    <td>Omor</td>
                    <td>Computer Engineer</td>
                    <td>Mohammadpur</td>
                    <td>45</td>
                    <td>10-12-1995</td>
                    <td>$300</td>
                </tr>
                <tr>
                    <td>Jomsher</td>
                    <td>Accounting</td>
                    <td>Mohammadpur</td>
                    <td>45</td>
                    <td>10-12-1995</td>
                    <td>$300</td>
                </tr>
                <tr>
                    <td>Amir</td>
                    <td>Chemistry</td>
                    <td>Gulistan</td>
                    <td>34</td>
                    <td>10-12-1995</td>
                    <td>$300</td>
                </tr>

            </tbody>

            <tfoot>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start Date</th>
                <th>Salary</th>
            </tfoot>

        </table>
    </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.js"></script>

<script>
    $(document).ready(function () {
        $('#myTable').DataTable({
            'paging': true,
            'info': true,
            'ordering': true,
        });
    });
</script>
</body>
</html>