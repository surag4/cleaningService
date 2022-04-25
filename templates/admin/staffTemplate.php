<article class="stafflist">
    <div class="add">
        <p> LIST OF STAFF </p>
        <?php if(isset($_SESSION['login']) && $_SESSION['login'] == 1 && $_SESSION['role'] == "admin"){ ?>
            <form method="post" action="index.php?page=registerStaff">
                <input type="submit"  value="Add Staff">
            </form>
        <?php } ?>
    </div>
    
    <table id="listStaff">
        <tr><th>First Name</th><th>Last Name</th><th>E-mail Address</th> </tr>

        <?php
        foreach ($data as $value) {
            echo '<tr><td>'.$value['firstName'].'</td><td>'.$value['lastName'].'</td><td>'.$value['email'].'</td></tr>';
        }
        ?>
    </table>

</article>