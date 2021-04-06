<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <style>
        input.form-control {
            padding: 2px;
            line-height: 100%;
            font-size: 1.5rem;
        }
    </style>
</head>

<body>
    <header class="container-fluid bg-secondary text-light p-2">
        <div class="container">
            <h1 class="display-3 mb-0">
                User management system
            </h1>
            <h2 class="display-6">user list</h2>
        </div>
    </header>
    <div class="container">
        <table class="table">
            <tr>
                <th>id</th>
                <th>cognome</th>
                <th>nome</th>
                <th>email</th>
                <th>età</th>
            </tr>
            <tr>
                <th cellspan="5" class="text-align-left display-6">
                A
                </th>
            </tr>
            <tr>
                <td>22</td>
                <td>Augusto</td>
                <td>Trevi</td>
                <td>treviaugusto@email.com</td>
                <td>22 </td>
            </tr>
            <tr>
                <td>25</td>
                <td>Augusto</td>
                <td>Mino</td>
                <td>minoaugusto@email.com</td>
                <td>12 </td>
            </tr>
            <tr>
                <th cellspan="5" class="text-align-left display-6">
                R
                </th>
            </tr>
            <tr>
                <td>10</td>
                <td>Rossi</td>
                <td>Mario</td>
                <td>mariorossi@email.com</td>
                <td>15 </td>
            </tr>
            <tr>
                <td>11</td>
                <td>Rossi</td>
                <td>Mino</td>
                <td>minorossi@email.com</td>
                <td>20 </td>
            </tr>
        </table>
    </div>
</body>

</html>