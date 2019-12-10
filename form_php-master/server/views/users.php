<h1>USERS PAGE</h1>

<table>   
    <tr>       
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>phone</th>       
    </tr>   
    <?php foreach ($users as $user) { ?>
        <tr>       
            <td><?= $user ['id'] ?></td>
            <td><?= $user ['username'] ?></td>
            <td><?= $user ['email'] ?></td>
            <td><?= $user ['phone'] ?></td>
        <?php } ?>

</table>