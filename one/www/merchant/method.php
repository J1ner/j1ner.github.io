<?php
define("access", "yes");
include(__DIR__ . '/../admin/engine/database/connection.php');
$sn = R::load('sitenames', 1);
$amount = $_GET["amount"];
$description = $_GET["item"];

if (!isset($amount)) {
  $amount = 10;
}

if (!isset($description)) {
  $description = "отсутствует";
}

?>

<!doctype html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title><?php echo $sn->pay ?> | Оплата заказа</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <link href="public/styles/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="public/styles/bootstrap-theme.css" rel="stylesheet" type="text/css" media="all" />
                	</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-2">

            </div>

           
            <div class="col-md-8">
                <div class="panel panel-default">
                  <div class="panel-body">
                    <div class="bs-callout bs-callout-danger">
                        <h4><strong>Счет к оплате </strong></h4>
                        <p>Назначение платежа: <?php echo $description; ?></p>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h4 class="text-grey" style="padding-top:17px">Итоговая сумма к оплате:</h4>
                        </div>
                        <div class="col-md-6">
                            <h2 class="text-success pull-right"><strong><?php echo $amount; ?>.00&nbsp;RUB</strong></h2>
                        </div>
                    </div>
					
                    <hr>

                    <div class="row">
                                                                                             <div class="col-md-4 col-sm-6 col-xs-6">
                           <a href="/merchant/?amount=<?php echo $amount; ?>&item=<?php echo $description; ?>" >
                            <div class="panel panel-pay">
                                <div class="panel-body">
                                    <img src="public/images/cardtem.png" class="img-responsive">
                                </div>
                            </div>
                          </a>
                        </div>
                                                                                          <div class="col-md-4 col-sm-6 col-xs-6">
                            <a href="#" data-toggle="modal" data-target="#smsya">
                            <div class="panel panel-pay">
                                
<div class="panel-body">
                               <img src="public/images/qiwi.png" class="img-responsive">
                                </div>
                            </div>
                           </a>
                        </div>
                                            
                                                                                                                                                                                  <div class="col-md-4 col-sm-6 col-xs-6">
                          <a href="#" data-toggle="modal" data-target="#smsya">
                            <div class="panel panel-pay">
                                <div class="panel-body">
                                    <img src="public/images/mobile.png" class="img-responsive">
                                </div>
                            </div>
                          </a>
                        </div>
                                                                                                                                                                                                                             
                                                                                                           </div>
                    <hr>
                    <div class="bs-callout-warning">
                        <p>- Мы не сохраняем и не собираем данные Ваших карт или кошельков.</p>
                        <p>- Оплата производится на защищенной странице платежной системы.</p>
                    </div>
                  </div>
                </div>
            </div>
			

  
  
  
  			<form action="#" method="post" accept-charset="utf-8">
<input type="hidden" name="s" value="2000" />
  <!-- Элекснет VISA -->
  <div class="modal fade" id="smsya">
      <div class="modal-dialog modal-lg" role="document">
           <div class="modal-content">
                <div class="modal-header"> 
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    					      <span aria-hidden="true">&times;</span>
    				      </button>
                  <h5 class="modal-title">Способ оплаты</h5> </div>
                    <div class="modal-body">
                        <div class="row">
                             <div class="col-md-12">
                                  <div class="form-group"> 
                                      <label class="control-label">В настоящее время проводятся технические работы, выберите другой способ оплаты.</label> 
                                    
                                  </div>
                                  <div class="form-group"> 
                                      
                                  </div>
                              </div>
                        </div>
                    </div>
                    <div class="modal-footer"> 
                      <button type="submit" class="btn btn-primary" disabled> Перейти к оплате</button> 
                    </div>
             </div>
              <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->
  </form>
			
			
			
			
			
			
			
			
            <div class="col-md-2">

            </div>
        </div>
    </div>
    <script src="public/js/jquery.min.js"></script>
<script src="public/js/bootstrap.js"></script>

</body>
</html>