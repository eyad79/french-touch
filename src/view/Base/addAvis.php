<?php 

?>

<div class="container container-add-avis">
    <div class=" background-form">
        <h2 class="text-center title-form"> Enregister un Avis </h2>

        <form class="class="contact-form" invoyer-avis" action="" method="post"><br />
            <div class="form-group">
                <!-- <input class="form-control"ctype="text" name="note" placeholder="note"> -->
                <label>Votre Note : </label>
                <select class="no_perssonne" name="note" >

	                <?php for ($i=1 ; $i < 6; $i++) :  ?>
	                	<?php echo "\t",'<option value="', $i ,'">', $i ,'</option>',"\n"; ?>
	                <?php endfor; ?>
                </select>
            </div>
            <div class="form-group">
                <input class="nom form-control" type="text" name="nom" placeholder="nom">
            </div>
            <div class="form-group">
                <input class="form-control" type="date" name="date_avis" >
            </div>
            <div class="form-group">
                <textarea class="form-control" name="content" placeholder="content"></textarea>
            </div>
            <div class="form-group">
<!--                 <input class=" form-control" type="text" name="status" placeholder="status">
 -->            </div>
            <input class="btn btn-success btn-block" type="submit" name="submit" value="Envoyer">
             
        </form>
    </div>
</div>