
<!-- 
This PHP code snippet generates an 
HTML table for collecting educational background information. 
It contains two input fields: one for education details and another for professional skills. 
The table is divided into two columns, with labels on the left and input fields on the right. -->

<table style="width: 100%;" cellspacing="0" cellpadding="0">
	<tbody>
		<tr>
			<td align="left">
				<div class="form_tab">
					Educational Background
				</div>
				<fieldset>
					<center>
						<table cellspacing="6" cellpadding="4" width="100%">
							<tbody>
								<tr>
									<td>
										Education (Degrre/College/School/Year Graduated/Honors)
									</td>

									<td align="left" width="55%">
										<input type = "text" name="education">
									</td>
								</tr>
								<tr>
									<td align="right" width="45%" >
										Professional Skills :
									</td>

									<td align="left" width="55%">
										<input name="pskills" type="text" maxlength="46" required>
									</td>
								</tr>
							</tbody>
						</table>
					</center>
				</fieldset>
			</td>
		</tr>
	</tbody>
</table>