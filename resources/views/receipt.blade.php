<!DOCTYPE html>
<html>

<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <style>
        * {
            padding: 0;
            margin: 0;

        }

        body {
            width: 100%;
            /* margin: 0 1%; */
        }

        .cover-page {
            position: relative;

        }

        .cover-page-main {
            position: absolute; 
            background-repeat: no-repeat;
            height: 50vh;
            width: 50vw;
            background-position: center;
            padding: 5vh;
            z-index: 1;
        }

        .cover-page-main::before {
            content: "";
            background-color: rgba(0, 0, 0, 0.2);
            position: absolute;
            height: 100%;
            width: 100%;
            z-index: -1;
        }


        .school-exam {
            display: flex;
            flex-direction: column;
            padding: 50px 0 20px 50px;
            z-index: 2;
        }

        .school-exam>h3 {
            font-size: 25px;
            text-transform: uppercase;
            color: black;
            margin-bottom: 10px;
        }

        .school-exam>h4 {
            font-size: 20px;
            text-transform: capitalize;
            color: black;
        }

        .subject-code-paper {
            padding: 0px 50px 0px 50px;
        }

        .subject-code-paper>h4 {
            float: left;
            font-size: 28px;
            font-weight: 700;
        }

        .subject-code-paper>h5 {
            float: right;
            font-size: 23px;
            font-weight: 700;
        }

        .subject-date-duration {
            padding: 0px 50px 0px 50px;
        }

        .left-s-d-d {
            width: 20%;
        }

        .middle-d-d {
            width: 60%;
            margin-left: 20%;
            text-align: center;
            margin-top: 30px;
        }

        .middle-d-d h3 {
            text-transform: uppercase;
            font-weight: 700;
            font-size: 25px;
        }

        .middle-d-d h5 {
            text-transform: uppercase;
            font-weight: 500;
            font-size: 20px;
        }

        .middle-d-d h4 {
            text-align: center;
        }

        .right-d-d {
            width: 20%;
            margin-left: 80%;
        }

        .right-d-d img {
            height: 50px;
            margin-top: -50px;
        }

        .close-top-info {
            height: 2px;
            background-color: grey;
            width: 86%;
            margin: 5px auto;
        }

        .student-info {

            padding: 0px 50px 0px 50px;
        }

        .left-student-info {
            width: 60%;
        }

        .right-student-info {
            margin-left: 60%;
            width: 40%;
            margin-top: -20%;
        }

        .left-student-name-info,
        .right-student-name-info {
            margin-bottom: 20px;
            margin-top: 20px;
        }

        .candidates-ins {
            padding: 20px 50px 0px 50px;
        }

        .candidates-ins h4 {
            margin-bottom: 20px;
        }

        .instructions-list ul {
            list-style: none;
        }

        .instructions-list ul li {
            margin-bottom: 10px;
            font-style: italic;
        }

        .close-ins {
            width: 60%;
            height: 2px;
            margin: 5px auto;
            background-color: gray;
        }

        .examiner {
            text-align: center;
            padding: 15px auto;
        }

        .examiner-table {
            padding-left: 25%;
        }

        .examiner-table>table>thead {
            border: 1px solid black;
        }

        .examiner-table>table>thead>tr>th {
            padding: 5px 20px;
        }

        .examiner-table>table>thead>tr>th:first-child,
        .examiner-table>table>thead>tr>th:nth-child(2),
        .examiner-table>table>thead>tr>th:nth-child(3) {
            border-right: 1px solid black;
        }

        .examiner-table>table>tbody {
            border: 1px solid black;
        }

        .examiner-table>table>tbody>tr>td {
            padding: 5px 20px;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        .examiner-table>table>tbody>tr {
            /* border:1px solid black; */
        }

        .examiner-table>table>tbody>tr:first-child>td:first-child,
        .examiner-table>table>tbody>tr:first-child>td:nth-child(2),
        .examiner-table>table>tbody>tr:first-child>td:nth-child(3),
        .examiner-table>table>tbody>tr:nth-child(2)>td:first-child,
        .examiner-table>table>tbody>tr:nth-child(2)>td:nth-child(2),
        .examiner-table>table>tbody>tr:nth-child(2)>td:nth-child(3) {
            border-bottom: 1px solid black;
            border-right: 1px solid black;
            padding: 10px 20px;
        }

        .examiner-table>table>tbody>tr:first-child>td:last-child,
        .examiner-table>table>tbody>tr:nth-child(2)>td:last-child {
            border-bottom: 1px solid black;
            padding: 10px 20px;
        }
        .examiner-table>table>tbody>tr:last-child>td:first-child {
            padding: 10px 20px;
            border-right: 1px solid black;
        }
        .examiner-table>table>tbody>tr:last-child>td:nth-child(2) {
            border-right: 1px solid black;
            padding: 10px 20px;
        }
        .examiner-table>table>tbody>tr:last-child>td:last-child {
            padding: 10px 20px;

        }
    </style>
</head>

<body>
{{ $car }}


</body>

</html>
