<?php
/**
    Template Name: ReviewPage
 */
?>


<?php get_header('flip'); ?>	
		
		<!-- **************search main area**************-->

    
		    <div class="search_main_area">
		        <div class="course_area">
		                <ul>
		                    <li><a href="http://localhost:8888/">Home</a></li>
		                    <li>></li>
		                    <li><a href="#">Add Review</a></li>
		                    <li>></li>
		                    <li><a href="#">Submit</a></li>
		                </ul>
		            </div>
		        <div class="width">
		            <div class="search_main_area_right">
		              <div class="form-style-5">
                 
                     
    
		                <form>
		                   <fieldset>
		                        <label for="job"> What are you reviewing?:</label>
		                            <select id="job" name="field4">
		                                <optgroup label="Victoria University">
		                                    <option value="Courses">Courses</option>
		                                    <option value="Lecturers">Lecturers</option>
		                                    <option value="Flats">Flats</option>
		                                </optgroup>
		                            </select>      
		                    </fieldset>
		                       <fieldset>
		                        <label for="job">Department:</label>
		                            <select id="job" name="field4">
		                                    <option value="Architectural Studies and Building Science">Architectural Studies and Building Science</option>
		                                    <option value="Business">Business</option>
		                                    <option value="Design, Film and Media">Design, Film and Media</option>
		                                    <option value="Education and Teaching">Education and Teaching</option>
		                                    <option value="English Literature and Creative Writing ">English Literature and Creative Writing </option>
		                                    <option value="Engineering and Digital Technologies">Engineering and Digital Technologies</option>
		                                    <option value="Environmental Sciences">Environmental Sciences</option>
		                                    <option value="Health">Health </option>
		                                    <option value="History and Philosophy">History and Philosophy</option>
		                                    <option value="Languages and Linguistics">Languages and Linguistics</option>
		                                    <option value="Law">Law</option>
		                                    <option value="Mathematics and Statistics">Mathematics and Statistics</option>
		                                    <option value="Music and Theatre">Music and Theatre</option>
		                                    <option value="Politics and Public Policy">Politics and Public Policy</option>
		                                    <option value="Psychology">Psychology </option>
		                                    <option value="Science ">Science </option>
		                                    <option value="Social Sciences">Social Sciences</option>
		                            </select>      
		                    </fieldset>
		                     <fieldset>
		                        <label for="job">What is the name of the class?:</label>
                                
		                                <select id="drp"></select>

		                                <h1 id="answer"></h1>
                                  
		                    </fieldset>



		                <fieldset>
		                <label for="job">Workload:</label>
		                     <div class="rating">
		                        <span><input type="radio" name="rating" id="str5" value="5"><label for="str5"></label></span>
		                        <span><input type="radio" name="rating" id="str4" value="4"><label for="str4"></label></span>
		                        <span><input type="radio" name="rating" id="str3" value="3"><label for="str3"></label></span>
		                        <span><input type="radio" name="rating" id="str2" value="2"><label for="str2"></label></span>
		                        <span><input type="radio" name="rating" id="str1" value="1"><label for="str1"></label></span>
		                    </div>
                   
		                </fieldset>

		                 <fieldset>
		                <label for="job">Clarity:</label>
		                     <div class="rating">
		                        <span><input type="radio" name="rating" id="str5" value="5"><label for="str5"></label></span>
		                        <span><input type="radio" name="rating" id="str4" value="4"><label for="str4"></label></span>
		                        <span><input type="radio" name="rating" id="str3" value="3"><label for="str3"></label></span>
		                        <span><input type="radio" name="rating" id="str2" value="2"><label for="str2"></label></span>
		                        <span><input type="radio" name="rating" id="str1" value="1"><label for="str1"></label></span>
		                    </div>
                   
		                </fieldset>

		                 <fieldset>
		                <label for="job">Easiness:</label>
		                     <div class="rating">
		                        <span><input type="radio" name="rating" id="str5" value="5"><label for="str5"></label></span>
		                        <span><input type="radio" name="rating" id="str4" value="4"><label for="str4"></label></span>
		                        <span><input type="radio" name="rating" id="str3" value="3"><label for="str3"></label></span>
		                        <span><input type="radio" name="rating" id="str2" value="2"><label for="str2"></label></span>
		                        <span><input type="radio" name="rating" id="str1" value="1"><label for="str1"></label></span>
		                    </div>
                   
		                </fieldset>

		                 <fieldset>
		                <label for="job">Helpfulness:</label>
		                     <div class="rating">
		                        <span><input type="radio" name="rating" id="str5" value="5"><label for="str5"></label></span>
		                        <span><input type="radio" name="rating" id="str4" value="4"><label for="str4"></label></span>
		                        <span><input type="radio" name="rating" id="str3" value="3"><label for="str3"></label></span>
		                        <span><input type="radio" name="rating" id="str2" value="2"><label for="str2"></label></span>
		                        <span><input type="radio" name="rating" id="str1" value="1"><label for="str1"></label></span>
		                    </div>
                   
		                </fieldset>
		                <a href = "search.html">
		            <input type="submit" value="Submit" />
		                </a>
		        </form>
                    
		                </div>
		            </div>
		        </div>
		    </div>

<?php get_footer('flip'); ?>
