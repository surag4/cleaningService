<article>
    <table>
        <?php ?>
        <tr><th>Customer Name</th><th>Customer Query</th><th>Customer e-mail</th><th>Customer Phone No.</th><th>Requested On:</th><th>Looked by:</th></tr>
        <?php 
        foreach($allData as $values){
            echo "<tr><td>".$values['custName']."</td><td>".$values['custQues']."</td><td><a href='mailto:".$values['custEmail']."'>".$values['custEmail']."</a></td><td>".$values['custNum']."</td><td>".$values['requestedDate']."</td><td>";
            if($values['staffId']=="NotAssigned"){
                echo "<a href=index.php?page=customersupport&assign=".$values['cntFormID'].">Handle</a></td></tr>";
            }
            else {
                echo $values['staffId'];
            }
        }
        ?>
    </table>
</article>
