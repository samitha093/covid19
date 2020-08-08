<?php
require_once("includes/header.php");
require_once("includes/sidebar.php");
?>

<?php   
    $data = file_get_contents("data.json");  
    $data = json_decode($data,true);  
?>  

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                         
                            <Img src="unnamed.png">
                            
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="card">


                            <div class="header">
                                <h4 class="title">Covid Post in Sri lanka</h4>
                            </div>
                            <div class="content">

                            <h4 class="title">Exchange Rate</h4>
                            <ul class="item">
                                <li class="item-box">Buying  
                                <?php 
                                foreach($data as $adata){ 
                                    foreach($adata as $bdata){
                                        echo $bdata["Buying"];  
                                    }      
                                }  
                                ?>
                                </li>
                                <li class="item-box">Selling
                                <?php 
                                foreach($data as $adata){ 
                                    foreach($adata as $bdata){
                                        echo $bdata["Selling"];  
                                    }      
                                }  
                                ?>  
                                </li>
                            </ul>

                            <h4 class="title">Liquidity</h4>
                            <ul class="item">
                                <li class="item-box">Liquidity 
                                <?php 
                                foreach($data as $adata){  
                                    echo $adata["Liquidity"];   
                                }  
                                ?> 
                                </li>
                            </ul>

                            <h4 class="title">Tab 2</h4>
                            <ul class="item">
                                <li class="item-box">Exports Gross Value
                                <?php 
                                foreach($data as $adata){  
                                    echo $adata["Exports Gross Value"];   
                                }  
                                ?>  
                                </li>
                            </ul>
                            <ul class="item">
                                <li class="item-box">Imports Gross Value 
                                <?php 
                                foreach($data as $adata){  
                                    echo $adata["Imports Gross Value"];   
                                }  
                                ?>   
                                </li>
                            </ul>

                            <h4 class="title">Tab 3</h4>
                            <ul class="item">
                                <li class="item-box">Local Quantity 
                                <?php 
                                foreach($data as $adata){  
                                    echo $adata["Local Quantity"];   
                                }  
                                ?>   
                                </li>
                            </ul>
                            <ul class="item">
                                <li class="item-box">Foreign Quantity
                                <?php 
                                foreach($data as $adata){  
                                    echo $adata["Foreign Quantity"];   
                                }  
                                ?>   
                                </li>
                            </ul>

                            <h4 class="title">Tab 4</h4>
                            <ul class="item">
                                <li class="item-box">Remittance GDP Change
                                <?php 
                                foreach($data as $adata){  
                                    echo $adata["Remittance GDP Change"];   
                                }  
                                ?>  
                                </li>
                            </ul>

                            <h4 class="title">Tab 5</h4>
                            <ul class="item">
                                <li class="item-box">Apparel Exports
                                <?php 
                                foreach($data as $adata){  
                                    echo $adata["Apparel Exports"];   
                                }  
                                ?>  
                                </li>
                            </ul>

                       

                                <div class="footer">
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-history"></i> Updated 3 minutes ago
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>

                </div>
            </div>
        </div>



               

<?php
require_once("includes/footer.php");
?>
