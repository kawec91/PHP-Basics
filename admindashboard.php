<h3>Admin Dashboard</h3>
<div class="h-full">
    <h5 class="text-center">Contact Anfrage</h5>
    <table>
        <tr>
            <th>CONTACT-ID</th>
            <th>VORNAME</th>
            <th>NACHNAME</th>
            <th>EMAIL</th>
            <th>MESSAGE</th>
        </tr>
    </table>
</div>
<!-- 
JavaScript
-->
<script>
    //Connect to table-element
    let myTable = document.getElementsByTagName('table')[0];
    //Empty Array
    let contactReqeusts = [];

    //PHP
    <?php   
            //SQL Syntax
            $sql = "SELECT * FROM contact";
            //Get Results (Rows) from DB
            $result = $dbConn->query($sql);

            //If number of result rows is bigger than 0
            if($result->num_rows > 0)
            {   
                //As long as row isn't null DO echo
                while($row = $result->fetch_assoc())
                {
                    echo "
                    contactReqeusts.push({
                        id : '".$row["id"]."',
                        vname : '".$row["vorname"]."',
                        nname : '".$row["nachname"]."',
                        email : '".$row["email"]."',
                        msg : '".$row["message"]."'
                    });
                    ";
                }
            }
        ?>
        
        //For every item of contactRequests add TR to TABLE
        for(let item of contactReqeusts) {
            myTable.innerHTML += `
                <tr>
                    <td>${item.id}</td>
                    <td>${item.vname}</td>
                    <td>${item.nname}</td>
                    <td>${item.email}</td>
                    <td>${item.msg}</td>
                </tr>
            `
        }
</script>
