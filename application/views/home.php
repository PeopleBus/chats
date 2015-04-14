<?php // $this->load->view("templates/voteboxes",$data);   ?>

<ul class="thumbnails">

    <div class="accordion" id="accordion2">

        <?php
        foreach ($all_candidates->result() as $candidate) {
            ?>

            <li class="span3">
                <div class="thumbnail">

                    <div class="accordion-heading">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse<?php echo '' . $candidate->id; ?>">
                            <img src="<?php echo base_url() . 'assets/images/' . $candidate->photoname; ?>" class="img-rounded" height="200px" width="300px">
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
                            <br /><br />
                            <form class="" method="post" action="">
                                <fieldset>
                                    <!--<legend>Inscrivez-vous</legend>-->
                                    <!--<div class="control-group">-->
                                        <label class="control-label" for="nom">Nom</label>
                                        <div class="controls">
                                            <input type="text" id="nom" name="nom" value="" placeholder="Entrez votre nom">
                                        </div>
                                    <!--</div>-->

<!--                                    <div class="control-group">
                                        <label class="control-label" for="prenom">Prenom</label>
                                        <div class="controls">
                                            <input type="text" id="prenom" name="prenom" value="" placeholder="Entrez votre prenom">
                                        </div>
                                    </div>-->

                                    <!--<div class="control-group">-->
                                        <label class="control-label" for="comment">Commentaire</label>
                                        <div class="controls">
                                            <!--<input type="text" id="prenom" name="prenom" value="" placeholder="Entrez votre prenom">-->
                                            <textarea value="" placeholder="Pourquoi votez pour ce candidat ?"></textarea>
                                        </div>
                                    <!--</div>-->

<!--                                    <div class="control-group">-->
                                        
                                        <div class="">
                                            <label class="" for="diaspora">Diaspora</label>
                                            <input type="checkbox" name="diaspora" id="diaspora" value="Diasporaz" checked/>
                                            
                                        </div>
                                    <!--</div>-->


                                    <div class="">
                                        <button type="submit" class="btn btn-primary">Voter</button>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>

                </div>
            </li>

            <?php
        }
        ?>
    </div>
</ul>
