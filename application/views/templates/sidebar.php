<?php // $this->load->view("templates/voteboxes",$data);       ?>
<p>sidebar</p>
<ul class="thumbnails">
    <?php
    $i = 1;
    foreach ($all_candidate_by_total_votes->result() as $candidate) {
        ?>

        <!--<ul class="thumbnails">-->
        <li class="span3">
            <div class="thumbnail">
    <!--                <img data-src="holder.js/300x200" alt="">-->
                <img src="<?php echo base_url() . 'assets/images/' . $candidate->photoname; ?>" class="img-rounded">
                <h4> <?php 
                if($candidate->total_vote > 0){
                    echo 'Position N° ' . $i;
                }  else {
                    echo 'Position N° 0';
                }
                 ?>
                
                </h4>
                <!--<p>Thumbnail caption...</p>-->
            </div>
        </li>
        <!--    </ul>-->
        <!--    <p>
                <a>
                <img src="<?php // echo base_url() . 'assets/images/' . $candidate->photoname;  ?>" class="img-circle" height="120px" width="120px">
                </a>
            </p>-->

        <?php
        $i += 1;
    }
    ?>
</ul>
