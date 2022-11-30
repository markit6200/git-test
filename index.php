<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DPA LOADING VDO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" /> -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" /> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alexandria:wght@700&family=Kanit&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <table id="user_data" class="table table-bordered table-responsive">
        <thead>
            <tr>
                <th>Log_download</th>
                <th>RequestID</th>
                <th>FirstName&nbsp;LastName</th>
                <th>DepartmentName</th>
                <th>SchoolName</th>
                <th>LOG_USER</th>
                <th>URL</th>
                <th>812</th>
                <th>813</th>
                <th>820_1</th>
                <th>820_2</th>
                <th>820_3</th>
                <th>931_2</th>
                <th>931_3</th>
                <th>932_1</th>
                <th>932_2</th>
                <th>932_3</th>
            </tr>
        </thead>
    </table>

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
    <script type="text/javascript" language="javascript">
        $(document).ready(function() {

            fetch_data();

            function fetch_data() {
                var dataTable = $('#user_data').DataTable({
                    "processing": true,
                    "searching": false,
                    "serverSide": true,
                    "order": [],
                    "ajax": {
                        url: "fetch.php",
                        type: "POST"
                    },
                    "full-hold": false
                });
            }

            $(document).on('click', '.insert', function() {
                var RequestID = $(this).attr("id");


                $.ajax({
                    url: "insert_status_download.php",
                    method: "POST",
                    data: {
                        RequestID: RequestID
                    },
                    success: function(data) {

                        $('#user_data').DataTable().draw(false);
                    },

                });
                setInterval(function() {
                    $('#alert_message').html('');
                }, 5000);

            });
        });
    </script>
    <script>
        function CopyMe(TextToCopy) {
            var TempText = document.createElement("input");
            TempText.value = TextToCopy;
            document.body.appendChild(TempText);
            TempText.select();

            document.execCommand("copy");
            document.body.removeChild(TempText);

            alert("Copied the text: " + TempText.value);
        }
    </script>

</body>

</html>