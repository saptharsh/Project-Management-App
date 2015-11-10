<h4><?php echo $this->welcomeMsg; ?></h4>

<form method="post" action="?run">
    <div class="row">
        <div class="large-6 columns">
            <label>Project Name</label>
                <input type="text" name="projname"/>
        </div>
        
        <div class="large-6 columns">
            <label>Departments involved in the development</label>
                <select name="names">
                    <option value="" selected>Select One/More</option>
                    <option value="sharanya_ramakrishnan">Service Enrollment</option>
                    <option value="prateek_gowda">Service Management</option>
                    <option value="suresh_hegde">Marketing</option>
                    <option value="chaitanya_sundar ">Testing</option>
                    <option value="chaitanya_sundar ">ETL</option>
                    <option value="chaitanya_sundar ">Professional Services</option>
                    <option value="chaitanya_sundar ">Access point</option>
                </select>
        </div>
        
        
        
        <div class="large-6 columns">
            <label>Project Number</label>
                <input type="text" name="proj_num"/>
        </div>
        
        <div class="large-6 columns">
            <label>Project Start Date</label>
            <input type="date" name="proj_start" required/>
        </div>
        
        <div class="large-6 columns">
            <label>Offshore team needed? </label>
                <input type="radio" name="offshore" value="yes" id="offshoreYes"><label for="offshoreYes">Yes</label>
                <input type="radio" name="offshore" value="no" id="offshoreNo"><label for="offshoreNo">No</label>
        </div>
        
        <div class="large-6 columns">
            <label>Production support needed? </label>
                <input type="radio" name="offshore" value="yes" id="offshoreYes"><label for="offshoreYes">Yes</label>
                <input type="radio" name="offshore" value="no" id="offshoreNo"><label for="offshoreNo">No</label>
        </div>

        <div class="large-6 columns">
            <label>Offshore Team Lead</label>
                <select name="names">
                    <option value="" selected>Select One</option>
                    <option value="ryan_doe">Ryan Doe</option>
                    <option value="jim_soldfield">Jim Soldfield</option>
                    <option value="Shankar">Shankar</option>
                </select>
        </div>
        
        <div class="large-6 columns">
            <label>Offshore Team members</label>
                <select name="names">
                    <option value="" selected>Select One/More</option>
                    <option value="sharanya_ramakrishnan">Sharanaya Ramakrishnan</option>
                    <option value="prateek_gowda">Prateek Gowda</option>
                    <option value="suresh_hegde">Suresh Hegde</option>
                    <option value="chaitanya_sundar ">Chaitanya Sundar</option>
                </select>
        </div>
        
        
        
        <div class="large-6 columns">
            <label>Project Tech Lead</label>
                <select name="names">
                    <option value="" selected>Select One</option>
                    <option value="jessica_tim">Jessica Tim</option>
                    <option value="d_anne">D Anne</option>
                    <option value="venugoapl">Venugopal</option>
                </select>
        </div>
        
        
        <div class="large-6 columns">
            <label>Onshore Team members</label>
                <select name="names">
                    <option value="" selected>Select One/More</option>
                    <option value="ravi_hegde">Ravi Hegde</option>
                    <option value="jack_doe">Jack Doe</option>
                    <option value="jack_symphony">Joe Symphony</option>
                    <option value="eric_modem">Eric Modem</option>
                    <option value="john_cobb">John Cobb</option>
                </select>
        </div>

        <div class="large-6 columns">
            <label>Project Duration</label>
            <input type="text" name="proj_dur"/>
        </div>
        
        <div class="large-6 columns">
            <label>Team strength (<span style="color: green; font-weight: bold;">In number</span>)</label>
                <input type="text" name="team_count"/>
        </div>




        
        
        
        

    </div>



    <div class="row">
        <div class="large-4 medium-4 columns">
            <label></label>    
            <input type="submit" class="small button" />
        </div>
    </div> 
</form>

<form id="dbInsert" action="<?php echo URL; ?>dashboard/xhrInsert/" method="POST">
    <input type="text" name="textInsert"/>
    <input type="submit" />
</form>

</br>

<div id="showDbInsert">


</div>

