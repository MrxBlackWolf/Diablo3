<div id="kontakt">
    <h2>Kontakt</h2>
	<div id="forma" >
            <h4>Posaljite nam poruku!</h4>    
            <?php if(isset($nesto)) echo $nesto; ?>    
            <div id="contact_form">	

                    <?php 
                        echo form_open($base_url.'glavni/kontakt', $kontakt_forma); 
                        
                         echo form_label('Name: ','kontakt_ime'); 
                         echo form_input($kontakt_ime);
                         echo '<br/>';
                         echo form_label('Subject: ','kontakt_predmet'); 
                         echo form_input($kontakt_predmet);
                         echo '<br/>';
                         echo form_label('Message: ','kontakt_poruka');
                         echo form_textarea($kontakt_poruka);
                         echo '<br/>';
                         echo form_submit($kontakt_posalji); 
                         echo form_reset($kontakt_reset);
                        
                     echo form_close(); 
                     ?>
                </div>
            
	</div>      
</div>


