<form action="/crud/index.php?task=create" method="POST">
    <input type="hidden" value="<?php echo $id ?>" name="id">
    <div class="row">
        <div class="column column-33">
            <label for="num">Svc Number</label>
            <input type="text" value="<?php echo $student['svc']; ?>" id="num" name="svc" placeholder="Svc Number" >
        </div>
        <div class="column column-33">
            <label for="name">Name</label>
            <input type="text" value="<?php echo $student['name']; ?>" id="name" name="name" placeholder="Type Your Full Name" >
        </div>
        <div class="column column-33">
            <label for="age">Age</label>
            <input type="text" value="<?php echo $student['age']; ?>" id="age" name="age" placeholder="Age" >
        </div>
    </div>
    <div class="row">        
        <div class="column column-33">
            <label for="trade">Occupation</label>
            <input type="text" name="trade" value="<?php echo $student['trade']; ?>" id="trade" placeholder="Type your occupation" >
        </div>
        <div class="column column-33">
            <label for="bname">Office Name</label>
            <input type="text" name="bname" value="<?php echo $student['bname']; ?>" id="bname" placeholder="Your Branch Name" >
        </div>
        <div class="column column-33">
            <label for="slen">Service Length</label>
            <input type="text" value="<?php echo $student['slen']; ?>" id="slen" name="slen" >
        </div>
    </div>    
    <button type="submit" class="button-primary" name="submit">Update</button>

</form>