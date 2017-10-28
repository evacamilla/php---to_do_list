<?php
require ('required/head.php');
if(isset($_GET['message'])){
    echo $_GET['message'];}

?>
......ursäkta designen ja hann inte mer...:)
    <div class="todo">
        <h2>TO DO list</h2>
        <form action="update.php" method="POST">
            <ul>
                <?php
                $keys = array_keys($to_do);

                for($i=0; $i < count($to_do);$i++){
                    global $completed_to_do_list;
                    $title = $to_do[$keys[$i]]['title'];
                    $id = $to_do[$keys[$i]]['id'];
                    $created_by = $to_do[$keys[$i]]['createdBy'];
                    $to_do_list = '';
                    if($to_do[$keys[$i]]['completed'] == 0){?>
                        <li>
                            <input type="checkbox" name="<?=$i?>">
                            <?=$title;?>
                        </li>
                    <?php 
                    } 
                        else if($to_do[$keys[$i]]['completed'] == 1){
                            $completed_to_do_list .= "<li><span class='glyphicon glyphicon-fire' aria-hidden='true'></span>$title</li>";
                        }
                }?>    
                        <li><input type="submit" class="submit" value="BOCKA AV" name="updateSubmit">       
                        <input type="submit" class="submit delete" value="RADERA" name="deleteSubmit"></li>
            
            </ul>  
        </form>
    </div>


    <form action="add.php" class="add" method="POST">        
            <h3>Lägg till ny</h3><br>
            <label for="newToDo">Ny task</label>
            <input type="text" name="newToDo">
            <label for="createdBy">Ditt namn</label>
            <input type="text" name="createdBy">
            <input type="submit" class="addSubmit" value="Lägg till" name="newToDoSubmit">    
    </form>

    <div class="completed">
        <h2>AVKLARADE</h2>
        <ul>
            <?=$completed_to_do_list;?>
        </ul>
    </div>

</main>   
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> 
</body>
</html>
