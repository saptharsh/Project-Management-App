<h4><?php echo $this->welcomeMsg; ?></h4>

<form method="post" action="dashboard/projectDetails/">
    <div class="row">
        <div class="large-6 columns">
            <label>Project Name</label>
            <input type="text" name="proj_name"/>
        </div>

        <div class="large-6 columns">
            <label>Departments involved in the development</label>
            <select name="departments[]" multiple>
                <option value="" selected>Select One/More</option>
                <option value="service enrollment">Service Enrollment</option>
                <option value="service management">Service Management</option>
                <option value="marketing">Marketing</option>
                <option value="testing">Testing</option>
                <option value="etl">ETL</option>
                <option value="professional services">Professional Services</option>
                <option value="access point">Access point</option>
            </select>
        </div>

        <div class="large-6 columns">
            <label>Project Number</label>
            <input type="text" name="proj_num"/>
        </div>

        <div class="large-6 columns">
            <label>Project Start Date</label>
            <input type="date" name="proj_start" />
        </div>

        <div class="large-6 columns">
            <label>Offshore team needed? </label>
            <input type="radio" name="offshore" value="yes" id="offshoreYes"><label for="offshoreYes">Yes</label>
            <input type="radio" name="offshore" value="no" id="offshoreNo"><label for="offshoreNo">No</label>
        </div>

        <div class="large-6 columns">
            <label>Production support needed? </label>
            <input type="radio" name="prod_support" value="yes" id="offshoreYes"><label for="offshoreYes">Yes</label>
            <input type="radio" name="prod_support" value="no" id="offshoreNo"><label for="offshoreNo">No</label>
        </div>

        <div class="large-6 columns">
            <label>Offshore Team Lead</label>
            <select name="offshore_lead">
                <option value="" selected>Select One</option>
                <option value="ryan doe">Ryan Doe</option>
                <option value="jim soldfield">Jim Soldfield</option>
                <option value="shankar">Shankar</option>
            </select>
        </div>

        <div class="large-6 columns">
            <label>Offshore Team members</label>
            <select name="offshore_team[]" multiple>
                <option value="" selected>Select One/More</option>
                <option value="sharanya ramakrishnan">Sharanaya Ramakrishnan</option>
                <option value="prateek gowda">Prateek Gowda</option>
                <option value="suresh hegde">Suresh Hegde</option>
                <option value="chaitanya sundar">Chaitanya Sundar</option>
            </select>
        </div>

        <div class="large-6 columns">
            <label>Project Tech Lead</label>
            <select name="proj_lead">
                <option value="" selected>Select One</option>
                <option value="jessica tim">Jessica Tim</option>
                <option value="d anne">D Anne</option>
                <option value="venugoapl">Venugopal</option>
            </select>
        </div>

        <div class="large-6 columns">
            <label>Onshore Team members</label>
            <select name="onshore_team[]" multiple>
                <option value="" selected>Select One/More</option>
                <option value="ravi hegde">Ravi Hegde</option>
                <option value="jack doe">Jack Doe</option>
                <option value="jack symphony">Joe Symphony</option>
                <option value="eric modem">Eric Modem</option>
                <option value="john cobb">John Cobb</option>
            </select>
        </div>

        <div class="large-6 columns">
            <label>Project Max Duration</label>
            <input type="text" name="proj_dur"/>
        </div>

        <div class="large-6 columns">
            <label>Project End Date (<span style="color: green; font-weight: bold;">Worst Case</span>)</label>
            <input type="date" name="end_date"/>
        </div>

    </div>

    <div class="row">
        <div class="large-4 medium-4 columns">
            <label></label>    
            <input type="submit" class="small button" />
        </div>
    </div> 
</form>
<!-- Form for creating project details is working -->


<!--  Table  -->
<div class="row">
    <div class="large-12 columns">
        <table class="table-striped table-bordered">
            <thead>
                <tr>
                    <th width="100">Project #</th>
                    <th width="150">Project lead</th>
                    
                    <th width="150">Offshore lead</th>
                    
                    <th width="100">Start</th>
                    <th width="100">End</th>
                    <th width="100">Status</th>
                    
                    <th width="200">Road Block</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><a href="projects/getproject/1">PR8239</a></td>
                    <td>Shankar Krishna</td>
                    <td>Sharanya Ramakrishnan</td>
                    <td>06/07/2016</td>
                    <td>12/07/2016</td>
                    <td>
                        <div data-alert class="alert-box success radius">25%</div>
                    </td>
                    <td>Issue with the Hook for sending notifications</td>
                </tr>
                <tr>
                    <td><a href="contact.php">PR2249</a></td>
                    <td>Jessica Rialino</td>
                    <td>Venu Gopal</td>
                    <td>02/04/2016</td>
                    <td>012/04/2016</td>
                    <td>
                        <div data-alert class="alert-box warning radius">77%</div>
                    </td>
                    <td>Testing issue with the alerts</td>
                </tr>
                
            </tbody>
        </table>
    </div>

</div>
<!-- Table End -->


<!-- Edit Button -->
<a href="#" class="button tiny" data-reveal-id = "editModal<?php //echo $contact->contactid;  ?>">Edit</a>

<div id="editModal<?php //echo $contact->contactid;  ?>" class="reveal-modal editModel" 
     data-reveal>
    <!-- After submitting the Edit-Form, we need to close all the id's
        which would have been difficult. Hence a class is assigned to the 
        Div, which we can close using JS after submission of the Form -->
    <h2>Edit Contact</h2>
    <form id="editContact" action="#" method="POST">
        <div class="row">
            <div class="large-6 columns">
                <label>First Name
                    <input name="first_name" type="text" placeholder="Enter First Name" value="<?php //echo $contact->first_name;  ?>" />
                </label>
            </div>
            <div class="large-6 columns">
                <label>Last Name
                    <input name="last_name" type="text" placeholder="Enter Last Name" value="<?php //echo $contact->last_name;  ?>" />
                </label>
            </div>
        </div>
        <div class="row">
            <div class="large-4 columns">
                <label>Email
                    <input name="email" type="email" placeholder="Enter Email Address" value="<?php //echo $contact->email;  ?>" />
                </label>
            </div>
            <div class="large-4 columns">
                <label>Phone Number
                    <input name="phone" type="text" placeholder="Enter Phone Number" value="<?php //echo $contact->phone;  ?>" />
                </label>
            </div>
            <div class="large-4 columns">
                <label>Contact Group
                    <select name="contact_group">
                        <option value="Family" <?php //echo $contact->contact_group == 'Family' ? 'selected' : '';  ?>>Family</option>
                        <option value="Friends" <?php //echo $contact->contact_group == 'Friends' ? 'selected' : '';  ?>>Friends</option>
                        <option value="Business" <?php //echo $contact->contact_group == 'Business' ? 'selected' : '';  ?>>Business</option>
                    </select>
                </label>
            </div>
        </div>
        <div class="row">
            <div class="large-6 columns">
                <label>Address 1
                    <input name="address1" type="text" placeholder="Enter Address 1" value="<?php //echo $contact->address1;  ?>" />
                </label>
            </div>
            <div class="large-6 columns">
                <label>Address 2
                    <input name="address2" type="text" placeholder="Enter Address 2" value="<?php //echo $contact->address2;  ?>" />
                </label>
            </div>
        </div>
        <div class="row">
            <div class="large-4 columns">
                <label>City
                    <input name="city" type="text" placeholder="Enter City" value="<?php //echo $contact->city;  ?>" />
                </label>
            </div>
            <div class="large-4 columns">
                <label>State
                    <select name="state">
                        <?php //foreach ($states as $key => $value) : ?>
                        <?php //($key == $contact->state) ? $selected = 'selected' : $selected = ''; ?>

                        <option value="<?php //echo $key;  ?>" <?php //echo $selected;  ?>><?php //echo $value;  ?></option>
                        <?php //endforeach; ?>
                    </select>
                </label>
            </div>
            <div class="large-4 columns">
                <label>Zipcode
                    <input name="zipcode" type="text" placeholder="Enter Zipcode" value="<?php //echo $contact->zipcode;  ?>" />
                </label>
            </div>
        </div>

        <!-- Important -->
        <input type="hidden" name="id" value="<?php //echo $contact->contactid;  ?>" />

        <input name="submit" type="submit" class="add-btn button right small" value="Submit">
        <a class="close-reveal-modal">&#215;</a>
    </form>

</div>
<!-- End of Edit Model........................................ -->



<hr/>
<form id="dbInsert" action="<?php echo URL; ?>dashboard/xhrInsert/" method="POST">
    <input type="text" name="textInsert"/>
    <input type="submit" />
</form>

</br>

<div id="showDbInsert">


</div>

