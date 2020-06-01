

						<div class="widget">	
						<h2>Modify search</h2>
						<div class="inner">
						<form action="searched.php" method="post">
						<input type="radio" value="1" name="radio" checked="checked" id="radio1"></input>
						<label for="radio1">round trip</label>
						<input type="radio" value="2" name="radio" id="radio2" ></input>
						<label for="radio2">one way</label>
						<div>
					
							<select id="cmbMake name="Make"     onchange="document.getElementById('selected_text').value=this.options[this.selectedIndex].text">
									<option value="0" disabled="disabled" selected="selected" id="place">Leaving from...</option>
									<option value="1">Delhi</option>
									<option value="2">Bangalore</option>
									<option value="3">Kabul</option>
									<option value="4">Kathmandu</option>
									<option value="5">Kalkata</option>
									<option value="6">Mumbai</option>
							</select>
							<select id="cmbMake" name="Make1"     onchange="document.getElementById('selected_text1').value=this.options[this.selectedIndex].text">
									<option value="0" disabled="disabled" selected="selected" id="place">Going to...</option>
									<option value="1">Delhi</option>
									<option value="2">Bangalore</option>
									<option value="3">Kabul</option>
									<option value="4">Kathmandu</option>
									<option value="5">Kalkata</option>
									<option value="6">Mumbai</option>
							</select>
						
						</div>
						
						<p>Depart date: <input type="text" name="depart_date"  id="datepicker" /></p>
						<p>Return date: <input type="text" name="return_date"  id="datepicker1" /></p>
						<div>
							<select>
										
										<option>1 Adult</option>
										<option>2 Adult</option>
										<option>3 Adult</option>
										<option>4 Adult</option>
										<option>5 Adult</option>
										
							</select>
							<select>
										<option>0 Children</option>
										<option>1 Children</option>
										<option>2 Children</option>
										<option>3 Children</option>
										<option>4 Children</option>
										
							</select>
							<select>
										<option>0 Infant</option>
										<option>1 Infant</option>
										<option>2 Infant</option>
										<option>3 Infant</option>
										<option>4 Infant</option>
										
							</select>
							
						
						</div>
						<input type="hidden" name="selected_text" id="selected_text" value="" />
						<input type="hidden" name="selected_text1" id="selected_text1" value="" />
					
						<input type="submit" name="search" value="Search Flights"/>
						
						</form>
						</div>
					    </div>
				
