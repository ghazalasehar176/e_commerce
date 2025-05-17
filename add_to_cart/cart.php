<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <?php
    include("db.php");
    session_start();
    $session_id = session_id();
    ?>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <H1>cart</H1>
                <table>
                    <thead>
                        <tr>
                            <th>S_no</th>
                             <th>name</th>
                              <th>price</th>
                               <th>quantity</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</body>
</html>