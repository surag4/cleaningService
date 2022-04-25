<section>
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.1926041030797!2d85.32267541476456!3d27.711338931924047!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19fef34f29d1%3A0xa534a16d2d9bfc8f!2sIslington%20college!5e0!3m2!1sen!2sau!4v1644844665807!5m2!1sen!2sau" width="100%" height="300px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
    
    <div class="contact-pg-cnts">
        <form action="index.php?page=contact" class="contact-pg" method="POST">     
            <div class="contact-form">
                <span>Please send us a message!</span>
                <label for="name"> Name</label>
                <input type="hidden" name="staffId" value="NotAssigned">
                <input type="text" id="name" placeholder="Full Name" name="custName" required>
                
                <label for="email"> Email</label>
                <input type="email" id="email" placeholder="someone@mail.com" name="custEmail" required>

                <div class="cntnum">
                    <label for="number"> Contact Number</label>
                    <input type="number" id="number" name="custNum" min="1000000" max="9999999999" placeholder="0123456789">
                </div>
                 
                <label for="que"> Question</label>
                <textarea id="que" name="custQues" placeholder="Hi! How can I help you?"></textarea>

                <input type="submit" name="submit" value="Send Us a Message">
            </div>
        </form>

        <div class="contact-det">
            <!-- <span>IIBIT</span>
            <span>Sydney</span>
            <span>NSW 2000</span> -->
        </div>
    </div>
</section>