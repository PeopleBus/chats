<div id="main" class="container">
    
    <div id="header">
        
        <?php $this->load->view("templates/header"); ?>
        
    </div>
    <div id="holl_content"  >
        <div class="row-fuild">
            <div id="sidebar">
                <?php $this->load->view("templates/sidebar"); ?>
            </div>

            <div id="content">
                <p>Electo-sondage est un site web de sondage prelectorale et postelectorale togolaise...</p>
                <div id="contenu">
                    <?php $this->load->view("templates/voteboxes"); ?>
                </div>
            </div>
        </div>
    </div>
    
    
    <div id="footer">
        
        <?php $this->load->view("templates/footer"); ?>
    </div>

</div>



