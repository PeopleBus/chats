<ul class="thumbnails">

    <div class="accordion" id="accordion2">

        <?php
//        $percent = 0;
//        if ($total_all_vote > 0) {
//            $percent = ($candidate->total_vote / $total_all_vote) * 100;
//        } else {
//            $percent = 0;
//        }
        ?>

        <?php
        foreach ($all_candidates->result() as $candidate) {
            ?>

            <li class="span3">
                <div class="thumbnail">

                    <div class="accordion-heading">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse<?php echo '' . $candidate->id; ?>">
                            <img src="<?php echo img_url($candidate->photoname); ?>" class="img-rounded" height="200px" width="300px">
                            <!--</a>-->
                            <h3><?php echo '' . $candidate->firstname . ' ' . $candidate->lastname; ?></h3>
                            <!--<br />-->
                            <p>Total de votes : <?php echo '' . $candidate->total_vote; ?></p>
                            <?php
                            $percent = 0;
                            if ($total_all_vote > 0) {
                                $percent = ($candidate->total_vote / $total_all_vote) * 100;
                            } else {
                                $percent = 0;
                            }
                            ?>
                            <p>Pourcentages de votes : <?php echo '' . $percent . '%'; ?></p>
                        </a>
                    </div>

                    <div id="collapse<?php echo '' . $candidate->id; ?>" class="accordion-body collapse">
                        <div class="accordion-inner">
                            <?php echo '' . $candidate->history; ?>

<!--                            <form class="form-horizontal form-actions" method="post" action="">
                                <fieldset>
                                    <legend>Inscrivez-vous</legend>
                                    <div class="control-group">
                                        <label class="control-label" for="nom">Nom</label>
                                        <div class="controls">
                                            <input type="text" id="nom" name="nom" value="<?php // echo set_value('nom'); ?>" placeholder="Entrez votre nom">
                                        </div>
                                        <?php // echo form_error('nom'); ?>
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label" for="prenom">Prenom</label>
                                        <div class="controls">
                                            <input type="text" id="prenom" name="prenom" value="<?php // echo set_value('prenom'); ?>" placeholder="Entrez votre prenom">
                                        </div>
                                        <?php // echo form_error('prenom'); ?>
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label" for="comment">Commentaire</label>
                                        <div class="controls">
                                            <input type="text" id="prenom" name="prenom" value="<?php // echo set_value('prenom');  ?>" placeholder="Entrez votre prenom">
                                            <textarea value="<?php // echo set_value(''); ?>" placeholder="Pourquoi votez pour ce candidat ?"></textarea>
                                        </div>
                                        <?php // echo form_error('comment'); ?>
                                    </div>


                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-primary">S'inscrire</button>
                                    </div>
                                </fieldset>
                            </form>-->
                        </div>
                    </div>

                </div>
            </li>

            <?php
        }
        ?>
    </div>
</ul>
