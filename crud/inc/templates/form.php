<form action="/crud/index.php?report" method="POST">
    <div class="row">
        <div class="column column-33">
            <label for="num">Svc Number</label>
            <input type="text" id="num" name="svc" placeholder="Svc Number" >
        </div>
        <div class="column column-33">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Type Your Full Name" >
        </div>
        <div class="column column-33">
            <label for="age">Age</label>
            <input type="text" id="age" name="age" placeholder="Age" >
        </div>
    </div>
    <div class="row">        
        <div class="column column-33">
            <label for="trade">Occupation</label>
            <input type="text" name="trade" id="trade" placeholder="Type your occupation" >
        </div>
        <div class="column column-33">
            <label for="bname">Office Name</label>
            <input type="text" name="bname" id="bname" placeholder="Your Branch Name" >
        </div>
        <div class="column column-33">
            <label for="slen">Service Length</label>
            <input type="text" id="slen" name="slen" >
        </div>
    </div>
    <!-- <div class="row">
        <div class="column column-33">
            <label for="edate">Date of Enroll</label>
            <input type="date" id="edate" name="edate" >
        </div>
        <div class="column column-33">
            <label for="rdate">Date of Returned</label>
            <input type="date" id="rdate" name="rdate" >
        </div>
    </div> -->
    
    <button type="submit" class="button-primary" name="submit">Submit</button>

</form>