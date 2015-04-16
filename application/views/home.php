
<div id="main" class="container">

    <div id="header">

        <?php $this->load->view("templates/header"); ?>

    </div>
    <div id="holl_content"  >
        <div class="row-fuild">
            <div id="sidebar">
                <?php
                $data3['all_candidate_by_total_votes'] = $all_candidate_by_total_votes;
                $this->load->view("templates/sidebar", $data3);
                ?>
            </div>

            <div id="content">
                <p>Electo-sondage est un site web de sondage prelectorale et postelectorale togolaise...</p>
                <?php
                $data2['$all_candidates'] = $all_candidates->result();
                $this->load->view("templates/voteboxes", $data2);
                ?>
            </div>

        </div>
    </div>


    <div id="footer">

        <?php $this->load->view("templates/footer"); ?>
    </div>

</div>


