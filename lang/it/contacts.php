<?php include_once('header.php'); ?>

    <main>
        <section class="contacts">
            <article class="contacts_map">  
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9090.924109668162!2d144.9554202344983!3d-37.807046958631474!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642ccdc6aaaab%3A0x2173400951f0012c!2sLevel%203%2F551%20Swanston%20St%2C%20Carlton%20VIC%203053%2C%20Australia!5e0!3m2!1sen!2sca!4v1667645036664!5m2!1sen!2sca"
                 width="100%" 
                 height="100%" 
                 zoom="5"
                 style="border:0;" 
                 allowfullscreen="" 
                 loading="lazy" 
                 referrerpolicy="no-referrer-when-downgrade"></iframe>
            </article>
            <article class="contacts_details">
                <div class="contacts_details-item card_purple">
                    <div class="card_purple-image">
                        <img src="../../img/contacts/1.svg" alt="">
                    </div>
                    <div class="card_purple-text">
                        <h3>Un vestito</h3>
                        <p>Swanston Street, Carlton VIC 3053, Australia
                        </p>
                    </div>
                </div>  
                <div class="contacts_details-item card_purple">
                    <div class="card_purple-image">
                        <img src="../../img/contacts/2.svg" alt="">
                    </div>
                    <div class="card_purple-text">
                        <h3>E-mail</h3>
                        <p>hello@company.com 
                            PER RICHIESTE PUBBLICHE
                        </p>
                    </div>
                </div>  
                <div class="contacts_details-item card_purple">
                    <div class="card_purple-image">
                        <img src="../../img/contacts/3.svg" alt="">
                    </div>
                    <div class="card_purple-text">
                        <h3>Telefono 
                        </h3>
                        <p>(888)234-5686 
                             LUN – VEN, 9:00 – 17:00
                        </p>
                    </div>
                </div>  
                
            </article>
        </section>
        
        <section class="main_form repeated_2">
            <div class="repeated_2_left">
                <div class="repeated_2_left-text">
                    <p>Domande?</p>
                    <h2>Contattaci
                    </h2>
                </div>
            </div>
            <div class="repeated_2_right">
                <form action="https://client.techsolution.club/signup" class="repeated_2_form">
                    <input type="text" placeholder="Nome" class="input_white" >
                    <input type="text" placeholder="Cognome" class="input_white" >
                    <input type="text" placeholder="Email" class="input_white" >
                    <input type="text" placeholder="Telefono" class="input_white" >
                    <!-- <div class="main_form-button"> -->
                        <button class="button_black">Inviare</button>
                    <!-- </div> -->
                </form>
            </div>
        </section>
    </main>
<?php include_once('footer.php'); ?>
