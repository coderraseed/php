<?php 
function generateReport(){
    $serializedData = file_get_contents(DB_NAME);
    $students = unserialize($serializedData);
?>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Roll</th>
                <th scope="col" width=25%>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($students as $student){ ?>
                <tr>
                    <td><?php printf('%s %s', $student['fname'], $student['lname']); ?></td>
                    <td><?php printf('%s ', $student['roll']); ?></td>
                    <td><?php printf('<a href="/crud2/index.php?task=edit&id=%s">Edit</a> | <a href="/crud2/index.php?task=delete&id=%s">Delete</a>', $student['id'], $student['id']);?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>