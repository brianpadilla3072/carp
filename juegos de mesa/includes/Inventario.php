<div class="card rounded p-4  bg-light">
    <?php 
    $inc = include("bd/bd.php");
    if($inc){
        $query = " SELECT * FROM GAME_REVIEWS ";//CONSULTA SQL
        $result = mysqli_query($com,$query);//PASAMOS LA CONECCION LA CONSULTA
        
        if($result){
            while($row = mysqli_fetch_array($result)){
                $ID = $row['ID'];
                $IMG = $row['IMG'];
                $NAME = $row['NAME'];
                $THEMATIC = $row['THEMATIC'];
                $MECHANICAL = $row['MECHANICAL'];
                $TIME = $row['TIME'];
                $ZIZE = $row['ZIZE'];
                $LEVELS = $row['LEVELS'];
                $GAMBLERS = $row['GAMBLERS'];
                $PUBLISHER = $row['PUBLISHER'];
                $DESCRIPTION = $row['DESCRIPTION'];
            ?>
                
             <div class="row p-4 bg-white rounded border m-1">
                    
               <!-- FOTO --> 
                <div class="img col-md-3 "> 

                    <img class="img-fluid img-rounded" src="" alt= "" />
                </div>


                <!-- DETALLES -->
                <div class="cont pr-5 col-md-8 ">

                    <div>
                        <!-- TITULO -->
                        <h1 class="align-top"><?php echo $NAME ?></h1> 
                        <!-- DEscripcion -->
                        <P><?php echo $DESCRIPTION ?></P>

                    </div>   
                </div>
                <div class=" pr-0 col-md-1 ">
                    <h1><?php echo $GAMBLERS?></h1>
                    <H1><?php echo $TIME?></H1>
                </div>
                
            </div>
            <?php
            }
        }else{
            ?>
            <h1>no hay resultados</h1>
            <?php
        }

    }else{
        ?>
        <h1>No se conectola base</h1>
        <?php
    }?>
</div> 