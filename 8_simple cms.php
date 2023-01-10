<?php
$users = [
    [
        'id' => 3,
        'name' => 'Jack',
        'email' => 'jack@gmail.com',
        'role' => 'user'
    ],
    [
        'id' => 2,
        'name' => 'Jane',
        'email' => 'jane@gmail.com',
        'role' => 'editor'
    ],
    [
        'id' => 1,
        'name' => 'John',
        'email' => 'john@gmail.com',
        'role' => 'admin'
    ]
];

?>

<!DOCTYPE html>
<html>

<head>
    <title>Simple CMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" />
    <style type="text/css">
    body {
        background: #f1f1f1;
    }
    </style>
</head>

<body>
    <div class="container mx-auto my-5" style="max-width: 700px;">
        <div class="card mb-2 p-4">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Only change code below this line -->
                    <!-- $id . $name . $email .  $role -->

                    <?php foreach ($users as $user):?> <tr>
                        <th scope="row"><?php echo $user['id'] ?></th>
                        <td><?php echo $user['name'] ?></td>
                        <td><?php echo $user['email'] ?></td>
                        <td>
                            <?php 
                            // swtich 不同职位不同颜色
                                switch ($user['role']){
                                    case 'user':
                                        echo "<span class='badge bg-success'>$user[role]</span>";
                                        break;
                                    case 'editor':
                                        echo "<span class='badge bg-info'>$user[role]</span>";
                                            break;
                                    case 'admin':
                                        echo "<span class='badge bg-primary'>$user[role]</span>";
                                        break;
                                    }
                            ?>
                        </td>
                    </tr>

                    <?php endforeach; 
                        
                    ?>
                    <!-- Only change code above this line -->
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>