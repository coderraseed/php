<?php
function generateReport(){
    $serializedData = file_get_contents(DB_NAME);
    $students = unserialize($serializedData);
?>
<table>
    <thead>
        <tr>
            <th>Number</th>
            <th>Name</th>
            <th>Age</th>
            <th>Occupation</th>
            <th>S/Length</th>
            <th>B/Name</th>
            <th>Enroll</th>
            <th>Returned</th>
            <th>Edit|Delete</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($students as $student){ ?>
        <tr>
            <td><?php printf('%s', $student['svc']);  ?></td>
            <td><?php printf('%s', $student['name']); ?></td>
            <td><?php printf('%s', $student['age']); ?></td>
            <!-- <td><?php printf('%s', $student['svc']); ?></td>
            <td><?php printf('%s', $student['svc']); ?></td>
            <td><?php printf('%s', $student['svc']); ?></td>
            <td><?php printf('%s', $student['svc']); ?></td>
            <td><?php printf('%s', $student['svc']); ?></td> -->
            <td><?php printf('<a href=""><i class="fas fa-edit"></i></a><a href=""><i class="fas fa-edit"></i></a>'); ?></td>
        </tr>
    <?php } ?>

    </tbody>
</table>
<?php  }