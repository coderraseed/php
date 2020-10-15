<?php
function generateReport(){
    $serializedData = file_get_contents(DB_NAME);
    $students = unserialize($serializedData);
?>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>P/Number</th>
            <th>Name</th>
            <th>Age</th>
            <th>Occupation</th>
            <th>Off/Name</th>
            <th>S/Length</th>
            <!-- <th>Enroll</th> -->
            <!-- <th>Returned</th> -->
            <th>Edit|Delete</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($students as $student){ ?>
        <tr>
            <td><?php printf('%s', $student['id']);  ?></td>
            <td><?php printf('%s', $student['svc']);  ?></td>
            <td><?php printf('%s', $student['name']); ?></td>
            <td><?php printf('%s', $student['age']); ?></td>
            <td><?php printf('%s', $student['trade']); ?></td>
            <td><?php printf('%s', $student['bname']); ?></td>
            <td><?php printf('%s', $student['slen']); ?></td>
            <!-- <td><?php printf('%s', $student['svc']); ?></td>
            <td><?php printf('%s', $student['svc']); ?></td> -->
            <td style="text-align: center;">
                <?php printf('<a href="/crud/index.php?task=edit&id=%s" style="margin-right:10px;" ><i class="fas fa-edit"></i></a><a class="delete" href="/crud/index.php?task=delete&id=%s"><i class="fas fa-trash-alt"></i></a>',$student['id'], $student['id']); ?>
            </td>
        </tr>
    <?php } ?>

    </tbody>
</table>
<?php  }

