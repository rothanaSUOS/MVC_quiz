
<div id="users">
    <div class="col-md-12">
        <div class="pull-left">
            <input class="search" placeholder="Search" />
            
        </div>
        
        <div class="pull-right">
            <a href="index.php?action=add"><i class="glyphicon glyphicon-plus-sign" style="font-size:20px;"></i></a> &nbsp;
        </div>
    </div>
    <form action="employee.php" method="POST">
        <table class="table-bordered col-md-12">
            <th class="sort text-center">ID</th>
            <th class="sort text-center" data-sort="fname">Name</th>
            <th class="sort text-center" data-sort="age">Username</th>
            <th class="sort text-center" data-sort="salary">Password</th>
            <th class="sort text-center">Action</th>
            <!-- IMPORTANT, class="list" have to be at tbody -->
            <tbody class="list">
            <?php
                $i=1;
                
                foreach( $data['user_data']  as $rows){
                
                ?>
            
                <tr>
                    <td><?php echo $i; ?> </td>
                    <td><?php echo $rows['name'];?></td>
                    <td><?php echo $rows['username']; ?></td>
                    <td><?php echo MD5($rows['password']); ?></td>
                    <td>
                          <a href="index.php?action=create_users"><i class="glyphicon glyphicon-plus-sign" style="font-size:20px;"></i></a>
                          <a href="index.php?action=delete_user&id=<?php echo $rows['id'] ?>"><i class="glyphicon glyphicon-trash" style="font-size:20px;"></i></a>
                          <a href="index.php?action=update_user&id=<?php echo $rows['id'] ?>"><i class="glyphicon glyphicon-pencil" style="font-size:20px;"></i></a></br>

                    </td>
                </tr>

            <?php 
                 $i++;
                }
            ?>
            
            
            </tbody>

           
        </table>
    </form>
</div>

<script>
    var options = {
        valueNames: ['id', 'fname', 'age', 'salary']
    };

    var userList = new List('users', options);
</script>
