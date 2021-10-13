
<div class = "content">
    <div class="container-fluid">
   
        <div class="row">
            <?php
                //print_r($user); //antes de usar foreach   
                // foreach ($us as $value) {
                            
                //     print($value['DAP_NOMBRES']);
                    
                // }
            ?>

            <div class="card-body table-responsive">
                <table class="table table-hover">
                    <thead class="text-warning">
                        <th>#</th>
                        <th>Usuario</th>
                        <th>Nombres</th>
                        <th>Correo</th>
                    </thead>
                    <tbody>
                        <?php                            

                            $cont = 1;

                            foreach ($us as $value) {
                                print("<tr>");
                                print("<td>".$cont."</td> <td>".$value['USU_USUARIO']."</td> <td>".$value['DAP_NOMBRES']."</td> <td>".$value['DAP_CORREO']."</td>");                               
                                print("</tr>");
                                $cont++;
                                
                            }
                        ?>

                    </tbody>
                </table>
            </div>        

        </div>

    </div>

</div>