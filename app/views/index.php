
    <h2 class="mb-4">Student List</h2>
    <a href="index.php?page=create" class="btn btn-primary mb-3">+ Add Student</a>
    
    <table class="table table-bordered table-hover">
      <thead class="table-dark">
        <tr>
          <th class="text-center">N<sup>o</sup></th>
          <th>USER-ID</th>
          <th>Name</th>
          <th>Gender</th>
          <th>Telephone</th>
          <th class=" text-center">Actions</th>
        </tr>

      </thead>
      <tbody>

        <?php 
        if(empty($student)){
          echo '<tr>        <td colspan="5" class=" text-center text-danger">Data is empty</td></tr>';
        } else{
          $no = 1;
          foreach($student as $s){
              $id = $s['id'];
              $name = $s['name'];
              $gender = $s['gender'];
              $tel = $s['tel'];
             
              echo <<<HTML
                  <tr>
                    <td class=" text-center">$no</td>
                    <td>USER-ID: $id</td>
                    <td>$name</td>
                    <td>$gender</td>
                    <td>$tel</td>
                    <td class=" text-center">
                      <a href="index.php?page=edit&id={$id}" class="btn btn-sm btn-success">Edit</a>

                      <a href="index.php?page=destroy&id={$id}"
                         class="btn btn-sm btn-danger"
                         onclick="return confirm('Are you sure you want to Delete')"
                         >Delete</a>
                    </td>
                  </tr>
              HTML;

              $no++;
            }

        }

            
        ?>
        
       
      </tbody>
    </table>
  </div>
  
